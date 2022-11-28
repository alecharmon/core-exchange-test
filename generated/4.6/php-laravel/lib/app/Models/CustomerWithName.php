<?php
/**
 * CustomerWithName
 */
namespace app\Models;

/**
 * CustomerWithName
 * @description Represents a customer. Plaid-specific schema created to hold one property, the `name` property of the FDX `Customer` schema.
 */
class CustomerWithName {

    /** @var \app\Models\CustomerName $name */
    public $name;

}
