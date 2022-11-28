<?php
/**
 * CustomerName
 */
namespace app\Models;

/**
 * CustomerName
 * @description The name of an individual in their role as a customer. Plaid expects at least one populated name field. If any field is missing (for example, no first name), then you respond with an empty string for that field.
 */
class CustomerName {

    /** @var string $first First name*/
    public $first = "";

    /** @var string $middle Middle initial*/
    public $middle = "";

    /** @var string $last Last name*/
    public $last = "";

    /** @var string $suffix Generational or academic suffix*/
    public $suffix = "";

    /** @var string $prefix Name prefix, e.g. Mr.*/
    public $prefix = "";

}
