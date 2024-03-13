# Transfer

<a name="get-account-transfer-summary"></a>
## GetAccountTransferSummary: 
ウォレットを指定して取引明細種別毎の集計を返す

```PHP
$request = new Request\GetAccountTransferSummary(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // accountId: ウォレットID
    [
        'from' => "2023-06-06T15:24:34.000000+09:00", // 集計期間の開始時刻
        'to' => "2022-09-26T07:49:32.000000+09:00", // 集計期間の終了時刻
        'transfer_types' => ["topup", "payment"]  // 取引明細種別 (複数指定可)
    ]
);
```



### Parameters
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



成功したときは
[AccountTransferSummary](./responses.md#account-transfer-summary)
を返します



---


<a name="list-transfers"></a>
## ListTransfers

```PHP
$request = new Request\ListTransfers(
    [
        'from' => "2020-03-02T16:44:53.000000+09:00",
        'to' => "2023-09-22T20:57:45.000000+09:00",
        'page' => 9949,
        'per_page' => 1246,
        'shop_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
        'shop_name' => "WVb28SeWG8Bm8nEP885h5bVE5OX70",
        'customer_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
        'customer_name' => "5Vm5JiHzOUPeHPDN54LrETsKWQEF",
        'transaction_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
        'private_money_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
        'is_modified' => FALSE,
        'transaction_types' => ["cashback", "expire"],
        'transfer_types' => ["campaign", "payment", "exchange", "expire"], // 取引明細の種類でフィルターします。
        'description' => "店頭QRコードによる支払い"          // 取引詳細説明文
    ]
);
```



### Parameters
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



成功したときは
[PaginatedTransfers](./responses.md#paginated-transfers)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|403|NULL|NULL|NULL|



---


<a name="list-transfers-v2"></a>
## ListTransfersV2

```PHP
$request = new Request\ListTransfersV2(
    [
        'shop_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 店舗ID
        'shop_name' => "NuFH08cHi3IruRfVcbJYOhkdNc7P4FTTn7dkmZ79WHBWuUwmPiQWsAKL3kSTc0LPbfp9enQ4UqYgv1CZMBdnrAluiOKJEBcBWwa9xyy2bCL74Q4u2OMMM0xD2AQaKdW9LUbHMcMKbw9zDIEFEyvAvmcoCxUBg4yU3AAs36iFeuIBUml3h361guYHjOImoZhSOt8UNyob0V", // 店舗名
        'customer_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // エンドユーザーID
        'customer_name' => "QGme5CA27ltkwLNnQtyV2QJygcowmF67ESWsIRxLPg383wnSfVCO7XYJmoO0uhcJraMmDaSEahfn300LCaHLSroJkepEoifMTQ44ocvwtomMfjQ73GX2yquqoxmpJQvrLat0xlnzVZch13fLL8IaybXOFsTe5kGdJyjn39kuUAVwNBecCVcfQFB6zhe4zCjHFhQi2UCz", // エンドユーザー名
        'transaction_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 取引ID
        'private_money_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // マネーID
        'is_modified' => TRUE,                    // キャンセルフラグ
        'transaction_types' => ["topup", "transfer", "expire", "payment"], // 取引種別 (複数指定可)、チャージ=topup、支払い=payment
        'next_page_cursor_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 次ページへ遷移する際に起点となるtransferのID
        'prev_page_cursor_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 前ページへ遷移する際に起点となるtransferのID
        'per_page' => 50,                         // 1ページ分の取引数
        'transfer_types' => ["coupon", "topup"],  // 取引明細種別 (複数指定可)
        'description' => "店頭QRコードによる支払い",         // 取引詳細説明文
        'from' => "2020-04-14T03:05:14.000000+09:00", // 開始日時
        'to' => "2021-03-02T03:42:44.000000+09:00" // 終了日時
    ]
);
```



### Parameters
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



成功したときは
[PaginatedTransfersV2](./responses.md#paginated-transfers-v2)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|403|unpermitted_admin_user|この管理ユーザには権限がありません|Admin does not have permission|



---



