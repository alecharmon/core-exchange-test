<?php
/**
 * LocAccountAllOf
 */
namespace app\Models;

/**
 * LocAccountAllOf
 */
class LocAccountAllOf {

    /** @var float $creditLine Credit limit*/
    public $creditLine = 0;

    /** @var float $availableCredit Available credit*/
    public $availableCredit = 0;

    /** @var float $nextPaymentAmount Amount of next payment.*/
    public $nextPaymentAmount = 0;

    /** @var \DateTime $nextPaymentDate ISO 8601 full-date in format &#39;YYYY-MM-DD&#39; according to [IETF RFC3339](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)*/
    public $nextPaymentDate;

    /** @var float $principalBalance Principal balance.*/
    public $principalBalance = 0;

    /** @var float $currentBalance Current balance of the line of credit.*/
    public $currentBalance = 0;

    /** @var float $minimumPaymentAmount Minimum payment amount.*/
    public $minimumPaymentAmount = 0;

    /** @var float $lastPaymentAmount Last payment amount.*/
    public $lastPaymentAmount = 0;

    /** @var \DateTime $lastPaymentDate ISO 8601 full-date in format &#39;YYYY-MM-DD&#39; according to [IETF RFC3339](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)*/
    public $lastPaymentDate;

    /** @var float $pastDueAmount Amount owed that the account holder failed to pay on the due date.*/
    public $pastDueAmount = 0;

    /** @var float $lastStmtBalance Last Statement Balance.*/
    public $lastStmtBalance = 0;

    /** @var \DateTime $lastStmtDate ISO 8601 full-date in format &#39;YYYY-MM-DD&#39; according to [IETF RFC3339](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)*/
    public $lastStmtDate;

    /** @var float $purchasesApr Purchases APR*/
    public $purchasesApr = 0;

    /** @var float $advancesApr Advances APR*/
    public $advancesApr = 0;

}
