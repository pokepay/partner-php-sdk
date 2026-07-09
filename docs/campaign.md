# Campaign
自動ポイント還元ルールの設定を表すデータです。
Pokepay管理画面やPartnerSDK経由でルール登録、更新が可能です。
取引(Transaction)または外部決済イベント(ExternalTransaction)の内容によって還元するポイント額を計算し、自動で付与するルールを設定可能です。
targetとして取引または外部決済イベントを選択して個別設定します。


<a name="list-campaigns"></a>
## ListCampaigns: キャンペーン一覧を取得する
マネーIDを指定してキャンペーンを取得します。
発行体の組織マネージャ権限で、自組織が発行するマネーのキャンペーンについてのみ閲覧可能です。
閲覧権限がない場合は unpermitted_admin_user エラー(422)が返ります。

```PHP
$request = new Request\ListCampaigns(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    [
        'is_ongoing' => TRUE,                     // 現在適用可能なキャンペーンかどうか
        'available_from' => "2022-05-23T16:21:45.000000Z", // 指定された日時以降に適用可能期間が含まれているか
        'available_to' => "2024-01-29T18:14:42.000000Z", // 指定された日時以前に適用可能期間が含まれているか
        'page' => 1,                              // ページ番号
        'per_page' => 20                          // 1ページ分の取得数
    ]
);
```



### Parameters
#### `private_money_id`
マネーIDです。

フィルターとして使われ、指定したマネーでのキャンペーンのみ一覧に表示されます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `is_ongoing`
有効化されており、現在キャンペーン期間内にあるキャンペーンをフィルターするために使われます。
真であれば適用可能なもののみを抽出し、偽であれば適用不可なもののみを抽出します。
デフォルトでは未指定(フィルターなし)です。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "boolean"
}
```

</details>

#### `available_from`
キャンペーン終了日時が指定された日時以降であるキャンペーンをフィルターするために使われます。
デフォルトでは未指定(フィルターなし)です。

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
キャンペーン開始日時が指定された日時以前であるキャンペーンをフィルターするために使われます。
デフォルトでは未指定(フィルターなし)です。

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
1ページ分の取得数です。デフォルトでは 20 になっています。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "minimum": 1,
  "maximum": 50
}
```

</details>



成功したときは
[PaginatedCampaigns](./responses.md#paginated-campaigns)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|403|unpermitted_admin_user|この管理ユーザには権限がありません|Admin does not have permission|
|503|temporarily_unavailable||Service Unavailable|



---


<a name="create-campaign"></a>
## CreateCampaign: ポイント付与キャンペーンを作る
ポイント付与キャンペーンを作成します。

```PHP
$request = new Request\CreateCampaign(
    "PSv0sqeMHVeJGZnQaE4lp3S7TMyfZKpPybiZ1Lwce18e7Eq5OqWuTabdRaaHOyfGqVUncXzhjskeGyZxmbEy050Zlv3tzVr8aTPDqMKbxS0Vs3OlIrdnx7rU9Fte9Z959oBy13mtel3d8TfJ3Ol39ScasZnA58jo0hnztlMdM7BVfn4iFYyJJXfrDUn2Z5dTBMhYMOaLFSQqsldJHk3l4cpZ7fJl29A3O6y0fQnXOgwkIth5yMWiTVYzb9Ya", // name: キャンペーン名
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    "2021-09-21T04:20:49.000000Z",                // startsAt: キャンペーン開始日時
    "2024-04-17T11:59:28.000000Z",                // endsAt: キャンペーン終了日時
    3443,                                         // priority: キャンペーンの適用優先度
    "external-transaction",                       // event: イベント種別
    [
        'bear_point_shop_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // ポイント負担先店舗ID
        'description' => "uIp7v4EzACicWq4Ul0bBBFnJwjrPufrwL5Z4qM5cyeftMbZhJuNsCdqVbAgLZQKQXblhvdQVC38rMOaKHSf5htPpycWdWsbduWBxtfg1Kliu47KITpvwbo61t0xPHohZAfXS5WAq97VI0kJjyO9S00lR", // キャンペーンの説明文
        'status' => "enabled",                    // キャンペーン作成時の状態
        'point_expires_at' => "2021-11-08T19:19:39.000000Z", // ポイント有効期限(絶対日時指定)
        'point_expires_in_days' => 7333,          // ポイント有効期限(相対日数指定)
        'is_exclusive' => FALSE,                  // キャンペーンの重複設定
        'subject' => "all",                       // ポイント付与の対象金額の種別
        'amount_based_point_rules' => [["point_amount" => 5, "point_amount_unit" => "percent", "subject_more_than_or_equal" => 1000, "subject_less_than" => 5000]
],                                                // 取引金額ベースのポイント付与ルール
        'product_based_point_rules' => [["point_amount" => 5, "point_amount_unit" => "percent", "product_code" => "4912345678904", "is_multiply_by_count" => TRUE, "required_count" => 2]
, ["point_amount" => 5, "point_amount_unit" => "percent", "product_code" => "4912345678904", "is_multiply_by_count" => TRUE, "required_count" => 2]
, ["point_amount" => 5, "point_amount_unit" => "percent", "product_code" => "4912345678904", "is_multiply_by_count" => TRUE, "required_count" => 2]
],                                                // 商品情報ベースのポイント付与ルール
        'blacklisted_product_rules' => [["product_code" => "4912345678904", "classification_code" => "c123"]
],                                                // 商品情報ベースのキャンペーンで除外対象にする商品リスト
        'applicable_days_of_week' => [2],         // キャンペーンを適用する曜日 (複数指定)
        'applicable_time_ranges' => [["from" => "12:00", "to" => "23:59"]
, ["from" => "12:00", "to" => "23:59"]
],                                                // キャンペーンを適用する時間帯 (複数指定)
        'applicable_shop_ids' => ["xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"], // キャンペーン適用対象となる店舗IDのリスト
        'blacklisted_shop_ids' => ["xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"], // キャンペーン適用対象外となる店舗IDのリスト(ブラックリスト方式)
        'minimum_number_of_products' => 503,      // キャンペーンを適用する1会計内の商品個数の下限
        'minimum_number_of_amount' => 6369,       // キャンペーンを適用する1会計内の商品総額の下限
        'minimum_number_for_combination_purchase' => 8061, // 複数種類の商品を同時購入するときの商品種別数の下限
        'exist_in_each_product_groups' => TRUE,   // 複数の商品グループにつき1種類以上の商品購入によって発火するキャンペーンの指定フラグ
        'max_point_amount' => 1890,               // キャンペーンによって付与されるポイントの上限
        'max_total_point_amount' => 2988,         // キャンペーンによって付与されるの1人当たりの累計ポイントの上限
        'dest_private_money_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // ポイント付与先となるマネーID
        'applicable_account_metadata' => ["key" => "sex", "value" => "male"]
,                                                 // ウォレットに紐付くメタデータが特定の値を持つときにのみ発火するキャンペーンを登録します。
        'applicable_transaction_metadata' => ["key" => "rank", "value" => "bronze"]
,                                                 // 取引時に指定するメタデータが特定の値を持つときにのみ発火するキャンペーンを登録します。
        'budget_caps_amount' => 462263081         // キャンペーン予算上限
    ]
);
```



### Parameters
#### `name`
キャンペーン名です(必須項目)。

ポイント付与によってできるチャージ取引の説明文に転記されます。取引説明文はエンドユーザーからも確認できます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 256
}
```

</details>

#### `private_money_id`
キャンペーン対象のマネーのIDです(必須項目)。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `starts_at`
キャンペーン開始日時です(必須項目)。
キャンペーン期間中のみポイントが付与されます。
開始日時よりも終了日時が前のときはcampaign_invalid_periodエラー(422)になります。

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
キャンペーン終了日時です(必須項目)。
キャンペーン期間中のみポイントが付与されます。
開始日時よりも終了日時が前のときはcampaign_invalid_periodエラー(422)になります。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "date-time"
}
```

