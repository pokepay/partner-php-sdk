# Check
店舗ユーザが発行し、エンドユーザーがポケペイアプリから読み取ることでチャージ取引が発生するQRコードです。

チャージQRコードを解析すると次のようなURLになります(URLは環境によって異なります)。

`https://www-sandbox.pokepay.jp/checks/xxxxxxxx-xxxx-xxxxxxxxx-xxxxxxxxxxxx`

QRコードを読み取る方法以外にも、このURLリンクを直接スマートフォン(iOS/Android)上で開くことによりアプリが起動して取引が行われます。(注意: 上記URLはsandbox環境であるため、アプリもsandbox環境のものである必要があります) 上記URL中の `xxxxxxxx-xxxx-xxxxxxxxx-xxxxxxxxxxxx` の部分がチャージQRコードのIDです。


<a name="create-check"></a>
## CreateCheck: チャージQRコードの発行

```PHP
$request = new Request\CreateCheck(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // accountId: 送金元の店舗アカウントID
    [
        'money_amount' => 4917.0,                 // 付与マネー額
        'point_amount' => 9509.0,                 // 付与ポイント額
        'description' => "test check",            // 説明文(アプリ上で取引の説明文として表示される)
        'is_onetime' => FALSE,                    // ワンタイムかどうかのフラグ
        'usage_limit' => 8921,                    // ワンタイムでない場合の最大読み取り回数
        'expires_at' => "2023-03-25T06:19:47.000000+09:00", // チャージQRコード自体の失効日時
        'point_expires_at' => "2024-01-06T06:20:51.000000+09:00", // チャージQRコードによって付与されるポイント残高の有効期限
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


---


<a name="list-checks"></a>
## ListChecks: チャージQRコード一覧の取得

```PHP
$request = new Request\ListChecks(
    [
        'page' => 7994,                           // ページ番号
        'per_page' => 50,                         // 1ページの表示数
        'private_money_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // マネーID
        'organization_code' => "TXEMx6",          // 組織コード
        'expires_from' => "2024-02-11T07:45:43.000000+09:00", // 有効期限の期間によるフィルター(開始時点)
        'expires_to' => "2022-09-02T02:26:25.000000+09:00", // 有効期限の期間によるフィルター(終了時点)
        'created_from' => "2022-05-29T15:37:23.000000+09:00", // 作成日時の期間によるフィルター(開始時点)
        'created_to' => "2021-02-21T22:54:32.000000+09:00", // 作成日時の期間によるフィルター(終了時点)
        'issuer_shop_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 発行店舗ID
        'description' => "lydCp",                 // チャージQRコードの説明文
        'is_onetime' => TRUE,                     // ワンタイムのチャージQRコードかどうか
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
        'money_amount' => 2298.0,                 // 付与マネー額
        'point_amount' => 5767.0,                 // 付与ポイント額
        'description' => "test check",            // チャージQRコードの説明文
        'is_onetime' => TRUE,                     // ワンタイムかどうかのフラグ
        'usage_limit' => 7144,                    // ワンタイムでない場合の最大読み取り回数
        'expires_at' => "2021-06-15T21:21:49.000000+09:00", // チャージQRコード自体の失効日時
        'point_expires_at' => "2022-09-07T06:29:59.000000+09:00", // チャージQRコードによって付与されるポイント残高の有効期限
        'point_expires_in_days' => 60,            // チャージQRコードによって付与されるポイント残高の有効期限(相対日数指定)
        'bear_point_account' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // ポイント額を負担する店舗のウォレットID
        'is_disabled' => FALSE                    // 無効化されているかどうかのフラグ
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



