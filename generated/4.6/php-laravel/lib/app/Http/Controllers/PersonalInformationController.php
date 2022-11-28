<?php

/**
 * FDX V4.6
 * ## FDX compliance  The Core Exchange API specifications are a subset of the Financial Data Exchange (FDX) API specification, the usage thereof (or any part thereof) constitutes acceptance of the FDX API License Agreement, which can be found at https://financialdataexchange.org/. The FDX API specification is distributed exclusively by FDX. Modifications to eliminate required or conditional elements prescribed in the FDX API Certification Use Cases will render any implementations using said modifications non-conformant with the FDX API Certification Use Cases. Please note that building the FDX-compliant Core Exchange API and permitting Plaid to call your build constitutes acceptance of the FDX end user license agreement, which can be found at https://financialdataexchange.org/. The full FDX API standard specification is distributed exclusively by FDX.  ## Download the specification  To view this specification and documentation as an openapi yaml file, see [the public Core Exchange Github repository](https://github.com/plaid/core-exchange/blob/main/dist/versions).  This specification contains the following endpoints:    - `/customer/current`    - `/accounts`    - `/accounts/{accountId}`    - `/accounts/{accountId}/payment-networks`    - `/accounts/{accountId}/contact`    - `/accounts/{accountId}/transactions`
 * PHP version 7.2.5
 *
 * The version of the OpenAPI document: 4.6.0
 * Contact: dataconnectivity@plaid.com
 *
 * NOTE: This class is auto generated by OpenAPI-Generator
 * https://openapi-generator.tech
 * Do not edit the class manually.
 *
 * Source files are located at:
 *
 * > https://github.com/OpenAPITools/openapi-generator/blob/master/modules/openapi-generator/src/main/resources/php-laravel/
 */


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class PersonalInformationController extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Operation getAccountContact
     *
     * Get an account's contact information.
     *
     * @param string $accountId Account identifier, found in the &#x60;GET /accounts&#x60; endpoint response. Plaid expects the ID to be a different value from the account number. (required)
     *
     * @return Http response
     */
    public function getAccountContact($accountId)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing getAccountContact as a get method ?');
    }
    /**
     * Operation getCustomerId
     *
     * Get current authenticated customer id.
     *
     *
     * @return Http response
     */
    public function getCustomerId()
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing getCustomerId as a get method ?');
    }
}
