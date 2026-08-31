# Coupon
割引クーポンを表すデータです。
クーポンをユーザが明示的に利用することによって支払い決済時の割引(固定金額 or 割引率)が適用されます。
クーポンは支払い時に指定し、支払い処理の前にクーポンに指定の方法で値引き処理を行います。
クーポン原資を負担する発行店舗を設定したり、配布先を指定することも可能です。
また、特定店舗で利用できるものや利用可能期間、配信条件などを設定できます。


<a name="list-coupons"></a>
## ListCoupons: クーポン一覧の取得
指定したマネーのクーポン一覧を取得します

```PHP
$request = new Request\ListCoupons(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: 対象クーポンのマネーID
    [
        'coupon_id' => "VMpSWKVi5",               // クーポンID
        'coupon_name' => "N7y3SPx9Uv",            // クーポン名
        'issued_shop_name' => "ns7",              // 発行店舗名
        'available_shop_name' => "LOU5JmSx",      // 利用可能店舗名
        'available_from' => "2022-05-11T23:28:33.000000Z", // 利用可能期間 (開始日時)
        'available_to' => "2022-12-12T03:00:56.000000Z", // 利用可能期間 (終了日時)
        'page' => 1,                              // ページ番号
        'per_page' => 50                          // 1ページ分の取得数
    ]
);
```



### Parameters
#### `private_money_id`
対象クーポンのマネーIDです(必須項目)。
存在しないマネーIDを指定した場合はprivate_money_not_foundエラー(422)が返ります。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `coupon_id`
指定されたクーポンIDで結果をフィルターします。
部分一致(前方一致)します。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string"
}
```

</details>

#### `coupon_name`
指定されたクーポン名で結果をフィルターします。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string"
}
```

</details>

#### `issued_shop_name`
指定された発行店舗で結果をフィルターします。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string"
}
```

</details>

#### `available_shop_name`
指定された利用可能店舗で結果をフィルターします。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string"
}
```

</details>

#### `available_from`
利用可能期間でフィルターします。フィルターの開始日時をISO8601形式で指定します。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "date-time"
}
```

</details>

#### `available_to`
利用可能期間でフィルターします。フィルターの終了日時をISO8601形式で指定します。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "date-time"
}
```

</details>

#### `page`
取得したいページ番号です。

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
1ページ分の取得数です。デフォルトでは 50 になっています。

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
[PaginatedCoupons](./responses.md#paginated-coupons)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|403|unpermitted_admin_user|この管理ユーザには権限がありません|Admin does not have permission|
|422|shop_user_not_found|店舗が見つかりません|The shop user is not found|
|422|private_money_not_found|マネーが見つかりません|Private money not found|



---


<a name="create-coupon"></a>
## CreateCoupon: クーポンの登録
新しいクーポンを登録します

```PHP
$request = new Request\CreateCoupon(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
    "TmL5CoRyGeNp0HxXnZXSXNgckUAwWayJKCRYX3YIcgcnowGfiwKDxXVuCnD6rOBTI27AIAV5JepzVqh",
    "2025-04-27T12:03:04.000000Z",
    "2020-08-16T02:06:30.000000Z",
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // issuedShopId: 発行元の店舗ID
    [
        'description' => "y4RP0gQPVohOKO497LqBx5st33IycobYifawLoyomWOOMozo5jpKaGDznlAnGQMpbxQAiLohSPUwUYCUJg68uA2AmnfrLs0DzubTwACwZ7ZhzXL6GQDOebU5xROJsENJO2NqdySldX94xlSRqnAPOZUjwSd4H43FQ8gVS6TmMl7klMt3C13MqnL5qq1u02f7XAIyZQ65mKbppT1wZa5Ul9NliFarXnpuT0KKlK0tskfw",
        'discount_amount' => 4141,
        'discount_percentage' => 8495.0,
        'discount_upper_limit' => 4989,
        'display_starts_at' => "2025-05-11T19:48:24.000000Z", // クーポンの掲載期間(開始日時)
        'display_ends_at' => "2022-01-14T18:20:25.000000Z", // クーポンの掲載期間(終了日時)
        'is_disabled' => FALSE,                   // 無効化フラグ
        'is_hidden' => FALSE,                     // クーポン一覧に掲載されるかどうか
        'is_public' => FALSE,                     // アプリ配信なしで受け取れるかどうか
        'code' => "tzv0",                         // クーポン受け取りコード
        'usage_limit' => 1979,                    // ユーザごとの利用可能回数(NULLの場合は無制限)
        'min_amount' => 2213,                     // クーポン適用可能な最小取引額
        'is_shop_specified' => TRUE,              // 特定店舗限定のクーポンかどうか
        'available_shop_ids' => ["xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"], // 利用可能店舗リスト
        'storage_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // ストレージID
        'num_recipients_cap' => 9255              // クーポンを受け取ることができるユーザ数上限
    ]
);
```

`is_shop_specified`と`available_shop_ids`は同時に指定する必要があります。


### Parameters
#### `private_money_id`

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
  "maxLength": 128
}
```

</details>

#### `description`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 256
}
```

</details>

#### `discount_amount`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "minimum": 0
}
```

</details>

#### `discount_percentage`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "number",
  "minimum": 0
}
```

</details>

#### `discount_upper_limit`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "minimum": 0
}
```

</details>

#### `starts_at`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "date-time"
}
```

</details>

#### `ends_at`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "date-time"
}
```

</details>

#### `display_starts_at`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "date-time"
}
```

</details>

#### `display_ends_at`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "date-time"
}
```

</details>

#### `is_disabled`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "boolean"
}
```

</details>

