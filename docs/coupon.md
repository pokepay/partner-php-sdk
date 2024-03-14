# Coupon
Couponは支払い時に指定し、支払い処理の前にCouponに指定の方法で値引き処理を行います。
Couponは特定店舗で利用できるものや利用可能期間、配信条件などを設定できます。


<a name="list-coupons"></a>
## ListCoupons: クーポン一覧の取得
指定したマネーのクーポン一覧を取得します

```PHP
$request = new Request\ListCoupons(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: 対象クーポンのマネーID
    [
        'coupon_id' => "R5ZNIi",                  // クーポンID
        'coupon_name' => "ikdp8w",                // クーポン名
        'issued_shop_name' => "9",                // 発行店舗名
        'available_shop_name' => "Wl",            // 利用可能店舗名
        'available_from' => "2021-09-27T15:32:49.000000+09:00", // 利用可能期間 (開始日時)
        'available_to' => "2023-02-15T11:18:54.000000+09:00", // 利用可能期間 (終了日時)
        'page' => 1,                              // ページ番号
        'per_page' => 50                          // 1ページ分の取得数
    ]
);
```



### Parameters
**`private_money_id`** 
  

対象クーポンのマネーIDです(必須項目)。
存在しないマネーIDを指定した場合はprivate_money_not_foundエラー(422)が返ります。


```json
{
  "type": "string",
  "format": "uuid"
}
```

**`coupon_id`** 
  

指定されたクーポンIDで結果をフィルターします。
部分一致(前方一致)します。


```json
{
  "type": "string"
}
```

**`coupon_name`** 
  

指定されたクーポン名で結果をフィルターします。


```json
{
  "type": "string"
}
```

**`issued_shop_name`** 
  

指定された発行店舗で結果をフィルターします。


```json
{
  "type": "string"
}
```

**`available_shop_name`** 
  

指定された利用可能店舗で結果をフィルターします。


```json
{
  "type": "string"
}
```

**`available_from`** 
  

利用可能期間でフィルターします。フィルターの開始日時をISO8601形式で指定します。


```json
{
  "type": "string",
  "format": "date-time"
}
```

**`available_to`** 
  

利用可能期間でフィルターします。フィルターの終了日時をISO8601形式で指定します。


