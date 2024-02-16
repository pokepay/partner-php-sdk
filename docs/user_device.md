# UserDevice
UserDeviceはユーザー毎のデバイスを管理します。
あるユーザーが使っている端末を区別する必要がある場合に用いられます。
これが必要な理由はBank Payを用いたチャージを行う場合は端末を区別できることが要件としてあるためです。


<a name="create-user-device"></a>
## #<HEADING (N 2 TEXT CreateUserDevice)>: ユーザーのデバイス登録
ユーザーのデバイスを新規に登録します

```PHP
$request = new Request\CreateUserDevice(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx",       // userId: ユーザーID
    [
        'metadata' => "{\"user_agent\": \"Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:120.0) Gecko/20100101 Firefox/120.0\"}" // ユーザーデバイスのメタデータ
    ]
);
```



### Parameters
**`user_id`** 
  


```json
{
  "type": "string",
  "format": "uuid"
}
```

**`metadata`** 
  

ユーザーのデバイス用の情報をメタデータを保持するために用います。
例: 端末の固有情報やブラウザのUser-Agent


```json
{
  "type": "string",
  "format": "json"
}
```



成功したときは
[UserDevice](./responses.md#user-device)
を返します


---


<a name="get-user-device"></a>
## #<HEADING (N 2 TEXT GetUserDevice)>: ユーザーのデバイスを取得
ユーザーのデバイスの情報を取得します

```PHP
$request = new Request\GetUserDevice(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // userDeviceId: ユーザーデバイスID
);
```



### Parameters
**`user_device_id`** 
  


```json
{
  "type": "string",
  "format": "uuid"
}
```



成功したときは
[UserDevice](./responses.md#user-device)
を返します


---


<a name="activate-user-device"></a>
## #<HEADING (N 2 TEXT ActivateUserDevice)>: デバイスの有効化
指定のデバイスを有効化し、それ以外の同一ユーザーのデバイスを無効化します。


```PHP
$request = new Request\ActivateUserDevice(
    "xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx"        // userDeviceId: ユーザーデバイスID
);
```



### Parameters
**`user_device_id`** 
  


```json
{
  "type": "string",
  "format": "uuid"
}
```



成功したときは
[UserDevice](./responses.md#user-device)
を返します


---



