# Transaction
取引を表すデータです。
マネー(Private Money)のウォレット間の送金を記録し、キャンセルなどで状態が更新されることがあります。
取引種類として以下が存在します。

- topup: チャージ。Merchant => Customer送金
- payment: 支払い。Customer => Merchant送金
- transfer: 個人間譲渡。Customer => Customer送金
- exchange: マネー間交換。１ユーザのウォレット間の送金（交換）
- expire: 退会時失効。退会時の払戻を伴わない残高失効履歴
- cashback: 退会時払戻。退会時の払戻金額履歴


<a name="get-cpm-token"></a>
## GetCpmToken: CPMトークンの状態取得
CPMトークンの現在の状態を取得します。CPMトークンの有効期限やCPM取引の状態を返します。

```PHP
$request = new Request\GetCpmToken(
    "odFyg21jiUhByaB66BNcap"                      // cpmToken: CPMトークン
);
```



### Parameters
#### `cpm_token`
CPM取引時にエンドユーザーが店舗に提示するバーコードを解析して得られる22桁の文字列です。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "minLength": 22,
  "maxLength": 22
}
```

</details>



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
        'from' => "2020-08-27T22:41:33.000000Z",  // 開始日時
        'to' => "2024-10-05T21:36:20.000000Z",    // 終了日時
        'page' => 1,                              // ページ番号
        'per_page' => 50,                         // 1ページ分の取引数
        'shop_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 店舗ID
        'customer_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // エンドユーザーID
        'customer_name' => "太郎",                  // エンドユーザー名
        'terminal_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 端末ID
        'transaction_id' => "LZWxad9qMq",         // 取引ID
        'organization_code' => "pocketchange",    // 組織コード
        'private_money_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // マネーID
        'is_modified' => TRUE,                    // キャンセルフラグ
        'types' => ["topup", "payment"],          // 取引種別 (複数指定可)、チャージ=topup、支払い=payment
        'description' => "店頭QRコードによる支払い"          // 取引説明文
    ]
);
```



### Parameters
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

#### `page`
取得したいページ番号です。

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
1ページ分の取引数です。

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

#### `customer_id`
エンドユーザーIDです。

フィルターとして使われ、指定されたエンドユーザーでの取引のみ一覧に表示されます。

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

#### `terminal_id`
端末IDです。

フィルターとして使われ、指定された端末での取引のみ一覧に表示されます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
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
  "type": "string"
}
```

</details>

#### `organization_code`
組織コードです。

フィルターとして使われ、指定された組織での取引のみ一覧に表示されます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 32,
  "pattern": "^[a-zA-Z0-9-]*$"
}
```

</details>

#### `private_money_id`
マネーIDです。

フィルターとして使われ、指定したマネーでの取引のみ一覧に表示されます。

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

#### `types`
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
      "exchange_outflow",
      "exchange_inflow",
      "cashback",
      "expire"
    ]
  }
}
```

</details>

#### `description`
取引を指定の取引説明文でフィルターします。

取引説明文が完全一致する取引のみ抽出されます。取引説明文は最大200文字で記録されています。

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
[PaginatedTransaction](./responses.md#paginated-transaction)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|403|NULL|NULL|NULL|
|503|temporarily_unavailable||Service Unavailable|



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
        'money_amount' => 1931,
        'point_amount' => 9917,
        'point_expires_at' => "2025-12-19T02:07:34.000000Z", // ポイント有効期限
        'description' => "CaVImVTzD7ogGgbbuuhXvkkv63jx716j9qYe"
    ]
);
```



### Parameters
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

#### `money_amount`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "format": "decimal",
  "minimum": 0
}
```

</details>

#### `point_amount`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "format": "decimal",
  "minimum": 0
}
```

</details>

#### `point_expires_at`
ポイントをチャージした場合の、付与されるポイントの有効期限です。
省略した場合はマネーに設定された有効期限と同じものがポイントの有効期限となります。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "date-time"
}
```

</details>

#### `description`

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
[TransactionDetail](./responses.md#transaction-detail)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|400|invalid_parameter_both_point_and_money_are_zero||One of 'money_amount' or 'point_amount' must be a positive (>0) number|
|400|invalid_parameters|項目が無効です|Invalid parameters|
|403|NULL|NULL|NULL|
|422|customer_user_not_found||The customer user is not found|
|422|shop_user_not_found|店舗が見つかりません|The shop user is not found|
|422|private_money_not_found|マネーが見つかりません|Private money not found|
|422|credit_session_money_topup_requires_credit_card|オーソリチャージ用マネーではクレジットカードによるチャージのみ許可されています|Credit card is required for topup on credit-session enabled money|
|422|cannot_topup_during_cvs_authorization_pending|コンビニ決済の予約中はチャージできません|You cannot topup your account while a convenience store payment is pending.|
|422|credit_session_not_found|オーソリセッションが見つかりません|Credit session not found|
|422|not_applicable_transaction_type_for_account_topup_quota|チャージ取引以外の取引種別ではチャージ可能枠を使用できません|Account topup quota is not applicable to transaction types other than topup.|
|422|private_money_topup_quota_not_available|このマネーにはチャージ可能枠の設定がありません|Topup quota is not available with this private money.|
|422|account_can_not_topup|この店舗からはチャージできません|account can not topup|
|422|private_money_closed|このマネーは解約されています|This money was closed|
|422|transaction_has_done|取引は完了しており、キャンセルすることはできません|Transaction has been copmpleted and cannot be canceled|
|422|account_restricted|特定のアカウントの支払いに制限されています|The account is restricted to pay for a specific account|
|422|account_balance_not_enough|口座残高が不足してます|The account balance is not enough|
|422|c2c_transfer_not_allowed|このマネーではユーザ間マネー譲渡は利用できません|Customer to customer transfer is not available for this money|
|422|account_transfer_limit_exceeded|取引金額が上限を超えました|Too much amount to transfer|
|422|account_balance_exceeded|口座残高が上限を超えました|The account balance exceeded the limit|
|422|account_money_topup_transfer_limit_exceeded|マネーチャージ金額が上限を超えました|Too much amount to money topup transfer|
|422|reserved_word_can_not_specify_to_metadata|取引メタデータに予約語は指定出来ません|Reserved word can not specify to metadata|
|422|account_topup_quota_not_splittable|このチャージ可能枠は設定された金額未満の金額には使用できません|This topup quota is only applicable to its designated money amount.|
|422|topup_amount_exceeding_topup_quota_usable_amount|チャージ金額がチャージ可能枠の利用可能金額を超えています|Topup amount is exceeding the topup quota's usable amount|
|422|account_topup_quota_inactive|指定されたチャージ可能枠は有効ではありません|Topup quota is inactive|
|422|account_topup_quota_not_within_applicable_period|指定されたチャージ可能枠の利用可能期間外です|Topup quota is not applicable at this time|
|422|account_topup_quota_not_found|ウォレットにチャージ可能枠がありません|Topup quota is not found with this account|
|422|account_total_topup_limit_range|合計チャージ額がマネーで指定された期間内での上限を超えています|The topup exceeds the total amount within the period defined by the money.|
|422|account_total_topup_limit_entire_period|合計チャージ額がマネーで指定された期間内での上限を超えています|The topup exceeds the total amount defined by the money.|
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
|422|shop_account_not_found|店舗アカウントが見つかりません|The shop account is not found|
|422|account_currency_mismatch|アカウント間で通貨が異なっています|Currency mismatch between accounts|
|422|account_pre_closed|アカウントは退会準備中です|The account is pre-closed|
|422|account_not_accessible|アカウントにアクセスできません|The account is not accessible by this user|
|422|terminal_is_invalidated|端末は無効化されています|The terminal is already invalidated|
|422|same_account_transaction|同じアカウントに送信しています|Sending to the same account|
|422|transaction_invalid_done_at|取引完了日が無効です|Transaction completion date is invalid|
|422|transaction_invalid_amount|取引金額が数値ではないか、受け入れられない桁数です|Transaction amount is not a number or cannot be accepted for this currency|
|503|temporarily_unavailable||Service Unavailable|



---


<a name="create-transaction-group"></a>
## CreateTransactionGroup: トランザクショングループを作成する
複数の取引を1つのグループとして管理できるようにします。

```PHP
$request = new Request\CreateTransactionGroup(
    "QTBsHYxIvY8A2kLLFzD"                         // name: 作成するトランザクショングループの名称です。
);
```



### Parameters
#### `name`
作成するトランザクショングループの名称です。
"pokepay" で始まる文字列は予約済みのため使用できません。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 64
}
```

