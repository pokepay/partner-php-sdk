# Bulk

<a name="bulk-create-transaction"></a>
## BulkCreateTransaction: CSVファイル一括取引
CSVファイルから一括取引をします。

```PHP
$request = new Request\BulkCreateTransaction(
    "50Zlv3tzVr8aTPDqM",                          // name: 一括取引タスク名
    "xS0",                                        // content: 取引する情報のCSV
    "Vs3OlIrdnx7rU9Fte9Z959oBy13mtel3d8Tf",       // requestId: リクエストID
    [
        'description' => "J3Ol39ScasZnA58jo0hnztlMdM7BVfn4iFYyJJXfrDUn2Z5dTBMhYMOaLFSQ", // 一括取引の説明
        'private_money_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // マネーID
        'callback_url' => "qs"                    // コールバックURL
    ]
);
```



### Parameters
**`name`** 
  

一括取引タスクの管理用の名前です。

```json
{
  "type": "string",
  "maxLength": 32
}
```

**`description`** 
  

一括取引タスクの管理用の説明文です。

```json
{
  "type": "string",
  "maxLength": 128
}
```

**`content`** 
  

一括取引する情報を書いたCSVの文字列です。
1行目はヘッダ行で、2行目以降の各行にカンマ区切りの取引データを含みます。
カラムは以下の7つです。任意のカラムには空文字を指定します。

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
- `bear_account_id`: ポイント負担ウォレットID
  - `point_amount` があるときは必須。UUID
- `point_expires_at`: ポイントの有効期限
  - 任意。指定がないときはマネーに設定された有効期限を適用

```json
{
  "type": "string"
}
```

**`request_id`** 
  

重複したリクエストを判断するためのユニークID。ランダムな36字の文字列を生成して渡してください。

```json
{
  "type": "string",
  "minLength": 36,
  "maxLength": 36
}
```

**`private_money_id`** 
  

マネーIDです。 マネーを指定します。

```json
{
  "type": "string",
  "format": "uuid"
}
```

**`callback_url`** 
  

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

```json
{
  "type": "string",
  "format": "url"
}
```



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



---



