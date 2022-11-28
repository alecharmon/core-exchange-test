<?php
/**
 * DepositTransactionAllOf
 */
namespace app\Models;

/**
 * DepositTransactionAllOf
 */
class DepositTransactionAllOf {

    /** @var string $transactionType */
    public $transactionType = "";

    /** @var string $payee String of maximum length 255*/
    public $payee = "";

    /** @var int $checkNumber Check number. Plaid expects this solely if the transaction involves a check.*/
    public $checkNumber = 0;

}