</details>



成功したときは
[TransactionGroup](./responses.md#transaction-group)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|403|unpermitted_admin_user|この管理ユーザには権限がありません|Admin does not have permission|
|422|transaction_group_name_reserved|指定されたトランザクショングループ名は使用できません|Transaction group name is reserved|



---


<a name="show-transaction-group"></a>
## ShowTransactionGroup: トランザクショングループを取得する
指定したトランザクショングループの詳細を返します。

```PHP
$request = new Request\ShowTransactionGroup(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // uuid: 取得したいトランザクショングループID
);
```



### Parameters
#### `uuid`
取得したいトランザクショングループID

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>



成功したときは
[TransactionGroup](./responses.md#transaction-group)
を返します



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
        'transaction_id' => "GgwT6RW",            // 取引ID
        'is_modified' => FALSE,                   // キャンセルフラグ
        'types' => ["topup", "payment"],          // 取引種別 (複数指定可)、チャージ=topup、支払い=payment
        'from' => "2023-11-12T02:36:40.000000Z",  // 開始日時
        'to' => "2020-09-18T01:43:21.000000Z",    // 終了日時
        'next_page_cursor_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 次ページへ遷移する際に起点となるtransactionのID
        'prev_page_cursor_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 前ページへ遷移する際に起点となるtransactionのID
        'per_page' => 50                          // 1ページ分の取引数
    ]
);
```



### Parameters
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

#### `organization_code`
組織コードです。

フィルターとして使われ、指定された組織の店舗での取引のみ一覧に表示されます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 32,
  "pattern": "^[a-zA-Z0-9-]*$"
}
```

</details>

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

#### `terminal_id`
端末IDです。

フィルターとして使われ、指定された端末での取引のみ一覧に表示されます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
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

#### `description`
取引を指定の取引説明文でフィルターします。

取引説明文が完全一致する取引のみ抽出されます。取引説明文は最大200文字で記録されています。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 200
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
  "type": "string"
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

#### `types`
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
      "exchange_outflow",
      "exchange_inflow",
      "cashback",
      "expire"
    ]
  }
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

#### `next_page_cursor_id`
次ページへ遷移する際に起点となるtransactionのID(前ページの末尾要素のID)です。
本APIのレスポンスにもnext_page_cursor_idが含まれており、これがnull値の場合は最後のページであることを意味します。
UUIDである場合は次のページが存在することを意味し、このnext_page_cursor_idをリクエストパラメータに含めることで次ページに遷移します。

next_page_cursor_idのtransaction自体は次のページには含まれません。

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
前ページへ遷移する際に起点となるtransactionのID(次ページの先頭要素のID)です。

本APIのレスポンスにもprev_page_cursor_idが含まれており、これがnull値の場合は先頭のページであることを意味します。
UUIDである場合は前のページが存在することを意味し、このprev_page_cursor_idをリクエストパラメータに含めることで前ページに遷移します。

prev_page_cursor_idのtransaction自体は前のページには含まれません。

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



