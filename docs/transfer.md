# Transfer
送金取引明細を表すデータです。
マネー(Private Money)のウォレット間の送金記録を取得します。
取引(Transaction)は複数の送金明細(Transfer)で構成されています。
送金明細には送金元・送金先のアカウント情報、マネー額、ポイント額などが含まれます。
取引種別として、payment, topup, campaign-topup, transfer, exchange, refund-payment, refund-topup, cashback, expire等があります。


<a name="get-account-transfer-summary"></a>
## GetAccountTransferSummary: 
ウォレットを指定して取引明細種別毎の集計を返す

```PHP
$request = new Request\GetAccountTransferSummary(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // accountId: ウォレットID
    [
        'from' => "2021-11-05T09:00:53.000000Z",  // 集計期間の開始時刻
        'to' => "2020-10-05T11:23:18.000000Z",    // 集計期間の終了時刻
        'transfer_types' => ["topup", "payment"]  // 取引明細種別 (複数指定可)
    ]
);
```



### Parameters
#### `account_id`
ウォレットIDです。

ここで指定したウォレットIDの取引明細レベルでの集計を取得します。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `from`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "date-time"
}
```

</details>

#### `to`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "date-time"
}
```

</details>

#### `transfer_types`
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

<details>
<summary>スキーマ</summary>

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

</details>



成功したときは
[AccountTransferSummary](./responses.md#account-transfer-summary)
を返します



---


<a name="list-transfers"></a>
## ListTransfers

```PHP
$request = new Request\ListTransfers(
    [
        'from' => "2020-05-15T01:57:55.000000Z",
        'to' => "2024-08-26T01:04:42.000000Z",
        'page' => 4463,
        'per_page' => 4754,
        'shop_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
        'shop_name' => "xsvgPufRhkZSIPkBFVSotgyldVmaPxxkTqOmFrFIeeAGW6tZ8ccBHHSscpO2n832d6dquF6eiZ3Dd6WSyHdflPLxXMNqqALPwoGWvHelnhCvdyO5hkKi9O2P9jiZ6u3x2WBzZJZ5a5g6qUYzSlCDa2sGdGVrQ24o4nKCzYGzzQTWE3lYOg9rxxthyfXlSvfosPd1dV4",
        'customer_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
        'customer_name' => "mUaevGo2T7nnwUuCJVK5LAGSeliWWE3p7BNebn72rKlC8xS0lGxuRh661U82b0yeYo5zfOAgdSLVNb11hZJnWEH9hNdPtUfATWqt0PIkhoWI2jo5XiCGDGRUSQL1ViXus5xn7MbZoA7GyvC5m86vU4CTunlo9FHcvhpXn1f9WUvYvDDo3G7amxcKXWGa0ExI5eaGTZJemJSksAElb4iAlQjM0mI6tueKzKdA8G45Yd1ntlQmTFdCRQoNs8we7",
        'transaction_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
        'private_money_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
        'is_modified' => FALSE,
        'transaction_types' => ["cashback", "expire", "transfer", "payment"],
        'transfer_types' => ["coupon", "campaign", "topup", "expire"], // 取引明細の種類でフィルターします。
        'description' => "店頭QRコードによる支払い"          // 取引詳細説明文
    ]
);
```



### Parameters
#### `from`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "date-time"
}
```

</details>

#### `to`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "date-time"
}
```

</details>

#### `page`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "minimum": 1
}
```

</details>

#### `per_page`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "minimum": 1
}
```

</details>

#### `shop_id`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `shop_name`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 256
}
```

</details>

#### `customer_id`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `customer_name`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 256
}
```

</details>

#### `transaction_id`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `private_money_id`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `is_modified`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "boolean"
}
```

</details>

#### `transaction_types`

<details>
<summary>スキーマ</summary>

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

</details>

#### `transfer_types`
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

<details>
<summary>スキーマ</summary>

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

</details>

#### `description`
取引詳細を指定の取引詳細説明文でフィルターします。

取引詳細説明文が完全一致する取引のみ抽出されます。取引詳細説明文は最大200文字で記録されています。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 200
}
```

</details>



