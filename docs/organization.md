# Organization

<a name="list-organizations"></a>
## ListOrganizations: 加盟店組織の一覧を取得する

```PHP
$request = new Request\ListOrganizations(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: マネーID
    [
        'page' => 1,                              // ページ番号
        'per_page' => 50,                         // 1ページ分の取引数
        'name' => "GERnFdcW",                     // 組織名
        'code' => "SdaJfJ60D"                     // 組織コード
    ]
);
```



### Parameters
**`private_money_id`** 
  

マネーIDです。
このマネーに加盟している加盟組織がフィルターされます。

```json
{
  "type": "string",
  "format": "uuid"
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
  

1ページ分の取引数です。

```json
{
  "type": "integer",
  "minimum": 1
}
```

**`name`** 
  


```json
{
  "type": "string"
}
```

**`code`** 
  


```json
{
  "type": "string"
}
```



成功したときは
[PaginatedOrganizations](./responses.md#paginated-organizations)
を返します


---


<a name="create-organization"></a>
## CreateOrganization: 新規加盟店組織を追加する

```PHP
$request = new Request\CreateOrganization(
    "ox-supermarket",                             // code: 新規組織コード
    "oxスーパー",                                     // name: 新規組織名
    ["xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"],     // privateMoneyIds: 加盟店組織で有効にするマネーIDの配列
    "H2T0aKhnL3@FlnA.com",                        // issuerAdminUserEmail: 発行体担当者メールアドレス
    "D82QrpYaKu@slNr.com",                        // memberAdminUserEmail: 新規組織担当者メールアドレス
    [
        'bank_name' => "XYZ銀行",                   // 銀行名
        'bank_code' => "1234",                    // 銀行金融機関コード
        'bank_branch_name' => "ABC支店",            // 銀行支店名
        'bank_branch_code' => "123",              // 銀行支店コード
        'bank_account_type' => "current",         // 銀行口座種別 (普通=saving, 当座=current, その他=other)
        'bank_account' => "1234567",              // 銀行口座番号
        'bank_account_holder_name' => "ﾌｸｻﾞﾜﾕｷﾁ", // 口座名義人名
        'contact_name' => "佐藤清"                   // 担当者名
    ]
);
```



### Parameters
**`code`** 
  


```json
{
  "type": "string",
  "maxLength": 32
}
```

**`name`** 
  


```json
{
  "type": "string",
  "maxLength": 256
}
```

**`private_money_ids`** 
  


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

**`issuer_admin_user_email`** 
  


```json
{
  "type": "string",
  "format": "email"
}
```

**`member_admin_user_email`** 
  


```json
{
  "type": "string",
  "format": "email"
}
```

**`bank_name`** 
  


```json
{
  "type": "string",
  "maxLength": 64
}
```

**`bank_code`** 
  


```json
{
  "type": "string",
  "pattern": "^$|^[0-9]{4}$"
}
```

**`bank_branch_name`** 
  


```json
{
  "type": "string",
  "maxLength": 64
}
```

**`bank_branch_code`** 
  


```json
{
  "type": "string",
  "pattern": "^(|[0-9]{3})$"
}
```

**`bank_account_type`** 
  


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

**`bank_account`** 
  


```json
{
  "type": "string",
  "maxLength": 7,
  "pattern": "[0-9]{0,7}"
}
```

**`bank_account_holder_name`** 
  


```json
{
  "type": "string",
  "maxLength": 30,
  "pattern": "^[0-9A-Zｦｱ-ﾟ (-),-/\\\\｢-｣]$"
}
```

**`contact_name`** 
  


```json
{
  "type": "string",
  "maxLength": 256
}
```



成功したときは
[Organization](./responses.md#organization)
を返します


---



