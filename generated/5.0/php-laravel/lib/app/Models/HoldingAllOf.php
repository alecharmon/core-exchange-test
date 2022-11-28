<?php
/**
 * HoldingAllOf
 */
namespace app\Models;

/**
 * HoldingAllOf
 */
class HoldingAllOf {

    /** @var string $securityId Plaid requires this field and &#x60;securityIdType&#x60; for: - holding types that use security IDs, such as stocks and options. - transactions involving such holding types. If you return this for a holding, Plaid looks up the close price from NYSE Group Security Master using the security ID. If you don&#39;t return this for a holding that uses security IDs (not recommended), Plaid uses the &#x60;currentUnitPrice&#x60; you return as the close price.*/
    public $securityId = "";

    /** @var string $securityIdType */
    public $securityIdType = "";

    /** @var string $holdingName Holding name or security name*/
    public $holdingName = "";

    /** @var string $holdingType */
    public $holdingType = "";

    /** @var string $holdingSubType */
    public $holdingSubType = "";

    /** @var string $symbol Ticker / Market symbol*/
    public $symbol = "";

    /** @var float $purchasedPrice Price of holding at the time of purchase. Plaid determines an approximate [cost basis](https://plaid.com/docs/api/products/investments/#investments-holdings-get-response-holdings-cost-basis) using the purchase price and the number of units. Plaid cannot take fees into account to determine the cost basis because the FDX holding schema doesn&#39;t include fees.*/
    public $purchasedPrice = 0;

    /** @var float $currentUnitPrice Current unit price. Plaid uses this as the [institution_price](https://plaid.com/docs/api/products/investments/#investments-holdings-get-response-holdings-institution-price). Plaid falls back to using this as the [close price](https://plaid.com/docs/api/products/investments/#investments-holdings-get-response-securities-close-price) if you don&#39;t return &#x60;securityId&#x60; for holdings involving securities.*/
    public $currentUnitPrice = 0;

    /** @var \DateTime $currentUnitPriceDate ISO 8601 full-date in format &#39;YYYY-MM-DD&#39; according to [IETF RFC3339](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)*/
    public $currentUnitPriceDate;

    /** @var float $units Plaid requires this field for holdings and transactions involving securities. For security-based actions other than stock splits, quantity. Shares for stocks, mutual funds, and others. Face value for bonds. Contracts for options.*/
    public $units = 0;

    /** @var float $marketValue Market value at the time of data retrieved*/
    public $marketValue = 0;

    /** @var float $faceValue Required for bonds. Face value at the time of data retrieved. If this isn&#39;t present, Plaid assumes the holding  isn&#39;t a bond and falls back to &#x60;marketValue&#x60;.*/
    public $faceValue = 0;

    /** @var bool $cashAccount If true, indicates that this holding is used to maintain proceeds from sales, dividends, and other cash postings to the investment account. If you don&#39;t set a value for &#x60;isCashEquivalent&#x60; in the &#x60;fiAttributes&#x60; array, then Plaid uses &#x60;cashAccount&#x60; in determining the [is_cash_equivalent](https://plaid.com/docs/api/products/investments/#investments-holdings-get-response-securities-is-cash-equivalent) status.*/
    public $cashAccount = false;

    /** @var \app\Models\Currency $currency */
    public $currency;

    /** @var \app\Models\FiAttribute[] $fiAttributes Array of financial institution-specific attributes. Plaid recommends including a value for [is_cash_equivalent](https://plaid.com/docs/api/products/investments/#investments-holdings-get-response-securities-is-cash-equivalent) property in this array. Plaid accepts &#x60;isCashEquivalent&#x60; as the name and a string &#x60;true&#x60; or &#x60;false&#x60; as the value. If you return a value for &#x60;isCashEquivalent&#x60;, then return the same value for &#x60;cashAccount&#x60; as a boolean.*/
    public $fiAttributes = [];

}
