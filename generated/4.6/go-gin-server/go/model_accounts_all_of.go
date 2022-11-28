/*
 * FDX V4.6
 *
 * ## FDX compliance  The Core Exchange API specifications are a subset of the Financial Data Exchange (FDX) API specification, the usage thereof (or any part thereof) constitutes acceptance of the FDX API License Agreement, which can be found at https://financialdataexchange.org/. The FDX API specification is distributed exclusively by FDX. Modifications to eliminate required or conditional elements prescribed in the FDX API Certification Use Cases will render any implementations using said modifications non-conformant with the FDX API Certification Use Cases. Please note that building the FDX-compliant Core Exchange API and permitting Plaid to call your build constitutes acceptance of the FDX end user license agreement, which can be found at https://financialdataexchange.org/. The full FDX API standard specification is distributed exclusively by FDX.  ## Download the specification  To view this specification and documentation as an openapi yaml file, see [the public Core Exchange Github repository](https://github.com/plaid/core-exchange/blob/main/dist/versions).  This specification contains the following endpoints:    - `/customer/current`    - `/accounts`    - `/accounts/{accountId}`    - `/accounts/{accountId}/payment-networks`    - `/accounts/{accountId}/contact`    - `/accounts/{accountId}/transactions` 
 *
 * API version: 4.6.0
 * Contact: dataconnectivity@plaid.com
 * Generated by: OpenAPI Generator (https://openapi-generator.tech)
 */

package openapi

type AccountsAllOf struct {

	// An array of accounts with entity types dependent on the account type (deposit, investment, loan, or line of credit). Plaid expects your organization to return an empty array if this information isn't available. Plaid accepts all account types for this endpoint but consumes account details through `GET accounts/{accountID}` solely for deposit, loan, and line of credit accounts. 
	Accounts []AccountWithDescriptor `json:"accounts"`
}
