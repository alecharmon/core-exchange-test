/*
 * FDX V5.0
 *
 * ## FDX compliance  The Core Exchange API specifications are a subset of the Financial Data Exchange (FDX) API specification, the usage thereof (or any part thereof) constitutes acceptance of the FDX API License Agreement, which can be found at https://financialdataexchange.org/. The FDX API specification is distributed exclusively by FDX. Modifications to eliminate required or conditional elements prescribed in the FDX API Certification Use Cases will render any implementations using said modifications non-conformant with the FDX API Certification Use Cases. Please note that building the FDX-compliant Core Exchange API and permitting Plaid to call your build constitutes acceptance of the FDX end user license agreement, which can be found at https://financialdataexchange.org/. The full FDX API standard specification is distributed exclusively by FDX.  ## Download the specification  To view this specification and documentation as an openapi yaml file, see [the public Core Exchange Github repository](https://github.com/plaid/core-exchange/blob/main/dist/versions).  ## Endpoints  This specification contains the following endpoints:    - `/customers/current`    - `/accounts`    - `/accounts/{accountId}`    - `/accounts/{accountId}/payment-networks`    - `/accounts/{accountId}/contact`    - `/accounts/{accountId}/transactions`  ## Mock server  See the [mock server postman collection](/core-exchange/example) for Core Exchange v5.0. 
 *
 * API version: 5.0.0
 * Contact: dataconnectivity@plaid.com
 * Generated by: OpenAPI Generator (https://openapi-generator.tech)
 */

package openapi

type AccountWithDescriptorOneOf4 struct {

	InsuranceAccount AccountDescriptor `json:"insuranceAccount"`
}
