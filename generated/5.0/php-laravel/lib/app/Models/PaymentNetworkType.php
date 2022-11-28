<?php
/**
 * PaymentNetworkType
 */
namespace app\Models;

/**
 * PaymentNetworkType
 * @description Suggested values for Payment Network Type. `US_` refers to the USA, and `CA_` refers to Canada. <table> <thead> <tr> <th>Value</th> <th>Description</th> </tr> </thead> <tbody> <tr> <td>US_ACH</td> <td>Automated Clearing House, also called Fed ACH network (mostly small banks)</td> </tr> <tr> <td>US_FEDWIRE</td> <td>Fedwire Funds Service.</td> </tr> <tr> <td>US_CHIPS</td> <td>Clearinghouse Interbank Payments System. Also called Clearing House ACH network (primarily big banks)</td> </tr> <tr> <td>CA_ACSS</td> <td>Automated Clearing House Settlement System</td> </tr> <tr> <td>CA_LVTS</td> <td>Large-Value Transfer System</td> </tr> </tbody> </table>
 */
class PaymentNetworkType
{
    /**
     * Possible values of this enum
     */
    const US_ACH = 'US_ACH';

    const US_FEDWIRE = 'US_FEDWIRE';

    const US_CHIPS = 'US_CHIPS';

    const CA_ACSS = 'CA_ACSS';

    const CA_LVTS = 'CA_LVTS';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::US_ACH,
            self::US_FEDWIRE,
            self::US_CHIPS,
            self::CA_ACSS,
            self::CA_LVTS
        ];
    }
}