成功したときは
[PaginatedTransactionV2](./responses.md#paginated-transaction-v2)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|403|unpermitted_admin_user|この管理ユーザには権限がありません|Admin does not have permission|
|503|temporarily_unavailable||Service Unavailable|



---


<a name="list-bill-transactions"></a>
## ListBillTransactions: 支払い取引履歴を取得する
支払いによって発生した取引を支払いのデータとともに一覧で返します。

```PHP
$request = new Request\ListBillTransactions(
    [
        'private_money_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // マネーID
        'organization_code' => "pocketchange",    // 組織コード
        'shop_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 店舗ID
        'customer_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // エンドユーザーID
        'customer_name' => "太郎",                  // エンドユーザー名
        'terminal_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // エンドユーザー端末ID
        'description' => "店頭QRコードによる支払い",         // 取引説明文
        'transaction_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 取引ID
        'bill_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 支払いQRコードのID
        'is_modified' => FALSE,                   // キャンセルフラグ
        'from' => "2020-04-13T16:03:29.000000Z",  // 開始日時
        'to' => "2023-01-27T12:40:44.000000Z",    // 終了日時
        'next_page_cursor_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 次ページへ遷移する際に起点となるtransactionのID
        'prev_page_cursor_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 前ページへ遷移する際に起点となるtransactionのID
        'per_page' => 50                          // 1ページ分の取引数
    ]
);
```



### Parameters
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

#### `organization_code`
組織コードです。

フィルターとして使われ、指定された組織の店舗での取引のみ一覧に表示されます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 32,
  "pattern": "^[a-zA-Z0-9-]*$"
}
```

</details>

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

#### `terminal_id`
エンドユーザーの端末IDです。
フィルターとして使われ、指定された端末での取引のみ一覧に表示されます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `description`
取引を指定の取引説明文でフィルターします。

取引説明文が完全一致する取引のみ抽出されます。取引説明文は最大200文字で記録されています。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 200
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

#### `bill_id`
支払いQRコードのIDです。

フィルターとして使われ、指定された支払いQRコードIDに部分一致(前方一致)する取引のみが一覧に表示されます。

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

#### `next_page_cursor_id`
次ページへ遷移する際に起点となるtransactionのID(前ページの末尾要素のID)です。
本APIのレスポンスにもnext_page_cursor_idが含まれており、これがnull値の場合は最後のページであることを意味します。
UUIDである場合は次のページが存在することを意味し、このnext_page_cursor_idをリクエストパラメータに含めることで次ページに遷移します。

next_page_cursor_idのtransaction自体は次のページには含まれません。

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
前ページへ遷移する際に起点となるtransactionのID(次ページの先頭要素のID)です。

本APIのレスポンスにもprev_page_cursor_idが含まれており、これがnull値の場合は先頭のページであることを意味します。
UUIDである場合は前のページが存在することを意味し、このprev_page_cursor_idをリクエストパラメータに含めることで前ページに遷移します。

prev_page_cursor_idのtransaction自体は前のページには含まれません。

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



成功したときは
[PaginatedBillTransaction](./responses.md#paginated-bill-transaction)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|403|unpermitted_admin_user|この管理ユーザには権限がありません|Admin does not have permission|
|503|temporarily_unavailable||Service Unavailable|



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
        'money_amount' => 3755,                   // マネー額
        'point_amount' => 5177,                   // ポイント額
        'point_expires_at' => "2024-09-07T12:12:29.000000Z", // ポイント有効期限
        'description' => "初夏のチャージキャンペーン",         // 取引履歴に表示する説明文
        'metadata' => "{\"key\":\"value\"}",      // 取引メタデータ
        'request_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx" // リクエストID
    ]
);
```



### Parameters
#### `shop_id`
店舗IDです。

送金元の店舗を指定します。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `customer_id`
エンドユーザーIDです。

送金先のエンドユーザーを指定します。

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

マネーを指定します。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `bear_point_shop_id`
ポイント支払時の負担店舗IDです。

ポイント支払い時に実際お金を負担する店舗を指定します。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `money_amount`
マネー額です。

送金するマネー額を指定します。
デフォルト値は0で、money_amountとpoint_amountの両方が0のときにはinvalid_parameter_both_point_and_money_are_zero(エラーコード400)が返ります。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "minimum": 0
}
```

</details>

#### `point_amount`
ポイント額です。

送金するポイント額を指定します。
デフォルト値は0で、money_amountとpoint_amountの両方が0のときにはinvalid_parameter_both_point_and_money_are_zero(エラーコード400)が返ります。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "minimum": 0
}
```

</details>

#### `point_expires_at`
ポイントをチャージした場合の、付与されるポイントの有効期限です。
省略した場合はマネーに設定された有効期限と同じものがポイントの有効期限となります。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "date-time"
}
```

</details>

#### `description`
取引説明文です。

任意入力で、取引履歴に表示される説明文です。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 200
}
```

</details>

#### `metadata`
取引作成時に指定されるメタデータです。

任意入力で、全てのkeyとvalueが文字列であるようなフラットな構造のJSON文字列で指定します。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "json"
}
```

</details>

#### `request_id`
取引作成APIの羃等性を担保するためのリクエスト固有のIDです。

取引作成APIで結果が受け取れなかったなどの理由で再試行する際に、二重に取引が作られてしまうことを防ぐために、クライアント側から指定されます。指定は任意で、UUID V4フォーマットでランダム生成した文字列です。リクエストIDは一定期間で削除されます。

リクエストIDを指定したとき、まだそのリクエストIDに対する取引がない場合、新規に取引が作られレスポンスとして返されます。もしそのリクエストIDに対する取引が既にある場合、既存の取引がレスポンスとして返されます。
既に存在する、別のユーザによる取引とリクエストIDが衝突した場合、request_id_conflictが返ります。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>



成功したときは
[TransactionDetail](./responses.md#transaction-detail)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|400|invalid_parameter_both_point_and_money_are_zero||One of 'money_amount' or 'point_amount' must be a positive (>0) number|
|400|invalid_parameters|項目が無効です|Invalid parameters|
|403|unpermitted_admin_user|この管理ユーザには権限がありません|Admin does not have permission|
|422|coupon_not_found|クーポンが見つかりませんでした。|The coupon is not found.|
|422|credit_session_money_topup_requires_credit_card|オーソリチャージ用マネーではクレジットカードによるチャージのみ許可されています|Credit card is required for topup on credit-session enabled money|
|422|cannot_topup_during_cvs_authorization_pending|コンビニ決済の予約中はチャージできません|You cannot topup your account while a convenience store payment is pending.|
|422|credit_session_not_found|オーソリセッションが見つかりません|Credit session not found|
|422|not_applicable_transaction_type_for_account_topup_quota|チャージ取引以外の取引種別ではチャージ可能枠を使用できません|Account topup quota is not applicable to transaction types other than topup.|
|422|private_money_topup_quota_not_available|このマネーにはチャージ可能枠の設定がありません|Topup quota is not available with this private money.|
|422|account_can_not_topup|この店舗からはチャージできません|account can not topup|
|422|private_money_closed|このマネーは解約されています|This money was closed|
|422|transaction_has_done|取引は完了しており、キャンセルすることはできません|Transaction has been copmpleted and cannot be canceled|
|422|account_restricted|特定のアカウントの支払いに制限されています|The account is restricted to pay for a specific account|
|422|account_balance_not_enough|口座残高が不足してます|The account balance is not enough|
|422|c2c_transfer_not_allowed|このマネーではユーザ間マネー譲渡は利用できません|Customer to customer transfer is not available for this money|
|422|account_transfer_limit_exceeded|取引金額が上限を超えました|Too much amount to transfer|
|422|account_balance_exceeded|口座残高が上限を超えました|The account balance exceeded the limit|
|422|account_money_topup_transfer_limit_exceeded|マネーチャージ金額が上限を超えました|Too much amount to money topup transfer|
|422|account_topup_quota_not_splittable|このチャージ可能枠は設定された金額未満の金額には使用できません|This topup quota is only applicable to its designated money amount.|
|422|topup_amount_exceeding_topup_quota_usable_amount|チャージ金額がチャージ可能枠の利用可能金額を超えています|Topup amount is exceeding the topup quota's usable amount|
|422|account_topup_quota_inactive|指定されたチャージ可能枠は有効ではありません|Topup quota is inactive|
|422|account_topup_quota_not_within_applicable_period|指定されたチャージ可能枠の利用可能期間外です|Topup quota is not applicable at this time|
|422|account_topup_quota_not_found|ウォレットにチャージ可能枠がありません|Topup quota is not found with this account|
|422|account_total_topup_limit_range|合計チャージ額がマネーで指定された期間内での上限を超えています|The topup exceeds the total amount within the period defined by the money.|
|422|account_total_topup_limit_entire_period|合計チャージ額がマネーで指定された期間内での上限を超えています|The topup exceeds the total amount defined by the money.|
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
|422|request_id_conflict|このリクエストIDは他の取引ですでに使用されています。お手数ですが、別のリクエストIDで最初からやり直してください。|The request_id is already used by another transaction. Try again with new request id|
|422|reserved_word_can_not_specify_to_metadata|取引メタデータに予約語は指定出来ません|Reserved word can not specify to metadata|
|422|invalid_metadata|メタデータの形式が不正です|Invalid metadata format|
|422|customer_account_not_found||The customer account is not found|
|422|shop_account_not_found|店舗アカウントが見つかりません|The shop account is not found|
|422|private_money_not_found|マネーが見つかりません|Private money not found|
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
    5503,                                         // amount: 支払い額
    [
        'description' => "たい焼き(小倉)",              // 取引履歴に表示する説明文
        'metadata' => "{\"key\":\"value\"}",      // 取引メタデータ
        'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
],                                                // 商品情報データ
        'request_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // リクエストID
        'strategy' => "point-preferred",          // 支払い時の残高消費方式
        'coupon_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx" // クーポンID
    ]
);
```