```json
{
  "type": "string",
  "format": "date-time"
}
```

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
[PaginatedCoupons](./responses.md#paginated-coupons)
を返します


---


<a name="create-coupon"></a>
## CreateCoupon: クーポンの登録
新しいクーポンを登録します

```PHP
$request = new Request\CreateCoupon(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",
    "krqUcz43dBm26",
    "2021-05-07T16:08:38.000000+09:00",
    "2021-03-24T06:30:38.000000+09:00",
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // issuedShopId: 発行元の店舗ID
    [
        'description' => "r7FE7oxXwqyeP95WFsrDTZsTHaLMAx4xhJmPNb2Vt3kMgTzAxm3nuCtm4tM4rQ7TMWwQQegAiqW5Gh3E",
        'discount_amount' => 1694,
        'discount_percentage' => 3744.0,
        'discount_upper_limit' => 1253,
        'display_starts_at' => "2021-03-24T15:38:39.000000+09:00", // クーポンの掲載期間(開始日時)
        'display_ends_at' => "2020-11-23T22:17:08.000000+09:00", // クーポンの掲載期間(終了日時)
        'is_disabled' => FALSE,                   // 無効化フラグ
        'is_hidden' => TRUE,                      // クーポン一覧に掲載されるかどうか
        'is_public' => FALSE,                     // アプリ配信なしで受け取れるかどうか
        'code' => "N4",                           // クーポン受け取りコード
        'usage_limit' => 3497,                    // ユーザごとの利用可能回数(NULLの場合は無制限)
        'min_amount' => 6454,                     // クーポン適用可能な最小取引額
        'is_shop_specified' => FALSE,             // 特定店舗限定のクーポンかどうか
        'available_shop_ids' => ["xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"], // 利用可能店舗リスト
        'storage_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx" // ストレージID
    ]
);
```

`is_shop_specified`と`available_shop_ids`は同時に指定する必要があります。


### Parameters
**`private_money_id`** 
  


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
  "maxLength": 128
}
```

**`description`** 
  


```json
{
  "type": "string",
  "maxLength": 256
}
```

**`discount_amount`** 
  


```json
{
  "type": "integer",
  "minimum": 0
}
```

**`discount_percentage`** 
  


```json
{
  "type": "number",
  "minimum": 0
}
```

**`discount_upper_limit`** 
  


```json
{
  "type": "integer",
  "minimum": 0
}
```

**`starts_at`** 
  


```json
{
  "type": "string",
  "format": "date-time"
}
```

**`ends_at`** 
  


```json
{
  "type": "string",
  "format": "date-time"
}
```

**`display_starts_at`** 
  


```json
{
  "type": "string",
  "format": "date-time"
}
```

**`display_ends_at`** 
  


```json
{
  "type": "string",
  "format": "date-time"
}
```

**`is_disabled`** 
  


```json
{
  "type": "boolean"
}
```

**`is_hidden`** 
  

アプリに表示されるクーポン一覧に掲載されるかどうか。
主に一時的に掲載から外したいときに用いられる。そのためis_publicの設定よりも優先される。


```json
{
  "type": "boolean"
}
```

**`is_public`** 
  


```json
{
  "type": "boolean"
}
```

**`code`** 
  


```json
{
  "type": "string"
}
```

**`usage_limit`** 
  


```json
{
  "type": "integer"
}
```

**`min_amount`** 
  


```json
{
  "type": "integer"
}
```

**`issued_shop_id`** 
  


```json
{
  "type": "string",
  "format": "uuid"
}
```

**`is_shop_specified`** 
  


```json
{
  "type": "boolean"
}
```

**`available_shop_ids`** 
  


```json
{
  "type": "array",
  "items": {
    "type": "string",
    "format": "uuid"
  }
}
```

**`storage_id`** 
  

Storage APIでアップロードしたクーポン画像のStorage IDを指定します

```json
{
  "type": "string",
  "format": "uuid"
}
```



成功したときは
[CouponDetail](./responses.md#coupon-detail)
を返します


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
**`coupon_id`** 
  

取得するクーポンのIDです。
UUIDv4フォーマットである必要があり、フォーマットが異なる場合は InvalidParametersエラー(400)が返ります。
指定したIDのクーポンが存在しない場合はCouponNotFoundエラー(422)が返ります。

```json
{
  "type": "string",
  "format": "uuid"
}
```



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
        'name' => "Bgm1bgbkQVRY8MuhwDykulFo5mDyJw8V3XaTOkFDFDXkJRYuzmNrD0IPFMYcPpoEqcZqYNWKYupHW3vkZPbupwOmpLyfc",
        'description' => "nvR24ekndSEuijqLz34cJjz9WzSXV2waIpnDEjnPuGDOLqsy43AtWyT6hyzJkPIxdv4Vr2ADhNnBQ2AhJrtrRhEmEhncAz9T8Jn6tKv842hmKtJWGe0W2JoBVxOBG6QSEaMM6DcJjfAtdrmKAg3KBKDu0vlbYdVC6n9nVLo43cE33CQPF6kxIlI0uguDnziraNYM7VX5YLnlD8HOOCDlP4GZ7jbmXM",
        'discount_amount' => 4761,
        'discount_percentage' => 1845.0,
        'discount_upper_limit' => 4360,
        'starts_at' => "2023-03-19T19:18:18.000000+09:00",
        'ends_at' => "2022-04-02T23:56:43.000000+09:00",
        'display_starts_at' => "2022-08-15T11:01:42.000000+09:00", // クーポンの掲載期間(開始日時)
        'display_ends_at' => "2020-10-06T06:10:06.000000+09:00", // クーポンの掲載期間(終了日時)
        'is_disabled' => FALSE,                   // 無効化フラグ
        'is_hidden' => TRUE,                      // クーポン一覧に掲載されるかどうか
        'is_public' => FALSE,                     // アプリ配信なしで受け取れるかどうか
        'code' => "fk3fyCeh",                     // クーポン受け取りコード
        'usage_limit' => 1955,                    // ユーザごとの利用可能回数(NULLの場合は無制限)
        'min_amount' => 2132,                     // クーポン適用可能な最小取引額
        'is_shop_specified' => TRUE,              // 特定店舗限定のクーポンかどうか
        'available_shop_ids' => ["xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"], // 利用可能店舗リスト
        'storage_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx" // ストレージID
    ]
);
```


`discount_amount`と`discount_percentage`の少なくとも一方は指定する必要があります。



### Parameters
**`coupon_id`** 
  


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
  "maxLength": 128
}
```

**`description`** 
  


```json
{
  "type": "string",
  "maxLength": 256
}
```

**`discount_amount`** 
  


```json
{
  "type": "integer",
  "minimum": 0
}
```

**`discount_percentage`** 
  


```json
{
  "type": "number",
  "minimum": 0
}
```

**`discount_upper_limit`** 
  


```json
{
  "type": "integer",
  "minimum": 0
}
```

**`starts_at`** 
  


```json
{
  "type": "string",
  "format": "date-time"
}
```

**`ends_at`** 
  


```json
{
  "type": "string",
  "format": "date-time"
}
```

**`display_starts_at`** 
  


```json
{
  "type": "string",
  "format": "date-time"
}
```

**`display_ends_at`** 
  


```json
{
  "type": "string",
  "format": "date-time"
}
```

**`is_disabled`** 
  


```json
{
  "type": "boolean"
}
```

**`is_hidden`** 
  

アプリに表示されるクーポン一覧に掲載されるかどうか。
主に一時的に掲載から外したいときに用いられる。そのためis_publicの設定よりも優先される。


```json
{
  "type": "boolean"
}
```

**`is_public`** 
  


```json
{
  "type": "boolean"
}
```

**`code`** 
  


```json
{
  "type": "string"
}
```

**`usage_limit`** 
  


```json
{
  "type": "integer"
}
```

**`min_amount`** 
  


```json
{
  "type": "integer"
}
```

**`is_shop_specified`** 
  


```json
{
  "type": "boolean"
}
```

**`available_shop_ids`** 
  


```json
{
  "type": "array",
  "items": {
    "type": "string",
    "format": "uuid"
  }
}
```

**`storage_id`** 
  

Storage APIでアップロードしたクーポン画像のStorage IDを指定します

```json
{
  "type": "string",
  "format": "uuid"
}
```



成功したときは
[CouponDetail](./responses.md#coupon-detail)
を返します


---



