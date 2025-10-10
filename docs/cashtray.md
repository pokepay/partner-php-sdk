# Cashtray
Cashtrayは支払いとチャージ両方に使えるQRコードで、店舗ユーザとエンドユーザーの間の主に店頭などでの取引のために用いられます。
店舗ユーザはCashtrayの状態を監視することができ、取引の成否やエラー事由を知ることができます。
Cashtrayによる取引では、エンドユーザーがQRコードを読み取った時点で即時取引が作られ、ユーザに対して受け取り確認画面は表示されません。
Cashtrayはワンタイムで、一度読み取りに成功するか、取引エラーになると失効します。
また、Cashtrayには有効期限があり、デフォルトでは30分で失効します。


<a name="create-transaction-with-cashtray"></a>
## CreateTransactionWithCashtray: CashtrayQRコードを読み取ることで取引する
エンドユーザーから受け取ったCashtray用QRコードのIDをエンドユーザーIDと共に渡すことで支払いあるいはチャージ取引が作られます。

通常CashtrayQRコードはエンドユーザーのアプリによって読み取られ、アプリとポケペイサーバとの直接通信によって取引が作られます。
もしエンドユーザーとの通信をパートナーのサーバのみに限定したい場合、パートナーのサーバがCashtrayQRの情報をエンドユーザーから代理受けして、サーバ間連携APIによって実際のチャージ取引をリクエストすることになります。


```PHP
$request = new Request\CreateTransactionWithCashtray(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // cashtrayId: Cashtray用QRコードのID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // customerId: エンドユーザーのID
    [
        'strategy' => "point-preferred",          // 支払い時の残高消費方式
        'request_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx" // リクエストID
    ]
);
```



### Parameters
**`cashtray_id`** 
  

Cashtray用QRコードのIDです。

QRコード生成時に送金元店舗のウォレット情報や、金額などが登録されています。

```json
{
  "type": "string",
  "format": "uuid"
}
```

**`customer_id`** 
  

エンドユーザーIDです。

```json
{
  "type": "string",
  "format": "uuid"
}
```

**`strategy`** 
  

支払い時に残高がどのように消費されるかを指定します。
チャージの場合は無効です。
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

**`request_id`** 
  

取引作成APIの羃等性を担保するためのリクエスト固有のIDです。

取引作成APIで結果が受け取れなかったなどの理由で再試行する際に、二重に取引が作られてしまうことを防ぐために、クライアント側から指定されます。
指定は任意で、UUID V4フォーマットでランダム生成した文字列です。リクエストIDは一定期間で削除されます。

リクエストIDを指定したとき、まだそのリクエストIDに対する取引がない場合、新規に取引が作られレスポンスとして返されます。
もしそのリクエストIDに対する取引が既にある場合、既存の取引がレスポンスとして返されます。
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
|422|account_not_found|アカウントが見つかりません|The account is not found|
|422|cashtray_not_found|決済QRコードが見つかりません|Cashtray is not found|
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
|422|cashtray_already_proceed|この決済QRコードは既に処理されています|Cashtray is already proceed|
|422|cashtray_expired|この決済QRコードは有効期限が切れています|Cashtray is expired|
|422|cashtray_already_canceled|この決済QRコードは既に無効化されています|Cashtray is already canceled|
|503|temporarily_unavailable||Service Unavailable|



---


<a name="create-cashtray"></a>
## CreateCashtray: Cashtrayを作る
Cashtrayを作成します。

エンドユーザーに対して支払いまたはチャージを行う店舗の情報(店舗ユーザーIDとマネーID)と、取引金額が必須項目です。
店舗ユーザーIDとマネーIDから店舗ウォレットを特定します。

その他に、Cashtrayから作られる取引に対する説明文や失効時間を指定できます。


```PHP
$request = new Request\CreateCashtray(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // shopId: 店舗ユーザーID
    6512.0,                                       // amount: 金額
    [
        'description' => "たい焼き(小倉)",              // 取引履歴に表示する説明文
        'expires_in' => 3650                      // 失効時間(秒)
    ]
);
```



### Parameters
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



成功したときは
[Cashtray](./responses.md#cashtray)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|403|unpermitted_admin_user|この管理ユーザには権限がありません|Admin does not have permission|
|422|account_not_found|アカウントが見つかりません|The account is not found|
|422|shop_user_not_found|店舗が見つかりません|The shop user is not found|



---


<a name="cancel-cashtray"></a>
## CancelCashtray: Cashtrayを無効化する
Cashtrayを無効化します。

これにより、 `GetCashtray` のレスポンス中の `canceled_at` に無効化時点での現在時刻が入るようになります。
エンドユーザーが無効化されたQRコードを読み取ると `cashtray_already_canceled` エラーとなり、取引は失敗します。

```PHP
$request = new Request\CancelCashtray(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // cashtrayId: CashtrayのID
);
```



### Parameters
**`cashtray_id`** 
  

無効化するCashtrayのIDです。

```json
{
  "type": "string",
  "format": "uuid"
}
```



成功したときは
[Cashtray](./responses.md#cashtray)
を返します



---


<a name="get-cashtray"></a>
## GetCashtray: Cashtrayの情報を取得する
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

```PHP
$request = new Request\GetCashtray(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // cashtrayId: CashtrayのID
);
```



### Parameters
**`cashtray_id`** 
  

情報を取得するCashtrayのIDです。

```json
{
  "type": "string",
  "format": "uuid"
}
```



成功したときは
[CashtrayWithResult](./responses.md#cashtray-with-result)
を返します



---


<a name="update-cashtray"></a>
## UpdateCashtray: Cashtrayの情報を更新する
Cashtrayの内容を更新します。bodyパラメーターは全て省略可能で、指定したもののみ更新されます。

```PHP
$request = new Request\UpdateCashtray(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // cashtrayId: CashtrayのID
    [
        'amount' => 5133.0,                       // 金額
        'description' => "たい焼き(小倉)",              // 取引履歴に表示する説明文
        'expires_in' => 2760                      // 失効時間(秒)
    ]
);
```



### Parameters
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



成功したときは
[Cashtray](./responses.md#cashtray)
を返します



---