### Parameters
#### `shop_id`
店舗IDです。

送金先の店舗を指定します。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `customer_id`
エンドユーザーIDです。

送金元のエンドユーザーを指定します。

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

マネーを指定します。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `amount`
マネー額です。

送金するマネー額を指定します。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "minimum": 0
}
```

</details>

#### `description`
取引説明文です。

任意入力で、取引履歴に表示される説明文です。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 200
}
```

</details>

#### `metadata`
取引作成時に指定されるメタデータです。

任意入力で、全てのkeyとvalueが文字列であるようなフラットな構造のJSON文字列で指定します。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "json"
}
```

</details>

#### `products`
一つの取引に含まれる商品情報データです。
以下の内容からなるJSONオブジェクトの配列で指定します。

- `jan_code`: JANコード。64字以下の文字列
- `name`: 商品名。256字以下の文字列
- `unit_price`: 商品単価。0以上の数値
- `price`: 全体の金額(例: 商品単価 × 個数)。0以上の数値
- `quantity`: 商品の個数。この値が指定された場合、priceから算出される個数よりも優先されます。
- `is_discounted`: 賞味期限が近いなどの理由で商品が値引きされているかどうかのフラグ。boolean
- `other`: その他商品に関する情報。JSONオブジェクトで指定します。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "array",
  "items": {
    "type": "object"
  }
}
```

</details>

#### `request_id`
取引作成APIの羃等性を担保するためのリクエスト固有のIDです。

取引作成APIで結果が受け取れなかったなどの理由で再試行する際に、二重に取引が作られてしまうことを防ぐために、クライアント側から指定されます。指定は任意で、UUID V4フォーマットでランダム生成した文字列です。リクエストIDは一定期間で削除されます。

リクエストIDを指定したとき、まだそのリクエストIDに対する取引がない場合、新規に取引が作られレスポンスとして返されます。もしそのリクエストIDに対する取引が既にある場合、既存の取引がレスポンスとして返されます。
既に存在する、別のユーザによる取引とリクエストIDが衝突した場合、request_id_conflictが返ります。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `strategy`
支払い時に残高がどのように消費されるかを指定します。
デフォルトでは point-preferred (ポイント優先)が採用されます。

- point-preferred: ポイント残高が優先的に消費され、ポイントがなくなり次第マネー残高から消費されていきます(デフォルト動作)
- money-only: マネー残高のみから消費され、ポイント残高は使われません

