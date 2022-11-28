<?php
/**
 * Transactions
 */
namespace app\Models;

/**
 * Transactions
 * @description Optionally paginated array of transactions
 */
class Transactions {

    /** @var \app\Models\PageMetadata $page */
    public $page;

    /** @var OneOfObjectObjectObject[] $transactions An array of transactions with entity type dependent on the account type.  Plaid expects your organization to return an empty array if this information isn&#39;t available. Plaid consumes solely deposit, loan, and line of credit transactions.*/
    public $transactions = [];

}