</details>

#### `priority`
キャンペーンの適用優先度です。

優先度が大きいものから順に適用判定されていきます。
キャンペーン期間が重なっている同一の優先度のキャンペーンが存在するとcampaign_period_overlapsエラー(422)になります。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer"
}
```

</details>

#### `event`
キャンペーンのトリガーとなるイベントの種類を指定します(必須項目)。

以下のいずれかを指定できます。

1. topup
   店舗からエンドユーザーへの送金取引(チャージ)
2. payment
   エンドユーザーから店舗への送金取引(支払い)
3. external-transaction
   ポケペイ外の取引(現金決済など)

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "enum": [
    "topup",
    "payment",
    "external-transaction"
  ]
}
```

</details>

#### `bear_point_shop_id`
ポイントを負担する店舗のIDです。デフォルトではマネー発行体の本店が設定されます。
ポイント負担先店舗は後から更新することはできません。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `description`
キャンペーンの内容を記載します。管理画面などでキャンペーンを管理するための説明文になります。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 200
}
```

</details>

#### `status`
キャンペーン作成時の状態を指定します。デフォルトではenabledです。

以下のいずれかを指定できます。

1. enabled
   有効
2. disabled
   無効

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "enum": [
    "enabled",
    "disabled"
  ]
}
```

</details>

#### `point_expires_at`
キャンペーンによって付与されるポイントの有効期限を絶対日時で指定します。
省略した場合はマネーに設定された有効期限と同じものがポイントの有効期限となります。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "date-time"
}
```

</details>

#### `point_expires_in_days`
キャンペーンによって付与されるポイントの有効期限を相対日数で指定します。
省略した場合はマネーに設定された有効期限と同じものがポイントの有効期限となります。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "minimum": 1
}
```

</details>

#### `is_exclusive`
キャンペーンの重ね掛けを行うかどうかのフラグです。

これにtrueを指定すると他のキャンペーンと同時適用されません。デフォルト値はtrueです。
falseを指定すると次の優先度の重ね掛け可能なキャンペーンの適用判定に進みます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "boolean"
}
```

</details>

#### `subject`
ポイント付与額を計算する対象となる金額の種類を指定します。デフォルト値はallです。
eventとしてexternal-transactionを指定した場合はポイントとマネーの区別がないためsubjectの指定に関わらず常にallとなります。

以下のいずれかを指定できます。

1. money
moneyを指定すると決済額の中で「マネー」を使って支払った額を対象にします

2. all
all を指定すると決済額全体を対象にします (「ポイント」での取引額を含む)
注意: event を topup にしたときはポイントの付与に対しても適用されます

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "enum": [
    "money",
    "all"
  ]
}
```

</details>

#### `amount_based_point_rules`
金額をベースとしてポイント付与を行うルールを指定します。
amount_based_point_rules と product_based_point_rules はどちらか一方しか指定できません。
各ルールは一つのみ適用され、条件に重複があった場合は先に記載されたものが優先されます。

例:
```javascript
[
  // 1000円以上、5000円未満の決済には 5％
  {
    "point_amount": 5,
    "point_amount_unit": "percent",
    "subject_more_than_or_equal": 1000,
    "subject_less_than": 5000
  },
  // 5000円以上の決済には 10%
  {
    "point_amount": 10,
    "point_amount_unit": "percent",
    "subject_more_than_or_equal": 5000
  },
]
```

<details>
<summary>スキーマ</summary>

```json
{
  "type": "array",
  "items": {
    "type": "object"
  }
}
```

</details>

