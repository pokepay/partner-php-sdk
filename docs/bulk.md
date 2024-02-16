# Bulk

<a name="bulk-create-transaction"></a>
## #<HEADING (N 2 TEXT BulkCreateTransaction)>: CSVファイル一括取引
CSVファイルから一括取引をします。

```PHP
$request = new Request\BulkCreateTransaction(
    "4EHvvGXcIfmnFXVxW6jk1K5",                    // name: 一括取引タスク名
    "eaUC",                                       // content: 取引する情報のCSV
    "5kejfhRk9fNlrg1tc233k1NTli7WC6NPV5u9",       // requestId: リクエストID
    [
        'description' => "RTkyNyaeCWdLMs9trw4BRSAcsFY7jzwXn55LRrdoGeAl9DZPRjKIsTAwwXxMloYc4AXYbMu3a2NJ80wYAbrh8b4mOAsBMQ2yuMN8yTYiFBy2g2", // 一括取引の説明
        'private_money_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx" // マネーID
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



成功したときは
[BulkTransaction](./responses.md#bulk-transaction)
を返します


---



