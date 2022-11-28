<?php
/**
 * LoanAccount
 */
namespace app\Models;

/**
 * LoanAccount
 * @description A loan account type. Plaid consumes solely the MORTGAGE and STUDENTLOAN types for its Liabilities product, and for other loan account types, consumes account details and transactions. Plaid consumes the following in addition the information returned by the  `GET \\accounts` endpoint:  For all loan account types, Plaid consumes:  * `principalBalance`  For `STUDENTLOAN`, Plaid additionally consumes: * `interestPaidYearToDate` * `interestRate` * `lastPaymentAmount` * `lastPaymentDate` * `maturityDate` * `nextPaymentDate` * `originalPrincipal` * `originatingDate`  For `MORTGAGE`, Plaid additionally consumes: * `accountNumber` * `escrowBalance` * `interestPaidYearToDate` * `interestRate` * `interestRateType` * `lastPaymentAmount` * `lastPaymentDate` * `loanTerm` * `maturityDate` * `nextPaymentAmount` * `nextPaymentDate` * `originalPrincipal` * `originatingDate`  For all monetary amounts, for example for `escrowBalance`, Plaid expects a decimal amount, with two places to represent fractional values of the base currency, for example `101.99`.
 */
class LoanAccount {

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

    /** @var string $accountNumber Full account number for the end user&#39;s handle for the account at the owning institution*/
    public $accountNumber = "";

    /** @var float $principalBalance Principal balance of loan*/
    public $principalBalance = 0;

    /** @var float $escrowBalance Escrow balance of loan*/
    public $escrowBalance = 0;

    /** @var float $originalPrincipal Original principal of loan*/
    public $originalPrincipal = 0;

    /** @var \DateTime $originatingDate ISO 8601 date-time in format &#39;YYYY-MM-DDThh:mm:ss.nnn[Z|[+|-]hh:mm]&#39; according to [IETF RFC3339](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)*/
    public $originatingDate;

    /** @var int $loanTerm Term of loan in months*/
    public $loanTerm = 0;

    /** @var float $nextPaymentAmount Amount of next payment*/
    public $nextPaymentAmount = 0;

    /** @var \DateTime $nextPaymentDate ISO 8601 date-time in format &#39;YYYY-MM-DDThh:mm:ss.nnn[Z|[+|-]hh:mm]&#39; according to [IETF RFC3339](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)*/
    public $nextPaymentDate;

    /** @var float $lastPaymentAmount Last payment amount*/
    public $lastPaymentAmount = 0;

    /** @var \DateTime $lastPaymentDate ISO 8601 date-time in format &#39;YYYY-MM-DDThh:mm:ss.nnn[Z|[+|-]hh:mm]&#39; according to [IETF RFC3339](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)*/
    public $lastPaymentDate;

    /** @var \DateTime $maturityDate ISO 8601 date-time in format &#39;YYYY-MM-DDThh:mm:ss.nnn[Z|[+|-]hh:mm]&#39; according to [IETF RFC3339](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)*/
    public $maturityDate;

    /** @var float $interestPaidYearToDate Interest paid year to date*/
    public $interestPaidYearToDate = 0;

    /** @var float $interestRate Interest Rate of Account*/
    public $interestRate = 0;

    /** @var string $interestRateType */
    public $interestRateType = "";

}