#### `product_based_point_rules`
商品情報をベースとしてポイント付与を行うルールを指定します。
ルールは商品ごとに設定可能で、ルールの配列として指定します。
amount_based_point_rules と product_based_point_rules はどちらか一方しか指定できません。
event が payment か external-transaction の時のみ有効です。
各ルールの順序は問わず、適用可能なものは全て適用されます。
一つの決済の中で複数の商品がキャンペーン適用可能な場合はそれぞれの商品についてのルールが適用され、ポイント付与額はその合算になります。

例:
```javascript
[
  // 対象商品の購入額から5%ポイント付与。複数購入時は単価の5%が付与される。
  {
    "point_amount": 5,
    "point_amount_unit": "percent",
    "product_code": "4912345678904",
  },
  // 対象商品の購入額から5%ポイント付与。複数購入時は購入総額の5%が付与される。
  {
    "point_amount": 5,
    "point_amount_unit": "percent",
    "product_code": "4912345678904",
    "is_multiply_by_count": true,
  },
  // 対象商品を2つ以上購入したら500ポイント付与(固定額付与)
  {
    "point_amount": 500,
    "point_amount_unit": "absolute",
    "product_code": "4912345678904",
    "required_count": 2
  },
  // 書籍は10%ポイント付与
  // ※ISBNの形式はレジがポケペイに送信する形式に準じます
  {
    "point_amount": 10,
    "point_amount_unit": "percent",
    "product_code": "978-%",
  },
  // 一部の出版社の書籍は10%ポイント付与
  {
    "point_amount": 10,
    "point_amount_unit": "percent",
    "product_code": "978-4-01-%", // 旺文社
  }
]
```

<details>
<summary>スキーマ</summary>

```json
{
  "type": "array",
  "items": {
    "type": "object"
  }
}
```

</details>

#### `blacklisted_product_rules`
商品情報をベースとしてポイント付与を行う際に、事前に除外対象とする商品リストを指定します。
除外対象の商品コード、または分類コードのパターンの配列として指定します。
取引時には、まずここで指定した除外対象商品が除かれ、残った商品に対して `product_based_point_rules` のルール群が適用されます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "array",
  "items": {
    "type": "object"
  }
}
```

</details>

#### `applicable_days_of_week`
キャンペーンを適用する曜日を指定します (複数指定)。
曜日は整数で表します。月曜を 0 とし、日曜を 6 とします。
指定しなかった場合は全日を対象にします (曜日による適用条件なし)

<details>
<summary>スキーマ</summary>

```json
{
  "type": "array",
  "items": {
    "type": "integer",
    "minimum": 0,
    "maximum": 6
  }
}
```

</details>

#### `applicable_time_ranges`
キャンペーンを適用する時間帯を指定します (複数指定可)。
時間帯はfromとtoからなるオブジェクトで指定します。
fromとtoは両方必要です。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "array",
  "items": {
    "type": "object"
  }
}
```

</details>

#### `applicable_shop_ids`
キャンペーンを適用する店舗IDを指定します (複数指定)。
指定しなかった場合は全店舗が対象になります。

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

#### `blacklisted_shop_ids`
キャンペーンの適用対象外となる店舗IDをブラックリスト方式で指定します (複数指定可)。
このパラメータが指定されている場合、blacklisted_shop_idsに含まれていない店舗全てがキャンペーンの適用対象になります。
blacklisted_shop_idsとapplicable_shop_idsは同時には指定できません。ホワイトリスト方式を使うときはapplicable_shop_idsを指定してください。

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

#### `minimum_number_of_products`
このパラメータを指定すると、取引時の1会計内のルールに適合する商品個数がminimum_number_of_productsを超えたときにのみキャンペーンが発火するようになります。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "minimum": 1
}
```

</details>

#### `minimum_number_of_amount`
このパラメータを指定すると、取引時の1会計内のルールに適合する商品総額がminimum_number_of_amountを超えたときにのみキャンペーンが発火するようになります。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "minimum": 1
}
```

</details>

#### `minimum_number_for_combination_purchase`
複数種別の商品を同時購入したとき、同時購入キャンペーンの対象となる商品種別数の下限です。デフォルトでは未指定で、指定する場合は1以上の整数を指定します。

このパラメータを指定するときは product_based_point_rules で商品毎のルールが指定されている必要があります。
例えば、A商品とB商品とC商品のうち、キャンペーンの発火のために2商品以上が同時購入される必要があるときは 2 を指定します。

例1: 商品A, Bが同時購入されたときに固定ポイント額(200ポイント)付与
```javascript
{
  minimum_number_for_combination_purchase: 2,
  product_based_point_rules: [
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "商品Aの商品コード"
    },
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "商品Bの商品コード"
    }
  ]
}
```

例2: 商品A, Bが3個ずつ以上同時購入されたときに固定ポイント額(200ポイント)付与
```javascript
{
  minimum_number_for_combination_purchase: 2,
  product_based_point_rules: [
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "商品Aの商品コード",
      "required_count": 3
    },
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "商品Bの商品コード",
      "required_count": 3
    }
  ]
}
```

