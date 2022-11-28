<?php
/**
 * HoldingType
 */
namespace app\Models;

/**
 * HoldingType
 * @description Plaid maps the holding type to the Plaid [security type](https://plaid.com/docs/api/products/investments/#investments-transactions-get-response-securities-type). Plaid expects you to return `OTHER` and set the `holdingSubType` to indicate cash-type holdings (CASH, MONEYMARKET).
 */
class HoldingType
{
    /**
     * Possible values of this enum
     */
    const ANNUITY = 'ANNUITY';

    const BOND = 'BOND';

    const CD = 'CD';

    const MUTUALFUND = 'MUTUALFUND';

    const OPTION = 'OPTION';

    const OTHER = 'OTHER';

    const STOCK = 'STOCK';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ANNUITY,
            self::BOND,
            self::CD,
            self::MUTUALFUND,
            self::OPTION,
            self::OTHER,
            self::STOCK
        ];
    }
}
