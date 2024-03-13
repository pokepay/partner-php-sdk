# Transaction

<a name="get-cpm-token"></a>
## GetCpmToken: CPMトークンの状態取得
CPMトークンの現在の状態を取得します。CPMトークンの有効期限やCPM取引の状態を返します。

```PHP
$request = new Request\GetCpmToken(
    "KQ4TM4OBBdmAKiwkVMeGwc"                      // cpmToken: CPMトークン
);
```



### Parameters
**`cpm_token`** 
  

CPM取引時にエンドユーザーが店舗に提示するバーコードを解析して得られる22桁の文字列です。

```json
{
  "type": "string",
  "minLength": 22,
  "maxLength": 22
}
```



成功したときは
[CpmToken](./responses.md#cpm-token)
を返します



---


<a name="list-transactions"></a>
## ListTransactions: 【廃止】取引履歴を取得する
取引一覧を返します。

```PHP
$request = new Request\ListTransactions(
    [
        'from' => "2023-08-28T05:30:56.000000+09:00", // 開始日時
        'to' => "2022-02-19T15:00:31.000000+09:00", // 終了日時
        'page' => 1,                              // ページ番号
        'per_page' => 50,                         // 1ページ分の取引数
        'shop_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 店舗ID
        'customer_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // エンドユーザーID
        'customer_name' => "太郎",                  // エンドユーザー名
        'terminal_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 端末ID
        'transaction_id' => "t",                  // 取引ID
        'organization_code' => "pocketchange",    // 組織コード
        'private_money_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // マネーID
        'is_modified' => FALSE,                   // キャンセルフラグ
        'types' => ["topup", "payment"],          // 取引種別 (複数指定可)、チャージ=topup、支払い=payment
        'description' => "店頭QRコードによる支払い"          // 取引説明文
    ]
);
```



### Parameters
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



成功したときは
[PaginatedTransaction](./responses.md#paginated-transaction)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|403|NULL|NULL|NULL|



---


<a name="create-transaction"></a>
## CreateTransaction: 【廃止】チャージする
チャージ取引を作成します。このAPIは廃止予定です。以降は `CreateTopupTransaction` を使用してください。

```PHP
$request = new Request\CreateTransaction(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
    [
        'money_amount' => 9573,
        'point_amount' => 3436,
        'point_expires_at' => "2020-06-15T08:38:24.000000+09:00", // ポイント有効期限
        'description' => "u2tN3qF3OiiOujRzWy8Mcj6VHKbsKvxKRJtbZ6K76VuMMSh2Ha6k65TkgQAHKvWLYfnKUDaFnoOELVFIliGUkzDwrtDxf0MXrCLcEeF0G6c7NAJlexFaoQwEiDJ9lfmmbEWyFjH3f4xGeNVyW1dIZm37K"
    ]
);
```



### Parameters
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



成功したときは
[TransactionDetail](./responses.md#transaction-detail)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|400|invalid_parameter_both_point_and_money_are_zero||One of 'money_amount' or 'point_amount' must be a positive (>0) number|
|400|invalid_parameters|項目が無効です|Invalid parameters|
|403|NULL|NULL|NULL|
|410|transaction_canceled|取引がキャンセルされました|Transaction was canceled|
|422|customer_user_not_found||The customer user is not found|
|422|shop_user_not_found|店舗が見つかりません|The shop user is not found|
|422|private_money_not_found||Private money not found|
|422|account_can_not_topup|この店舗からはチャージできません|account can not topup|
|422|transaction_has_done|取引は完了しており、キャンセルすることはできません|Transaction has been copmpleted and cannot be canceled|
|422|account_restricted|特定のアカウントの支払いに制限されています|The account is restricted to pay for a specific account|
|422|account_balance_not_enough|口座残高が不足してます|The account balance is not enough|
|422|c2c_transfer_not_allowed|このマネーではユーザ間マネー譲渡は利用できません|Customer to customer transfer is not available for this money|
|422|account_transfer_limit_exceeded|取引金額が上限を超えました|Too much amount to transfer|
|422|account_balance_exceeded|口座残高が上限を超えました|The account balance exceeded the limit|
|422|account_money_topup_transfer_limit_exceeded|マネーチャージ金額が上限を超えました|Too much amount to money topup transfer|
|422|account_total_topup_limit_range|期間内での合計チャージ額上限に達しました|Entire period topup limit reached|
|422|account_total_topup_limit_entire_period|全期間での合計チャージ額上限に達しました|Entire period topup limit reached|
|422|coupon_unavailable_shop|このクーポンはこの店舗では使用できません。|This coupon is unavailable for this shop.|
|422|coupon_already_used|このクーポンは既に使用済みです。|This coupon is already used.|
|422|coupon_not_received|このクーポンは受け取られていません。|This coupon is not received.|
|422|coupon_not_sent|このウォレットに対して配信されていないクーポンです。|This coupon is not sent to this account yet.|
|422|coupon_amount_not_enough|このクーポンを使用するには支払い額が足りません。|The payment amount not enough to use this coupon.|
|422|coupon_not_payment|クーポンは支払いにのみ使用できます。|Coupons can only be used for payment.|
|422|coupon_unavailable|このクーポンは使用できません。|This coupon is unavailable.|
|422|account_suspended|アカウントは停止されています|The account is suspended|
|422|account_closed|アカウントは退会しています|The account is closed|
|422|customer_account_not_found||The customer account is not found|
|422|shop_account_not_found||The shop account is not found|
|422|account_currency_mismatch|アカウント間で通貨が異なっています|Currency mismatch between accounts|
|422|account_pre_closed|アカウントは退会準備中です|The account is pre-closed|
|422|account_not_accessible|アカウントにアクセスできません|The account is not accessible by this user|
|422|terminal_is_invalidated|端末は無効化されています|The terminal is already invalidated|
|422|same_account_transaction|同じアカウントに送信しています|Sending to the same account|
|422|transaction_invalid_done_at|取引完了日が無効です|Transaction completion date is invalid|
|422|transaction_invalid_amount|取引金額が数値ではないか、受け入れられない桁数です|Transaction amount is not a number or cannot be accepted for this currency|
|503|temporarily_unavailable||Service Unavailable|



---


<a name="list-transactions-v2"></a>
## ListTransactionsV2: 取引履歴を取得する
取引一覧を返します。

```PHP
$request = new Request\ListTransactionsV2(
    [
        'private_money_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // マネーID
        'organization_code' => "pocketchange",    // 組織コード
        'shop_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 店舗ID
        'terminal_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 端末ID
        'customer_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // エンドユーザーID
        'customer_name' => "太郎",                  // エンドユーザー名
        'description' => "店頭QRコードによる支払い",         // 取引説明文
        'transaction_id' => "JgYVY968g",          // 取引ID
        'is_modified' => TRUE,                    // キャンセルフラグ
        'types' => ["topup", "payment"],          // 取引種別 (複数指定可)、チャージ=topup、支払い=payment
        'from' => "2021-01-12T06:46:37.000000+09:00", // 開始日時
        'to' => "2021-11-27T21:23:54.000000+09:00", // 終了日時
        'next_page_cursor_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 次ページへ遷移する際に起点となるtransactionのID
        'prev_page_cursor_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 前ページへ遷移する際に起点となるtransactionのID
        'per_page' => 50                          // 1ページ分の取引数
    ]
);
```



### Parameters
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



成功したときは
[PaginatedTransactionV2](./responses.md#paginated-transaction-v2)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|403|unpermitted_admin_user|この管理ユーザには権限がありません|Admin does not have permission|



---


<a name="create-topup-transaction"></a>
## CreateTopupTransaction: チャージする
チャージ取引を作成します。

```PHP
$request = new Request\CreateTopupTransaction(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // shopId: 店舗ID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // customerId: エンドユーザーのID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    [
        'bear_point_shop_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // ポイント支払時の負担店舗ID
        'money_amount' => 3876,                   // マネー額
        'point_amount' => 6552,                   // ポイント額
        'point_expires_at' => "2021-06-16T10:44:23.000000+09:00", // ポイント有効期限
        'description' => "初夏のチャージキャンペーン",         // 取引履歴に表示する説明文
        'metadata' => "{\"key\":\"value\"}",      // 取引メタデータ
        'request_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx" // リクエストID
    ]
);
```



### Parameters
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



成功したときは
[TransactionDetail](./responses.md#transaction-detail)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|400|invalid_parameter_both_point_and_money_are_zero||One of 'money_amount' or 'point_amount' must be a positive (>0) number|
|400|invalid_parameters|項目が無効です|Invalid parameters|
|403|unpermitted_admin_user|この管理ユーザには権限がありません|Admin does not have permission|
|410|transaction_canceled|取引がキャンセルされました|Transaction was canceled|
|422|invalid_metadata|メタデータの形式が不正です|Invalid metadata format|
|422|account_can_not_topup|この店舗からはチャージできません|account can not topup|
|422|transaction_has_done|取引は完了しており、キャンセルすることはできません|Transaction has been copmpleted and cannot be canceled|
|422|account_restricted|特定のアカウントの支払いに制限されています|The account is restricted to pay for a specific account|
|422|account_balance_not_enough|口座残高が不足してます|The account balance is not enough|
|422|c2c_transfer_not_allowed|このマネーではユーザ間マネー譲渡は利用できません|Customer to customer transfer is not available for this money|
|422|account_transfer_limit_exceeded|取引金額が上限を超えました|Too much amount to transfer|
|422|account_balance_exceeded|口座残高が上限を超えました|The account balance exceeded the limit|
|422|account_money_topup_transfer_limit_exceeded|マネーチャージ金額が上限を超えました|Too much amount to money topup transfer|
|422|account_total_topup_limit_range|期間内での合計チャージ額上限に達しました|Entire period topup limit reached|
|422|account_total_topup_limit_entire_period|全期間での合計チャージ額上限に達しました|Entire period topup limit reached|
|422|coupon_unavailable_shop|このクーポンはこの店舗では使用できません。|This coupon is unavailable for this shop.|
|422|coupon_already_used|このクーポンは既に使用済みです。|This coupon is already used.|
|422|coupon_not_received|このクーポンは受け取られていません。|This coupon is not received.|
|422|coupon_not_sent|このウォレットに対して配信されていないクーポンです。|This coupon is not sent to this account yet.|
|422|coupon_amount_not_enough|このクーポンを使用するには支払い額が足りません。|The payment amount not enough to use this coupon.|
|422|coupon_not_payment|クーポンは支払いにのみ使用できます。|Coupons can only be used for payment.|
|422|coupon_unavailable|このクーポンは使用できません。|This coupon is unavailable.|
|422|account_suspended|アカウントは停止されています|The account is suspended|
|422|account_closed|アカウントは退会しています|The account is closed|
|422|account_currency_mismatch|アカウント間で通貨が異なっています|Currency mismatch between accounts|
|422|account_pre_closed|アカウントは退会準備中です|The account is pre-closed|
|422|account_not_accessible|アカウントにアクセスできません|The account is not accessible by this user|
|422|terminal_is_invalidated|端末は無効化されています|The terminal is already invalidated|
|422|same_account_transaction|同じアカウントに送信しています|Sending to the same account|
|422|transaction_invalid_done_at|取引完了日が無効です|Transaction completion date is invalid|
|422|transaction_invalid_amount|取引金額が数値ではないか、受け入れられない桁数です|Transaction amount is not a number or cannot be accepted for this currency|
|422|customer_account_not_found||The customer account is not found|
|422|shop_account_not_found||The shop account is not found|
|422|private_money_not_found||Private money not found|
|503|temporarily_unavailable||Service Unavailable|



---


<a name="create-payment-transaction"></a>
## CreatePaymentTransaction: 支払いする
支払取引を作成します。
支払い時には、エンドユーザーの残高のうち、ポイント残高から優先的に消費されます。


```PHP
$request = new Request\CreatePaymentTransaction(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // shopId: 店舗ID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // customerId: エンドユーザーID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    7197,                                         // amount: 支払い額
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



### Parameters
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



成功したときは
[TransactionDetail](./responses.md#transaction-detail)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|400|invalid_parameters|項目が無効です|Invalid parameters|
|403|unpermitted_admin_user|この管理ユーザには権限がありません|Admin does not have permission|
|410|transaction_canceled|取引がキャンセルされました|Transaction was canceled|
|422|invalid_metadata|メタデータの形式が不正です|Invalid metadata format|
|422|account_can_not_topup|この店舗からはチャージできません|account can not topup|
|422|transaction_has_done|取引は完了しており、キャンセルすることはできません|Transaction has been copmpleted and cannot be canceled|
|422|account_restricted|特定のアカウントの支払いに制限されています|The account is restricted to pay for a specific account|
|422|account_balance_not_enough|口座残高が不足してます|The account balance is not enough|
|422|c2c_transfer_not_allowed|このマネーではユーザ間マネー譲渡は利用できません|Customer to customer transfer is not available for this money|
|422|account_transfer_limit_exceeded|取引金額が上限を超えました|Too much amount to transfer|
|422|account_balance_exceeded|口座残高が上限を超えました|The account balance exceeded the limit|
|422|account_money_topup_transfer_limit_exceeded|マネーチャージ金額が上限を超えました|Too much amount to money topup transfer|
|422|account_total_topup_limit_range|期間内での合計チャージ額上限に達しました|Entire period topup limit reached|
|422|account_total_topup_limit_entire_period|全期間での合計チャージ額上限に達しました|Entire period topup limit reached|
|422|coupon_unavailable_shop|このクーポンはこの店舗では使用できません。|This coupon is unavailable for this shop.|
|422|coupon_already_used|このクーポンは既に使用済みです。|This coupon is already used.|
|422|coupon_not_received|このクーポンは受け取られていません。|This coupon is not received.|
|422|coupon_not_sent|このウォレットに対して配信されていないクーポンです。|This coupon is not sent to this account yet.|
|422|coupon_amount_not_enough|このクーポンを使用するには支払い額が足りません。|The payment amount not enough to use this coupon.|
|422|coupon_not_payment|クーポンは支払いにのみ使用できます。|Coupons can only be used for payment.|
|422|coupon_unavailable|このクーポンは使用できません。|This coupon is unavailable.|
|422|account_suspended|アカウントは停止されています|The account is suspended|
|422|account_closed|アカウントは退会しています|The account is closed|
|422|account_currency_mismatch|アカウント間で通貨が異なっています|Currency mismatch between accounts|
|422|account_pre_closed|アカウントは退会準備中です|The account is pre-closed|
|422|account_not_accessible|アカウントにアクセスできません|The account is not accessible by this user|
|422|terminal_is_invalidated|端末は無効化されています|The terminal is already invalidated|
|422|same_account_transaction|同じアカウントに送信しています|Sending to the same account|
|422|transaction_invalid_done_at|取引完了日が無効です|Transaction completion date is invalid|
|422|transaction_invalid_amount|取引金額が数値ではないか、受け入れられない桁数です|Transaction amount is not a number or cannot be accepted for this currency|
|422|customer_account_not_found||The customer account is not found|
|422|shop_account_not_found||The shop account is not found|
|422|private_money_not_found||Private money not found|
|503|temporarily_unavailable||Service Unavailable|



---


<a name="create-cpm-transaction"></a>
## CreateCpmTransaction: CPMトークンによる取引作成
CPMトークンにより取引を作成します。
CPMトークンに設定されたスコープの取引を作ることができます。


```PHP
$request = new Request\CreateCpmTransaction(
    "0d8XhDCiCGbEAm8DDmMv6O",                     // cpmToken: CPMトークン
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // shopId: 店舗ID
    6229.0,                                       // amount: 取引金額
    [
        'description' => "たい焼き(小倉)",              // 取引説明文
        'metadata' => "{\"key\":\"value\"}",      // 店舗側メタデータ
        'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
, ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
, ["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "is_discounted" => FALSE, "other" => "{}"]
],                                                // 商品情報データ
        'request_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx" // リクエストID
    ]
);
```



### Parameters
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



成功したときは
[TransactionDetail](./responses.md#transaction-detail)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|400|invalid_parameters|項目が無効です|Invalid parameters|
|403|cpm_unacceptable_amount|このCPMトークンに対して許可されていない金額です。|The amount is unacceptable for the CPM token|
|403|unpermitted_admin_user|この管理ユーザには権限がありません|Admin does not have permission|
|410|transaction_canceled|取引がキャンセルされました|Transaction was canceled|
|422|shop_user_not_found|店舗が見つかりません|The shop user is not found|
|422|private_money_not_found||Private money not found|
|422|cpm_token_already_proceed|このCPMトークンは既に処理されています。|The CPM token is already proceed|
|422|cpm_token_already_expired|このCPMトークンは既に失効しています。|The CPM token is already expired|
|422|cpm_token_not_found|CPMトークンが見つかりませんでした。|The CPM token is not found.|
|422|invalid_metadata|メタデータの形式が不正です|Invalid metadata format|
|422|account_can_not_topup|この店舗からはチャージできません|account can not topup|
|422|transaction_has_done|取引は完了しており、キャンセルすることはできません|Transaction has been copmpleted and cannot be canceled|
|422|account_restricted|特定のアカウントの支払いに制限されています|The account is restricted to pay for a specific account|
|422|account_balance_not_enough|口座残高が不足してます|The account balance is not enough|
|422|c2c_transfer_not_allowed|このマネーではユーザ間マネー譲渡は利用できません|Customer to customer transfer is not available for this money|
|422|account_transfer_limit_exceeded|取引金額が上限を超えました|Too much amount to transfer|
|422|account_balance_exceeded|口座残高が上限を超えました|The account balance exceeded the limit|
|422|account_money_topup_transfer_limit_exceeded|マネーチャージ金額が上限を超えました|Too much amount to money topup transfer|
|422|account_total_topup_limit_range|期間内での合計チャージ額上限に達しました|Entire period topup limit reached|
|422|account_total_topup_limit_entire_period|全期間での合計チャージ額上限に達しました|Entire period topup limit reached|
|422|coupon_unavailable_shop|このクーポンはこの店舗では使用できません。|This coupon is unavailable for this shop.|
|422|coupon_already_used|このクーポンは既に使用済みです。|This coupon is already used.|
|422|coupon_not_received|このクーポンは受け取られていません。|This coupon is not received.|
|422|coupon_not_sent|このウォレットに対して配信されていないクーポンです。|This coupon is not sent to this account yet.|
|422|coupon_amount_not_enough|このクーポンを使用するには支払い額が足りません。|The payment amount not enough to use this coupon.|
|422|coupon_not_payment|クーポンは支払いにのみ使用できます。|Coupons can only be used for payment.|
|422|coupon_unavailable|このクーポンは使用できません。|This coupon is unavailable.|
|422|account_suspended|アカウントは停止されています|The account is suspended|
|422|account_closed|アカウントは退会しています|The account is closed|
|422|customer_account_not_found||The customer account is not found|
|422|shop_account_not_found||The shop account is not found|
|422|account_currency_mismatch|アカウント間で通貨が異なっています|Currency mismatch between accounts|
|422|account_pre_closed|アカウントは退会準備中です|The account is pre-closed|
|422|account_not_accessible|アカウントにアクセスできません|The account is not accessible by this user|
|422|terminal_is_invalidated|端末は無効化されています|The terminal is already invalidated|
|422|same_account_transaction|同じアカウントに送信しています|Sending to the same account|
|422|transaction_invalid_done_at|取引完了日が無効です|Transaction completion date is invalid|
|422|transaction_invalid_amount|取引金額が数値ではないか、受け入れられない桁数です|Transaction amount is not a number or cannot be accepted for this currency|
|503|temporarily_unavailable||Service Unavailable|



---


<a name="create-transfer-transaction"></a>
## CreateTransferTransaction: 個人間送金
エンドユーザー間での送金取引(個人間送金)を作成します。
個人間送金で送れるのはマネーのみで、ポイントを送ることはできません。送金元のマネー残高のうち、有効期限が最も遠いものから順に送金されます。


```PHP
$request = new Request\CreateTransferTransaction(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // senderId: 送金元ユーザーID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // receiverId: 受取ユーザーID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    8452.0,                                       // amount: 送金額
    [
        'metadata' => "{\"key\":\"value\"}",      // 取引メタデータ
        'description' => "たい焼き(小倉)",              // 取引履歴に表示する説明文
        'request_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx" // リクエストID
    ]
);
```



### Parameters
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



成功したときは
[TransactionDetail](./responses.md#transaction-detail)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|400|invalid_parameters|項目が無効です|Invalid parameters|
|403|unpermitted_admin_user|この管理ユーザには権限がありません|Admin does not have permission|
|410|transaction_canceled|取引がキャンセルされました|Transaction was canceled|
|422|customer_user_not_found||The customer user is not found|
|422|private_money_not_found||Private money not found|
|422|invalid_metadata|メタデータの形式が不正です|Invalid metadata format|
|422|account_can_not_topup|この店舗からはチャージできません|account can not topup|
|422|transaction_has_done|取引は完了しており、キャンセルすることはできません|Transaction has been copmpleted and cannot be canceled|
|422|account_restricted|特定のアカウントの支払いに制限されています|The account is restricted to pay for a specific account|
|422|account_balance_not_enough|口座残高が不足してます|The account balance is not enough|
|422|c2c_transfer_not_allowed|このマネーではユーザ間マネー譲渡は利用できません|Customer to customer transfer is not available for this money|
|422|account_transfer_limit_exceeded|取引金額が上限を超えました|Too much amount to transfer|
|422|account_balance_exceeded|口座残高が上限を超えました|The account balance exceeded the limit|
|422|account_money_topup_transfer_limit_exceeded|マネーチャージ金額が上限を超えました|Too much amount to money topup transfer|
|422|account_total_topup_limit_range|期間内での合計チャージ額上限に達しました|Entire period topup limit reached|
|422|account_total_topup_limit_entire_period|全期間での合計チャージ額上限に達しました|Entire period topup limit reached|
|422|coupon_unavailable_shop|このクーポンはこの店舗では使用できません。|This coupon is unavailable for this shop.|
|422|coupon_already_used|このクーポンは既に使用済みです。|This coupon is already used.|
|422|coupon_not_received|このクーポンは受け取られていません。|This coupon is not received.|
|422|coupon_not_sent|このウォレットに対して配信されていないクーポンです。|This coupon is not sent to this account yet.|
|422|coupon_amount_not_enough|このクーポンを使用するには支払い額が足りません。|The payment amount not enough to use this coupon.|
|422|coupon_not_payment|クーポンは支払いにのみ使用できます。|Coupons can only be used for payment.|
|422|coupon_unavailable|このクーポンは使用できません。|This coupon is unavailable.|
|422|account_suspended|アカウントは停止されています|The account is suspended|
|422|account_closed|アカウントは退会しています|The account is closed|
|422|customer_account_not_found||The customer account is not found|
|422|shop_account_not_found||The shop account is not found|
|422|account_currency_mismatch|アカウント間で通貨が異なっています|Currency mismatch between accounts|
|422|account_pre_closed|アカウントは退会準備中です|The account is pre-closed|
|422|account_not_accessible|アカウントにアクセスできません|The account is not accessible by this user|
|422|terminal_is_invalidated|端末は無効化されています|The terminal is already invalidated|
|422|same_account_transaction|同じアカウントに送信しています|Sending to the same account|
|422|transaction_invalid_done_at|取引完了日が無効です|Transaction completion date is invalid|
|422|transaction_invalid_amount|取引金額が数値ではないか、受け入れられない桁数です|Transaction amount is not a number or cannot be accepted for this currency|
|503|temporarily_unavailable||Service Unavailable|



---


<a name="create-exchange-transaction"></a>
## CreateExchangeTransaction

```PHP
$request = new Request\CreateExchangeTransaction(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
    6337,
    [
        'description' => "xPn5JSHVJXh8Q94B643G49hiuGz9Mf8rtHhq6vTBJC14vJa23qnBx2rVMtQpLPCeP9dzLx5t2lgWoJQYoOSmAcuLVq3Dp4kCeEFdr2oD1k2yoz92oXPFICS0jn7hXyL2kllDJ1r3jLO2pXiaEfX6c9g0DX8Wq75NNOSKErJuxzhPvCMr0kZtscw8O",
        'request_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx" // リクエストID
    ]
);
```



### Parameters
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



成功したときは
[TransactionDetail](./responses.md#transaction-detail)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|400|invalid_parameters|項目が無効です|Invalid parameters|
|410|transaction_canceled|取引がキャンセルされました|Transaction was canceled|
|422|account_not_found|アカウントが見つかりません|The account is not found|
|422|transaction_restricted||Transaction is not allowed|
|422|can_not_exchange_between_same_private_money|同じマネーとの交換はできません||
|422|can_not_exchange_between_users|異なるユーザー間での交換は出来ません||
|422|account_can_not_topup|この店舗からはチャージできません|account can not topup|
|422|account_currency_mismatch|アカウント間で通貨が異なっています|Currency mismatch between accounts|
|422|account_not_accessible|アカウントにアクセスできません|The account is not accessible by this user|
|422|terminal_is_invalidated|端末は無効化されています|The terminal is already invalidated|
|422|same_account_transaction|同じアカウントに送信しています|Sending to the same account|
|422|transaction_has_done|取引は完了しており、キャンセルすることはできません|Transaction has been copmpleted and cannot be canceled|
|422|transaction_invalid_done_at|取引完了日が無効です|Transaction completion date is invalid|
|422|transaction_invalid_amount|取引金額が数値ではないか、受け入れられない桁数です|Transaction amount is not a number or cannot be accepted for this currency|
|422|account_restricted|特定のアカウントの支払いに制限されています|The account is restricted to pay for a specific account|
|422|account_balance_not_enough|口座残高が不足してます|The account balance is not enough|
|422|c2c_transfer_not_allowed|このマネーではユーザ間マネー譲渡は利用できません|Customer to customer transfer is not available for this money|
|422|account_transfer_limit_exceeded|取引金額が上限を超えました|Too much amount to transfer|
|422|account_balance_exceeded|口座残高が上限を超えました|The account balance exceeded the limit|
|422|account_money_topup_transfer_limit_exceeded|マネーチャージ金額が上限を超えました|Too much amount to money topup transfer|
|422|account_total_topup_limit_range|期間内での合計チャージ額上限に達しました|Entire period topup limit reached|
|422|account_total_topup_limit_entire_period|全期間での合計チャージ額上限に達しました|Entire period topup limit reached|
|422|coupon_unavailable_shop|このクーポンはこの店舗では使用できません。|This coupon is unavailable for this shop.|
|422|coupon_already_used|このクーポンは既に使用済みです。|This coupon is already used.|
|422|coupon_not_received|このクーポンは受け取られていません。|This coupon is not received.|
|422|coupon_not_sent|このウォレットに対して配信されていないクーポンです。|This coupon is not sent to this account yet.|
|422|coupon_amount_not_enough|このクーポンを使用するには支払い額が足りません。|The payment amount not enough to use this coupon.|
|422|coupon_not_payment|クーポンは支払いにのみ使用できます。|Coupons can only be used for payment.|
|422|coupon_unavailable|このクーポンは使用できません。|This coupon is unavailable.|
|422|account_suspended|アカウントは停止されています|The account is suspended|
|422|account_pre_closed|アカウントは退会準備中です|The account is pre-closed|
|422|account_closed|アカウントは退会しています|The account is closed|
|503|temporarily_unavailable||Service Unavailable|



---


<a name="get-transaction"></a>
## GetTransaction: 取引情報を取得する
取引を取得します。

```PHP
$request = new Request\GetTransaction(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // transactionId: 取引ID
);
```



### Parameters
**`transaction_id`** 
  

取引IDです。

フィルターとして使われ、指定した取引IDの取引を取得します。

```json
{
  "type": "string",
  "format": "uuid"
}
```



成功したときは
[TransactionDetail](./responses.md#transaction-detail)
を返します



---


<a name="refund-transaction"></a>
## RefundTransaction: 取引をキャンセルする
取引IDを指定して取引をキャンセルします。

発行体の管理者は自組織の直営店、または発行しているマネーの決済加盟店組織での取引をキャンセルできます。
キャンセル対象の取引に付随するポイント還元キャンペーンやクーポン適用も取り消されます。

チャージ取引のキャンセル時に返金すべき残高が足りないときは `account_balance_not_enough (422)` エラーが返ります。
取引をキャンセルできるのは1回きりです。既にキャンセルされた取引を重ねてキャンセルしようとすると `transaction_already_refunded (422)` エラーが返ります。

```PHP
$request = new Request\RefundTransaction(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // transactionId: 取引ID
    [
        'description' => "返品対応のため",               // 取引履歴に表示する返金事由
        'returning_point_expires_at' => "2022-06-19T15:14:28.000000+09:00" // 返却ポイントの有効期限
    ]
);
```



### Parameters
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



成功したときは
[TransactionDetail](./responses.md#transaction-detail)
を返します



---


<a name="get-transaction-by-request-id"></a>
## GetTransactionByRequestId: リクエストIDから取引情報を取得する
取引を取得します。

```PHP
$request = new Request\GetTransactionByRequestId(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // requestId: リクエストID
);
```



### Parameters
**`request_id`** 
  

取引作成時にクライアントが生成し指定するリクエストIDです。

リクエストIDに対応する取引が存在すればその取引を返し、無ければNotFound(404)を返します。

```json
{
  "type": "string",
  "format": "uuid"
}
```



成功したときは
[TransactionDetail](./responses.md#transaction-detail)
を返します



---


<a name="get-bulk-transaction"></a>
## GetBulkTransaction: バルク取引ジョブの実行状況を取得する

```PHP
$request = new Request\GetBulkTransaction(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // bulkTransactionId: バルク取引ジョブID
);
```



### Parameters
**`bulk_transaction_id`** 
  

バルク取引ジョブIDです。
バルク取引ジョブ登録時にレスポンスに含まれます。

```json
{
  "type": "string",
  "format": "uuid"
}
```



成功したときは
[BulkTransaction](./responses.md#bulk-transaction)
を返します



---


<a name="list-bulk-transaction-jobs"></a>
## ListBulkTransactionJobs: バルク取引ジョブの詳細情報一覧を取得する

```PHP
$request = new Request\ListBulkTransactionJobs(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // bulkTransactionId: バルク取引ジョブID
    [
        'page' => 1,                              // ページ番号
        'per_page' => 50                          // 1ページ分の取得数
    ]
);
```



### Parameters
**`bulk_transaction_id`** 
  

バルク取引ジョブIDです。
バルク取引ジョブ登録時にレスポンスに含まれます。

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
  

1ページ分の取得数です。デフォルトでは 50 になっています。

```json
{
  "type": "integer",
  "minimum": 1
}
```



成功したときは
[PaginatedBulkTransactionJob](./responses.md#paginated-bulk-transaction-job)
を返します



---


<a name="request-user-stats"></a>
## RequestUserStats: 指定期間内の顧客が行った取引の統計情報をCSVでダウンロードする
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

```PHP
$request = new Request\RequestUserStats(
    "2022-05-20T17:56:49.000000+09:00",           // from: 集計期間の開始時刻
    "2023-12-10T01:16:11.000000+09:00"            // to: 集計期間の終了時刻
);
```



### Parameters
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



成功したときは
[UserStatsOperation](./responses.md#user-stats-operation)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|400|invalid_parameters|項目が無効です|Invalid parameters|
|403|unpermitted_admin_user|この管理ユーザには権限がありません|Admin does not have permission|
|422|invalid_promotional_operation_user|ユーザーの指定に不正な値が含まれています|Invalid user data is specified|
|422|invalid_promotional_operation_status|不正な処理ステータスです|Invalid operation status is specified|
|503|user_stats_operation_service_unavailable|一時的にユーザー統計サービスが利用不能です|User stats service is temporarily unavailable|



---



