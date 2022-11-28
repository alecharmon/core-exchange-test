<?php
/**
 * AccountPaymentNetwork
 */
namespace app\Models;

/**
 * AccountPaymentNetwork
 * @description This provides details required to execute a transaction against the account within the payment network
 */
class AccountPaymentNetwork {

    /** @var string $bankId Bank identifier used by the payment network ie. Routing Number*/
    public $bankId = "";

    /** @var string $identifier The number used to identify the account within the payment network.*/
    public $identifier = "";

    /** @var string $type */
    public $type = "";

    /** @var bool $transferIn Can transfer funds to the account using this information. Plaid expect that this value represents the account&#39;s current ability to be credited through a payment network. Plaid recommends dynamically updating this value, for example to represent if the account is locked or not.*/
    public $transferIn = false;

    /** @var bool $transferOut Can transfer funds from the account using this information. Plaid expect that this value represents the account&#39;s current ability to be debited through a payment network. Plaid recommends dynamically updating this value, for example to represent if the account is locked or not.*/
    public $transferOut = false;

}
