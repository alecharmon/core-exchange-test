<?php
/**
 * TelephoneNumber
 */
namespace app\Models;

/**
 * TelephoneNumber
 * @description Standard for international phone numbers
 */
class TelephoneNumber {

    /** @var string $type */
    public $type = "";

    /** @var string $country Country calling codes defined by ITU-T recommendations E.123 and E.164*/
    public $country = "";

    /** @var string $number Telephone subscriber number defined by ITU-T recommendation E.164*/
    public $number = "";

}