マネー設定でポイント残高のみの利用に設定されている場合(display_money_and_point が point-only の場合)、 strategy の指定に関わらずポイント優先になります。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "enum": [
    "point-preferred",
    "money-only"
  ]
}
```

</details>

#### `coupon_id`
支払いに対して適用するクーポンのIDを指定します。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>



成功したときは
[TransactionDetail](./responses.md#transaction-detail)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|403|unpermitted_admin_user|この管理ユーザには権限がありません|Admin does not have permission|
|422|coupon_not_found|クーポンが見つかりませんでした。|The coupon is not found.|
|422|credit_session_money_topup_requires_credit_card|オーソリチャージ用マネーではクレジットカードによるチャージのみ許可されています|Credit card is required for topup on credit-session enabled money|
|422|cannot_topup_during_cvs_authorization_pending|コンビニ決済の予約中はチャージできません|You cannot topup your account while a convenience store payment is pending.|
|422|credit_session_not_found|オーソリセッションが見つかりません|Credit session not found|
|422|not_applicable_transaction_type_for_account_topup_quota|チャージ取引以外の取引種別ではチャージ可能枠を使用できません|Account topup quota is not applicable to transaction types other than topup.|
|422|private_money_topup_quota_not_available|このマネーにはチャージ可能枠の設定がありません|Topup quota is not available with this private money.|
|422|account_can_not_topup|この店舗からはチャージできません|account can not topup|
|422|private_money_closed|このマネーは解約されています|This money was closed|
|422|transaction_has_done|取引は完了しており、キャンセルすることはできません|Transaction has been copmpleted and cannot be canceled|
|422|account_restricted|特定のアカウントの支払いに制限されています|The account is restricted to pay for a specific account|
|422|account_balance_not_enough|口座残高が不足してます|The account balance is not enough|
|422|c2c_transfer_not_allowed|このマネーではユーザ間マネー譲渡は利用できません|Customer to customer transfer is not available for this money|
|422|account_transfer_limit_exceeded|取引金額が上限を超えました|Too much amount to transfer|
|422|account_balance_exceeded|口座残高が上限を超えました|The account balance exceeded the limit|
|422|account_money_topup_transfer_limit_exceeded|マネーチャージ金額が上限を超えました|Too much amount to money topup transfer|
|422|account_topup_quota_not_splittable|このチャージ可能枠は設定された金額未満の金額には使用できません|This topup quota is only applicable to its designated money amount.|
|422|topup_amount_exceeding_topup_quota_usable_amount|チャージ金額がチャージ可能枠の利用可能金額を超えています|Topup amount is exceeding the topup quota's usable amount|
|422|account_topup_quota_inactive|指定されたチャージ可能枠は有効ではありません|Topup quota is inactive|
|422|account_topup_quota_not_within_applicable_period|指定されたチャージ可能枠の利用可能期間外です|Topup quota is not applicable at this time|
|422|account_topup_quota_not_found|ウォレットにチャージ可能枠がありません|Topup quota is not found with this account|
|422|account_total_topup_limit_range|合計チャージ額がマネーで指定された期間内での上限を超えています|The topup exceeds the total amount within the period defined by the money.|
|422|account_total_topup_limit_entire_period|合計チャージ額がマネーで指定された期間内での上限を超えています|The topup exceeds the total amount defined by the money.|
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
|422|request_id_conflict|このリクエストIDは他の取引ですでに使用されています。お手数ですが、別のリクエストIDで最初からやり直してください。|The request_id is already used by another transaction. Try again with new request id|
|422|reserved_word_can_not_specify_to_metadata|取引メタデータに予約語は指定出来ません|Reserved word can not specify to metadata|
|422|invalid_metadata|メタデータの形式が不正です|Invalid metadata format|
|422|customer_account_not_found||The customer account is not found|
|422|shop_account_not_found|店舗アカウントが見つかりません|The shop account is not found|
|422|private_money_not_found|マネーが見つかりません|Private money not found|
|503|temporarily_unavailable||Service Unavailable|



---


<a name="create-cpm-transaction"></a>
## CreateCpmTransaction: CPMトークンによる取引作成
CPMトークンにより取引を作成します。
CPMトークンに設定されたスコープの取引を作ることができます。

```PHP
$request = new Request\CreateCpmTransaction(
    "Vp03GIkTp5cuONNVFc9v9g",                     // cpmToken: CPMトークン
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // shopId: 店舗ID
    4880.0,                                       // amount: 取引金額
    [
        'description' => "たい焼き(小倉)",              // 取引説明文
        'metadata' => "{\"key\":\"value\"}",      // 店舗側メタデータ
        'products' => [["jan_code" => "abc", "name" => "name1", "unit_price" => 100, "price" => 100, "quantity" => 1, "is_discounted" => FALSE, "other" => "{}"]
],                                                // 商品情報データ
        'request_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // リクエストID
        'strategy' => "point-preferred"           // 支払い時の残高消費方式
    ]
);
```



### Parameters
#### `cpm_token`
エンドユーザーによって作られ、アプリなどに表示され、店舗に対して提示される22桁の文字列です。

エンドユーザーによって許可された取引のスコープを持っています。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "minLength": 22,
  "maxLength": 22
}
```

</details>

#### `shop_id`
店舗IDです。

支払いやチャージを行う店舗を指定します。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `amount`
取引金額を指定します。

正の値を与えるとチャージになり、負の値を与えると支払いとなります。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "number"
}
```

</details>

#### `description`
取引説明文です。

エンドユーザーアプリの取引履歴などに表示されます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 200
}
```

</details>

#### `metadata`
取引作成時に店舗側から指定されるメタデータです。

任意入力で、全てのkeyとvalueが文字列であるようなフラットな構造のJSON文字列で指定します。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "json"
}
```

</details>

#### `products`
一つの取引に含まれる商品情報データです。
以下の内容からなるJSONオブジェクトの配列で指定します。

- `jan_code`: JANコード。64字以下の文字列
- `name`: 商品名。256字以下の文字列
- `unit_price`: 商品単価。0以上の数値
- `price`: 全体の金額(例: 商品単価 × 個数)。0以上の数値
- `quantity`: 商品の個数。この値が指定された場合、priceから算出される個数よりも優先されます。
- `is_discounted`: 賞味期限が近いなどの理由で商品が値引きされているかどうかのフラグ。boolean
- `other`: その他商品に関する情報。JSONオブジェクトで指定します。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "array",
  "items": {
    "type": "object"
  }
}
```

</details>

#### `request_id`
取引作成APIの羃等性を担保するためのリクエスト固有のIDです。

取引作成APIで結果が受け取れなかったなどの理由で再試行する際に、二重に取引が作られてしまうことを防ぐために、クライアント側から指定されます。指定は任意で、UUID V4フォーマットでランダム生成した文字列です。リクエストIDは一定期間で削除されます。

リクエストIDを指定したとき、まだそのリクエストIDに対する取引がない場合、新規に取引が作られレスポンスとして返されます。もしそのリクエストIDに対する取引が既にある場合、既存の取引がレスポンスとして返されます。
既に存在する、別のユーザによる取引とリクエストIDが衝突した場合、request_id_conflictが返ります。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `strategy`
支払い時に残高がどのように消費されるかを指定します。
エンドユーザーがCPMトークン作成時に指定した残高消費方式と一致するか、どちらか一方のみが指定されている必要があります。
両方が指定されていて値が異なる場合、cpm_token_strategy_conflictが返ります。

