<?php
/**
 * AccountContact
 */
namespace app\Models;

/**
 * AccountContact
 * @description Contact information for the account.
 */
class AccountContact {

    /** @var \app\Models\AccountHolder[] $holders Owners of the account. Plaid expects your organization to return an empty array if this information isn&#39;t available. Note that while the [FDX specification]((https://financialdataexchange.org) enables associating holders and their contact information in the full &#x60;AccountHolder&#x60; schema, Plaid doesn&#39;t consume these associations. Instead, Plaid consumes limited information for each &#x60;AccountHolder&#x60; and doesn&#39;t associate contact information such as emails, addresses, or telephone numbers to account holders. For more information about Plaid&#39;s data model for account contact information, see [Identity](https://plaid.com/docs/api/products/identity/).*/
    public $holders = [];

    /** @var string[] $emails Email addresses associated with the account. Plaid expects your organization to return an empty array if this information isn&#39;t available.*/
    public $emails = [];

    /** @var \app\Models\DeliveryAddress[] $addresses Physical mail addresses associated with the account. Plaid expects your organization to return an empty array if this information isn&#39;t available.*/
    public $addresses = [];

    /** @var \app\Models\TelephoneNumber[] $telephones Telephone numbers associated with the account. Plaid expects your organization to return an empty array if this information isn&#39;t available.*/
    public $telephones = [];

}
