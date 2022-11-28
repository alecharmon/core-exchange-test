<?php
/**
 * UnitType
 */
namespace app\Models;

/**
 * UnitType
 * @description The units of an investment transaction
 */
class UnitType
{
    /**
     * Possible values of this enum
     */
    const CURRENCY = 'CURRENCY';

    const SHARES = 'SHARES';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CURRENCY,
            self::SHARES
        ];
    }
}
