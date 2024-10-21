# Check
店舗ユーザが発行し、エンドユーザーがポケペイアプリから読み取ることでチャージ取引が発生するQRコードです。

チャージQRコードを解析すると次のようなURLになります(URLは環境によって異なります)。

`https://www-sandbox.pokepay.jp/checks/xxxxxxxx-xxxx-xxxxxxxxx-xxxxxxxxxxxx`

QRコードを読み取る方法以外にも、このURLリンクを直接スマートフォン(iOS/Android)上で開くことによりアプリが起動して取引が行われます。(注意: 上記URLはsandbox環境であるため、アプリもsandbox環境のものである必要があります) 上記URL中の `xxxxxxxx-xxxx-xxxxxxxxx-xxxxxxxxxxxx` の部分がチャージQRコードのIDです。


<a name="list-checks"></a>
## ListChecks: チャージQRコード一覧の取得

```PHP
$request = new Request\ListChecks(
    [
        'page' => 3692,                           // ページ番号
        'per_page' => 50,                         // 1ページの表示数
        'private_money_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // マネーID
        'organization_code' => "wbMvROWfUAh",     // 組織コード
        'expires_from' => "2024-09-09T11:24:24.000000Z", // 有効期限の期間によるフィルター(開始時点)
        'expires_to' => "2022-12-06T17:13:26.000000Z", // 有効期限の期間によるフィルター(終了時点)
        'created_from' => "2024-05-06T13:53:28.000000Z", // 作成日時の期間によるフィルター(開始時点)
        'created_to' => "2022-11-02T00:56:58.000000Z", // 作成日時の期間によるフィルター(終了時点)
        'issuer_shop_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 発行店舗ID
        'description' => "0yJYgRGA",              // チャージQRコードの説明文
        'is_onetime' => FALSE,                    // ワンタイムのチャージQRコードかどうか
        'is_disabled' => FALSE                    // 無効化されたチャージQRコードかどうか
    ]
);
```



### Parameters
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



