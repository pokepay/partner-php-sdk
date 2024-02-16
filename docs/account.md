# Account

<a name="list-user-accounts"></a>
## #<HEADING (N 2 TEXT ListUserAccounts)>: エンドユーザー、店舗ユーザーのウォレット一覧を表示する
ユーザーIDを指定してそのユーザーのウォレット一覧を取得します。

```PHP
$request = new Request\ListUserAccounts(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // userId: ユーザーID
    [
        'page' => 9487,                           // ページ番号
        'per_page' => 1036                        // 1ページ分の取引数
    ]
);
```



### Parameters
**`user_id`** 
  

ユーザーIDです。

指定したユーザーIDのウォレット一覧を取得します。パートナーキーと紐づく組織が発行しているマネーのウォレットのみが表示されます。

```json
{
  "type": "string",
  "format": "uuid"
}
```

**`page`** 
  

取得したいページ番号です。デフォルト値は1です。

```json
{
  "type": "integer",
  "minimum": 1
}
```

**`per_page`** 
  

1ページ当たりのウォレット数です。デフォルト値は50です。

```json
{
  "type": "integer",
  "minimum": 1
}
```



成功したときは
[PaginatedAccountDetails](./responses.md#paginated-account-details)
を返します


---


<a name="create-user-account"></a>
## #<HEADING (N 2 TEXT CreateUserAccount)>: エンドユーザーのウォレットを作成する
既存のエンドユーザーに対して、指定したマネーのウォレットを新規作成します

```PHP
$request = new Request\CreateUserAccount(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // userId: ユーザーID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    [
        'name' => "7h8AGlSSRwiNOYIornZxRDBxQGvNTLNrQKCvmHmTaoIV3rIs1jeyrAbDoooZnmxf3OApojLQO5NyfEcEDKhAl4wqj5ILZ0cxtylI2X3gC8rH7tPBZ52j7jOxIdr0BtwdyIP0TpAJeTFlwYQjSg51UWfankGviSVykrl3jIX4Z40weW", // ウォレット名
        'external_id' => "FSUkrIkfeW",            // 外部ID
        'metadata' => "{\"key1\":\"foo\",\"key2\":\"bar\"}" // ウォレットに付加するメタデータ
    ]
);
```



### Parameters
**`user_id`** 
  

ユーザーIDです。

```json
{
  "type": "string",
  "format": "uuid"
}
```

**`private_money_id`** 
  

マネーIDです。

作成するウォレットのマネーを指定します。このパラメータは必須です。

```json
{
  "type": "string",
  "format": "uuid"
}
```

**`name`** 
  


```json
{
  "type": "string",
  "maxLength": 256
}
```

**`external_id`** 
  


```json
{
  "type": "string",
  "maxLength": 50
}
```

**`metadata`** 
  

ウォレットに付加するメタデータをJSON文字列で指定します。
指定できるJSON文字列には以下のような制約があります。
- フラットな構造のJSONを文字列化したものであること。
- keyは最大32文字の文字列(同じkeyを複数指定することはできません)
- valueには128文字以下の文字列が指定できます

```json
{
  "type": "string",
  "format": "json"
}
```



成功したときは
[AccountDetail](./responses.md#account-detail)
を返します


---



