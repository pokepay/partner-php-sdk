# Partner API SDK for PHP

## Getting started

Partner APIとの通信は `Pokepay\PartnerAPI` クラスを通じて行います。

```php
$client = new Pokepay\PartnerAPI();
```

通信の安全性のため、以下の情報を事前に設定しておく必要があります。これらはパートナー契約時にお渡ししているものです。

- Client ID
- Client Secret
- SSLクライアント証明書

以下にそれぞれの設定方法を示します。

### クライアント認証情報

「Client ID」と「Client Secret」は実行環境の環境変数で設定します。

- `POKEPAY_PARTNER_CLIENT_ID`: Client ID
- `POKEPAY_PARTNER_CLIENT_SECRET`: Client Secret

もし何らかの理由で環境変数を設定することができない場合は、 `Pokepay\PartnerAPI` のセッターを使って設定することもできます。

```php
// コードに埋め込む場合
$client = new Pokepay\PartnerAPI();
$client->setClientId('clientId_xxxxxxx...');
$client->setClientSecret('clientSecret_xxxxxxx...');
```

ソースコードに認証情報を埋め込んだ場合、その管理には十分に気をつけてください。

### SSLクライアント証明書

Partner APIによるサーバー間の通信にはSSLクライアント認証が必要です。証明書を設定するには、 `Pokepay\PartnerAPI` のコンストラクタにオプションを渡します。

```php
```php
$curlOptions = array(
    CURLOPT_SSLKEY       => 'path/to/key.pem',
    CURLOPT_SSLKEYPASSWD => 's3cret',
    CURLOPT_SSLCERT      => 'path/to/client.pem',
);
$client = new Pokepay\PartnerAPI($curlOptions);
```

## Overview

### APIリクエスト

Partner APIへの通信はリクエストオブジェクトを作り、`Pokepay\PartnerAPI#send` メソッドに渡すことで行われます。リクエストクラスは名前空間 `Pokepay\Request` 以下に定義されています。

たとえば `Pokepay\Request\SendEcho` 送信した内容をそのまま返す処理です。

```php
$request = new Pokepay\Request\SendEcho(array('message' => 'hello'));

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
- summary
  - payment: 支払いサマリー
    - count (int): 支払い数
    - money (int): 支払いに使われたマネー額
    - point (int): 支払いに使われたポイント額
  - topup: チャージサマリー
    - count (int): チャージ数
    - money (int): チャージされたマネー額
    - point (int): 付与されたポイント額
    
以下にコード例を示します。

```
$request = new Pokepay\Request\ListTransactions();
$response = $client->send($request);

// 2ページ目があるときは取得する
if ($response->pagination->hasNext) {
    $request = new Pokepay\Request\ListTransactions(
        array(
            'page' => $response->pagination->current + 1
        )
    );
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
    $response = $client->send(new Pokepay\Request\ListTransactions(array()));
} catch(Pokepay\Error\ApiConnection $e) {
    // Partner APIとの通信が失敗したときの処理
} catch(Pokepay\Error\HttpRequest $e) {
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
    } catch(Pokepay\Error\ApiConnection $e) {
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

<a name="show-transaction"></a>
#### 取引情報を取得する

```php
$request = new Pokepay\Request\ShowTransaction(
    '0ace85e7.....'  // 取引ID
);
```

成功したときは以下のプロパティを含む `Pokepay\Response\Transaction` オブジェクトをレスポンスとして返します。

- id (string): 取引ID
- type (string): 取引種別 (チャージ=topup, 支払い=payment)
- isModified (bool): 返金された取引かどうか
- doneAt (DateTime): 取引日時
- shopName (string): 取引店舗名
- shopId (string): 取引店舗ID
- userId (string): エンドユーザーID
- customerName (string): エンドユーザー名
- terminalId (string|null): 端末ID
- moneyAmount (double): 決済マネー額
- pointAmount (double): 決済ポイント額
- organizationName (string): 取引店舗の組織名
- rows (array): 取引詳細 (Transferオブジェクト) の配列

#### チャージする

```php
$request = new Pokepay\Request\CreateTransaction(
    'xxxxxxxxxxxxxxxxxxxxx',  // 店舗のアカウントID
    'zzzzzzzzzzzzzzzzzzzzz',  // エンドユーザーのアカウントID
    1000,                     // チャージマネー額
    0,                        // チャージするポイント額 (任意)
    '初夏のチャージキャンペーン',  // 取引履歴に表示する説明文 (任意)
);
```

成功したときは `Pokepay\Response\Transaction` オブジェクトをレスポンスとして返します。プロパティは [取引情報を取得する](#show-transaction) を参照してください。

#### 取引履歴を取得する

```php
$request = new Pokepay\Request\ListTransactions(
    array( // フィルタオプション (すべて任意)
        // ページ番号指定
        'page' => 1,

        // 期間指定 (ISO8601形式の文字列、またはDateTimeオブジェクト)
        'from' => '2019-01-01T00:00:00+09:00',
        'to'   => '2019-07-31T18:13:39+09:00',

        // 検索オプション
        'customer_id' => 'xxxxxxxxxxxxxxxxx', // エンドユーザーID
        'customer_name'  => '福沢',            // エンドユーザー名
        'transaction_id' => '24bba30c......', // 取引ID
        'shop_id'        => '456a820b......', // 店舗ID
        'terminal_id'    => 'd8023185......', // 端末ID
        'organization'   => 'pocketchange',   // 組織コード
        'private_money'  => '9ff644fc......', // マネーID
        'is_modified'    => true,             // キャンセルされた取引のみ検索するか
        'transaction_types'                   // 取引種別 (複数指定可)
                         => array('topup', 'payment'), // チャージ=topup、支払い=payment
    )
);
```

成功したときは `Pokepay\Response\Transaction` を `rows` に含むページングオブジェクトを返します。詳細は [ページング](#paging) を参照してください。

#### 返金する

```php
$request = new Pokepay\Request\RefundTransaction(
    '9f4781d6....', // 取引ID
    '返品対応のため'   // 取引履歴に表示する説明文 (任意)
);
```

### Organization

#### 新規加盟店組織を追加する

```php
$request = new Pokepay\Request\CreateTransaction(
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
        'bank_account_holder_name' => '田中A太', // 口座名義人名
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
