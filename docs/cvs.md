# CVS
コンビニ決済(CVS)によるチャージの申込情報を表すデータです。
申込後に発行される払込票URL・受付番号を使ってコンビニで支払うと、完了通知を受けてチャージ取引が作成されます。


<a name="get-cvs-authorizations"></a>
## GetCvsAuthorizations: コンビニ決済の申し込み情報一覧取得
コンビニ決済の申し込み情報一覧を取得します。

```PHP
$request = new Request\GetCvsAuthorizations(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    [
        'customer_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // エンドユーザーID
        'status' => "expired",                    // ステータス
        'before' => "GQHjMs0udR",                 // ページング(before)
        'after' => "jM6",                         // ページング(after)
        'per_page' => 52                          // 1ページあたりの表示件数
    ]
);
```



### Parameters
#### `private_money_id`
マネーIDです。一覧を取得するマネーを指定します。

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
エンドユーザーIDです。指定した場合、そのユーザーの申し込みに絞り込みます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `status`
申し込みのステータスで絞り込みます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "enum": [
    "applied",
    "payed",
    "canceled",
    "expired"
  ]
}
```

</details>

#### `before`
ページングのためのパラメータです。
指定したIDの要素より後の申し込み情報が返されます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string"
}
```

</details>

#### `after`
ページングのためのパラメータです。
指定したIDの要素より前の申し込み情報が返されます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string"
}
```

</details>

#### `per_page`
1ページあたりに表示する件数です。デフォルト値は30件です。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "format": "int32",
  "minimum": 1,
  "maximum": 100
}
```

</details>



成功したときは
[PaginatedCvsAuthorizations](./responses.md#paginated-cvs-authorizations)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|403|unpermitted_admin_user|この管理ユーザには権限がありません|Admin does not have permission|
|404|veritrans_merchant_not_found|veritrans加盟店が見つかりません|veritrans merchant not found|
|422|private_money_not_found|マネーが見つかりません|Private money not found|



---


<a name="create-cvs-authorization"></a>
## CreateCvsAuthorization: コンビニ決済申込
コンビニ決済の申し込みを行います。

```PHP
$request = new Request\CreateCvsAuthorization(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // customerId: エンドユーザーのID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    251944,                                       // amount: チャージ額
    "econ",                                       // serviceOptionType: コンビニ種別
    "4GQyu",                                      // name1: 顧客姓
    "ePe1bdi",                                    // name2: 顧客名
    "rL7eYxL",                                    // tel: 電話番号
    [
        'receiver_user_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // チャージ先エンドユーザーのID
        'description' => "コンビニチャージ",              // 取引履歴に表示する説明文
        'topup_quota_id' => 8113,                 // チャージ可能枠ID
        'memo1' => "campaign2026summer",          // 取引メモ1
        'memo2' => "IR4r9f1iZQVJCIu8pLuGU50iq7Z6XaZcd9a55Ea4m7A07h1goZ8o9oOJ0qv6uWWMwCy2ns8CjmWZWZ5BJ99mD95R", // 取引メモ2
        'memo3' => "v1P69N8P91tvC18njEfQ7l9u4mpK8FPETBIWC0hAv2wnO7000234xcRv4L0v8Jp625", // 取引メモ3
        'freekey' => "order20260803001"           // キー情報
    ]
);
```



### Parameters
#### `customer_id`
エンドユーザーIDです。

コンビニ決済を申し込むエンドユーザーを指定します。
receiver_user_id が指定されない場合、このユーザーがチャージ先になります。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `receiver_user_id`
チャージ先エンドユーザーIDです。

指定した場合、customer_id とは別のユーザーをチャージ先にできます。
省略した場合は customer_id がチャージ先になります。

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

チャージするマネーを指定します。

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
チャージする金額を表します。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "minimum": 1,
  "maximum": 299999
}
```

</details>

#### `service_option_type`
カスタマーが支払うコンビニの種別を表します。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "enum": [
    "sej",
    "other",
    "famima",
    "lawson",
    "econ"
  ]
}
```

</details>

#### `name1`
顧客の姓を表します。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string"
}
```

</details>

#### `name2`
顧客名を表します。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string"
}
```

