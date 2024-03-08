# Cashtray
Cashtrayは支払いとチャージ両方に使えるQRコードで、店舗ユーザとエンドユーザーの間の主に店頭などでの取引のために用いられます。
Cashtrayによる取引では、エンドユーザーがQRコードを読み取った時点で即時取引が作られ、ユーザに対して受け取り確認画面は表示されません。
Cashtrayはワンタイムで、一度読み取りに成功するか、取引エラーになると失効します。
また、Cashtrayには有効期限があり、デフォルトでは30分で失効します。


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
    1704.0,                                       // amount: 金額
    [
        'description' => "たい焼き(小倉)",              // 取引履歴に表示する説明文
        'expires_in' => 9821                      // 失効時間(秒)
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


<a name="update-cashtray"></a>
## UpdateCashtray: Cashtrayの情報を更新する
Cashtrayの内容を更新します。bodyパラメーターは全て省略可能で、指定したもののみ更新されます。

```PHP
$request = new Request\UpdateCashtray(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // cashtrayId: CashtrayのID
    [
        'amount' => 3126.0,                       // 金額
        'description' => "たい焼き(小倉)",              // 取引履歴に表示する説明文
        'expires_in' => 5432                      // 失効時間(秒)
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



