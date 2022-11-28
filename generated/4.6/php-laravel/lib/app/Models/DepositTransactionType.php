<?php
/**
 * DepositTransactionType
 */
namespace app\Models;

/**
 * DepositTransactionType
 * @description The type of a deposit transaction. Plaid passes through all deposit transaction types. \"FEE\" and \"INTEREST\" values are replacing \"FEE INTEREST\" value which is now deprecated and will be removed in v5.0
 */
class DepositTransactionType
{
    /**
     * Possible values of this enum
     */
    const ADJUSTMENT = 'ADJUSTMENT';

    const ATMDEPOSIT = 'ATMDEPOSIT';

    const ATMWITHDRAWAL = 'ATMWITHDRAWAL';

    const BILLPAYMENT = 'BILLPAYMENT';

    const CHECK = 'CHECK';

    const DEPOSIT = 'DEPOSIT';

    const DIRECTDEPOSIT = 'DIRECTDEPOSIT';

    const DIVIDEND = 'DIVIDEND';

    const FEE_INTEREST = 'FEE INTEREST';

    const FEE = 'FEE';

    const INTEREST = 'INTEREST';

    const POSCREDIT = 'POSCREDIT';

    const POSDEBIT = 'POSDEBIT';

    const TRANSFER = 'TRANSFER';

    const WITHDRAWAL = 'WITHDRAWAL';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ADJUSTMENT,
            self::ATMDEPOSIT,
            self::ATMWITHDRAWAL,
            self::BILLPAYMENT,
            self::CHECK,
            self::DEPOSIT,
            self::DIRECTDEPOSIT,
            self::DIVIDEND,
            self::FEE_INTEREST,
            self::FEE,
            self::INTEREST,
            self::POSCREDIT,
            self::POSDEBIT,
            self::TRANSFER,
            self::WITHDRAWAL
        ];
    }
}
