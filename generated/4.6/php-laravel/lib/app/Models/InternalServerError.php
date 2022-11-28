<?php
/**
 * InternalServerError
 */
namespace app\Models;

/**
 * InternalServerError
 * @description Catch all exception where request was not processed due to an internal outage/issue. Consider other more specific errors before using this error.
 */
class InternalServerError {

    /** @var string $code */
    public $code = "";

    /** @var string $message */
    public $message = "";

}
