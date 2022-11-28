<?php
/**
 * AccountDescriptor
 */
namespace app\Models;

/**
 * AccountDescriptor
 * @description This descriptor provides minimal information about the account for use in lightweight arrays
 */
class AccountDescriptor {

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

}
