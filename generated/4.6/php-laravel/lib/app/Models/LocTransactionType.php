<?php
/**
 * LocTransactionType
 */
namespace app\Models;

/**
 * LocTransactionType
 * @description The type of a line of credit (LOC) transaction. Plaid passes through all LOC transaction types.
 */
class LocTransactionType
{
    /**
     * Possible values of this enum
     */
    const ADJUSTMENT = 'ADJUSTMENT';

    const CHECK = 'CHECK';

    const FEE = 'FEE';

    const INTEREST = 'INTEREST';

    const PAYMENT = 'PAYMENT';

    const WITHDRAWAL = 'WITHDRAWAL';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ADJUSTMENT,
            self::CHECK,
            self::FEE,
            self::INTEREST,
            self::PAYMENT,
            self::WITHDRAWAL
        ];
    }
}