例2: 商品A, B, Cのうち2商品以上が同時購入されたときに総額の10%ポイントが付与
```javascript
{
  minimum_number_for_combination_purchase: 2,
  product_based_point_rules: [
    {
      "point_amount": 10,
      "point_amount_unit": "percent",
      "product_code": "商品Aの商品コード",
      "is_multiply_by_count": true,
    },
    {
      "point_amount": 10,
      "point_amount_unit": "percent",
      "product_code": "商品Bの商品コード",
      "is_multiply_by_count": true,
    },
    {
      "point_amount": 10,
      "point_amount_unit": "percent",
      "product_code": "商品Cの商品コード",
      "is_multiply_by_count": true,
    }
  ]
}
```

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "minimum": 1
}
```

</details>

#### `exist_in_each_product_groups`
複数の商品グループの各グループにつき1種類以上の商品が購入されることによって発火するキャンペーンであるときに真を指定します。デフォルトは偽です。

このパラメータを指定するときは product_based_point_rules で商品毎のルールが指定され、さらにその中でgroup_idが指定されている必要があります。group_idは正の整数です。
exist_in_each_product_groupsが指定されているにも関わらず商品毎のルールでgroup_idが指定されていないものが含まれている場合はinvalid_parametersエラー(missing group_id, エラーコード400)が返ります。

例えば、商品グループA(商品コードa1, a2)、商品グループB(商品コードb1, b2)の2つの商品グループがあるとします。
このとき、各商品グループからそれぞれ少なくとも1種類以上の商品が購入されることにより発火するキャンペーンに対するリクエストパラメータは以下のようなものになります。

```javascript
{
  exist_in_each_product_groups: true,
  product_based_point_rules: [
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "a1",
      "group_id": 1
    },
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "a2",
      "group_id": 1
    },
    {
      "point_amount": 200,
      "point_amount_unit": "absolute",
      "product_code": "b1",
      "group_id": 2
    },
    {
      "point_amount": 200,
      "point_amount_unit": "absolute",
      "product_code": "b2",
      "group_id": 2
    }
  ]
}
```

このキャンペーンが設定された状態で、商品a1、b1が同時に購入された場合、各商品に対する個別のルールが適用された上での総和がポイント付与値になります。つまり100 + 200=300がポイント付与値になります。商品a1、a2、 b1、b2が同時に購入された場合は100 + 100 + 200 + 200=600がポイント付与値になります。 商品a1、a2が同時に購入された場合は全商品グループから1種以上購入されるという条件を満たしていないためポイントは付与されません。

ポイント付与値を各商品毎のルールの総和ではなく固定値にしたい場合には、max_point_amountを指定します。
例えば以下のようなリクエストパラメータ指定の場合を考えます。

```javascript
{
  max_point_amount: 100,
  exist_in_each_product_groups: true,
  product_based_point_rules: [
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "a1",
      "group_id": 1
    },
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "a2",
      "group_id": 1
    },
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "b1",
      "group_id": 2
    },
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "b2",
      "group_id": 2
    }
  ]
}
```

このキャンペーンが設定された状態で、商品a1、b1が同時に購入された場合、各商品に対する個別のルールが適用された上での総和がポイント付与値になりますが、付与値の上限が100ポイントになります。つまり100 + 200=300と計算されますが上限額の100ポイントが実際の付与値になります。商品a1、a2、 b1、b2が同時に購入された場合は100 + 100 + 200 + 200=600ですが上限額の100がポイント付与値になります。 商品a1、a2が同時に購入された場合は全商品グループから1種以上購入されるという条件を満たしていないためポイントは付与されません。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "boolean"
}
```

</details>

#### `max_point_amount`
キャンペーンによって付与されるポイントの上限を指定します。デフォルトは未指定です。

このパラメータが指定されている場合、amount_based_point_rules や product_based_point_rules によって計算されるポイント付与値がmax_point_amountを越えている場合、max_point_amountの値がポイント付与値となり、越えていない場合はその値がポイント付与値となります。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "minimum": 1
}
```

</details>

#### `max_total_point_amount`
キャンペーンによって付与される1人当たりの累計ポイント数の上限を指定します。デフォルトは未指定です。

このパラメータが指定されている場合、各ユーザに対してそのキャンペーンによって過去付与されたポイントの累積値が記録されるようになります。
累積ポイント数がmax_total_point_amountを超えない限りにおいてキャンペーンで算出されたポイントが付与されます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "minimum": 1
}
```

</details>

#### `dest_private_money_id`
キャンペーンを駆動するイベントのマネーとは「別のマネー」に対してポイントを付けたいときに、そのマネーIDを指定します。

ポイント付与先のマネーはキャンペーンを駆動するイベントのマネーと同一発行体が発行しているものに限ります。その他のマネーIDが指定された場合は private_money_not_found (422) が返ります。
エンドユーザー、店舗、ポイント負担先店舗はポイント付与先マネーのウォレットを持っている必要があります。持っていない場合はポイントは付きません。
元のイベントのマネーと異なる複数のマネーに対して同時にポイントを付与することはできません。重複可能に設定されている複数のキャンペーンで別々のポイント付与先マネーを指定した場合は最も優先度の高いものが処理され、残りは無視されます。
キャンペーンのポイント付与先マネーは後から更新することはできません。
デフォルトではポイント付与先はキャンペーンを駆動するイベントのマネー(private_money_idで指定したマネー)になります。

