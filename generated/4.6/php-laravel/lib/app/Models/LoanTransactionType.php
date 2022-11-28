<?php
/**
 * LoanTransactionType
 */
namespace app\Models;

/**
 * LoanTransactionType
 * @description The type of a loan transaction. Plaid passes through all loan transaction types.
 */
class LoanTransactionType
{
    /**
     * Possible values of this enum
     */
    const ADJUSTMENT = 'ADJUSTMENT';

    const FEE = 'FEE';

    const INTEREST = 'INTEREST';

    const PAYMENT = 'PAYMENT';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ADJUSTMENT,
            self::FEE,
            self::INTEREST,
            self::PAYMENT
        ];
    }
}
