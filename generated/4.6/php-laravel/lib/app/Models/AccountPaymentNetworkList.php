<?php
/**
 * AccountPaymentNetworkList
 */
namespace app\Models;

/**
 * AccountPaymentNetworkList
 * @description An optionally paginated array of payment networks supported by the account
 */
class AccountPaymentNetworkList {

    /** @var \app\Models\PageMetadata $page */
    public $page;

    /** @var \app\Models\AccountPaymentNetwork[] $paymentNetworks Array of payment networks. Plaid expects your organization to return an empty array if this information isn&#39;t available. Not all deposit accounts support ACH transfers. For example, a prepaid debit card account doesn&#39;t support ACH.*/
    public $paymentNetworks = [];

}
