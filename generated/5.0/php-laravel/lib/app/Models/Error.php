<?php
/**
 * Error
 */
namespace app\Models;

/**
 * Error
 * @description An error entity which can be used at the API level for error responses
 */
class Error {

    /** @var string $code Long term persistent identifier which can be used to trace error condition back to log information*/
    public $code = "";

    /** @var string $message End user displayable information which might help the customer diagnose an error*/
    public $message = "";

}
