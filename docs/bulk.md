# Bulk
一括取引処理を表すデータです。
CSVファイルのアップロードにより、複数件の取引をバッチ処理する非同期APIを提供します。
一括処理のステータス（submitted, examining, queued, processing, error, done, scheduled, canceled）を監視できます。
処理完了時にコールバックURLへの通知も可能です。
また、スケジュール実行時刻を指定して将来の時点で処理を実行することもできます。


<a name="bulk-create-transaction"></a>
## BulkCreateTransaction: CSVファイル一括取引
CSVファイルから一括取引をします。

```PHP
$request = new Request\BulkCreateTransaction(
    "t",                                          // name: 一括取引タスク名
    "B6",                                         // content: 取引する情報のCSV
    "ycarokvOGbxOtjjILQMz1SYbigi3uqGy9JaE",       // requestId: リクエストID
    [
        'description' => "7yaI77xfyzjZfk3Eg446tN2eZbvNHRDlrWw9qEb2szCXBkkHRCtXprtOEGF7FA7qtYAU5XoCNIUER98LHSRVr", // 一括取引の説明
        'private_money_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // マネーID
        'callback_url' => "https://y41mwGLH.example.com" // コールバックURL
    ]
);
```



### Parameters
#### `name`
一括取引タスクの管理用の名前です。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 32
}
```

</details>

#### `description`
一括取引タスクの管理用の説明文です。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 128
}
```

</details>

#### `content`
一括取引する情報を書いたCSVの文字列です。
1行目はヘッダ行で、2行目以降の各行にカンマ区切りの取引データを含みます。
カラムは以下の9つです。任意のカラムには空文字を指定します。

- `type`: 取引種別
  - 必須。'topup' または 'payment'
- `sender_id`: 送金ユーザーID
  - 必須。UUID
- `receiver_id`: 受取ユーザーID
  - 必須。UUID
- `private_money_id`: マネーID
  - 必須。UUID
- `money_amount`: マネー額
  - 任意。ただし `point_amount` といずれかが必須。0以上の数字
- `point_amount`: ポイント額
  - 任意。ただし `money_amount` といずれかが必須。0以上の数字
- `description`: 取引の説明文
  - 任意。200文字以内。取引履歴に表示される文章
- `bear_point_account_id`: ポイント負担ウォレットID
  - 任意。UUID。省略した場合はマネー発行体の本店のウォレットがポイントを負担します
- `point_expires_at`: ポイントの有効期限
  - 任意。指定がないときはマネーに設定された有効期限を適用

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string"
}
```

</details>

#### `request_id`
重複したリクエストを判断するためのユニークID。ランダムな36字の文字列を生成して渡してください。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "minLength": 36,
  "maxLength": 36
}
```

</details>

#### `private_money_id`
マネーIDです。 マネーを指定します。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `callback_url`
一括取引タスクが終了したときに通知されるコールバックURLです。これはオプショナルなパラメータで、未指定の場合は通知されません。

指定したURLに対して、以下の内容のリクエストがPOSTメソッドで送信されます。

リクエスト例:
 {
  "bulk_transaction_id": "c9a0b2c0-e8d0-4a7f-9b1d-2f0c3e1a8b7a",
  "request_id": "1640e29f-157a-46e2-af05-c402726cbf2b",
  "completed_at": "2025-09-26T14:30:00Z",
  "status": "done",
  "success_count": 98,
  "total_count": 100
}

- bulk_transaction_id: 一括取引タスクのタスクID
- request_id: 本APIにクライアント側から指定したrequest_id
- completed_at: 完了時刻
- status: 終了時の状態。done (完了状態) か error (エラー) のいずれか
- success_count: 成功件数
- total_count: 総件数

リトライ戦略について:
対象URLにPOSTした結果、500, 502, 503, 504エラーを受け取ったとき、またはタイムアウト (10秒)したときに、最大3回までリトライします。
成功通知が複数回送信されることもありえるため、request_idで排他処理を行なってください。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "url"
}
```

</details>



成功したときは
[BulkTransaction](./responses.md#bulk-transaction)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|400|invalid_parameters|項目が無効です|Invalid parameters|
|403|unpermitted_admin_user|この管理ユーザには権限がありません|Admin does not have permission|
|403|organization_not_issuer|発行体以外に許可されていない操作です|Unpermitted operation except for issuer organizations.|
|409|NULL|NULL|NULL|
|422|private_money_not_found|マネーが見つかりません|Private money not found|
|422|bulk_transaction_invalid_csv_format|入力されたCSVデータに誤りがあります|Invalid csv format|
|503|temporarily_unavailable||Service Unavailable|



---



