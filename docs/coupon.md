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
        'coupon_id' => "N6",                      // クーポンID
        'coupon_name' => "pPYojnL",               // クーポン名
        'issued_shop_name' => "WN99oUAp2",        // 発行店舗名
        'available_shop_name' => "7dRd",          // 利用可能店舗名
        'available_from' => "2026-08-05T12:36:43.000000Z", // 利用可能期間 (開始日時)
        'available_to' => "2023-09-01T05:36:08.000000Z", // 利用可能期間 (終了日時)
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
    "T0bu9kBbfQDVxrOePjXnEEoR26VQKj59HY9GxwaIDAEfbXDBB3FNIL8Usakbi9ZrjBPmCyriSuUZrqYwqtbArFxY0",
    "2023-08-23T09:29:18.000000Z",
    "2023-08-18T01:05:44.000000Z",
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // issuedShopId: 発行元の店舗ID
    [
        'description' => "lQ2iQavwvhDr8TNB4vIcRTpSaCV5lZtxsN8hQh23jWL68GyttBaIaA6bT",
        'discount_amount' => 5938,
        'discount_percentage' => 7535.0,
        'discount_upper_limit' => 2989,
        'display_starts_at' => "2024-06-20T21:57:03.000000Z", // クーポンの掲載期間(開始日時)
        'display_ends_at' => "2026-02-13T21:59:23.000000Z", // クーポンの掲載期間(終了日時)
        'is_disabled' => FALSE,                   // 無効化フラグ
        'is_hidden' => TRUE,                      // クーポン一覧に掲載されるかどうか
        'is_public' => FALSE,                     // アプリ配信なしで受け取れるかどうか
        'code' => "SP8aD",                        // クーポン受け取りコード
        'usage_limit' => 2807,                    // ユーザごとの利用可能回数(NULLの場合は無制限)
        'min_amount' => 2353,                     // クーポン適用可能な最小取引額
        'is_shop_specified' => TRUE,              // 特定店舗限定のクーポンかどうか
        'available_shop_ids' => ["xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"], // 利用可能店舗リスト
        'storage_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // ストレージID
        'num_recipients_cap' => 7416              // クーポンを受け取ることができるユーザ数上限
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
        'name' => "Qo1a8Jvio1NlXmWokT3fCZ0aqdulZZGglvs1mmHvcGJdXuMvjofsG8E4KIFxs3y0EBuTM1S0iPJraQIMtAPJ1JN9Ct",
        'description' => "WW30Uo4UAg9arJ4XCMrwN15cIxDvF6fUC0OQCualYkGbJ73b3nYCrV9uDJehyXJGfZSkx4G3NTiGEBvJP8jVkcC85nZnpCpVaAaHx1iEs8vFtOGvU65Sy7b45F1sYQbanmxI5u8gze9w",
        'discount_amount' => 8918,
        'discount_percentage' => 7993.0,
        'discount_upper_limit' => 809,
        'starts_at' => "2025-12-14T02:35:32.000000Z",
        'ends_at' => "2021-02-21T22:50:00.000000Z",
        'display_starts_at' => "2020-06-26T05:52:22.000000Z", // クーポンの掲載期間(開始日時)
        'display_ends_at' => "2023-04-19T03:26:17.000000Z", // クーポンの掲載期間(終了日時)
        'is_disabled' => TRUE,                    // 無効化フラグ
        'is_hidden' => TRUE,                      // クーポン一覧に掲載されるかどうか
        'is_public' => FALSE,                     // アプリ配信なしで受け取れるかどうか
        'code' => "xV0P",                         // クーポン受け取りコード
        'usage_limit' => 402,                     // ユーザごとの利用可能回数(NULLの場合は無制限)
        'min_amount' => 1881,                     // クーポン適用可能な最小取引額
        'is_shop_specified' => TRUE,              // 特定店舗限定のクーポンかどうか
        'available_shop_ids' => ["xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"], // 利用可能店舗リスト
        'storage_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // ストレージID
        'num_recipients_cap' => 8600              // クーポンを受け取ることができるユーザ数上限
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



