<?php
/**
 * SecurityIdType
 */
namespace app\Models;

/**
 * SecurityIdType
 * @description Plaid consumes solely CUSIP, ISIN, and SEDOL.
 */
class SecurityIdType
{
    /**
     * Possible values of this enum
     */
    const CUSIP = 'CUSIP';

    const ISIN = 'ISIN';

    const SEDOL = 'SEDOL';

    const SICC = 'SICC';

    const VALOR = 'VALOR';

    const WKN = 'WKN';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CUSIP,
            self::ISIN,
            self::SEDOL,
            self::SICC,
            self::VALOR,
            self::WKN
        ];
    }
}
