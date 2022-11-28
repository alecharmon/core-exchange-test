<?php
/**
 * AccountHolderRelationship
 */
namespace app\Models;

/**
 * AccountHolderRelationship
 * @description Types of relationships between accounts and holders. Suggested values
 */
class AccountHolderRelationship
{
    /**
     * Possible values of this enum
     */
    const AUTHORIZED_USER = 'AUTHORIZED_USER';

    const BUSINESS = 'BUSINESS';

    const FOR_BENEFIT_OF = 'FOR_BENEFIT_OF';

    const FOR_BENEFIT_OF_PRIMARY = 'FOR_BENEFIT_OF_PRIMARY';

    const FOR_BENEFIT_OF_PRIMARY_JOINT_RESTRICTED = 'FOR_BENEFIT_OF_PRIMARY_JOINT_RESTRICTED';

    const FOR_BENEFIT_OF_SECONDARY = 'FOR_BENEFIT_OF_SECONDARY';

    const FOR_BENEFIT_OF_SECONDARY_JOINT_RESTRICTED = 'FOR_BENEFIT_OF_SECONDARY_JOINT_RESTRICTED';

    const FOR_BENEFIT_OF_SOLE_OWNER_RESTRICTED = 'FOR_BENEFIT_OF_SOLE_OWNER_RESTRICTED';

    const POWER_OF_ATTORNEY = 'POWER_OF_ATTORNEY';

    const PRIMARY_JOINT_TENANTS = 'PRIMARY_JOINT_TENANTS';

    const PRIMARY = 'PRIMARY';

    const PRIMARY_BORROWER = 'PRIMARY_BORROWER';

    const PRIMARY_JOINT = 'PRIMARY_JOINT';

    const SECONDARY = 'SECONDARY';

    const SECONDARY_JOINT_TENANTS = 'SECONDARY_JOINT_TENANTS';

    const SECONDARY_BORROWER = 'SECONDARY_BORROWER';

    const SECONDARY_JOINT = 'SECONDARY_JOINT';

    const SOLE_OWNER = 'SOLE_OWNER';

    const TRUSTEE = 'TRUSTEE';

    const UNIFORM_TRANSFER_TO_MINOR = 'UNIFORM_TRANSFER_TO_MINOR';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AUTHORIZED_USER,
            self::BUSINESS,
            self::FOR_BENEFIT_OF,
            self::FOR_BENEFIT_OF_PRIMARY,
            self::FOR_BENEFIT_OF_PRIMARY_JOINT_RESTRICTED,
            self::FOR_BENEFIT_OF_SECONDARY,
            self::FOR_BENEFIT_OF_SECONDARY_JOINT_RESTRICTED,
            self::FOR_BENEFIT_OF_SOLE_OWNER_RESTRICTED,
            self::POWER_OF_ATTORNEY,
            self::PRIMARY_JOINT_TENANTS,
            self::PRIMARY,
            self::PRIMARY_BORROWER,
            self::PRIMARY_JOINT,
            self::SECONDARY,
            self::SECONDARY_JOINT_TENANTS,
            self::SECONDARY_BORROWER,
            self::SECONDARY_JOINT,
            self::SOLE_OWNER,
            self::TRUSTEE,
            self::UNIFORM_TRANSFER_TO_MINOR
        ];
    }
}
