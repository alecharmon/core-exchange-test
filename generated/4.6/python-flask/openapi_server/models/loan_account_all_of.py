# coding: utf-8

from __future__ import absolute_import
from datetime import date, datetime  # noqa: F401

from typing import List, Dict  # noqa: F401

from openapi_server.models.base_model_ import Model
from openapi_server.models.interest_rate_type import InterestRateType
from openapi_server import util

from openapi_server.models.interest_rate_type import InterestRateType  # noqa: E501

class LoanAccountAllOf(Model):
    """NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).

    Do not edit the class manually.
    """

    def __init__(self, account_number=None, principal_balance=None, escrow_balance=None, original_principal=None, originating_date=None, loan_term=None, next_payment_amount=None, next_payment_date=None, last_payment_amount=None, last_payment_date=None, maturity_date=None, interest_paid_year_to_date=None, interest_rate=None, interest_rate_type=None):  # noqa: E501
        """LoanAccountAllOf - a model defined in OpenAPI

        :param account_number: The account_number of this LoanAccountAllOf.  # noqa: E501
        :type account_number: str
        :param principal_balance: The principal_balance of this LoanAccountAllOf.  # noqa: E501
        :type principal_balance: float
        :param escrow_balance: The escrow_balance of this LoanAccountAllOf.  # noqa: E501
        :type escrow_balance: float
        :param original_principal: The original_principal of this LoanAccountAllOf.  # noqa: E501
        :type original_principal: float
        :param originating_date: The originating_date of this LoanAccountAllOf.  # noqa: E501
        :type originating_date: datetime
        :param loan_term: The loan_term of this LoanAccountAllOf.  # noqa: E501
        :type loan_term: int
        :param next_payment_amount: The next_payment_amount of this LoanAccountAllOf.  # noqa: E501
        :type next_payment_amount: float
        :param next_payment_date: The next_payment_date of this LoanAccountAllOf.  # noqa: E501
        :type next_payment_date: datetime
        :param last_payment_amount: The last_payment_amount of this LoanAccountAllOf.  # noqa: E501
        :type last_payment_amount: float
        :param last_payment_date: The last_payment_date of this LoanAccountAllOf.  # noqa: E501
        :type last_payment_date: datetime
        :param maturity_date: The maturity_date of this LoanAccountAllOf.  # noqa: E501
        :type maturity_date: datetime
        :param interest_paid_year_to_date: The interest_paid_year_to_date of this LoanAccountAllOf.  # noqa: E501
        :type interest_paid_year_to_date: float
        :param interest_rate: The interest_rate of this LoanAccountAllOf.  # noqa: E501
        :type interest_rate: float
        :param interest_rate_type: The interest_rate_type of this LoanAccountAllOf.  # noqa: E501
        :type interest_rate_type: InterestRateType
        """
        self.openapi_types = {
            'account_number': str,
            'principal_balance': float,
            'escrow_balance': float,
            'original_principal': float,
            'originating_date': datetime,
            'loan_term': int,
            'next_payment_amount': float,
            'next_payment_date': datetime,
            'last_payment_amount': float,
            'last_payment_date': datetime,
            'maturity_date': datetime,
            'interest_paid_year_to_date': float,
            'interest_rate': float,
            'interest_rate_type': InterestRateType
        }

        self.attribute_map = {
            'account_number': 'accountNumber',
            'principal_balance': 'principalBalance',
            'escrow_balance': 'escrowBalance',
            'original_principal': 'originalPrincipal',
            'originating_date': 'originatingDate',
            'loan_term': 'loanTerm',
            'next_payment_amount': 'nextPaymentAmount',
            'next_payment_date': 'nextPaymentDate',
            'last_payment_amount': 'lastPaymentAmount',
            'last_payment_date': 'lastPaymentDate',
            'maturity_date': 'maturityDate',
            'interest_paid_year_to_date': 'interestPaidYearToDate',
            'interest_rate': 'interestRate',
            'interest_rate_type': 'interestRateType'
        }

        self._account_number = account_number
        self._principal_balance = principal_balance
        self._escrow_balance = escrow_balance
        self._original_principal = original_principal
        self._originating_date = originating_date
        self._loan_term = loan_term
        self._next_payment_amount = next_payment_amount
        self._next_payment_date = next_payment_date
        self._last_payment_amount = last_payment_amount
        self._last_payment_date = last_payment_date
        self._maturity_date = maturity_date
        self._interest_paid_year_to_date = interest_paid_year_to_date
        self._interest_rate = interest_rate
        self._interest_rate_type = interest_rate_type

    @classmethod
    def from_dict(cls, dikt) -> 'LoanAccountAllOf':
        """Returns the dict as a model

        :param dikt: A dict.
        :type: dict
        :return: The LoanAccount_allOf of this LoanAccountAllOf.  # noqa: E501
        :rtype: LoanAccountAllOf
        """
        return util.deserialize_model(dikt, cls)

    @property
    def account_number(self):
        """Gets the account_number of this LoanAccountAllOf.

        Full account number for the end user's handle for the account at the owning institution  # noqa: E501

        :return: The account_number of this LoanAccountAllOf.
        :rtype: str
        """
        return self._account_number

    @account_number.setter
    def account_number(self, account_number):
        """Sets the account_number of this LoanAccountAllOf.

        Full account number for the end user's handle for the account at the owning institution  # noqa: E501

        :param account_number: The account_number of this LoanAccountAllOf.
        :type account_number: str
        """
        if account_number is None:
            raise ValueError("Invalid value for `account_number`, must not be `None`")  # noqa: E501

        self._account_number = account_number

    @property
    def principal_balance(self):
        """Gets the principal_balance of this LoanAccountAllOf.

        Principal balance of loan  # noqa: E501

        :return: The principal_balance of this LoanAccountAllOf.
        :rtype: float
        """
        return self._principal_balance

    @principal_balance.setter
    def principal_balance(self, principal_balance):
        """Sets the principal_balance of this LoanAccountAllOf.

        Principal balance of loan  # noqa: E501

        :param principal_balance: The principal_balance of this LoanAccountAllOf.
        :type principal_balance: float
        """
        if principal_balance is None:
            raise ValueError("Invalid value for `principal_balance`, must not be `None`")  # noqa: E501

        self._principal_balance = principal_balance

    @property
    def escrow_balance(self):
        """Gets the escrow_balance of this LoanAccountAllOf.

        Escrow balance of loan  # noqa: E501

        :return: The escrow_balance of this LoanAccountAllOf.
        :rtype: float
        """
        return self._escrow_balance

    @escrow_balance.setter
    def escrow_balance(self, escrow_balance):
        """Sets the escrow_balance of this LoanAccountAllOf.

        Escrow balance of loan  # noqa: E501

        :param escrow_balance: The escrow_balance of this LoanAccountAllOf.
        :type escrow_balance: float
        """

        self._escrow_balance = escrow_balance

    @property
    def original_principal(self):
        """Gets the original_principal of this LoanAccountAllOf.

        Original principal of loan  # noqa: E501

        :return: The original_principal of this LoanAccountAllOf.
        :rtype: float
        """
        return self._original_principal

    @original_principal.setter
    def original_principal(self, original_principal):
        """Sets the original_principal of this LoanAccountAllOf.

        Original principal of loan  # noqa: E501

        :param original_principal: The original_principal of this LoanAccountAllOf.
        :type original_principal: float
        """

        self._original_principal = original_principal

    @property
    def originating_date(self):
        """Gets the originating_date of this LoanAccountAllOf.

        ISO 8601 date-time in format 'YYYY-MM-DDThh:mm:ss.nnn[Z|[+|-]hh:mm]' according to [IETF RFC3339](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  # noqa: E501

        :return: The originating_date of this LoanAccountAllOf.
        :rtype: datetime
        """
        return self._originating_date

    @originating_date.setter
    def originating_date(self, originating_date):
        """Sets the originating_date of this LoanAccountAllOf.

        ISO 8601 date-time in format 'YYYY-MM-DDThh:mm:ss.nnn[Z|[+|-]hh:mm]' according to [IETF RFC3339](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  # noqa: E501

        :param originating_date: The originating_date of this LoanAccountAllOf.
        :type originating_date: datetime
        """
        if originating_date is None:
            raise ValueError("Invalid value for `originating_date`, must not be `None`")  # noqa: E501

        self._originating_date = originating_date

    @property
    def loan_term(self):
        """Gets the loan_term of this LoanAccountAllOf.

        Term of loan in months  # noqa: E501

        :return: The loan_term of this LoanAccountAllOf.
        :rtype: int
        """
        return self._loan_term

    @loan_term.setter
    def loan_term(self, loan_term):
        """Sets the loan_term of this LoanAccountAllOf.

        Term of loan in months  # noqa: E501

        :param loan_term: The loan_term of this LoanAccountAllOf.
        :type loan_term: int
        """

        self._loan_term = loan_term

    @property
    def next_payment_amount(self):
        """Gets the next_payment_amount of this LoanAccountAllOf.

        Amount of next payment  # noqa: E501

        :return: The next_payment_amount of this LoanAccountAllOf.
        :rtype: float
        """
        return self._next_payment_amount

    @next_payment_amount.setter
    def next_payment_amount(self, next_payment_amount):
        """Sets the next_payment_amount of this LoanAccountAllOf.

        Amount of next payment  # noqa: E501

        :param next_payment_amount: The next_payment_amount of this LoanAccountAllOf.
        :type next_payment_amount: float
        """

        self._next_payment_amount = next_payment_amount

    @property
    def next_payment_date(self):
        """Gets the next_payment_date of this LoanAccountAllOf.

        ISO 8601 date-time in format 'YYYY-MM-DDThh:mm:ss.nnn[Z|[+|-]hh:mm]' according to [IETF RFC3339](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  # noqa: E501

        :return: The next_payment_date of this LoanAccountAllOf.
        :rtype: datetime
        """
        return self._next_payment_date

    @next_payment_date.setter
    def next_payment_date(self, next_payment_date):
        """Sets the next_payment_date of this LoanAccountAllOf.

        ISO 8601 date-time in format 'YYYY-MM-DDThh:mm:ss.nnn[Z|[+|-]hh:mm]' according to [IETF RFC3339](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  # noqa: E501

        :param next_payment_date: The next_payment_date of this LoanAccountAllOf.
        :type next_payment_date: datetime
        """

        self._next_payment_date = next_payment_date

    @property
    def last_payment_amount(self):
        """Gets the last_payment_amount of this LoanAccountAllOf.

        Last payment amount  # noqa: E501

        :return: The last_payment_amount of this LoanAccountAllOf.
        :rtype: float
        """
        return self._last_payment_amount

    @last_payment_amount.setter
    def last_payment_amount(self, last_payment_amount):
        """Sets the last_payment_amount of this LoanAccountAllOf.

        Last payment amount  # noqa: E501

        :param last_payment_amount: The last_payment_amount of this LoanAccountAllOf.
        :type last_payment_amount: float
        """

        self._last_payment_amount = last_payment_amount

    @property
    def last_payment_date(self):
        """Gets the last_payment_date of this LoanAccountAllOf.

        ISO 8601 date-time in format 'YYYY-MM-DDThh:mm:ss.nnn[Z|[+|-]hh:mm]' according to [IETF RFC3339](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  # noqa: E501

        :return: The last_payment_date of this LoanAccountAllOf.
        :rtype: datetime
        """
        return self._last_payment_date

    @last_payment_date.setter
    def last_payment_date(self, last_payment_date):
        """Sets the last_payment_date of this LoanAccountAllOf.

        ISO 8601 date-time in format 'YYYY-MM-DDThh:mm:ss.nnn[Z|[+|-]hh:mm]' according to [IETF RFC3339](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  # noqa: E501

        :param last_payment_date: The last_payment_date of this LoanAccountAllOf.
        :type last_payment_date: datetime
        """

        self._last_payment_date = last_payment_date

    @property
    def maturity_date(self):
        """Gets the maturity_date of this LoanAccountAllOf.

        ISO 8601 date-time in format 'YYYY-MM-DDThh:mm:ss.nnn[Z|[+|-]hh:mm]' according to [IETF RFC3339](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  # noqa: E501

        :return: The maturity_date of this LoanAccountAllOf.
        :rtype: datetime
        """
        return self._maturity_date

    @maturity_date.setter
    def maturity_date(self, maturity_date):
        """Sets the maturity_date of this LoanAccountAllOf.

        ISO 8601 date-time in format 'YYYY-MM-DDThh:mm:ss.nnn[Z|[+|-]hh:mm]' according to [IETF RFC3339](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  # noqa: E501

        :param maturity_date: The maturity_date of this LoanAccountAllOf.
        :type maturity_date: datetime
        """

        self._maturity_date = maturity_date

    @property
    def interest_paid_year_to_date(self):
        """Gets the interest_paid_year_to_date of this LoanAccountAllOf.

        Interest paid year to date  # noqa: E501

        :return: The interest_paid_year_to_date of this LoanAccountAllOf.
        :rtype: float
        """
        return self._interest_paid_year_to_date

    @interest_paid_year_to_date.setter
    def interest_paid_year_to_date(self, interest_paid_year_to_date):
        """Sets the interest_paid_year_to_date of this LoanAccountAllOf.

        Interest paid year to date  # noqa: E501

        :param interest_paid_year_to_date: The interest_paid_year_to_date of this LoanAccountAllOf.
        :type interest_paid_year_to_date: float
        """

        self._interest_paid_year_to_date = interest_paid_year_to_date

    @property
    def interest_rate(self):
        """Gets the interest_rate of this LoanAccountAllOf.

        Interest Rate of Account  # noqa: E501

        :return: The interest_rate of this LoanAccountAllOf.
        :rtype: float
        """
        return self._interest_rate

    @interest_rate.setter
    def interest_rate(self, interest_rate):
        """Sets the interest_rate of this LoanAccountAllOf.

        Interest Rate of Account  # noqa: E501

        :param interest_rate: The interest_rate of this LoanAccountAllOf.
        :type interest_rate: float
        """
        if interest_rate is None:
            raise ValueError("Invalid value for `interest_rate`, must not be `None`")  # noqa: E501

        self._interest_rate = interest_rate

    @property
    def interest_rate_type(self):
        """Gets the interest_rate_type of this LoanAccountAllOf.


        :return: The interest_rate_type of this LoanAccountAllOf.
        :rtype: InterestRateType
        """
        return self._interest_rate_type

    @interest_rate_type.setter
    def interest_rate_type(self, interest_rate_type):
        """Sets the interest_rate_type of this LoanAccountAllOf.


        :param interest_rate_type: The interest_rate_type of this LoanAccountAllOf.
        :type interest_rate_type: InterestRateType
        """
        if interest_rate_type is None:
            raise ValueError("Invalid value for `interest_rate_type`, must not be `None`")  # noqa: E501

        self._interest_rate_type = interest_rate_type
