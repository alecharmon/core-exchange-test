<?php
/**
 * DebitCreditMemo
 */
namespace app\Models;

/**
 * DebitCreditMemo
 * @description The posting type of a transaction. The transaction amount is an absolute value, and this parameter indicates the direction of the transaction. Plaid expects `DEBIT` or `CREDIT` for this enum. Plaid expects that your organization indicates the `MEMO` (i.e., pending) status using the `status` field in the transaction response rather than this field. If your organization sends `MEMO` in this `DebitCreditMemo` enum, Plaid handles this value the same as it handles `DEBIT`. * `DEBIT`: An amount leaves the account * `CREDIT`: An amount enters the account * `MEMO`: A pending transaction to be completed at the end of this day.
 */
class DebitCreditMemo
{
    /**
     * Possible values of this enum
     */
    const CREDIT = 'CREDIT';

    const DEBIT = 'DEBIT';

    const MEMO = 'MEMO';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CREDIT,
            self::DEBIT,
            self::MEMO
        ];
    }
}
