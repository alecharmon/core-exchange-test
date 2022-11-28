<?php
/**
 * LoanAccountAllOf
 */
namespace app\Models;

/**
 * LoanAccountAllOf
 */
class LoanAccountAllOf {

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