別マネーに対するポイント付与は別のtransactionとなります。 RefundTransaction で元のイベントをキャンセルしたときはポイント付与のtransactionもキャンセルされ、逆にポイント付与のtransactionをキャンセルしたときは連動して元のイベントがキャンセルされます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "uuid"
}
```

</details>

#### `applicable_account_metadata`
ウォレットに紐付くメタデータが特定の値を持つときにのみ発火するキャンペーンを登録します。
メタデータの属性名 key とメタデータの値 value の組をオブジェクトとして指定します。
ウォレットのメタデータはCreateUserAccountやUpdateCustomerAccountで登録できます。

オプショナルパラメータtestによって比較方法を指定することができます。
デフォルトは equal で、その他に not-equalを指定可能です。

例1: 取引が行なわれたウォレットのメタデータに住所として東京が指定されているときのみ発火

```javascript
{
  "key": "prefecture",
  "value": "tokyo"
}
```

例2: 取引が行なわれたウォレットのメタデータに住所として東京以外が指定されているときのみ発火

```javascript
{
  "key": "prefecture",
  "value": "tokyo",
  "test": "not-equal"
}
```

<details>
<summary>スキーマ</summary>

```json
{
  "type": "object"
}
```

</details>

#### `applicable_transaction_metadata`
取引時に指定するメタデータが特定の値を持つときにのみ発火するキャンペーンを登録します。
メタデータの属性名 key とメタデータの値 value の組をオブジェクトとして指定します。
取引のメタデータはCreatePaymentTransactionやCreateExternalTransactionで登録できます。

オプショナルパラメータtestによって比較方法を指定することができます。
デフォルトは equal で、その他に not-equalを指定可能です。

例1: 取引のメタデータに会員ランクとしてbronzeが指定されているときのみ発火

```javascript
{
  "key": "rank",
  "value": "bronze"
}
```

例2: 取引のメタデータに会員ランクとしてbronze以外が指定されているときのみ発火

```javascript
{
  "key": "rank",
  "value": "bronze",
  "test": "not-equal"
}
```

<details>
<summary>スキーマ</summary>

```json
{
  "type": "object"
}
```

</details>

#### `budget_caps_amount`
キャンペーンの予算上限を指定します。デフォルトは未指定です。

このパラメータが指定されている場合、このキャンペーンの適用により付与されたポイント全体を定期的に集計し、その合計が上限を越えていた場合にはキャンペーンを無効にします。
一度この値を越えて無効となったキャンペーンを再度有効にすることは出来ません。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "minimum": 1,
  "maximum": 10000000000
}
```

</details>



成功したときは
[Campaign](./responses.md#campaign)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|400|invalid_parameters|項目が無効です|Invalid parameters|
|403|unpermitted_admin_user|この管理ユーザには権限がありません|Admin does not have permission|
|422|campaign_overlaps|同期間に開催されるキャンペーン間で優先度が重複してます|The campaign period overlaps under the same private-money / type / priority|
|422|shop_account_not_found|店舗アカウントが見つかりません|The shop account is not found|
|422|campaign_period_overlaps|同期間に開催されるキャンペーン間で優先度が重複してます|The campaign period overlaps under the same private-money / type / priority|
|422|campaign_invalid_period||Invalid campaign period starts_at later than ends_at|
|422|shop_user_not_found|店舗が見つかりません|The shop user is not found|
|422|private_money_not_found|マネーが見つかりません|Private money not found|



---


<a name="get-campaign"></a>
## GetCampaign: キャンペーンを取得する
IDを指定してキャンペーンを取得します。
発行体の組織マネージャ権限で、自組織が発行するマネーのキャンペーンについてのみ閲覧可能です。
閲覧権限がない場合は unpermitted_admin_user エラー(422)が返ります。

```PHP
$request = new Request\GetCampaign(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // campaignId: キャンペーンID
);
```



### Parameters
#### `campaign_id`
キャンペーンIDです。

指定したIDのキャンペーンを取得します。存在しないIDを指定した場合は404エラー(NotFound)が返ります。

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
[Campaign](./responses.md#campaign)
を返します



---


<a name="update-campaign"></a>
## UpdateCampaign: ポイント付与キャンペーンを更新する
ポイント付与キャンペーンを更新します。

```PHP
$request = new Request\UpdateCampaign(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // campaignId: キャンペーンID
    [
        'name' => "eUN",                          // キャンペーン名
        'starts_at' => "2022-06-10T00:15:20.000000Z", // キャンペーン開始日時
        'ends_at' => "2020-12-22T20:26:17.000000Z", // キャンペーン終了日時
        'priority' => 7128,                       // キャンペーンの適用優先度
        'event' => "payment",                     // イベント種別
        'description' => "IXisF2lvLdWFAH9CECfmZyvOgcw2bcIoYI3B409EBsOM5mHn7CA1SM3xNEFCgQheyCbSnP7P0SqnjQBF0gNpyvaBHzjlAdXU9fbl4BElEfYJ", // キャンペーンの説明文
        'status' => "disabled",                   // キャンペーン作成時の状態
        'point_expires_at' => "2026-06-11T07:48:11.000000Z", // ポイント有効期限(絶対日時指定)
        'point_expires_in_days' => 5411,          // ポイント有効期限(相対日数指定)
        'is_exclusive' => FALSE,                  // キャンペーンの重複設定
        'subject' => "all",                       // ポイント付与の対象金額の種別
        'amount_based_point_rules' => [["point_amount" => 5, "point_amount_unit" => "percent", "subject_more_than_or_equal" => 1000, "subject_less_than" => 5000]
],                                                // 取引金額ベースのポイント付与ルール
        'product_based_point_rules' => [["point_amount" => 5, "point_amount_unit" => "percent", "product_code" => "4912345678904", "is_multiply_by_count" => TRUE, "required_count" => 2]
],                                                // 商品情報ベースのポイント付与ルール
        'blacklisted_product_rules' => [["product_code" => "4912345678904", "classification_code" => "c123"]
, ["product_code" => "4912345678904", "classification_code" => "c123"]
],                                                // 商品情報ベースのキャンペーンで除外対象にする商品リスト
        'applicable_days_of_week' => [6],         // キャンペーンを適用する曜日 (複数指定)
        'applicable_time_ranges' => [["from" => "12:00", "to" => "23:59"]
, ["from" => "12:00", "to" => "23:59"]
],                                                // キャンペーンを適用する時間帯 (複数指定)
        'applicable_shop_ids' => ["xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"], // キャンペーン適用対象となる店舗IDのリスト
        'blacklisted_shop_ids' => ["xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"], // キャンペーン適用対象外となる店舗IDのリスト(ブラックリスト方式)
        'minimum_number_of_products' => 7833,     // キャンペーンを適用する1会計内の商品個数の下限
        'minimum_number_of_amount' => 1747,       // キャンペーンを適用する1会計内の商品総額の下限
        'minimum_number_for_combination_purchase' => 3952, // 複数種類の商品を同時購入するときの商品種別数の下限
        'exist_in_each_product_groups' => FALSE,  // 複数の商品グループにつき1種類以上の商品購入によって発火するキャンペーンの指定フラグ
        'max_point_amount' => 1767,               // キャンペーンによって付与されるポイントの上限
        'max_total_point_amount' => 784,          // キャンペーンによって付与されるの1人当たりの累計ポイントの上限
        'applicable_account_metadata' => ["key" => "sex", "value" => "male"]
,                                                 // ウォレットに紐付くメタデータが特定の値を持つときにのみ発火するキャンペーンを登録します。
        'applicable_transaction_metadata' => ["key" => "rank", "value" => "bronze"]
,                                                 // 取引時に指定するメタデータが特定の値を持つときにのみ発火するキャンペーンを登録します。
        'budget_caps_amount' => 666964785         // キャンペーン予算上限
    ]
);
```



### Parameters
#### `campaign_id`
キャンペーンIDです。

指定したIDのキャンペーンを更新します。存在しないIDを指定した場合は404エラー(NotFound)が返ります。

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
キャンペーン名です。

ポイント付与によってできるチャージ取引の説明文に転記されます。取引説明文はエンドユーザーからも確認できます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 256
}
```

</details>

#### `starts_at`
キャンペーン開始日時です。
キャンペーン期間中のみポイントが付与されます。
開始日時よりも終了日時が前のときはcampaign_invalid_periodエラー(422)になります。

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
キャンペーン終了日時です。
キャンペーン期間中のみポイントが付与されます。
開始日時よりも終了日時が前のときはcampaign_invalid_periodエラー(422)になります。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "date-time"
}
```

</details>

#### `priority`
キャンペーンの適用優先度です。

優先度が大きいものから順に適用判定されていきます。
キャンペーン期間が重なっている同一の優先度のキャンペーンが存在するとcampaign_period_overlapsエラー(422)になります。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer"
}
```

</details>

#### `event`
キャンペーンのトリガーとなるイベントの種類を指定します。

以下のいずれかを指定できます。

1. topup
   店舗からエンドユーザーへの送金取引(チャージ)
2. payment
   エンドユーザーから店舗への送金取引(支払い)
3. external-transaction
   ポケペイ外の取引(現金決済など)

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "enum": [
    "topup",
    "payment",
    "external-transaction"
  ]
}
```

