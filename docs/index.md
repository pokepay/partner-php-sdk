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

- [ListTransactions](#list-transactions): 取引履歴を取得する
- [CreateTransaction](#create-transaction): 
- [CreateTopupTransaction](#create-topup-transaction): チャージする
- [CreatePaymentTransaction](#create-payment-transaction): 支払いする
- [CreateTransferTransaction](#create-transfer-transaction): 個人間送金
- [CreateExchangeTransaction](#create-exchange-transaction): 
- [GetTransaction](#get-transaction): 取引情報を取得する
- [ListTransfers](#list-transfers): 
- [CreateTopupTransactionWithCheck](#create-topup-transaction-with-check): チャージQRコードを読み取ることでチャージする
- [ListBills](#list-bills): 支払いQRコード一覧を表示する
- [CreateBill](#create-bill): 支払いQRコードの発行
- [UpdateBill](#update-bill): 支払いQRコードの更新
- [CreateCashtray](#create-cashtray): Cashtrayを作る
- [GetCashtray](#get-cashtray): Cashtrayの情報を取得する
- [CancelCashtray](#cancel-cashtray): Cashtrayを無効化する
- [UpdateCashtray](#update-cashtray): Cashtrayの情報を更新する
- [GetAccount](#get-account): ウォレット情報を表示する
- [UpdateAccount](#update-account): ウォレット情報を更新する
- [ListAccountBalances](#list-account-balances): エンドユーザーの残高内訳を表示する
- [ListAccountExpiredBalances](#list-account-expired-balances): エンドユーザーの失効済みの残高内訳を表示する
- [CreateCustomerAccount](#create-customer-account): 新規エンドユーザーウォレットを追加する
- [ListCustomerTransactions](#list-customer-transactions): 取引履歴を取得する
- [ListShops](#list-shops): 店舗一覧を取得する
- [CreateShop](#create-shop): 新規店舗を追加する
- [ListUserAccounts](#list-user-accounts): エンドユーザー、店舗ユーザーのウォレット一覧を表示する
- [GetPrivateMoneyOrganizationSummaries](#get-private-money-organization-summaries): 決済加盟店の取引サマリを取得する
- [BulkCreateTransaction](#bulk-create-transaction): CSVファイル一括取引
### Transaction
<a name="list-transactions"></a>
#### 取引履歴を取得する
取引一覧を返します。
```php
$request = new Request\ListTransactions(
    [
        'from' => "2024-08-12T19:39:14.000000+09:00", // 開始日時
        'to' => "2022-12-02T08:24:08.000000+09:00", // 終了日時
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
<a name="create-transaction"></a>
#### 
```php
$request = new Request\CreateTransaction(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
    [
        'money_amount' => 6506,
        'point_amount' => 7289,
        'point_expires_at' => "2020-08-20T19:04:41.000000+09:00", // ポイント有効期限
        'description' => "qeO19KhFrkxiVRAQ6FFjz1wnjIRjO9MofqJJncHBCR1qP1zId4mLJCzHpOgkhaasWI8ELqJwRA62Ghe0ne6pcNR1V7JprfFD47gNL9WM6cSeojzOZZrLxO3x6r1ViuOnspa8l8OxqMpLrB"
    ]
);
```

---
`point_expires_at`  
ポイントをチャージした場合の、付与されるポイントの有効期限です。
省略した場合はマネーに設定された有効期限と同じものがポイントの有効期限となります。

---
成功したときは[Transaction](#transaction)オブジェクトを返します
<a name="create-topup-transaction"></a>
#### チャージする
チャージ取引を作成します。
```php
$request = new Request\CreateTopupTransaction(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // shopId: 店舗ID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // customerId: エンドユーザーのID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    [
        'bear_point_shop_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // ポイント支払時の負担店舗ID
        'money_amount' => 568,                    // マネー額
        'point_amount' => 6186,                   // ポイント額
        'point_expires_at' => "2020-12-19T15:50:00.000000+09:00", // ポイント有効期限
        'description' => "初夏のチャージキャンペーン"          // 取引履歴に表示する説明文
    ]
);
```

---
`shop_id`  
店舗IDです。

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
`point_expires_at`  
ポイントをチャージした場合の、付与されるポイントの有効期限です。
省略した場合はマネーに設定された有効期限と同じものがポイントの有効期限となります。

---
`description`  
取引説明文です。

任意入力で、取引履歴に表示される説明文です。

---
成功したときは[Transaction](#transaction)オブジェクトを返します
<a name="create-payment-transaction"></a>
#### 支払いする
支払取引を作成します。
支払い時には、エンドユーザーの残高のうち、ポイント残高から優先的に消費されます。

```php
$request = new Request\CreatePaymentTransaction(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // shopId: 店舗ID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // customerId: エンドユーザーID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    8448,                                         // amount: 支払い額
    [
        'description' => "たい焼き(小倉)"               // 取引履歴に表示する説明文
    ]
);
```

---
`shop_id`  
店舗IDです。

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
<a name="create-transfer-transaction"></a>
#### 個人間送金
エンドユーザー間での送金取引(個人間送金)を作成します。
個人間送金で送れるのはマネーのみで、ポイントを送ることはできません。送金元のマネー残高のうち、有効期限が最も遠いものから順に送金されます。

```php
$request = new Request\CreateTransferTransaction(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // senderId: 送金元ユーザーID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // receiverId: 受取ユーザーID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    8458,                                         // amount: 送金額
    [
        'description' => "たい焼き(小倉)"               // 取引履歴に表示する説明文
    ]
);
```

---
`sender_id`  
エンドユーザーIDです。

送金元のエンドユーザー(送り主)を指定します。

---
`receiver_id`  
エンドユーザーIDです。

送金先のエンドユーザー(受け取り人)を指定します。

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
<a name="create-exchange-transaction"></a>
#### 
```php
$request = new Request\CreateExchangeTransaction(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
    6336,
    [
        'description' => "GSVgVcs3OQMdHqZLlv01wGqOn2jIsFsWbo7bpQq9anT6PszkN335U1t4DYsuiE88p3Hog0k8d"
    ]
);
```
成功したときは[Transaction](#transaction)オブジェクトを返します
<a name="get-transaction"></a>
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
<a name="list-transfers"></a>
#### 
```php
$request = new Request\ListTransfers(
    [
        'from' => "2022-08-19T11:01:20.000000+09:00",
        'to' => "2017-11-21T10:29:23.000000+09:00",
        'page' => 4673,
        'per_page' => 1192,
        'shop_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
        'shop_name' => "CFI0Qv1brn8ATMTNMMEyVApkaDeYuOtBoCZgc4gwc8RSE7B5wsqfAkho5yO5EQGpb9AHk6UF1UjWUyw97H5Wi0UlM5hWRopq8fm3QjwrUJDS6QIEgbGEOQG1PZp7fjd91zgh1RHHtL55R7YEprCJ0U4QnLZWm",
        'customer_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
        'customer_name' => "GvTqLQwaZ9vOnv67spoRoPKUgWvYVa3Gv9x",
        'transaction_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
        'private_money_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
        'is_modified' => TRUE,
        'transaction_types' => ["transfer", "exchange", "topup"],
        'transfer_types' => ["exchange", "payment", "topup"]
    ]
);
```
成功したときは[PaginatedTransfers](#paginated-transfers)オブジェクトを返します
### Check
店舗ユーザが発行し、エンドユーザーがポケペイアプリから読み取ることでチャージ取引が発生するQRコードです。

チャージQRコードを解析すると次のようなURLになります(URLは環境によって異なります)。

`https://www-sandbox.pokepay.jp/checks/xxxxxxxx-xxxx-xxxxxxxxx-xxxxxxxxxxxx`

QRコードを読み取る方法以外にも、このURLリンクを直接スマートフォン(iOS/Android)上で開くことによりアプリが起動して取引が行われます。(注意: 上記URLはsandbox環境であるため、アプリもsandbox環境のものである必要があります) 上記URL中の `xxxxxxxx-xxxx-xxxxxxxxx-xxxxxxxxxxxx` の部分がチャージQRコードのIDです。

<a name="create-topup-transaction-with-check"></a>
#### チャージQRコードを読み取ることでチャージする
通常チャージQRコードはエンドユーザーのアプリによって読み取られ、アプリとポケペイサーバとの直接通信によって取引が作られます。 もしエンドユーザーとの通信をパートナーのサーバのみに限定したい場合、パートナーのサーバがチャージQRの情報をエンドユーザーから代理受けして、サーバ間連携APIによって実際のチャージ取引をリクエストすることになります。

エンドユーザーから受け取ったチャージ用QRコードのIDをエンドユーザーIDと共に渡すことでチャージ取引が作られます。

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
### Bill
支払いQRコード
<a name="list-bills"></a>
#### 支払いQRコード一覧を表示する
支払いQRコード一覧を表示します。
```php
$request = new Request\ListBills(
    [
        'page' => 4580,                           // ページ番号
        'per_page' => 9220,                       // 1ページの表示数
        'bill_id' => "v",                         // 支払いQRコードのID
        'private_money_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // マネーID
        'organization_code' => "5ov2Mfq-",        // 組織コード
        'description' => "test bill",             // 取引説明文
        'created_from' => "2022-11-18T07:24:11.000000+09:00", // 作成日時(起点)
        'created_to' => "2024-09-10T04:32:32.000000+09:00", // 作成日時(終点)
        'shop_name' => "bill test shop1",         // 店舗名
        'shop_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 店舗ID
        'lower_limit_amount' => 3385,             // 金額の範囲によるフィルタ(下限)
        'upper_limit_amount' => 353,              // 金額の範囲によるフィルタ(上限)
        'is_disabled' => FALSE                    // 支払いQRコードが無効化されているかどうか
    ]
);
```

---
`page`  
取得したいページ番号です。

---
`per_page`  
1ページに表示する支払いQRコードの数です。

---
`bill_id`  
支払いQRコードのIDを指定して検索します。IDは前方一致で検索されます。

---
`private_money_id`  
支払いQRコードの送金元ウォレットのマネーIDでフィルターします。

---
`organization_code`  
支払いQRコードの送金元店舗が所属する組織の組織コードでフィルターします。

---
`description`  
支払いQRコードを読み取ることで作られた取引の説明文としてアプリなどに表示されます。

---
`created_from`  
支払いQRコードの作成日時でフィルターします。

これ以降に作成された支払いQRコードのみ一覧に表示されます。

---
`created_to`  
支払いQRコードの作成日時でフィルターします。

これ以前に作成された支払いQRコードのみ一覧に表示されます。

---
`shop_name`  
支払いQRコードを作成した店舗名でフィルターします。店舗名は部分一致で検索されます。

---
`shop_id`  
支払いQRコードを作成した店舗IDでフィルターします。

---
`lower_limit_amount`  
支払いQRコードの金額の下限を指定してフィルターします。

---
`upper_limit_amount`  
支払いQRコードの金額の上限を指定してフィルターします。

---
`is_disabled`  
支払いQRコードが無効化されているかどうかを表します。デフォルト値は偽(有効)です。

---
成功したときは[PaginatedBills](#paginated-bills)オブジェクトを返します
<a name="create-bill"></a>
#### 支払いQRコードの発行
支払いQRコードの内容を更新します。支払い先の店舗ユーザーは指定したマネーのウォレットを持っている必要があります。
```php
$request = new Request\CreateBill(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: 支払いマネーのマネーID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // shopId: 支払い先(受け取り人)の店舗ID
    [
        'amount' => 2469,                         // 支払い額
        'description' => "test bill"              // 説明文(アプリ上で取引の説明文として表示される)
    ]
);
```

---
`amount`  
支払いQRコードを支払い額を指定します。省略するかnullを渡すと任意金額の支払いQRコードとなり、エンドユーザーがアプリで読み取った際に金額を入力します。

---
成功したときは[Bill](#bill)オブジェクトを返します
<a name="update-bill"></a>
#### 支払いQRコードの更新
支払いQRコードの内容を更新します。パラメータは全て省略可能で、指定したもののみ更新されます。
```php
$request = new Request\UpdateBill(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // billId: 支払いQRコードのID
    [
        'amount' => 6066,                         // 支払い額
        'description' => "test bill",             // 説明文
        'is_disabled' => TRUE                     // 無効化されているかどうか
    ]
);
```

---
`bill_id`  
更新対象の支払いQRコードのIDです。

---
`amount`  
支払いQRコードを支払い額を指定します。nullを渡すと任意金額の支払いQRコードとなり、エンドユーザーがアプリで読み取った際に金額を入力します。

---
`description`  
支払いQRコードの詳細説明文です。アプリ上で取引の説明文として表示されます。

---
`is_disabled`  
支払いQRコードが無効化されているかどうかを指定します。真にすると無効化され、偽にすると有効化します。

---
成功したときは[Bill](#bill)オブジェクトを返します
### Cashtray
Cashtrayは支払いとチャージ両方に使えるQRコードで、店舗ユーザとエンドユーザーの間の主に店頭などでの取引のために用いられます。
Cashtrayによる取引では、エンドユーザーがQRコードを読み取った時点で即時取引が作られ、ユーザに対して受け取り確認画面は表示されません。
Cashtrayはワンタイムで、一度読み取りに成功するか、取引エラーになると失効します。
また、Cashtrayには有効期限があり、デフォルトでは30分で失効します。

<a name="create-cashtray"></a>
#### Cashtrayを作る
Cashtrayを作成します。

エンドユーザーに対して支払いまたはチャージを行う店舗ウォレットと、金額が必須項目です。
店舗ウォレットの指定には、店舗ウォレットIDを直接指定する方法と、店舗ユーザーIDとマネーIDから店舗ウォレットを特定する方法があります。

その他に、Cashtrayから作られる取引に対する説明文や失効時間を指定できます。

```php
$request = new Request\CreateCashtray(
    8025,                                         // amount: 金額
    [
        'shop_account_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 店舗ウォレットID
        'shop_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 店舗ユーザーID
        'private_money_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // マネーID
        'description' => "たい焼き(小倉)",              // 取引履歴に表示する説明文
        'expires_in' => 7870                      // 失効時間(秒)
    ]
);
```

---
`shop_account_id`  
店舗のウォレットIDです。
店舗のウォレットIDを指定するか、店舗のユーザIDとマネーIDを両方指定するかのいずれかが必須です。

---
`shop_id`  
店舗のユーザーIDです。
店舗のウォレットIDを指定するか、店舗のユーザIDとマネーIDを両方指定するかのいずれかが必須です。

---
`private_money_id`  
取引対象のマネーのIDです。
店舗のウォレットIDを指定するか、店舗のユーザIDとマネーIDを両方指定するかのいずれかが必須です。

---
`amount`  
マネー額です(必須項目)。
正の値を与えるとチャージになり、負の値を与えると支払いとなります。

---
`description`  
Cashtrayを読み取ったときに作られる取引の説明文です(最大200文字、任意項目)。
アプリや管理画面などの取引履歴に表示されます。デフォルトでは空文字になります。

---
`expires_in`  
Cashtrayが失効するまでの時間を秒単位で指定します(任意項目、デフォルト値は1800秒(30分))。

---
成功したときは[Cashtray](#cashtray)オブジェクトを返します
<a name="get-cashtray"></a>
#### Cashtrayの情報を取得する
Cashtrayの情報を取得します。

Cashtrayの現在の状態に加え、エンドユーザーのCashtray読み取りの試行結果、Cashtray読み取りによって作られた取引情報が取得できます。

レスポンス中の `attempt` には、このCashtrayをエンドユーザーが読み取った試行結果が入ります。
`account` はエンドユーザーのウォレット情報です。
成功時には `attempt` 内の `status_code` に200が入ります。

まだCashtrayが読み取られていない場合は `attempt` の内容は `NULL` になります。
エンドユーザーのCashtray読み取りの際には、様々なエラーが起き得ます。
エラーの詳細は `attempt` 中の `error_type` と `error_message` にあります。主なエラー型と対応するステータスコードを以下に列挙します。

- `cashtray_already_proceed (422)`
  - 既に処理済みのCashtrayをエンドユーザーが再び読み取ったときに返されます
- `cashtray_expired (422)`
  - 読み取り時点でCashtray自体の有効期限が切れているときに返されます。Cashtrayが失効する時刻はレスポンス中の `expires_at` にあります
- `cashtray_already_canceled (422)`
  - 読み取り時点でCashtrayが無効化されているときに返されます
- `account_balance_not_enough (422)`
  - 支払い時に、エンドユーザーの残高が不足していて取引が完了できなかったときに返されます
- `account_balance_exceeded`
  - チャージ時に、エンドユーザーのウォレット上限を超えて取引が完了できなかったときに返されます
- `account_transfer_limit_exceeded (422)`
  - マネーに設定されている一度の取引金額の上限を超えたため、取引が完了できなかったときに返されます
- `account_not_found (422)`
  - Cashtrayに設定されたマネーのウォレットをエンドユーザーが持っていなかったときに返されます


レスポンス中の `transaction` には、このCashtrayをエンドユーザーが読み取ることによって作られる取引データが入ります。まだCashtrayが読み取られていない場合は `NULL` になります。

以上をまとめると、Cashtrayの状態は以下のようになります。

- エンドユーザーのCashtray読み取りによって取引が成功した場合
  - レスポンス中の `attempt` と `transaction` にそれぞれ値が入ります
- 何らかの理由で取引が失敗した場合
  - レスポンス中の `attempt` にエラー内容が入り、 `transaction` には `NULL` が入ります
- まだCashtrayが読み取られていない場合
  - レスポンス中の `attempt` と `transaction` にそれぞれ `NULL` が入ります。Cashtrayの `expires_at` が現在時刻より前の場合は有効期限切れ状態です。

Cashtrayの取り得る全ての状態を擬似コードで記述すると以下のようになります。
```
if (attempt == null) {
  // 状態は未確定
  if (canceled_at != null) {
    // 無効化済み
  } else if (expires_at < now) {
    // 失効済み
  } else {
    // まだ有効で読み取られていない
  }
} else if (transaction != null) {
  // 取引成功確定。attempt で読み取ったユーザなどが分かる
} else {
  // 取引失敗確定。attempt で失敗理由などが分かる
}
```
```php
$request = new Request\GetCashtray(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // cashtrayId: CashtrayのID
);
```

---
`cashtray_id`  
情報を取得するCashtrayのIDです。

---
成功したときは[CashtrayWithResult](#cashtray-with-result)オブジェクトを返します
<a name="cancel-cashtray"></a>
#### Cashtrayを無効化する
Cashtrayを無効化します。

これにより、 `GetCashtray` のレスポンス中の `canceled_at` に無効化時点での現在時刻が入るようになります。
エンドユーザーが無効化されたQRコードを読み取ると `cashtray_already_canceled` エラーとなり、取引は失敗します。
```php
$request = new Request\CancelCashtray(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // cashtrayId: CashtrayのID
);
```

---
`cashtray_id`  
無効化するCashtrayのIDです。

---
成功したときは[Cashtray](#cashtray)オブジェクトを返します
<a name="update-cashtray"></a>
#### Cashtrayの情報を更新する
Cashtrayの内容を更新します。bodyパラメータは全て省略可能で、指定したもののみ更新されます。
```php
$request = new Request\UpdateCashtray(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // cashtrayId: CashtrayのID
    [
        'amount' => 5911,                         // 金額
        'description' => "たい焼き(小倉)",              // 取引履歴に表示する説明文
        'expires_in' => 3680                      // 失効時間(秒)
    ]
);
```

---
`cashtray_id`  
更新対象のCashtrayのIDです。

---
`amount`  
マネー額です(任意項目)。
正の値を与えるとチャージになり、負の値を与えると支払いとなります。

---
`description`  
Cashtrayを読み取ったときに作られる取引の説明文です(最大200文字、任意項目)。
アプリや管理画面などの取引履歴に表示されます。

---
`expires_in`  
Cashtrayが失効するまでの時間を秒で指定します(任意項目、デフォルト値は1800秒(30分))。

---
成功したときは[Cashtray](#cashtray)オブジェクトを返します
### Customer
<a name="get-account"></a>
#### ウォレット情報を表示する
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
<a name="update-account"></a>
#### ウォレット情報を更新する
ウォレットの状態を更新します。現在はウォレットの凍結/凍結解除の切り替えにのみ対応しています。
```php
$request = new Request\UpdateAccount(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // accountId: ウォレットID
    [
        'is_suspended' => TRUE                    // ウォレットが凍結されているかどうか
    ]
);
```

---
`account_id`  
ウォレットIDです。

指定したウォレットIDのウォレットの状態を更新します。

---
`is_suspended`  
ウォレットの凍結状態です。真にするとウォレットが凍結され、そのウォレットでは新規取引ができなくなります。偽にすると凍結解除されます。

---
成功したときは[AccountDetail](#account-detail)オブジェクトを返します
<a name="list-account-balances"></a>
#### エンドユーザーの残高内訳を表示する
エンドユーザーのウォレット毎の残高を有効期限別のリストとして取得します。
```php
$request = new Request\ListAccountBalances(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // accountId: ウォレットID
    [
        'page' => 1512,                           // ページ番号
        'per_page' => 8228,                       // 1ページ分の取引数
        'expires_at_from' => "2019-06-28T08:00:06.000000+09:00", // 有効期限の期間によるフィルター(開始時点)
        'expires_at_to' => "2016-11-10T22:12:57.000000+09:00", // 有効期限の期間によるフィルター(終了時点)
        'direction' => "desc"                     // 有効期限によるソート順序
    ]
);
```

---
`account_id`  
ウォレットIDです。

フィルターとして使われ、指定したウォレットIDのウォレット残高を取得します。

---
`page`  
取得したいページ番号です。デフォルト値は1です。

---
`per_page`  
1ページ分のウォレット残高数です。デフォルト値は30です。

---
`expires_at_from`  
有効期限の期間によるフィルターの開始時点のタイムスタンプです。デフォルトでは未指定です。

---
`expires_at_to`  
有効期限の期間によるフィルターの終了時点のタイムスタンプです。デフォルトでは未指定です。

---
`direction`  
有効期限によるソートの順序を指定します。デフォルト値はasc (昇順)です。

---
成功したときは[PaginatedAccountBalance](#paginated-account-balance)オブジェクトを返します
<a name="list-account-expired-balances"></a>
#### エンドユーザーの失効済みの残高内訳を表示する
エンドユーザーのウォレット毎の失効済みの残高を有効期限別のリストとして取得します。
```php
$request = new Request\ListAccountExpiredBalances(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // accountId: ウォレットID
    [
        'page' => 5884,                           // ページ番号
        'per_page' => 5106,                       // 1ページ分の取引数
        'expires_at_from' => "2019-12-18T10:45:05.000000+09:00", // 有効期限の期間によるフィルター(開始時点)
        'expires_at_to' => "2023-08-16T05:58:15.000000+09:00", // 有効期限の期間によるフィルター(終了時点)
        'direction' => "desc"                     // 有効期限によるソート順序
    ]
);
```

---
`account_id`  
ウォレットIDです。

フィルターとして使われ、指定したウォレットIDのウォレット残高を取得します。

---
`page`  
取得したいページ番号です。デフォルト値は1です。

---
`per_page`  
1ページ分のウォレット残高数です。デフォルト値は30です。

---
`expires_at_from`  
有効期限の期間によるフィルターの開始時点のタイムスタンプです。デフォルトでは未指定です。

---
`expires_at_to`  
有効期限の期間によるフィルターの終了時点のタイムスタンプです。デフォルトでは未指定です。

---
`direction`  
有効期限によるソートの順序を指定します。デフォルト値はdesc (降順)です。

---
成功したときは[PaginatedAccountBalance](#paginated-account-balance)オブジェクトを返します
<a name="create-customer-account"></a>
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
<a name="list-customer-transactions"></a>
#### 取引履歴を取得する
取引一覧を返します。
```php
$request = new Request\ListCustomerTransactions(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    [
        'sender_customer_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 送金エンドユーザーID
        'receiver_customer_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 受取エンドユーザーID
        'type' => "E",                            // 取引種別、チャージ=topup、支払い=payment、個人間送金=transfer
        'is_modified' => TRUE,                    // キャンセル済みかどうか
        'from' => "2019-01-27T00:57:18.000000+09:00", // 開始日時
        'to' => "2020-01-29T05:40:54.000000+09:00", // 終了日時
        'page' => 1,                              // ページ番号
        'per_page' => 50                          // 1ページ分の取引数
    ]
);
```

---
`private_money_id`  
マネーIDです。
フィルターとして使われ、指定したマネーでの取引のみ一覧に表示されます。

---
`sender_customer_id`  
送金ユーザーIDです。

フィルターとして使われ、指定された送金ユーザーでの取引のみ一覧に表示されます。

---
`receiver_customer_id`  
受取ユーザーIDです。

フィルターとして使われ、指定された受取ユーザーでの取引のみ一覧に表示されます。

---
`type`  
取引の種類でフィルターします。

以下の種類を指定できます。

1. topup
   店舗からエンドユーザーへの送金取引(チャージ)
2. payment
   エンドユーザーから店舗への送金取引(支払い)
3. exchange
   他マネーへの流出(outflow)/他マネーからの流入(inflow)
4. transfer
   個人間送金

---
`is_modified`  
キャンセル済みかどうかを判定するフラグです。

これにtrueを指定するとキャンセルされた取引のみ一覧に表示されます。
falseを指定するとキャンセルされていない取引のみ一覧に表示されます
何も指定しなければキャンセルの有無にかかわらず一覧に表示されます。

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
成功したときは[PaginatedTransaction](#paginated-transaction)オブジェクトを返します
### Organization
### Shop
<a name="list-shops"></a>
#### 店舗一覧を取得する
```php
$request = new Request\ListShops(
    [
        'organization_code' => "pocketchange",    // 組織コード
        'private_money_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // マネーID
        'name' => "oxスーパー三田店",                    // 店舗名
        'postal_code' => "2539697",               // 店舗の郵便番号
        'address' => "東京都港区芝...",                 // 店舗の住所
        'tel' => "0984955-641",                   // 店舗の電話番号
        'email' => "oUMWRj1sxt@SyQg.com",         // 店舗のメールアドレス
        'external_id' => "1GkRhboXHY39x3Xs6KbKO", // 店舗の外部ID
        'page' => 1,                              // ページ番号
        'per_page' => 50                          // 1ページ分の取引数
    ]
);
```

---
`organization_code`  
このパラメータを渡すとその組織の店舗のみが返され、省略すると加盟店も含む店舗が返されます。


---
`private_money_id`  
このパラメータを渡すとそのマネーのウォレットを持つ店舗のみが返されます。


---
`name`  
このパラメータを渡すとその名前の店舗のみが返されます。


---
`postal_code`  
このパラメータを渡すとその郵便番号が登録された店舗のみが返されます。


---
`address`  
このパラメータを渡すとその住所が登録された店舗のみが返されます。


---
`tel`  
このパラメータを渡すとその電話番号が登録された店舗のみが返されます。


---
`email`  
このパラメータを渡すとそのメールアドレスが登録された店舗のみが返されます。


---
`external_id`  
このパラメータを渡すとその外部IDが登録された店舗のみが返されます。


---
`page`  
取得したいページ番号です。

---
`per_page`  
1ページ分の取引数です。

---
成功したときは[PaginatedShops](#paginated-shops)オブジェクトを返します
<a name="create-shop"></a>
#### 新規店舗を追加する
```php
$request = new Request\CreateShop(
    "oxスーパー三田店",                                  // shopName: 店舗名
    [
        'shop_postal_code' => "151-3308",         // 店舗の郵便番号
        'shop_address' => "東京都港区芝...",            // 店舗の住所
        'shop_tel' => "03-8354-5247",             // 店舗の電話番号
        'shop_email' => "0KRGU02ETt@Me3p.com",    // 店舗のメールアドレス
        'shop_external_id' => "ruF",              // 店舗の外部ID
        'organization_code' => "ox-supermarket"   // 組織コード
    ]
);
```
成功したときは[User](#user)オブジェクトを返します
### Account
<a name="list-user-accounts"></a>
#### エンドユーザー、店舗ユーザーのウォレット一覧を表示する
ユーザーIDを指定してそのユーザーのウォレット一覧を取得します。
```php
$request = new Request\ListUserAccounts(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // userId: ユーザーID
);
```

---
`user_id`  
ユーザーIDです。

指定したユーザーIDのウォレット一覧を取得します。パートナーキーと紐づく組織が発行しているマネーのウォレットのみが表示されます。

---
成功したときは[PaginatedAccounts](#paginated-accounts)オブジェクトを返します
### Private Money
<a name="get-private-money-organization-summaries"></a>
#### 決済加盟店の取引サマリを取得する
```php
$request = new Request\GetPrivateMoneyOrganizationSummaries(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    [
        'from' => "2015-12-07T23:12:19.000000+09:00", // 開始日時(toと同時に指定する必要有)
        'to' => "2017-12-28T03:32:07.000000+09:00", // 終了日時(fromと同時に指定する必要有)
        'page' => 1,                              // ページ番号
        'per_page' => 50                          // 1ページ分の取引数
    ]
);
```
`from`と`to`は同時に指定する必要があります。

成功したときは[PaginatedPrivateMoneyOrganizationSummaries](#paginated-private-money-organization-summaries)オブジェクトを返します
### Bulk
<a name="bulk-create-transaction"></a>
#### CSVファイル一括取引
CSVファイルから一括取引をします。
```php
$request = new Request\BulkCreateTransaction(
    "x8zwWTQtwhg",                                // name: 一括取引タスク名
    "EUQrpqVt",                                   // content: 取引する情報のCSV
    "FI20RqU84wWVej7KjR7PO79YOuc2btzI2HvK",       // requestId: リクエストID
    [
        'description' => "Iy1dRKuzOlLMmdBSZr220xtZpZdQ9ssluYJHAlylPpV6xWxt7f2oLFlgp2lLhVbHghg4lZSVxXqYiDQPFv2xIXmI4PlPvyiodi" // 一括取引の説明
    ]
);
```

---
`name`  
一括取引タスクの管理用の名前です。

---
`description`  
一括取引タスクの管理用の説明文です。

---
`content`  
一括取引する情報を書いたCSVの文字列です。
1行目はヘッダ行で、2行目以降の各行にカンマ区切りの取引データを含みます。
カラムは以下の7つです。任意のカラムには空文字を指定します。

- `type`: 取引種別
  - 必須。'topup' または 'payment'
- `sender_id`: 送金ユーザーID
  - 必須。UUID
- `receiver_id`: 受取ユーザーID
  - 必須。UUID
- `private_money_id`: マネーID
  - 必須。UUID
- `money_amount`: マネー額
  - 任意。ただし `point_amount` といずれかが必須。0以上の数字
- `point_amount`: ポイント額
  - 任意。ただし `money_amount` といずれかが必須。0以上の数字
- `description`: 取引の説明文
  - 任意。200文字以内。取引履歴に表示される文章
- `bear_account_id`: ポイント負担ウォレットID
  - `point_amount` があるときは必須。UUID
- `point_expires_at`: ポイントの有効期限
  - 任意。指定がないときはマネーに設定された有効期限を適用

---
`request_id`  
重複したリクエストを判断するためのユニークID。ランダムな36字の文字列を生成して渡してください。

---
成功したときは[BulkTransaction](#bulk-transaction)オブジェクトを返します
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

<a name="bill"></a>
## Bill
* `id (string)`: 支払いQRコードのID
* `amount (double|null)`: 支払い額
* `maxAmount (double|null)`: 支払い額を範囲指定した場合の上限
* `minAmount (double|null)`: 支払い額を範囲指定した場合の下限
* `description (string)`: 支払いQRコードの説明文(アプリ上で取引の説明文として表示される)
* `account (AccountWithUser)`: 支払いQRコード発行ウォレット
* `isDisabled (boolean)`: 無効化されているかどうか
* `token (string)`: 

`account`は [AccountWithUser](#account-with-user) オブジェクトを返します。

<a name="cashtray"></a>
## Cashtray
* `id (string)`: Cashtray自体のIDです。
* `amount (double)`: 取引金額
* `description (string)`: Cashtrayの説明文
* `account (AccountWithUser)`: 発行店舗のウォレット
* `expiresAt (\DateTime)`: Cashtrayの失効日時
* `canceledAt (\DateTime|null)`: Cashtrayの無効化日時。NULLの場合は無効化されていません
* `token (string)`: 

`account`は [AccountWithUser](#account-with-user) オブジェクトを返します。

<a name="cashtray-with-result"></a>
## CashtrayWithResult
* `id (string)`: CashtrayのID
* `amount (double)`: 取引金額
* `description (string)`: Cashtrayの説明文(アプリ上で取引の説明文として表示される)
* `account (AccountWithUser)`: 発行店舗のウォレット
* `expiresAt (\DateTime)`: Cashtrayの失効日時
* `canceledAt (\DateTime|null)`: Cashtrayの無効化日時。NULLの場合は無効化されていません
* `token (string)`: 
* `attempt (CashtrayAttempt)`: Cashtray読み取り結果
* `transaction (Transaction)`: 取引結果

`account`は [AccountWithUser](#account-with-user) オブジェクトを返します。

`attempt`は [CashtrayAttempt](#cashtray-attempt) オブジェクトを返します。

`transaction`は [Transaction](#transaction) オブジェクトを返します。

<a name="user"></a>
## User
* `id (string)`: ユーザー (または店舗) ID
* `name (string)`: ユーザー (または店舗) 名
* `isMerchant (boolean)`: 店舗ユーザーかどうか

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

<a name="bulk-transaction"></a>
## BulkTransaction
* `requestId (string)`: リクエストID
* `name (string)`: バルクチャージ管理用の名前
* `description (string)`: バルクチャージ管理用の説明文
* `status (string)`: バルクチャージの状態
* `submittedAt (\DateTime)`: バルクチャージが登録された日時
* `updatedAt (\DateTime)`: バルクチャージが更新された日時

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

<a name="paginated-transfers"></a>
## PaginatedTransfers
* `rows (Transfer[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [Transfer](#transfer) オブジェクトの配列を返します。

`pagination`は [Pagination](#pagination) オブジェクトを返します。

<a name="paginated-accounts"></a>
## PaginatedAccounts
* `rows (Account[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [Account](#account) オブジェクトの配列を返します。

`pagination`は [Pagination](#pagination) オブジェクトを返します。

<a name="paginated-account-balance"></a>
## PaginatedAccountBalance
* `rows (AccountBalance[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [AccountBalance](#account-balance) オブジェクトの配列を返します。

`pagination`は [Pagination](#pagination) オブジェクトを返します。

<a name="paginated-shops"></a>
## PaginatedShops
* `rows (ShopWithMetadata[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [ShopWithMetadata](#shop-with-metadata) オブジェクトの配列を返します。

`pagination`は [Pagination](#pagination) オブジェクトを返します。

<a name="paginated-bills"></a>
## PaginatedBills
* `rows (Bill[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [Bill](#bill) オブジェクトの配列を返します。

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
* `enableTopupByMember (boolean|null)`: 加盟店によるチャージが有効かどうか
* `accountImage (string|null)`: マネーの画像URL

`organization`は [Organization](#organization) オブジェクトを返します。

<a name="cashtray-attempt"></a>
## CashtrayAttempt
* `account (AccountWithUser)`: エンドユーザーのウォレット
* `statusCode (double)`: ステータスコード
* `errorType (string)`: エラー型
* `errorMessage (string)`: エラーメッセージ
* `createdAt (\DateTime)`: Cashtray読み取り記録の作成日時

`account`は [AccountWithUser](#account-with-user) オブジェクトを返します。

<a name="account"></a>
## Account
* `id (string)`: ウォレットID
* `name (string)`: ウォレット名
* `isSuspended (boolean)`: ウォレットが凍結されているかどうか
* `privateMoney (PrivateMoney)`: 設定マネー情報

`private_money`は [PrivateMoney](#private-money) オブジェクトを返します。

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

<a name="account-balance"></a>
## AccountBalance
* `expiresAt (\DateTime)`: 
* `moneyAmount (double)`: 
* `pointAmount (double)`: 

<a name="shop-with-metadata"></a>
## ShopWithMetadata
* `id (string)`: 店舗ID
* `name (string)`: 店舗名
* `organizationCode (string)`: 組織コード
* `postalCode (string|null)`: 店舗の郵便番号
* `address (string|null)`: 店舗の住所
* `tel (string|null)`: 店舗の電話番号
* `email (string|null)`: 店舗のメールアドレス
* `externalId (string|null)`: 店舗の外部ID
