<?php
/**
 * Accounts
 */
namespace app\Models;

/**
 * Accounts
 * @description An optionally paginated array of accounts
 */
class Accounts {

    /** @var \app\Models\PageMetadata $page */
    public $page;

    /** @var \app\Models\AccountWithDescriptor[] $accounts An array of accounts with entity types dependent on the account type (deposit, investment, loan, or line of credit). Plaid expects your organization to return an empty array if this information isn&#39;t available. Plaid accepts all account types for this endpoint but consumes account details through &#x60;GET accounts/{accountID}&#x60; solely for deposit, investment, loan, and line of credit accounts.*/
    public $accounts = [];

}
