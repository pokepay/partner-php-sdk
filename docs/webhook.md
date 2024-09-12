# Webhook
Webhookは特定のワーカータスクでの処理が完了した事を通知します。
WebHookにはURLとタスク名、有効化されているかを設定することが出来ます。
通知はタスク完了時、事前に設定したURLにPOSTリクエストを行います。


<a name="list-webhooks"></a>
## ListWebhooks: 作成したWebhookの一覧を返す

```PHP
$request = new Request\ListWebhooks(
    [
        'page' => 1,                              // ページ番号
        'per_page' => 50                          // 1ページ分の取得数
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
  

1ページ分の取得数です。デフォルトでは 50 になっています。

```json
{
  "type": "integer",
  "minimum": 1
}
```



成功したときは
[PaginatedOrganizationWorkerTaskWebhook](./responses.md#paginated-organization-worker-task-webhook)
を返します



---


<a name="create-webhook"></a>
## CreateWebhook: webhookの作成
ワーカータスクの処理が終了したことを通知するためのWebhookを登録します
このAPIにより指定したタスクの終了時に、指定したURLにPOSTリクエストを送信します。
このとき、リクエストボディは `{"task": <タスク名>}` という値になります。

```PHP
$request = new Request\CreateWebhook(
    "bulk_shops",                                 // task: タスク名
    "U5lvasIa"                                    // url: URL
);
```



### Parameters
**`task`** 
  

ワーカータスク名を指定します

```json
{
  "type": "string",
  "enum": [
    "bulk_shops",
    "process_user_stats_operation"
  ]
}
```

**`url`** 
  

通知先のURLを指定します

```json
{
  "type": "string"
}
```



成功したときは
[OrganizationWorkerTaskWebhook](./responses.md#organization-worker-task-webhook)
を返します



---


<a name="delete-webhook"></a>
## DeleteWebhook: Webhookの削除
指定したWebhookを削除します

```PHP
$request = new Request\DeleteWebhook(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // webhookId: Webhook ID
);
```



### Parameters
**`webhook_id`** 
  

削除するWebhookのIDです。

```json
{
  "type": "string",
  "format": "uuid"
}
```



成功したときは
[OrganizationWorkerTaskWebhook](./responses.md#organization-worker-task-webhook)
を返します



---


<a name="update-webhook"></a>
## UpdateWebhook: Webhookの更新
指定したWebhookの内容を更新します

```PHP
$request = new Request\UpdateWebhook(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // webhookId: Webhook ID
    [
        'url' => "Df8qsq2",                       // URL
        'is_active' => FALSE,                     // 有効/無効
        'task' => "bulk_shops"                    // タスク名
    ]
);
```



### Parameters
**`webhook_id`** 
  

更新するWebhookのIDです。

```json
{
  "type": "string",
  "format": "uuid"
}
```

**`url`** 
  

変更するURLを指定します

```json
{
  "type": "string"
}
```

**`is_active`** 
  

trueならWebhookによる通知が有効になり、falseなら無効になります

```json
{
  "type": "boolean"
}
```

**`task`** 
  

指定したタスクが終了したときにWebhookによる通知がされます

```json
{
  "type": "string",
  "enum": [
    "bulk_shops",
    "process_user_stats_operation"
  ]
}
```



成功したときは
[OrganizationWorkerTaskWebhook](./responses.md#organization-worker-task-webhook)
を返します



---



