<?php
/**
 * TelephoneNumberType
 */
namespace app\Models;

/**
 * TelephoneNumberType
 * @description Purpose or type of telephone number
 */
class TelephoneNumberType
{
    /**
     * Possible values of this enum
     */
    const HOME = 'HOME';

    const BUSINESS = 'BUSINESS';

    const CELL = 'CELL';

    const FAX = 'FAX';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HOME,
            self::BUSINESS,
            self::CELL,
            self::FAX
        ];
    }
}
