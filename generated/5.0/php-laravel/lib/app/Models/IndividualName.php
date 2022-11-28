<?php
/**
 * IndividualName
 */
namespace app\Models;

/**
 * IndividualName
 * @description First name, middle initial, last name, suffix fields.
 */
class IndividualName {

    /** @var string $first First name*/
    public $first = "";

    /** @var string $middle Middle initial*/
    public $middle = "";

    /** @var string $last Last name*/
    public $last = "";

    /** @var string $suffix Generational or academic suffix*/
    public $suffix = "";

}
