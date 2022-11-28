<?php
/**
 * LocAccount
 */
namespace app\Models;

/**
 * LocAccount
 * @description For line of credit account types, Plaid consumes the following in addition to the information returned by the `GET \\accounts` endpoint:  * `availableCredit` * `creditLine` * `currentBalance`  Additionally, for the `CREDITCARD` accountType, Plaid consumes the previous information plus the following for its liabilities product:  * `advancesApr` * `lastPaymentAmount` * `lastPaymentDate` * `lastStmtBalance` * `lastStmtDate` * `minimumPaymentAmount` * `nextPaymentDate` * `purchasesApr` For all monetary amounts, for example for `currentBalance`, Plaid expects a decimal amount, with two places to represent fractional values of the base currency, for example `101.99`.
 */
class LocAccount {

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

    /** @var string $status Account status*/
    public $status = "";

    /** @var \app\Models\Currency $currency */
    public $currency;

    /** @var float $creditLine Credit limit*/
    public $creditLine = 0;

    /** @var float $availableCredit Available credit*/
    public $availableCredit = 0;

    /** @var float $nextPaymentAmount Amount of next payment*/
    public $nextPaymentAmount = 0;

    /** @var \DateTime $nextPaymentDate ISO 8601 date-time in format &#39;YYYY-MM-DDThh:mm:ss.nnn[Z|[+|-]hh:mm]&#39; according to [IETF RFC3339](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)*/
    public $nextPaymentDate;

    /** @var float $principalBalance Principal balance*/
    public $principalBalance = 0;

    /** @var float $currentBalance Current balance of the line of credit*/
    public $currentBalance = 0;

    /** @var float $minimumPaymentAmount Minimum payment amount*/
    public $minimumPaymentAmount = 0;

    /** @var float $lastPaymentAmount Last payment amount*/
    public $lastPaymentAmount = 0;

    /** @var \DateTime $lastPaymentDate ISO 8601 date-time in format &#39;YYYY-MM-DDThh:mm:ss.nnn[Z|[+|-]hh:mm]&#39; according to [IETF RFC3339](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)*/
    public $lastPaymentDate;

    /** @var float $pastDueAmount Past Due Amount*/
    public $pastDueAmount = 0;

    /** @var float $lastStmtBalance Last Statement Balance*/
    public $lastStmtBalance = 0;

    /** @var \DateTime $lastStmtDate ISO 8601 date-time in format &#39;YYYY-MM-DDThh:mm:ss.nnn[Z|[+|-]hh:mm]&#39; according to [IETF RFC3339](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)*/
    public $lastStmtDate;

    /** @var float $purchasesApr Purchases APR*/
    public $purchasesApr = 0;

    /** @var float $advancesApr Advances APR*/
    public $advancesApr = 0;

}