- point-preferred: ポイント残高が優先的に消費され、ポイントがなくなり次第マネー残高から消費されていきます
- money-only: マネー残高のみから消費され、ポイント残高は使われません

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "enum": [
    "point-preferred",
    "money-only"
  ]
}
```

</details>



成功したときは
[TransactionDetail](./responses.md#transaction-detail)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|403|cpm_unacceptable_amount|このCPMトークンに対して許可されていない金額です。|The amount is unacceptable for the CPM token|
|403|unpermitted_admin_user|この管理ユーザには権限がありません|Admin does not have permission|
|422|shop_user_not_found|店舗が見つかりません|The shop user is not found|
|422|private_money_not_found|マネーが見つかりません|Private money not found|
|422|cpm_token_strategy_conflict|CPMトークンに設定された支払い方式と異なる支払い方式が指定されました。|The strategy conflicts with the one set in the CPM token|
|422|cpm_token_already_proceed|このCPMトークンは既に処理されています。|The CPM token is already proceed|
|422|cpm_token_already_expired|このCPMトークンは既に失効しています。|The CPM token is already expired|
|422|cpm_token_not_found|CPMトークンが見つかりませんでした。|The CPM token is not found.|
|422|coupon_not_found|クーポンが見つかりませんでした。|The coupon is not found.|
|422|credit_session_money_topup_requires_credit_card|オーソリチャージ用マネーではクレジットカードによるチャージのみ許可されています|Credit card is required for topup on credit-session enabled money|
|422|cannot_topup_during_cvs_authorization_pending|コンビニ決済の予約中はチャージできません|You cannot topup your account while a convenience store payment is pending.|
|422|credit_session_not_found|オーソリセッションが見つかりません|Credit session not found|
|422|not_applicable_transaction_type_for_account_topup_quota|チャージ取引以外の取引種別ではチャージ可能枠を使用できません|Account topup quota is not applicable to transaction types other than topup.|
|422|private_money_topup_quota_not_available|このマネーにはチャージ可能枠の設定がありません|Topup quota is not available with this private money.|
|422|account_can_not_topup|この店舗からはチャージできません|account can not topup|
|422|private_money_closed|このマネーは解約されています|This money was closed|
|422|transaction_has_done|取引は完了しており、キャンセルすることはできません|Transaction has been copmpleted and cannot be canceled|
|422|account_restricted|特定のアカウントの支払いに制限されています|The account is restricted to pay for a specific account|
|422|account_balance_not_enough|口座残高が不足してます|The account balance is not enough|
|422|c2c_transfer_not_allowed|このマネーではユーザ間マネー譲渡は利用できません|Customer to customer transfer is not available for this money|
|422|account_transfer_limit_exceeded|取引金額が上限を超えました|Too much amount to transfer|
|422|account_balance_exceeded|口座残高が上限を超えました|The account balance exceeded the limit|
|422|account_money_topup_transfer_limit_exceeded|マネーチャージ金額が上限を超えました|Too much amount to money topup transfer|
|422|account_topup_quota_not_splittable|このチャージ可能枠は設定された金額未満の金額には使用できません|This topup quota is only applicable to its designated money amount.|
|422|topup_amount_exceeding_topup_quota_usable_amount|チャージ金額がチャージ可能枠の利用可能金額を超えています|Topup amount is exceeding the topup quota's usable amount|
|422|account_topup_quota_inactive|指定されたチャージ可能枠は有効ではありません|Topup quota is inactive|
|422|account_topup_quota_not_within_applicable_period|指定されたチャージ可能枠の利用可能期間外です|Topup quota is not applicable at this time|
|422|account_topup_quota_not_found|ウォレットにチャージ可能枠がありません|Topup quota is not found with this account|
|422|account_total_topup_limit_range|合計チャージ額がマネーで指定された期間内での上限を超えています|The topup exceeds the total amount within the period defined by the money.|
|422|account_total_topup_limit_entire_period|合計チャージ額がマネーで指定された期間内での上限を超えています|The topup exceeds the total amount defined by the money.|
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
|422|shop_account_not_found|店舗アカウントが見つかりません|The shop account is not found|
|422|account_currency_mismatch|アカウント間で通貨が異なっています|Currency mismatch between accounts|
|422|account_pre_closed|アカウントは退会準備中です|The account is pre-closed|
|422|account_not_accessible|アカウントにアクセスできません|The account is not accessible by this user|
|422|terminal_is_invalidated|端末は無効化されています|The terminal is already invalidated|
|422|same_account_transaction|同じアカウントに送信しています|Sending to the same account|
|422|transaction_invalid_done_at|取引完了日が無効です|Transaction completion date is invalid|
|422|transaction_invalid_amount|取引金額が数値ではないか、受け入れられない桁数です|Transaction amount is not a number or cannot be accepted for this currency|
|422|request_id_conflict|このリクエストIDは他の取引ですでに使用されています。お手数ですが、別のリクエストIDで最初からやり直してください。|The request_id is already used by another transaction. Try again with new request id|
|422|reserved_word_can_not_specify_to_metadata|取引メタデータに予約語は指定出来ません|Reserved word can not specify to metadata|
|422|invalid_metadata|メタデータの形式が不正です|Invalid metadata format|
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
    890.0,                                        // amount: 送金額
    [
        'metadata' => "{\"key\":\"value\"}",      // 取引メタデータ
        'description' => "たい焼き(小倉)",              // 取引履歴に表示する説明文
        'request_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx" // リクエストID
    ]
);
```



### Parameters
#### `sender_id`
エンドユーザーIDです。

送金元のエンドユーザー(送り主)を指定します。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `receiver_id`
エンドユーザーIDです。

送金先のエンドユーザー(受け取り人)を指定します。

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

マネーを指定します。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `amount`
マネー額です。

送金するマネー額を指定します。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "number",
  "minimum": 0
}
```

</details>

#### `metadata`
取引作成時に指定されるメタデータです。

任意入力で、全てのkeyとvalueが文字列であるようなフラットな構造のJSON文字列で指定します。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "json"
}
```

</details>

#### `description`
取引説明文です。