#### `is_hidden`
アプリに表示されるクーポン一覧に掲載されるかどうか。
主に一時的に掲載から外したいときに用いられる。そのためis_publicの設定よりも優先される。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "boolean"
}
```

</details>

#### `is_public`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "boolean"
}
```

</details>

#### `code`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string"
}
```

</details>

#### `usage_limit`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer"
}
```

</details>

#### `min_amount`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer"
}
```

</details>

#### `issued_shop_id`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `is_shop_specified`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "boolean"
}
```

</details>

#### `available_shop_ids`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "array",
  "items": {
    "type": "string",
    "format": "uuid"
  }
}
```

</details>

#### `storage_id`
Storage APIでアップロードしたクーポン画像のStorage IDを指定します

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `num_recipients_cap`

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
[CouponDetail](./responses.md#coupon-detail)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|400|invalid_parameters|項目が無効です|Invalid parameters|
|403|unpermitted_admin_user|この管理ユーザには権限がありません|Admin does not have permission|
|404|partner_storage_not_found|指定したIDのデータは保存されていません|Not found by storage_id|
|422|shop_user_not_found|店舗が見つかりません|The shop user is not found|
|422|private_money_not_found|マネーが見つかりません|Private money not found|
|422|coupon_image_storage_conflict|クーポン画像のストレージIDは既に存在します|The coupon image storage_id is already exists|



---


<a name="get-coupon"></a>
## GetCoupon: クーポンの取得
指定したIDを持つクーポンを取得します

```PHP
$request = new Request\GetCoupon(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // couponId: クーポンID
);
```



### Parameters
#### `coupon_id`
取得するクーポンのIDです。
UUIDv4フォーマットである必要があり、フォーマットが異なる場合は InvalidParametersエラー(400)が返ります。
指定したIDのクーポンが存在しない場合はCouponNotFoundエラー(422)が返ります。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>



成功したときは
[CouponDetail](./responses.md#coupon-detail)
を返します



---


<a name="update-coupon"></a>
## UpdateCoupon: クーポンの更新
指定したクーポンを更新します

```PHP
$request = new Request\UpdateCoupon(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // couponId: クーポンID
    [
        'name' => "OHu7kauWEG06SgCTer9oFRJ4RuLmQ0Lm0BujxjuGzP64zEajyqhONnTNJefr2TiFsY9hewfsBiByfrEZOyxfKfoQGupNHaPUWIAEdiNMDugLuPAj9l5d8AynsLeqsG",
        'description' => "dglo4RznM6xq8a41fGu54mYbxoNTpwSF7lLeXEgHqdJbSYvAjEwhC3hwMP5cgQTpj98oXR8pOFi9g2w6AFQtTwKA2dNvAhM3isQf3EbT9n4bNXT5kpK8LD20g1iwKbDSOY8Obvi4UJC9R4UvEHmyGnNqQFSIcOK9wFQbyZ9b8R7gO8vV0TOwj3sRQx2",
        'discount_amount' => 3371,
        'discount_percentage' => 6772.0,
        'discount_upper_limit' => 4698,
        'starts_at' => "2022-04-30T07:10:27.000000Z",
        'ends_at' => "2025-07-21T01:00:07.000000Z",
        'display_starts_at' => "2025-06-11T14:22:40.000000Z", // クーポンの掲載期間(開始日時)
        'display_ends_at' => "2021-09-01T21:45:17.000000Z", // クーポンの掲載期間(終了日時)
        'is_disabled' => FALSE,                   // 無効化フラグ
        'is_hidden' => FALSE,                     // クーポン一覧に掲載されるかどうか
        'is_public' => FALSE,                     // アプリ配信なしで受け取れるかどうか
        'code' => "UcwyM",                        // クーポン受け取りコード
        'usage_limit' => 5091,                    // ユーザごとの利用可能回数(NULLの場合は無制限)
        'min_amount' => 914,                      // クーポン適用可能な最小取引額
        'is_shop_specified' => FALSE,             // 特定店舗限定のクーポンかどうか
        'available_shop_ids' => ["xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"], // 利用可能店舗リスト
        'storage_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // ストレージID
        'num_recipients_cap' => 1107              // クーポンを受け取ることができるユーザ数上限
    ]
);
```


`discount_amount`と`discount_percentage`の少なくとも一方は指定する必要があります。



### Parameters
#### `coupon_id`

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
  "maxLength": 128
}
```

</details>

#### `description`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 256
}
```

</details>

#### `discount_amount`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "minimum": 0
}
```

</details>

#### `discount_percentage`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "number",
  "minimum": 0
}
```

</details>

#### `discount_upper_limit`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "minimum": 0
}
```

</details>

#### `starts_at`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "date-time"
}
```

</details>

#### `ends_at`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "date-time"
}
```

</details>

#### `display_starts_at`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "date-time"
}
```

</details>

#### `display_ends_at`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "date-time"
}
```

</details>

#### `is_disabled`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "boolean"
}
```

</details>

#### `is_hidden`
アプリに表示されるクーポン一覧に掲載されるかどうか。
主に一時的に掲載から外したいときに用いられる。そのためis_publicの設定よりも優先される。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "boolean"
}
```

</details>

#### `is_public`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "boolean"
}
```

</details>

#### `code`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string"
}
```

</details>

#### `usage_limit`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer"
}
```

</details>

#### `min_amount`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer"
}
```

</details>

#### `is_shop_specified`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "boolean"
}
```

</details>

#### `available_shop_ids`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "array",
  "items": {
    "type": "string",
    "format": "uuid"
  }
}
```

</details>

#### `storage_id`
Storage APIでアップロードしたクーポン画像のStorage IDを指定します

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `num_recipients_cap`

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
[CouponDetail](./responses.md#coupon-detail)
を返します



---



