<?php
/**
 * InvalidInputError
 */
namespace app\Models;

/**
 * InvalidInputError
 * @description Input sent by client does not satisfy API specification
 */
class InvalidInputError {

    /** @var string $code */
    public $code = "";

    /** @var string $message */
    public $message = "";

}