任意入力で、取引履歴に表示される説明文です。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 200
}
```

</details>

#### `request_id`
取引作成APIの羃等性を担保するためのリクエスト固有のIDです。

取引作成APIで結果が受け取れなかったなどの理由で再試行する際に、二重に取引が作られてしまうことを防ぐために、クライアント側から指定されます。指定は任意で、UUID V4フォーマットでランダム生成した文字列です。リクエストIDは一定期間で削除されます。

リクエストIDを指定したとき、まだそのリクエストIDに対する取引がない場合、新規に取引が作られレスポンスとして返されます。もしそのリクエストIDに対する取引が既にある場合、既存の取引がレスポンスとして返されます。
既に存在する、別のユーザによる取引とリクエストIDが衝突した場合、request_id_conflictが返ります。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>



成功したときは
[TransactionDetail](./responses.md#transaction-detail)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|403|unpermitted_admin_user|この管理ユーザには権限がありません|Admin does not have permission|
|422|customer_user_not_found||The customer user is not found|
|422|private_money_not_found|マネーが見つかりません|Private money not found|
|422|coupon_not_found|クーポンが見つかりませんでした。|The coupon is not found.|
|422|credit_session_money_topup_requires_credit_card|オーソリチャージ用マネーではクレジットカードによるチャージのみ許可されています|Credit card is required for topup on credit-session enabled money|
|422|cannot_topup_during_cvs_authorization_pending|コンビニ決済の予約中はチャージできません|You cannot topup your account while a convenience store payment is pending.|
|422|credit_session_not_found|オーソリセッションが見つかりません|Credit session not found|
|422|not_applicable_transaction_type_for_account_topup_quota|チャージ取引以外の取引種別ではチャージ可能枠を使用できません|Account topup quota is not applicable to transaction types other than topup.|
|422|private_money_topup_quota_not_available|このマネーにはチャージ可能枠の設定がありません|Topup quota is not available with this private money.|
|422|account_can_not_topup|この店舗からはチャージできません|account can not topup|
|422|private_money_closed|このマネーは解約されています|This money was closed|
|422|transaction_has_done|取引は完了しており、キャンセルすることはできません|Transaction has been copmpleted and cannot be canceled|
|422|account_restricted|特定のアカウントの支払いに制限されています|The account is restricted to pay for a specific account|
|422|account_balance_not_enough|口座残高が不足してます|The account balance is not enough|
|422|c2c_transfer_not_allowed|このマネーではユーザ間マネー譲渡は利用できません|Customer to customer transfer is not available for this money|
|422|account_transfer_limit_exceeded|取引金額が上限を超えました|Too much amount to transfer|
|422|account_balance_exceeded|口座残高が上限を超えました|The account balance exceeded the limit|
|422|account_money_topup_transfer_limit_exceeded|マネーチャージ金額が上限を超えました|Too much amount to money topup transfer|
|422|account_topup_quota_not_splittable|このチャージ可能枠は設定された金額未満の金額には使用できません|This topup quota is only applicable to its designated money amount.|
|422|topup_amount_exceeding_topup_quota_usable_amount|チャージ金額がチャージ可能枠の利用可能金額を超えています|Topup amount is exceeding the topup quota's usable amount|
|422|account_topup_quota_inactive|指定されたチャージ可能枠は有効ではありません|Topup quota is inactive|
|422|account_topup_quota_not_within_applicable_period|指定されたチャージ可能枠の利用可能期間外です|Topup quota is not applicable at this time|
|422|account_topup_quota_not_found|ウォレットにチャージ可能枠がありません|Topup quota is not found with this account|
|422|account_total_topup_limit_range|合計チャージ額がマネーで指定された期間内での上限を超えています|The topup exceeds the total amount within the period defined by the money.|
|422|account_total_topup_limit_entire_period|合計チャージ額がマネーで指定された期間内での上限を超えています|The topup exceeds the total amount defined by the money.|
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
|422|shop_account_not_found|店舗アカウントが見つかりません|The shop account is not found|
|422|account_currency_mismatch|アカウント間で通貨が異なっています|Currency mismatch between accounts|
|422|account_pre_closed|アカウントは退会準備中です|The account is pre-closed|
|422|account_not_accessible|アカウントにアクセスできません|The account is not accessible by this user|
|422|terminal_is_invalidated|端末は無効化されています|The terminal is already invalidated|
|422|same_account_transaction|同じアカウントに送信しています|Sending to the same account|
|422|transaction_invalid_done_at|取引完了日が無効です|Transaction completion date is invalid|
|422|transaction_invalid_amount|取引金額が数値ではないか、受け入れられない桁数です|Transaction amount is not a number or cannot be accepted for this currency|
|422|request_id_conflict|このリクエストIDは他の取引ですでに使用されています。お手数ですが、別のリクエストIDで最初からやり直してください。|The request_id is already used by another transaction. Try again with new request id|
|422|reserved_word_can_not_specify_to_metadata|取引メタデータに予約語は指定出来ません|Reserved word can not specify to metadata|
|422|invalid_metadata|メタデータの形式が不正です|Invalid metadata format|
|503|temporarily_unavailable||Service Unavailable|



---


<a name="create-exchange-transaction"></a>
## CreateExchangeTransaction

```PHP
$request = new Request\CreateExchangeTransaction(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
    7572,
    [
        'description' => "hWfe1J2XdVSiGrZnaj14JqvayOvsUjS1TQRpGXwusKVKoDVo20K4pv",
        'request_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx" // リクエストID
    ]
);
```



### Parameters
#### `user_id`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `sender_private_money_id`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `receiver_private_money_id`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `amount`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "minimum": 1
}
```

</details>

