<?php
/**
 * InvestmentAccount
 */
namespace app\Models;

/**
 * InvestmentAccount
 * @description Plaid consumes all `InvestmentAccount` FDX fields for all investment account types. In the holdings array, Plaid consumes fields depending on their relevancy to the holding type. See the `holdings` array for more information. For all monetary amounts, for example for `currentBalance`, Plaid expects a decimal amount, with two places to represent fractional values of the base currency, for example `101.99`.
 */
class InvestmentAccount {

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

    /** @var float $availableCashBalance Cash balance across all sub-accounts. Plaid expects that this includes sweep funds.*/
    public $availableCashBalance = 0;

    /** @var \DateTime $balanceAsOf ISO 8601 date-time in format &#39;YYYY-MM-DDThh:mm:ss.nnn[Z|[+|-]hh:mm]&#39; according to [IETF RFC3339](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)*/
    public $balanceAsOf;

    /** @var float $currentValue Total current value of all investments.*/
    public $currentValue = 0;

    /** @var \app\Models\Holding[] $holdings Holdings in the investment account. Plaid maps the &#x60;holding&#x60; and the &#x60;investmentAccount&#x60; FDX models to its securities models, which hold universal information like the ticker symbol, and to its holdings models, which hold account-specific information like balances. For more information, see [Plaid investments](https://plaid.com/docs/investments/#securities-and-holdings).*/
    public $holdings = [];

}
