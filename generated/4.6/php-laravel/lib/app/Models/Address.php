<?php
/**
 * Address
 */
namespace app\Models;

/**
 * Address
 * @description Postal address
 */
class Address {

    /** @var string $line1 String of maximum length 64*/
    public $line1 = "";

    /** @var string $line2 String of maximum length 64*/
    public $line2 = "";

    /** @var string $line3 String of maximum length 64*/
    public $line3 = "";

    /** @var string $city String of maximum length 64*/
    public $city = "";

    /** @var string $state String of maximum length 64*/
    public $state = "";

    /** @var string $postalCode Postal code*/
    public $postalCode = "";

    /** @var string $country */
    public $country = "";

}
