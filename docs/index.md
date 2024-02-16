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

- [GetCpmToken](./transaction.md#get-cpm-token): CPMトークンの状態取得
- [ListTransactions](./transaction.md#list-transactions): 【廃止】取引履歴を取得する
- [CreateTransaction](./transaction.md#create-transaction): 【廃止】チャージする
- [ListTransactionsV2](./transaction.md#list-transactions-v2): 取引履歴を取得する
- [CreateTopupTransaction](./transaction.md#create-topup-transaction): チャージする
- [CreatePaymentTransaction](./transaction.md#create-payment-transaction): 支払いする
- [CreateCpmTransaction](./transaction.md#create-cpm-transaction): CPMトークンによる取引作成
- [CreateTransferTransaction](./transaction.md#create-transfer-transaction): 個人間送金
- [CreateExchangeTransaction](./transaction.md#create-exchange-transaction): 
- [GetTransaction](./transaction.md#get-transaction): 取引情報を取得する
- [RefundTransaction](./transaction.md#refund-transaction): 取引をキャンセルする
- [GetTransactionByRequestId](./transaction.md#get-transaction-by-request-id): リクエストIDから取引情報を取得する
- [RequestUserStats](./transaction.md#request-user-stats): 指定期間内の顧客が行った取引の統計情報をCSVでダウンロードする
- [GetAccountTransferSummary](./transfer.md#get-account-transfer-summary): 
- [ListTransfers](./transfer.md#list-transfers): 
- [ListTransfersV2](./transfer.md#list-transfers-v2): 
- [CreateCheck](./check.md#create-check): チャージQRコードの発行
- [ListChecks](./check.md#list-checks): チャージQRコード一覧の取得
- [GetCheck](./check.md#get-check): チャージQRコードの表示
- [UpdateCheck](./check.md#update-check): チャージQRコードの更新
- [CreateTopupTransactionWithCheck](./check.md#create-topup-transaction-with-check): チャージQRコードを読み取ることでチャージする
- [ListBills](./bill.md#list-bills): 支払いQRコード一覧を表示する
- [CreateBill](./bill.md#create-bill): 支払いQRコードの発行
- [UpdateBill](./bill.md#update-bill): 支払いQRコードの更新
- [CreateCashtray](./cashtray.md#create-cashtray): Cashtrayを作る
- [GetCashtray](./cashtray.md#get-cashtray): Cashtrayの情報を取得する
- [CancelCashtray](./cashtray.md#cancel-cashtray): Cashtrayを無効化する
- [UpdateCashtray](./cashtray.md#update-cashtray): Cashtrayの情報を更新する
- [GetAccount](./customer.md#get-account): ウォレット情報を表示する
- [UpdateAccount](./customer.md#update-account): ウォレット情報を更新する
- [DeleteAccount](./customer.md#delete-account): ウォレットを退会する
- [ListAccountBalances](./customer.md#list-account-balances): エンドユーザーの残高内訳を表示する
- [ListAccountExpiredBalances](./customer.md#list-account-expired-balances): エンドユーザーの失効済みの残高内訳を表示する
- [UpdateCustomerAccount](./customer.md#update-customer-account): エンドユーザーのウォレット情報を更新する
- [GetCustomerAccounts](./customer.md#get-customer-accounts): エンドユーザーのウォレット一覧を表示する
- [CreateCustomerAccount](./customer.md#create-customer-account): 新規エンドユーザーをウォレットと共に追加する
- [GetShopAccounts](./customer.md#get-shop-accounts): 店舗ユーザーのウォレット一覧を表示する
- [ListCustomerTransactions](./customer.md#list-customer-transactions): 取引履歴を取得する
- [ListOrganizations](./organization.md#list-organizations): 加盟店組織の一覧を取得する
- [CreateOrganization](./organization.md#create-organization): 新規加盟店組織を追加する
- [ListShops](./shop.md#list-shops): 店舗一覧を取得する
- [CreateShop](./shop.md#create-shop): 【廃止】新規店舗を追加する
- [CreateShopV2](./shop.md#create-shop-v2): 新規店舗を追加する
- [GetShop](./shop.md#get-shop): 店舗情報を表示する
- [UpdateShop](./shop.md#update-shop): 店舗情報を更新する
- [ListUserAccounts](./account.md#list-user-accounts): エンドユーザー、店舗ユーザーのウォレット一覧を表示する
- [CreateUserAccount](./account.md#create-user-account): エンドユーザーのウォレットを作成する
- [GetPrivateMoneys](./private_money.md#get-private-moneys): マネー一覧を取得する
- [GetPrivateMoneyOrganizationSummaries](./private_money.md#get-private-money-organization-summaries): 決済加盟店の取引サマリを取得する
- [GetPrivateMoneySummary](./private_money.md#get-private-money-summary): 取引サマリを取得する
- [BulkCreateTransaction](./bulk.md#bulk-create-transaction): CSVファイル一括取引
- [CreateExternalTransaction](./event.md#create-external-transaction): ポケペイ外部取引を作成する
- [RefundExternalTransaction](./event.md#refund-external-transaction): ポケペイ外部取引をキャンセルする
- [CreateCampaign](./campaign.md#create-campaign): ポイント付与キャンペーンを作る
- [ListCampaigns](./campaign.md#list-campaigns): キャンペーン一覧を取得する
- [GetCampaign](./campaign.md#get-campaign): キャンペーンを取得する
- [UpdateCampaign](./campaign.md#update-campaign): ポイント付与キャンペーンを更新する
- [CreateWebhook](./webhook.md#create-webhook): webhookの作成
- [ListWebhooks](./webhook.md#list-webhooks): 作成したWebhookの一覧を返す
- [UpdateWebhook](./webhook.md#update-webhook): Webhookの更新
- [DeleteWebhook](./webhook.md#delete-webhook): Webhookの削除
- [ListCoupons](./coupon.md#list-coupons): クーポン一覧の取得
- [CreateCoupon](./coupon.md#create-coupon): クーポンの登録
- [GetCoupon](./coupon.md#get-coupon): クーポンの取得
- [UpdateCoupon](./coupon.md#update-coupon): クーポンの更新
- [CreateUserDevice](./user_device.md#create-user-device): ユーザーのデバイス登録
- [GetUserDevice](./user_device.md#get-user-device): ユーザーのデバイスを取得
- [ActivateUserDevice](./user_device.md#activate-user-device): デバイスの有効化
- [CreateBank](./bank_pay.md#create-bank): 銀行口座の登録
- [ListBanks](./bank_pay.md#list-banks): 登録した銀行の一覧
- [CreateBankTopupTransaction](./bank_pay.md#create-bank-topup-transaction): 銀行からのチャージ
### Transaction
<a name="get-cpm-token"></a>
#### CPMトークンの状態取得
CPMトークンの現在の状態を取得します。CPMトークンの有効期限やCPM取引の状態を返します。
```php
$request = new Request\GetCpmToken(
    "WpdUvBBp2JsuVIINCRpxja"                      // cpmToken: CPMトークン
);
```
#### Parameters
**`cpm_token`**  
CPM取引時にエンドユーザーが店舗に提示するバーコードを解析して得られる22桁の文字列です。
```json
{
  "type": "string",
  "minLength": 22,
  "maxLength": 22
}
```

成功したときは[CpmToken](#cpm-token)オブジェクトを返します


---


<a name="list-transactions"></a>
#### 【廃止】取引履歴を取得する
取引一覧を返します。
```php
$request = new Request\ListTransactions(
    [
        'from' => "2023-01-13T02:21:08.000000+09:00", // 開始日時
        'to' => "2023-04-23T22:54:47.000000+09:00", // 終了日時
        'page' => 1,                              // ページ番号
        'per_page' => 50,                         // 1ページ分の取引数
        'shop_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 店舗ID
        'customer_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // エンドユーザーID
        'customer_name' => "太郎",                  // エンドユーザー名
        'terminal_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 端末ID
        'transaction_id' => "e48LNXq",            // 取引ID
        'organization_code' => "pocketchange",    // 組織コード
        'private_money_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // マネーID
        'is_modified' => TRUE,                    // キャンセルフラグ
        'types' => ["topup", "payment"],          // 取引種別 (複数指定可)、チャージ=topup、支払い=payment
        'description' => "店頭QRコードによる支払い"          // 取引説明文
    ]
);
```
#### Parameters
**`from`**  
抽出期間の開始日時です。

フィルターとして使われ、開始日時以降に発生した取引のみ一覧に表示されます。
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`to`**  
抽出期間の終了日時です。

フィルターとして使われ、終了日時以前に発生した取引のみ一覧に表示されます。
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`page`**  
取得したいページ番号です。
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`per_page`**  
1ページ分の取引数です。
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`shop_id`**  
店舗IDです。

フィルターとして使われ、指定された店舗での取引のみ一覧に表示されます。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`customer_id`**  
エンドユーザーIDです。

フィルターとして使われ、指定されたエンドユーザーでの取引のみ一覧に表示されます。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`customer_name`**  
エンドユーザー名です。

フィルターとして使われ、入力された名前に部分一致するエンドユーザーでの取引のみ一覧に表示されます。
```json
{
  "type": "string",
  "maxLength": 256
}
```

**`terminal_id`**  
端末IDです。

フィルターとして使われ、指定された端末での取引のみ一覧に表示されます。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`transaction_id`**  
取引IDです。

フィルターとして使われ、指定された取引IDに部分一致(前方一致)する取引のみが一覧に表示されます。
```json
{
  "type": "string"
}
```

**`organization_code`**  
組織コードです。

フィルターとして使われ、指定された組織での取引のみ一覧に表示されます。
```json
{
  "type": "string",
  "maxLength": 32,
  "pattern": "^[a-zA-Z0-9-]*$"
}
```

**`private_money_id`**  
マネーIDです。

フィルターとして使われ、指定したマネーでの取引のみ一覧に表示されます。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`is_modified`**  
キャンセルフラグです。

これにtrueを指定するとキャンセルされた取引のみ一覧に表示されます。
デフォルト値はfalseで、キャンセルの有無にかかわらず一覧に表示されます。
```json
{
  "type": "boolean"
}
```

**`types`**  
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

5. cashback
   退会時返金取引

6. expire
   退会時失効取引
```json
{
  "type": "array",
  "items": {
    "type": "string",
    "enum": [
      "topup",
      "payment",
      "exchange_outflow",
      "exchange_inflow",
      "cashback",
      "expire"
    ]
  }
}
```

**`description`**  
取引を指定の取引説明文でフィルターします。

取引説明文が完全一致する取引のみ抽出されます。取引説明文は最大200文字で記録されています。
```json
{
  "type": "string",
  "maxLength": 200
}
```

成功したときは[PaginatedTransaction](#paginated-transaction)オブジェクトを返します


---


<a name="create-transaction"></a>
#### 【廃止】チャージする
チャージ取引を作成します。このAPIは廃止予定です。以降は `CreateTopupTransaction` を使用してください。
```php
$request = new Request\CreateTransaction(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
    [
        'money_amount' => 368,
        'point_amount' => 3185,
        'point_expires_at' => "2021-05-28T12:41:52.000000+09:00", // ポイント有効期限
        'description' => "JtjZwJILsuUBm8J0tu2v6zDKp9iO7Ari3UHmo6XPE5Oqy1DljVh9nsqgzongKg5SFSpcaiWqMVEyXiabD2fPkrS1NvYbmwucdTPjBOMyHVeFGY5vB7gjE0J3rzoZQgeuXW4rw3Ob3VUIWbzDljJ6k"
    ]
);
```
#### Parameters
**`shop_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`customer_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`private_money_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`money_amount`**  
```json
{
  "type": "integer",
  "format": "decimal",
  "minimum": 0
}
```

**`point_amount`**  
```json
{
  "type": "integer",
  "format": "decimal",
  "minimum": 0
}
```

**`point_expires_at`**  
ポイントをチャージした場合の、付与されるポイントの有効期限です。
省略した場合はマネーに設定された有効期限と同じものがポイントの有効期限となります。
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`description`**  
```json
{
  "type": "string",
  "maxLength": 200
}
```

成功したときは[TransactionDetail](#transaction-detail)オブジェクトを返します


---


<a name="list-transactions-v2"></a>
#### 取引履歴を取得する
取引一覧を返します。
```php
$request = new Request\ListTransactionsV2(
    [
        'private_money_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // マネーID
        'organization_code' => "pocketchange",    // 組織コード
        'shop_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 店舗ID
        'terminal_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 端末ID
        'customer_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // エンドユーザーID
        'customer_name' => "太郎",                  // エンドユーザー名
        'description' => "店頭QRコードによる支払い",         // 取引説明文
        'transaction_id' => "lDtciJUcw",          // 取引ID
        'is_modified' => FALSE,                   // キャンセルフラグ
        'types' => ["topup", "payment"],          // 取引種別 (複数指定可)、チャージ=topup、支払い=payment
        'from' => "2021-05-04T05:57:05.000000+09:00", // 開始日時
        'to' => "2020-08-06T18:44:30.000000+09:00", // 終了日時
        'next_page_cursor_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 次ページへ遷移する際に起点となるtransactionのID
        'prev_page_cursor_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 前ページへ遷移する際に起点となるtransactionのID
        'per_page' => 50                          // 1ページ分の取引数
    ]
);
```
#### Parameters
**`private_money_id`**  
マネーIDです。

指定したマネーでの取引が一覧に表示されます。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`organization_code`**  
組織コードです。

フィルターとして使われ、指定された組織の店舗での取引のみ一覧に表示されます。
```json
{
  "type": "string",
  "maxLength": 32,
  "pattern": "^[a-zA-Z0-9-]*$"
}
```

**`shop_id`**  
店舗IDです。

フィルターとして使われ、指定された店舗での取引のみ一覧に表示されます。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`terminal_id`**  
端末IDです。

フィルターとして使われ、指定された端末での取引のみ一覧に表示されます。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`customer_id`**  
エンドユーザーIDです。

フィルターとして使われ、指定されたエンドユーザーの取引のみ一覧に表示されます。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`customer_name`**  
エンドユーザー名です。

フィルターとして使われ、入力された名前に部分一致するエンドユーザーでの取引のみ一覧に表示されます。
```json
{
  "type": "string",
  "maxLength": 256
}
```

**`description`**  
取引を指定の取引説明文でフィルターします。

取引説明文が完全一致する取引のみ抽出されます。取引説明文は最大200文字で記録されています。
```json
{
  "type": "string",
  "maxLength": 200
}
```

**`transaction_id`**  
取引IDです。

フィルターとして使われ、指定された取引IDに部分一致(前方一致)する取引のみが一覧に表示されます。
```json
{
  "type": "string"
}
```

**`is_modified`**  
キャンセルフラグです。

これにtrueを指定するとキャンセルされた取引のみ一覧に表示されます。
デフォルト値はfalseで、キャンセルの有無にかかわらず一覧に表示されます。
```json
{
  "type": "boolean"
}
```

**`types`**  
取引の種類でフィルターします。

以下の種類を指定できます。

1. topup
   店舗からエンドユーザーへの送金取引(チャージ)

2. payment
   エンドユーザーから店舗への送金取引(支払い)

3. exchange-outflow
   他マネーへの流出
   private_money_idが指定されたとき、そのマネーから見て流出方向の交換取引が抽出されます。
   private_money_idを省略した場合は表示されません。

4. exchange-inflow
   他マネーからの流入
   private_money_idが指定されたとき、そのマネーから見て流入方向の交換取引が抽出されます。
   private_money_idを省略した場合は表示されません。

5. cashback
   退会時返金取引

6. expire
   退会時失効取引
```json
{
  "type": "array",
  "items": {
    "type": "string",
    "enum": [
      "topup",
      "payment",
      "exchange_outflow",
      "exchange_inflow",
      "cashback",
      "expire"
    ]
  }
}
```

**`from`**  
抽出期間の開始日時です。

フィルターとして使われ、開始日時以降に発生した取引のみ一覧に表示されます。
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`to`**  
抽出期間の終了日時です。

フィルターとして使われ、終了日時以前に発生した取引のみ一覧に表示されます。
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`next_page_cursor_id`**  
次ページへ遷移する際に起点となるtransactionのID(前ページの末尾要素のID)です。
本APIのレスポンスにもnext_page_cursor_idが含まれており、これがnull値の場合は最後のページであることを意味します。
UUIDである場合は次のページが存在することを意味し、このnext_page_cursor_idをリクエストパラメータに含めることで次ページに遷移します。

next_page_cursor_idのtransaction自体は次のページには含まれません。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`prev_page_cursor_id`**  
前ページへ遷移する際に起点となるtransactionのID(次ページの先頭要素のID)です。

本APIのレスポンスにもprev_page_cursor_idが含まれており、これがnull値の場合は先頭のページであることを意味します。
UUIDである場合は前のページが存在することを意味し、このprev_page_cursor_idをリクエストパラメータに含めることで前ページに遷移します。

prev_page_cursor_idのtransaction自体は前のページには含まれません。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`per_page`**  
1ページ分の取引数です。

デフォルト値は50です。
```json
{
  "type": "integer",
  "minimum": 1,
  "maximum": 1000
}
```

成功したときは[PaginatedTransactionV2](#paginated-transaction-v2)オブジェクトを返します


---


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
        'money_amount' => 6030,                   // マネー額
        'point_amount' => 5404,                   // ポイント額
        'point_expires_at' => "2022-04-11T11:56:25.000000+09:00", // ポイント有効期限
        'description' => "初夏のチャージキャンペーン",         // 取引履歴に表示する説明文
        'metadata' => "{\"key\":\"value\"}",      // 取引メタデータ
        'request_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx" // リクエストID
    ]
);
```
#### Parameters
**`shop_id`**  
店舗IDです。

送金元の店舗を指定します。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`customer_id`**  
エンドユーザーIDです。

送金先のエンドユーザーを指定します。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`private_money_id`**  
マネーIDです。

マネーを指定します。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`bear_point_shop_id`**  
ポイント支払時の負担店舗IDです。

ポイント支払い時に実際お金を負担する店舗を指定します。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`money_amount`**  
マネー額です。

送金するマネー額を指定します。
デフォルト値は0で、money_amountとpoint_amountの両方が0のときにはinvalid_parameter_both_point_and_money_are_zero(エラーコード400)が返ります。
```json
{
  "type": "integer",
  "minimum": 0
}
```

**`point_amount`**  
ポイント額です。

送金するポイント額を指定します。
デフォルト値は0で、money_amountとpoint_amountの両方が0のときにはinvalid_parameter_both_point_and_money_are_zero(エラーコード400)が返ります。
```json
{
  "type": "integer",
  "minimum": 0
}
```

**`point_expires_at`**  
ポイントをチャージした場合の、付与されるポイントの有効期限です。
省略した場合はマネーに設定された有効期限と同じものがポイントの有効期限となります。
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`description`**  
取引説明文です。

任意入力で、取引履歴に表示される説明文です。
```json
{
  "type": "string",
  "maxLength": 200
}
```

**`metadata`**  
取引作成時に指定されるメタデータです。

任意入力で、全てのkeyとvalueが文字列であるようなフラットな構造のJSON文字列で指定します。
```json
{
  "type": "string",
  "format": "json"
}
```

**`request_id`**  
取引作成APIの羃等性を担保するためのリクエスト固有のIDです。

取引作成APIで結果が受け取れなかったなどの理由で再試行する際に、二重に取引が作られてしまうことを防ぐために、クライアント側から指定されます。指定は任意で、UUID V4フォーマットでランダム生成した文字列です。リクエストIDは一定期間で削除されます。

リクエストIDを指定したとき、まだそのリクエストIDに対する取引がない場合、新規に取引が作られレスポンスとして返されます。もしそのリクエストIDに対する取引が既にある場合、既存の取引がレスポンスとして返されます。
```json
{
  "type": "string",
  "format": "uuid"
}
```

成功したときは[TransactionDetail](#transaction-detail)オブジェクトを返します


---


<a name="create-payment-transaction"></a>
#### 支払いする
支払取引を作成します。
支払い時には、エンドユーザーの残高のうち、ポイント残高から優先的に消費されます。

```php
$request = new Request\CreatePaymentTransaction(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // shopId: 店舗ID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // customerId: エンドユーザーID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    1575,                                         // amount: 支払い額
    [
        'description' => "たい焼き(小倉)",              // 取引履歴に表示する説明文
        'metadata' => "{\"key\":\"value\"}",      // 取引メタデータ
        'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
, ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
, ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
],                                                // 商品情報データ
        'request_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx" // リクエストID
    ]
);
```
#### Parameters
**`shop_id`**  
店舗IDです。

送金先の店舗を指定します。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`customer_id`**  
エンドユーザーIDです。

送金元のエンドユーザーを指定します。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`private_money_id`**  
マネーIDです。

マネーを指定します。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`amount`**  
マネー額です。

送金するマネー額を指定します。
```json
{
  "type": "integer",
  "minimum": 0
}
```

**`description`**  
取引説明文です。

任意入力で、取引履歴に表示される説明文です。
```json
{
  "type": "string",
  "maxLength": 200
}
```

**`metadata`**  
取引作成時に指定されるメタデータです。

任意入力で、全てのkeyとvalueが文字列であるようなフラットな構造のJSON文字列で指定します。
```json
{
  "type": "string",
  "format": "json"
}
```

**`products`**  
一つの取引に含まれる商品情報データです。
以下の内容からなるJSONオブジェクトの配列で指定します。

- `jan_code`: JANコード。64字以下の文字列
- `name`: 商品名。256字以下の文字列
- `unit_price`: 商品単価。0以上の数値
- `price`: 全体の金額(例: 商品単価 × 個数)。0以上の数値
- `is_discounted`: 賞味期限が近いなどの理由で商品が値引きされているかどうかのフラグ。boolean
- `other`: その他商品に関する情報。JSONオブジェクトで指定します。
```json
{
  "type": "array",
  "items": {
    "type": "object"
  }
}
```

**`request_id`**  
取引作成APIの羃等性を担保するためのリクエスト固有のIDです。

取引作成APIで結果が受け取れなかったなどの理由で再試行する際に、二重に取引が作られてしまうことを防ぐために、クライアント側から指定されます。指定は任意で、UUID V4フォーマットでランダム生成した文字列です。リクエストIDは一定期間で削除されます。

リクエストIDを指定したとき、まだそのリクエストIDに対する取引がない場合、新規に取引が作られレスポンスとして返されます。もしそのリクエストIDに対する取引が既にある場合、既存の取引がレスポンスとして返されます。
```json
{
  "type": "string",
  "format": "uuid"
}
```

成功したときは[TransactionDetail](#transaction-detail)オブジェクトを返します


---


<a name="create-cpm-transaction"></a>
#### CPMトークンによる取引作成
CPMトークンにより取引を作成します。
CPMトークンに設定されたスコープの取引を作ることができます。

```php
$request = new Request\CreateCpmTransaction(
    "r4yYsQVBNqeXloDbzzGADk",                     // cpmToken: CPMトークン
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // shopId: 店舗ID
    870.0,                                        // amount: 取引金額
    [
        'description' => "たい焼き(小倉)",              // 取引説明文
        'metadata' => "{\"key\":\"value\"}",      // 店舗側メタデータ
        'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
],                                                // 商品情報データ
        'request_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx" // リクエストID
    ]
);
```
#### Parameters
**`cpm_token`**  
エンドユーザーによって作られ、アプリなどに表示され、店舗に対して提示される22桁の文字列です。

エンドユーザーによって許可された取引のスコープを持っています。
```json
{
  "type": "string",
  "minLength": 22,
  "maxLength": 22
}
```

**`shop_id`**  
店舗IDです。

支払いやチャージを行う店舗を指定します。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`amount`**  
取引金額を指定します。

正の値を与えるとチャージになり、負の値を与えると支払いとなります。
```json
{
  "type": "number"
}
```

**`description`**  
取引説明文です。

エンドユーザーアプリの取引履歴などに表示されます。
```json
{
  "type": "string",
  "maxLength": 200
}
```

**`metadata`**  
取引作成時に店舗側から指定されるメタデータです。

任意入力で、全てのkeyとvalueが文字列であるようなフラットな構造のJSON文字列で指定します。
```json
{
  "type": "string",
  "format": "json"
}
```

**`products`**  
一つの取引に含まれる商品情報データです。
以下の内容からなるJSONオブジェクトの配列で指定します。

- `jan_code`: JANコード。64字以下の文字列
- `name`: 商品名。256字以下の文字列
- `unit_price`: 商品単価。0以上の数値
- `price`: 全体の金額(例: 商品単価 × 個数)。0以上の数値
- `is_discounted`: 賞味期限が近いなどの理由で商品が値引きされているかどうかのフラグ。boolean
- `other`: その他商品に関する情報。JSONオブジェクトで指定します。
```json
{
  "type": "array",
  "items": {
    "type": "object"
  }
}
```

**`request_id`**  
取引作成APIの羃等性を担保するためのリクエスト固有のIDです。

取引作成APIで結果が受け取れなかったなどの理由で再試行する際に、二重に取引が作られてしまうことを防ぐために、クライアント側から指定されます。指定は任意で、UUID V4フォーマットでランダム生成した文字列です。リクエストIDは一定期間で削除されます。

リクエストIDを指定したとき、まだそのリクエストIDに対する取引がない場合、新規に取引が作られレスポンスとして返されます。もしそのリクエストIDに対する取引が既にある場合、既存の取引がレスポンスとして返されます。
```json
{
  "type": "string",
  "format": "uuid"
}
```

成功したときは[TransactionDetail](#transaction-detail)オブジェクトを返します


---


<a name="create-transfer-transaction"></a>
#### 個人間送金
エンドユーザー間での送金取引(個人間送金)を作成します。
個人間送金で送れるのはマネーのみで、ポイントを送ることはできません。送金元のマネー残高のうち、有効期限が最も遠いものから順に送金されます。

```php
$request = new Request\CreateTransferTransaction(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // senderId: 送金元ユーザーID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // receiverId: 受取ユーザーID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    6794.0,                                       // amount: 送金額
    [
        'metadata' => "{\"key\":\"value\"}",      // 取引メタデータ
        'description' => "たい焼き(小倉)",              // 取引履歴に表示する説明文
        'request_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx" // リクエストID
    ]
);
```
#### Parameters
**`sender_id`**  
エンドユーザーIDです。

送金元のエンドユーザー(送り主)を指定します。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`receiver_id`**  
エンドユーザーIDです。

送金先のエンドユーザー(受け取り人)を指定します。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`private_money_id`**  
マネーIDです。

マネーを指定します。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`amount`**  
マネー額です。

送金するマネー額を指定します。
```json
{
  "type": "number",
  "minimum": 0
}
```

**`metadata`**  
取引作成時に指定されるメタデータです。

任意入力で、全てのkeyとvalueが文字列であるようなフラットな構造のJSON文字列で指定します。
```json
{
  "type": "string",
  "format": "json"
}
```

**`description`**  
取引説明文です。

任意入力で、取引履歴に表示される説明文です。
```json
{
  "type": "string",
  "maxLength": 200
}
```

**`request_id`**  
取引作成APIの羃等性を担保するためのリクエスト固有のIDです。

取引作成APIで結果が受け取れなかったなどの理由で再試行する際に、二重に取引が作られてしまうことを防ぐために、クライアント側から指定されます。指定は任意で、UUID V4フォーマットでランダム生成した文字列です。リクエストIDは一定期間で削除されます。

リクエストIDを指定したとき、まだそのリクエストIDに対する取引がない場合、新規に取引が作られレスポンスとして返されます。もしそのリクエストIDに対する取引が既にある場合、既存の取引がレスポンスとして返されます。
```json
{
  "type": "string",
  "format": "uuid"
}
```

成功したときは[TransactionDetail](#transaction-detail)オブジェクトを返します


---


<a name="create-exchange-transaction"></a>
#### 
```php
$request = new Request\CreateExchangeTransaction(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
    189,
    [
        'description' => "KTboQcaiYXr4rnNnjCoeQHMuXiGNUysmU86lvAOTbcLzXO1sbMRuBNUlL6K0ReLv75kg6qcs3cEpI1m3wABqtL3bdaVTKdkTjUxGpAh3awQssfAXqJYYr4ARYbJcmLujs894lRg4qB30GRMkbzDn742v8m6fDAksXCcjSnMwkyUVD7CNlqSrG8bUcu2404OwW2",
        'request_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx" // リクエストID
    ]
);
```
#### Parameters
**`user_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`sender_private_money_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`receiver_private_money_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`amount`**  
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`description`**  
```json
{
  "type": "string",
  "maxLength": 200
}
```

**`request_id`**  
取引作成APIの羃等性を担保するためのリクエスト固有のIDです。

取引作成APIで結果が受け取れなかったなどの理由で再試行する際に、二重に取引が作られてしまうことを防ぐために、クライアント側から指定されます。指定は任意で、UUID V4フォーマットでランダム生成した文字列です。リクエストIDは一定期間で削除されます。

リクエストIDを指定したとき、まだそのリクエストIDに対する取引がない場合、新規に取引が作られレスポンスとして返されます。もしそのリクエストIDに対する取引が既にある場合、既存の取引がレスポンスとして返されます。
```json
{
  "type": "string",
  "format": "uuid"
}
```

成功したときは[TransactionDetail](#transaction-detail)オブジェクトを返します


---


<a name="get-transaction"></a>
#### 取引情報を取得する
取引を取得します。
```php
$request = new Request\GetTransaction(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // transactionId: 取引ID
);
```
#### Parameters
**`transaction_id`**  
取引IDです。

フィルターとして使われ、指定した取引IDの取引を取得します。
```json
{
  "type": "string",
  "format": "uuid"
}
```

成功したときは[TransactionDetail](#transaction-detail)オブジェクトを返します


---


<a name="refund-transaction"></a>
#### 取引をキャンセルする
取引IDを指定して取引をキャンセルします。

発行体の管理者は自組織の直営店、または発行しているマネーの決済加盟店組織での取引をキャンセルできます。
キャンセル対象の取引に付随するポイント還元キャンペーンやクーポン適用も取り消されます。

チャージ取引のキャンセル時に返金すべき残高が足りないときは `account_balance_not_enough (422)` エラーが返ります。
取引をキャンセルできるのは1回きりです。既にキャンセルされた取引を重ねてキャンセルしようとすると `transaction_already_refunded (422)` エラーが返ります。
```php
$request = new Request\RefundTransaction(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // transactionId: 取引ID
    [
        'description' => "返品対応のため",               // 取引履歴に表示する返金事由
        'returning_point_expires_at' => "2024-01-23T09:55:29.000000+09:00" // 返却ポイントの有効期限
    ]
);
```
#### Parameters
**`transaction_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`description`**  
```json
{
  "type": "string",
  "maxLength": 200
}
```

**`returning_point_expires_at`**  
ポイント支払いを含む支払い取引をキャンセルする際にユーザへ返却されるポイントの有効期限です。デフォルトでは未指定です。
```json
{
  "type": "string",
  "format": "date-time"
}
```

成功したときは[TransactionDetail](#transaction-detail)オブジェクトを返します


---


<a name="get-transaction-by-request-id"></a>
#### リクエストIDから取引情報を取得する
取引を取得します。
```php
$request = new Request\GetTransactionByRequestId(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // requestId: リクエストID
);
```
#### Parameters
**`request_id`**  
取引作成時にクライアントが生成し指定するリクエストIDです。

リクエストIDに対応する取引が存在すればその取引を返し、無ければNotFound(404)を返します。
```json
{
  "type": "string",
  "format": "uuid"
}
```

成功したときは[TransactionDetail](#transaction-detail)オブジェクトを返します


---


<a name="request-user-stats"></a>
#### 指定期間内の顧客が行った取引の統計情報をCSVでダウンロードする
期間を指定して、期間内に発行マネーの全顧客が行った取引の総額・回数などをCSVでダウンロードする機能です。
CSVの作成は非同期で行われるため完了まで少しの間待つ必要がありますが、完了時にダウンロードできるURLをレスポンスとして返します。
このURLの有効期限はリクエスト日時から7日間です。

ダウンロードできるCSVのデータは以下のものです。

* organization_code: 取引を行った組織コード
* private_money_id: 取引されたマネーのID
* private_money_name: 取引されたマネーの名前
* user_id: 決済したユーザーID
* user_external_id: 決済したユーザーの外部ID
* payment_money_amount: 指定期間内に決済に使ったマネーの総額
* payment_point_amount: 指定期間内に決済に使ったポイントの総額
* payment_transaction_count: 指定期間内に決済した回数。キャンセルされた取引は含まない

また、指定期間より前の決済を時間をおいてキャンセルした場合などには payment_money_amount, payment_point_amount, payment_transaction_count が負の値になることもあることに留意してください。
```php
$request = new Request\RequestUserStats(
    "2022-05-20T17:56:49.000000+09:00",           // from: 集計期間の開始時刻
    "2023-12-10T01:16:11.000000+09:00"            // to: 集計期間の終了時刻
);
```
#### Parameters
**`from`**  
集計する期間の開始時刻をISO8601形式で指定します。
時刻は現在時刻、及び `to` で指定する時刻以前である必要があります。
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`to`**  
集計する期間の終了時刻をISO8601形式で指定します。
時刻は現在時刻、及び `from` で指定する時刻の間である必要があります。
```json
{
  "type": "string",
  "format": "date-time"
}
```

成功したときは[UserStatsOperation](#user-stats-operation)オブジェクトを返します


---


### Transfer
<a name="get-account-transfer-summary"></a>
#### 
ウォレットを指定して取引明細種別毎の集計を返す
```php
$request = new Request\GetAccountTransferSummary(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // accountId: ウォレットID
    [
        'from' => "2023-08-08T19:58:17.000000+09:00", // 集計期間の開始時刻
        'to' => "2022-05-11T17:31:47.000000+09:00", // 集計期間の終了時刻
        'transfer_types' => ["topup", "payment"]  // 取引明細種別 (複数指定可)
    ]
);
```
#### Parameters
**`account_id`**  
ウォレットIDです。

ここで指定したウォレットIDの取引明細レベルでの集計を取得します。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`from`**  
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`to`**  
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`transfer_types`**  
取引明細の種別でフィルターします。
以下の種別を指定できます。

- payment
  エンドユーザーから店舗への送金取引(支払い取引)
- topup
  店舗からエンドユーザーへの送金取引(チャージ取引)
- campaign-topup
  キャンペーンによるエンドユーザーへのポイント付与取引(ポイントチャージ)
- use-coupon
  支払い時のクーポン使用による値引き取引
- refund-payment
  支払い取引に対するキャンセル取引
- refund-topup
  チャージ取引に対するキャンセル取引
- refund-campaign
  キャンペーンによるポイント付与取引に対するキャンセル取引
- refund-coupon
  クーポン使用による値引き取引に対するキャンセル取引
- exchange-inflow
  交換による他マネーからの流入取引
- exchange-outflow
  交換による他マネーへの流出取引
- refund-exchange-inflow
  交換による他マネーからの流入取引に対するキャンセル取引
- refund-exchange-outflow
  交換による他マネーへの流出取引に対するキャンセル取引
```json
{
  "type": "array",
  "items": {
    "type": "string",
    "enum": [
      "payment",
      "topup",
      "campaign-topup",
      "use-coupon",
      "refund-payment",
      "refund-topup",
      "refund-campaign",
      "refund-coupon",
      "exchange-inflow",
      "exchange-outflow",
      "refund-exchange-inflow",
      "refund-exchange-outflow"
    ]
  }
}
```

成功したときは[AccountTransferSummary](#account-transfer-summary)オブジェクトを返します


---


<a name="list-transfers"></a>
#### 
```php
$request = new Request\ListTransfers(
    [
        'from' => "2021-01-17T01:45:17.000000+09:00",
        'to' => "2021-04-02T03:59:22.000000+09:00",
        'page' => 7917,
        'per_page' => 9255,
        'shop_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
        'shop_name' => "o3D8R7F9uqtTYDUe0c6WMBb0vMyrrNo2CtAij6bFWlBc9nMouBhD3xaVyDbF9dQAdVbIjdKodnIqsg2hwfCC3ynrJLnPSb5d8avvWNGGZpHcQub7jyKGPEze4eDg0kaj205Q9Vfs0xgdWlEYjRqPOb8BVVabHLEG4agkq2G8IRGQBS0nchLLndRaY2NqmWOdlkOhTjC67yWA",
        'customer_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
        'customer_name' => "bgIrPt858HfVRa8DX5UPvkC2RO0Ka4lYXy6v8yeYaDtl3yxclWSiWAV8VoZ5q4f3",
        'transaction_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
        'private_money_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
        'is_modified' => TRUE,
        'transaction_types' => ["expire", "cashback"],
        'transfer_types' => ["payment", "expire", "topup", "coupon", "campaign"], // 取引明細の種類でフィルターします。
        'description' => "店頭QRコードによる支払い"          // 取引詳細説明文
    ]
);
```
#### Parameters
**`from`**  
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`to`**  
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`page`**  
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`per_page`**  
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`shop_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`shop_name`**  
```json
{
  "type": "string",
  "maxLength": 256
}
```

**`customer_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`customer_name`**  
```json
{
  "type": "string",
  "maxLength": 256
}
```

**`transaction_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`private_money_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`is_modified`**  
```json
{
  "type": "boolean"
}
```

**`transaction_types`**  
```json
{
  "type": "array",
  "items": {
    "type": "string",
    "enum": [
      "topup",
      "payment",
      "transfer",
      "exchange",
      "cashback",
      "expire"
    ]
  }
}
```

**`transfer_types`**  
取引明細の種類でフィルターします。

以下の種類を指定できます。

1. topup
店舗からエンドユーザーへの送金取引(チャージ)、またはそのキャンセル取引

2. payment
エンドユーザーから店舗への送金取引(支払い)、またはそのキャンセル取引

3. exchange
他マネーへの流出/流入

4. campaign
取引に対するポイント還元キャンペーンによるポイント付与、またはそのキャンセル取引

5. coupon
クーポンによる値引き処理、またはそのキャンセル取引

6. cashback
退会時の返金取引

7. expire
退会時失効取引
```json
{
  "type": "array",
  "items": {
    "type": "string",
    "enum": [
      "topup",
      "payment",
      "exchange",
      "transfer",
      "coupon",
      "campaign",
      "cashback",
      "expire"
    ]
  }
}
```

**`description`**  
取引詳細を指定の取引詳細説明文でフィルターします。

取引詳細説明文が完全一致する取引のみ抽出されます。取引詳細説明文は最大200文字で記録されています。
```json
{
  "type": "string",
  "maxLength": 200
}
```

成功したときは[PaginatedTransfers](#paginated-transfers)オブジェクトを返します


---


<a name="list-transfers-v2"></a>
#### 
```php
$request = new Request\ListTransfersV2(
    [
        'shop_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 店舗ID
        'shop_name' => "uJKrDFgfnOa5xAhF9FsFDzTIAFGDPhpBgKNmzEARJ1rvmqI1bSsRkkjQVB7WPQBN4OQef6ic8PJreX4akuWpKD9afhWN8gpYbk1UQRVGeT6q9QlLL4St0RhV6KdSsO2fKUxMoBriyYb61zvPjBcIHUY8RekKTAhSuM7Lo0VuZ1eCkX9fHokIFlVQAOjB0XTIEf02Fg3NvwAf7hOlSBfFEUcOQMXEYHzF8m9cIjwUyTMaVMoVAP5OP1Cjr", // 店舗名
        'customer_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // エンドユーザーID
        'customer_name' => "zsDN5Z0UkOPXKep1jFsPNeua1jB7iZEF7xhaxWIxTjjuPniB6yr4Okg2Udv9iXSqMQb8J3iQSJeJic2mGuJKmsKLeWViwh5Xh0Ohe1EHst26OluNAixs6BC1rh", // エンドユーザー名
        'transaction_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 取引ID
        'private_money_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // マネーID
        'is_modified' => FALSE,                   // キャンセルフラグ
        'transaction_types' => ["expire", "topup", "cashback", "exchange", "payment"], // 取引種別 (複数指定可)、チャージ=topup、支払い=payment
        'next_page_cursor_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 次ページへ遷移する際に起点となるtransferのID
        'prev_page_cursor_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 前ページへ遷移する際に起点となるtransferのID
        'per_page' => 50,                         // 1ページ分の取引数
        'transfer_types' => ["transfer", "expire"], // 取引明細種別 (複数指定可)
        'description' => "店頭QRコードによる支払い",         // 取引詳細説明文
        'from' => "2024-02-04T17:48:56.000000+09:00", // 開始日時
        'to' => "2021-01-17T07:21:39.000000+09:00" // 終了日時
    ]
);
```
#### Parameters
**`shop_id`**  
店舗IDです。

フィルターとして使われ、指定された店舗での取引のみ一覧に表示されます。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`shop_name`**  
店舗名です。

フィルターとして使われ、入力された名前に部分一致する店舗での取引のみ一覧に表示されます。
```json
{
  "type": "string",
  "maxLength": 256
}
```

**`customer_id`**  
エンドユーザーIDです。

フィルターとして使われ、指定されたエンドユーザーの取引のみ一覧に表示されます。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`customer_name`**  
エンドユーザー名です。

フィルターとして使われ、入力された名前に部分一致するエンドユーザーでの取引のみ一覧に表示されます。
```json
{
  "type": "string",
  "maxLength": 256
}
```

**`transaction_id`**  
取引IDです。

フィルターとして使われ、指定された取引IDに部分一致(前方一致)する取引のみが一覧に表示されます。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`private_money_id`**  
マネーIDです。

指定したマネーでの取引が一覧に表示されます。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`is_modified`**  
キャンセルフラグです。

これにtrueを指定するとキャンセルされた取引のみ一覧に表示されます。
デフォルト値はfalseで、キャンセルの有無にかかわらず一覧に表示されます。
```json
{
  "type": "boolean"
}
```

**`transaction_types`**  
取引の種類でフィルターします。

以下の種類を指定できます。

1. topup
   店舗からエンドユーザーへの送金取引(チャージ)

2. payment
   エンドユーザーから店舗への送金取引(支払い)

3. exchange-outflow
   他マネーへの流出
   private_money_idが指定されたとき、そのマネーから見て流出方向の交換取引が抽出されます。
   private_money_idを省略した場合は表示されません。

4. exchange-inflow
   他マネーからの流入
   private_money_idが指定されたとき、そのマネーから見て流入方向の交換取引が抽出されます。
   private_money_idを省略した場合は表示されません。

5. cashback
   退会時返金取引

6. expire
   退会時失効取引
```json
{
  "type": "array",
  "items": {
    "type": "string",
    "enum": [
      "topup",
      "payment",
      "transfer",
      "exchange",
      "cashback",
      "expire"
    ]
  }
}
```

**`next_page_cursor_id`**  
次ページへ遷移する際に起点となるtransferのID(前ページの末尾要素のID)です。
本APIのレスポンスにもnext_page_cursor_idが含まれており、これがnull値の場合は最後のページであることを意味します。
UUIDである場合は次のページが存在することを意味し、このnext_page_cursor_idをリクエストパラメータに含めることで次ページに遷移します。

next_page_cursor_idのtransfer自体は次のページには含まれません。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`prev_page_cursor_id`**  
前ページへ遷移する際に起点となるtransferのID(次ページの先頭要素のID)です。

本APIのレスポンスにもprev_page_cursor_idが含まれており、これがnull値の場合は先頭のページであることを意味します。
UUIDである場合は前のページが存在することを意味し、このprev_page_cursor_idをリクエストパラメータに含めることで前ページに遷移します。

prev_page_cursor_idのtransfer自体は前のページには含まれません。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`per_page`**  
1ページ分の取引数です。

デフォルト値は50です。
```json
{
  "type": "integer",
  "minimum": 1,
  "maximum": 1000
}
```

**`transfer_types`**  
取引明細の種類でフィルターします。

以下の種類を指定できます。

1. topup
店舗からエンドユーザーへの送金取引(チャージ)、またはそのキャンセル取引

2. payment
エンドユーザーから店舗への送金取引(支払い)、またはそのキャンセル取引

3. exchange
他マネーへの流出/流入

4. campaign
取引に対するポイント還元キャンペーンによるポイント付与、またはそのキャンセル取引

5. coupon
クーポンによる値引き処理、またはそのキャンセル取引

6. cashback
退会時の返金取引

7. expire
退会時失効取引
```json
{
  "type": "array",
  "items": {
    "type": "string",
    "enum": [
      "topup",
      "payment",
      "exchange",
      "transfer",
      "coupon",
      "campaign",
      "cashback",
      "expire"
    ]
  }
}
```

**`description`**  
取引詳細を指定の取引詳細説明文でフィルターします。

取引詳細説明文が完全一致する取引のみ抽出されます。取引詳細説明文は最大200文字で記録されています。
```json
{
  "type": "string",
  "maxLength": 200
}
```

**`from`**  
抽出期間の開始日時です。

フィルターとして使われ、開始日時以降に発生した取引のみ一覧に表示されます。
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`to`**  
抽出期間の終了日時です。

フィルターとして使われ、終了日時以前に発生した取引のみ一覧に表示されます。
```json
{
  "type": "string",
  "format": "date-time"
}
```

成功したときは[PaginatedTransfersV2](#paginated-transfers-v2)オブジェクトを返します


---


### Check
店舗ユーザが発行し、エンドユーザーがポケペイアプリから読み取ることでチャージ取引が発生するQRコードです。

チャージQRコードを解析すると次のようなURLになります(URLは環境によって異なります)。

`https://www-sandbox.pokepay.jp/checks/xxxxxxxx-xxxx-xxxxxxxxx-xxxxxxxxxxxx`

QRコードを読み取る方法以外にも、このURLリンクを直接スマートフォン(iOS/Android)上で開くことによりアプリが起動して取引が行われます。(注意: 上記URLはsandbox環境であるため、アプリもsandbox環境のものである必要があります) 上記URL中の `xxxxxxxx-xxxx-xxxxxxxxx-xxxxxxxxxxxx` の部分がチャージQRコードのIDです。

<a name="create-check"></a>
#### チャージQRコードの発行
```php
$request = new Request\CreateCheck(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // accountId: 送金元の店舗アカウントID
    [
        'money_amount' => 8906.0,                 // 付与マネー額
        'point_amount' => 5782.0,                 // 付与ポイント額
        'description' => "test check",            // 説明文(アプリ上で取引の説明文として表示される)
        'is_onetime' => TRUE,                     // ワンタイムかどうかのフラグ
        'usage_limit' => 8714,                    // ワンタイムでない場合の最大読み取り回数
        'expires_at' => "2023-06-08T22:12:59.000000+09:00", // チャージQRコード自体の失効日時
        'point_expires_at' => "2022-08-01T18:32:53.000000+09:00", // チャージQRコードによって付与されるポイント残高の有効期限
        'point_expires_in_days' => 60,            // チャージQRコードによって付与されるポイント残高の有効期限(相対日数指定)
        'bear_point_account' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx" // ポイント額を負担する店舗のウォレットID
    ]
);
```
`money_amount`と`point_amount`の少なくとも一方は指定する必要があります。

#### Parameters
**`money_amount`**  
チャージQRコードによって付与されるマネー額です。
`money_amount`と`point_amount`の少なくともどちらかは指定する必要があります。

```json
{
  "type": "number",
  "format": "decimal",
  "minimum": 0
}
```

**`point_amount`**  
チャージQRコードによって付与されるポイント額です。
`money_amount`と`point_amount`の少なくともどちらかは指定する必要があります。

```json
{
  "type": "number",
  "format": "decimal",
  "minimum": 0
}
```

**`account_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`description`**  
```json
{
  "type": "string",
  "maxLength": 200
}
```

**`is_onetime`**  
チャージQRコードが一度の読み取りで失効するときに`true`にします。デフォルト値は`true`です。
`false`の場合、複数ユーザによって読み取り可能なQRコードになります。
ただし、その場合も1ユーザにつき1回のみしか読み取れません。

```json
{
  "type": "boolean"
}
```

**`usage_limit`**  
複数ユーザによって読み取り可能なチャージQRコードの最大読み取り回数を指定します。
NULLに設定すると無制限に読み取り可能なチャージQRコードになります。
デフォルト値はNULLです。
ワンタイム指定(`is_onetime`)がされているときは、本パラメータはNULLである必要があります。

```json
{
  "type": "integer"
}
```

**`expires_at`**  
チャージQRコード自体の失効日時を指定します。この日時以降はチャージQRコードを読み取れなくなります。デフォルトでは作成日時から3ヶ月後になります。

チャージQRコード自体の失効日時であって、チャージQRコードによって付与されるマネー残高の有効期限とは異なることに注意してください。マネー残高の有効期限はマネー設定で指定されているものになります。

```json
{
  "type": "string",
  "format": "date-time"
}
```

**`point_expires_at`**  
チャージQRコードによって付与されるポイント残高の有効起源を指定します。デフォルトではマネー残高の有効期限と同じものが指定されます。

チャージQRコードにより付与されるマネー残高の有効期限はQRコード毎には指定できませんが、ポイント残高の有効期限は本パラメータにより、QRコード毎に個別に指定することができます。

```json
{
  "type": "string",
  "format": "date-time"
}
```

**`point_expires_in_days`**  
チャージQRコードによって付与されるポイント残高の有効期限を相対日数で指定します。
1を指定すると、チャージQRコード作成日の当日中に失効します(翌日0時に失効)。
`point_expires_at`と`point_expires_in_days`が両方指定されている場合は、チャージQRコードによるチャージ取引ができた時点からより近い方が採用されます。

```json
{
  "type": "integer",
  "minimum": 1
}
```

**`bear_point_account`**  
ポイントチャージをする場合、ポイント額を負担する店舗のウォレットIDを指定することができます。
デフォルトではマネー発行体のデフォルト店舗(本店)がポイント負担先となります。

```json
{
  "type": "string",
  "format": "uuid"
}
```

成功したときは[Check](#check)オブジェクトを返します


---


<a name="list-checks"></a>
#### チャージQRコード一覧の取得
```php
$request = new Request\ListChecks(
    [
        'page' => 9655,                           // ページ番号
        'per_page' => 50,                         // 1ページの表示数
        'private_money_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // マネーID
        'organization_code' => "3OuNEg3mOoFwMhlx1RPa6KYFReAbXh", // 組織コード
        'expires_from' => "2020-03-06T00:21:54.000000+09:00", // 有効期限の期間によるフィルター(開始時点)
        'expires_to' => "2022-06-16T04:25:57.000000+09:00", // 有効期限の期間によるフィルター(終了時点)
        'created_from' => "2020-08-26T22:59:06.000000+09:00", // 作成日時の期間によるフィルター(開始時点)
        'created_to' => "2023-07-01T21:37:55.000000+09:00", // 作成日時の期間によるフィルター(終了時点)
        'issuer_shop_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 発行店舗ID
        'description' => "eAmdgIIk8",             // チャージQRコードの説明文
        'is_onetime' => TRUE,                     // ワンタイムのチャージQRコードかどうか
        'is_disabled' => TRUE                     // 無効化されたチャージQRコードかどうか
    ]
);
```
#### Parameters
**`page`**  
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`per_page`**  
1ページ当たり表示数です。デフォルト値は50です。
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`private_money_id`**  
チャージQRコードのチャージ対象のマネーIDで結果をフィルターします。

```json
{
  "type": "string",
  "format": "uuid"
}
```

**`organization_code`**  
チャージQRコードの発行店舗の所属組織の組織コードで結果をフィルターします。
デフォルトでは未指定です。
```json
{
  "type": "string",
  "maxLength": 32
}
```

**`expires_from`**  
有効期限の期間によるフィルターの開始時点のタイムスタンプです。
デフォルトでは未指定です。

```json
{
  "type": "string",
  "format": "date-time"
}
```

**`expires_to`**  
有効期限の期間によるフィルターの終了時点のタイムスタンプです。
デフォルトでは未指定です。

```json
{
  "type": "string",
  "format": "date-time"
}
```

**`created_from`**  
作成日時の期間によるフィルターの開始時点のタイムスタンプです。
デフォルトでは未指定です。

```json
{
  "type": "string",
  "format": "date-time"
}
```

**`created_to`**  
作成日時の期間によるフィルターの終了時点のタイムスタンプです。
デフォルトでは未指定です。

```json
{
  "type": "string",
  "format": "date-time"
}
```

**`issuer_shop_id`**  
チャージQRコードを発行した店舗IDによってフィルターします。
デフォルトでは未指定です。

```json
{
  "type": "string",
  "format": "uuid"
}
```

**`description`**  
チャージQRコードの説明文(description)によってフィルターします。
部分一致(前方一致)したものを表示します。
デフォルトでは未指定です。

```json
{
  "type": "string"
}
```

**`is_onetime`**  
チャージQRコードがワンタイムに設定されているかどうかでフィルターします。
`true` の場合はワンタイムかどうかでフィルターし、`false`の場合はワンタイムでないものをフィルターします。
未指定の場合はフィルターしません。
デフォルトでは未指定です。

```json
{
  "type": "boolean"
}
```

**`is_disabled`**  
チャージQRコードが無効化されているかどうかでフィルターします。
`true` の場合は無効なものをフィルターし、`false`の場合は有効なものをフィルターします。
未指定の場合はフィルターしません。
デフォルトでは未指定です。

```json
{
  "type": "boolean"
}
```

成功したときは[PaginatedChecks](#paginated-checks)オブジェクトを返します


---


<a name="get-check"></a>
#### チャージQRコードの表示
```php
$request = new Request\GetCheck(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // checkId: チャージQRコードのID
);
```
#### Parameters
**`check_id`**  
表示対象のチャージQRコードのIDです。
```json
{
  "type": "string",
  "format": "uuid"
}
```

成功したときは[Check](#check)オブジェクトを返します


---


<a name="update-check"></a>
#### チャージQRコードの更新
```php
$request = new Request\UpdateCheck(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // checkId: チャージQRコードのID
    [
        'money_amount' => 92.0,                   // 付与マネー額
        'point_amount' => 6582.0,                 // 付与ポイント額
        'description' => "test check",            // チャージQRコードの説明文
        'is_onetime' => FALSE,                    // ワンタイムかどうかのフラグ
        'usage_limit' => 1852,                    // ワンタイムでない場合の最大読み取り回数
        'expires_at' => "2020-02-02T02:42:51.000000+09:00", // チャージQRコード自体の失効日時
        'point_expires_at' => "2021-04-14T12:13:09.000000+09:00", // チャージQRコードによって付与されるポイント残高の有効期限
        'point_expires_in_days' => 60,            // チャージQRコードによって付与されるポイント残高の有効期限(相対日数指定)
        'bear_point_account' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // ポイント額を負担する店舗のウォレットID
        'is_disabled' => FALSE                    // 無効化されているかどうかのフラグ
    ]
);
```
#### Parameters
**`check_id`**  
更新対象のチャージQRコードのIDです。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`money_amount`**  
チャージQRコードによって付与されるマネー額です。
`money_amount`と`point_amount`が両方0になるような更新リクエストはエラーになります。

```json
{
  "type": "number",
  "format": "decimal",
  "minimum": 0
}
```

**`point_amount`**  
チャージQRコードによって付与されるポイント額です。
`money_amount`と`point_amount`が両方0になるような更新リクエストはエラーになります。

```json
{
  "type": "number",
  "format": "decimal",
  "minimum": 0
}
```

**`description`**  
チャージQRコードの説明文です。
チャージ取引後は、取引の説明文に転記され、取引履歴などに表示されます。

```json
{
  "type": "string",
  "maxLength": 200
}
```

**`is_onetime`**  
チャージQRコードが一度の読み取りで失効するときに`true`にします。
`false`の場合、複数ユーザによって読み取り可能なQRコードになります。
ただし、その場合も1ユーザにつき1回のみしか読み取れません。

```json
{
  "type": "boolean"
}
```

**`usage_limit`**  
複数ユーザによって読み取り可能なチャージQRコードの最大読み取り回数を指定します。
NULLに設定すると無制限に読み取り可能なチャージQRコードになります。
ワンタイム指定(`is_onetime`)がされているときは、本パラメータはNULLである必要があります。

```json
{
  "type": "integer"
}
```

**`expires_at`**  
チャージQRコード自体の失効日時を指定します。この日時以降はチャージQRコードを読み取れなくなります。

チャージQRコード自体の失効日時であって、チャージQRコードによって付与されるマネー残高の有効期限とは異なることに注意してください。マネー残高の有効期限はマネー設定で指定されているものになります。

```json
{
  "type": "string",
  "format": "date-time"
}
```

**`point_expires_at`**  
チャージQRコードによって付与されるポイント残高の有効起源を指定します。

チャージQRコードにより付与されるマネー残高の有効期限はQRコード毎には指定できませんが、ポイント残高の有効期限は本パラメータにより、QRコード毎に個別に指定することができます。

```json
{
  "type": "string",
  "format": "date-time"
}
```

**`point_expires_in_days`**  
チャージQRコードによって付与されるポイント残高の有効期限を相対日数で指定します。
1を指定すると、チャージQRコード作成日の当日中に失効します(翌日0時に失効)。
`point_expires_at`と`point_expires_in_days`が両方指定されている場合は、チャージQRコードによるチャージ取引ができた時点からより近い方が採用されます。
`point_expires_at`と`point_expires_in_days`が両方NULLに設定されている場合は、マネーに設定されている残高の有効期限と同じになります。

```json
{
  "type": "integer",
  "minimum": 1
}
```

**`bear_point_account`**  
ポイントチャージをする場合、ポイント額を負担する店舗のウォレットIDを指定することができます。

```json
{
  "type": "string",
  "format": "uuid"
}
```

**`is_disabled`**  
チャージQRコードを無効化するときに`true`にします。
`false`の場合は無効化されているチャージQRコードを再有効化します。

```json
{
  "type": "boolean"
}
```

成功したときは[Check](#check)オブジェクトを返します


---


<a name="create-topup-transaction-with-check"></a>
#### チャージQRコードを読み取ることでチャージする
通常チャージQRコードはエンドユーザーのアプリによって読み取られ、アプリとポケペイサーバとの直接通信によって取引が作られます。 もしエンドユーザーとの通信をパートナーのサーバのみに限定したい場合、パートナーのサーバがチャージQRの情報をエンドユーザーから代理受けして、サーバ間連携APIによって実際のチャージ取引をリクエストすることになります。

エンドユーザーから受け取ったチャージ用QRコードのIDをエンドユーザーIDと共に渡すことでチャージ取引が作られます。

```php
$request = new Request\CreateTopupTransactionWithCheck(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // checkId: チャージ用QRコードのID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // customerId: エンドユーザーのID
    [
        'request_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx" // リクエストID
    ]
);
```
#### Parameters
**`check_id`**  
チャージ用QRコードのIDです。

QRコード生成時に送金元店舗のウォレット情報や、送金額などが登録されています。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`customer_id`**  
エンドユーザーIDです。

送金先のエンドユーザーを指定します。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`request_id`**  
取引作成APIの羃等性を担保するためのリクエスト固有のIDです。

取引作成APIで結果が受け取れなかったなどの理由で再試行する際に、二重に取引が作られてしまうことを防ぐために、クライアント側から指定されます。指定は任意で、UUID V4フォーマットでランダム生成した文字列です。リクエストIDは一定期間で削除されます。

リクエストIDを指定したとき、まだそのリクエストIDに対する取引がない場合、新規に取引が作られレスポンスとして返されます。もしそのリクエストIDに対する取引が既にある場合、既存の取引がレスポンスとして返されます。
```json
{
  "type": "string",
  "format": "uuid"
}
```

成功したときは[TransactionDetail](#transaction-detail)オブジェクトを返します


---


### Bill
支払いQRコード
<a name="list-bills"></a>
#### 支払いQRコード一覧を表示する
支払いQRコード一覧を表示します。
```php
$request = new Request\ListBills(
    [
        'page' => 8997,                           // ページ番号
        'per_page' => 8913,                       // 1ページの表示数
        'bill_id' => "4PXVypEGc",                 // 支払いQRコードのID
        'private_money_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // マネーID
        'organization_code' => "7Za7G1y-D-x0--F-8C-9", // 組織コード
        'description' => "test bill",             // 取引説明文
        'created_from' => "2023-11-28T08:50:14.000000+09:00", // 作成日時(起点)
        'created_to' => "2020-11-23T12:19:21.000000+09:00", // 作成日時(終点)
        'shop_name' => "bill test shop1",         // 店舗名
        'shop_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 店舗ID
        'lower_limit_amount' => 2351,             // 金額の範囲によるフィルタ(下限)
        'upper_limit_amount' => 5535,             // 金額の範囲によるフィルタ(上限)
        'is_disabled' => TRUE                     // 支払いQRコードが無効化されているかどうか
    ]
);
```
#### Parameters
**`page`**  
取得したいページ番号です。
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`per_page`**  
1ページに表示する支払いQRコードの数です。
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`bill_id`**  
支払いQRコードのIDを指定して検索します。IDは前方一致で検索されます。
```json
{
  "type": "string"
}
```

**`private_money_id`**  
支払いQRコードの送金元ウォレットのマネーIDでフィルターします。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`organization_code`**  
支払いQRコードの送金元店舗が所属する組織の組織コードでフィルターします。
```json
{
  "type": "string",
  "maxLength": 32,
  "pattern": "^[a-zA-Z0-9-]*$"
}
```

**`description`**  
支払いQRコードを読み取ることで作られた取引の説明文としてアプリなどに表示されます。
```json
{
  "type": "string",
  "maxLength": 200
}
```

**`created_from`**  
支払いQRコードの作成日時でフィルターします。

これ以降に作成された支払いQRコードのみ一覧に表示されます。
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`created_to`**  
支払いQRコードの作成日時でフィルターします。

これ以前に作成された支払いQRコードのみ一覧に表示されます。
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`shop_name`**  
支払いQRコードを作成した店舗名でフィルターします。店舗名は部分一致で検索されます。
```json
{
  "type": "string",
  "maxLength": 256
}
```

**`shop_id`**  
支払いQRコードを作成した店舗IDでフィルターします。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`lower_limit_amount`**  
支払いQRコードの金額の下限を指定してフィルターします。
```json
{
  "type": "integer",
  "format": "decimal",
  "minimum": 0
}
```

**`upper_limit_amount`**  
支払いQRコードの金額の上限を指定してフィルターします。
```json
{
  "type": "integer",
  "format": "decimal",
  "minimum": 0
}
```

**`is_disabled`**  
支払いQRコードが無効化されているかどうかを表します。デフォルト値は偽(有効)です。
```json
{
  "type": "boolean"
}
```

成功したときは[PaginatedBills](#paginated-bills)オブジェクトを返します


---


<a name="create-bill"></a>
#### 支払いQRコードの発行
支払いQRコードの内容を更新します。支払い先の店舗ユーザーは指定したマネーのウォレットを持っている必要があります。
```php
$request = new Request\CreateBill(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: 支払いマネーのマネーID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // shopId: 支払い先(受け取り人)の店舗ID
    [
        'amount' => 6483.0,                       // 支払い額
        'description' => "test bill"              // 説明文(アプリ上で取引の説明文として表示される)
    ]
);
```
#### Parameters
**`amount`**  
支払いQRコードを支払い額を指定します。省略するかnullを渡すと任意金額の支払いQRコードとなり、エンドユーザーがアプリで読み取った際に金額を入力します。
```json
{
  "type": "number",
  "format": "decimal",
  "minimum": 0
}
```

**`private_money_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`shop_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`description`**  
```json
{
  "type": "string",
  "maxLength": 200
}
```

成功したときは[Bill](#bill)オブジェクトを返します


---


<a name="update-bill"></a>
#### 支払いQRコードの更新
支払いQRコードの内容を更新します。パラメータは全て省略可能で、指定したもののみ更新されます。
```php
$request = new Request\UpdateBill(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // billId: 支払いQRコードのID
    [
        'amount' => 132.0,                        // 支払い額
        'description' => "test bill",             // 説明文
        'is_disabled' => FALSE                    // 無効化されているかどうか
    ]
);
```
#### Parameters
**`bill_id`**  
更新対象の支払いQRコードのIDです。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`amount`**  
支払いQRコードを支払い額を指定します。nullを渡すと任意金額の支払いQRコードとなり、エンドユーザーがアプリで読み取った際に金額を入力します。
```json
{
  "type": "number",
  "format": "decimal",
  "minimum": 0
}
```

**`description`**  
支払いQRコードの詳細説明文です。アプリ上で取引の説明文として表示されます。
```json
{
  "type": "string",
  "maxLength": 200
}
```

**`is_disabled`**  
支払いQRコードが無効化されているかどうかを指定します。真にすると無効化され、偽にすると有効化します。
```json
{
  "type": "boolean"
}
```

成功したときは[Bill](#bill)オブジェクトを返します


---


### Cashtray
Cashtrayは支払いとチャージ両方に使えるQRコードで、店舗ユーザとエンドユーザーの間の主に店頭などでの取引のために用いられます。
Cashtrayによる取引では、エンドユーザーがQRコードを読み取った時点で即時取引が作られ、ユーザに対して受け取り確認画面は表示されません。
Cashtrayはワンタイムで、一度読み取りに成功するか、取引エラーになると失効します。
また、Cashtrayには有効期限があり、デフォルトでは30分で失効します。

<a name="create-cashtray"></a>
#### Cashtrayを作る
Cashtrayを作成します。

エンドユーザーに対して支払いまたはチャージを行う店舗の情報(店舗ユーザーIDとマネーID)と、取引金額が必須項目です。
店舗ユーザーIDとマネーIDから店舗ウォレットを特定します。

その他に、Cashtrayから作られる取引に対する説明文や失効時間を指定できます。

```php
$request = new Request\CreateCashtray(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // shopId: 店舗ユーザーID
    3642.0,                                       // amount: 金額
    [
        'description' => "たい焼き(小倉)",              // 取引履歴に表示する説明文
        'expires_in' => 6878                      // 失効時間(秒)
    ]
);
```
#### Parameters
**`private_money_id`**  
取引対象のマネーのIDです(必須項目)。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`shop_id`**  
店舗のユーザーIDです(必須項目)。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`amount`**  
マネー額です(必須項目)。
正の値を与えるとチャージになり、負の値を与えると支払いとなります。
```json
{
  "type": "number"
}
```

**`description`**  
Cashtrayを読み取ったときに作られる取引の説明文です(最大200文字、任意項目)。
アプリや管理画面などの取引履歴に表示されます。デフォルトでは空文字になります。
```json
{
  "type": "string",
  "maxLength": 200
}
```

**`expires_in`**  
Cashtrayが失効するまでの時間を秒単位で指定します(任意項目、デフォルト値は1800秒(30分))。
```json
{
  "type": "integer",
  "minimum": 1
}
```

成功したときは[Cashtray](#cashtray)オブジェクトを返します


---


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
- `account_money_topup_transfer_limit_exceeded (422)`
  - マネーに設定されている一度のマネーチャージ金額の上限を超えたため、取引が完了できなかったときに返されます
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
#### Parameters
**`cashtray_id`**  
情報を取得するCashtrayのIDです。
```json
{
  "type": "string",
  "format": "uuid"
}
```

成功したときは[CashtrayWithResult](#cashtray-with-result)オブジェクトを返します


---


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
#### Parameters
**`cashtray_id`**  
無効化するCashtrayのIDです。
```json
{
  "type": "string",
  "format": "uuid"
}
```

成功したときは[Cashtray](#cashtray)オブジェクトを返します


---


<a name="update-cashtray"></a>
#### Cashtrayの情報を更新する
Cashtrayの内容を更新します。bodyパラメーターは全て省略可能で、指定したもののみ更新されます。
```php
$request = new Request\UpdateCashtray(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // cashtrayId: CashtrayのID
    [
        'amount' => 4259.0,                       // 金額
        'description' => "たい焼き(小倉)",              // 取引履歴に表示する説明文
        'expires_in' => 4169                      // 失効時間(秒)
    ]
);
```
#### Parameters
**`cashtray_id`**  
更新対象のCashtrayのIDです。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`amount`**  
マネー額です(任意項目)。
正の値を与えるとチャージになり、負の値を与えると支払いとなります。
```json
{
  "type": "number"
}
```

**`description`**  
Cashtrayを読み取ったときに作られる取引の説明文です(最大200文字、任意項目)。
アプリや管理画面などの取引履歴に表示されます。
```json
{
  "type": "string",
  "maxLength": 200
}
```

**`expires_in`**  
Cashtrayが失効するまでの時間を秒で指定します(任意項目、デフォルト値は1800秒(30分))。
```json
{
  "type": "integer",
  "minimum": 1
}
```

成功したときは[Cashtray](#cashtray)オブジェクトを返します


---


### Customer
<a name="get-account"></a>
#### ウォレット情報を表示する
ウォレットを取得します。
```php
$request = new Request\GetAccount(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // accountId: ウォレットID
);
```
#### Parameters
**`account_id`**  
ウォレットIDです。

フィルターとして使われ、指定したウォレットIDのウォレットを取得します。
```json
{
  "type": "string",
  "format": "uuid"
}
```

成功したときは[AccountDetail](#account-detail)オブジェクトを返します


---


<a name="update-account"></a>
#### ウォレット情報を更新する
ウォレットの状態を更新します。
以下の項目が変更できます。

- ウォレットの凍結/凍結解除の切り替え(エンドユーザー、店舗ユーザー共通)
- 店舗でチャージ可能かどうか(店舗ユーザのみ)

エンドユーザーのウォレット情報更新には UpdateCustomerAccount が使用できます。
```php
$request = new Request\UpdateAccount(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // accountId: ウォレットID
    [
        'is_suspended' => TRUE,                   // ウォレットが凍結されているかどうか
        'status' => "pre-closed",                 // ウォレット状態
        'can_transfer_topup' => TRUE              // チャージ可能かどうか
    ]
);
```
#### Parameters
**`account_id`**  
ウォレットIDです。

指定したウォレットIDのウォレットの状態を更新します。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`is_suspended`**  
ウォレットの凍結状態です。真にするとウォレットが凍結され、そのウォレットでは新規取引ができなくなります。偽にすると凍結解除されます。
```json
{
  "type": "boolean"
}
```

**`status`**  
ウォレットの状態です。
```json
{
  "type": "string",
  "enum": [
    "active",
    "suspended",
    "pre-closed"
  ]
}
```

**`can_transfer_topup`**  
店舗ユーザーがエンドユーザーにチャージ可能かどうかです。真にするとチャージ可能となり、偽にするとチャージ不可能となります。
```json
{
  "type": "boolean"
}
```

成功したときは[AccountDetail](#account-detail)オブジェクトを返します


---


<a name="delete-account"></a>
#### ウォレットを退会する
ウォレットを退会します。一度ウォレットを退会した後は、そのウォレットを再び利用可能な状態に戻すことは出来ません。
```php
$request = new Request\DeleteAccount(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // accountId: ウォレットID
    [
        'cashback' => TRUE                        // 返金有無
    ]
);
```
#### Parameters
**`account_id`**  
ウォレットIDです。

指定したウォレットIDのウォレットを退会します。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`cashback`**  
退会時の返金有無です。エンドユーザに返金を行う場合、真を指定して下さい。現在のマネー残高を全て現金で返金したものとして記録されます。
```json
{
  "type": "boolean"
}
```

成功したときは[AccountDeleted](#account-deleted)オブジェクトを返します


---


<a name="list-account-balances"></a>
#### エンドユーザーの残高内訳を表示する
エンドユーザーのウォレット毎の残高を有効期限別のリストとして取得します。
```php
$request = new Request\ListAccountBalances(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // accountId: ウォレットID
    [
        'page' => 9794,                           // ページ番号
        'per_page' => 3245,                       // 1ページ分の取引数
        'expires_at_from' => "2020-04-02T00:28:48.000000+09:00", // 有効期限の期間によるフィルター(開始時点)
        'expires_at_to' => "2021-01-20T15:13:08.000000+09:00", // 有効期限の期間によるフィルター(終了時点)
        'direction' => "desc"                     // 有効期限によるソート順序
    ]
);
```
#### Parameters
**`account_id`**  
ウォレットIDです。

フィルターとして使われ、指定したウォレットIDのウォレット残高を取得します。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`page`**  
取得したいページ番号です。デフォルト値は1です。
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`per_page`**  
1ページ分のウォレット残高数です。デフォルト値は30です。
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`expires_at_from`**  
有効期限の期間によるフィルターの開始時点のタイムスタンプです。デフォルトでは未指定です。
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`expires_at_to`**  
有効期限の期間によるフィルターの終了時点のタイムスタンプです。デフォルトでは未指定です。
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`direction`**  
有効期限によるソートの順序を指定します。デフォルト値はasc (昇順)です。
```json
{
  "type": "string",
  "enum": [
    "asc",
    "desc"
  ]
}
```

成功したときは[PaginatedAccountBalance](#paginated-account-balance)オブジェクトを返します


---


<a name="list-account-expired-balances"></a>
#### エンドユーザーの失効済みの残高内訳を表示する
エンドユーザーのウォレット毎の失効済みの残高を有効期限別のリストとして取得します。
```php
$request = new Request\ListAccountExpiredBalances(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // accountId: ウォレットID
    [
        'page' => 7402,                           // ページ番号
        'per_page' => 8376,                       // 1ページ分の取引数
        'expires_at_from' => "2021-01-10T20:48:05.000000+09:00", // 有効期限の期間によるフィルター(開始時点)
        'expires_at_to' => "2023-10-31T19:19:39.000000+09:00", // 有効期限の期間によるフィルター(終了時点)
        'direction' => "asc"                      // 有効期限によるソート順序
    ]
);
```
#### Parameters
**`account_id`**  
ウォレットIDです。

フィルターとして使われ、指定したウォレットIDのウォレット残高を取得します。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`page`**  
取得したいページ番号です。デフォルト値は1です。
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`per_page`**  
1ページ分のウォレット残高数です。デフォルト値は30です。
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`expires_at_from`**  
有効期限の期間によるフィルターの開始時点のタイムスタンプです。デフォルトでは未指定です。
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`expires_at_to`**  
有効期限の期間によるフィルターの終了時点のタイムスタンプです。デフォルトでは未指定です。
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`direction`**  
有効期限によるソートの順序を指定します。デフォルト値はdesc (降順)です。
```json
{
  "type": "string",
  "enum": [
    "asc",
    "desc"
  ]
}
```

成功したときは[PaginatedAccountBalance](#paginated-account-balance)オブジェクトを返します


---


<a name="update-customer-account"></a>
#### エンドユーザーのウォレット情報を更新する
エンドユーザーのウォレットの状態を更新します。
```php
$request = new Request\UpdateCustomerAccount(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // accountId: ウォレットID
    [
        'status' => "active",                     // ウォレット状態
        'account_name' => "4jyfS9dg15S1q",        // アカウント名
        'external_id' => "6jH34UfMTbaogiuk2Hs0mRi4FH", // 外部ID
        'metadata' => "{\"key1\":\"foo\",\"key2\":\"bar\"}" // ウォレットに付加するメタデータ
    ]
);
```
#### Parameters
**`account_id`**  
ウォレットIDです。

指定したウォレットIDのウォレットの状態を更新します。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`status`**  
ウォレットの状態です。
```json
{
  "type": "string",
  "enum": [
    "active",
    "suspended",
    "pre-closed"
  ]
}
```

**`account_name`**  
変更するウォレット名です。
```json
{
  "type": "string",
  "maxLength": 256
}
```

**`external_id`**  
変更する外部IDです。
```json
{
  "type": "string",
  "maxLength": 50
}
```

**`metadata`**  
ウォレットに付加するメタデータをJSON文字列で指定します。
指定できるJSON文字列には以下のような制約があります。
- フラットな構造のJSONを文字列化したものであること。
- keyは最大32文字の文字列(同じkeyを複数指定することはできません)
- valueには128文字以下の文字列が指定できます

更新時に指定した内容でメタデータ全体が置き換えられることに注意してください。
例えば、元々のメタデータが以下だったときに、

'{"key1":"foo","key2":"bar"}'

更新APIで以下のように更新するとします。

'{"key1":"baz"}'

このときkey1はfooからbazに更新され、key2に対するデータは消去されます。
```json
{
  "type": "string",
  "format": "json"
}
```

成功したときは[AccountWithUser](#account-with-user)オブジェクトを返します


---


<a name="get-customer-accounts"></a>
#### エンドユーザーのウォレット一覧を表示する
マネーを指定してエンドユーザーのウォレット一覧を取得します。
```php
$request = new Request\GetCustomerAccounts(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    [
        'page' => 3463,                           // ページ番号
        'per_page' => 1471,                       // 1ページ分のウォレット数
        'created_at_from' => "2023-03-07T11:55:21.000000+09:00", // ウォレット作成日によるフィルター(開始時点)
        'created_at_to' => "2020-05-05T02:40:52.000000+09:00", // ウォレット作成日によるフィルター(終了時点)
        'is_suspended' => TRUE,                   // ウォレットが凍結状態かどうかでフィルターする
        'status' => "active",                     // ウォレット状態
        'external_id' => "H9",                    // 外部ID
        'tel' => "0779054313",                    // エンドユーザーの電話番号
        'email' => "L4b1CJFFK6@iXZL.com"          // エンドユーザーのメールアドレス
    ]
);
```
#### Parameters
**`private_money_id`**  
マネーIDです。

一覧するウォレットのマネーを指定します。このパラメータは必須です。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`page`**  
取得したいページ番号です。デフォルト値は1です。
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`per_page`**  
1ページ分のウォレット数です。デフォルト値は30です。
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`created_at_from`**  
ウォレット作成日によるフィルターの開始時点のタイムスタンプです。デフォルトでは未指定です。
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`created_at_to`**  
ウォレット作成日によるフィルターの終了時点のタイムスタンプです。デフォルトでは未指定です。
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`is_suspended`**  
このパラメータが指定されている場合、ウォレットの凍結状態で結果がフィルターされます。デフォルトでは未指定です。
```json
{
  "type": "boolean"
}
```

**`status`**  
このパラメータが指定されている場合、ウォレットの状態で結果がフィルターされます。デフォルトでは未指定です。
```json
{
  "type": "string",
  "enum": [
    "active",
    "suspended",
    "pre-closed"
  ]
}
```

**`external_id`**  
外部IDでのフィルタリングです。デフォルトでは未指定です。
```json
{
  "type": "string",
  "maxLength": 50
}
```

**`tel`**  
エンドユーザーの電話番号でのフィルタリングです。デフォルトでは未指定です。
```json
{
  "type": "string",
  "pattern": "^0[0-9]{1,3}-?[0-9]{2,4}-?[0-9]{3,4}$"
}
```

**`email`**  
エンドユーザーのメールアドレスでのフィルタリングです。デフォルトでは未指定です。
```json
{
  "type": "string",
  "format": "email"
}
```

成功したときは[PaginatedAccountWithUsers](#paginated-account-with-users)オブジェクトを返します


---


<a name="create-customer-account"></a>
#### 新規エンドユーザーをウォレットと共に追加する
指定したマネーのウォレットを作成し、同時にそのウォレットを保有するユーザも新規に作成します。
このAPIにより作成されたユーザは認証情報を持たないため、モバイルSDKやポケペイ標準アプリからはログインすることはできません。
Partner APIのみから操作可能な特殊なユーザになります。
システム全体をPartner APIのみで構成する場合にのみ使用してください。
```php
$request = new Request\CreateCustomerAccount(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    [
        'user_name' => "ポケペイ太郎",                  // ユーザー名
        'account_name' => "ポケペイ太郎のアカウント",         // アカウント名
        'external_id' => "bDkWhxmVZQrN7vHF2MDKVtEIQupvmKHRw" // 外部ID
    ]
);
```
#### Parameters
**`private_money_id`**  
マネーIDです。

これによって作成するウォレットのマネーを指定します。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`user_name`**  
ウォレットと共に作成するユーザ名です。省略した場合は空文字となります。
```json
{
  "type": "string",
  "maxLength": 256
}
```

**`account_name`**  
作成するウォレット名です。省略した場合は空文字となります。
```json
{
  "type": "string",
  "maxLength": 256
}
```

**`external_id`**  
PAPIクライアントシステムから利用するPokepayユーザーのIDです。デフォルトでは未指定です。
```json
{
  "type": "string",
  "maxLength": 50
}
```

成功したときは[AccountWithUser](#account-with-user)オブジェクトを返します


---


<a name="get-shop-accounts"></a>
#### 店舗ユーザーのウォレット一覧を表示する
マネーを指定して店舗ユーザーのウォレット一覧を取得します。
```php
$request = new Request\GetShopAccounts(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    [
        'page' => 3916,                           // ページ番号
        'per_page' => 6415,                       // 1ページ分のウォレット数
        'created_at_from' => "2022-08-09T09:05:44.000000+09:00", // ウォレット作成日によるフィルター(開始時点)
        'created_at_to' => "2022-03-03T20:20:02.000000+09:00", // ウォレット作成日によるフィルター(終了時点)
        'is_suspended' => FALSE                   // ウォレットが凍結状態かどうかでフィルターする
    ]
);
```
#### Parameters
**`private_money_id`**  
マネーIDです。

一覧するウォレットのマネーを指定します。このパラメータは必須です。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`page`**  
取得したいページ番号です。デフォルト値は1です。
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`per_page`**  
1ページ分のウォレット数です。デフォルト値は30です。
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`created_at_from`**  
ウォレット作成日によるフィルターの開始時点のタイムスタンプです。デフォルトでは未指定です。
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`created_at_to`**  
ウォレット作成日によるフィルターの終了時点のタイムスタンプです。デフォルトでは未指定です。
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`is_suspended`**  
このパラメータが指定されている場合、ウォレットの凍結状態で結果がフィルターされます。デフォルトでは未指定です。
```json
{
  "type": "boolean"
}
```

成功したときは[PaginatedAccountWithUsers](#paginated-account-with-users)オブジェクトを返します


---


<a name="list-customer-transactions"></a>
#### 取引履歴を取得する
取引一覧を返します。
```php
$request = new Request\ListCustomerTransactions(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    [
        'sender_customer_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 送金エンドユーザーID
        'receiver_customer_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 受取エンドユーザーID
        'type' => "payment",                      // 取引種別
        'is_modified' => TRUE,                    // キャンセル済みかどうか
        'from' => "2022-09-16T12:35:19.000000+09:00", // 開始日時
        'to' => "2021-03-05T14:50:25.000000+09:00", // 終了日時
        'page' => 1,                              // ページ番号
        'per_page' => 50                          // 1ページ分の取引数
    ]
);
```
#### Parameters
**`private_money_id`**  
マネーIDです。
フィルターとして使われ、指定したマネーでの取引のみ一覧に表示されます。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`sender_customer_id`**  
送金ユーザーIDです。

フィルターとして使われ、指定された送金ユーザーでの取引のみ一覧に表示されます。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`receiver_customer_id`**  
受取ユーザーIDです。

フィルターとして使われ、指定された受取ユーザーでの取引のみ一覧に表示されます。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`type`**  
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
5. cashback
   ウォレット退会時返金
6. expire
   ウォレット退会時失効
```json
{
  "type": "string",
  "enum": [
    "topup",
    "payment",
    "exchange",
    "transfer",
    "cashback",
    "expire"
  ]
}
```

**`is_modified`**  
キャンセル済みかどうかを判定するフラグです。

これにtrueを指定するとキャンセルされた取引のみ一覧に表示されます。
falseを指定するとキャンセルされていない取引のみ一覧に表示されます
何も指定しなければキャンセルの有無にかかわらず一覧に表示されます。
```json
{
  "type": "boolean"
}
```

**`from`**  
抽出期間の開始日時です。

フィルターとして使われ、開始日時以降に発生した取引のみ一覧に表示されます。
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`to`**  
抽出期間の終了日時です。

フィルターとして使われ、終了日時以前に発生した取引のみ一覧に表示されます。
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`page`**  
取得したいページ番号です。
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`per_page`**  
1ページ分の取引数です。
```json
{
  "type": "integer",
  "minimum": 1
}
```

成功したときは[PaginatedTransaction](#paginated-transaction)オブジェクトを返します


---


### Organization
<a name="list-organizations"></a>
#### 加盟店組織の一覧を取得する
```php
$request = new Request\ListOrganizations(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    [
        'page' => 1,                              // ページ番号
        'per_page' => 50,                         // 1ページ分の取引数
        'name' => "cew1CN",                       // 組織名
        'code' => "gi7sglF"                       // 組織コード
    ]
);
```
#### Parameters
**`private_money_id`**  
マネーIDです。
このマネーに加盟している加盟組織がフィルターされます。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`page`**  
取得したいページ番号です。
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`per_page`**  
1ページ分の取引数です。
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`name`**  
```json
{
  "type": "string"
}
```

**`code`**  
```json
{
  "type": "string"
}
```

成功したときは[PaginatedOrganizations](#paginated-organizations)オブジェクトを返します


---


<a name="create-organization"></a>
#### 新規加盟店組織を追加する
```php
$request = new Request\CreateOrganization(
    "ox-supermarket",                             // code: 新規組織コード
    "oxスーパー",                                     // name: 新規組織名
    ["xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"], // privateMoneyIds: 加盟店組織で有効にするマネーIDの配列
    "4wI7YctoKA@rmPX.com",                        // issuerAdminUserEmail: 発行体担当者メールアドレス
    "6ICAqae4Gs@nk7C.com",                        // memberAdminUserEmail: 新規組織担当者メールアドレス
    [
        'bank_name' => "XYZ銀行",                   // 銀行名
        'bank_code' => "1234",                    // 銀行金融機関コード
        'bank_branch_name' => "ABC支店",            // 銀行支店名
        'bank_branch_code' => "123",              // 銀行支店コード
        'bank_account_type' => "other",           // 銀行口座種別 (普通=saving, 当座=current, その他=other)
        'bank_account' => "1234567",              // 銀行口座番号
        'bank_account_holder_name' => "ﾌｸｻﾞﾜﾕｷﾁ", // 口座名義人名
        'contact_name' => "佐藤清"                   // 担当者名
    ]
);
```
#### Parameters
**`code`**  
```json
{
  "type": "string",
  "maxLength": 32
}
```

**`name`**  
```json
{
  "type": "string",
  "maxLength": 256
}
```

**`private_money_ids`**  
```json
{
  "type": "array",
  "minItems": 1,
  "items": {
    "type": "string",
    "format": "uuid"
  }
}
```

**`issuer_admin_user_email`**  
```json
{
  "type": "string",
  "format": "email"
}
```

**`member_admin_user_email`**  
```json
{
  "type": "string",
  "format": "email"
}
```

**`bank_name`**  
```json
{
  "type": "string",
  "maxLength": 64
}
```

**`bank_code`**  
```json
{
  "type": "string",
  "pattern": "^$|^[0-9]{4}$"
}
```

**`bank_branch_name`**  
```json
{
  "type": "string",
  "maxLength": 64
}
```

**`bank_branch_code`**  
```json
{
  "type": "string",
  "pattern": "^(|[0-9]{3})$"
}
```

**`bank_account_type`**  
```json
{
  "type": "string",
  "enum": [
    "saving",
    "current",
    "other"
  ]
}
```

**`bank_account`**  
```json
{
  "type": "string",
  "maxLength": 7,
  "pattern": "[0-9]{0,7}"
}
```

**`bank_account_holder_name`**  
```json
{
  "type": "string",
  "maxLength": 30,
  "pattern": "^[0-9A-Zｦｱ-ﾟ (-),-/\\\\｢-｣]$"
}
```

**`contact_name`**  
```json
{
  "type": "string",
  "maxLength": 256
}
```

成功したときは[Organization](#organization)オブジェクトを返します


---


### Shop
<a name="list-shops"></a>
#### 店舗一覧を取得する
```php
$request = new Request\ListShops(
    [
        'organization_code' => "pocketchange",    // 組織コード
        'private_money_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // マネーID
        'name' => "oxスーパー三田店",                    // 店舗名
        'postal_code' => "3638653",               // 店舗の郵便番号
        'address' => "東京都港区芝...",                 // 店舗の住所
        'tel' => "0108-37-075",                   // 店舗の電話番号
        'email' => "3Xc8sxEuua@OPh4.com",         // 店舗のメールアドレス
        'external_id' => "7zIQa1dLLxrHG11vw1vq47MweL", // 店舗の外部ID
        'with_disabled' => TRUE,                  // 無効な店舗を含める
        'page' => 1,                              // ページ番号
        'per_page' => 50                          // 1ページ分の取引数
    ]
);
```
#### Parameters
**`organization_code`**  
このパラメータを渡すとその組織の店舗のみが返され、省略すると加盟店も含む店舗が返されます。

```json
{
  "type": "string",
  "maxLength": 32,
  "pattern": "^[a-zA-Z0-9-]*$"
}
```

**`private_money_id`**  
このパラメータを渡すとそのマネーのウォレットを持つ店舗のみが返されます。

```json
{
  "type": "string",
  "format": "uuid"
}
```

**`name`**  
このパラメータを渡すとその名前の店舗のみが返されます。

```json
{
  "type": "string",
  "minLength": 1,
  "maxLength": 256
}
```

**`postal_code`**  
このパラメータを渡すとその郵便番号が登録された店舗のみが返されます。

```json
{
  "type": "string",
  "pattern": "^[0-9]{3}-?[0-9]{4}$"
}
```

**`address`**  
このパラメータを渡すとその住所が登録された店舗のみが返されます。

```json
{
  "type": "string",
  "maxLength": 256
}
```

**`tel`**  
このパラメータを渡すとその電話番号が登録された店舗のみが返されます。

```json
{
  "type": "string",
  "pattern": "^0[0-9]{1,3}-?[0-9]{2,4}-?[0-9]{3,4}$"
}
```

**`email`**  
このパラメータを渡すとそのメールアドレスが登録された店舗のみが返されます。

```json
{
  "type": "string",
  "format": "email",
  "maxLength": 256
}
```

**`external_id`**  
このパラメータを渡すとその外部IDが登録された店舗のみが返されます。

```json
{
  "type": "string",
  "maxLength": 36
}
```

**`with_disabled`**  
このパラメータを渡すと無効にされた店舗を含めて返されます。デフォルトでは無効にされた店舗は返されません。

```json
{
  "type": "boolean"
}
```

**`page`**  
取得したいページ番号です。
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`per_page`**  
1ページ分の取引数です。
```json
{
  "type": "integer",
  "minimum": 1
}
```

成功したときは[PaginatedShops](#paginated-shops)オブジェクトを返します


---


<a name="create-shop"></a>
#### 【廃止】新規店舗を追加する
新規店舗を追加します。このAPIは廃止予定です。以降は `CreateShopV2` を使用してください。
```php
$request = new Request\CreateShop(
    "oxスーパー三田店",                                  // shopName: 店舗名
    [
        'shop_postal_code' => "7139055",          // 店舗の郵便番号
        'shop_address' => "東京都港区芝...",            // 店舗の住所
        'shop_tel' => "0534920919",               // 店舗の電話番号
        'shop_email' => "8sfzPeC95z@6SUS.com",    // 店舗のメールアドレス
        'shop_external_id' => "pi9Wzm3lpy1cb2RHdU", // 店舗の外部ID
        'organization_code' => "ox-supermarket"   // 組織コード
    ]
);
```
#### Parameters
**`shop_name`**  
```json
{
  "type": "string",
  "minLength": 1,
  "maxLength": 256
}
```

**`shop_postal_code`**  
```json
{
  "type": "string",
  "pattern": "^[0-9]{3}-?[0-9]{4}$"
}
```

**`shop_address`**  
```json
{
  "type": "string",
  "maxLength": 256
}
```

**`shop_tel`**  
```json
{
  "type": "string",
  "pattern": "^0[0-9]{1,3}-?[0-9]{2,4}-?[0-9]{3,4}$"
}
```

**`shop_email`**  
```json
{
  "type": "string",
  "format": "email",
  "maxLength": 256
}
```

**`shop_external_id`**  
```json
{
  "type": "string",
  "maxLength": 36
}
```

**`organization_code`**  
```json
{
  "type": "string",
  "maxLength": 32,
  "pattern": "^[a-zA-Z0-9-]*$"
}
```

成功したときは[User](#user)オブジェクトを返します


---


<a name="create-shop-v2"></a>
#### 新規店舗を追加する
```php
$request = new Request\CreateShopV2(
    "oxスーパー三田店",                                  // name: 店舗名
    [
        'postal_code' => "1045899",               // 店舗の郵便番号
        'address' => "東京都港区芝...",                 // 店舗の住所
        'tel' => "0697-973604",                   // 店舗の電話番号
        'email' => "v7xcpJRU1g@APOZ.com",         // 店舗のメールアドレス
        'external_id' => "WBu1",                  // 店舗の外部ID
        'organization_code' => "ox-supermarket",  // 組織コード
        'private_money_ids' => ["xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"], // 店舗で有効にするマネーIDの配列
        'can_topup_private_money_ids' => ["xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"] // 店舗でチャージ可能にするマネーIDの配列
    ]
);
```
#### Parameters
**`name`**  
店舗名です。

同一組織内に同名の店舗があった場合は`name_conflict`エラーが返ります。
```json
{
  "type": "string",
  "minLength": 1,
  "maxLength": 256
}
```

**`postal_code`**  
```json
{
  "type": "string",
  "pattern": "^[0-9]{3}-?[0-9]{4}$"
}
```

**`address`**  
```json
{
  "type": "string",
  "maxLength": 256
}
```

**`tel`**  
```json
{
  "type": "string",
  "pattern": "^0[0-9]{1,3}-?[0-9]{2,4}-?[0-9]{3,4}$"
}
```

**`email`**  
```json
{
  "type": "string",
  "format": "email",
  "maxLength": 256
}
```

**`external_id`**  
```json
{
  "type": "string",
  "maxLength": 36
}
```

**`organization_code`**  
```json
{
  "type": "string",
  "maxLength": 32,
  "pattern": "^[a-zA-Z0-9-]*$"
}
```

**`private_money_ids`**  
店舗で有効にするマネーIDの配列を指定します。

店舗が所属する組織が発行または加盟しているマネーのみが指定できます。利用できないマネーが指定された場合は`unavailable_private_money`エラーが返ります。
このパラメータを省略したときは、店舗が所属する組織が発行または加盟している全てのマネーのウォレットができます。
```json
{
  "type": "array",
  "minItems": 1,
  "items": {
    "type": "string",
    "format": "uuid"
  }
}
```

**`can_topup_private_money_ids`**  
店舗でチャージ可能にするマネーIDの配列を指定します。

このパラメータは発行体のみが指定でき、自身が発行しているマネーのみを指定できます。加盟店が他発行体のマネーに加盟している場合でも、そのチャージ可否を変更することはできません。
省略したときは対象店舗のその発行体の全てのマネーのアカウントがチャージ不可となります。
```json
{
  "type": "array",
  "minItems": 0,
  "items": {
    "type": "string",
    "format": "uuid"
  }
}
```

成功したときは[ShopWithAccounts](#shop-with-accounts)オブジェクトを返します


---


<a name="get-shop"></a>
#### 店舗情報を表示する
店舗情報を表示します。

権限に関わらず自組織の店舗情報は表示可能です。それに加え、発行体は自組織の発行しているマネーの加盟店組織の店舗情報を表示できます。
```php
$request = new Request\GetShop(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // shopId: 店舗ユーザーID
);
```
#### Parameters
**`shop_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

成功したときは[ShopWithAccounts](#shop-with-accounts)オブジェクトを返します


---


<a name="update-shop"></a>
#### 店舗情報を更新する
店舗情報を更新します。bodyパラメーターは全て省略可能で、指定したもののみ更新されます。
```php
$request = new Request\UpdateShop(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // shopId: 店舗ユーザーID
    [
        'name' => "oxスーパー三田店",                    // 店舗名
        'postal_code' => "714-6023",              // 店舗の郵便番号
        'address' => "東京都港区芝...",                 // 店舗の住所
        'tel' => "0554-9798628",                  // 店舗の電話番号
        'email' => "QC9Lc8mXM6@C7Fz.com",         // 店舗のメールアドレス
        'external_id' => "YciEIbzm3gXQmkrBpe2Ig2RcyGTE", // 店舗の外部ID
        'private_money_ids' => ["xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"], // 店舗で有効にするマネーIDの配列
        'can_topup_private_money_ids' => ["xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"], // 店舗でチャージ可能にするマネーIDの配列
        'status' => "disabled"                    // 店舗の状態
    ]
);
```
#### Parameters
**`shop_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`name`**  
店舗名です。

同一組織内に同名の店舗があった場合は`shop_name_conflict`エラーが返ります。
```json
{
  "type": "string",
  "minLength": 1,
  "maxLength": 256
}
```

**`postal_code`**  
店舗住所の郵便番号(7桁の数字)です。ハイフンは無視されます。明示的に空の値を設定するにはNULLを指定します。
```json
{
  "type": "string",
  "pattern": "^[0-9]{3}-?[0-9]{4}$"
}
```

**`address`**  
```json
{
  "type": "string",
  "maxLength": 256
}
```

**`tel`**  
店舗の電話番号です。ハイフンは無視されます。明示的に空の値を設定するにはNULLを指定します。
```json
{
  "type": "string",
  "pattern": "^0[0-9]{1,3}-?[0-9]{2,4}-?[0-9]{3,4}$"
}
```

**`email`**  
店舗の連絡先メールアドレスです。明示的に空の値を設定するにはNULLを指定します。
```json
{
  "type": "string",
  "format": "email",
  "maxLength": 256
}
```

**`external_id`**  
店舗の外部IDです(最大36文字)。明示的に空の値を設定するにはNULLを指定します。
```json
{
  "type": "string",
  "maxLength": 36
}
```

**`private_money_ids`**  
店舗で有効にするマネーIDの配列を指定します。

店舗が所属する組織が発行または加盟しているマネーのみが指定できます。利用できないマネーが指定された場合は`unavailable_private_money`エラーが返ります。
店舗が既にウォレットを持っている場合に、ここでそのウォレットのマネーIDを指定しないで更新すると、そのマネーのウォレットは凍結(無効化)されます。
```json
{
  "type": "array",
  "minItems": 0,
  "items": {
    "type": "string",
    "format": "uuid"
  }
}
```

**`can_topup_private_money_ids`**  
店舗でチャージ可能にするマネーIDの配列を指定します。

このパラメータは発行体のみが指定でき、発行しているマネーのみを指定できます。加盟店が他発行体のマネーに加盟している場合でも、そのチャージ可否を変更することはできません。
省略したときは対象店舗のその発行体の全てのマネーのアカウントがチャージ不可となります。
```json
{
  "type": "array",
  "minItems": 0,
  "items": {
    "type": "string",
    "format": "uuid"
  }
}
```

**`status`**  
店舗の状態です。activeを指定すると有効となり、disabledを指定するとリスト表示から除外されます。
```json
{
  "type": "string",
  "enum": [
    "active",
    "disabled"
  ]
}
```

成功したときは[ShopWithAccounts](#shop-with-accounts)オブジェクトを返します


---


### Account
<a name="list-user-accounts"></a>
#### エンドユーザー、店舗ユーザーのウォレット一覧を表示する
ユーザーIDを指定してそのユーザーのウォレット一覧を取得します。
```php
$request = new Request\ListUserAccounts(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // userId: ユーザーID
    [
        'page' => 9292,                           // ページ番号
        'per_page' => 7395                        // 1ページ分の取引数
    ]
);
```
#### Parameters
**`user_id`**  
ユーザーIDです。

指定したユーザーIDのウォレット一覧を取得します。パートナーキーと紐づく組織が発行しているマネーのウォレットのみが表示されます。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`page`**  
取得したいページ番号です。デフォルト値は1です。
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`per_page`**  
1ページ当たりのウォレット数です。デフォルト値は50です。
```json
{
  "type": "integer",
  "minimum": 1
}
```

成功したときは[PaginatedAccountDetails](#paginated-account-details)オブジェクトを返します


---


<a name="create-user-account"></a>
#### エンドユーザーのウォレットを作成する
既存のエンドユーザーに対して、指定したマネーのウォレットを新規作成します
```php
$request = new Request\CreateUserAccount(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // userId: ユーザーID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    [
        'name' => "kheq6QL08QyyZhWxWZXOgJUUSaNEWIfPAbzyBHOjNPScM2HIOB9HTAlispEbZ0nm2AG9fUViptAmbz3OlMc", // ウォレット名
        'external_id' => "wPiDhPvFVP",            // 外部ID
        'metadata' => "{\"key1\":\"foo\",\"key2\":\"bar\"}" // ウォレットに付加するメタデータ
    ]
);
```
#### Parameters
**`user_id`**  
ユーザーIDです。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`private_money_id`**  
マネーIDです。

作成するウォレットのマネーを指定します。このパラメータは必須です。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`name`**  
```json
{
  "type": "string",
  "maxLength": 256
}
```

**`external_id`**  
```json
{
  "type": "string",
  "maxLength": 50
}
```

**`metadata`**  
ウォレットに付加するメタデータをJSON文字列で指定します。
指定できるJSON文字列には以下のような制約があります。
- フラットな構造のJSONを文字列化したものであること。
- keyは最大32文字の文字列(同じkeyを複数指定することはできません)
- valueには128文字以下の文字列が指定できます
```json
{
  "type": "string",
  "format": "json"
}
```

成功したときは[AccountDetail](#account-detail)オブジェクトを返します


---


### Private Money
<a name="get-private-moneys"></a>
#### マネー一覧を取得する
マネーの一覧を取得します。
パートナーキーの管理者が発行体組織に属している場合、自組織が加盟または発行しているマネーの一覧を返します。また、`organization_code`として決済加盟店の組織コードを指定した場合、発行マネーのうち、その決済加盟店組織が加盟しているマネーの一覧を返します。
パートナーキーの管理者が決済加盟店組織に属している場合は、自組織が加盟しているマネーの一覧を返します。
```php
$request = new Request\GetPrivateMoneys(
    [
        'organization_code' => "ox-supermarket",  // 組織コード
        'page' => 1,                              // ページ番号
        'per_page' => 50                          // 1ページ分の取得数
    ]
);
```
#### Parameters
**`organization_code`**  
パートナーキーの管理者が発行体組織に属している場合、発行マネーのうち、この組織コードで指定した決済加盟店組織が加盟しているマネーの一覧を返します。決済加盟店組織の管理者は自組織以外を指定することはできません。
```json
{
  "type": "string",
  "maxLength": 32,
  "pattern": "^[a-zA-Z0-9-]*$"
}
```

**`page`**  
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`per_page`**  
```json
{
  "type": "integer",
  "minimum": 1
}
```

成功したときは[PaginatedPrivateMoneys](#paginated-private-moneys)オブジェクトを返します


---


<a name="get-private-money-organization-summaries"></a>
#### 決済加盟店の取引サマリを取得する
```php
$request = new Request\GetPrivateMoneyOrganizationSummaries(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    [
        'from' => "2020-06-27T19:36:51.000000+09:00", // 開始日時(toと同時に指定する必要有)
        'to' => "2022-06-02T16:24:25.000000+09:00", // 終了日時(fromと同時に指定する必要有)
        'page' => 1,                              // ページ番号
        'per_page' => 50                          // 1ページ分の取引数
    ]
);
```
`from`と`to`は同時に指定する必要があります。

#### Parameters
**`private_money_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`from`**  
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`to`**  
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`page`**  
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`per_page`**  
```json
{
  "type": "integer",
  "minimum": 1
}
```

成功したときは[PaginatedPrivateMoneyOrganizationSummaries](#paginated-private-money-organization-summaries)オブジェクトを返します


---


<a name="get-private-money-summary"></a>
#### 取引サマリを取得する
```php
$request = new Request\GetPrivateMoneySummary(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    [
        'from' => "2021-10-28T15:15:51.000000+09:00", // 開始日時
        'to' => "2022-07-16T23:24:57.000000+09:00" // 終了日時
    ]
);
```
#### Parameters
**`private_money_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`from`**  
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`to`**  
```json
{
  "type": "string",
  "format": "date-time"
}
```

成功したときは[PrivateMoneySummary](#private-money-summary)オブジェクトを返します


---


### Bulk
<a name="bulk-create-transaction"></a>
#### CSVファイル一括取引
CSVファイルから一括取引をします。
```php
$request = new Request\BulkCreateTransaction(
    "8VxniaFu09a6CuuE",                           // name: 一括取引タスク名
    "Xl",                                         // content: 取引する情報のCSV
    "xnf5GR396SeNDqXXKEJV0JkE3TjLaqeZOsjE",       // requestId: リクエストID
    [
        'description' => "7E22Wl6YSAD7vVGJBWjZfkSD8toOPMhnrU8KE3wpUrjUs8sizjd1z2FtADy5Q3C5jNeYsU9MpL", // 一括取引の説明
        'private_money_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx" // マネーID
    ]
);
```
#### Parameters
**`name`**  
一括取引タスクの管理用の名前です。
```json
{
  "type": "string",
  "maxLength": 32
}
```

**`description`**  
一括取引タスクの管理用の説明文です。
```json
{
  "type": "string",
  "maxLength": 128
}
```

**`content`**  
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
```json
{
  "type": "string"
}
```

**`request_id`**  
重複したリクエストを判断するためのユニークID。ランダムな36字の文字列を生成して渡してください。
```json
{
  "type": "string",
  "minLength": 36,
  "maxLength": 36
}
```

**`private_money_id`**  
マネーIDです。 マネーを指定します。
```json
{
  "type": "string",
  "format": "uuid"
}
```

成功したときは[BulkTransaction](#bulk-transaction)オブジェクトを返します


---


### Event
<a name="create-external-transaction"></a>
#### ポケペイ外部取引を作成する
ポケペイ外部取引を作成します。

ポケペイ外の現金決済やクレジットカード決済に対してポケペイのポイントを付けたいというときに使用します。

```php
$request = new Request\CreateExternalTransaction(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // shopId: 店舗ID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // customerId: エンドユーザーID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    6659,                                         // amount: 取引額
    [
        'description' => "たい焼き(小倉)",              // 取引説明文
        'metadata' => "{\"key\":\"value\"}",      // ポケペイ外部取引メタデータ
        'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
, ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
, ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
],                                                // 商品情報データ
        'request_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx" // リクエストID
    ]
);
```
#### Parameters
**`shop_id`**  
店舗IDです。

ポケペイ外部取引が行なう店舗を指定します。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`customer_id`**  
エンドユーザーIDです。

エンドユーザーを指定します。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`private_money_id`**  
マネーIDです。

マネーを指定します。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`amount`**  
取引金額です。
```json
{
  "type": "integer",
  "minimum": 0
}
```

**`description`**  
取引説明文です。

任意入力で、取引履歴に表示される説明文です。
```json
{
  "type": "string",
  "maxLength": 200
}
```

**`metadata`**  
ポケペイ外部取引作成時に指定され、取引と紐付けられるメタデータです。

任意入力で、全てのkeyとvalueが文字列であるようなフラットな構造のJSONで指定します。
```json
{
  "type": "string",
  "format": "json"
}
```

**`products`**  
一つの取引に含まれる商品情報データです。
以下の内容からなるJSONオブジェクトの配列で指定します。

- `jan_code`: JANコード。64字以下の文字列
- `name`: 商品名。256字以下の文字列
- `unit_price`: 商品単価。0以上の数値
- `price`: 全体の金額(例: 商品単価 × 個数)。0以上の数値
- `is_discounted`: 賞味期限が近いなどの理由で商品が値引きされているかどうかのフラグ。boolean
- `other`: その他商品に関する情報。JSONオブジェクトで指定します。
```json
{
  "type": "array",
  "items": {
    "type": "object"
  }
}
```

**`request_id`**  
取引作成APIの羃等性を担保するためのリクエスト固有のIDです。

取引作成APIで結果が受け取れなかったなどの理由で再試行する際に、二重に取引が作られてしまうことを防ぐために、クライアント側から指定されます。指定は任意で、UUID V4フォーマットでランダム生成した文字列です。リクエストIDは一定期間で削除されます。

リクエストIDを指定したとき、まだそのリクエストIDに対する取引がない場合、新規に取引が作られレスポンスとして返されます。もしそのリクエストIDに対する取引が既にある場合、既存の取引がレスポンスとして返されます。
```json
{
  "type": "string",
  "format": "uuid"
}
```

成功したときは[ExternalTransactionDetail](#external-transaction-detail)オブジェクトを返します


---


<a name="refund-external-transaction"></a>
#### ポケペイ外部取引をキャンセルする
取引IDを指定して取引をキャンセルします。

発行体の管理者は自組織の直営店、または発行しているマネーの決済加盟店組織での取引をキャンセルできます。
キャンセル対象のポケペイ外部取引に付随するポイント還元キャンペーンも取り消されます。

取引をキャンセルできるのは1回きりです。既にキャンセルされた取引を重ねてキャンセルしようとすると `transaction_already_refunded (422)` エラーが返ります。
```php
$request = new Request\RefundExternalTransaction(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // eventId: 取引ID
    [
        'description' => "返品対応のため"                // 取引履歴に表示する返金事由
    ]
);
```
#### Parameters
**`event_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`description`**  
```json
{
  "type": "string",
  "maxLength": 200
}
```

成功したときは[ExternalTransactionDetail](#external-transaction-detail)オブジェクトを返します


---


### Campaign
<a name="create-campaign"></a>
#### ポイント付与キャンペーンを作る
ポイント付与キャンペーンを作成します。

```php
$request = new Request\CreateCampaign(
    "FyrblmxyYFjVJ1ksDCEql83astJ4f63IhsEWYCV1aJM8EwjAmRBWR0j6oBZVp6NIn0X9ZNmVTX8mLedIikedmC30IadhoI72wGGa", // name: キャンペーン名
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    "2020-11-30T13:02:07.000000+09:00",           // startsAt: キャンペーン開始日時
    "2022-10-08T18:22:13.000000+09:00",           // endsAt: キャンペーン終了日時
    9832,                                         // priority: キャンペーンの適用優先度
    "topup",                                      // event: イベント種別
    [
        'bear_point_shop_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // ポイント負担先店舗ID
        'description' => "0bdfCQE42KbdvTX1CfA4ud9qfvPOSoxFI1UweO2XRdO2hY0pCC8FQpyDiFdYn6ST7vY9DrqkrzPV8XVdQkJOO2v1m3AEScwYzlsFCHOKfiqVfddqZXHyl9FtM3BiAbJG4RFalUDm4QOG36z0pAjeCTeiy225IXwhDE", // キャンペーンの説明文
        'status' => "disabled",                   // キャンペーン作成時の状態
        'point_expires_at' => "2020-08-04T15:52:32.000000+09:00", // ポイント有効期限(絶対日時指定)
        'point_expires_in_days' => 8731,          // ポイント有効期限(相対日数指定)
        'is_exclusive' => TRUE,                   // キャンペーンの重複設定
        'subject' => "all",                       // ポイント付与の対象金額の種別
        'amount_based_point_rules' => [["point_amount" => 5, "point_amount_unit" => "percent", "subject_more_than_or_equal" => 1000, "subject_less_than" => 5000]
],                                                // 取引金額ベースのポイント付与ルール
        'product_based_point_rules' => [["point_amount" => 5, "point_amount_unit" => "percent", "product_code" => "4912345678904", "is_multiply_by_count" => TRUE, "required_count" => 2]
, ["point_amount" => 5, "point_amount_unit" => "percent", "product_code" => "4912345678904", "is_multiply_by_count" => TRUE, "required_count" => 2]
, ["point_amount" => 5, "point_amount_unit" => "percent", "product_code" => "4912345678904", "is_multiply_by_count" => TRUE, "required_count" => 2]
],                                                // 商品情報ベースのポイント付与ルール
        'applicable_days_of_week' => [0],         // キャンペーンを適用する曜日 (複数指定)
        'applicable_time_ranges' => [["from" => "12:00", "to" => "23:59"]
],                                                // キャンペーンを適用する時間帯 (複数指定)
        'applicable_shop_ids' => ["xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"], // キャンペーン適用対象となる店舗IDのリスト
        'minimum_number_for_combination_purchase' => 7793, // 複数種類の商品を同時購入するときの商品種別数の下限
        'exist_in_each_product_groups' => TRUE,   // 複数の商品グループにつき1種類以上の商品購入によって発火するキャンペーンの指定フラグ
        'max_point_amount' => 4142,               // キャンペーンによって付与されるポイントの上限
        'max_total_point_amount' => 9492,         // キャンペーンによって付与されるの1人当たりの累計ポイントの上限
        'dest_private_money_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // ポイント付与先となるマネーID
        'applicable_account_metadata' => ["key" => "sex", "value" => "male"]
,                                                 // ウォレットに紐付くメタデータが特定の値を持つときにのみ発火するキャンペーンを登録します。
        'budget_caps_amount' => 915850842         // キャンペーン予算上限
    ]
);
```
#### Parameters
**`name`**  
キャンペーン名です(必須項目)。

ポイント付与によってできるチャージ取引の説明文に転記されます。取引説明文はエンドユーザーからも確認できます。
```json
{
  "type": "string",
  "maxLength": 256
}
```

**`private_money_id`**  
キャンペーン対象のマネーのIDです(必須項目)。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`starts_at`**  
キャンペーン開始日時です(必須項目)。
キャンペーン期間中のみポイントが付与されます。
開始日時よりも終了日時が前のときはcampaign_invalid_periodエラー(422)になります。
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`ends_at`**  
キャンペーン終了日時です(必須項目)。
キャンペーン期間中のみポイントが付与されます。
開始日時よりも終了日時が前のときはcampaign_invalid_periodエラー(422)になります。
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`priority`**  
キャンペーンの適用優先度です。

優先度が大きいものから順に適用判定されていきます。
キャンペーン期間が重なっている同一の優先度のキャンペーンが存在するとcampaign_period_overlapsエラー(422)になります。
```json
{
  "type": "integer"
}
```

**`event`**  
キャンペーンのトリガーとなるイベントの種類を指定します(必須項目)。

以下のいずれかを指定できます。

1. topup
   店舗からエンドユーザーへの送金取引(チャージ)
2. payment
   エンドユーザーから店舗への送金取引(支払い)
3. external-transaction
   ポケペイ外の取引(現金決済など)
```json
{
  "type": "string",
  "enum": [
    "topup",
    "payment",
    "external-transaction"
  ]
}
```

**`bear_point_shop_id`**  
ポイントを負担する店舗のIDです。デフォルトではマネー発行体の本店が設定されます。
ポイント負担先店舗は後から更新することはできません。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`description`**  
キャンペーンの内容を記載します。管理画面などでキャンペーンを管理するための説明文になります。
```json
{
  "type": "string",
  "maxLength": 200
}
```

**`status`**  
キャンペーン作成時の状態を指定します。デフォルトではenabledです。

以下のいずれかを指定できます。

1. enabled
   有効
2. disabled
   無効
```json
{
  "type": "string",
  "enum": [
    "enabled",
    "disabled"
  ]
}
```

**`point_expires_at`**  
キャンペーンによって付与されるポイントの有効期限を絶対日時で指定します。
省略した場合はマネーに設定された有効期限と同じものがポイントの有効期限となります。
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`point_expires_in_days`**  
キャンペーンによって付与されるポイントの有効期限を相対日数で指定します。
省略した場合はマネーに設定された有効期限と同じものがポイントの有効期限となります。
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`is_exclusive`**  
キャンペーンの重ね掛けを行うかどうかのフラグです。

これにtrueを指定すると他のキャンペーンと同時適用されません。デフォルト値はtrueです。
falseを指定すると次の優先度の重ね掛け可能なキャンペーンの適用判定に進みます。
```json
{
  "type": "boolean"
}
```

**`subject`**  
ポイント付与額を計算する対象となる金額の種類を指定します。デフォルト値はallです。
eventとしてexternal-transactionを指定した場合はポイントとマネーの区別がないためsubjectの指定に関わらず常にallとなります。

以下のいずれかを指定できます。

1. money
moneyを指定すると決済額の中で「マネー」を使って支払った額を対象にします

2. all
all を指定すると決済額全体を対象にします (「ポイント」での取引額を含む)
注意: event を topup にしたときはポイントの付与に対しても適用されます
```json
{
  "type": "string",
  "enum": [
    "money",
    "all"
  ]
}
```

**`amount_based_point_rules`**  
金額をベースとしてポイント付与を行うルールを指定します。
amount_based_point_rules と product_based_point_rules はどちらか一方しか指定できません。
各ルールは一つのみ適用され、条件に重複があった場合は先に記載されたものが優先されます。

例:
```javascript
[
  // 1000円以上、5000円未満の決済には 5％
  {
    "point_amount": 5,
    "point_amount_unit": "percent",
    "subject_more_than_or_equal": 1000,
    "subject_less_than": 5000
  },
  // 5000円以上の決済には 10%
  {
    "point_amount": 10,
    "point_amount_unit": "percent",
    "subject_more_than_or_equal": 5000
  },
]
```
```json
{
  "type": "array",
  "items": {
    "type": "object"
  }
}
```

**`product_based_point_rules`**  
商品情報をベースとしてポイント付与を行うルールを指定します。
ルールは商品ごとに設定可能で、ルールの配列として指定します。
amount_based_point_rules と product_based_point_rules はどちらか一方しか指定できません。
event が payment か external-transaction の時のみ有効です。
各ルールの順序は問わず、適用可能なものは全て適用されます。
一つの決済の中で複数の商品がキャンペーン適用可能な場合はそれぞれの商品についてのルールが適用され、ポイント付与額はその合算になります。

例:
```javascript
[
  // 対象商品の購入額から5%ポイント付与。複数購入時は単価の5%が付与される。
  {
    "point_amount": 5,
    "point_amount_unit": "percent",
    "product_code": "4912345678904",
  },
  // 対象商品の購入額から5%ポイント付与。複数購入時は購入総額の5%が付与される。
  {
    "point_amount": 5,
    "point_amount_unit": "percent",
    "product_code": "4912345678904",
    "is_multiply_by_count": true,
  },
  // 対象商品を2つ以上購入したら500ポイント付与(固定額付与)
  {
    "point_amount": 500,
    "point_amount_unit": "absolute",
    "product_code": "4912345678904",
    "required_count": 2
  },
  // 書籍は10%ポイント付与
  // ※ISBNの形式はレジがポケペイに送信する形式に準じます
  {
    "point_amount": 10,
    "point_amount_unit": "percent",
    "product_code": "978-%",
  },
  // 一部の出版社の書籍は10%ポイント付与
  {
    "point_amount": 10,
    "point_amount_unit": "percent",
    "product_code": "978-4-01-%", // 旺文社
  }
]
```
```json
{
  "type": "array",
  "items": {
    "type": "object"
  }
}
```

**`applicable_days_of_week`**  
```json
{
  "type": "array",
  "items": {
    "type": "integer",
    "minimum": 0,
    "maximum": 6
  }
}
```

**`applicable_time_ranges`**  
```json
{
  "type": "array",
  "items": {
    "type": "object"
  }
}
```

**`applicable_shop_ids`**  
```json
{
  "type": "array",
  "items": {
    "type": "string",
    "format": "uuid"
  }
}
```

**`minimum_number_for_combination_purchase`**  
複数種別の商品を同時購入したとき、同時購入キャンペーンの対象となる商品種別数の下限です。デフォルトでは未指定で、指定する場合は1以上の整数を指定します。

このパラメータを指定するときは product_based_point_rules で商品毎のルールが指定されている必要があります。
例えば、A商品とB商品とC商品のうち、キャンペーンの発火のために2商品以上が同時購入される必要があるときは 2 を指定します。

例1: 商品A, Bが同時購入されたときに固定ポイント額(200ポイント)付与
```javascript
{
  minimum_number_for_combination_purchase: 2,
  product_based_point_rules: [
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "商品Aの商品コード"
    },
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "商品Bの商品コード"
    }
  ]
}
```

例2: 商品A, Bが3個ずつ以上同時購入されたときに固定ポイント額(200ポイント)付与
```javascript
{
  minimum_number_for_combination_purchase: 2,
  product_based_point_rules: [
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "商品Aの商品コード",
      "required_count": 3
    },
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "商品Bの商品コード",
      "required_count": 3
    }
  ]
}
```

例2: 商品A, B, Cのうち2商品以上が同時購入されたときに総額の10%ポイントが付与
```javascript
{
  minimum_number_for_combination_purchase: 2,
  product_based_point_rules: [
    {
      "point_amount": 10,
      "point_amount_unit": "percent",
      "product_code": "商品Aの商品コード",
      "is_multiply_by_count": true,
    },
    {
      "point_amount": 10,
      "point_amount_unit": "percent",
      "product_code": "商品Bの商品コード",
      "is_multiply_by_count": true,
    },
    {
      "point_amount": 10,
      "point_amount_unit": "percent",
      "product_code": "商品Cの商品コード",
      "is_multiply_by_count": true,
    }
  ]
}
```
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`exist_in_each_product_groups`**  
複数の商品グループの各グループにつき1種類以上の商品が購入されることによって発火するキャンペーンであるときに真を指定します。デフォルトは偽です。

このパラメータを指定するときは product_based_point_rules で商品毎のルールが指定され、さらにその中でgroup_idが指定されている必要があります。group_idは正の整数です。
exist_in_each_product_groupsが指定されているにも関わらず商品毎のルールでgroup_idが指定されていないものが含まれている場合はinvalid_parametersエラー(missing group_id, エラーコード400)が返ります。

例えば、商品グループA(商品コードa1, a2)、商品グループB(商品コードb1, b2)の2つの商品グループがあるとします。
このとき、各商品グループからそれぞれ少なくとも1種類以上の商品が購入されることにより発火するキャンペーンに対するリクエストパラメータは以下のようなものになります。

```javascript
{
  exist_in_each_product_groups: true,
  product_based_point_rules: [
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "a1",
      "group_id": 1
    },
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "a2",
      "group_id": 1
    },
    {
      "point_amount": 200,
      "point_amount_unit": "absolute",
      "product_code": "b1",
      "group_id": 2
    },
    {
      "point_amount": 200,
      "point_amount_unit": "absolute",
      "product_code": "b2",
      "group_id": 2
    }
  ]
}
```

このキャンペーンが設定された状態で、商品a1、b1が同時に購入された場合、各商品に対する個別のルールが適用された上での総和がポイント付与値になります。つまり100 + 200=300がポイント付与値になります。商品a1、a2、 b1、b2が同時に購入された場合は100 + 100 + 200 + 200=600がポイント付与値になります。 商品a1、a2が同時に購入された場合は全商品グループから1種以上購入されるという条件を満たしていないためポイントは付与されません。

ポイント付与値を各商品毎のルールの総和ではなく固定値にしたい場合には、max_point_amountを指定します。
例えば以下のようなリクエストパラメータ指定の場合を考えます。

```javascript
{
  max_point_amount: 100,
  exist_in_each_product_groups: true,
  product_based_point_rules: [
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "a1",
      "group_id": 1
    },
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "a2",
      "group_id": 1
    },
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "b1",
      "group_id": 2
    },
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "b2",
      "group_id": 2
    }
  ]
}
```

このキャンペーンが設定された状態で、商品a1、b1が同時に購入された場合、各商品に対する個別のルールが適用された上での総和がポイント付与値になりますが、付与値の上限が100ポイントになります。つまり100 + 200=300と計算されますが上限額の100ポイントが実際の付与値になります。商品a1、a2、 b1、b2が同時に購入された場合は100 + 100 + 200 + 200=600ですが上限額の100がポイント付与値になります。 商品a1、a2が同時に購入された場合は全商品グループから1種以上購入されるという条件を満たしていないためポイントは付与されません。
```json
{
  "type": "boolean"
}
```

**`max_point_amount`**  
キャンペーンによって付与されるポイントの上限を指定します。デフォルトは未指定です。

このパラメータが指定されている場合、amount_based_point_rules や product_based_point_rules によって計算されるポイント付与値がmax_point_amountを越えている場合、max_point_amountの値がポイント付与値となり、越えていない場合はその値がポイント付与値となります。
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`max_total_point_amount`**  
キャンペーンによって付与される1人当たりの累計ポイント数の上限を指定します。デフォルトは未指定です。

このパラメータが指定されている場合、各ユーザに対してそのキャンペーンによって過去付与されたポイントの累積値が記録されるようになります。
累積ポイント数がmax_total_point_amountを超えない限りにおいてキャンペーンで算出されたポイントが付与されます。
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`dest_private_money_id`**  
キャンペーンを駆動するイベントのマネーとは「別のマネー」に対してポイントを付けたいときに、そのマネーIDを指定します。

ポイント付与先のマネーはキャンペーンを駆動するイベントのマネーと同一発行体が発行しているものに限ります。その他のマネーIDが指定された場合は private_money_not_found (422) が返ります。
エンドユーザー、店舗、ポイント負担先店舗はポイント付与先マネーのウォレットを持っている必要があります。持っていない場合はポイントは付きません。
元のイベントのマネーと異なる複数のマネーに対して同時にポイントを付与することはできません。重複可能に設定されている複数のキャンペーンで別々のポイント付与先マネーを指定した場合は最も優先度の高いものが処理され、残りは無視されます。
キャンペーンのポイント付与先マネーは後から更新することはできません。
デフォルトではポイント付与先はキャンペーンを駆動するイベントのマネー(private_money_idで指定したマネー)になります。

別マネーに対するポイント付与は別のtransactionとなります。 RefundTransaction で元のイベントをキャンセルしたときはポイント付与のtransactionもキャンセルされ、逆にポイント付与のtransactionをキャンセルしたときは連動して元のイベントがキャンセルされます。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`applicable_account_metadata`**  
ウォレットに紐付くメタデータが特定の値を持つときにのみ発火するキャンペーンを登録します。
メタデータの属性名 key とメタデータの値 value の組をオブジェクトとして指定します。
ウォレットのメタデータはCreateUserAccountやUpdateCustomerAccountで登録できます。

オプショナルパラメータtestによって比較方法を指定することができます。
デフォルトは equal で、その他に not-equalを指定可能です。

例1: 取引が行なわれたウォレットのメタデータに住所として東京が指定されているときのみ発火

```javascript
{
  "key": "prefecture",
  "value": "tokyo"
}
```

例2: 取引が行なわれたウォレットのメタデータに住所として東京以外が指定されているときのみ発火

```javascript
{
  "key": "prefecture",
  "value": "tokyo",
  "test": "not-equal"
}
```
```json
{
  "type": "object"
}
```

**`budget_caps_amount`**  
キャンペーンの予算上限を指定します。デフォルトは未指定です。

このパラメータが指定されている場合、このキャンペーンの適用により付与されたポイント全体を定期的に集計し、その合計が上限を越えていた場合にはキャンペーンを無効にします。
一度この値を越えて無効となったキャンペーンを再度有効にすることは出来ません。
```json
{
  "type": "integer",
  "minimum": 1,
  "maximum": 10000000000
}
```

成功したときは[Campaign](#campaign)オブジェクトを返します


---


<a name="list-campaigns"></a>
#### キャンペーン一覧を取得する
マネーIDを指定してキャンペーンを取得します。
発行体の組織マネージャ権限で、自組織が発行するマネーのキャンペーンについてのみ閲覧可能です。
閲覧権限がない場合は unpermitted_admin_user エラー(422)が返ります。
```php
$request = new Request\ListCampaigns(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    [
        'is_ongoing' => FALSE,                    // 現在適用可能なキャンペーンかどうか
        'available_from' => "2021-12-12T21:17:41.000000+09:00", // 指定された日時以降に適用可能期間が含まれているか
        'available_to' => "2022-08-14T04:15:30.000000+09:00", // 指定された日時以前に適用可能期間が含まれているか
        'page' => 1,                              // ページ番号
        'per_page' => 20                          // 1ページ分の取得数
    ]
);
```
#### Parameters
**`private_money_id`**  
マネーIDです。

フィルターとして使われ、指定したマネーでのキャンペーンのみ一覧に表示されます。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`is_ongoing`**  
有効化されており、現在キャンペーン期間内にあるキャンペーンをフィルターするために使われます。
真であれば適用可能なもののみを抽出し、偽であれば適用不可なもののみを抽出します。
デフォルトでは未指定(フィルターなし)です。
```json
{
  "type": "boolean"
}
```

**`available_from`**  
キャンペーン終了日時が指定された日時以降であるキャンペーンをフィルターするために使われます。
デフォルトでは未指定(フィルターなし)です。
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`available_to`**  
キャンペーン開始日時が指定された日時以前であるキャンペーンをフィルターするために使われます。
デフォルトでは未指定(フィルターなし)です。
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`page`**  
取得したいページ番号です。
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`per_page`**  
1ページ分の取得数です。デフォルトでは 20 になっています。
```json
{
  "type": "integer",
  "minimum": 1,
  "maximum": 50
}
```

成功したときは[PaginatedCampaigns](#paginated-campaigns)オブジェクトを返します


---


<a name="get-campaign"></a>
#### キャンペーンを取得する
IDを指定してキャンペーンを取得します。
発行体の組織マネージャ権限で、自組織が発行するマネーのキャンペーンについてのみ閲覧可能です。
閲覧権限がない場合は unpermitted_admin_user エラー(422)が返ります。
```php
$request = new Request\GetCampaign(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // campaignId: キャンペーンID
);
```
#### Parameters
**`campaign_id`**  
キャンペーンIDです。

指定したIDのキャンペーンを取得します。存在しないIDを指定した場合は404エラー(NotFound)が返ります。
```json
{
  "type": "string",
  "format": "uuid"
}
```

成功したときは[Campaign](#campaign)オブジェクトを返します


---


<a name="update-campaign"></a>
#### ポイント付与キャンペーンを更新する
ポイント付与キャンペーンを更新します。

```php
$request = new Request\UpdateCampaign(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // campaignId: キャンペーンID
    [
        'name' => "TI7cGyilStc03UjxERdVoe6HFhJgKELPhJZ4V6jG807jn4ij0yxfSZTliY3BcoO0R3ofHxO79PyMPu", // キャンペーン名
        'starts_at' => "2022-09-18T11:36:46.000000+09:00", // キャンペーン開始日時
        'ends_at' => "2022-09-17T02:13:15.000000+09:00", // キャンペーン終了日時
        'priority' => 3460,                       // キャンペーンの適用優先度
        'event' => "external-transaction",        // イベント種別
        'description' => "xlOm9TssUDzbSN9easDT5qaXE9oVV6dzFzoMTL1nMwdKXWkN1V7WK5N3KEyrv8oYx3uFnGQ6ZUjkvuDzL1kINhlYHLw7eGbmo6z2mwFW2G7CePrEb6qc1vzC0TUXZ7gJxmZbR4QIZxkV", // キャンペーンの説明文
        'status' => "enabled",                    // キャンペーン作成時の状態
        'point_expires_at' => "2023-12-17T10:40:12.000000+09:00", // ポイント有効期限(絶対日時指定)
        'point_expires_in_days' => 8996,          // ポイント有効期限(相対日数指定)
        'is_exclusive' => TRUE,                   // キャンペーンの重複設定
        'subject' => "money",                     // ポイント付与の対象金額の種別
        'amount_based_point_rules' => [["point_amount" => 5, "point_amount_unit" => "percent", "subject_more_than_or_equal" => 1000, "subject_less_than" => 5000]
, ["point_amount" => 5, "point_amount_unit" => "percent", "subject_more_than_or_equal" => 1000, "subject_less_than" => 5000]
, ["point_amount" => 5, "point_amount_unit" => "percent", "subject_more_than_or_equal" => 1000, "subject_less_than" => 5000]
],                                                // 取引金額ベースのポイント付与ルール
        'product_based_point_rules' => [["point_amount" => 5, "point_amount_unit" => "percent", "product_code" => "4912345678904", "is_multiply_by_count" => TRUE, "required_count" => 2]
, ["point_amount" => 5, "point_amount_unit" => "percent", "product_code" => "4912345678904", "is_multiply_by_count" => TRUE, "required_count" => 2]
, ["point_amount" => 5, "point_amount_unit" => "percent", "product_code" => "4912345678904", "is_multiply_by_count" => TRUE, "required_count" => 2]
],                                                // 商品情報ベースのポイント付与ルール
        'applicable_days_of_week' => [4, 4],      // キャンペーンを適用する曜日 (複数指定)
        'applicable_time_ranges' => [["from" => "12:00", "to" => "23:59"]
, ["from" => "12:00", "to" => "23:59"]
, ["from" => "12:00", "to" => "23:59"]
],                                                // キャンペーンを適用する時間帯 (複数指定)
        'applicable_shop_ids' => ["xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"], // キャンペーン適用対象となる店舗IDのリスト
        'minimum_number_for_combination_purchase' => 1926, // 複数種類の商品を同時購入するときの商品種別数の下限
        'exist_in_each_product_groups' => TRUE,   // 複数の商品グループにつき1種類以上の商品購入によって発火するキャンペーンの指定フラグ
        'max_point_amount' => 4681,               // キャンペーンによって付与されるポイントの上限
        'max_total_point_amount' => 268,          // キャンペーンによって付与されるの1人当たりの累計ポイントの上限
        'applicable_account_metadata' => ["key" => "sex", "value" => "male"]
,                                                 // ウォレットに紐付くメタデータが特定の値を持つときにのみ発火するキャンペーンを登録します。
        'budget_caps_amount' => 607720022         // キャンペーン予算上限
    ]
);
```
#### Parameters
**`campaign_id`**  
キャンペーンIDです。

指定したIDのキャンペーンを更新します。存在しないIDを指定した場合は404エラー(NotFound)が返ります。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`name`**  
キャンペーン名です。

ポイント付与によってできるチャージ取引の説明文に転記されます。取引説明文はエンドユーザーからも確認できます。
```json
{
  "type": "string",
  "maxLength": 256
}
```

**`starts_at`**  
キャンペーン開始日時です。
キャンペーン期間中のみポイントが付与されます。
開始日時よりも終了日時が前のときはcampaign_invalid_periodエラー(422)になります。
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`ends_at`**  
キャンペーン終了日時です。
キャンペーン期間中のみポイントが付与されます。
開始日時よりも終了日時が前のときはcampaign_invalid_periodエラー(422)になります。
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`priority`**  
キャンペーンの適用優先度です。

優先度が大きいものから順に適用判定されていきます。
キャンペーン期間が重なっている同一の優先度のキャンペーンが存在するとcampaign_period_overlapsエラー(422)になります。
```json
{
  "type": "integer"
}
```

**`event`**  
キャンペーンのトリガーとなるイベントの種類を指定します。

以下のいずれかを指定できます。

1. topup
   店舗からエンドユーザーへの送金取引(チャージ)
2. payment
   エンドユーザーから店舗への送金取引(支払い)
3. external-transaction
   ポケペイ外の取引(現金決済など)
```json
{
  "type": "string",
  "enum": [
    "topup",
    "payment",
    "external-transaction"
  ]
}
```

**`description`**  
キャンペーンの内容を記載します。管理画面などでキャンペーンを管理するための説明文になります。
```json
{
  "type": "string",
  "maxLength": 200
}
```

**`status`**  
キャンペーン作成時の状態を指定します。デフォルトではenabledです。

以下のいずれかを指定できます。

1. enabled
   有効
2. disabled
   無効
```json
{
  "type": "string",
  "enum": [
    "enabled",
    "disabled"
  ]
}
```

**`point_expires_at`**  
キャンペーンによって付与されるポイントの有効期限を絶対日時で指定します。
省略した場合はマネーに設定された有効期限と同じものがポイントの有効期限となります。
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`point_expires_in_days`**  
キャンペーンによって付与されるポイントの有効期限を相対日数で指定します。
省略した場合はマネーに設定された有効期限と同じものがポイントの有効期限となります。
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`is_exclusive`**  
キャンペーンの重ね掛けを行うかどうかのフラグです。

これにtrueを指定すると他のキャンペーンと同時適用されません。デフォルト値はtrueです。
falseを指定すると次の優先度の重ね掛け可能なキャンペーンの適用判定に進みます。
```json
{
  "type": "boolean"
}
```

**`subject`**  
ポイント付与額を計算する対象となる金額の種類を指定します。デフォルト値はallです。
eventとしてexternal-transactionを指定した場合はポイントとマネーの区別がないためsubjectの指定に関わらず常にallとなります。

以下のいずれかを指定できます。

1. money
moneyを指定すると決済額の中で「マネー」を使って支払った額を対象にします

2. all
all を指定すると決済額全体を対象にします (「ポイント」での取引額を含む)
注意: event を topup にしたときはポイントの付与に対しても適用されます
```json
{
  "type": "string",
  "enum": [
    "money",
    "all"
  ]
}
```

**`amount_based_point_rules`**  
金額をベースとしてポイント付与を行うルールを指定します。
amount_based_point_rules と product_based_point_rules はどちらか一方しか指定できません。
各ルールは一つのみ適用され、条件に重複があった場合は先に記載されたものが優先されます。

例:
```javascript
[
  // 1000円以上、5000円未満の決済には 5％
  {
    "point_amount": 5,
    "point_amount_unit": "percent",
    "subject_more_than_or_equal": 1000,
    "subject_less_than": 5000
  },
  // 5000円以上の決済には 10%
  {
    "point_amount": 10,
    "point_amount_unit": "percent",
    "subject_more_than_or_equal": 5000
  },
]
```
```json
{
  "type": "array",
  "items": {
    "type": "object"
  }
}
```

**`product_based_point_rules`**  
商品情報をベースとしてポイント付与を行うルールを指定します。
ルールは商品ごとに設定可能で、ルールの配列として指定します。
amount_based_point_rules と product_based_point_rules はどちらか一方しか指定できません。
event が payment か external-transaction の時のみ有効です。
各ルールの順序は問わず、適用可能なものは全て適用されます。
一つの決済の中で複数の商品がキャンペーン適用可能な場合はそれぞれの商品についてのルールが適用され、ポイント付与額はその合算になります。

例:
```javascript
[
  // 対象商品の購入額から5%ポイント付与。複数購入時は単価の5%が付与される。
  {
    "point_amount": 5,
    "point_amount_unit": "percent",
    "product_code": "4912345678904",
  },
  // 対象商品の購入額から5%ポイント付与。複数購入時は購入総額の5%が付与される。
  {
    "point_amount": 5,
    "point_amount_unit": "percent",
    "product_code": "4912345678904",
    "is_multiply_by_count": true,
  },
  // 対象商品を2つ以上購入したら500ポイント付与(固定額付与)
  {
    "point_amount": 500,
    "point_amount_unit": "absolute",
    "product_code": "4912345678904",
    "required_count": 2
  },
  // 書籍は10%ポイント付与
  // ※ISBNの形式はレジがポケペイに送信する形式に準じます
  {
    "point_amount": 10,
    "point_amount_unit": "percent",
    "product_code": "978-%",
  },
  // 一部の出版社の書籍は10%ポイント付与
  {
    "point_amount": 10,
    "point_amount_unit": "percent",
    "product_code": "978-4-01-%", // 旺文社
  }
]
```
```json
{
  "type": "array",
  "items": {
    "type": "object"
  }
}
```

**`applicable_days_of_week`**  
```json
{
  "type": "array",
  "items": {
    "type": "integer",
    "minimum": 0,
    "maximum": 6
  }
}
```

**`applicable_time_ranges`**  
```json
{
  "type": "array",
  "items": {
    "type": "object"
  }
}
```

**`applicable_shop_ids`**  
```json
{
  "type": "array",
  "items": {
    "type": "string",
    "format": "uuid"
  }
}
```

**`minimum_number_for_combination_purchase`**  
複数種別の商品を同時購入したとき、同時購入キャンペーンの対象となる商品種別数の下限です。

このパラメータを指定するときは product_based_point_rules で商品毎のルールが指定されている必要があります。
例えば、A商品とB商品とC商品のうち、キャンペーンの発火のために2商品以上が同時購入される必要があるときは 2 を指定します。

例1: 商品A, Bが同時購入されたときに固定ポイント額(200ポイント)付与
```javascript
{
  minimum_number_for_combination_purchase: 2,
  product_based_point_rules: [
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "商品Aの商品コード"
    },
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "商品Bの商品コード"
    }
  ]
}
```

例2: 商品A, Bが3個ずつ以上同時購入されたときに固定ポイント額(200ポイント)付与
```javascript
{
  minimum_number_for_combination_purchase: 2,
  product_based_point_rules: [
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "商品Aの商品コード",
      "required_count": 3
    },
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "商品Bの商品コード",
      "required_count": 3
    }
  ]
}
```

例2: 商品A, B, Cのうち2商品以上が同時購入されたときに総額の10%ポイントが付与
```javascript
{
  minimum_number_for_combination_purchase: 2,
  product_based_point_rules: [
    {
      "point_amount": 10,
      "point_amount_unit": "percent",
      "product_code": "商品Aの商品コード",
      "is_multiply_by_count": true,
    },
    {
      "point_amount": 10,
      "point_amount_unit": "percent",
      "product_code": "商品Bの商品コード",
      "is_multiply_by_count": true,
    },
    {
      "point_amount": 10,
      "point_amount_unit": "percent",
      "product_code": "商品Cの商品コード",
      "is_multiply_by_count": true,
    }
  ]
}
```
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`exist_in_each_product_groups`**  
複数の商品グループの各グループにつき1種類以上の商品が購入されることによって発火するキャンペーンであるときに真を指定します。デフォルトは偽です。

このパラメータを指定するときは product_based_point_rules で商品毎のルールが指定され、さらにその中でgroup_idが指定されている必要があります。group_idは正の整数です。
exist_in_each_product_groupsが指定されているにも関わらず商品毎のルールでgroup_idが指定されていないものが含まれている場合はinvalid_parametersエラー(missing group_id, エラーコード400)が返ります。

例えば、商品グループA(商品コードa1, a2)、商品グループB(商品コードb1, b2)の2つの商品グループがあるとします。
このとき、各商品グループからそれぞれ少なくとも1種類以上の商品が購入されることにより発火するキャンペーンに対するリクエストパラメータは以下のようなものになります。

```javascript
{
  exist_in_each_product_groups: true,
  product_based_point_rules: [
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "a1",
      "group_id": 1
    },
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "a2",
      "group_id": 1
    },
    {
      "point_amount": 200,
      "point_amount_unit": "absolute",
      "product_code": "b1",
      "group_id": 2
    },
    {
      "point_amount": 200,
      "point_amount_unit": "absolute",
      "product_code": "b2",
      "group_id": 2
    }
  ]
}
```

このキャンペーンが設定された状態で、商品a1、b1が同時に購入された場合、各商品に対する個別のルールが適用された上での総和がポイント付与値になります。つまり100 + 200=300がポイント付与値になります。商品a1、a2、 b1、b2が同時に購入された場合は100 + 100 + 200 + 200=600がポイント付与値になります。 商品a1、a2が同時に購入された場合は全商品グループから1種以上購入されるという条件を満たしていないためポイントは付与されません。

ポイント付与値を各商品毎のルールの総和ではなく固定値にしたい場合には、max_point_amountを指定します。
例えば以下のようなリクエストパラメータ指定の場合を考えます。

```javascript
{
  max_point_amount: 100,
  exist_in_each_product_groups: true,
  product_based_point_rules: [
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "a1",
      "group_id": 1
    },
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "a2",
      "group_id": 1
    },
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "b1",
      "group_id": 2
    },
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "b2",
      "group_id": 2
    }
  ]
}
```

このキャンペーンが設定された状態で、商品a1、b1が同時に購入された場合、各商品に対する個別のルールが適用された上での総和がポイント付与値になりますが、付与値の上限が100ポイントになります。つまり100 + 200=300と計算されますが上限額の100ポイントが実際の付与値になります。商品a1、a2、 b1、b2が同時に購入された場合は100 + 100 + 200 + 200=600ですが上限額の100がポイント付与値になります。 商品a1、a2が同時に購入された場合は全商品グループから1種以上購入されるという条件を満たしていないためポイントは付与されません。
```json
{
  "type": "boolean"
}
```

**`max_point_amount`**  
キャンペーンによって付与される1取引当たりのポイント数の上限を指定します。デフォルトは未指定です。

このパラメータが指定されている場合、amount_based_point_rules や product_based_point_rules によって計算されるポイント付与値がmax_point_amountを越えている場合、max_point_amountの値がポイント付与値となり、越えていない場合はその値がポイント付与値となります。
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`max_total_point_amount`**  
キャンペーンによって付与される1人当たりの累計ポイント数の上限を指定します。デフォルトは未指定です。

このパラメータが指定されている場合、各ユーザに対してそのキャンペーンによって過去付与されたポイントの累積値が記録されるようになります。
累積ポイント数がmax_total_point_amountを超えない限りにおいてキャンペーンで算出されたポイントが付与されます。
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`applicable_account_metadata`**  
ウォレットに紐付くメタデータが特定の値を持つときにのみ発火するキャンペーンを登録します。
メタデータの属性名 key とメタデータの値 value の組をオブジェクトとして指定します。
ウォレットのメタデータはCreateUserAccountやUpdateCustomerAccountで登録できます。

オプショナルパラメータtestによって比較方法を指定することができます。
デフォルトは equal で、その他に not-equalを指定可能です。

例1: 取引が行なわれたウォレットのメタデータに住所として東京が指定されているときのみ発火

```javascript
{
  "key": "prefecture",
  "value": "tokyo"
}
```

例2: 取引が行なわれたウォレットのメタデータに住所として東京以外が指定されているときのみ発火

```javascript
{
  "key": "prefecture",
  "value": "tokyo",
  "test": "not-equal"
}
```
```json
{
  "type": "object"
}
```

**`budget_caps_amount`**  
キャンペーンの予算上限を指定します。

キャンペーン予算上限が設定されておらずこのパラメータに数値が指定されている場合、このキャンペーンの適用により付与されたポイント全体を定期的に集計し、その合計が上限を越えていた場合にはキャンペーンを無効にします。
一度この値を越えて無効となったキャンペーンを再度有効にすることは出来ません。
キャンペーン予算上限が設定されておらずこのパラメータにnullが指定されている場合、何も発生しない。
キャンペーン予算上限が設定されておりこのパラメータにnullが指定された場合、キャンペーン予算上限は止まります。
```json
{
  "type": "integer",
  "minimum": 1,
  "maximum": 10000000000
}
```

成功したときは[Campaign](#campaign)オブジェクトを返します


---


### Webhook
Webhookは特定のワーカータスクでの処理が完了した事を通知します。
WebHookにはURLとタスク名、有効化されているかを設定することが出来ます。
通知はタスク完了時、事前に設定したURLにPOSTリクエストを行います。

<a name="create-webhook"></a>
#### webhookの作成
ワーカータスクの処理が終了したことを通知するためのWebhookを登録します
このAPIにより指定したタスクの終了時に、指定したURLにPOSTリクエストを送信します。
このとき、リクエストボディは `{"task": <タスク名>}` という値になります。
```php
$request = new Request\CreateWebhook(
    "bulk_shops",                                 // task: タスク名
    "KLea6K"                                      // url: URL
);
```
#### Parameters
**`task`**  
ワーカータスク名を指定します
```json
{
  "type": "string",
  "enum": [
    "bulk_shops",
    "process_user_stats_operation"
  ]
}
```

**`url`**  
通知先のURLを指定します
```json
{
  "type": "string"
}
```

成功したときは[OrganizationWorkerTaskWebhook](#organization-worker-task-webhook)オブジェクトを返します


---


<a name="list-webhooks"></a>
#### 作成したWebhookの一覧を返す
```php
$request = new Request\ListWebhooks(
    [
        'page' => 1,                              // ページ番号
        'per_page' => 50                          // 1ページ分の取得数
    ]
);
```
#### Parameters
**`page`**  
取得したいページ番号です。
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`per_page`**  
1ページ分の取得数です。デフォルトでは 50 になっています。
```json
{
  "type": "integer",
  "minimum": 1
}
```

成功したときは[PaginatedOrganizationWorkerTaskWebhook](#paginated-organization-worker-task-webhook)オブジェクトを返します


---


<a name="update-webhook"></a>
#### Webhookの更新
指定したWebhookの内容を更新します
```php
$request = new Request\UpdateWebhook(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // webhookId: Webhook ID
    [
        'url' => "KMTxnuRpj",                     // URL
        'is_active' => TRUE,                      // 有効/無効
        'task' => "process_user_stats_operation"  // タスク名
    ]
);
```
#### Parameters
**`webhook_id`**  
更新するWebhookのIDです。
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`url`**  
変更するURLを指定します
```json
{
  "type": "string"
}
```

**`is_active`**  
trueならWebhookによる通知が有効になり、falseなら無効になります
```json
{
  "type": "boolean"
}
```

**`task`**  
指定したタスクが終了したときにWebhookによる通知がされます
```json
{
  "type": "string",
  "enum": [
    "bulk_shops",
    "process_user_stats_operation"
  ]
}
```

成功したときは[OrganizationWorkerTaskWebhook](#organization-worker-task-webhook)オブジェクトを返します


---


<a name="delete-webhook"></a>
#### Webhookの削除
指定したWebhookを削除します
```php
$request = new Request\DeleteWebhook(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // webhookId: Webhook ID
);
```
#### Parameters
**`webhook_id`**  
削除するWebhookのIDです。
```json
{
  "type": "string",
  "format": "uuid"
}
```

成功したときは[OrganizationWorkerTaskWebhook](#organization-worker-task-webhook)オブジェクトを返します


---


### Coupon
Couponは支払い時に指定し、支払い処理の前にCouponに指定の方法で値引き処理を行います。
Couponは特定店舗で利用できるものや利用可能期間、配信条件などを設定できます。

<a name="list-coupons"></a>
#### クーポン一覧の取得
指定したマネーのクーポン一覧を取得します
```php
$request = new Request\ListCoupons(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: 対象クーポンのマネーID
    [
        'coupon_id' => "KiTeKThsCV",              // クーポンID
        'coupon_name' => "Hvt0F",                 // クーポン名
        'issued_shop_name' => "egcXhZN",          // 発行店舗名
        'available_shop_name' => "hoP3dbXW",      // 利用可能店舗名
        'available_from' => "2020-12-23T09:04:55.000000+09:00", // 利用可能期間 (開始日時)
        'available_to' => "2020-09-05T11:15:53.000000+09:00", // 利用可能期間 (終了日時)
        'page' => 1,                              // ページ番号
        'per_page' => 50                          // 1ページ分の取得数
    ]
);
```
#### Parameters
**`private_money_id`**  
対象クーポンのマネーIDです(必須項目)。
存在しないマネーIDを指定した場合はprivate_money_not_foundエラー(422)が返ります。

```json
{
  "type": "string",
  "format": "uuid"
}
```

**`coupon_id`**  
指定されたクーポンIDで結果をフィルターします。
部分一致(前方一致)します。

```json
{
  "type": "string"
}
```

**`coupon_name`**  
指定されたクーポン名で結果をフィルターします。

```json
{
  "type": "string"
}
```

**`issued_shop_name`**  
指定された発行店舗で結果をフィルターします。

```json
{
  "type": "string"
}
```

**`available_shop_name`**  
指定された利用可能店舗で結果をフィルターします。

```json
{
  "type": "string"
}
```

**`available_from`**  
利用可能期間でフィルターします。フィルターの開始日時をISO8601形式で指定します。

```json
{
  "type": "string",
  "format": "date-time"
}
```

**`available_to`**  
利用可能期間でフィルターします。フィルターの終了日時をISO8601形式で指定します。

```json
{
  "type": "string",
  "format": "date-time"
}
```

**`page`**  
取得したいページ番号です。
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`per_page`**  
1ページ分の取得数です。デフォルトでは 50 になっています。
```json
{
  "type": "integer",
  "minimum": 1
}
```

成功したときは[PaginatedCoupons](#paginated-coupons)オブジェクトを返します


---


<a name="create-coupon"></a>
#### クーポンの登録
新しいクーポンを登録します
```php
$request = new Request\CreateCoupon(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
    "uFIarDCIG12cWukEiPRDcMrsI69et7tZGcxsWh3x4WMFG9JtXGOrRTCDsNsdOxykdQVM02fdP8dPWgv17gnjksnVKZ2Yg2XW7z7bqKh4VDMi81",
    "2022-07-10T11:08:19.000000+09:00",
    "2024-01-01T20:24:30.000000+09:00",
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // issuedShopId: 発行元の店舗ID
    [
        'description' => "kZfIvFF2aVGBrt4d4BQcmvC7IyShbMWHW8OrxkYJbesefuwz6QVslbgmox4sylqaj0m4NHRO5ZxO4O3NjLEysHxuDJHz86s8rMyDwBbVQMVNIv43CsGJ1N1Ty1LpoGWtPPIzjjzRC7Vh9LObliCnClJEf5Qg177zO5rbJQyEpgsB3u1k6p1M3AaDCD8U2M3hy0vfxtwSmqJp6yKARh5ZRW3Kxq9vutzMeQNTZUuVlFabCqRikwgbBJf",
        'discount_amount' => 2765,
        'discount_percentage' => 6676.0,
        'discount_upper_limit' => 8296,
        'display_starts_at' => "2022-01-07T10:37:08.000000+09:00", // クーポンの掲載期間(開始日時)
        'display_ends_at' => "2020-02-06T01:03:46.000000+09:00", // クーポンの掲載期間(終了日時)
        'is_disabled' => TRUE,                    // 無効化フラグ
        'is_hidden' => TRUE,                      // クーポン一覧に掲載されるかどうか
        'is_public' => FALSE,                     // アプリ配信なしで受け取れるかどうか
        'code' => "PQaRF",                        // クーポン受け取りコード
        'usage_limit' => 6098,                    // ユーザごとの利用可能回数(NULLの場合は無制限)
        'min_amount' => 8186,                     // クーポン適用可能な最小取引額
        'is_shop_specified' => TRUE,              // 特定店舗限定のクーポンかどうか
        'available_shop_ids' => ["xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"], // 利用可能店舗リスト
        'storage_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx" // ストレージID
    ]
);
```
`is_shop_specified`と`available_shop_ids`は同時に指定する必要があります。

#### Parameters
**`private_money_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`name`**  
```json
{
  "type": "string",
  "maxLength": 128
}
```

**`description`**  
```json
{
  "type": "string",
  "maxLength": 256
}
```

**`discount_amount`**  
```json
{
  "type": "integer",
  "minimum": 0
}
```

**`discount_percentage`**  
```json
{
  "type": "number",
  "minimum": 0
}
```

**`discount_upper_limit`**  
```json
{
  "type": "integer",
  "minimum": 0
}
```

**`starts_at`**  
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`ends_at`**  
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`display_starts_at`**  
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`display_ends_at`**  
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`is_disabled`**  
```json
{
  "type": "boolean"
}
```

**`is_hidden`**  
アプリに表示されるクーポン一覧に掲載されるかどうか。
主に一時的に掲載から外したいときに用いられる。そのためis_publicの設定よりも優先される。

```json
{
  "type": "boolean"
}
```

**`is_public`**  
```json
{
  "type": "boolean"
}
```

**`code`**  
```json
{
  "type": "string"
}
```

**`usage_limit`**  
```json
{
  "type": "integer"
}
```

**`min_amount`**  
```json
{
  "type": "integer"
}
```

**`issued_shop_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`is_shop_specified`**  
```json
{
  "type": "boolean"
}
```

**`available_shop_ids`**  
```json
{
  "type": "array",
  "items": {
    "type": "string",
    "format": "uuid"
  }
}
```

**`storage_id`**  
Storage APIでアップロードしたクーポン画像のStorage IDを指定します
```json
{
  "type": "string",
  "format": "uuid"
}
```

成功したときは[CouponDetail](#coupon-detail)オブジェクトを返します


---


<a name="get-coupon"></a>
#### クーポンの取得
指定したIDを持つクーポンを取得します
```php
$request = new Request\GetCoupon(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // couponId: クーポンID
);
```
#### Parameters
**`coupon_id`**  
取得するクーポンのIDです。
UUIDv4フォーマットである必要があり、フォーマットが異なる場合は InvalidParametersエラー(400)が返ります。
指定したIDのクーポンが存在しない場合はCouponNotFoundエラー(422)が返ります。
```json
{
  "type": "string",
  "format": "uuid"
}
```

成功したときは[CouponDetail](#coupon-detail)オブジェクトを返します


---


<a name="update-coupon"></a>
#### クーポンの更新
指定したクーポンを更新します
```php
$request = new Request\UpdateCoupon(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // couponId: クーポンID
    [
        'name' => "LpSH0GqkthOAKJR8VBF",
        'description' => "pRQxxKQexm5F4TlRS3PsnDMFQKcrRJG",
        'discount_amount' => 9276,
        'discount_percentage' => 5620.0,
        'discount_upper_limit' => 6266,
        'starts_at' => "2023-05-06T09:03:43.000000+09:00",
        'ends_at' => "2023-11-13T14:11:01.000000+09:00",
        'display_starts_at' => "2021-11-08T07:53:48.000000+09:00", // クーポンの掲載期間(開始日時)
        'display_ends_at' => "2022-03-25T13:32:04.000000+09:00", // クーポンの掲載期間(終了日時)
        'is_disabled' => FALSE,                   // 無効化フラグ
        'is_hidden' => TRUE,                      // クーポン一覧に掲載されるかどうか
        'is_public' => TRUE,                      // アプリ配信なしで受け取れるかどうか
        'code' => "fNi1S",                        // クーポン受け取りコード
        'usage_limit' => 6522,                    // ユーザごとの利用可能回数(NULLの場合は無制限)
        'min_amount' => 528,                      // クーポン適用可能な最小取引額
        'is_shop_specified' => TRUE,              // 特定店舗限定のクーポンかどうか
        'available_shop_ids' => ["xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"], // 利用可能店舗リスト
        'storage_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx" // ストレージID
    ]
);
```
`discount_amount`と`discount_percentage`の少なくとも一方は指定する必要があります。

#### Parameters
**`coupon_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`name`**  
```json
{
  "type": "string",
  "maxLength": 128
}
```

**`description`**  
```json
{
  "type": "string",
  "maxLength": 256
}
```

**`discount_amount`**  
```json
{
  "type": "integer",
  "minimum": 0
}
```

**`discount_percentage`**  
```json
{
  "type": "number",
  "minimum": 0
}
```

**`discount_upper_limit`**  
```json
{
  "type": "integer",
  "minimum": 0
}
```

**`starts_at`**  
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`ends_at`**  
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`display_starts_at`**  
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`display_ends_at`**  
```json
{
  "type": "string",
  "format": "date-time"
}
```

**`is_disabled`**  
```json
{
  "type": "boolean"
}
```

**`is_hidden`**  
アプリに表示されるクーポン一覧に掲載されるかどうか。
主に一時的に掲載から外したいときに用いられる。そのためis_publicの設定よりも優先される。

```json
{
  "type": "boolean"
}
```

**`is_public`**  
```json
{
  "type": "boolean"
}
```

**`code`**  
```json
{
  "type": "string"
}
```

**`usage_limit`**  
```json
{
  "type": "integer"
}
```

**`min_amount`**  
```json
{
  "type": "integer"
}
```

**`is_shop_specified`**  
```json
{
  "type": "boolean"
}
```

**`available_shop_ids`**  
```json
{
  "type": "array",
  "items": {
    "type": "string",
    "format": "uuid"
  }
}
```

**`storage_id`**  
Storage APIでアップロードしたクーポン画像のStorage IDを指定します
```json
{
  "type": "string",
  "format": "uuid"
}
```

成功したときは[CouponDetail](#coupon-detail)オブジェクトを返します


---


### UserDevice
UserDeviceはユーザー毎のデバイスを管理します。
あるユーザーが使っている端末を区別する必要がある場合に用いられます。
これが必要な理由はBank Payを用いたチャージを行う場合は端末を区別できることが要件としてあるためです。

<a name="create-user-device"></a>
#### ユーザーのデバイス登録
ユーザーのデバイスを新規に登録します
```php
$request = new Request\CreateUserDevice(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // userId: ユーザーID
    [
        'metadata' => "{\"user_agent\": \"Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:120.0) Gecko/20100101 Firefox/120.0\"}" // ユーザーデバイスのメタデータ
    ]
);
```
#### Parameters
**`user_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`metadata`**  
ユーザーのデバイス用の情報をメタデータを保持するために用います。
例: 端末の固有情報やブラウザのUser-Agent

```json
{
  "type": "string",
  "format": "json"
}
```

成功したときは[UserDevice](#user-device)オブジェクトを返します


---


<a name="get-user-device"></a>
#### ユーザーのデバイスを取得
ユーザーのデバイスの情報を取得します
```php
$request = new Request\GetUserDevice(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // userDeviceId: ユーザーデバイスID
);
```
#### Parameters
**`user_device_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

成功したときは[UserDevice](#user-device)オブジェクトを返します


---


<a name="activate-user-device"></a>
#### デバイスの有効化
指定のデバイスを有効化し、それ以外の同一ユーザーのデバイスを無効化します。

```php
$request = new Request\ActivateUserDevice(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // userDeviceId: ユーザーデバイスID
);
```
#### Parameters
**`user_device_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

成功したときは[UserDevice](#user-device)オブジェクトを返します


---


### BankPay
BankPayを用いた銀行からのチャージ取引などのAPIを提供しています。

<a name="create-bank"></a>
#### 銀行口座の登録
銀行口座の登録を始めるAPIです。レスポンスに含まれるredirect_urlをユーザーの端末で開き銀行を登録します。

ユーザーが銀行口座の登録に成功すると、callback_urlにリクエストが行われます。
アプリの場合はDeep Linkを使うことを想定しています。

```php
$request = new Request\CreateBank(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // userDeviceId: デバイスID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    "<Deep Link>",                                // callbackUrl: コールバックURL
    "ポケペイタロウ",                                    // kana: ユーザーの氏名 (片仮名で指定)
    [
        'email' => "DCpwO7mzwi@Iebw.com",         // ユーザーのメールアドレス
        'birthdate' => "19901142"                 // 生年月日
    ]
);
```
#### Parameters
**`user_device_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`private_money_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`callback_url`**  
```json
{
  "type": "string",
  "maxLength": 256
}
```

**`kana`**  
```json
{
  "type": "string",
  "maxLength": 30
}
```

**`email`**  
```json
{
  "type": "string",
  "format": "email",
  "maxLength": 300
}
```

**`birthdate`**  
```json
{
  "type": "string",
  "maxLength": 8
}
```

成功したときは[BankRegisteringInfo](#bank-registering-info)オブジェクトを返します


---


<a name="list-banks"></a>
#### 登録した銀行の一覧
登録した銀行を一覧します
```php
$request = new Request\ListBanks(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // userDeviceId: デバイスID
    [
        'private_money_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"
    ]
);
```
#### Parameters
**`user_device_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`private_money_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

成功したときは[Banks](#banks)オブジェクトを返します


---


<a name="create-bank-topup-transaction"></a>
#### 銀行からのチャージ
指定のマネーのアカウントにbank_idの口座を用いてチャージを行います。
```php
$request = new Request\CreateBankTopupTransaction(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // userDeviceId: デバイスID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    3907,                                         // amount: チャージ金額
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // bankId: 銀行ID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // requestId: リクエストID
);
```
#### Parameters
**`user_device_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`private_money_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`amount`**  
```json
{
  "type": "integer",
  "minimum": 1
}
```

**`bank_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

**`request_id`**  
```json
{
  "type": "string",
  "format": "uuid"
}
```

成功したときは[TransactionDetail](#transaction-detail)オブジェクトを返します


---


## Responses


<a name="account-with-user"></a>
## AccountWithUser
* `id (string)`: 
* `name (string)`: 
* `isSuspended (boolean)`: 
* `status (string)`: 
* `privateMoney (PrivateMoney)`: 
* `user (User)`: 

`private_money`は [PrivateMoney](#private-money) オブジェクトを返します。

`user`は [User](#user) オブジェクトを返します。

<a name="account-detail"></a>
## AccountDetail
* `id (string)`: 
* `name (string)`: 
* `isSuspended (boolean)`: 
* `status (string)`: 
* `balance (double)`: 
* `moneyBalance (double)`: 
* `pointBalance (double)`: 
* `pointDebt (double)`: 
* `privateMoney (PrivateMoney)`: 
* `user (User)`: 
* `externalId (string|null)`: 

`private_money`は [PrivateMoney](#private-money) オブジェクトを返します。

`user`は [User](#user) オブジェクトを返します。

<a name="account-deleted"></a>
## AccountDeleted

<a name="bill"></a>
## Bill
* `id (string)`: 支払いQRコードのID
* `amount (double|null)`: 支払い額
* `maxAmount (double|null)`: 支払い額を範囲指定した場合の上限
* `minAmount (double|null)`: 支払い額を範囲指定した場合の下限
* `description (string)`: 支払いQRコードの説明文(アプリ上で取引の説明文として表示される)
* `account (AccountWithUser)`: 支払いQRコード発行ウォレット
* `isDisabled (boolean)`: 無効化されているかどうか
* `token (string)`: 支払いQRコードを解析したときに出てくるURL

`account`は [AccountWithUser](#account-with-user) オブジェクトを返します。

<a name="check"></a>
## Check
* `id (string)`: チャージQRコードのID
* `createdAt (\DateTime)`: チャージQRコードの作成日時
* `amount (double)`: チャージマネー額 (deprecated)
* `moneyAmount (double)`: チャージマネー額
* `pointAmount (double)`: チャージポイント額
* `description (string)`: チャージQRコードの説明文(アプリ上で取引の説明文として表示される)
* `user (User)`: 送金元ユーザ情報
* `isOnetime (boolean)`: 使用回数が一回限りかどうか
* `isDisabled (boolean)`: 無効化されているかどうか
* `expiresAt (\DateTime)`: チャージQRコード自体の失効日時
* `lastUsedAt (\DateTime|null)`: 
* `privateMoney (PrivateMoney)`: 対象マネー情報
* `usageLimit (integer|null)`: 一回限りでない場合の最大読み取り回数
* `usageCount (double|null)`: 一回限りでない場合の現在までに読み取られた回数
* `pointExpiresAt (\DateTime|null)`: ポイント有効期限(絶対日数指定)
* `pointExpiresInDays (integer|null)`: ポイント有効期限(相対日数指定)
* `token (string)`: チャージQRコードを解析したときに出てくるURL

`user`は [User](#user) オブジェクトを返します。

`private_money`は [PrivateMoney](#private-money) オブジェクトを返します。

<a name="paginated-checks"></a>
## PaginatedChecks
* `rows (Check[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [Check](#check) オブジェクトの配列を返します。

`pagination`は [Pagination](#pagination) オブジェクトを返します。

<a name="cpm-token"></a>
## CpmToken
* `cpmToken (string)`: 
* `account (AccountDetail)`: 
* `transaction (Transaction|null)`: 
* `event (ExternalTransaction|null)`: 
* `scopes (string[])`: 許可された取引種別
* `expiresAt (\DateTime)`: CPMトークンの失効日時
* `metadata (string)`: エンドユーザー側メタデータ

`account`は [AccountDetail](#account-detail) オブジェクトを返します。

`transaction`は [Transaction](#transaction) オブジェクトを返します。

`event`は [ExternalTransaction](#external-transaction) オブジェクトを返します。

<a name="cashtray"></a>
## Cashtray
* `id (string)`: Cashtray自体のIDです。
* `amount (double)`: 取引金額
* `description (string)`: Cashtrayの説明文
* `account (AccountWithUser)`: 発行店舗のウォレット
* `expiresAt (\DateTime)`: Cashtrayの失効日時
* `canceledAt (\DateTime|null)`: Cashtrayの無効化日時。NULLの場合は無効化されていません
* `token (string)`: CashtrayのQRコードを解析したときに出てくるURL

`account`は [AccountWithUser](#account-with-user) オブジェクトを返します。

<a name="cashtray-with-result"></a>
## CashtrayWithResult
* `id (string)`: CashtrayのID
* `amount (double)`: 取引金額
* `description (string)`: Cashtrayの説明文(アプリ上で取引の説明文として表示される)
* `account (AccountWithUser)`: 発行店舗のウォレット
* `expiresAt (\DateTime)`: Cashtrayの失効日時
* `canceledAt (\DateTime|null)`: Cashtrayの無効化日時。NULLの場合は無効化されていません
* `token (string)`: CashtrayのQRコードを解析したときに出てくるURL
* `attempt (CashtrayAttempt|null)`: Cashtray読み取り結果
* `transaction (Transaction|null)`: 取引結果

`account`は [AccountWithUser](#account-with-user) オブジェクトを返します。

`attempt`は [CashtrayAttempt](#cashtray-attempt) オブジェクトを返します。

`transaction`は [Transaction](#transaction) オブジェクトを返します。

<a name="user"></a>
## User
* `id (string)`: ユーザー (または店舗) ID
* `name (string)`: ユーザー (または店舗) 名
* `isMerchant (boolean)`: 店舗ユーザーかどうか

<a name="organization"></a>
## Organization
* `code (string)`: 組織コード
* `name (string)`: 組織名

<a name="transaction-detail"></a>
## TransactionDetail
* `id (string)`: 取引ID
* `type (string)`: 取引種別
* `isModified (boolean)`: 返金された取引かどうか
* `sender (User)`: 送金者情報
* `senderAccount (Account)`: 送金ウォレット情報
* `receiver (User)`: 受取者情報
* `receiverAccount (Account)`: 受取ウォレット情報
* `amount (double)`: 取引総額 (マネー額 + ポイント額)
* `moneyAmount (double)`: 取引マネー額
* `pointAmount (double)`: 取引ポイント額(キャンペーン付与ポイント合算)
* `rawPointAmount (double)`: 取引ポイント額
* `campaignPointAmount (double)`: キャンペーンによるポイント付与額
* `doneAt (\DateTime)`: 取引日時
* `description (string)`: 取引説明文
* `transfers (Transfer[])`: 

`receiver`と`sender`は [User](#user) オブジェクトを返します。

`receiver_account`と`sender_account`は [Account](#account) オブジェクトを返します。

`transfers`は [Transfer](#transfer) オブジェクトの配列を返します。

<a name="shop-with-accounts"></a>
## ShopWithAccounts
* `id (string)`: 店舗ID
* `name (string)`: 店舗名
* `organizationCode (string)`: 組織コード
* `status (string)`: 店舗の状態
* `postalCode (string|null)`: 店舗の郵便番号
* `address (string|null)`: 店舗の住所
* `tel (string|null)`: 店舗の電話番号
* `email (string|null)`: 店舗のメールアドレス
* `externalId (string|null)`: 店舗の外部ID
* `accounts (ShopAccount[])`: 

`accounts`は [ShopAccount](#shop-account) オブジェクトの配列を返します。

<a name="bulk-transaction"></a>
## BulkTransaction
* `id (string)`: 
* `requestId (string)`: リクエストID
* `name (string)`: バルク取引管理用の名前
* `description (string)`: バルク取引管理用の説明文
* `status (string)`: バルク取引の状態
* `error (string|null)`: バルク取引のエラー種別
* `errorLineno (integer|null)`: バルク取引のエラーが発生した行番号
* `submittedAt (\DateTime)`: バルク取引が登録された日時
* `updatedAt (\DateTime)`: バルク取引が更新された日時

<a name="external-transaction-detail"></a>
## ExternalTransactionDetail
* `id (string)`: ポケペイ外部取引ID
* `isModified (boolean)`: 返金された取引かどうか
* `sender (User)`: 送金者情報
* `senderAccount (Account)`: 送金ウォレット情報
* `receiver (User)`: 受取者情報
* `receiverAccount (Account)`: 受取ウォレット情報
* `amount (double)`: 決済額
* `doneAt (\DateTime)`: 取引日時
* `description (string)`: 取引説明文
* `transaction (TransactionDetail|null)`: 関連ポケペイ取引詳細

`receiver`と`sender`は [User](#user) オブジェクトを返します。

`receiver_account`と`sender_account`は [Account](#account) オブジェクトを返します。

`transaction`は [TransactionDetail](#transaction-detail) オブジェクトを返します。

<a name="paginated-private-money-organization-summaries"></a>
## PaginatedPrivateMoneyOrganizationSummaries
* `rows (PrivateMoneyOrganizationSummary[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [PrivateMoneyOrganizationSummary](#private-money-organization-summary) オブジェクトの配列を返します。

`pagination`は [Pagination](#pagination) オブジェクトを返します。

<a name="private-money-summary"></a>
## PrivateMoneySummary
* `topupAmount (double)`: 
* `refundedTopupAmount (double)`: 
* `paymentAmount (double)`: 
* `refundedPaymentAmount (double)`: 
* `addedPointAmount (double)`: 
* `topupPointAmount (double)`: 
* `campaignPointAmount (double)`: 
* `refundedAddedPointAmount (double)`: 
* `exchangeInflowAmount (double)`: 
* `exchangeOutflowAmount (double)`: 
* `transactionCount (integer)`: 

<a name="user-stats-operation"></a>
## UserStatsOperation
* `id (string)`: 集計処理ID
* `from (\DateTime)`: 集計期間の開始時刻
* `to (\DateTime)`: 集計期間の終了時刻
* `status (string)`: 集計処理の実行ステータス
* `errorReason (string|null)`: エラーとなった理由
* `doneAt (\DateTime|null)`: 集計処理の完了時刻
* `fileUrl (string|null)`: 集計結果のCSVのダウンロードURL
* `requestedAt (\DateTime)`: 集計リクエストを行った時刻

<a name="user-device"></a>
## UserDevice
* `id (string)`: デバイスID
* `user (User)`: デバイスを使用するユーザ
* `isActive (boolean)`: デバイスが有効か
* `metadata (string)`: デバイスのメタデータ

`user`は [User](#user) オブジェクトを返します。

<a name="bank-registering-info"></a>
## BankRegisteringInfo
* `redirectUrl (string)`: 
* `paytreeCustomerNumber (string|null)`: 

<a name="banks"></a>
## Banks
* `rows (Bank[])`: 
* `count (integer)`: 

`rows`は [Bank](#bank) オブジェクトの配列を返します。

<a name="paginated-transaction"></a>
## PaginatedTransaction
* `rows (Transaction[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [Transaction](#transaction) オブジェクトの配列を返します。

`pagination`は [Pagination](#pagination) オブジェクトを返します。

<a name="paginated-transaction-v2"></a>
## PaginatedTransactionV2
* `rows (Transaction[])`: 
* `perPage (integer)`: 
* `count (integer)`: 
* `nextPageCursorId (string|null)`: 
* `prevPageCursorId (string|null)`: 

`rows`は [Transaction](#transaction) オブジェクトの配列を返します。

<a name="paginated-transfers"></a>
## PaginatedTransfers
* `rows (Transfer[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [Transfer](#transfer) オブジェクトの配列を返します。

`pagination`は [Pagination](#pagination) オブジェクトを返します。

<a name="paginated-transfers-v2"></a>
## PaginatedTransfersV2
* `rows (Transfer[])`: 
* `perPage (integer)`: 
* `count (integer)`: 
* `nextPageCursorId (string|null)`: 
* `prevPageCursorId (string|null)`: 

`rows`は [Transfer](#transfer) オブジェクトの配列を返します。

<a name="paginated-account-with-users"></a>
## PaginatedAccountWithUsers
* `rows (AccountWithUser[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [AccountWithUser](#account-with-user) オブジェクトの配列を返します。

`pagination`は [Pagination](#pagination) オブジェクトを返します。

<a name="paginated-account-details"></a>
## PaginatedAccountDetails
* `rows (AccountDetail[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [AccountDetail](#account-detail) オブジェクトの配列を返します。

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

<a name="paginated-private-moneys"></a>
## PaginatedPrivateMoneys
* `rows (PrivateMoney[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [PrivateMoney](#private-money) オブジェクトの配列を返します。

`pagination`は [Pagination](#pagination) オブジェクトを返します。

<a name="campaign"></a>
## Campaign
* `id (string)`: キャンペーンID
* `name (string)`: キャペーン名
* `applicableShops (User[]|null)`: キャンペーン適用対象の店舗リスト
* `isExclusive (boolean)`: キャンペーンの重複を許すかどうかのフラグ
* `startsAt (\DateTime)`: キャンペーン開始日時
* `endsAt (\DateTime)`: キャンペーン終了日時
* `pointExpiresAt (\DateTime|null)`: キャンペーンによって付与されるポイントの失効日時
* `pointExpiresInDays (integer|null)`: キャンペーンによって付与されるポイントの有効期限(相対指定、単位は日)
* `priority (integer)`: キャンペーンの優先順位
* `description (string)`: キャンペーン説明文
* `bearPointShop (User)`: ポイントを負担する店舗
* `privateMoney (PrivateMoney)`: キャンペーンを適用するマネー
* `destPrivateMoney (PrivateMoney)`: ポイントを付与するマネー
* `maxTotalPointAmount (integer|null)`: 一人当たりの累計ポイント上限
* `pointCalculationRule (string)`: ポイント計算ルール (banklisp表記)
* `pointCalculationRuleObject (string)`: ポイント計算ルール (JSON文字列による表記)
* `status (string)`: キャンペーンの現在の状態
* `budgetCapsAmount (integer|null)`: キャンペーンの予算上限額
* `budgetCurrentAmount (integer|null)`: キャンペーンの付与合計額
* `budgetCurrentTime (\DateTime|null)`: キャンペーンの付与集計日時

`applicable-shops`は [User](#user) オブジェクトの配列を返します。

`bear_point_shop`は [User](#user) オブジェクトを返します。

`dest_private_money`と`private_money`は [PrivateMoney](#private-money) オブジェクトを返します。

<a name="paginated-campaigns"></a>
## PaginatedCampaigns
* `rows (Campaign[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [Campaign](#campaign) オブジェクトの配列を返します。

`pagination`は [Pagination](#pagination) オブジェクトを返します。

<a name="account-transfer-summary"></a>
## AccountTransferSummary
* `summaries (AccountTransferSummaryElement[])`: 

`summaries`は [AccountTransferSummaryElement](#account-transfer-summary-element) オブジェクトの配列を返します。

<a name="organization-worker-task-webhook"></a>
## OrganizationWorkerTaskWebhook
* `id (string)`: 
* `organizationCode (string)`: 
* `task (string)`: 
* `url (string)`: 
* `contentType (string)`: 
* `isActive (boolean)`: 

<a name="paginated-organization-worker-task-webhook"></a>
## PaginatedOrganizationWorkerTaskWebhook
* `rows (OrganizationWorkerTaskWebhook[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [OrganizationWorkerTaskWebhook](#organization-worker-task-webhook) オブジェクトの配列を返します。

`pagination`は [Pagination](#pagination) オブジェクトを返します。

<a name="coupon-detail"></a>
## CouponDetail
* `id (string)`: クーポンID
* `name (string)`: クーポン名
* `issuedShop (User)`: クーポン発行店舗
* `description (string)`: クーポンの説明文
* `discountAmount (integer|null)`: クーポンによる値引き額(絶対値指定)
* `discountPercentage (double|null)`: クーポンによる値引き率
* `discountUpperLimit (integer|null)`: クーポンによる値引き上限(値引き率が指定された場合の値引き上限額)
* `startsAt (\DateTime)`: クーポンの利用可能期間(開始日時)
* `endsAt (\DateTime)`: クーポンの利用可能期間(終了日時)
* `displayStartsAt (\DateTime)`: クーポンの掲載期間(開始日時)
* `displayEndsAt (\DateTime)`: クーポンの掲載期間(終了日時)
* `usageLimit (integer|null)`: ユーザごとの利用可能回数(NULLの場合は無制限)
* `minAmount (integer|null)`: クーポン適用可能な最小取引額
* `isShopSpecified (boolean)`: 特定店舗限定のクーポンかどうか
* `isHidden (boolean)`: クーポン一覧に掲載されるかどうか
* `isPublic (boolean)`: アプリ配信なしで受け取れるかどうか
* `code (string|null)`: クーポン受け取りコード
* `isDisabled (boolean)`: 無効化フラグ
* `token (string)`: クーポンを特定するためのトークン
* `couponImage (string|null)`: クーポン画像のURL
* `availableShops (User[])`: 利用可能店舗リスト
* `privateMoney (PrivateMoney)`: クーポンのマネー

`issued_shop`は [User](#user) オブジェクトを返します。

`available-shops`は [User](#user) オブジェクトの配列を返します。

`private_money`は [PrivateMoney](#private-money) オブジェクトを返します。

<a name="paginated-coupons"></a>
## PaginatedCoupons
* `rows (Coupon[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [Coupon](#coupon) オブジェクトの配列を返します。

`pagination`は [Pagination](#pagination) オブジェクトを返します。

<a name="paginated-organizations"></a>
## PaginatedOrganizations
* `rows (Organization[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [Organization](#organization) オブジェクトの配列を返します。

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
* `moneyTopupTransferLimit (double)`: マネーチャージ取引上限額
* `type (string)`: マネー種別 (自家型=own, 第三者型=third-party)
* `expirationType (string)`: 有効期限種別 (チャージ日起算=static, 最終利用日起算=last-update, 最終チャージ日起算=last-topup-update)
* `enableTopupByMember (boolean|null)`:  (deprecated)
* `displayMoneyAndPoint (string)`: 

`organization`は [Organization](#organization) オブジェクトを返します。

<a name="pagination"></a>
## Pagination
* `current (integer)`: 
* `perPage (integer)`: 
* `maxPage (integer)`: 
* `hasPrev (boolean)`: 
* `hasNext (boolean)`: 

<a name="transaction"></a>
## Transaction
* `id (string)`: 取引ID
* `type (string)`: 取引種別
* `isModified (boolean)`: 返金された取引かどうか
* `sender (User)`: 送金者情報
* `senderAccount (Account)`: 送金ウォレット情報
* `receiver (User)`: 受取者情報
* `receiverAccount (Account)`: 受取ウォレット情報
* `amount (double)`: 取引総額 (マネー額 + ポイント額)
* `moneyAmount (double)`: 取引マネー額
* `pointAmount (double)`: 取引ポイント額(キャンペーン付与ポイント合算)
* `rawPointAmount (double|null)`: 取引ポイント額
* `campaignPointAmount (double|null)`: キャンペーンによるポイント付与額
* `doneAt (\DateTime)`: 取引日時
* `description (string)`: 取引説明文

`receiver`と`sender`は [User](#user) オブジェクトを返します。

`receiver_account`と`sender_account`は [Account](#account) オブジェクトを返します。

<a name="external-transaction"></a>
## ExternalTransaction
* `id (string)`: ポケペイ外部取引ID
* `isModified (boolean)`: 返金された取引かどうか
* `sender (User)`: 送金者情報
* `senderAccount (Account)`: 送金ウォレット情報
* `receiver (User)`: 受取者情報
* `receiverAccount (Account)`: 受取ウォレット情報
* `amount (double)`: 決済額
* `doneAt (\DateTime)`: 取引日時
* `description (string)`: 取引説明文

`receiver`と`sender`は [User](#user) オブジェクトを返します。

`receiver_account`と`sender_account`は [Account](#account) オブジェクトを返します。

<a name="cashtray-attempt"></a>
## CashtrayAttempt
* `account (AccountWithUser|null)`: エンドユーザーのウォレット
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
* `status (string)`: 
* `privateMoney (PrivateMoney)`: 設定マネー情報

`private_money`は [PrivateMoney](#private-money) オブジェクトを返します。

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

<a name="shop-account"></a>
## ShopAccount
* `id (string)`: ウォレットID
* `name (string)`: ウォレット名
* `isSuspended (boolean)`: ウォレットが凍結されているかどうか
* `canTransferTopup (boolean)`: チャージ可能かどうか
* `privateMoney (PrivateMoney)`: 設定マネー情報

`private_money`は [PrivateMoney](#private-money) オブジェクトを返します。

<a name="private-money-organization-summary"></a>
## PrivateMoneyOrganizationSummary
* `organizationCode (string)`: 
* `topup (OrganizationSummary)`: 
* `payment (OrganizationSummary)`: 

`payment`と`topup`は [OrganizationSummary](#organization-summary) オブジェクトを返します。

<a name="bank"></a>
## Bank
* `id (string)`: 
* `privateMoney (PrivateMoney)`: 
* `bankName (string)`: 
* `bankCode (string)`: 
* `branchNumber (string)`: 
* `branchName (string)`: 
* `depositType (string)`: 
* `maskedAccountNumber (string)`: 
* `accountName (string)`: 

`private_money`は [PrivateMoney](#private-money) オブジェクトを返します。

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
* `status (string)`: 店舗の状態
* `postalCode (string|null)`: 店舗の郵便番号
* `address (string|null)`: 店舗の住所
* `tel (string|null)`: 店舗の電話番号
* `email (string|null)`: 店舗のメールアドレス
* `externalId (string|null)`: 店舗の外部ID

<a name="account-transfer-summary-element"></a>
## AccountTransferSummaryElement
* `transferType (string)`: 
* `moneyAmount (double)`: 
* `pointAmount (double)`: 
* `count (double)`: 

<a name="coupon"></a>
## Coupon
* `id (string)`: クーポンID
* `name (string)`: クーポン名
* `issuedShop (User)`: クーポン発行店舗
* `description (string)`: クーポンの説明文
* `discountAmount (integer|null)`: クーポンによる値引き額(絶対値指定)
* `discountPercentage (double|null)`: クーポンによる値引き率
* `discountUpperLimit (integer|null)`: クーポンによる値引き上限(値引き率が指定された場合の値引き上限額)
* `startsAt (\DateTime)`: クーポンの利用可能期間(開始日時)
* `endsAt (\DateTime)`: クーポンの利用可能期間(終了日時)
* `displayStartsAt (\DateTime)`: クーポンの掲載期間(開始日時)
* `displayEndsAt (\DateTime)`: クーポンの掲載期間(終了日時)
* `usageLimit (integer|null)`: ユーザごとの利用可能回数(NULLの場合は無制限)
* `minAmount (integer|null)`: クーポン適用可能な最小取引額
* `isShopSpecified (boolean)`: 特定店舗限定のクーポンかどうか
* `isHidden (boolean)`: クーポン一覧に掲載されるかどうか
* `isPublic (boolean)`: アプリ配信なしで受け取れるかどうか
* `code (string|null)`: クーポン受け取りコード
* `isDisabled (boolean)`: 無効化フラグ
* `token (string)`: クーポンを特定するためのトークン

`issued_shop`は [User](#user) オブジェクトを返します。

<a name="account-without-private-money-detail"></a>
## AccountWithoutPrivateMoneyDetail
* `id (string)`: 
* `name (string)`: 
* `isSuspended (boolean)`: 
* `status (string)`: 
* `privateMoneyId (string)`: 
* `user (User)`: 

`user`は [User](#user) オブジェクトを返します。

<a name="organization-summary"></a>
## OrganizationSummary
* `count (integer)`: 
* `moneyAmount (double)`: 
* `moneyCount (integer)`: 
* `pointAmount (double)`: 
* `rawPointAmount (double)`: 
* `campaignPointAmount (double)`: 
* `pointCount (integer)`: 
