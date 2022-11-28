<?php
/**
 * AccountType
 */
namespace app\Models;

/**
 * AccountType
 * @description The type of an account. Plaid consumes basic balance account information from the `accounts/{id}` endpoint for a subset of the possible account types described in the FDX specification. These account types are in the following categories: deposit, investment, line of credit, and loan accounts. In addition, Plaid consumes more detailed account information for the following account types:  For Deposit accounts, Plaid consumes more detailed information for:  * `CHECKING` * `SAVINGS`  For Investment accounts, Plaid consumes the same level of detail for all account types.  For Loan accounts, Plaid consumes more detailed information for:  * `MORTGAGE` * `STUDENTLOAN`  For line of credit accounts, Plaid consumes more detailed information for:  * `CREDITCARD`
 */
class AccountType
{
    /**
     * Possible values of this enum
     */
    const _401_A = '401A';

    const _401_K = '401K';

    const _403_B = '403B';

    const _529 = '529';

    const ANNUITY = 'ANNUITY';

    const AUTOLOAN = 'AUTOLOAN';

    const BROKERAGEPRODUCT = 'BROKERAGEPRODUCT';

    const CD = 'CD';

    const CHARGE = 'CHARGE';

    const CHECKING = 'CHECKING';

    const COMMERCIALDEPOSIT = 'COMMERCIALDEPOSIT';

    const COMMERCIALINVESTMENT = 'COMMERCIALINVESTMENT';

    const COMMERCIALLINEOFCREDIT = 'COMMERCIALLINEOFCREDIT';

    const COMMERCIALLOAN = 'COMMERCIALLOAN';

    const COVERDELL = 'COVERDELL';

    const CREDITCARD = 'CREDITCARD';

    const DEFINEDBENEFIT = 'DEFINEDBENEFIT';

    const ESCROW = 'ESCROW';

    const ESOP = 'ESOP';

    const FIXEDANNUITY = 'FIXEDANNUITY';

    const GUARDIAN = 'GUARDIAN';

    const HOMEEQUITYLOAN = 'HOMEEQUITYLOAN';

    const HOMELINEOFCREDIT = 'HOMELINEOFCREDIT';

    const INSTALLMENT = 'INSTALLMENT';

    const INSTITUTIONALTRUST = 'INSTITUTIONALTRUST';

    const IRA = 'IRA';

    const KEOGH = 'KEOGH';

    const LINEOFCREDIT = 'LINEOFCREDIT';

    const LOAN = 'LOAN';

    const LONGTERMDISABILITY = 'LONGTERMDISABILITY';

    const MILITARYLOAN = 'MILITARYLOAN';

    const MONEYMARKET = 'MONEYMARKET';

    const MORTGAGE = 'MORTGAGE';

    const NONQUALIFIEDPLAN = 'NONQUALIFIEDPLAN';

    const OTHERDEPOSIT = 'OTHERDEPOSIT';

    const OTHERINVESTMENT = 'OTHERINVESTMENT';

    const PERSONALLOAN = 'PERSONALLOAN';

    const ROLLOVER = 'ROLLOVER';

    const ROTH = 'ROTH';

    const SARSEP = 'SARSEP';

    const SAVINGS = 'SAVINGS';

    const SMBLOAN = 'SMBLOAN';

    const SHORTTERMDISABILITY = 'SHORTTERMDISABILITY';

    const STUDENTLOAN = 'STUDENTLOAN';

    const TAXABLE = 'TAXABLE';

    const TDA = 'TDA';

    const TERM = 'TERM';

    const TRUST = 'TRUST';

    const UGMA = 'UGMA';

    const UNIVERSALLIFE = 'UNIVERSALLIFE';

    const UTMA = 'UTMA';

    const VARIABLEANNUITY = 'VARIABLEANNUITY';

    const WHOLELIFE = 'WHOLELIFE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_401_A,
            self::_401_K,
            self::_403_B,
            self::_529,
            self::ANNUITY,
            self::AUTOLOAN,
            self::BROKERAGEPRODUCT,
            self::CD,
            self::CHARGE,
            self::CHECKING,
            self::COMMERCIALDEPOSIT,
            self::COMMERCIALINVESTMENT,
            self::COMMERCIALLINEOFCREDIT,
            self::COMMERCIALLOAN,
            self::COVERDELL,
            self::CREDITCARD,
            self::DEFINEDBENEFIT,
            self::ESCROW,
            self::ESOP,
            self::FIXEDANNUITY,
            self::GUARDIAN,
            self::HOMEEQUITYLOAN,
            self::HOMELINEOFCREDIT,
            self::INSTALLMENT,
            self::INSTITUTIONALTRUST,
            self::IRA,
            self::KEOGH,
            self::LINEOFCREDIT,
            self::LOAN,
            self::LONGTERMDISABILITY,
            self::MILITARYLOAN,
            self::MONEYMARKET,
            self::MORTGAGE,
            self::NONQUALIFIEDPLAN,
            self::OTHERDEPOSIT,
            self::OTHERINVESTMENT,
            self::PERSONALLOAN,
            self::ROLLOVER,
            self::ROTH,
            self::SARSEP,
            self::SAVINGS,
            self::SMBLOAN,
            self::SHORTTERMDISABILITY,
            self::STUDENTLOAN,
            self::TAXABLE,
            self::TDA,
            self::TERM,
            self::TRUST,
            self::UGMA,
            self::UNIVERSALLIFE,
            self::UTMA,
            self::VARIABLEANNUITY,
            self::WHOLELIFE
        ];
    }
}
