<?php
/**
 * InvalidDateRange
 */
namespace app\Models;

/**
 * InvalidDateRange
 * @description If the start date is not earlier than the end date or if the date range is beyond what the system supports
 */
class InvalidDateRange {

    /** @var string $code */
    public $code = "";

    /** @var string $message */
    public $message = "";

}
