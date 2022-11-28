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
// AccountType : The type of an account. Plaid consumes basic balance account information from the `accounts/{id}` endpoint for a subset of the possible account types described in the FDX specification. These account types are in the following categories: deposit, line of credit, and loan accounts. In addition, Plaid consumes more detailed account information for the following account types:  For Deposit accounts, Plaid consumes more detailed information for:  * `CHECKING` * `SAVINGS`  For Loan accounts, Plaid consumes more detailed information for:  * `MORTGAGE` * `STUDENTLOAN`  For line of credit accounts, Plaid consumes more detailed information for:  * `CREDITCARD` 
type AccountType string

// List of AccountType
const (
	_401_A AccountType = "401A"
	_401_K AccountType = "401K"
	_403_B AccountType = "403B"
	_529 AccountType = "529"
	ANNUITY AccountType = "ANNUITY"
	AUTOLOAN AccountType = "AUTOLOAN"
	BROKERAGEPRODUCT AccountType = "BROKERAGEPRODUCT"
	CD AccountType = "CD"
	CHARGE AccountType = "CHARGE"
	CHECKING AccountType = "CHECKING"
	COMMERCIALDEPOSIT AccountType = "COMMERCIALDEPOSIT"
	COMMERCIALINVESTMENT AccountType = "COMMERCIALINVESTMENT"
	COMMERCIALLINEOFCREDIT AccountType = "COMMERCIALLINEOFCREDIT"
	COMMERCIALLOAN AccountType = "COMMERCIALLOAN"
	COVERDELL AccountType = "COVERDELL"
	CREDITCARD AccountType = "CREDITCARD"
	DEFINEDBENEFIT AccountType = "DEFINEDBENEFIT"
	ESCROW AccountType = "ESCROW"
	ESOP AccountType = "ESOP"
	FIXEDANNUITY AccountType = "FIXEDANNUITY"
	GUARDIAN AccountType = "GUARDIAN"
	HOMEEQUITYLOAN AccountType = "HOMEEQUITYLOAN"
	HOMELINEOFCREDIT AccountType = "HOMELINEOFCREDIT"
	INSTALLMENT AccountType = "INSTALLMENT"
	INSTITUTIONALTRUST AccountType = "INSTITUTIONALTRUST"
	IRA AccountType = "IRA"
	KEOGH AccountType = "KEOGH"
	LINEOFCREDIT AccountType = "LINEOFCREDIT"
	LOAN AccountType = "LOAN"
	LONGTERMDISABILITY AccountType = "LONGTERMDISABILITY"
	MILITARYLOAN AccountType = "MILITARYLOAN"
	MONEYMARKET AccountType = "MONEYMARKET"
	MORTGAGE AccountType = "MORTGAGE"
	NONQUALIFIEDPLAN AccountType = "NONQUALIFIEDPLAN"
	OTHERDEPOSIT AccountType = "OTHERDEPOSIT"
	OTHERINVESTMENT AccountType = "OTHERINVESTMENT"
	PERSONALLOAN AccountType = "PERSONALLOAN"
	ROLLOVER AccountType = "ROLLOVER"
	ROTH AccountType = "ROTH"
	SARSEP AccountType = "SARSEP"
	SAVINGS AccountType = "SAVINGS"
	SMBLOAN AccountType = "SMBLOAN"
	SHORTTERMDISABILITY AccountType = "SHORTTERMDISABILITY"
	STUDENTLOAN AccountType = "STUDENTLOAN"
	TAXABLE AccountType = "TAXABLE"
	TDA AccountType = "TDA"
	TERM AccountType = "TERM"
	TRUST AccountType = "TRUST"
	UGMA AccountType = "UGMA"
	UNIVERSALLIFE AccountType = "UNIVERSALLIFE"
	UTMA AccountType = "UTMA"
	VARIABLEANNUITY AccountType = "VARIABLEANNUITY"
	WHOLELIFE AccountType = "WHOLELIFE"
)
