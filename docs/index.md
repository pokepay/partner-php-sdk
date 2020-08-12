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

#### 取引情報を取得する
取引を取得します。
```php
$request = new Request\GetTransaction(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // transactionId: 取引ID
);
```

---
`transaction_id`  
取引IDです。

フィルターとして使われ、指定した取引IDの取引を取得します。

---
成功したときは[Transaction](#transaction)オブジェクトを返します

#### チャージする
チャージ取引を作成します。
```php
$request = new Request\CreateTopupTransaction(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // shopId: 店舗ID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // customerId: エンドユーザーのID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    [
        'bear_point_shop_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // ポイント支払時の負担店舗ID
        'money_amount' => 5913,                   // マネー額
        'point_amount' => 6126,                   // ポイント額
        'description' => "初夏のチャージキャンペーン"          // 取引履歴に表示する説明文
    ]
);
```

---
`shop_id`  
マネー店舗IDです。

送金元の店舗を指定します。

---
`customer_id`  
エンドユーザーIDです。

送金先のエンドユーザーを指定します。

---
`private_money_id`  
マネーIDです。

マネーを指定します。

---
`bear_point_shop_id`  
ポイント支払時の負担店舗IDです。

ポイント支払い時に実際お金を負担する店舗を指定します。

---
`money_amount`  
マネー額です。

送金するマネー額を指定します。

---
`point_amount`  
ポイント額です。

送金するポイント額を指定します。

---
`description`  
取引説明文です。

任意入力で、取引履歴に表示される説明文です。

---
成功したときは[Transaction](#transaction)オブジェクトを返します

#### 支払いする
支払取引を作成します。
```php
$request = new Request\CreatePaymentTransaction(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // shopId: 店舗ID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // customerId: エンドユーザーID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    5721,                                         // amount: 支払い額
    [
        'description' => "たい焼き(小倉)"               // 取引履歴に表示する説明文
    ]
);
```

---
`shop_id`  
マネー店舗IDです。

送金先の店舗を指定します。

---
`customer_id`  
エンドユーザーIDです。

送金元のエンドユーザーを指定します。

---
`private_money_id`  
マネーIDです。

マネーを指定します。

---
`amount`  
マネー額です。

送金するマネー額を指定します。

---
`description`  
取引説明文です。

任意入力で、取引履歴に表示される説明文です。

---
成功したときは[Transaction](#transaction)オブジェクトを返します

#### 取引履歴を取得する
取引一覧を返します。
```php
$request = new Request\ListTransactions(
    [
        'from' => "2024-10-30T08:01:07.000000+09:00", // 開始日時
        'to' => "2024-06-23T18:19:24.000000+09:00", // 終了日時
        'page' => 1,                              // ページ番号
        'per_page' => 50,                         // 1ページ分の取引数
        'shop_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 店舗ID
        'customer_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // エンドユーザーID
        'customer_name' => "太郎",                  // エンドユーザー名
        'terminal_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 端末ID
        'transaction_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 取引ID
        'organization_code' => "pocketchange",    // 組織コード
        'private_money_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // マネーID
        'is_modified' => TRUE,                    // キャンセルフラグ
        'types' => ["topup", "payment"]           // 取引種別 (複数指定可)、チャージ=topup、支払い=payment
    ]
);
```

---
`from`  
抽出期間の開始日時です。

フィルターとして使われ、開始日時以降に発生した取引のみ一覧に表示されます。

---
`to`  
抽出期間の終了日時です。

フィルターとして使われ、終了日時以前に発生した取引のみ一覧に表示されます。

---
`page`  
取得したいページ番号です。

---
`per_page`  
1ページ分の取引数です。

---
`shop_id`  
店舗IDです。

フィルターとして使われ、指定された店舗での取引のみ一覧に表示されます。

---
`customer_id`  
エンドユーザーIDです。

フィルターとして使われ、指定されたエンドユーザーでの取引のみ一覧に表示されます。

---
`customer_name`  
エンドユーザー名です。

フィルターとして使われ、入力された名前に部分一致するエンドユーザーでの取引のみ一覧に表示されます。

---
`terminal_id`  
端末IDです。

フィルターとして使われ、指定された端末での取引のみ一覧に表示されます。

---
`transaction_id`  
取引IDです。

フィルターとして使われ、指定された取引のみ一覧に表示されます。

---
`organization_code`  
組織コードです。

フィルターとして使われ、指定された組織での取引のみ一覧に表示されます。

---
`private_money_id`  
マネーIDです。

フィルターとして使われ、指定したマネーでの取引のみ一覧に表示されます。

---
`is_modified`  
キャンセルフラグです。

これにtrueを指定するとキャンセルされた取引のみ一覧に表示されます。
デフォルト値はfalseで、キャンセルの有無にかかわらず一覧に表示されます。

---
`types`  
取引の種類でフィルターします。

以下の種類を指定できます。

1. topup
   店舗からエンドユーザーへの送金取引(チャージ)

2. payment
   エンドユーザーから店舗への送金取引(支払い)

3. exchange-outflow
　　他マネーへの流出

4. exchange-inflow
   他マネーからの流入

---
成功したときは[PaginatedTransaction](#paginated-transaction)オブジェクトを返します

#### 返金する
```php
$request = new Request\RefundTransaction(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // transactionId: 取引ID
    [
        'description' => "返品対応のため"                // 取引履歴に表示する返金事由
    ]
);
```
成功したときは[Transfer](#transfer)オブジェクトを返します

### チャージQRコード

店舗ユーザが発行し、エンドユーザがポケペイアプリから読み取ることでチャージ取引が発生するQRコードです。

チャージQRコードを解析すると次のようなURLになります(URLは環境によって異なります)。

`https://www-sandbox.pokepay.jp/checks/xxxxxxxx-xxxx-xxxxxxxxx-xxxxxxxxxxxx`

QRコードを読み取る方法以外にも、このURLリンクを直接スマートフォン(iOS/Android)上で開くことによりアプリが起動して取引が行われます。(注意: 上記URLはsandbox環境であるため、アプリもsandbox環境のものである必要があります) 上記URL中の `xxxxxxxx-xxxx-xxxxxxxxx-xxxxxxxxxxxx` の部分がチャージQRコードのIDです。

#### チャージQRコードの発行
```php
$request = new Request\CreateCheck(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // accountId: 送金元の店舗アカウントID
    [
        'money_amount' => 1377,                   // 付与マネー額
        'point_amount' => 4721,                   // 付与ポイント額
        'description' => "test check",            // 説明文(アプリ上で取引の説明文として表示される)
        'is_onetime' => TRUE,                     // ワンタイムかどうか。真の場合1度読み込まれた時点でそのチャージQRは失効する(デフォルト値は真)
        'usage_limit' => 9449,                    // ワンタイムでない場合、複数ユーザから読み取られ得る。その場合の最大読み取り回数
        'expires_at' => "2016-09-28T14:01:38.000000+09:00", // チャージQR自体の失効日時
        'point_expires_at' => "2020-06-22T02:54:19.000000+09:00", // チャージQRによって付与されるポイントの失効日時
        'point_expires_in_days' => 60,            // チャージQRによって付与されるポイントの有効期限(相対指定、単位は日)
        'bear_point_account' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx" // ポイント額を負担する店舗アカウントのID
    ]
);
```
`money_amount`と`point_amount`の少なくとも一方は指定する必要があります。


---
`is_onetime`  
チャージQRコードが一度の読み取りで失効するときに`true`にします。デフォルト値は`true`です。
`false`の場合、そのチャージQRコードは1ユーザについては1回きりですが、複数ユーザによって読み取り可能なQRコードになります。


---
`usage_limit`  
複数ユーザによって読み取り可能なチャージQRコードの読み取り回数に制限をつけるために指定します。
省略すると無制限に読み取り可能なチャージQRコードになります。
チャージQRコードは管理画面からいつでも無効化(有効化)することができます。


---
成功したときは[Check](#check)オブジェクトを返します

#### チャージQRコードを読み取ることでチャージする
通常チャージQRコードはエンドユーザのアプリによって読み取られ、アプリとポケペイサーバとの直接通信によって取引が作られます。 もしエンドユーザとの通信をパートナーのサーバのみに限定したい場合、パートナーのサーバがチャージQRの情報をエンドユーザから代理受けして、サーバ間連携APIによって実際のチャージ取引をリクエストすることになります。

エンドユーザから受け取ったチャージ用QRコードのIDをエンドユーザIDと共に渡すことでチャージ取引が作られます。

```php
$request = new Request\CreateTopupTransactionWithCheck(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // checkId: チャージ用QRコードのID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // customerId: エンドユーザーのID
);
```

---
`check_id`  
チャージ用QRコードのIDです。

QRコード生成時に送金元店舗のウォレット情報や、送金額などが登録されています。

---
`customer_id`  
エンドユーザーIDです。

送金先のエンドユーザーを指定します。

---
成功したときは[Transaction](#transaction)オブジェクトを返します

### Customer

#### 新規エンドユーザーウォレットを追加する
指定したマネーのウォレットを作成し、同時にそのウォレットを保有するユーザも作成します。
```php
$request = new Request\CreateCustomerAccount(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    [
        'user_name' => "ポケペイ太郎",                  // ユーザー名
        'account_name' => "ポケペイ太郎のアカウント"          // アカウント名
    ]
);
```

---
`private_money_id`  
マネーIDです。

これによって作成するウォレットのマネーを指定します。

---
`user_name`  
ウォレットと共に作成するユーザ名です。省略した場合は空文字となります。

---
`account_name`  
作成するウォレット名です。省略した場合は空文字となります。

---
成功したときは[AccountWithUser](#account-with-user)オブジェクトを返します

#### エンドユーザーのウォレット情報を表示する
ウォレットを取得します。
```php
$request = new Request\GetAccount(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // accountId: ウォレットID
);
```

---
`account_id`  
ウォレットIDです。

フィルターとして使われ、指定したウォレットIDのウォレットを取得します。

---
成功したときは[AccountDetail](#account-detail)オブジェクトを返します

#### エンドユーザーの残高内訳を表示する
エンドユーザーの残高は有効期限別のリストとして取得できます。
```php
$request = new Request\ListAccountBalances(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // accountId: ウォレットID
    [
        'page' => 8983,                           // ページ番号
        'per_page' => 756                         // 1ページ分の取引数
    ]
);
```

---
`account_id`  
ウォレットIDです。

フィルターとして使われ、指定したウォレットIDのウォレット残高を取得します。

---
`page`  
取得したいページ番号です。

---
`per_page`  
1ページ分のウォレット残高数です。

---
成功したときは[PaginatedAccountBalance](#paginated-account-balance)オブジェクトを返します

### Organization

#### 新規加盟店組織を追加する
```php
$request = new Request\CreateOrganization(
    "ox_supermarket",                             // code: 新規組織コード
    "oxスーパー",                                     // name: 新規組織名
    ["xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"],     // privateMoneyIds: 加盟店組織で有効にするマネーIDの配列
    "k1SqALeRW5@bPMO.com",                        // issuerAdminUserEmail: 発行体担当者メールアドレス
    "IGduo2H8EO@QLPo.com",                        // memberAdminUserEmail: 新規組織担当者メールアドレス
    [
        'bank_name' => "XYZ銀行",                   // 銀行名
        'bank_code' => "99X",                     // 銀行金融機関コード
        'bank_branch_name' => "ABC支店",            // 銀行支店名
        'bank_branch_code' => "99X",              // 銀行支店コード
        'bank_account_type' => "current",         // 銀行口座種別 (普通=saving, 当座=current, その他=other)
        'bank_account' => 9999999,                // 銀行口座番号
        'bank_account_holder_name' => "ﾌｸｻﾞﾜﾕｷﾁ", // 口座名義人名
        'contact_name' => "佐藤清"                   // 担当者名
    ]
);
```
成功したときは[Organization](#organization)オブジェクトを返します

### Shop

#### 新規店舗を追加する
```php
$request = new Request\CreateShop(
    "oxスーパー三田店",                                  // shopName: 店舗名
    [
        'shop_postal_code' => "4128446",          // 店舗の郵便番号
        'shop_address' => "東京都港区芝...",            // 店舗の住所
        'shop_tel' => "05-7949-378",              // 店舗の電話番号
        'shop_email' => "GK3firTH1F@Snfc.com",    // 店舗のメールアドレス
        'shop_external_id' => "DobpHBBe1",        // 店舗の外部ID
        'organization_code' => "ox-supermarket"   // 組織コード
    ]
);
```
成功したときは[User](#user)オブジェクトを返します

### Private Money

#### 決済加盟店の取引サマリを取得する
```php
$request = new Request\GetPrivateMoneyOrganizationSummaries(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    [
        'from' => "2023-06-01T09:45:21.000000+09:00", // 開始日時(toと同時に指定する必要有)
        'to' => "2016-03-28T08:01:37.000000+09:00", // 終了日時(fromと同時に指定する必要有)
        'page' => 1,                              // ページ番号
        'per_page' => 50                          // 1ページ分の取引数
    ]
);
```
`from`と`to`は同時に指定する必要があります。

成功したときは[PaginatedPrivateMoneyOrganizationSummaries](#paginated-private-money-organization-summaries)オブジェクトを返します

## Responses

<a name="account-with-user"></a>
## AccountWithUser
* `id (string)`: 
* `name (string)`: 
* `isSuspended (boolean)`: 
* `privateMoney (PrivateMoney)`: 
* `user (User)`: 

`private_money`は [PrivateMoney](#private-money) オブジェクトを返します。

`user`は [User](#user) オブジェクトを返します。

<a name="account-detail"></a>
## AccountDetail
* `id (string)`: 
* `name (string)`: 
* `isSuspended (boolean)`: 
* `balance (double)`: 
* `moneyBalance (double)`: 
* `pointBalance (double)`: 
* `privateMoney (PrivateMoney)`: 

`private_money`は [PrivateMoney](#private-money) オブジェクトを返します。

<a name="check"></a>
## Check
* `id (string)`: チャージQRコードのID
* `amount (double)`: チャージマネー額 (deprecated)
* `moneyAmount (double)`: チャージマネー額
* `pointAmount (double)`: チャージポイント額
* `description (string)`: チャージQRコードの説明文(アプリ上で取引の説明文として表示される)
* `user (User)`: 送金元ユーザ情報
* `isOnetime (boolean)`: 使用回数が一回限りかどうか
* `isDisabled (boolean)`: 無効化されているかどうか
* `expiresAt (\DateTime)`: チャージQRコード自体の失効日時
* `privateMoney (PrivateMoney)`: 対象マネー情報
* `usageLimit (integer)`: 一回限りでない場合の最大読み取り回数
* `usageCount (double)`: 一回限りでない場合の現在までに読み取られた回数
* `token (string)`: チャージQRコードを解析したときに出てくるURL

`user`は [User](#user) オブジェクトを返します。

`private_money`は [PrivateMoney](#private-money) オブジェクトを返します。

<a name="user"></a>
## User
* `id (string)`: ユーザー (または店舗) ID
* `name (string)`: ユーザー (または店舗) 名
* `isMerchant (boolean)`: 店舗ユーザーかどうか

<a name="organization"></a>
## Organization
* `code (string)`: 組織コード
* `name (string)`: 組織名

<a name="transaction"></a>
## Transaction
* `id (string)`: 取引ID
* `type (string)`: 取引種別 (チャージ=topup, 支払い=payment)
* `isModified (boolean)`: 返金された取引かどうか
* `sender (User)`: 送金者情報
* `senderAccount (Account)`: 送金ウォレット情報
* `receiver (User)`: 受取者情報
* `receiverAccount (Account)`: 受取ウォレット情報
* `amount (double)`: 決済総額 (マネー額 + ポイント額)
* `moneyAmount (double)`: 決済マネー額
* `pointAmount (double)`: 決済ポイント額
* `doneAt (\DateTime)`: 取引日時
* `description (string)`: 取引説明文

`receiver`と`sender`は [User](#user) オブジェクトを返します。

`receiver_account`と`sender_account`は [Account](#account) オブジェクトを返します。

<a name="transfer"></a>
## Transfer
* `id (string)`: 
* `senderAccount (AccountWithoutPrivateMoneyDetail)`: 
* `receiverAccount (AccountWithoutPrivateMoneyDetail)`: 
* `amount (double)`: 
* `moneyAmount (double)`: 
* `pointAmount (double)`: 
* `doneAt (\DateTime)`: 
* `type (string)`: 
* `description (string)`: 
* `transactionId (string)`: 

`receiver_account`と`sender_account`は [AccountWithoutPrivateMoneyDetail](#account-without-private-money-detail) オブジェクトを返します。

<a name="paginated-private-money-organization-summaries"></a>
## PaginatedPrivateMoneyOrganizationSummaries
* `rows (PrivateMoneyOrganizationSummary[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [PrivateMoneyOrganizationSummary](#private-money-organization-summary) オブジェクトの配列を返します。

`pagination`は [Pagination](#pagination) オブジェクトを返します。

<a name="paginated-transaction"></a>
## PaginatedTransaction
* `rows (Transaction[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [Transaction](#transaction) オブジェクトの配列を返します。

`pagination`は [Pagination](#pagination) オブジェクトを返します。

<a name="paginated-account-balance"></a>
## PaginatedAccountBalance
* `rows (AccountBalance[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [AccountBalance](#account-balance) オブジェクトの配列を返します。

`pagination`は [Pagination](#pagination) オブジェクトを返します。

<a name="private-money"></a>
## PrivateMoney
* `id (string)`: マネーID
* `name (string)`: マネー名
* `unit (string)`: マネー単位 (例: 円)
* `isExclusive (boolean)`: 会員制のマネーかどうか
* `description (string)`: マネー説明文
* `onelineMessage (string)`: マネーの要約
* `organization (Organization)`: マネーを発行した組織
* `maxBalance (double)`: ウォレットの上限金額
* `transferLimit (double)`: マネーの取引上限額
* `type (string)`: マネー種別 (自家型=own, 第三者型=third-party)
* `expirationType (string)`: 有効期限種別 (チャージ日起算=static, 最終利用日起算=last-update, 最終チャージ日起算=last-topup-update)
* `enableTopupByMember (boolean)`: 加盟店によるチャージが有効かどうか
* `accountImage (string)`: マネーの画像URL

`organization`は [Organization](#organization) オブジェクトを返します。

<a name="account"></a>
## Account
* `id (string)`: ウォレットID
* `name (string)`: ウォレット名
* `isSuspended (boolean)`: ウォレットが凍結されているかどうか
* `privateMoney (PrivateMoney)`: 設定マネー情報

`private_money`は [PrivateMoney](#private-money) オブジェクトを返します。

<a name="account-without-private-money-detail"></a>
## AccountWithoutPrivateMoneyDetail
* `id (string)`: 
* `name (string)`: 
* `isSuspended (boolean)`: 
* `privateMoneyId (string)`: 
* `user (User)`: 

`user`は [User](#user) オブジェクトを返します。

<a name="private-money-organization-summary"></a>
## PrivateMoneyOrganizationSummary
* `organizationCode (string)`: 
* `topup (OrganizationSummary)`: 
* `payment (OrganizationSummary)`: 

`payment`と`topup`は [OrganizationSummary](#organization-summary) オブジェクトを返します。

<a name="pagination"></a>
## Pagination
* `current (integer)`: 
* `perPage (integer)`: 
* `maxPage (integer)`: 
* `hasPrev (boolean)`: 
* `hasNext (boolean)`: 

<a name="account-balance"></a>
## AccountBalance
* `expiresAt (\DateTime)`: 
* `moneyAmount (double)`: 
* `pointAmount (double)`: 
