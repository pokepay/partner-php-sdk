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
require_once __DIR__ . '/lib/Request/CreateUserAccount.php';
require_once __DIR__ . '/lib/Request/GetAccount.php';
require_once __DIR__ . '/lib/Request/UpdateAccount.php';
require_once __DIR__ . '/lib/Request/DeleteAccount.php';
require_once __DIR__ . '/lib/Request/ListAccountBalances.php';
require_once __DIR__ . '/lib/Request/ListAccountExpiredBalances.php';
require_once __DIR__ . '/lib/Request/UpdateCustomerAccount.php';
require_once __DIR__ . '/lib/Request/GetAccountTransferSummary.php';
require_once __DIR__ . '/lib/Request/GetCustomerAccounts.php';
require_once __DIR__ . '/lib/Request/CreateCustomerAccount.php';
require_once __DIR__ . '/lib/Request/GetShopAccounts.php';
require_once __DIR__ . '/lib/Request/ListBills.php';
require_once __DIR__ . '/lib/Request/CreateBill.php';
require_once __DIR__ . '/lib/Request/UpdateBill.php';
require_once __DIR__ . '/lib/Request/CreateCheck.php';
require_once __DIR__ . '/lib/Request/ListChecks.php';
require_once __DIR__ . '/lib/Request/GetCheck.php';
require_once __DIR__ . '/lib/Request/UpdateCheck.php';
require_once __DIR__ . '/lib/Request/GetCpmToken.php';
require_once __DIR__ . '/lib/Request/ListTransactions.php';
require_once __DIR__ . '/lib/Request/CreateTransaction.php';
require_once __DIR__ . '/lib/Request/ListTransactionsV2.php';
require_once __DIR__ . '/lib/Request/CreateTopupTransaction.php';
require_once __DIR__ . '/lib/Request/CreateTopupTransactionWithCheck.php';
require_once __DIR__ . '/lib/Request/CreatePaymentTransaction.php';
require_once __DIR__ . '/lib/Request/CreateCpmTransaction.php';
require_once __DIR__ . '/lib/Request/CreateTransferTransaction.php';
require_once __DIR__ . '/lib/Request/CreateExchangeTransaction.php';
require_once __DIR__ . '/lib/Request/BulkCreateTransaction.php';
require_once __DIR__ . '/lib/Request/GetTransaction.php';
require_once __DIR__ . '/lib/Request/RefundTransaction.php';
require_once __DIR__ . '/lib/Request/GetTransactionByRequestId.php';
require_once __DIR__ . '/lib/Request/CreateExternalTransaction.php';
require_once __DIR__ . '/lib/Request/RefundExternalTransaction.php';
require_once __DIR__ . '/lib/Request/ListTransfers.php';
require_once __DIR__ . '/lib/Request/ListTransfersV2.php';
require_once __DIR__ . '/lib/Request/ListOrganizations.php';
require_once __DIR__ . '/lib/Request/CreateOrganization.php';
require_once __DIR__ . '/lib/Request/ListShops.php';
require_once __DIR__ . '/lib/Request/CreateShop.php';
require_once __DIR__ . '/lib/Request/CreateShopV2.php';
require_once __DIR__ . '/lib/Request/GetShop.php';
require_once __DIR__ . '/lib/Request/UpdateShop.php';
require_once __DIR__ . '/lib/Request/GetPrivateMoneys.php';
require_once __DIR__ . '/lib/Request/GetPrivateMoneyOrganizationSummaries.php';
require_once __DIR__ . '/lib/Request/GetPrivateMoneySummary.php';
require_once __DIR__ . '/lib/Request/ListCustomerTransactions.php';
require_once __DIR__ . '/lib/Request/GetBulkTransaction.php';
require_once __DIR__ . '/lib/Request/ListBulkTransactionJobs.php';
require_once __DIR__ . '/lib/Request/CreateCashtray.php';
require_once __DIR__ . '/lib/Request/GetCashtray.php';
require_once __DIR__ . '/lib/Request/CancelCashtray.php';
require_once __DIR__ . '/lib/Request/UpdateCashtray.php';
require_once __DIR__ . '/lib/Request/CreateCampaign.php';
require_once __DIR__ . '/lib/Request/ListCampaigns.php';
require_once __DIR__ . '/lib/Request/GetCampaign.php';
require_once __DIR__ . '/lib/Request/UpdateCampaign.php';
require_once __DIR__ . '/lib/Request/RequestUserStats.php';
require_once __DIR__ . '/lib/Request/CreateWebhook.php';
require_once __DIR__ . '/lib/Request/ListWebhooks.php';
require_once __DIR__ . '/lib/Request/UpdateWebhook.php';
require_once __DIR__ . '/lib/Request/DeleteWebhook.php';
require_once __DIR__ . '/lib/Request/CreateUserDevice.php';
require_once __DIR__ . '/lib/Request/GetUserDevice.php';
require_once __DIR__ . '/lib/Request/ActivateUserDevice.php';
require_once __DIR__ . '/lib/Request/CreateBank.php';
require_once __DIR__ . '/lib/Request/ListBanks.php';
require_once __DIR__ . '/lib/Request/CreateBankTopupTransaction.php';
require_once __DIR__ . '/lib/Request/ListCoupons.php';
require_once __DIR__ . '/lib/Request/CreateCoupon.php';
require_once __DIR__ . '/lib/Request/GetCoupon.php';
require_once __DIR__ . '/lib/Request/UpdateCoupon.php';
require_once __DIR__ . '/lib/Response/Pong.php';
require_once __DIR__ . '/lib/Response/Echoed.php';
require_once __DIR__ . '/lib/Response/Pagination.php';
require_once __DIR__ . '/lib/Response/AdminUserWithShopsAndPrivateMoneys.php';
require_once __DIR__ . '/lib/Response/Account.php';
require_once __DIR__ . '/lib/Response/AccountWithUser.php';
require_once __DIR__ . '/lib/Response/AccountDetail.php';
require_once __DIR__ . '/lib/Response/ShopAccount.php';
require_once __DIR__ . '/lib/Response/AccountDeleted.php';
require_once __DIR__ . '/lib/Response/AccountBalance.php';
require_once __DIR__ . '/lib/Response/Bill.php';
require_once __DIR__ . '/lib/Response/Check.php';
require_once __DIR__ . '/lib/Response/PaginatedChecks.php';
require_once __DIR__ . '/lib/Response/CpmToken.php';
require_once __DIR__ . '/lib/Response/Cashtray.php';
require_once __DIR__ . '/lib/Response/CashtrayWithResult.php';
require_once __DIR__ . '/lib/Response/CashtrayAttempt.php';
require_once __DIR__ . '/lib/Response/User.php';
require_once __DIR__ . '/lib/Response/PrivateMoney.php';
require_once __DIR__ . '/lib/Response/Organization.php';
require_once __DIR__ . '/lib/Response/Transaction.php';
require_once __DIR__ . '/lib/Response/TransactionDetail.php';
require_once __DIR__ . '/lib/Response/ShopWithMetadata.php';
require_once __DIR__ . '/lib/Response/ShopWithAccounts.php';
require_once __DIR__ . '/lib/Response/BulkTransaction.php';
require_once __DIR__ . '/lib/Response/BulkTransactionJob.php';
require_once __DIR__ . '/lib/Response/PaginatedBulkTransactionJob.php';
require_once __DIR__ . '/lib/Response/AccountWithoutPrivateMoneyDetail.php';
require_once __DIR__ . '/lib/Response/Transfer.php';
require_once __DIR__ . '/lib/Response/ExternalTransaction.php';
require_once __DIR__ . '/lib/Response/ExternalTransactionDetail.php';
require_once __DIR__ . '/lib/Response/Product.php';
require_once __DIR__ . '/lib/Response/OrganizationSummary.php';
require_once __DIR__ . '/lib/Response/PrivateMoneyOrganizationSummary.php';
require_once __DIR__ . '/lib/Response/PaginatedPrivateMoneyOrganizationSummaries.php';
require_once __DIR__ . '/lib/Response/PrivateMoneySummary.php';
require_once __DIR__ . '/lib/Response/UserStatsOperation.php';
require_once __DIR__ . '/lib/Response/UserDevice.php';
require_once __DIR__ . '/lib/Response/BankRegisteringInfo.php';
require_once __DIR__ . '/lib/Response/Bank.php';
require_once __DIR__ . '/lib/Response/Banks.php';
require_once __DIR__ . '/lib/Response/PaginatedTransaction.php';
require_once __DIR__ . '/lib/Response/PaginatedTransactionV2.php';
require_once __DIR__ . '/lib/Response/PaginatedTransfers.php';
require_once __DIR__ . '/lib/Response/PaginatedTransfersV2.php';
require_once __DIR__ . '/lib/Response/PaginatedAccounts.php';
require_once __DIR__ . '/lib/Response/PaginatedAccountWithUsers.php';
require_once __DIR__ . '/lib/Response/PaginatedAccountDetails.php';
require_once __DIR__ . '/lib/Response/PaginatedAccountBalance.php';
require_once __DIR__ . '/lib/Response/PaginatedShops.php';
require_once __DIR__ . '/lib/Response/PaginatedBills.php';
require_once __DIR__ . '/lib/Response/PaginatedPrivateMoneys.php';
require_once __DIR__ . '/lib/Response/Campaign.php';
require_once __DIR__ . '/lib/Response/PaginatedCampaigns.php';
require_once __DIR__ . '/lib/Response/AccountTransferSummaryElement.php';
require_once __DIR__ . '/lib/Response/AccountTransferSummary.php';
require_once __DIR__ . '/lib/Response/OrganizationWorkerTaskWebhook.php';
require_once __DIR__ . '/lib/Response/PaginatedOrganizationWorkerTaskWebhook.php';
require_once __DIR__ . '/lib/Response/Coupon.php';
require_once __DIR__ . '/lib/Response/CouponDetail.php';
require_once __DIR__ . '/lib/Response/PaginatedCoupons.php';
require_once __DIR__ . '/lib/Response/PaginatedOrganizations.php';
require_once __DIR__ . '/lib/Response/BadRequest.php';
require_once __DIR__ . '/lib/Response/PartnerClientNotFound.php';
require_once __DIR__ . '/lib/Response/PartnerDecryptionFailed.php';
require_once __DIR__ . '/lib/Response/PartnerRequestExpired.php';
require_once __DIR__ . '/lib/Response/PartnerRequestAlreadyDone.php';
require_once __DIR__ . '/lib/Response/InvalidParameters.php';
require_once __DIR__ . '/lib/Response/UnpermittedAdminUser.php';
require_once __DIR__ . '/lib/Response/UserStatsOperationServiceUnavailable.php';

require_once __DIR__ . '/lib/Error/ApiConnection.php';
require_once __DIR__ . '/lib/Error/HttpRequest.php';
require_once __DIR__ . '/lib/Util.php';
require_once __DIR__ . '/lib/Crypto.php';