成功したときは
[PaginatedTransfers](./responses.md#paginated-transfers)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|403|NULL|NULL|NULL|
|503|temporarily_unavailable||Service Unavailable|



---


<a name="list-transfers-v2"></a>
## ListTransfersV2

```PHP
$request = new Request\ListTransfersV2(
    [
        'shop_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 店舗ID
        'shop_name' => "ROuetQ8zFdMo0VY4tUGROiwu8g5jegd2t", // 店舗名
        'customer_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // エンドユーザーID
        'customer_name' => "c5SvOZdXc2AVLuF8gaKQ0OEhkP9BLs49M6H6epGVtu0HPhsCKuI2bJUyIRN5hatVHvQNYn4X1Qj8JOhaftsXxsjd7rD3p3viKfIPkJsUNb1al7E8GagWKQ4TM4OBBdmAKiwkVMeGwc0telVu2tN3qF3OiiOujRzWy8Mcj6VHKbsKvxKRJtbZ6K76VuMMSh2Ha6k65", // エンドユーザー名
        'transaction_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 取引ID
        'private_money_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // マネーID
        'is_modified' => FALSE,                   // キャンセルフラグ
        'transaction_types' => ["cashback", "topup", "expire", "payment", "transfer"], // 取引種別 (複数指定可)、チャージ=topup、支払い=payment
        'next_page_cursor_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 次ページへ遷移する際に起点となるtransferのID
        'prev_page_cursor_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 前ページへ遷移する際に起点となるtransferのID
        'per_page' => 50,                         // 1ページ分の取引数
        'transfer_types' => ["expire", "exchange", "cashback", "coupon", "transfer", "topup", "campaign", "payment"], // 取引明細種別 (複数指定可)
        'description' => "店頭QRコードによる支払い",         // 取引詳細説明文
        'from' => "2026-06-29T09:49:14.000000Z",  // 開始日時
        'to' => "2025-11-03T19:04:44.000000Z"     // 終了日時
    ]
);
```



### Parameters
#### `shop_id`
店舗IDです。

フィルターとして使われ、指定された店舗での取引のみ一覧に表示されます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `shop_name`
店舗名です。

フィルターとして使われ、入力された名前に部分一致する店舗での取引のみ一覧に表示されます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 256
}
```

</details>

#### `customer_id`
エンドユーザーIDです。

フィルターとして使われ、指定されたエンドユーザーの取引のみ一覧に表示されます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `customer_name`
エンドユーザー名です。

フィルターとして使われ、入力された名前に部分一致するエンドユーザーでの取引のみ一覧に表示されます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 256
}
```

</details>

#### `transaction_id`
取引IDです。

フィルターとして使われ、指定された取引IDに部分一致(前方一致)する取引のみが一覧に表示されます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `private_money_id`
マネーIDです。

指定したマネーでの取引が一覧に表示されます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `is_modified`
キャンセルフラグです。

これにtrueを指定するとキャンセルされた取引のみ一覧に表示されます。
デフォルト値はfalseで、キャンセルの有無にかかわらず一覧に表示されます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "boolean"
}
```

</details>

#### `transaction_types`
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

<details>
<summary>スキーマ</summary>

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

</details>

#### `next_page_cursor_id`
次ページへ遷移する際に起点となるtransferのID(前ページの末尾要素のID)です。
本APIのレスポンスにもnext_page_cursor_idが含まれており、これがnull値の場合は最後のページであることを意味します。
UUIDである場合は次のページが存在することを意味し、このnext_page_cursor_idをリクエストパラメータに含めることで次ページに遷移します。

next_page_cursor_idのtransfer自体は次のページには含まれません。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `prev_page_cursor_id`
前ページへ遷移する際に起点となるtransferのID(次ページの先頭要素のID)です。

本APIのレスポンスにもprev_page_cursor_idが含まれており、これがnull値の場合は先頭のページであることを意味します。
UUIDである場合は前のページが存在することを意味し、このprev_page_cursor_idをリクエストパラメータに含めることで前ページに遷移します。

prev_page_cursor_idのtransfer自体は前のページには含まれません。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `per_page`
1ページ分の取引数です。

デフォルト値は50です。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "minimum": 1,
  "maximum": 1000
}
```

</details>

#### `transfer_types`
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

<details>
<summary>スキーマ</summary>

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

</details>

#### `description`
取引詳細を指定の取引詳細説明文でフィルターします。

取引詳細説明文が完全一致する取引のみ抽出されます。取引詳細説明文は最大200文字で記録されています。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 200
}
```

</details>

#### `from`
抽出期間の開始日時です。

フィルターとして使われ、開始日時以降に発生した取引のみ一覧に表示されます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "date-time"
}
```

</details>

#### `to`
抽出期間の終了日時です。

フィルターとして使われ、終了日時以前に発生した取引のみ一覧に表示されます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "date-time"
}
```

</details>



成功したときは
[PaginatedTransfersV2](./responses.md#paginated-transfers-v2)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|403|unpermitted_admin_user|この管理ユーザには権限がありません|Admin does not have permission|
|503|temporarily_unavailable||Service Unavailable|



---



