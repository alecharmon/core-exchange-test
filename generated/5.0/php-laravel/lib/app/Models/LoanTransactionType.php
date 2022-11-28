<?php
/**
 * LoanTransactionType
 */
namespace app\Models;

/**
 * LoanTransactionType
 * @description The type of a loan transaction. Plaid passes through all loan transaction types. * `ADJUSTMENT`: Adjustment or correction.<br/> * `FEE`: Fee charge. For example, a late payment fee.<br/> * `INTEREST`: Interest charge.<br/> * `PAYMENT`: Required payment that satisfies the minimum payment (e.g. principal + interest for mortgages).<br/> * `LUMP_SUM_PAYMENT`: A single payment of money, as opposed to a series of payments made over time.<br/> * `SKIP_PAYMENT`: Payment that satisfies deferral of a required payment.</br> * `DOUBLE_UP_PAYMENT`: Additional payment beyond the required payment to reduce the principal.</br> * `PAYOFF`: Payment that satisfies the terms of the mortgage loan and completely pays off the debt.
 */
class LoanTransactionType
{
    /**
     * Possible values of this enum
     */
    const ADJUSTMENT = 'ADJUSTMENT';

    const FEE = 'FEE';

    const INTEREST = 'INTEREST';

    const PAYMENT = 'PAYMENT';

    const LUMP_SUM_PAYMENT = 'LUMP_SUM_PAYMENT';

    const SKIP_PAYMENT = 'SKIP_PAYMENT';

    const DOUBLE_UP_PAYMENT = 'DOUBLE_UP_PAYMENT';

    const PAYOFF = 'PAYOFF';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ADJUSTMENT,
            self::FEE,
            self::INTEREST,
            self::PAYMENT,
            self::LUMP_SUM_PAYMENT,
            self::SKIP_PAYMENT,
            self::DOUBLE_UP_PAYMENT,
            self::PAYOFF
        ];
    }
}
