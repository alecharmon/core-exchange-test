<?php
/**
 * DepositAccount
 */
namespace app\Models;

/**
 * DepositAccount
 * @description Information for a deposit account type. Plaid consumes the same information for the `GET /accounts/{accountID}` for all deposit accounts. For all monetary amounts, for example for `currentBalance`, Plaid expects a decimal amount, with two places to represent fractional values of the base currency, for example `101.99`.
 */
class DepositAccount {

    /** @var string $accountId Value for a unique identifier*/
    public $accountId = "";

    /** @var string $accountType */
    public $accountType = "";

    /** @var string $accountNumberDisplay Account display number for the end user&#39;s handle at the owning financial institution. Plaid expects that the last 4 digits of this masked number correspond to the last 4 digits of the account number.*/
    public $accountNumberDisplay = "";

    /** @var string $productName Marketed product name for this account. Used in UIs to assist in account selection*/
    public $productName = "";

    /** @var string $nickname Name given by the user. Used in UIs to assist in account selection. Plaid recommends returning this only if the account permits user renaming.*/
    public $nickname = "";

    /** @var string $status */
    public $status = "";

    /** @var \app\Models\Currency $currency */
    public $currency;

    /** @var float $currentBalance The total amount of money in the account (sum of all posted/cleared transactions, not including pending transactions). For Plaid&#39;s full definition, see the [Transactions](https://plaid.com/docs/api/products/transactions/#transactions-get-response-accounts-balances-current).*/
    public $currentBalance = 0;

    /** @var float $availableBalance The money in the account available to spend (sum of all transactions, plus or minus pending transactions). For Plaid&#39;s full definition, see [Transactions](https://plaid.com/docs/api/products/transactions/#transactions-get-response-accounts-balances-available).*/
    public $availableBalance = 0;

}