</details>

#### `description`
キャンペーンの内容を記載します。管理画面などでキャンペーンを管理するための説明文になります。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 200
}
```

</details>

#### `status`
キャンペーン作成時の状態を指定します。デフォルトではenabledです。

以下のいずれかを指定できます。

1. enabled
   有効
2. disabled
   無効

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "enum": [
    "enabled",
    "disabled"
  ]
}
```

</details>

#### `point_expires_at`
キャンペーンによって付与されるポイントの有効期限を絶対日時で指定します。
省略した場合はマネーに設定された有効期限と同じものがポイントの有効期限となります。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "date-time"
}
```

</details>

#### `point_expires_in_days`
キャンペーンによって付与されるポイントの有効期限を相対日数で指定します。
省略した場合はマネーに設定された有効期限と同じものがポイントの有効期限となります。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "minimum": 1
}
```

</details>

#### `is_exclusive`
キャンペーンの重ね掛けを行うかどうかのフラグです。

これにtrueを指定すると他のキャンペーンと同時適用されません。デフォルト値はtrueです。
falseを指定すると次の優先度の重ね掛け可能なキャンペーンの適用判定に進みます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "boolean"
}
```

</details>

#### `subject`
ポイント付与額を計算する対象となる金額の種類を指定します。デフォルト値はallです。
eventとしてexternal-transactionを指定した場合はポイントとマネーの区別がないためsubjectの指定に関わらず常にallとなります。

以下のいずれかを指定できます。

1. money
moneyを指定すると決済額の中で「マネー」を使って支払った額を対象にします

2. all
all を指定すると決済額全体を対象にします (「ポイント」での取引額を含む)
注意: event を topup にしたときはポイントの付与に対しても適用されます

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "enum": [
    "money",
    "all"
  ]
}
```

</details>

#### `amount_based_point_rules`
金額をベースとしてポイント付与を行うルールを指定します。
amount_based_point_rules と product_based_point_rules はどちらか一方しか指定できません。
各ルールは一つのみ適用され、条件に重複があった場合は先に記載されたものが優先されます。

例:
```javascript
[
  // 1000円以上、5000円未満の決済には 5％
  {
    "point_amount": 5,
    "point_amount_unit": "percent",
    "subject_more_than_or_equal": 1000,
    "subject_less_than": 5000
  },
  // 5000円以上の決済には 10%
  {
    "point_amount": 10,
    "point_amount_unit": "percent",
    "subject_more_than_or_equal": 5000
  },
]
```

<details>
<summary>スキーマ</summary>

```json
{
  "type": "array",
  "items": {
    "type": "object"
  }
}
```

</details>

#### `product_based_point_rules`
商品情報をベースとしてポイント付与を行うルールを指定します。
ルールは商品ごとに設定可能で、ルールの配列として指定します。
amount_based_point_rules と product_based_point_rules はどちらか一方しか指定できません。
event が payment か external-transaction の時のみ有効です。
各ルールの順序は問わず、適用可能なものは全て適用されます。
一つの決済の中で複数の商品がキャンペーン適用可能な場合はそれぞれの商品についてのルールが適用され、ポイント付与額はその合算になります。

