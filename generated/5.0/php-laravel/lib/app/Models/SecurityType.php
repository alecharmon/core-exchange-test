<?php
/**
 * SecurityType
 */
namespace app\Models;

/**
 * SecurityType
 * @description The type of a security
 */
class SecurityType
{
    /**
     * Possible values of this enum
     */
    const BOND = 'BOND';

    const DEBT = 'DEBT';

    const MUTUALFUND = 'MUTUALFUND';

    const OPTION = 'OPTION';

    const OTHER = 'OTHER';

    const STOCK = 'STOCK';

    const SWEEP = 'SWEEP';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BOND,
            self::DEBT,
            self::MUTUALFUND,
            self::OPTION,
            self::OTHER,
            self::STOCK,
            self::SWEEP
        ];
    }
}
