# Partner API SDK for PHP

## Getting started

Partner APIとの通信は `Pokepay\PartnerAPI` クラスを通じて行います。

```php
$client = new Pokepay\PartnerAPI('./config.ini');
```

設定はINIファイルに記述し、 `Pokepay\PartnerAPI` のコンストラクタにファイルパスを指定します。設定ファイルのパスは環境変数 `POKEPAY_PARTNER_CONFIG_FILE` で指定することもできます。

SDKプロジェクトルートに `config.ini.sample` というファイルがありますのでそれを元に必要な情報を記述してください。特に以下の情報は通信の安全性のため必要な項目です。これらはパートナー契約時にお渡ししているものです。

- `CLIENT_ID`: パートナーAPI クライアントID
- `CLIENT_SECRET`: パートナーAPI クライアント秘密鍵
- `SSL_KEY_FILE`: SSL秘密鍵ファイルパス
- `SSL_CERT_FILE`: SSL証明書ファイルパス

また、この設定ファイルには認証に必要な情報が含まれるため、ファイルの管理・取り扱いに十分注意してください。

## Overview

### APIリクエスト

Partner APIへの通信はリクエストオブジェクトを作り、`Pokepay\PartnerAPI#send` メソッドに渡すことで行われます。リクエストクラスは名前空間 `Pokepay\Request` 以下に定義されています。

たとえば `Pokepay\Request\SendEcho` 送信した内容をそのまま返す処理です。

```php
$request = new Pokepay\Request\SendEcho('hello');

$client->send($request);
//=> array('message' => 'hello')
```

