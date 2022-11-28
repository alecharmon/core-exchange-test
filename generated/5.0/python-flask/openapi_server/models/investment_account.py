# coding: utf-8

from __future__ import absolute_import
from datetime import date, datetime  # noqa: F401

from typing import List, Dict  # noqa: F401

from openapi_server.models.base_model_ import Model
from openapi_server.models.account_status import AccountStatus
from openapi_server.models.account_type import AccountType
from openapi_server.models.currency import Currency
from openapi_server.models.holding import Holding
from openapi_server import util

from openapi_server.models.account_status import AccountStatus  # noqa: E501
from openapi_server.models.account_type import AccountType  # noqa: E501
from openapi_server.models.currency import Currency  # noqa: E501
from openapi_server.models.holding import Holding  # noqa: E501

class InvestmentAccount(Model):
    """NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).

    Do not edit the class manually.
    """

    def __init__(self, account_id=None, account_type=None, account_number_display=None, product_name=None, nickname=None, status=None, currency=None, available_cash_balance=None, balance_as_of=None, current_value=None, holdings=None):  # noqa: E501
        """InvestmentAccount - a model defined in OpenAPI

        :param account_id: The account_id of this InvestmentAccount.  # noqa: E501
        :type account_id: str
        :param account_type: The account_type of this InvestmentAccount.  # noqa: E501
        :type account_type: AccountType
        :param account_number_display: The account_number_display of this InvestmentAccount.  # noqa: E501
        :type account_number_display: str
        :param product_name: The product_name of this InvestmentAccount.  # noqa: E501
        :type product_name: str
        :param nickname: The nickname of this InvestmentAccount.  # noqa: E501
        :type nickname: str
        :param status: The status of this InvestmentAccount.  # noqa: E501
        :type status: AccountStatus
        :param currency: The currency of this InvestmentAccount.  # noqa: E501
        :type currency: Currency
        :param available_cash_balance: The available_cash_balance of this InvestmentAccount.  # noqa: E501
        :type available_cash_balance: float
        :param balance_as_of: The balance_as_of of this InvestmentAccount.  # noqa: E501
        :type balance_as_of: datetime
        :param current_value: The current_value of this InvestmentAccount.  # noqa: E501
        :type current_value: float
        :param holdings: The holdings of this InvestmentAccount.  # noqa: E501
        :type holdings: List[Holding]
        """
        self.openapi_types = {
            'account_id': str,
            'account_type': AccountType,
            'account_number_display': str,
            'product_name': str,
            'nickname': str,
            'status': AccountStatus,
            'currency': Currency,
            'available_cash_balance': float,
            'balance_as_of': datetime,
            'current_value': float,
            'holdings': List[Holding]
        }

        self.attribute_map = {
            'account_id': 'accountId',
            'account_type': 'accountType',
            'account_number_display': 'accountNumberDisplay',
            'product_name': 'productName',
            'nickname': 'nickname',
            'status': 'status',
            'currency': 'currency',
            'available_cash_balance': 'availableCashBalance',
            'balance_as_of': 'balanceAsOf',
            'current_value': 'currentValue',
            'holdings': 'holdings'
        }

        self._account_id = account_id
        self._account_type = account_type
        self._account_number_display = account_number_display
        self._product_name = product_name
        self._nickname = nickname
        self._status = status
        self._currency = currency
        self._available_cash_balance = available_cash_balance
        self._balance_as_of = balance_as_of
        self._current_value = current_value
        self._holdings = holdings

    @classmethod
    def from_dict(cls, dikt) -> 'InvestmentAccount':
        """Returns the dict as a model

        :param dikt: A dict.
        :type: dict
        :return: The InvestmentAccount of this InvestmentAccount.  # noqa: E501
        :rtype: InvestmentAccount
        """
        return util.deserialize_model(dikt, cls)

    @property
    def account_id(self):
        """Gets the account_id of this InvestmentAccount.

        Value for a unique identifier  # noqa: E501

        :return: The account_id of this InvestmentAccount.
        :rtype: str
        """
        return self._account_id

    @account_id.setter
    def account_id(self, account_id):
        """Sets the account_id of this InvestmentAccount.

        Value for a unique identifier  # noqa: E501

        :param account_id: The account_id of this InvestmentAccount.
        :type account_id: str
        """
        if account_id is None:
            raise ValueError("Invalid value for `account_id`, must not be `None`")  # noqa: E501
        if account_id is not None and len(account_id) > 256:
            raise ValueError("Invalid value for `account_id`, length must be less than or equal to `256`")  # noqa: E501

        self._account_id = account_id

    @property
    def account_type(self):
        """Gets the account_type of this InvestmentAccount.


        :return: The account_type of this InvestmentAccount.
        :rtype: AccountType
        """
        return self._account_type

    @account_type.setter
    def account_type(self, account_type):
        """Sets the account_type of this InvestmentAccount.


        :param account_type: The account_type of this InvestmentAccount.
        :type account_type: AccountType
        """
        if account_type is None:
            raise ValueError("Invalid value for `account_type`, must not be `None`")  # noqa: E501

        self._account_type = account_type

    @property
    def account_number_display(self):
        """Gets the account_number_display of this InvestmentAccount.

        Account display number for the end user's handle at the owning financial institution. Plaid expects that the last 4 digits of this masked number correspond to the last 4 digits of the account number.   # noqa: E501

        :return: The account_number_display of this InvestmentAccount.
        :rtype: str
        """
        return self._account_number_display

    @account_number_display.setter
    def account_number_display(self, account_number_display):
        """Sets the account_number_display of this InvestmentAccount.

        Account display number for the end user's handle at the owning financial institution. Plaid expects that the last 4 digits of this masked number correspond to the last 4 digits of the account number.   # noqa: E501

        :param account_number_display: The account_number_display of this InvestmentAccount.
        :type account_number_display: str
        """

        self._account_number_display = account_number_display

    @property
    def product_name(self):
        """Gets the product_name of this InvestmentAccount.

        Marketed product name for this account. Used in UIs to assist in account selection  # noqa: E501

        :return: The product_name of this InvestmentAccount.
        :rtype: str
        """
        return self._product_name

    @product_name.setter
    def product_name(self, product_name):
        """Sets the product_name of this InvestmentAccount.

        Marketed product name for this account. Used in UIs to assist in account selection  # noqa: E501

        :param product_name: The product_name of this InvestmentAccount.
        :type product_name: str
        """
        if product_name is None:
            raise ValueError("Invalid value for `product_name`, must not be `None`")  # noqa: E501

        self._product_name = product_name

    @property
    def nickname(self):
        """Gets the nickname of this InvestmentAccount.

        Name given by the user. Used in UIs to assist in account selection. Plaid recommends returning this only if the account permits user renaming.   # noqa: E501

        :return: The nickname of this InvestmentAccount.
        :rtype: str
        """
        return self._nickname

    @nickname.setter
    def nickname(self, nickname):
        """Sets the nickname of this InvestmentAccount.

        Name given by the user. Used in UIs to assist in account selection. Plaid recommends returning this only if the account permits user renaming.   # noqa: E501

        :param nickname: The nickname of this InvestmentAccount.
        :type nickname: str
        """

        self._nickname = nickname

    @property
    def status(self):
        """Gets the status of this InvestmentAccount.


        :return: The status of this InvestmentAccount.
        :rtype: AccountStatus
        """
        return self._status

    @status.setter
    def status(self, status):
        """Sets the status of this InvestmentAccount.


        :param status: The status of this InvestmentAccount.
        :type status: AccountStatus
        """
        if status is None:
            raise ValueError("Invalid value for `status`, must not be `None`")  # noqa: E501

        self._status = status

    @property
    def currency(self):
        """Gets the currency of this InvestmentAccount.


        :return: The currency of this InvestmentAccount.
        :rtype: Currency
        """
        return self._currency

    @currency.setter
    def currency(self, currency):
        """Sets the currency of this InvestmentAccount.


        :param currency: The currency of this InvestmentAccount.
        :type currency: Currency
        """
        if currency is None:
            raise ValueError("Invalid value for `currency`, must not be `None`")  # noqa: E501

        self._currency = currency

    @property
    def available_cash_balance(self):
        """Gets the available_cash_balance of this InvestmentAccount.

        Cash balance across all sub-accounts. Plaid expects that this includes sweep funds.  # noqa: E501

        :return: The available_cash_balance of this InvestmentAccount.
        :rtype: float
        """
        return self._available_cash_balance

    @available_cash_balance.setter
    def available_cash_balance(self, available_cash_balance):
        """Sets the available_cash_balance of this InvestmentAccount.

        Cash balance across all sub-accounts. Plaid expects that this includes sweep funds.  # noqa: E501

        :param available_cash_balance: The available_cash_balance of this InvestmentAccount.
        :type available_cash_balance: float
        """
        if available_cash_balance is None:
            raise ValueError("Invalid value for `available_cash_balance`, must not be `None`")  # noqa: E501

        self._available_cash_balance = available_cash_balance

    @property
    def balance_as_of(self):
        """Gets the balance_as_of of this InvestmentAccount.

        ISO 8601 date-time in format 'YYYY-MM-DDThh:mm:ss.nnn[Z|[+|-]hh:mm]' according to [IETF RFC3339](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  # noqa: E501

        :return: The balance_as_of of this InvestmentAccount.
        :rtype: datetime
        """
        return self._balance_as_of

    @balance_as_of.setter
    def balance_as_of(self, balance_as_of):
        """Sets the balance_as_of of this InvestmentAccount.

        ISO 8601 date-time in format 'YYYY-MM-DDThh:mm:ss.nnn[Z|[+|-]hh:mm]' according to [IETF RFC3339](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  # noqa: E501

        :param balance_as_of: The balance_as_of of this InvestmentAccount.
        :type balance_as_of: datetime
        """

        self._balance_as_of = balance_as_of

    @property
    def current_value(self):
        """Gets the current_value of this InvestmentAccount.

        Total current value of all investments.  # noqa: E501

        :return: The current_value of this InvestmentAccount.
        :rtype: float
        """
        return self._current_value

    @current_value.setter
    def current_value(self, current_value):
        """Sets the current_value of this InvestmentAccount.

        Total current value of all investments.  # noqa: E501

        :param current_value: The current_value of this InvestmentAccount.
        :type current_value: float
        """
        if current_value is None:
            raise ValueError("Invalid value for `current_value`, must not be `None`")  # noqa: E501

        self._current_value = current_value

    @property
    def holdings(self):
        """Gets the holdings of this InvestmentAccount.

        Holdings in the investment account. Plaid maps the `holding` and the `investmentAccount` FDX models to its securities models, which hold universal information like the ticker symbol, and to its holdings models, which hold account-specific information like balances. For more information, see [Plaid investments](https://plaid.com/docs/investments/#securities-and-holdings).   # noqa: E501

        :return: The holdings of this InvestmentAccount.
        :rtype: List[Holding]
        """
        return self._holdings

    @holdings.setter
    def holdings(self, holdings):
        """Sets the holdings of this InvestmentAccount.

        Holdings in the investment account. Plaid maps the `holding` and the `investmentAccount` FDX models to its securities models, which hold universal information like the ticker symbol, and to its holdings models, which hold account-specific information like balances. For more information, see [Plaid investments](https://plaid.com/docs/investments/#securities-and-holdings).   # noqa: E501

        :param holdings: The holdings of this InvestmentAccount.
        :type holdings: List[Holding]
        """

        self._holdings = holdings
