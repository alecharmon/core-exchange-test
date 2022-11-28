<?php
/**
 * AccountWithDescriptor
 */
namespace app\Models;

/**
 * AccountWithDescriptor
 * @description This provides an instance of an account without full details
 */
class AccountWithDescriptor {

    /** @var \app\Models\AccountDescriptor $depositAccount */
    public $depositAccount;

    /** @var \app\Models\AccountDescriptor $loanAccount */
    public $loanAccount;

    /** @var \app\Models\AccountDescriptor $locAccount */
    public $locAccount;

    /** @var \app\Models\AccountDescriptor $investmentAccount */
    public $investmentAccount;

    /** @var \app\Models\AccountDescriptor $insuranceAccount */
    public $insuranceAccount;

    /** @var \app\Models\AccountDescriptor $annuityAccount */
    public $annuityAccount;

}
