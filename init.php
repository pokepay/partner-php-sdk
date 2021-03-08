<?php
// DO NOT EDIT: File is generated by code generator.

require_once __DIR__ . '/lib/PartnerAPI.php';
require_once __DIR__ . '/lib/HttpClient.php';
require_once __DIR__ . '/lib/Request/Base.php';

require_once __DIR__ . '/lib/Response/Base.php';
require_once __DIR__ . '/lib/Response/Pagination.php';
require_once __DIR__ . '/lib/Response/PaginatedRows.php';

require_once __DIR__ . '/lib/Request/GetPing.php';
require_once __DIR__ . '/lib/Request/SendEcho.php';
require_once __DIR__ . '/lib/Request/GetUser.php';
require_once __DIR__ . '/lib/Request/ListUserAccounts.php';
require_once __DIR__ . '/lib/Request/GetAccount.php';
require_once __DIR__ . '/lib/Request/UpdateAccount.php';
require_once __DIR__ . '/lib/Request/ListAccountBalances.php';
require_once __DIR__ . '/lib/Request/ListAccountExpiredBalances.php';
require_once __DIR__ . '/lib/Request/CreateCustomerAccount.php';
require_once __DIR__ . '/lib/Request/ListBills.php';
require_once __DIR__ . '/lib/Request/CreateBill.php';
require_once __DIR__ . '/lib/Request/UpdateBill.php';
require_once __DIR__ . '/lib/Request/CreateCheck.php';
require_once __DIR__ . '/lib/Request/ListTransactions.php';
require_once __DIR__ . '/lib/Request/CreateTransaction.php';
require_once __DIR__ . '/lib/Request/CreateTopupTransaction.php';
require_once __DIR__ . '/lib/Request/CreateTopupTransactionWithCheck.php';
require_once __DIR__ . '/lib/Request/CreatePaymentTransaction.php';
require_once __DIR__ . '/lib/Request/CreateTransferTransaction.php';
require_once __DIR__ . '/lib/Request/CreateExchangeTransaction.php';
require_once __DIR__ . '/lib/Request/BulkCreateTransaction.php';
require_once __DIR__ . '/lib/Request/GetTransaction.php';
require_once __DIR__ . '/lib/Request/RefundTransaction.php';
require_once __DIR__ . '/lib/Request/ListTransfers.php';
require_once __DIR__ . '/lib/Request/CreateOrganization.php';
require_once __DIR__ . '/lib/Request/ListShops.php';
require_once __DIR__ . '/lib/Request/CreateShop.php';
require_once __DIR__ . '/lib/Request/CreateShopV2.php';
require_once __DIR__ . '/lib/Request/GetShop.php';
require_once __DIR__ . '/lib/Request/UpdateShop.php';
require_once __DIR__ . '/lib/Request/GetPrivateMoneys.php';
require_once __DIR__ . '/lib/Request/GetPrivateMoneyOrganizationSummaries.php';
require_once __DIR__ . '/lib/Request/ListCustomerTransactions.php';
require_once __DIR__ . '/lib/Request/GetBulkTransaction.php';
require_once __DIR__ . '/lib/Request/CreateCashtray.php';
require_once __DIR__ . '/lib/Request/GetCashtray.php';
require_once __DIR__ . '/lib/Request/CancelCashtray.php';
require_once __DIR__ . '/lib/Request/UpdateCashtray.php';
require_once __DIR__ . '/lib/Response/Pong.php';
require_once __DIR__ . '/lib/Response/Echoed.php';
require_once __DIR__ . '/lib/Response/Pagination.php';
require_once __DIR__ . '/lib/Response/AdminUserWithShopsAndPrivateMoneys.php';
require_once __DIR__ . '/lib/Response/Account.php';
require_once __DIR__ . '/lib/Response/AccountWithUser.php';
require_once __DIR__ . '/lib/Response/AccountDetail.php';
require_once __DIR__ . '/lib/Response/ShopAccount.php';
require_once __DIR__ . '/lib/Response/AccountBalance.php';
require_once __DIR__ . '/lib/Response/Bill.php';
require_once __DIR__ . '/lib/Response/Check.php';
require_once __DIR__ . '/lib/Response/Cashtray.php';
require_once __DIR__ . '/lib/Response/CashtrayWithResult.php';
require_once __DIR__ . '/lib/Response/CashtrayAttempt.php';
require_once __DIR__ . '/lib/Response/User.php';
require_once __DIR__ . '/lib/Response/PrivateMoney.php';
require_once __DIR__ . '/lib/Response/Organization.php';
require_once __DIR__ . '/lib/Response/Transaction.php';
require_once __DIR__ . '/lib/Response/ShopWithMetadata.php';
require_once __DIR__ . '/lib/Response/ShopWithAccounts.php';
require_once __DIR__ . '/lib/Response/UserTransaction.php';
require_once __DIR__ . '/lib/Response/BulkTransaction.php';
require_once __DIR__ . '/lib/Response/AccountWithoutPrivateMoneyDetail.php';
require_once __DIR__ . '/lib/Response/Transfer.php';
require_once __DIR__ . '/lib/Response/OrganizationSummary.php';
require_once __DIR__ . '/lib/Response/PrivateMoneyOrganizationSummary.php';
require_once __DIR__ . '/lib/Response/PaginatedPrivateMoneyOrganizationSummaries.php';
require_once __DIR__ . '/lib/Response/PaginatedTransaction.php';
require_once __DIR__ . '/lib/Response/PaginatedTransfers.php';
require_once __DIR__ . '/lib/Response/PaginatedAccounts.php';
require_once __DIR__ . '/lib/Response/PaginatedAccountBalance.php';
require_once __DIR__ . '/lib/Response/PaginatedShops.php';
require_once __DIR__ . '/lib/Response/PaginatedBills.php';
require_once __DIR__ . '/lib/Response/PaginatedPrivateMoneys.php';
require_once __DIR__ . '/lib/Response/BadRequest.php';
require_once __DIR__ . '/lib/Response/PartnerClientNotFound.php';
require_once __DIR__ . '/lib/Response/PartnerDecryptionFailed.php';
require_once __DIR__ . '/lib/Response/PartnerRequestExpired.php';
require_once __DIR__ . '/lib/Response/PartnerRequestAlreadyDone.php';
require_once __DIR__ . '/lib/Response/InvalidParameters.php';

require_once __DIR__ . '/lib/Error/ApiConnection.php';
require_once __DIR__ . '/lib/Error/HttpRequest.php';
require_once __DIR__ . '/lib/Util.php';
require_once __DIR__ . '/lib/Crypto.php';
