<?php
/**
 * AccountWithDetails
 */
namespace app\Models;

/**
 * AccountWithDetails
 * @description This provides an instance of an account with full details
 */
class AccountWithDetails {

    /** @var \app\Models\DepositAccount $depositAccount */
    public $depositAccount;

    /** @var \app\Models\InvestmentAccount $investmentAccount */
    public $investmentAccount;

    /** @var \app\Models\LoanAccount $loanAccount */
    public $loanAccount;

    /** @var \app\Models\LocAccount $locAccount */
    public $locAccount;

}
