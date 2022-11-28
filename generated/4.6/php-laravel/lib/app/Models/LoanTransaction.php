<?php
/**
 * LoanTransaction
 */
namespace app\Models;

/**
 * LoanTransaction
 * @description A transaction on a loan account
 */
class LoanTransaction {

    /** @var string $transactionId Value for a unique identifier*/
    public $transactionId = "";

    /** @var string $referenceTransactionId Value for a unique identifier*/
    public $referenceTransactionId = "";

    /** @var \DateTime $postedTimestamp ISO 8601 date-time in format &#39;YYYY-MM-DDThh:mm:ss.nnn[Z|[+|-]hh:mm]&#39; according to [IETF RFC3339](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)*/
    public $postedTimestamp;

    /** @var \DateTime $transactionTimestamp ISO 8601 date-time in format &#39;YYYY-MM-DDThh:mm:ss.nnn[Z|[+|-]hh:mm]&#39; according to [IETF RFC3339](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)*/
    public $transactionTimestamp;

    /** @var string $description The description of the transaction*/
    public $description = "";

    /** @var string $debitCreditMemo */
    public $debitCreditMemo = "";

    /** @var string $category Transaction category, preferably MCC or SIC. Plaid expects your organization to provide MCC, if available and applicable.*/
    public $category = "";

    /** @var string $subCategory Transaction category detail*/
    public $subCategory = "";

    /** @var string $status */
    public $status = "";

    /** @var float $amount The amount of money in the account currency*/
    public $amount = 0;

    /** @var float $foreignAmount The amount of money in the foreign currency. If this amount is specified, then Plaid expects that the &#x60;foreignCurrency&#x60; property is also set.*/
    public $foreignAmount = 0;

    /** @var string $foreignCurrency */
    public $foreignCurrency = "";

    /** @var string $transactionType */
    public $transactionType = "";

}
