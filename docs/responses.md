# Responses
<a name="account-with-user"></a>
## AccountWithUser
* `id (string)`: 
* `name (string)`: 
* `isSuspended (boolean)`: 
* `status (string)`: 
* `privateMoney (PrivateMoney)`: 
* `user (User)`: 

`private_money`は [PrivateMoney](#private-money) オブジェクトを返します。

`user`は [User](#user) オブジェクトを返します。

<a name="account-detail"></a>
## AccountDetail
* `id (string)`: 
* `name (string)`: 
* `isSuspended (boolean)`: 
* `status (string)`: 
* `balance (double)`: 
* `moneyBalance (double)`: 
* `pointBalance (double)`: 
* `pointDebt (double)`: 
* `privateMoney (PrivateMoney)`: 
* `user (User)`: 
* `externalId (string|null)`: 

`private_money`は [PrivateMoney](#private-money) オブジェクトを返します。

`user`は [User](#user) オブジェクトを返します。

<a name="account-deleted"></a>
## AccountDeleted

<a name="bill"></a>
## Bill
* `id (string)`: 支払いQRコードのID
* `amount (double|null)`: 支払い額
* `maxAmount (double|null)`: 支払い額を範囲指定した場合の上限
* `minAmount (double|null)`: 支払い額を範囲指定した場合の下限
* `description (string)`: 支払いQRコードの説明文(アプリ上で取引の説明文として表示される)
* `account (AccountWithUser)`: 支払いQRコード発行ウォレット
* `isDisabled (boolean)`: 無効化されているかどうか
* `token (string)`: 支払いQRコードを解析したときに出てくるURL

`account`は [AccountWithUser](#account-with-user) オブジェクトを返します。

<a name="check"></a>
## Check
* `id (string)`: チャージQRコードのID
* `createdAt (\DateTime)`: チャージQRコードの作成日時
* `amount (double)`: チャージマネー額 (deprecated)
* `moneyAmount (double)`: チャージマネー額
* `pointAmount (double)`: チャージポイント額
* `description (string)`: チャージQRコードの説明文(アプリ上で取引の説明文として表示される)
* `user (User)`: 送金元ユーザ情報
* `isOnetime (boolean)`: 使用回数が一回限りかどうか
* `isDisabled (boolean)`: 無効化されているかどうか
* `expiresAt (\DateTime)`: チャージQRコード自体の失効日時
* `lastUsedAt (\DateTime|null)`: 
* `privateMoney (PrivateMoney)`: 対象マネー情報
* `usageLimit (integer|null)`: 一回限りでない場合の最大読み取り回数
* `usageCount (double|null)`: 一回限りでない場合の現在までに読み取られた回数
* `pointExpiresAt (\DateTime|null)`: ポイント有効期限(絶対日数指定)
* `pointExpiresInDays (integer|null)`: ポイント有効期限(相対日数指定)
* `token (string)`: チャージQRコードを解析したときに出てくるURL

`user`は [User](#user) オブジェクトを返します。

`private_money`は [PrivateMoney](#private-money) オブジェクトを返します。

<a name="paginated-checks"></a>
## PaginatedChecks
* `rows (Check[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [Check](#check) オブジェクトの配列を返します。

`pagination`は [Pagination](#pagination) オブジェクトを返します。

<a name="cpm-token"></a>
## CpmToken
* `cpmToken (string)`: 
* `account (AccountDetail)`: 
* `transaction (Transaction|null)`: 
* `event (ExternalTransaction|null)`: 
* `scopes (string[])`: 許可された取引種別
* `expiresAt (\DateTime)`: CPMトークンの失効日時
* `metadata (string)`: エンドユーザー側メタデータ

`account`は [AccountDetail](#account-detail) オブジェクトを返します。

`transaction`は [Transaction](#transaction) オブジェクトを返します。

`event`は [ExternalTransaction](#external-transaction) オブジェクトを返します。

<a name="cashtray"></a>
## Cashtray
* `id (string)`: Cashtray自体のIDです。
* `amount (double)`: 取引金額
* `description (string)`: Cashtrayの説明文
* `account (AccountWithUser)`: 発行店舗のウォレット
* `expiresAt (\DateTime)`: Cashtrayの失効日時
* `canceledAt (\DateTime|null)`: Cashtrayの無効化日時。NULLの場合は無効化されていません
* `token (string)`: CashtrayのQRコードを解析したときに出てくるURL

`account`は [AccountWithUser](#account-with-user) オブジェクトを返します。

<a name="cashtray-with-result"></a>
## CashtrayWithResult
* `id (string)`: CashtrayのID
* `amount (double)`: 取引金額
* `description (string)`: Cashtrayの説明文(アプリ上で取引の説明文として表示される)
* `account (AccountWithUser)`: 発行店舗のウォレット
* `expiresAt (\DateTime)`: Cashtrayの失効日時
* `canceledAt (\DateTime|null)`: Cashtrayの無効化日時。NULLの場合は無効化されていません
* `token (string)`: CashtrayのQRコードを解析したときに出てくるURL
* `attempt (CashtrayAttempt|null)`: Cashtray読み取り結果
* `transaction (Transaction|null)`: 取引結果

`account`は [AccountWithUser](#account-with-user) オブジェクトを返します。

`attempt`は [CashtrayAttempt](#cashtray-attempt) オブジェクトを返します。

`transaction`は [Transaction](#transaction) オブジェクトを返します。

<a name="user"></a>
## User
* `id (string)`: ユーザー (または店舗) ID
* `name (string)`: ユーザー (または店舗) 名
* `isMerchant (boolean)`: 店舗ユーザーかどうか

<a name="organization"></a>
## Organization
* `code (string)`: 組織コード
* `name (string)`: 組織名

<a name="transaction-detail"></a>
## TransactionDetail
* `id (string)`: 取引ID
* `type (string)`: 取引種別
* `isModified (boolean)`: 返金された取引かどうか
* `sender (User)`: 送金者情報
* `senderAccount (Account)`: 送金ウォレット情報
* `receiver (User)`: 受取者情報
* `receiverAccount (Account)`: 受取ウォレット情報
* `amount (double)`: 取引総額 (マネー額 + ポイント額)
* `moneyAmount (double)`: 取引マネー額
* `pointAmount (double)`: 取引ポイント額(キャンペーン付与ポイント合算)
* `rawPointAmount (double)`: 取引ポイント額
* `campaignPointAmount (double)`: キャンペーンによるポイント付与額
* `doneAt (\DateTime)`: 取引日時
* `description (string)`: 取引説明文
* `transfers (Transfer[])`: 

`receiver`と`sender`は [User](#user) オブジェクトを返します。

`receiver_account`と`sender_account`は [Account](#account) オブジェクトを返します。

`transfers`は [Transfer](#transfer) オブジェクトの配列を返します。

<a name="shop-with-accounts"></a>
## ShopWithAccounts
* `id (string)`: 店舗ID
* `name (string)`: 店舗名
* `organizationCode (string)`: 組織コード
* `status (string)`: 店舗の状態
* `postalCode (string|null)`: 店舗の郵便番号
* `address (string|null)`: 店舗の住所
* `tel (string|null)`: 店舗の電話番号
* `email (string|null)`: 店舗のメールアドレス
* `externalId (string|null)`: 店舗の外部ID
* `accounts (ShopAccount[])`: 

`accounts`は [ShopAccount](#shop-account) オブジェクトの配列を返します。

<a name="bulk-transaction"></a>
## BulkTransaction
* `id (string)`: 
* `requestId (string)`: リクエストID
* `name (string)`: バルク取引管理用の名前
* `description (string)`: バルク取引管理用の説明文
* `status (string)`: バルク取引の状態
* `error (string|null)`: バルク取引のエラー種別
* `errorLineno (integer|null)`: バルク取引のエラーが発生した行番号
* `submittedAt (\DateTime)`: バルク取引が登録された日時
* `updatedAt (\DateTime)`: バルク取引が更新された日時

<a name="paginated-bulk-transaction-job"></a>
## PaginatedBulkTransactionJob
* `rows (BulkTransactionJob[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [BulkTransactionJob](#bulk-transaction-job) オブジェクトの配列を返します。

`pagination`は [Pagination](#pagination) オブジェクトを返します。

<a name="external-transaction-detail"></a>
## ExternalTransactionDetail
* `id (string)`: ポケペイ外部取引ID
* `isModified (boolean)`: 返金された取引かどうか
* `sender (User)`: 送金者情報
* `senderAccount (Account)`: 送金ウォレット情報
* `receiver (User)`: 受取者情報
* `receiverAccount (Account)`: 受取ウォレット情報
* `amount (double)`: 決済額
* `doneAt (\DateTime)`: 取引日時
* `description (string)`: 取引説明文
* `transaction (TransactionDetail|null)`: 関連ポケペイ取引詳細

`receiver`と`sender`は [User](#user) オブジェクトを返します。

`receiver_account`と`sender_account`は [Account](#account) オブジェクトを返します。

`transaction`は [TransactionDetail](#transaction-detail) オブジェクトを返します。

<a name="paginated-private-money-organization-summaries"></a>
## PaginatedPrivateMoneyOrganizationSummaries
* `rows (PrivateMoneyOrganizationSummary[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [PrivateMoneyOrganizationSummary](#private-money-organization-summary) オブジェクトの配列を返します。

`pagination`は [Pagination](#pagination) オブジェクトを返します。

<a name="private-money-summary"></a>
## PrivateMoneySummary
* `topupAmount (double)`: 
* `refundedTopupAmount (double)`: 
* `paymentAmount (double)`: 
* `refundedPaymentAmount (double)`: 
* `addedPointAmount (double)`: 
* `topupPointAmount (double)`: 
* `campaignPointAmount (double)`: 
* `refundedAddedPointAmount (double)`: 
* `exchangeInflowAmount (double)`: 
* `exchangeOutflowAmount (double)`: 
* `transactionCount (integer)`: 

<a name="user-stats-operation"></a>
## UserStatsOperation
* `id (string)`: 集計処理ID
* `from (\DateTime)`: 集計期間の開始時刻
* `to (\DateTime)`: 集計期間の終了時刻
* `status (string)`: 集計処理の実行ステータス
* `errorReason (string|null)`: エラーとなった理由
* `doneAt (\DateTime|null)`: 集計処理の完了時刻
* `fileUrl (string|null)`: 集計結果のCSVのダウンロードURL
* `requestedAt (\DateTime)`: 集計リクエストを行った時刻

<a name="user-device"></a>
## UserDevice
* `id (string)`: デバイスID
* `user (User)`: デバイスを使用するユーザ
* `isActive (boolean)`: デバイスが有効か
* `metadata (string)`: デバイスのメタデータ

`user`は [User](#user) オブジェクトを返します。

<a name="bank-registering-info"></a>
## BankRegisteringInfo
* `redirectUrl (string)`: 
* `paytreeCustomerNumber (string|null)`: 

<a name="banks"></a>
## Banks
* `rows (Bank[])`: 
* `count (integer)`: 

`rows`は [Bank](#bank) オブジェクトの配列を返します。

<a name="bank-deleted"></a>
## BankDeleted

<a name="paginated-transaction"></a>
## PaginatedTransaction
* `rows (Transaction[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [Transaction](#transaction) オブジェクトの配列を返します。

`pagination`は [Pagination](#pagination) オブジェクトを返します。

<a name="paginated-transaction-v2"></a>
## PaginatedTransactionV2
* `rows (Transaction[])`: 
* `perPage (integer)`: 
* `count (integer)`: 
* `nextPageCursorId (string|null)`: 
* `prevPageCursorId (string|null)`: 

`rows`は [Transaction](#transaction) オブジェクトの配列を返します。

<a name="paginated-bill-transaction"></a>
## PaginatedBillTransaction
* `rows (BillTransaction[])`: 
* `perPage (integer)`: 
* `count (integer)`: 
* `nextPageCursorId (string|null)`: 
* `prevPageCursorId (string|null)`: 

`rows`は [BillTransaction](#bill-transaction) オブジェクトの配列を返します。

<a name="paginated-transfers"></a>
## PaginatedTransfers
* `rows (Transfer[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [Transfer](#transfer) オブジェクトの配列を返します。

`pagination`は [Pagination](#pagination) オブジェクトを返します。

<a name="paginated-transfers-v2"></a>
## PaginatedTransfersV2
* `rows (Transfer[])`: 
* `perPage (integer)`: 
* `count (integer)`: 
* `nextPageCursorId (string|null)`: 
* `prevPageCursorId (string|null)`: 

`rows`は [Transfer](#transfer) オブジェクトの配列を返します。

<a name="paginated-account-with-users"></a>
## PaginatedAccountWithUsers
* `rows (AccountWithUser[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [AccountWithUser](#account-with-user) オブジェクトの配列を返します。

`pagination`は [Pagination](#pagination) オブジェクトを返します。

<a name="paginated-account-details"></a>
## PaginatedAccountDetails
* `rows (AccountDetail[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [AccountDetail](#account-detail) オブジェクトの配列を返します。

`pagination`は [Pagination](#pagination) オブジェクトを返します。

<a name="paginated-account-balance"></a>
## PaginatedAccountBalance
* `rows (AccountBalance[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [AccountBalance](#account-balance) オブジェクトの配列を返します。

`pagination`は [Pagination](#pagination) オブジェクトを返します。

<a name="paginated-shops"></a>
## PaginatedShops
* `rows (ShopWithMetadata[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [ShopWithMetadata](#shop-with-metadata) オブジェクトの配列を返します。

`pagination`は [Pagination](#pagination) オブジェクトを返します。

<a name="paginated-bills"></a>
## PaginatedBills
* `rows (Bill[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [Bill](#bill) オブジェクトの配列を返します。

`pagination`は [Pagination](#pagination) オブジェクトを返します。

<a name="paginated-private-moneys"></a>
## PaginatedPrivateMoneys
* `rows (PrivateMoney[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [PrivateMoney](#private-money) オブジェクトの配列を返します。

`pagination`は [Pagination](#pagination) オブジェクトを返します。

<a name="campaign"></a>
## Campaign
* `id (string)`: キャンペーンID
* `name (string)`: キャペーン名
* `applicableShops (User[]|null)`: キャンペーン適用対象の店舗リスト
* `isExclusive (boolean)`: キャンペーンの重複を許すかどうかのフラグ
* `startsAt (\DateTime)`: キャンペーン開始日時
* `endsAt (\DateTime)`: キャンペーン終了日時
* `pointExpiresAt (\DateTime|null)`: キャンペーンによって付与されるポイントの失効日時
* `pointExpiresInDays (integer|null)`: キャンペーンによって付与されるポイントの有効期限(相対指定、単位は日)
* `priority (integer)`: キャンペーンの優先順位
* `description (string)`: キャンペーン説明文
* `bearPointShop (User)`: ポイントを負担する店舗
* `privateMoney (PrivateMoney)`: キャンペーンを適用するマネー
* `destPrivateMoney (PrivateMoney)`: ポイントを付与するマネー
* `maxTotalPointAmount (integer|null)`: 一人当たりの累計ポイント上限
* `pointCalculationRule (string)`: ポイント計算ルール (banklisp表記)
* `pointCalculationRuleObject (string)`: ポイント計算ルール (JSON文字列による表記)
* `status (string)`: キャンペーンの現在の状態
* `budgetCapsAmount (integer|null)`: キャンペーンの予算上限額
* `budgetCurrentAmount (integer|null)`: キャンペーンの付与合計額
* `budgetCurrentTime (\DateTime|null)`: キャンペーンの付与集計日時

`applicable-shops`は [User](#user) オブジェクトの配列を返します。

`bear_point_shop`は [User](#user) オブジェクトを返します。

`dest_private_money`と`private_money`は [PrivateMoney](#private-money) オブジェクトを返します。

<a name="paginated-campaigns"></a>
## PaginatedCampaigns
* `rows (Campaign[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [Campaign](#campaign) オブジェクトの配列を返します。

`pagination`は [Pagination](#pagination) オブジェクトを返します。

<a name="account-transfer-summary"></a>
## AccountTransferSummary
* `summaries (AccountTransferSummaryElement[])`: 

`summaries`は [AccountTransferSummaryElement](#account-transfer-summary-element) オブジェクトの配列を返します。

<a name="organization-worker-task-webhook"></a>
## OrganizationWorkerTaskWebhook
* `id (string)`: 
* `organizationCode (string)`: 
* `task (string)`: 
* `url (string)`: 
* `contentType (string)`: 
* `isActive (boolean)`: 

<a name="paginated-organization-worker-task-webhook"></a>
## PaginatedOrganizationWorkerTaskWebhook
* `rows (OrganizationWorkerTaskWebhook[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [OrganizationWorkerTaskWebhook](#organization-worker-task-webhook) オブジェクトの配列を返します。

`pagination`は [Pagination](#pagination) オブジェクトを返します。

<a name="coupon-detail"></a>
## CouponDetail
* `id (string)`: クーポンID
* `name (string)`: クーポン名
* `issuedShop (User)`: クーポン発行店舗
* `description (string)`: クーポンの説明文
* `discountAmount (integer|null)`: クーポンによる値引き額(絶対値指定)
* `discountPercentage (double|null)`: クーポンによる値引き率
* `discountUpperLimit (integer|null)`: クーポンによる値引き上限(値引き率が指定された場合の値引き上限額)
* `startsAt (\DateTime)`: クーポンの利用可能期間(開始日時)
* `endsAt (\DateTime)`: クーポンの利用可能期間(終了日時)
* `displayStartsAt (\DateTime)`: クーポンの掲載期間(開始日時)
* `displayEndsAt (\DateTime)`: クーポンの掲載期間(終了日時)
* `usageLimit (integer|null)`: ユーザごとの利用可能回数(NULLの場合は無制限)
* `minAmount (integer|null)`: クーポン適用可能な最小取引額
* `isShopSpecified (boolean)`: 特定店舗限定のクーポンかどうか
* `isHidden (boolean)`: クーポン一覧に掲載されるかどうか
* `isPublic (boolean)`: アプリ配信なしで受け取れるかどうか
* `code (string|null)`: クーポン受け取りコード
* `isDisabled (boolean)`: 無効化フラグ
* `token (string)`: クーポンを特定するためのトークン
* `couponImage (string|null)`: クーポン画像のURL
* `availableShops (User[])`: 利用可能店舗リスト
* `privateMoney (PrivateMoney)`: クーポンのマネー

`issued_shop`は [User](#user) オブジェクトを返します。

`available-shops`は [User](#user) オブジェクトの配列を返します。

`private_money`は [PrivateMoney](#private-money) オブジェクトを返します。

<a name="paginated-coupons"></a>
## PaginatedCoupons
* `rows (Coupon[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [Coupon](#coupon) オブジェクトの配列を返します。

`pagination`は [Pagination](#pagination) オブジェクトを返します。

<a name="paginated-organizations"></a>
## PaginatedOrganizations
* `rows (Organization[])`: 
* `count (integer)`: 
* `pagination (Pagination)`: 

`rows`は [Organization](#organization) オブジェクトの配列を返します。

`pagination`は [Pagination](#pagination) オブジェクトを返します。

<a name="seven-bank-atm-session"></a>
## SevenBankATMSession
* `qrInfo (string)`: 
* `account (AccountDetail)`: 
* `amount (integer)`: 
* `transaction (Transaction|null)`: 
* `sevenBankCustomerNumber (string)`: 
* `atmId (string|null)`: 
* `audiId (string|null)`: 
* `issuerCode (string|null)`: 
* `issuerName (string|null)`: 
* `moneyName (string|null)`: 

`account`は [AccountDetail](#account-detail) オブジェクトを返します。

`transaction`は [Transaction](#transaction) オブジェクトを返します。

<a name="private-money"></a>
## PrivateMoney
* `id (string)`: マネーID
* `name (string)`: マネー名
* `unit (string)`: マネー単位 (例: 円)
* `isExclusive (boolean)`: 会員制のマネーかどうか
* `description (string)`: マネー説明文
* `onelineMessage (string)`: マネーの要約
* `organization (Organization)`: マネーを発行した組織
* `maxBalance (double)`: ウォレットの上限金額
* `transferLimit (double)`: マネーの取引上限額
* `moneyTopupTransferLimit (double)`: マネーチャージ取引上限額
* `type (string)`: マネー種別 (自家型=own, 第三者型=third-party)
* `expirationType (string)`: 有効期限種別 (チャージ日起算=static, 最終利用日起算=last-update, 最終チャージ日起算=last-topup-update)
* `enableTopupByMember (boolean|null)`:  (deprecated)
* `displayMoneyAndPoint (string)`: 

`organization`は [Organization](#organization) オブジェクトを返します。

<a name="pagination"></a>
## Pagination
* `current (integer)`: 
* `perPage (integer)`: 
* `maxPage (integer)`: 
* `hasPrev (boolean)`: 
* `hasNext (boolean)`: 

<a name="transaction"></a>
## Transaction
* `id (string)`: 取引ID
* `type (string)`: 取引種別
* `isModified (boolean)`: 返金された取引かどうか
* `sender (User)`: 送金者情報
* `senderAccount (Account)`: 送金ウォレット情報
* `receiver (User)`: 受取者情報
* `receiverAccount (Account)`: 受取ウォレット情報
* `amount (double)`: 取引総額 (マネー額 + ポイント額)
* `moneyAmount (double)`: 取引マネー額
* `pointAmount (double)`: 取引ポイント額(キャンペーン付与ポイント合算)
* `rawPointAmount (double|null)`: 取引ポイント額
* `campaignPointAmount (double|null)`: キャンペーンによるポイント付与額
* `doneAt (\DateTime)`: 取引日時
* `description (string)`: 取引説明文

`receiver`と`sender`は [User](#user) オブジェクトを返します。

`receiver_account`と`sender_account`は [Account](#account) オブジェクトを返します。

<a name="external-transaction"></a>
## ExternalTransaction
* `id (string)`: ポケペイ外部取引ID
* `isModified (boolean)`: 返金された取引かどうか
* `sender (User)`: 送金者情報
* `senderAccount (Account)`: 送金ウォレット情報
* `receiver (User)`: 受取者情報
* `receiverAccount (Account)`: 受取ウォレット情報
* `amount (double)`: 決済額
* `doneAt (\DateTime)`: 取引日時
* `description (string)`: 取引説明文

`receiver`と`sender`は [User](#user) オブジェクトを返します。

`receiver_account`と`sender_account`は [Account](#account) オブジェクトを返します。

<a name="cashtray-attempt"></a>
## CashtrayAttempt
* `account (AccountWithUser|null)`: エンドユーザーのウォレット
* `statusCode (double)`: ステータスコード
* `errorType (string)`: エラー型
* `errorMessage (string)`: エラーメッセージ
* `createdAt (\DateTime)`: Cashtray読み取り記録の作成日時

`account`は [AccountWithUser](#account-with-user) オブジェクトを返します。

<a name="account"></a>
## Account
* `id (string)`: ウォレットID
* `name (string)`: ウォレット名
* `isSuspended (boolean)`: ウォレットが凍結されているかどうか
* `status (string)`: 
* `privateMoney (PrivateMoney)`: 設定マネー情報

`private_money`は [PrivateMoney](#private-money) オブジェクトを返します。

<a name="transfer"></a>
## Transfer
* `id (string)`: 
* `senderAccount (AccountWithoutPrivateMoneyDetail)`: 
* `receiverAccount (AccountWithoutPrivateMoneyDetail)`: 
* `amount (double)`: 
* `moneyAmount (double)`: 
* `pointAmount (double)`: 
* `doneAt (\DateTime)`: 
* `type (string)`: 
* `description (string)`: 
* `transactionId (string)`: 

`receiver_account`と`sender_account`は [AccountWithoutPrivateMoneyDetail](#account-without-private-money-detail) オブジェクトを返します。

<a name="shop-account"></a>
## ShopAccount
* `id (string)`: ウォレットID
* `name (string)`: ウォレット名
* `isSuspended (boolean)`: ウォレットが凍結されているかどうか
* `canTransferTopup (boolean)`: チャージ可能かどうか
* `privateMoney (PrivateMoney)`: 設定マネー情報

`private_money`は [PrivateMoney](#private-money) オブジェクトを返します。

<a name="bulk-transaction-job"></a>
## BulkTransactionJob
* `id (integer)`: 
* `bulkTransaction (BulkTransaction)`: 
* `type (string)`: 取引種別
* `senderAccountId (string)`: 
* `receiverAccountId (string)`: 
* `moneyAmount (double)`: 
* `pointAmount (double)`: 
* `description (string)`: バルク取引ジョブ管理用の説明文
* `bearPointAccountId (string)`: 
* `pointExpiresAt (\DateTime|null)`: ポイント有効期限
* `status (string)`: バルク取引ジョブの状態
* `error (string|null)`: バルク取引のエラー種別
* `lineno (integer|null)`: バルク取引のエラーが発生した行番号
* `transactionId (string|null)`: 
* `createdAt (\DateTime)`: バルク取引ジョブが登録された日時
* `updatedAt (\DateTime)`: バルク取引ジョブが更新された日時

`bulk_transaction`は [BulkTransaction](#bulk-transaction) オブジェクトを返します。

<a name="private-money-organization-summary"></a>
## PrivateMoneyOrganizationSummary
* `organizationCode (string)`: 
* `topup (OrganizationSummary)`: 
* `payment (OrganizationSummary)`: 

`payment`と`topup`は [OrganizationSummary](#organization-summary) オブジェクトを返します。

<a name="bank"></a>
## Bank
* `id (string)`: 
* `privateMoney (PrivateMoney)`: 
* `bankName (string)`: 
* `bankCode (string)`: 
* `branchNumber (string)`: 
* `branchName (string)`: 
* `depositType (string)`: 
* `maskedAccountNumber (string)`: 
* `accountName (string)`: 

`private_money`は [PrivateMoney](#private-money) オブジェクトを返します。

<a name="bill-transaction"></a>
## BillTransaction
* `transaction (Transaction)`: 
* `bill (Bill)`: 

`transaction`は [Transaction](#transaction) オブジェクトを返します。

`bill`は [Bill](#bill) オブジェクトを返します。

<a name="account-balance"></a>
## AccountBalance
* `expiresAt (\DateTime)`: 
* `moneyAmount (double)`: 
* `pointAmount (double)`: 

<a name="shop-with-metadata"></a>
## ShopWithMetadata
* `id (string)`: 店舗ID
* `name (string)`: 店舗名
* `organizationCode (string)`: 組織コード
* `status (string)`: 店舗の状態
* `postalCode (string|null)`: 店舗の郵便番号
* `address (string|null)`: 店舗の住所
* `tel (string|null)`: 店舗の電話番号
* `email (string|null)`: 店舗のメールアドレス
* `externalId (string|null)`: 店舗の外部ID

<a name="account-transfer-summary-element"></a>
## AccountTransferSummaryElement
* `transferType (string)`: 
* `moneyAmount (double)`: 
* `pointAmount (double)`: 
* `count (double)`: 

<a name="coupon"></a>
## Coupon
* `id (string)`: クーポンID
* `name (string)`: クーポン名
* `issuedShop (User)`: クーポン発行店舗
* `description (string)`: クーポンの説明文
* `discountAmount (integer|null)`: クーポンによる値引き額(絶対値指定)
* `discountPercentage (double|null)`: クーポンによる値引き率
* `discountUpperLimit (integer|null)`: クーポンによる値引き上限(値引き率が指定された場合の値引き上限額)
* `startsAt (\DateTime)`: クーポンの利用可能期間(開始日時)
* `endsAt (\DateTime)`: クーポンの利用可能期間(終了日時)
* `displayStartsAt (\DateTime)`: クーポンの掲載期間(開始日時)
* `displayEndsAt (\DateTime)`: クーポンの掲載期間(終了日時)
* `usageLimit (integer|null)`: ユーザごとの利用可能回数(NULLの場合は無制限)
* `minAmount (integer|null)`: クーポン適用可能な最小取引額
* `isShopSpecified (boolean)`: 特定店舗限定のクーポンかどうか
* `isHidden (boolean)`: クーポン一覧に掲載されるかどうか
* `isPublic (boolean)`: アプリ配信なしで受け取れるかどうか
* `code (string|null)`: クーポン受け取りコード
* `isDisabled (boolean)`: 無効化フラグ
* `token (string)`: クーポンを特定するためのトークン

`issued_shop`は [User](#user) オブジェクトを返します。

<a name="account-without-private-money-detail"></a>
## AccountWithoutPrivateMoneyDetail
* `id (string)`: 
* `name (string)`: 
* `isSuspended (boolean)`: 
* `status (string)`: 
* `privateMoneyId (string)`: 
* `user (User)`: 

`user`は [User](#user) オブジェクトを返します。

<a name="organization-summary"></a>
## OrganizationSummary
* `count (integer)`: 
* `moneyAmount (double)`: 
* `moneyCount (integer)`: 
* `pointAmount (double)`: 
* `rawPointAmount (double)`: 
* `campaignPointAmount (double)`: 
* `pointCount (integer)`: 