成功したときは
[PaginatedChecks](./responses.md#paginated-checks)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|403|unpermitted_admin_user|この管理ユーザには権限がありません|Admin does not have permission|
|422|organization_not_found||Organization not found|
|422|private_money_not_found|マネーが見つかりません|Private money not found|
|503|temporarily_unavailable||Service Unavailable|



---


<a name="create-check"></a>
## CreateCheck: チャージQRコードの発行

```PHP
$request = new Request\CreateCheck(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // accountId: 送金元の店舗アカウントID
    [
        'money_amount' => 6693.0,                 // 付与マネー額
        'point_amount' => 2682.0,                 // 付与ポイント額
        'description' => "test check",            // 説明文(アプリ上で取引の説明文として表示される)
        'is_onetime' => TRUE,                     // ワンタイムかどうかのフラグ
        'usage_limit' => 5905,                    // ワンタイムでない場合の最大読み取り回数
        'expires_at' => "2021-04-21T02:24:42.000000Z", // チャージQRコード自体の失効日時
        'point_expires_at' => "2020-03-23T01:33:15.000000Z", // チャージQRコードによって付与されるポイント残高の有効期限
        'point_expires_in_days' => 60,            // チャージQRコードによって付与されるポイント残高の有効期限(相対日数指定)
        'bear_point_account' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx" // ポイント額を負担する店舗のウォレットID
    ]
);
```


`money_amount`と`point_amount`の少なくとも一方は指定する必要があります。



### Parameters
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



成功したときは
[Check](./responses.md#check)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|400|invalid_parameter_both_point_and_money_are_zero||One of 'money_amount' or 'point_amount' must be a positive (>0) number|
|400|invalid_parameter_only_merchants_can_attach_points_to_check||Only merchants can attach points to check|
|400|invalid_parameter_combination_usage_limit_and_is_onetime||'usage_limit' can not be specified if 'is_onetime' is true.|
|400|invalid_parameter_expires_at||'expires_at' must be in the future|
|400|invalid_parameters|項目が無効です|Invalid parameters|
|400|invalid_parameter_bear_point_account_identification_item_not_unique|ポイントを負担する店舗アカウントを指定するリクエストパラメータには、アカウントID、またはユーザIDのどちらかを含めることができます|Request parameters include either bear_point_account or bear_point_shop_id.|
|403|unpermitted_admin_user|この管理ユーザには権限がありません|Admin does not have permission|
|422|account_can_not_topup|この店舗からはチャージできません|account can not topup|
|422|account_private_money_is_not_issued_by_organization||The account's private money is not issued by this organization|
|422|shop_account_not_found|店舗アカウントが見つかりません|The shop account is not found|
|422|bear_point_account_not_found|ポイントを負担する店舗アカウントが見つかりません|Bear point account not found.|
|422|account_money_topup_transfer_limit_exceeded|マネーチャージ金額が上限を超えました|Too much amount to money topup transfer|



---


<a name="get-check"></a>
## GetCheck: チャージQRコードの表示

```PHP
$request = new Request\GetCheck(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // checkId: チャージQRコードのID
);
```



### Parameters
**`check_id`** 
  

表示対象のチャージQRコードのIDです。

```json
{
  "type": "string",
  "format": "uuid"
}
```



成功したときは
[Check](./responses.md#check)
を返します



---


<a name="update-check"></a>
## UpdateCheck: チャージQRコードの更新

```PHP
$request = new Request\UpdateCheck(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // checkId: チャージQRコードのID
    [
        'money_amount' => 2606.0,                 // 付与マネー額
        'point_amount' => 2200.0,                 // 付与ポイント額
        'description' => "test check",            // チャージQRコードの説明文
        'is_onetime' => TRUE,                     // ワンタイムかどうかのフラグ
        'usage_limit' => 7231,                    // ワンタイムでない場合の最大読み取り回数
        'expires_at' => "2022-03-02T02:58:33.000000Z", // チャージQRコード自体の失効日時
        'point_expires_at' => "2024-02-29T21:28:53.000000Z", // チャージQRコードによって付与されるポイント残高の有効期限
        'point_expires_in_days' => 60,            // チャージQRコードによって付与されるポイント残高の有効期限(相対日数指定)
        'bear_point_account' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // ポイント額を負担する店舗のウォレットID
        'is_disabled' => TRUE                     // 無効化されているかどうかのフラグ
    ]
);
```



### Parameters
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



成功したときは
[Check](./responses.md#check)
を返します



---


<a name="create-topup-transaction-with-check"></a>
## CreateTopupTransactionWithCheck: チャージQRコードを読み取ることでチャージする
通常チャージQRコードはエンドユーザーのアプリによって読み取られ、アプリとポケペイサーバとの直接通信によって取引が作られます。 もしエンドユーザーとの通信をパートナーのサーバのみに限定したい場合、パートナーのサーバがチャージQRの情報をエンドユーザーから代理受けして、サーバ間連携APIによって実際のチャージ取引をリクエストすることになります。

エンドユーザーから受け取ったチャージ用QRコードのIDをエンドユーザーIDと共に渡すことでチャージ取引が作られます。


```PHP
$request = new Request\CreateTopupTransactionWithCheck(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // checkId: チャージ用QRコードのID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // customerId: エンドユーザーのID
    [
        'request_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx" // リクエストID
    ]
);
```



### Parameters
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
既に存在する、別のユーザによる取引とリクエストIDが衝突した場合、request_id_conflictが返ります。

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
|403|unpermitted_admin_user|この管理ユーザには権限がありません|Admin does not have permission|
|422|customer_user_not_found||The customer user is not found|
|422|check_not_found|これはチャージQRコードではありません|This is not a topup QR code|
|422|invalid_metadata|メタデータの形式が不正です|Invalid metadata format|
|422|account_can_not_topup|この店舗からはチャージできません|account can not topup|
|422|private_money_closed|このマネーは解約されています|This money was closed|
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
|422|shop_account_not_found|店舗アカウントが見つかりません|The shop account is not found|
|422|account_currency_mismatch|アカウント間で通貨が異なっています|Currency mismatch between accounts|
|422|account_pre_closed|アカウントは退会準備中です|The account is pre-closed|
|422|account_not_accessible|アカウントにアクセスできません|The account is not accessible by this user|
|422|terminal_is_invalidated|端末は無効化されています|The terminal is already invalidated|
|422|same_account_transaction|同じアカウントに送信しています|Sending to the same account|
|422|transaction_invalid_done_at|取引完了日が無効です|Transaction completion date is invalid|
|422|transaction_invalid_amount|取引金額が数値ではないか、受け入れられない桁数です|Transaction amount is not a number or cannot be accepted for this currency|
|422|request_id_conflict|このリクエストIDは他の取引ですでに使用されています。お手数ですが、別のリクエストIDで最初からやり直してください。|The request_id is already used by another transaction. Try again with new request id|
|422|check_already_received|このチャージQRコードは既に受取済みの為、チャージ出来ませんでした|Check is already received|
|422|check_unavailable|このチャージQRコードは利用できません|The topup QR code is not available|
|503|temporarily_unavailable||Service Unavailable|



---



