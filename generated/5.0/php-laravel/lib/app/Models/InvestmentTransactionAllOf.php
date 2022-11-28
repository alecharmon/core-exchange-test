<?php
/**
 * InvestmentTransactionAllOf
 */
namespace app\Models;

/**
 * InvestmentTransactionAllOf
 */
class InvestmentTransactionAllOf {

    /** @var string $transactionType */
    public $transactionType = "";

    /** @var string $securityId Plaid requires this field and &#x60;securityIdType&#x60; for: - holding types that use security IDs, such as stocks and options. - transactions involving such holding types. If you return this for a holding, Plaid looks up the close price from NYSE Group Security Master using the security ID. If you don&#39;t return this for a holding that uses security IDs (not recommended), Plaid uses the &#x60;currentUnitPrice&#x60; you return as the close price.*/
    public $securityId = "";

    /** @var string $securityIdType */
    public $securityIdType = "";

    /** @var string $securityType */
    public $securityType = "";

    /** @var string $symbol Ticker symbol*/
    public $symbol = "";

    /** @var float $commission Plaid expects that your organization includes a value for commission if the commission isn&#39;t included in &#x60;fees&#x60;.*/
    public $commission = 0;

    /** @var float $fees Fees applied to the trade. Plaid expects that the &#x60;fees&#x60; include the commission, unless your organization separately provides a value for &#x60;commission&#x60;.*/
    public $fees = 0;

    /** @var float $unitPrice Unit price. Plaid uses this as the [price](https://plaid.com/docs/api/products/investments/#investments-transactions-get-response-investment-transactions-price). Plaid falls back to using this as the [close price](https://plaid.com/docs/api/products/investments/#investments-transactions-get-response-securities-close-price) if you don&#39;t return &#x60;securityId&#x60; for transactions involving securities.*/
    public $unitPrice = 0;

    /** @var float $units Plaid requires this field for holdings and transactions involving securities. For security-based actions other than stock splits, quantity. Shares for stocks, mutual funds, and others. Face value for bonds. Contracts for options.*/
    public $units = 0;

    /** @var string $unitType */
    public $unitType = "";

    /** @var \app\Models\FiAttribute[] $fiAttributes Array of financial institution-specific attributes. Plaid recommends including a value for [is_cash_equivalent](https://plaid.com/docs/api/products/investments/#investments-transactions-get-response-securities-is-cash-equivalent) property in this array. Plaid accepts &#x60;isCashEquivalent&#x60; as the name and a string &#x60;true&#x60; or &#x60;false&#x60; as the value.*/
    public $fiAttributes = [];

}
