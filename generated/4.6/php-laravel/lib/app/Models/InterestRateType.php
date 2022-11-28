<?php
/**
 * InterestRateType
 */
namespace app\Models;

/**
 * InterestRateType
 * @description The type of interest rate
 */
class InterestRateType
{
    /**
     * Possible values of this enum
     */
    const FIXED = 'FIXED';

    const VARIABLE = 'VARIABLE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FIXED,
            self::VARIABLE
        ];
    }
}