例:
```javascript
[
  // 対象商品の購入額から5%ポイント付与。複数購入時は単価の5%が付与される。
  {
    "point_amount": 5,
    "point_amount_unit": "percent",
    "product_code": "4912345678904",
  },
  // 対象商品の購入額から5%ポイント付与。複数購入時は購入総額の5%が付与される。
  {
    "point_amount": 5,
    "point_amount_unit": "percent",
    "product_code": "4912345678904",
    "is_multiply_by_count": true,
  },
  // 対象商品を2つ以上購入したら500ポイント付与(固定額付与)
  {
    "point_amount": 500,
    "point_amount_unit": "absolute",
    "product_code": "4912345678904",
    "required_count": 2
  },
  // 書籍は10%ポイント付与
  // ※ISBNの形式はレジがポケペイに送信する形式に準じます
  {
    "point_amount": 10,
    "point_amount_unit": "percent",
    "product_code": "978-%",
  },
  // 一部の出版社の書籍は10%ポイント付与
  {
    "point_amount": 10,
    "point_amount_unit": "percent",
    "product_code": "978-4-01-%", // 旺文社
  }
]
```

<details>
<summary>スキーマ</summary>

```json
{
  "type": "array",
  "items": {
    "type": "object"
  }
}
```

</details>

#### `blacklisted_product_rules`
商品情報をベースとしてポイント付与を行う際に、事前に除外対象とする商品リストを指定します。
除外対象の商品コード、または分類コードのパターンの配列として指定します。
取引時には、まずここで指定した除外対象商品が除かれ、残った商品に対して `product_based_point_rules` のルール群が適用されます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "array",
  "items": {
    "type": "object"
  }
}
```

</details>

#### `applicable_days_of_week`
キャンペーンを適用する曜日を指定します (複数指定)。
曜日は整数で表します。月曜を 0 とし、日曜を 6 とします。
指定しなかった場合は全日を対象にします (曜日による適用条件なし)

<details>
<summary>スキーマ</summary>

```json
{
  "type": "array",
  "items": {
    "type": "integer",
    "minimum": 0,
    "maximum": 6
  }
}
```

</details>

#### `applicable_time_ranges`
キャンペーンを適用する時間帯を指定します (複数指定可)。
時間帯はfromとtoからなるオブジェクトで指定します。
fromとtoは両方必要です。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "array",
  "items": {
    "type": "object"
  }
}
```

</details>

#### `applicable_shop_ids`
キャンペーンを適用する店舗IDを指定します (複数指定)。
指定しなかった場合は全店舗が対象になります。

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

#### `blacklisted_shop_ids`
キャンペーンの適用対象外となる店舗IDをブラックリスト方式で指定します (複数指定可)。
このパラメータが指定されている場合、blacklisted_shop_idsに含まれていない店舗全てがキャンペーンの適用対象になります。
blacklisted_shop_idsとapplicable_shop_idsは同時には指定できません。ホワイトリスト方式を使うときはapplicable_shop_idsを指定してください。

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

#### `minimum_number_of_products`
このパラメータを指定すると、取引時の1会計内のルールに適合する商品個数がminimum_number_of_productsを超えたときにのみキャンペーンが発火するようになります。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "minimum": 1
}
```

</details>

#### `minimum_number_of_amount`
このパラメータを指定すると、取引時の1会計内のルールに適合する商品総額がminimum_number_of_amountを超えたときにのみキャンペーンが発火するようになります。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "minimum": 1
}
```

</details>

#### `minimum_number_for_combination_purchase`
複数種別の商品を同時購入したとき、同時購入キャンペーンの対象となる商品種別数の下限です。

このパラメータを指定するときは product_based_point_rules で商品毎のルールが指定されている必要があります。
例えば、A商品とB商品とC商品のうち、キャンペーンの発火のために2商品以上が同時購入される必要があるときは 2 を指定します。

例1: 商品A, Bが同時購入されたときに固定ポイント額(200ポイント)付与
```javascript
{
  minimum_number_for_combination_purchase: 2,
  product_based_point_rules: [
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "商品Aの商品コード"
    },
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "商品Bの商品コード"
    }
  ]
}
```

例2: 商品A, Bが3個ずつ以上同時購入されたときに固定ポイント額(200ポイント)付与
```javascript
{
  minimum_number_for_combination_purchase: 2,
  product_based_point_rules: [
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "商品Aの商品コード",
      "required_count": 3
    },
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "商品Bの商品コード",
      "required_count": 3
    }
  ]
}
```

