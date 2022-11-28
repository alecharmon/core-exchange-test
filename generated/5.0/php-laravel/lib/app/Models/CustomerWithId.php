<?php
/**
 * CustomerWithId
 */
namespace app\Models;

/**
 * CustomerWithId
 * @description Represents a customer. Plaid-specific schema created to hold one property, the `customerId` property of the FDX `Customer` schema.
 */
class CustomerWithId {

    /** @var string $customerId Value for a unique identifier*/
    public $customerId = "";

}
