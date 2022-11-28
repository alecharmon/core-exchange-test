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

type LocAccountAllOf struct {

	// Credit limit
	CreditLine float32 `json:"creditLine,omitempty"`

	// Available credit
	AvailableCredit float32 `json:"availableCredit"`

	// Amount of next payment.
	NextPaymentAmount float32 `json:"nextPaymentAmount,omitempty"`

	// ISO 8601 full-date in format 'YYYY-MM-DD' according to [IETF RFC3339](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)
	NextPaymentDate string `json:"nextPaymentDate,omitempty"`

	// Principal balance.
	PrincipalBalance float32 `json:"principalBalance,omitempty"`

	// Current balance of the line of credit.
	CurrentBalance float32 `json:"currentBalance"`

	// Minimum payment amount.
	MinimumPaymentAmount float32 `json:"minimumPaymentAmount,omitempty"`

	// Last payment amount.
	LastPaymentAmount float32 `json:"lastPaymentAmount,omitempty"`

	// ISO 8601 full-date in format 'YYYY-MM-DD' according to [IETF RFC3339](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)
	LastPaymentDate string `json:"lastPaymentDate,omitempty"`

	// Amount owed that the account holder failed to pay on the due date.
	PastDueAmount float32 `json:"pastDueAmount,omitempty"`

	// Last Statement Balance.
	LastStmtBalance float32 `json:"lastStmtBalance,omitempty"`

	// ISO 8601 full-date in format 'YYYY-MM-DD' according to [IETF RFC3339](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)
	LastStmtDate string `json:"lastStmtDate,omitempty"`

	// Purchases APR
	PurchasesApr float32 `json:"purchasesApr,omitempty"`

	// Advances APR
	AdvancesApr float32 `json:"advancesApr,omitempty"`
}