利用可能なAPI操作については [API Operations](#api-operations) で紹介します。

<a name="paging"></a>
### ページング

API操作によっては、大量のデータがある場合に備えてページング処理があります。その処理では以下のようなプロパティを持つレスポンスオブジェクトを返します。

- rows (array): 取得したレコードのオブジェクトの配列
- count (int): 取得したレコード数
- pagination
  - current (int): 現在のページ番号
  - perPage (int): 1ページあたりのレコード数
  - maxPage (int): 最終ページ番号
  - hasPrev (bool): 前のページがあるかどうか
  - hasNext (bool): 後のページがあるかどうか

以下にコード例を示します。

```
$request = new Pokepay\Request\ListTransactions();
$response = $client->send($request);

// 2ページ目があるときは取得する
if ($response->pagination->hasNext) {
    $request = new Pokepay\Request\ListTransactions();
    $request->setPage($response->pagination->current + 1);
    $client->send($request);
}
```

### エラーハンドリング

このSDKでは状況に応じて2種類のExceptionを投げます。

- `Pokepay\Error\ApiConnection`: Partner APIサーバーとの通信に失敗したときに発行されます
- `Pokepay\Error\HttpRequest`: Partner APIサーバーがエラーを返したときに発行されます

以下にエラーハンドリングの例を示します。

```php
try {
    $response = $client->send(new Pokepay\Request\ListTransactions());
} catch (Pokepay\Error\ApiConnection $e) {
    // Partner APIとの通信が失敗したときの処理
} catch (Pokepay\Error\HttpRequest $e) {
    // Partner APIがエラーを返したときの処理
}
```

通信が失敗したときにリトライを行う場合には処理が重複して実行されるのを避けるために、新しくリクエストオブジェクトを作るのではなく、同じオブジェクトでリトライ処理を行ってください。

```php
$request = new Pokepay\Request\ListTransactions();
while (true) {
    try {
        $response = $client->send($request);
        echo "ok\n";
        break;
    } catch (Pokepay\Error\ApiConnection $e) {
        echo "Failed to request:\n";
        echo $e . "\n";
        echo "Retry in 3 seconds...\n";
        sleep(3);
    }
}
```

もしリトライの実行をワーカープロセスなどの別プロセスで行う場合は、リクエストの `callId` を記録しておいて再利用してください。

```php
$request = new Pokepay\Request\ListTransactions();

// callId を取得する
$request->getCallId();

// callId を設定する
$request->setCallId($newCallId);
```

<a name="api-operations"></a>
## API Operations

### Transaction

<a name="get-transaction"></a>
#### 取引情報を取得する

```php
$request = new Pokepay\Request\GetTransaction(
    '0ace85e7.....'  // 取引ID
);
```

`ShowTransaction` も使えますが非推奨です。

```php
$request = new Pokepay\Request\ShowTransaction(
    '0ace85e7.....'  // 取引ID
);
```

成功したときは以下のプロパティを含む `Pokepay\Response\Transaction` オブジェクトをレスポンスとして返します。

- id (string): 取引ID
- type (string): 取引種別 (チャージ=topup, 支払い=payment)
- isModified (bool): 返金された取引かどうか
- sender (Response\User): 送金者情報
- receiver (Response\User): 受取者情報
- senderAccount (Response\Account): 送金口座情報
- receiverAccount (Response\Account): 受取口座情報
- amount (double): 決済総額 (マネー額 + ポイント額)
- moneyAmount (double): 決済マネー額
- pointAmount (double): 決済ポイント額
- doneAt (DateTime): 取引日時
- description (string): 取引説明文

`sender` と `receiver` には `Pokepay\Response\User` オブジェクトが入ります。 以下にプロパティを示します。

- id (string): ユーザー (または店舗) ID
- name (string): ユーザー (または店舗) 名
- isMerchant (bool): 店舗ユーザーかどうか

`senderAccount` と `receiverAccount` は `Pokepay\Response\Account` オブジェクトです。以下にプロパティを示します。

- id (string): 口座ID
- name (string): 口座名
- isSuspended (bool): 口座が凍結されているかどうか
- privateMoney (Response\PrivateMoney): 設定マネー情報

`privateMoney` は `Pokepay\Response\PrivateMoney` のオブジェクトです。以下にプロパティを示します。

- id (string): マネーID
- name (string): マネー名
- unit (string): マネー単位 (例: 円)
- isExclusive (bool): 会員制のマネーかどうか
- description (string): マネー説明文
- maxBalance (double): 口座の上限金額
- transferLimit (double): マネーの取引上限額
- type (string): マネー種別 (自家型=own, 第三者型=third-party)
- expirationType (string): 有効期限種別 (チャージ日時起算=static, 最終利用日時起算=last-update)

#### チャージする

```php
$request = new Pokepay\Request\CreateTopupTransaction(
    'xxxxxxxxxxxxxxxxxxxxx',                            // 店舗ID
    'yyyyyyyyyyyyyyyyyyyyy',                            // エンドユーザーのID
    'zzzzzzzzzzzzzzzzzzzzz',                            // 送るマネーのID
    array(
        "money_amount" => 1000,                         // チャージマネー額
        "point_amount" => 0                             // チャージするポイント額 (任意)
        "description" => '初夏のチャージキャンペーン',  // 取引履歴に表示する説明文 (任意)
    )
);
```

成功したときは `Pokepay\Response\Transaction` オブジェクトをレスポンスとして返します。プロパティは [取引情報を取得する](#get-transaction) を参照してください。

#### 支払いする

```php
$request = new Pokepay\Request\CreatePaymentTransaction(
    'xxxxxxxxxxxxxxxxxxxxx',                            // 店舗ID
    'yyyyyyyyyyyyyyyyyyyyy',                            // エンドユーザーID
    'zzzzzzzzzzzzzzzzzzzzz',                            // 支払うマネーのID
    1000,                                               // 支払い額
    array(
        "description" => 'たい焼き(小倉)',              // 取引履歴に表示する説明文 (任意)
    )
);
```

成功したときは `Pokepay\Response\Transaction` オブジェクトをレスポンスとして返します。プロパティは [取引情報を取得する](#get-transaction) を参照してください。

#### チャージ用QRコードを読み取ることでチャージする

チャージ用QRコードを解析すると次のようなURLになります(URLは環境によって異なります)。

`https://www-sandbox.pokepay.jp/checks/xxxxxxxx-xxxx-xxxxxxxxx-xxxxxxxxxxxx`

この `xxxxxxxx-xxxx-xxxxxxxxx-xxxxxxxxxxxx` の部分がチャージ用QRコードのIDです。
これを以下のようにエンドユーザIDと共に渡すことでチャージ取引が作られます。

```php
$request = new Pokepay\Request\CreateTopupTransactionWithCheck(
    'xxxxxxxx-xxxx-xxxxxxxxx-xxxxxxxxxxxx',             // チャージ用QRコードのID
    'yyyyyyyy-yyyy-yyyyyyyyy-yyyyyyyyyyyy',             // エンドユーザーのID
);
```

成功したときは `Pokepay\Response\Transaction` オブジェクトをレスポンスとして返します。プロパティは [取引情報を取得する](#get-transaction) を参照してください。

#### 取引履歴を取得する

```php
$request = new Pokepay\Request\ListTransactions(
    array( // フィルタオプション (すべて任意)
        // 期間指定 (ISO8601形式の文字列、またはDateTimeオブジェクト)
        'from' => '2019-01-01T00:00:00+09:00',
        'to'   => '2019-07-31T18:13:39+09:00',

        // 検索オプション
        'customer_id' => 'xxxxxxxxxxxxxxxxx', // エンドユーザーID
        'customer_name'  => '福沢',           // エンドユーザー名
        'transaction_id' => '24bba30c......', // 取引ID
        'shop_id'        => '456a820b......', // 店舗ID
        'terminal_id'    => 'd8023185......', // 端末ID
        'organization'   => 'pocketchange',   // 組織コード
        'private_money'  => '9ff644fc......', // マネーID
        'is_modified'    => true,             // キャンセルされた取引のみ検索するか
        'types'          => array('topup', 'payment'), // 取引種別 (複数指定可)、チャージ=topup、支払い=payment
    )
);
```

成功したときは `Pokepay\Response\Transaction` を `rows` に含むページングオブジェクトを返します。詳細は [ページング](#paging) を参照してください。

#### 返金する

```php
$request = new Pokepay\Request\RefundTransaction(
    '9f4781d6....', // 取引ID
    array(
        "description" => '返品対応のため' // 取引履歴に表示する返金事由 (任意)
    )
);
```

成功したときは `Pokepay\Response\Transfer` のオブジェクトを返します。以下にプロパティを示します。

- id (string): 送金ID
- sender (Response\User): 送金者情報
- receiver (Response\User): 受取者情報
- senderAccount (Response\Account): 送金口座情報
- receiverAccount (Response\Account): 受取口座情報
- amount (double): 決済総額 (マネー額 + ポイント額)
- moneyAmount (double): 決済マネー額
- pointAmount (double): 決済ポイント額
- doneAt (DateTime): 取引日時
- description (string): 取引説明文

### Customer

#### 新規エンドユーザー口座を追加する

```php
$request = new Pokepay\Request\CreateCustomerAccount(
    '0e0d6a42.....', // マネーID

    // 追加データ (すべて任意)
    array(
        'user_name'    => 'ポケペイ太郎',             // ユーザー名
        'account_name' => 'ポケペイ太郎のアカウント', // アカウント名
    )
);
```

成功したときは以下のプロパティを持つ `Pokepay\Response\AccountWithUser` のオブジェクトをレスポンスとして返します。

- id (string): 口座ID
- name (string): 口座名
- isSuspended (bool): 口座が凍結されているかどうか
- privateMoney (Response\PrivateMoney): 設定マネー情報
- user (Response\User): ユーザーIDなどを含むユーザー情報

#### エンドユーザーの口座情報を表示する

```php
$request = new Pokepay\Request\GetAccount(
    '8653fa08.....', // 口座ID
);
```

成功したときは以下のプロパティを持つ `Pokepay\Response\AccountDetail` のオブジェクトをレスポンスとして返します。

- id (string): 口座ID
- name (string): 口座名
- isSuspended (bool): 口座が凍結されているかどうか
- balance (double): 総残高
- moneyBalance (double): 総マネー残高
- pointBalance (double): 総ポイント残高
- privateMoney (Response\PrivateMoney): 設定マネー情報

#### エンドユーザーの残高内訳を表示する

エンドユーザーの残高は有効期限別のリストとして取得できます。

```php
$request = new Pokepay\Request\ListAccountBalances(
    '8653fa08.....', // 口座ID
);
```

成功したときは `Pokepay\Response\AccountBalance` を `rows` に含むページングオブジェクトを返します。詳細は [ページング](#paging) を参照してください。

`Pokepay\Response\AccountBalance` のプロパティは以下の通りです。

- expiresAt (DateTime): 失効日時
- moneyAmount (double): マネー額
- pointAmount (double): ポイント額

### Organization

#### 新規加盟店組織を追加する

```php
$request = new Pokepay\Request\CreateOrganization(
    'ox_supermarket',                   // 新規組織コード
    '○×スーパー',                        // 新規組織名
    'pay@xx-issuer-company.jp',         // 発行体担当者メールアドレス
    'admin+pokepay@ox-supermarket.com', // 新規組織担当者メールアドレス

    // 精算用追加データ (すべて任意)
    array(
        'bank_name' => 'XYZ銀行',               // 銀行名
        'bank_code' => '999X',                  // 銀行金融機関コード
        'bank_branch_name' => 'ABC支店',         // 銀行支店名
        'bank_banch_code'  => '99X',            // 銀行支店コード
        'bank_account_type' => 'saving',        // 銀行口座種別 (普通=saving, 当座=current, その他=other)
        'bank_account' => '9999999',            // 銀行口座番号
        'bank_account_holder_name' => 'ﾌｸｻﾞﾜﾕｷﾁ', // 口座名義人名
    )
);
```

成功したときには以下のプロパティを持つ `Pokepay\Response\Organization` のオブジェクトをレスポンスとして返します。

- code (string): 組織コード
- name (string): 組織名

### Shop

#### 新規店舗を追加する

```php
$request = new Pokepay\Request\CreateShop(
    '○×スーパー三田店', /* 店舗名 */

    // 追加データ (すべて任意)
    array(
        'shop_postal_code' => '108-0014',                // 店舗の郵便番号
        'shop_address'     => '東京都港区芝...',           // 店舗の住所
        'shop_tel'         => '03-xxxx...',              // 店舗の電話番号
        'shop_email'       => 'mita@ox-supermarket.com', // 店舗のメールアドレス
        'shop_external_id' => 'mita0309',                // 店舗の外部ID
    )
);
```

成功したときは以下のプロパティを持つ `Pokepay\Response\User` のオブジェクトをレスポンスとして返します。

- id (string): 店舗ID
- name (string): 店舗名
- isMerchant (bool): 店舗かどうかのフラグ (この場合は常に真)

### Private Money

#### 決済加盟店の取引サマリを取得する

```php
$request = new Pokepay\Request\GetPrivateMoneyOrganizationSummaries(
    '0e0d6a42.....', // マネーID

    array( // フィルタオプション (すべて任意)
        // 期間指定 (ISO8601形式の文字列、またはDateTimeオブジェクト)
        // fromとtoを指定する場合は同時に指定する必要あり。
        // デフォルトではfromは昨日0時、toは当日0時。
        'from' => '2019-01-01T00:00:00+09:00',
        'to'   => '2019-07-31T18:13:39+09:00',

        // ページングオプション
        'page' => 1,
        'per_page' => 50,
    )
);
```

成功したときは `Pokepay\Response\PrivateMoneyOrganizationSummary` を `rows` に含むページングオブジェクトを返します。以下にプロパティを示します。

- organizationCode (string): 組織コード
- topup (Response\OrganizationSummary): チャージのサマリ情報
- payment (Response\OrganizationSummary): 支払いのサマリ情報

`Pokepay\Response\OrganizationSummary` のプロパティを以下に示します。

- count (integer): 取引数
- moneyAmount (double): 取引マネー総額
- moneyCount (integer): マネー取引数
- pointAmount (double): 取引ポイント総額
- pointCount (integer): ポイント取引数

ページングについての詳細は [ページング](#paging) を参照してください。
