# Bill
支払いQRコード

<a name="list-bills"></a>
## 支払いQRコード一覧を表示する
支払いQRコード一覧を表示します。

```PHP
$request = new Request\ListBills(
    [
        'page' => 6138,                           // ページ番号
        'per_page' => 8927,                       // 1ページの表示数
        'bill_id' => "T",                         // 支払いQRコードのID
        'private_money_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // マネーID
        'organization_code' => "xs6VNjs2Mf2--N-VxoE9n6N1iQ3v", // 組織コード
        'description' => "test bill",             // 取引説明文
        'created_from' => "2023-03-22T05:00:31.000000+09:00", // 作成日時(起点)
        'created_to' => "2024-02-06T00:24:19.000000+09:00", // 作成日時(終点)
        'shop_name' => "bill test shop1",         // 店舗名
        'shop_id' => "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx", // 店舗ID
        'lower_limit_amount' => 3980,             // 金額の範囲によるフィルタ(下限)
        'upper_limit_amount' => 6980,             // 金額の範囲によるフィルタ(上限)
        'is_disabled' => TRUE                     // 支払いQRコードが無効化されているかどうか
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
  

1ページに表示する支払いQRコードの数です。

```json
{
  "type": "integer",
  "minimum": 1
}
```

**`bill_id`** 
  

支払いQRコードのIDを指定して検索します。IDは前方一致で検索されます。

```json
{
  "type": "string"
}
```

**`private_money_id`** 
  

支払いQRコードの送金元ウォレットのマネーIDでフィルターします。

```json
{
  "type": "string",
  "format": "uuid"
}
```

**`organization_code`** 
  

支払いQRコードの送金元店舗が所属する組織の組織コードでフィルターします。

```json
{
  "type": "string",
  "maxLength": 32,
  "pattern": "^[a-zA-Z0-9-]*$"
}
```

**`description`** 
  

支払いQRコードを読み取ることで作られた取引の説明文としてアプリなどに表示されます。

```json
{
  "type": "string",
  "maxLength": 200
}
```

**`created_from`** 
  

支払いQRコードの作成日時でフィルターします。

これ以降に作成された支払いQRコードのみ一覧に表示されます。

```json
{
  "type": "string",
  "format": "date-time"
}
```

**`created_to`** 
  

支払いQRコードの作成日時でフィルターします。

これ以前に作成された支払いQRコードのみ一覧に表示されます。

```json
{
  "type": "string",
  "format": "date-time"
}
```

**`shop_name`** 
  

支払いQRコードを作成した店舗名でフィルターします。店舗名は部分一致で検索されます。

```json
{
  "type": "string",
  "maxLength": 256
}
```

**`shop_id`** 
  

支払いQRコードを作成した店舗IDでフィルターします。

```json
{
  "type": "string",
  "format": "uuid"
}
```

**`lower_limit_amount`** 
  

支払いQRコードの金額の下限を指定してフィルターします。

```json
{
  "type": "integer",
  "format": "decimal",
  "minimum": 0
}
```

**`upper_limit_amount`** 
  

支払いQRコードの金額の上限を指定してフィルターします。

```json
{
  "type": "integer",
  "format": "decimal",
  "minimum": 0
}
```

**`is_disabled`** 
  

支払いQRコードが無効化されているかどうかを表します。デフォルト値は偽(有効)です。

```json
{
  "type": "boolean"
}
```



成功したときは
[PaginatedBills](./responses.md#paginated-bills)
を返します


---


<a name="create-bill"></a>
## 支払いQRコードの発行
支払いQRコードの内容を更新します。支払い先の店舗ユーザーは指定したマネーのウォレットを持っている必要があります。

```PHP
$request = new Request\CreateBill(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // privateMoneyId: 支払いマネーのマネーID
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // shopId: 支払い先(受け取り人)の店舗ID
    [
        'amount' => 1684.0,                       // 支払い額
        'description' => "test bill"              // 説明文(アプリ上で取引の説明文として表示される)
    ]
);
```



### Parameters
**`amount`** 
  

支払いQRコードを支払い額を指定します。省略するかnullを渡すと任意金額の支払いQRコードとなり、エンドユーザーがアプリで読み取った際に金額を入力します。

```json
{
  "type": "number",
  "format": "decimal",
  "minimum": 0
}
```

**`private_money_id`** 
  


```json
{
  "type": "string",
  "format": "uuid"
}
```

**`shop_id`** 
  


```json
{
  "type": "string",
  "format": "uuid"
}
```

**`description`** 
  


```json
{
  "type": "string",
  "maxLength": 200
}
```



成功したときは
[Bill](./responses.md#bill)
を返します


---


<a name="update-bill"></a>
## 支払いQRコードの更新
支払いQRコードの内容を更新します。パラメータは全て省略可能で、指定したもののみ更新されます。

```PHP
$request = new Request\UpdateBill(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // billId: 支払いQRコードのID
    [
        'amount' => 9656.0,                       // 支払い額
        'description' => "test bill",             // 説明文
        'is_disabled' => TRUE                     // 無効化されているかどうか
    ]
);
```



### Parameters
**`bill_id`** 
  

更新対象の支払いQRコードのIDです。

```json
{
  "type": "string",
  "format": "uuid"
}
```

**`amount`** 
  

支払いQRコードを支払い額を指定します。nullを渡すと任意金額の支払いQRコードとなり、エンドユーザーがアプリで読み取った際に金額を入力します。

```json
{
  "type": "number",
  "format": "decimal",
  "minimum": 0
}
```

**`description`** 
  

支払いQRコードの詳細説明文です。アプリ上で取引の説明文として表示されます。

```json
{
  "type": "string",
  "maxLength": 200
}
```

**`is_disabled`** 
  

支払いQRコードが無効化されているかどうかを指定します。真にすると無効化され、偽にすると有効化します。

```json
{
  "type": "boolean"
}
```



成功したときは
[Bill](./responses.md#bill)
を返します


---



