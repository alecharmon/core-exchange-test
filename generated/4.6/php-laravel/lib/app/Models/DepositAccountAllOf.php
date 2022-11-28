<?php
/**
 * DepositAccountAllOf
 */
namespace app\Models;

/**
 * DepositAccountAllOf
 */
class DepositAccountAllOf {

    /** @var float $currentBalance The total amount of money in the account (sum of all posted/cleared transactions, not including pending transactions). For Plaid&#39;s full definition, see the [Transactions](https://plaid.com/docs/api/products/transactions/#transactions-get-response-accounts-balances-current).*/
    public $currentBalance = 0;

    /** @var float $availableBalance The money in the account available to spend (sum of all transactions, plus or minus pending transactions). For Plaid&#39;s full definition, see [Transactions](https://plaid.com/docs/api/products/transactions/#transactions-get-response-accounts-balances-available).*/
    public $availableBalance = 0;

}
