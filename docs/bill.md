# Bill
支払いQRコード

<a name="list-bills"></a>
## ListBills: 支払いQRコード一覧を表示する
支払いQRコード一覧を表示します。

```PHP
$request = new Request\ListBills(
    [
        'page' => 8525,                           // ページ番号
        'per_page' => 5484,                       // 1ページの表示数
        'bill_id' => "EANfW",                     // 支払いQRコードのID
        'private_money_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // マネーID
        'organization_code' => "",                // 組織コード
        'description' => "test bill",             // 取引説明文
        'created_from' => "2021-05-20T06:48:33.000000Z", // 作成日時(起点)
        'created_to' => "2021-07-04T02:21:57.000000Z", // 作成日時(終点)
        'shop_name' => "bill test shop1",         // 店舗名
        'shop_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 店舗ID
        'lower_limit_amount' => 2883,             // 金額の範囲によるフィルタ(下限)
        'upper_limit_amount' => 709,              // 金額の範囲によるフィルタ(上限)
        'is_disabled' => TRUE                     // 支払いQRコードが無効化されているかどうか
    ]
);
```



### Parameters
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



成功したときは
[PaginatedBills](./responses.md#paginated-bills)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|403|unpermitted_admin_user|この管理ユーザには権限がありません|Admin does not have permission|



---


<a name="create-bill"></a>
## CreateBill: 支払いQRコードの発行
支払いQRコードの内容を更新します。支払い先の店舗ユーザーは指定したマネーのウォレットを持っている必要があります。

```PHP
$request = new Request\CreateBill(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: 支払いマネーのマネーID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // shopId: 支払い先(受け取り人)の店舗ID
    [
        'amount' => 8131.0,                       // 支払い額
        'description' => "test bill"              // 説明文(アプリ上で取引の説明文として表示される)
    ]
);
```



### Parameters
**`amount`** 
  

支払いQRコードを支払い額を指定します。省略するかnullを渡すと任意金額の支払いQRコードとなり、エンドユーザーがアプリで読み取った際に金額を入力します。
また、金額を指定する場合の上限額は支払いをするマネーの取引上限額です。


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



成功したときは
[Bill](./responses.md#bill)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|400|invalid_parameter_bill_amount_or_range_exceeding_transfer_limit|支払いQRコードの金額がマネーの取引可能金額の上限を超えています|The input amount is exceeding the private money's limit for transfer|
|403|unpermitted_admin_user|この管理ユーザには権限がありません|Admin does not have permission|
|422|shop_account_not_found|店舗アカウントが見つかりません|The shop account is not found|
|422|private_money_not_found|マネーが見つかりません|Private money not found|
|422|shop_user_not_found|店舗が見つかりません|The shop user is not found|
|422|account_closed|アカウントは退会しています|The account is closed|
|422|account_pre_closed|アカウントは退会準備中です|The account is pre-closed|
|422|account_suspended|アカウントは停止されています|The account is suspended|



---


<a name="get-bill"></a>
## GetBill: 支払いQRコードの表示
支払いQRコードの内容を表示します。

```PHP
$request = new Request\GetBill(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // billId: 支払いQRコードのID
);
```



### Parameters
**`bill_id`** 
  

表示する支払いQRコードのIDです。

```json
{
  "type": "string",
  "format": "uuid"
}
```



成功したときは
[Bill](./responses.md#bill)
を返します



---


<a name="update-bill"></a>
## UpdateBill: 支払いQRコードの更新
支払いQRコードの内容を更新します。パラメータは全て省略可能で、指定したもののみ更新されます。

```PHP
$request = new Request\UpdateBill(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // billId: 支払いQRコードのID
    [
        'amount' => 9044.0,                       // 支払い額
        'description' => "test bill",             // 説明文
        'is_disabled' => FALSE                    // 無効化されているかどうか
    ]
);
```



### Parameters
**`bill_id`** 
  

更新対象の支払いQRコードのIDです。

```json
{
  "type": "string",
  "format": "uuid"
}
```

**`amount`** 
  

支払いQRコードを支払い額を指定します。nullを渡すと任意金額の支払いQRコードとなり、エンドユーザーがアプリで読み取った際に金額を入力します。また、金額を指定する場合の上限額は支払いをするマネーの取引上限額です。

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



成功したときは
[Bill](./responses.md#bill)
を返します



---


<a name="create-payment-transaction-with-bill"></a>
## CreatePaymentTransactionWithBill: 支払いQRコードを読み取ることで支払いをする
通常支払いQRコードはエンドユーザーのアプリによって読み取られ、アプリとポケペイサーバとの直接通信によって取引が作られます。 もしエンドユーザーとの通信をパートナーのサーバのみに限定したい場合、パートナーのサーバが支払いQRの情報をエンドユーザーから代理受けして、サーバ間連携APIによって実際の支払い取引をリクエストすることになります。

エンドユーザーから受け取った支払いQRコードのIDをエンドユーザーIDと共に渡すことで支払い取引が作られます。
支払い時には、エンドユーザーの残高のうち、ポイント残高から優先的に消費されます。


```PHP
$request = new Request\CreatePaymentTransactionWithBill(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // billId: 支払いQRコードのID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // customerId: エンドユーザーのID
    [
        'metadata' => "{\"key\":\"value\"}",      // 取引メタデータ
        'request_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // リクエストID
        'strategy' => "point-preferred"           // 支払い時の残高消費方式
    ]
);
```



### Parameters
**`bill_id`** 
  

支払いQRコードのIDです。

QRコード生成時に送金先店舗のウォレット情報や、支払い金額などが登録されています。

```json
{
  "type": "string",
  "format": "uuid"
}
```

**`customer_id`** 
  

エンドユーザーIDです。

支払いを行うエンドユーザーを指定します。

```json
{
  "type": "string",
  "format": "uuid"
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
既に存在する、別のユーザによる取引とリクエストIDが衝突した場合、request_id_conflictが返ります。

```json
{
  "type": "string",
  "format": "uuid"
}
```

**`strategy`** 
  

支払い時に残高がどのように消費されるかを指定します。
デフォルトでは point-preferred (ポイント優先)が採用されます。

- point-preferred: ポイント残高が優先的に消費され、ポイントがなくなり次第マネー残高から消費されていきます(デフォルト動作)
- money-only: マネー残高のみから消費され、ポイント残高は使われません

マネー設定でポイント残高のみの利用に設定されている場合(display_money_and_point が point-only の場合)、 strategy の指定に関わらずポイント優先になります。

```json
{
  "type": "string",
  "enum": [
    "point-preferred",
    "money-only"
  ]
}
```



成功したときは
[TransactionDetail](./responses.md#transaction-detail)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|403|unpermitted_admin_user|この管理ユーザには権限がありません|Admin does not have permission|
|422|disabled_bill|支払いQRコードが無効です|Bill is disabled|
|422|customer_user_not_found||The customer user is not found|
|422|bill_not_found|支払いQRコードが見つかりません|Bill not found|
|422|coupon_not_found|クーポンが見つかりませんでした。|The coupon is not found.|
|422|cannot_topup_during_cvs_authorization_pending|コンビニ決済の予約中はチャージできません|You cannot topup your account while a convenience store payment is pending.|
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