</details>

#### `tel`
顧客の電話番号を表します。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string"
}
```

</details>

#### `description`
取引説明文です。

任意入力で、コンビニでの入金確認後に作成されるチャージ取引の取引履歴に表示されます。
省略した場合、および空文字列を指定した場合は既定の説明文が使われます
(取引説明文を空にすることはできません)。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 200
}
```

</details>

#### `topup_quota_id`
チャージするマネーにチャージ可能枠機能が設定されているとき、使用するチャージ可能枠のIDを表します。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "minimum": 1
}
```

</details>

#### `memo1`
Veritransの取引に付与する取引メモです。

任意入力で、半角英数字100文字以内で指定します。
Veritransの取引検索で参照できます。ポケペイの取引履歴には表示されません。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 100,
  "pattern": "^[0-9A-Za-z]*$"
}
```

</details>

#### `memo2`
Veritransの取引に付与する取引メモです。

任意入力で、半角英数字100文字以内で指定します。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 100,
  "pattern": "^[0-9A-Za-z]*$"
}
```

</details>

#### `memo3`
Veritransの取引に付与する取引メモです。

任意入力で、半角英数字100文字以内で指定します。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 100,
  "pattern": "^[0-9A-Za-z]*$"
}
```

</details>

#### `freekey`
Veritransの取引に付与するキー情報です。

任意入力で、半角英数字256桁以内で指定します。
加盟店システムで管理しているIDとVeritransの取引を紐付ける用途に使えます。
ハイフンやアンダースコアは使用できないため、UUIDをそのまま指定することはできません。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 256,
  "pattern": "^[0-9A-Za-z]*$"
}
```

</details>



成功したときは
[CvsAuthorization](./responses.md#cvs-authorization)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|400|cvs_invalid_request_parameter|入力データが不正です|Parameter invalid|
|403|unpermitted_admin_user|この管理ユーザには権限がありません|Admin does not have permission|
|404|veritrans_merchant_not_found|veritrans加盟店が見つかりません|veritrans merchant not found|
|422|account_not_found|アカウントが見つかりません|The account is not found|
|422|user_not_found|ユーザーが見つかりません|The user is not found|
|422|customer_user_not_found||The customer user is not found|
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
|422|customer_account_not_found|ユーザアカウントが見つかりません|The customer account is not found|
|422|shop_account_not_found|店舗アカウントが見つかりません|The shop account is not found|
|422|account_currency_mismatch|アカウント間で通貨が異なっています|Currency mismatch between accounts|
|422|account_pre_closed|アカウントは退会準備中です|The account is pre-closed|
|422|account_not_accessible|アカウントにアクセスできません|The account is not accessible by this user|
|422|terminal_is_invalidated|端末は無効化されています|The terminal is already invalidated|
|422|same_account_transaction|同じアカウントに送信しています|Sending to the same account|
|422|transaction_invalid_done_at|取引完了日が無効です|Transaction completion date is invalid|
|422|transaction_invalid_amount|取引金額が数値ではないか、受け入れられない桁数です|Transaction amount is not a number or cannot be accepted for this currency|
|422|cvs_disabled_private_money|このマネーはコンビニ決済に対応していません|This money cannot be charged from the cvs|
|503|temporarily_unavailable||Service Unavailable|



---


<a name="cancel-cvs-authorization"></a>
## CancelCvsAuthorization: コンビニ決済の申し込みキャンセル
コンビニ決済の申し込みをキャンセルします。

```PHP
$request = new Request\CancelCvsAuthorization(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // orderId: コンビニ決済の申し込みID
);
```



### Parameters
#### `order_id`
コンビニ決済の申し込みID

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
[CvsAuthorization](./responses.md#cvs-authorization)
を返します



---


<a name="get-cvs-authorization"></a>
## GetCvsAuthorization: コンビニ決済の申し込み情報取得
コンビニ決済の申し込み情報を取得します。

```PHP
$request = new Request\GetCvsAuthorization(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // orderId: コンビニ決済の申し込みID
);
```



### Parameters
#### `order_id`
コンビニ決済の申し込みID

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
[CvsAuthorization](./responses.md#cvs-authorization)
を返します



---



