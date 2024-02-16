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
