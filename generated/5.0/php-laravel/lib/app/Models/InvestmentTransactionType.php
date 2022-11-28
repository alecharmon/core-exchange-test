<?php
/**
 * InvestmentTransactionType
 */
namespace app\Models;

/**
 * InvestmentTransactionType
 * @description The type of an investment transaction. Plaid maps these enums to Plaid [investment transaction types](https://plaid.com/docs/api/accounts/#investment-transaction-types-schema). Plaid doesn't map these enums to Plaid-specific transaction subtypes. Plaid maps these enums as follows:  * ADJUSTMENT - fee * ATM - cash * CASH - cash * CHECK - cash * CLOSURE - Plaid suggests using SOLDTOCLOSE, PURCHASETOCLOSE, OPTIONEXERCISE or OPTIONEXPIRATION to indicate the specific type of closure, instead of using this enum. * CLOSUREOPT - Plaid suggests using SOLDTOCLOSE, PURCHASETOCLOSE, OPTIONEXERCISE or OPTIONEXPIRATION to indicate the specific type of closure, instead of using this enum. * CONTRIBUTION - buy (if transaction involves a security) or cash * DEP - cash * DEPOSIT - cash * DIRECTDEBIT - cash * DIRECTDEP - cash * DIV - cash * DIVIDEND - cash * DIVIDENDREINVEST - buy * EXPENSE - cash * FEE - fee * INCOME - cash * INTEREST - cash * INVEXPENSE - cash * JRNLFUND - transfer * JRNLSEC - transfer * MARGININTEREST - cash * OPTIONEXERCISE - transfer * OPTIONEXPIRATION - transfer * OTHER - cash - (unclassified) * PAYMENT - cash * POS - cash * PURCHASED - buy * PURCHASEDTOCOVER - buy * PURCHASETOCLOSE - buy * PURCHASETOOPEN - buy * REINVESTOFINCOME - buy * REPEATPMT - cash * RETURNOFCAPITAL - cash * SOLD - sell * SOLDTOCLOSE - sell * SOLDTOOPEN - sell * SPLIT - transfer * SRVCHG - fee * TRANSFER - transfer * XFER - transfer
 */
class InvestmentTransactionType
{
    /**
     * Possible values of this enum
     */
    const ADJUSTMENT = 'ADJUSTMENT';

    const ATM = 'ATM';

    const CASH = 'CASH';

    const CHECK = 'CHECK';

    const CLOSURE = 'CLOSURE';

    const CLOSUREOPT = 'CLOSUREOPT';

    const CONTRIBUTION = 'CONTRIBUTION';

    const DEP = 'DEP';

    const DEPOSIT = 'DEPOSIT';

    const DIRECTDEBIT = 'DIRECTDEBIT';

    const DIRECTDEP = 'DIRECTDEP';

    const DIV = 'DIV';

    const DIVIDEND = 'DIVIDEND';

    const DIVIDENDREINVEST = 'DIVIDENDREINVEST';

    const EXPENSE = 'EXPENSE';

    const FEE = 'FEE';

    const INCOME = 'INCOME';

    const INTEREST = 'INTEREST';

    const INVEXPENSE = 'INVEXPENSE';

    const JRNLFUND = 'JRNLFUND';

    const JRNLSEC = 'JRNLSEC';

    const MARGININTEREST = 'MARGININTEREST';

    const OPTIONEXERCISE = 'OPTIONEXERCISE';

    const OPTIONEXPIRATION = 'OPTIONEXPIRATION';

    const OTHER = 'OTHER';

    const PAYMENT = 'PAYMENT';

    const POS = 'POS';

    const PURCHASED = 'PURCHASED';

    const PURCHASEDTOCOVER = 'PURCHASEDTOCOVER';

    const PURCHASETOCLOSE = 'PURCHASETOCLOSE';

    const PURCHASETOOPEN = 'PURCHASETOOPEN';

    const REINVESTOFINCOME = 'REINVESTOFINCOME';

    const REPEATPMT = 'REPEATPMT';

    const RETURNOFCAPITAL = 'RETURNOFCAPITAL';

    const SOLD = 'SOLD';

    const SOLDTOCLOSE = 'SOLDTOCLOSE';

    const SOLDTOOPEN = 'SOLDTOOPEN';

    const SPLIT = 'SPLIT';

    const SRVCHG = 'SRVCHG';

    const TRANSFER = 'TRANSFER';

    const XFER = 'XFER';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ADJUSTMENT,
            self::ATM,
            self::CASH,
            self::CHECK,
            self::CLOSURE,
            self::CLOSUREOPT,
            self::CONTRIBUTION,
            self::DEP,
            self::DEPOSIT,
            self::DIRECTDEBIT,
            self::DIRECTDEP,
            self::DIV,
            self::DIVIDEND,
            self::DIVIDENDREINVEST,
            self::EXPENSE,
            self::FEE,
            self::INCOME,
            self::INTEREST,
            self::INVEXPENSE,
            self::JRNLFUND,
            self::JRNLSEC,
            self::MARGININTEREST,
            self::OPTIONEXERCISE,
            self::OPTIONEXPIRATION,
            self::OTHER,
            self::PAYMENT,
            self::POS,
            self::PURCHASED,
            self::PURCHASEDTOCOVER,
            self::PURCHASETOCLOSE,
            self::PURCHASETOOPEN,
            self::REINVESTOFINCOME,
            self::REPEATPMT,
            self::RETURNOFCAPITAL,
            self::SOLD,
            self::SOLDTOCLOSE,
            self::SOLDTOOPEN,
            self::SPLIT,
            self::SRVCHG,
            self::TRANSFER,
            self::XFER
        ];
    }
}
