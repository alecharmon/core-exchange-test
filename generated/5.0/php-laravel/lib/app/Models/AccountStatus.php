<?php
/**
 * AccountStatus
 */
namespace app\Models;

/**
 * AccountStatus
 * @description The status of an account.
 */
class AccountStatus
{
    /**
     * Possible values of this enum
     */
    const CLOSED = 'CLOSED';

    const DELINQUENT = 'DELINQUENT';

    const NEGATIVECURRENTBALANCE = 'NEGATIVECURRENTBALANCE';

    const OPEN = 'OPEN';

    const PAID = 'PAID';

    const PENDINGCLOSE = 'PENDINGCLOSE';

    const PENDINGOPEN = 'PENDINGOPEN';

    const RESTRICTED = 'RESTRICTED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CLOSED,
            self::DELINQUENT,
            self::NEGATIVECURRENTBALANCE,
            self::OPEN,
            self::PAID,
            self::PENDINGCLOSE,
            self::PENDINGOPEN,
            self::RESTRICTED
        ];
    }
}
