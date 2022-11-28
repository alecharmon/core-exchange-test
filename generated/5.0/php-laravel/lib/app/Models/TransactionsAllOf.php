<?php
/**
 * TransactionsAllOf
 */
namespace app\Models;

/**
 * TransactionsAllOf
 */
class TransactionsAllOf {

    /** @var OneOfObjectObjectObjectObject[] $transactions An array of transactions with entity type dependent on the account type.  Plaid expects your organization to return an empty array if this information isn&#39;t available. Plaid consumes solely investment, deposit, loan, and line of credit transactions.*/
    public $transactions = [];

}