#### `description`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 200
}
```

</details>

#### `request_id`
取引作成APIの羃等性を担保するためのリクエスト固有のIDです。

取引作成APIで結果が受け取れなかったなどの理由で再試行する際に、二重に取引が作られてしまうことを防ぐために、クライアント側から指定されます。指定は任意で、UUID V4フォーマットでランダム生成した文字列です。リクエストIDは一定期間で削除されます。

リクエストIDを指定したとき、まだそのリクエストIDに対する取引がない場合、新規に取引が作られレスポンスとして返されます。もしそのリクエストIDに対する取引が既にある場合、既存の取引がレスポンスとして返されます。
既に存在する、別のユーザによる取引とリクエストIDが衝突した場合、request_id_conflictが返ります。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>



成功したときは
[TransactionDetail](./responses.md#transaction-detail)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|422|account_not_found|アカウントが見つかりません|The account is not found|
|422|transaction_restricted||Transaction is not allowed|
|422|can_not_exchange_between_same_private_money|同じマネーとの交換はできません||
|422|can_not_exchange_between_users|異なるユーザー間での交換は出来ません||
|422|credit_session_money_topup_requires_credit_card|オーソリチャージ用マネーではクレジットカードによるチャージのみ許可されています|Credit card is required for topup on credit-session enabled money|
|422|cannot_topup_during_cvs_authorization_pending|コンビニ決済の予約中はチャージできません|You cannot topup your account while a convenience store payment is pending.|
|422|credit_session_not_found|オーソリセッションが見つかりません|Credit session not found|
|422|not_applicable_transaction_type_for_account_topup_quota|チャージ取引以外の取引種別ではチャージ可能枠を使用できません|Account topup quota is not applicable to transaction types other than topup.|
|422|private_money_topup_quota_not_available|このマネーにはチャージ可能枠の設定がありません|Topup quota is not available with this private money.|
|422|account_can_not_topup|この店舗からはチャージできません|account can not topup|
|422|account_currency_mismatch|アカウント間で通貨が異なっています|Currency mismatch between accounts|
|422|account_not_accessible|アカウントにアクセスできません|The account is not accessible by this user|
|422|terminal_is_invalidated|端末は無効化されています|The terminal is already invalidated|
|422|same_account_transaction|同じアカウントに送信しています|Sending to the same account|
|422|private_money_closed|このマネーは解約されています|This money was closed|
|422|transaction_has_done|取引は完了しており、キャンセルすることはできません|Transaction has been copmpleted and cannot be canceled|
|422|transaction_invalid_done_at|取引完了日が無効です|Transaction completion date is invalid|
|422|transaction_invalid_amount|取引金額が数値ではないか、受け入れられない桁数です|Transaction amount is not a number or cannot be accepted for this currency|
|422|account_restricted|特定のアカウントの支払いに制限されています|The account is restricted to pay for a specific account|
|422|account_balance_not_enough|口座残高が不足してます|The account balance is not enough|
|422|c2c_transfer_not_allowed|このマネーではユーザ間マネー譲渡は利用できません|Customer to customer transfer is not available for this money|
|422|account_transfer_limit_exceeded|取引金額が上限を超えました|Too much amount to transfer|
|422|account_balance_exceeded|口座残高が上限を超えました|The account balance exceeded the limit|
|422|account_money_topup_transfer_limit_exceeded|マネーチャージ金額が上限を超えました|Too much amount to money topup transfer|
|422|reserved_word_can_not_specify_to_metadata|取引メタデータに予約語は指定出来ません|Reserved word can not specify to metadata|
|422|account_topup_quota_not_splittable|このチャージ可能枠は設定された金額未満の金額には使用できません|This topup quota is only applicable to its designated money amount.|
|422|topup_amount_exceeding_topup_quota_usable_amount|チャージ金額がチャージ可能枠の利用可能金額を超えています|Topup amount is exceeding the topup quota's usable amount|
|422|account_topup_quota_inactive|指定されたチャージ可能枠は有効ではありません|Topup quota is inactive|
|422|account_topup_quota_not_within_applicable_period|指定されたチャージ可能枠の利用可能期間外です|Topup quota is not applicable at this time|
|422|account_topup_quota_not_found|ウォレットにチャージ可能枠がありません|Topup quota is not found with this account|
|422|account_total_topup_limit_range|合計チャージ額がマネーで指定された期間内での上限を超えています|The topup exceeds the total amount within the period defined by the money.|
|422|account_total_topup_limit_entire_period|合計チャージ額がマネーで指定された期間内での上限を超えています|The topup exceeds the total amount defined by the money.|
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
|422|request_id_conflict|このリクエストIDは他の取引ですでに使用されています。お手数ですが、別のリクエストIDで最初からやり直してください。|The request_id is already used by another transaction. Try again with new request id|
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
#### `transaction_id`
取引IDです。

フィルターとして使われ、指定した取引IDの取引を取得します。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>



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
        'returning_point_expires_at' => "2021-07-24T18:36:07.000000Z" // 返却ポイントの有効期限
    ]
);
```



### Parameters
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

#### `description`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 200
}
```

</details>

#### `returning_point_expires_at`
ポイント支払いを含む支払い取引をキャンセルする際にユーザへ返却されるポイントの有効期限です。デフォルトでは未指定です。

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
#### `request_id`
取引作成時にクライアントが生成し指定するリクエストIDです。

リクエストIDに対応する取引が存在すればその取引を返し、無ければNotFound(404)を返します。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>



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
#### `bulk_transaction_id`
バルク取引ジョブIDです。
バルク取引ジョブ登録時にレスポンスに含まれます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>



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
#### `bulk_transaction_id`
バルク取引ジョブIDです。
バルク取引ジョブ登録時にレスポンスに含まれます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `page`
取得したいページ番号です。

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
1ページ分の取得数です。デフォルトでは 50 になっています。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "minimum": 1
}
```

</details>



成功したときは
[PaginatedBulkTransactionJob](./responses.md#paginated-bulk-transaction-job)
を返します



---


<a name="cancel-bulk-transaction"></a>
## CancelBulkTransaction: バルク取引をキャンセルする

```PHP
$request = new Request\CancelBulkTransaction(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // bulkTransactionId: バルク取引ジョブID
);
```



### Parameters
#### `bulk_transaction_id`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>



成功したときは
[BulkTransaction](./responses.md#bulk-transaction)
を返します



---


<a name="resume-bulk-transaction"></a>
## ResumeBulkTransaction: バルク取引を再開する

```PHP
$request = new Request\ResumeBulkTransaction(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // bulkTransactionId: バルク取引ジョブID
);
```



### Parameters
#### `bulk_transaction_id`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>



成功したときは
[BulkTransaction](./responses.md#bulk-transaction)
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
#### `from`
集計する期間の開始時刻をISO8601形式で指定します。
時刻は現在時刻、及び `to` で指定する時刻以前である必要があります。

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
集計する期間の終了時刻をISO8601形式で指定します。
時刻は現在時刻、及び `from` で指定する時刻の間である必要があります。

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
[UserStatsOperation](./responses.md#user-stats-operation)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|400|invalid_parameters|項目が無効です|Invalid parameters|
|403|unpermitted_admin_user|この管理ユーザには権限がありません|Admin does not have permission|
|422|invalid_promotional_operation_user|ユーザーの指定に不正な値が含まれています|Invalid user data is specified|
|422|invalid_promotional_operation_status|不正な処理ステータスです|Invalid operation status is specified|



---


<a name="terminate-user-stats"></a>
## TerminateUserStats: RequestUserStatsのタスクを強制終了する
RequestUserStatsによるファイル生成のタスクを強制終了するためのAPIです。
RequestUserStatsのレスポンス中の `operation_id` をキーにして強制終了リクエストを送ります。
既に集計タスクが終了している場合は何も行いません。
発行体に対して結果通知用のWebhook URLが設定されている場合、強制終了成功時には以下のような内容のPOSTリクエストが送られます。

- task: "process_user_stats_operation"
- operation_id: 強制終了対象のタスクID
- status: "terminated"

```PHP
$request = new Request\TerminateUserStats(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // operationId: 集計タスクID
);
```



### Parameters
#### `operation_id`
強制終了対象の集計タスクIDです。
必須パラメータであり、指定されたタスクIDが存在しない場合は `user_stats_operation_not_found`エラー(422)が返ります。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>



成功したときは
[UserStatsOperation](./responses.md#user-stats-operation)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|403|unpermitted_admin_user|この管理ユーザには権限がありません|Admin does not have permission|
|422|user_stats_operation_already_done|指定されたIDの集計処理タスクは既に完了しています|The specified user stats operation is already done|
|422|user_stats_operation_not_found|指定されたIDの集計処理タスクが見つかりません|User stats task not found for the operation ID|
|503|temporarily_unavailable||Service Unavailable|



---



