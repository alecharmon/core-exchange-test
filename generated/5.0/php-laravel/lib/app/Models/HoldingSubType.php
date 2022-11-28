<?php
/**
 * HoldingSubType
 */
namespace app\Models;

/**
 * HoldingSubType
 */
class HoldingSubType
{
    /**
     * Possible values of this enum
     */
    const CASH = 'CASH';

    const MONEYMARKET = 'MONEYMARKET';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CASH,
            self::MONEYMARKET
        ];
    }
}
