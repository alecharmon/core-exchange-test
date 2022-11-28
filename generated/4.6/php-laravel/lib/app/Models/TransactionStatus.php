<?php
/**
 * TransactionStatus
 */
namespace app\Models;

/**
 * TransactionStatus
 * @description The status of a transaction. Plaid consumes solely the `PENDING` and `POSTED` enums, and treats `MEMO` and `AUTHORIZATION` as if they were `PENDING`. Plaid expects that pending and posted transactions have different `transactionIds`. * `AUTHORIZATION` * `MEMO` - A pending transaction to be completed at the end of this day * `PENDING` - A pending transaction * `POSTED` - A posted transaction
 */
class TransactionStatus
{
    /**
     * Possible values of this enum
     */
    const AUTHORIZATION = 'AUTHORIZATION';

    const MEMO = 'MEMO';

    const PENDING = 'PENDING';

    const POSTED = 'POSTED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AUTHORIZATION,
            self::MEMO,
            self::PENDING,
            self::POSTED
        ];
    }
}