例2: 商品A, B, Cのうち2商品以上が同時購入されたときに総額の10%ポイントが付与
```javascript
{
  minimum_number_for_combination_purchase: 2,
  product_based_point_rules: [
    {
      "point_amount": 10,
      "point_amount_unit": "percent",
      "product_code": "商品Aの商品コード",
      "is_multiply_by_count": true,
    },
    {
      "point_amount": 10,
      "point_amount_unit": "percent",
      "product_code": "商品Bの商品コード",
      "is_multiply_by_count": true,
    },
    {
      "point_amount": 10,
      "point_amount_unit": "percent",
      "product_code": "商品Cの商品コード",
      "is_multiply_by_count": true,
    }
  ]
}
```

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "minimum": 1
}
```

</details>

#### `exist_in_each_product_groups`
複数の商品グループの各グループにつき1種類以上の商品が購入されることによって発火するキャンペーンであるときに真を指定します。デフォルトは偽です。

このパラメータを指定するときは product_based_point_rules で商品毎のルールが指定され、さらにその中でgroup_idが指定されている必要があります。group_idは正の整数です。
exist_in_each_product_groupsが指定されているにも関わらず商品毎のルールでgroup_idが指定されていないものが含まれている場合はinvalid_parametersエラー(missing group_id, エラーコード400)が返ります。

例えば、商品グループA(商品コードa1, a2)、商品グループB(商品コードb1, b2)の2つの商品グループがあるとします。
このとき、各商品グループからそれぞれ少なくとも1種類以上の商品が購入されることにより発火するキャンペーンに対するリクエストパラメータは以下のようなものになります。

```javascript
{
  exist_in_each_product_groups: true,
  product_based_point_rules: [
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "a1",
      "group_id": 1
    },
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "a2",
      "group_id": 1
    },
    {
      "point_amount": 200,
      "point_amount_unit": "absolute",
      "product_code": "b1",
      "group_id": 2
    },
    {
      "point_amount": 200,
      "point_amount_unit": "absolute",
      "product_code": "b2",
      "group_id": 2
    }
  ]
}
```

このキャンペーンが設定された状態で、商品a1、b1が同時に購入された場合、各商品に対する個別のルールが適用された上での総和がポイント付与値になります。つまり100 + 200=300がポイント付与値になります。商品a1、a2、 b1、b2が同時に購入された場合は100 + 100 + 200 + 200=600がポイント付与値になります。 商品a1、a2が同時に購入された場合は全商品グループから1種以上購入されるという条件を満たしていないためポイントは付与されません。

ポイント付与値を各商品毎のルールの総和ではなく固定値にしたい場合には、max_point_amountを指定します。
例えば以下のようなリクエストパラメータ指定の場合を考えます。

```javascript
{
  max_point_amount: 100,
  exist_in_each_product_groups: true,
  product_based_point_rules: [
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "a1",
      "group_id": 1
    },
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "a2",
      "group_id": 1
    },
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "b1",
      "group_id": 2
    },
    {
      "point_amount": 100,
      "point_amount_unit": "absolute",
      "product_code": "b2",
      "group_id": 2
    }
  ]
}
```

このキャンペーンが設定された状態で、商品a1、b1が同時に購入された場合、各商品に対する個別のルールが適用された上での総和がポイント付与値になりますが、付与値の上限が100ポイントになります。つまり100 + 200=300と計算されますが上限額の100ポイントが実際の付与値になります。商品a1、a2、 b1、b2が同時に購入された場合は100 + 100 + 200 + 200=600ですが上限額の100がポイント付与値になります。 商品a1、a2が同時に購入された場合は全商品グループから1種以上購入されるという条件を満たしていないためポイントは付与されません。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "boolean"
}
```

</details>

#### `max_point_amount`
キャンペーンによって付与される1取引当たりのポイント数の上限を指定します。デフォルトは未指定です。

このパラメータが指定されている場合、amount_based_point_rules や product_based_point_rules によって計算されるポイント付与値がmax_point_amountを越えている場合、max_point_amountの値がポイント付与値となり、越えていない場合はその値がポイント付与値となります。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "minimum": 1
}
```

</details>

#### `max_total_point_amount`
キャンペーンによって付与される1人当たりの累計ポイント数の上限を指定します。デフォルトは未指定です。

このパラメータが指定されている場合、各ユーザに対してそのキャンペーンによって過去付与されたポイントの累積値が記録されるようになります。
累積ポイント数がmax_total_point_amountを超えない限りにおいてキャンペーンで算出されたポイントが付与されます。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "minimum": 1
}
```

</details>

#### `applicable_account_metadata`
ウォレットに紐付くメタデータが特定の値を持つときにのみ発火するキャンペーンを登録します。
メタデータの属性名 key とメタデータの値 value の組をオブジェクトとして指定します。
ウォレットのメタデータはCreateUserAccountやUpdateCustomerAccountで登録できます。

オプショナルパラメータtestによって比較方法を指定することができます。
デフォルトは equal で、その他に not-equalを指定可能です。

例1: 取引が行なわれたウォレットのメタデータに住所として東京が指定されているときのみ発火

```javascript
{
  "key": "prefecture",
  "value": "tokyo"
}
```

例2: 取引が行なわれたウォレットのメタデータに住所として東京以外が指定されているときのみ発火

```javascript
{
  "key": "prefecture",
  "value": "tokyo",
  "test": "not-equal"
}
```

<details>
<summary>スキーマ</summary>

```json
{
  "type": "object"
}
```

</details>

#### `applicable_transaction_metadata`
取引時に指定するメタデータが特定の値を持つときにのみ発火するキャンペーンを登録します。
メタデータの属性名 key とメタデータの値 value の組をオブジェクトとして指定します。
取引のメタデータはCreatePaymentTransactionやCreateExternalTransactionで登録できます。

オプショナルパラメータtestによって比較方法を指定することができます。
デフォルトは equal で、その他に not-equalを指定可能です。

例1: 取引のメタデータに会員ランクとしてbronzeが指定されているときのみ発火

```javascript
{
  "key": "rank",
  "value": "bronze"
}
```

例2: 取引のメタデータに会員ランクとしてbronze以外が指定されているときのみ発火

```javascript
{
  "key": "rank",
  "value": "bronze",
  "test": "not-equal"
}
```

<details>
<summary>スキーマ</summary>

```json
{
  "type": "object"
}
```

</details>

#### `budget_caps_amount`
キャンペーンの予算上限を指定します。

キャンペーン予算上限が設定されておらずこのパラメータに数値が指定されている場合、このキャンペーンの適用により付与されたポイント全体を定期的に集計し、その合計が上限を越えていた場合にはキャンペーンを無効にします。
一度この値を越えて無効となったキャンペーンを再度有効にすることは出来ません。
キャンペーン予算上限が設定されておらずこのパラメータにnullが指定されている場合、何も発生しない。
キャンペーン予算上限が設定されておりこのパラメータにnullが指定された場合、キャンペーン予算上限は止まります。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "minimum": 1,
  "maximum": 10000000000
}
```

</details>



成功したときは
[Campaign](./responses.md#campaign)
を返します



---



