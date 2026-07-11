# Organization
組織（発行体・加盟店組織）を表すデータです。
Pokepay上でマネーを発行する発行体や、店舗を束ねる加盟店組織を管理します。
組織には組織コード、組織名、本社情報などが含まれます。
組織配下に複数の店舗（Shop）を持つことができます。


<a name="list-organizations"></a>
## ListOrganizations: 加盟店組織の一覧を取得する

```PHP
$request = new Request\ListOrganizations(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    [
        'page' => 1,                              // ページ番号
        'per_page' => 50,                         // 1ページ分の取引数
        'name' => "zO75yHWR",                     // 組織名
        'code' => "FLMa9C"                        // 組織コード
    ]
);
```



### Parameters
#### `private_money_id`
マネーIDです。
このマネーに加盟している加盟組織がフィルターされます。

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
1ページ分の取引数です。

<details>
<summary>スキーマ</summary>

```json
{
  "type": "integer",
  "minimum": 1
}
```

</details>

#### `name`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string"
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



成功したときは
[PaginatedOrganizations](./responses.md#paginated-organizations)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|400|invalid_parameters|項目が無効です|Invalid parameters|
|403|unpermitted_admin_user|この管理ユーザには権限がありません|Admin does not have permission|
|422|private_money_not_found|マネーが見つかりません|Private money not found|



---


<a name="create-organization"></a>
## CreateOrganization: 新規加盟店組織を追加する

```PHP
$request = new Request\CreateOrganization(
    "ox-supermarket",                             // code: 新規組織コード
    "oxスーパー",                                     // name: 新規組織名
    ["xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"], // privateMoneyIds: 加盟店組織で有効にするマネーIDの配列
    "O3GmqQepv7@doxp.com",                        // issuerAdminUserEmail: 発行体担当者メールアドレス
    "RjgZI2VSDv@LJkk.com",                        // memberAdminUserEmail: 新規組織担当者メールアドレス
    [
        'bank_name' => "XYZ銀行",                   // 銀行名
        'bank_code' => "1234",                    // 銀行金融機関コード
        'bank_branch_name' => "ABC支店",            // 銀行支店名
        'bank_branch_code' => "123",              // 銀行支店コード
        'bank_account_type' => "other",           // 銀行口座種別 (普通=saving, 当座=current, その他=other)
        'bank_account' => "1234567",              // 銀行口座番号
        'bank_account_holder_name' => "ﾌｸｻﾞﾜﾕｷﾁ", // 口座名義人名
        'contact_name' => "佐藤清"                   // 担当者名
    ]
);
```



### Parameters
#### `code`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 32
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

#### `private_money_ids`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "array",
  "minItems": 1,
  "items": {
    "type": "string",
    "format": "uuid"
  }
}
```

</details>

#### `issuer_admin_user_email`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "email"
}
```

</details>

#### `member_admin_user_email`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "format": "email"
}
```

</details>

#### `bank_name`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 64
}
```

</details>

#### `bank_code`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "pattern": "^$|^[0-9]{4}$"
}
```

</details>

#### `bank_branch_name`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 64
}
```

</details>

#### `bank_branch_code`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "pattern": "^(|[0-9]{3})$"
}
```

</details>

#### `bank_account_type`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "enum": [
    "saving",
    "current",
    "other"
  ]
}
```

</details>

#### `bank_account`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 7,
  "pattern": "[0-9]{0,7}"
}
```

</details>

#### `bank_account_holder_name`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 30,
  "pattern": "^[0-9A-Zｦｱ-ﾟ (-),-/\\\\｢-｣]$"
}
```

</details>

#### `contact_name`

<details>
<summary>スキーマ</summary>

```json
{
  "type": "string",
  "maxLength": 64
}
```

</details>



成功したときは
[Organization](./responses.md#organization)
を返します

### Error Responses
|status|type|ja|en|
|---|---|---|---|
|400|invalid_parameters|項目が無効です|Invalid parameters|
|403|NULL|NULL|NULL|
|409|organization_conflict||The organization code is already used|
|409|organization_invoice_registration_number_conflict|この登録番号は既に登録されています|The invoice registration number is conflict|
|409|shop_name_conflict||The shop name is already used|
|422|organization_private_money_not_found||Issuer organization does not have private-money|
|422|unavailable_private_money||Given private money(s) is/are not available|
|422|organization_application_setting_not_found|加盟店申込み設定が見つかりません|Organization application setting not found|
|503|failed_to_send_email||Failed to send an E-mail.|
|503|temporarily_unavailable||Service Unavailable|



---



