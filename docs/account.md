# Account
ウォレットを表すデータです。
CustomerもMerchantも所有し、ウォレット間の送金は取引として記録されます。
Customerのウォレットはマネー残高(有償バリュー)、ポイント残高(無償バリュー)の2種類の残高をもちます。
また有効期限別で金額管理しており、有効期限はチャージ時のコンテキストによって決定されます。
ユーザはマネー別に複数のウォレットを保有することが可能です。
ただし１マネー１ウォレットのみであり、同一マネーのウォレットを複数所有することはできません。


<a name="list-user-accounts"></a>
## ListUserAccounts: エンドユーザー、店舗ユーザーのウォレット一覧を表示する
ユーザーIDを指定してそのユーザーのウォレット一覧を取得します。

```PHP
$request = new Request\ListUserAccounts(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // userId: ユーザーID
    [
        'page' => 3029,                           // ページ番号
        'per_page' => 9398                        // 1ページ分の取引数
    ]
);
```



### Parameters
#### `user_id`
ユーザーIDです。

指定したユーザーIDのウォレット一覧を取得します。パートナーキーと紐づく組織が発行しているマネーのウォレットのみが表示されます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `page`
取得したいページ番号です。デフォルト値は1です。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "minimum": 1
}
```

</details>

#### `per_page`
1ページ当たりのウォレット数です。デフォルト値は50です。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "minimum": 1
}
```

</details>



成功したときは
[PaginatedAccountDetails](./responses.md#paginated-account-details)
を返します



---


<a name="create-user-account"></a>
## CreateUserAccount: エンドユーザーのウォレットを作成する
既存のエンドユーザーに対して、指定したマネーのウォレットを新規作成します

```PHP
$request = new Request\CreateUserAccount(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // userId: ユーザーID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    [
        'name' => "XIAxp1c5Q2vG7By91KC2xkwbMvROWfUAhh6XnZz0yJYgRGAM6oTzljbZYS9b6qmrSFaDiVxdn1z0TuA7dLQ8GnuuGnm3um0ZKYlqHYAPfacx4ba4pxXiFCicQd3QQrdtpp5IlW8KnTaroT8w3801ZxeZpTa0FFkkUFLVCDKp9TvCsVFg3Dy6t9FVfvRBKOl2QQeBI5NM6J7EhkzGk22yYle2ZOPXJOiEYcNwwBKhoxCdqw8S", // ウォレット名
        'external_id' => "S6L7O",                 // 外部ID
        'metadata' => "{\"key1\":\"foo\",\"key2\":\"bar\"}" // ウォレットに付加するメタデータ
    ]
);
```



### Parameters
#### `user_id`
ユーザーIDです。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `private_money_id`
マネーIDです。

作成するウォレットのマネーを指定します。このパラメータは必須です。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `name`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 256
}
```

</details>

#### `external_id`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 50
}
```

</details>

#### `metadata`
ウォレットに付加するメタデータをJSON文字列で指定します。
指定できるJSON文字列には以下のような制約があります。
- フラットな構造のJSONを文字列化したものであること。
- keyは最大32文字の文字列(同じkeyを複数指定することはできません)
- valueには128文字以下の文字列が指定できます

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "json"
}
```

</details>



成功したときは
[AccountDetail](./responses.md#account-detail)
を返します



---



