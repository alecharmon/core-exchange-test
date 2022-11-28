# coding: utf-8

from __future__ import absolute_import
from datetime import date, datetime  # noqa: F401

from typing import List, Dict  # noqa: F401

from openapi_server.models.base_model_ import Model
from openapi_server.models.currency import Currency
from openapi_server.models.fi_attribute import FiAttribute
from openapi_server.models.holding_sub_type import HoldingSubType
from openapi_server.models.holding_type import HoldingType
from openapi_server.models.security_id_type import SecurityIdType
from openapi_server import util

from openapi_server.models.currency import Currency  # noqa: E501
from openapi_server.models.fi_attribute import FiAttribute  # noqa: E501
from openapi_server.models.holding_sub_type import HoldingSubType  # noqa: E501
from openapi_server.models.holding_type import HoldingType  # noqa: E501
from openapi_server.models.security_id_type import SecurityIdType  # noqa: E501

class Holding(Model):
    """NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).

    Do not edit the class manually.
    """

    def __init__(self, security_id=None, security_id_type=None, holding_name=None, holding_type=None, holding_sub_type=None, symbol=None, purchased_price=None, current_unit_price=None, current_unit_price_date=None, units=None, market_value=None, face_value=None, cash_account=None, currency=None, fi_attributes=None):  # noqa: E501
        """Holding - a model defined in OpenAPI

        :param security_id: The security_id of this Holding.  # noqa: E501
        :type security_id: str
        :param security_id_type: The security_id_type of this Holding.  # noqa: E501
        :type security_id_type: SecurityIdType
        :param holding_name: The holding_name of this Holding.  # noqa: E501
        :type holding_name: str
        :param holding_type: The holding_type of this Holding.  # noqa: E501
        :type holding_type: HoldingType
        :param holding_sub_type: The holding_sub_type of this Holding.  # noqa: E501
        :type holding_sub_type: HoldingSubType
        :param symbol: The symbol of this Holding.  # noqa: E501
        :type symbol: str
        :param purchased_price: The purchased_price of this Holding.  # noqa: E501
        :type purchased_price: float
        :param current_unit_price: The current_unit_price of this Holding.  # noqa: E501
        :type current_unit_price: float
        :param current_unit_price_date: The current_unit_price_date of this Holding.  # noqa: E501
        :type current_unit_price_date: date
        :param units: The units of this Holding.  # noqa: E501
        :type units: float
        :param market_value: The market_value of this Holding.  # noqa: E501
        :type market_value: float
        :param face_value: The face_value of this Holding.  # noqa: E501
        :type face_value: float
        :param cash_account: The cash_account of this Holding.  # noqa: E501
        :type cash_account: bool
        :param currency: The currency of this Holding.  # noqa: E501
        :type currency: Currency
        :param fi_attributes: The fi_attributes of this Holding.  # noqa: E501
        :type fi_attributes: List[FiAttribute]
        """
        self.openapi_types = {
            'security_id': str,
            'security_id_type': SecurityIdType,
            'holding_name': str,
            'holding_type': HoldingType,
            'holding_sub_type': HoldingSubType,
            'symbol': str,
            'purchased_price': float,
            'current_unit_price': float,
            'current_unit_price_date': date,
            'units': float,
            'market_value': float,
            'face_value': float,
            'cash_account': bool,
            'currency': Currency,
            'fi_attributes': List[FiAttribute]
        }

        self.attribute_map = {
            'security_id': 'securityId',
            'security_id_type': 'securityIdType',
            'holding_name': 'holdingName',
            'holding_type': 'holdingType',
            'holding_sub_type': 'holdingSubType',
            'symbol': 'symbol',
            'purchased_price': 'purchasedPrice',
            'current_unit_price': 'currentUnitPrice',
            'current_unit_price_date': 'currentUnitPriceDate',
            'units': 'units',
            'market_value': 'marketValue',
            'face_value': 'faceValue',
            'cash_account': 'cashAccount',
            'currency': 'currency',
            'fi_attributes': 'fiAttributes'
        }

        self._security_id = security_id
        self._security_id_type = security_id_type
        self._holding_name = holding_name
        self._holding_type = holding_type
        self._holding_sub_type = holding_sub_type
        self._symbol = symbol
        self._purchased_price = purchased_price
        self._current_unit_price = current_unit_price
        self._current_unit_price_date = current_unit_price_date
        self._units = units
        self._market_value = market_value
        self._face_value = face_value
        self._cash_account = cash_account
        self._currency = currency
        self._fi_attributes = fi_attributes

    @classmethod
    def from_dict(cls, dikt) -> 'Holding':
        """Returns the dict as a model

        :param dikt: A dict.
        :type: dict
        :return: The Holding of this Holding.  # noqa: E501
        :rtype: Holding
        """
        return util.deserialize_model(dikt, cls)

    @property
    def security_id(self):
        """Gets the security_id of this Holding.

        Plaid requires this field and `securityIdType` for: - holding types that use security IDs, such as stocks and options. - transactions involving such holding types. If you return this for a holding, Plaid looks up the close price from NYSE Group Security Master using the security ID. If you don't return this for a holding that uses security IDs (not recommended), Plaid uses the `currentUnitPrice` you return as the close price.   # noqa: E501

        :return: The security_id of this Holding.
        :rtype: str
        """
        return self._security_id

    @security_id.setter
    def security_id(self, security_id):
        """Sets the security_id of this Holding.

        Plaid requires this field and `securityIdType` for: - holding types that use security IDs, such as stocks and options. - transactions involving such holding types. If you return this for a holding, Plaid looks up the close price from NYSE Group Security Master using the security ID. If you don't return this for a holding that uses security IDs (not recommended), Plaid uses the `currentUnitPrice` you return as the close price.   # noqa: E501

        :param security_id: The security_id of this Holding.
        :type security_id: str
        """

        self._security_id = security_id

    @property
    def security_id_type(self):
        """Gets the security_id_type of this Holding.


        :return: The security_id_type of this Holding.
        :rtype: SecurityIdType
        """
        return self._security_id_type

    @security_id_type.setter
    def security_id_type(self, security_id_type):
        """Sets the security_id_type of this Holding.


        :param security_id_type: The security_id_type of this Holding.
        :type security_id_type: SecurityIdType
        """

        self._security_id_type = security_id_type

    @property
    def holding_name(self):
        """Gets the holding_name of this Holding.

        Holding name or security name  # noqa: E501

        :return: The holding_name of this Holding.
        :rtype: str
        """
        return self._holding_name

    @holding_name.setter
    def holding_name(self, holding_name):
        """Sets the holding_name of this Holding.

        Holding name or security name  # noqa: E501

        :param holding_name: The holding_name of this Holding.
        :type holding_name: str
        """

        self._holding_name = holding_name

    @property
    def holding_type(self):
        """Gets the holding_type of this Holding.


        :return: The holding_type of this Holding.
        :rtype: HoldingType
        """
        return self._holding_type

    @holding_type.setter
    def holding_type(self, holding_type):
        """Sets the holding_type of this Holding.


        :param holding_type: The holding_type of this Holding.
        :type holding_type: HoldingType
        """

        self._holding_type = holding_type

    @property
    def holding_sub_type(self):
        """Gets the holding_sub_type of this Holding.


        :return: The holding_sub_type of this Holding.
        :rtype: HoldingSubType
        """
        return self._holding_sub_type

    @holding_sub_type.setter
    def holding_sub_type(self, holding_sub_type):
        """Sets the holding_sub_type of this Holding.


        :param holding_sub_type: The holding_sub_type of this Holding.
        :type holding_sub_type: HoldingSubType
        """

        self._holding_sub_type = holding_sub_type

    @property
    def symbol(self):
        """Gets the symbol of this Holding.

        Ticker / Market symbol  # noqa: E501

        :return: The symbol of this Holding.
        :rtype: str
        """
        return self._symbol

    @symbol.setter
    def symbol(self, symbol):
        """Sets the symbol of this Holding.

        Ticker / Market symbol  # noqa: E501

        :param symbol: The symbol of this Holding.
        :type symbol: str
        """

        self._symbol = symbol

    @property
    def purchased_price(self):
        """Gets the purchased_price of this Holding.

        Price of holding at the time of purchase. Plaid determines an approximate [cost basis](https://plaid.com/docs/api/products/investments/#investments-holdings-get-response-holdings-cost-basis) using the purchase price and the number of units. Plaid cannot take fees into account to determine the cost basis because the FDX holding schema doesn't include fees.   # noqa: E501

        :return: The purchased_price of this Holding.
        :rtype: float
        """
        return self._purchased_price

    @purchased_price.setter
    def purchased_price(self, purchased_price):
        """Sets the purchased_price of this Holding.

        Price of holding at the time of purchase. Plaid determines an approximate [cost basis](https://plaid.com/docs/api/products/investments/#investments-holdings-get-response-holdings-cost-basis) using the purchase price and the number of units. Plaid cannot take fees into account to determine the cost basis because the FDX holding schema doesn't include fees.   # noqa: E501

        :param purchased_price: The purchased_price of this Holding.
        :type purchased_price: float
        """

        self._purchased_price = purchased_price

    @property
    def current_unit_price(self):
        """Gets the current_unit_price of this Holding.

        Current unit price. Plaid uses this as the [institution_price](https://plaid.com/docs/api/products/investments/#investments-holdings-get-response-holdings-institution-price). Plaid falls back to using this as the [close price](https://plaid.com/docs/api/products/investments/#investments-holdings-get-response-securities-close-price) if you don't return `securityId` for holdings involving securities.   # noqa: E501

        :return: The current_unit_price of this Holding.
        :rtype: float
        """
        return self._current_unit_price

    @current_unit_price.setter
    def current_unit_price(self, current_unit_price):
        """Sets the current_unit_price of this Holding.

        Current unit price. Plaid uses this as the [institution_price](https://plaid.com/docs/api/products/investments/#investments-holdings-get-response-holdings-institution-price). Plaid falls back to using this as the [close price](https://plaid.com/docs/api/products/investments/#investments-holdings-get-response-securities-close-price) if you don't return `securityId` for holdings involving securities.   # noqa: E501

        :param current_unit_price: The current_unit_price of this Holding.
        :type current_unit_price: float
        """

        self._current_unit_price = current_unit_price

    @property
    def current_unit_price_date(self):
        """Gets the current_unit_price_date of this Holding.

        ISO 8601 full-date in format 'YYYY-MM-DD' according to [IETF RFC3339](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  # noqa: E501

        :return: The current_unit_price_date of this Holding.
        :rtype: date
        """
        return self._current_unit_price_date

    @current_unit_price_date.setter
    def current_unit_price_date(self, current_unit_price_date):
        """Sets the current_unit_price_date of this Holding.

        ISO 8601 full-date in format 'YYYY-MM-DD' according to [IETF RFC3339](https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14)  # noqa: E501

        :param current_unit_price_date: The current_unit_price_date of this Holding.
        :type current_unit_price_date: date
        """
        if current_unit_price_date is not None and len(current_unit_price_date) > 10:
            raise ValueError("Invalid value for `current_unit_price_date`, length must be less than or equal to `10`")  # noqa: E501

        self._current_unit_price_date = current_unit_price_date

    @property
    def units(self):
        """Gets the units of this Holding.

        Plaid requires this field for holdings and transactions involving securities. For security-based actions other than stock splits, quantity. Shares for stocks, mutual funds, and others. Face value for bonds. Contracts for options.   # noqa: E501

        :return: The units of this Holding.
        :rtype: float
        """
        return self._units

    @units.setter
    def units(self, units):
        """Sets the units of this Holding.

        Plaid requires this field for holdings and transactions involving securities. For security-based actions other than stock splits, quantity. Shares for stocks, mutual funds, and others. Face value for bonds. Contracts for options.   # noqa: E501

        :param units: The units of this Holding.
        :type units: float
        """

        self._units = units

    @property
    def market_value(self):
        """Gets the market_value of this Holding.

        Market value at the time of data retrieved  # noqa: E501

        :return: The market_value of this Holding.
        :rtype: float
        """
        return self._market_value

    @market_value.setter
    def market_value(self, market_value):
        """Sets the market_value of this Holding.

        Market value at the time of data retrieved  # noqa: E501

        :param market_value: The market_value of this Holding.
        :type market_value: float
        """
        if market_value is None:
            raise ValueError("Invalid value for `market_value`, must not be `None`")  # noqa: E501

        self._market_value = market_value

    @property
    def face_value(self):
        """Gets the face_value of this Holding.

        Required for bonds. Face value at the time of data retrieved. If this isn't present, Plaid assumes the holding  isn't a bond and falls back to `marketValue`.   # noqa: E501

        :return: The face_value of this Holding.
        :rtype: float
        """
        return self._face_value

    @face_value.setter
    def face_value(self, face_value):
        """Sets the face_value of this Holding.

        Required for bonds. Face value at the time of data retrieved. If this isn't present, Plaid assumes the holding  isn't a bond and falls back to `marketValue`.   # noqa: E501

        :param face_value: The face_value of this Holding.
        :type face_value: float
        """

        self._face_value = face_value

    @property
    def cash_account(self):
        """Gets the cash_account of this Holding.

        If true, indicates that this holding is used to maintain proceeds from sales, dividends, and other cash postings to the investment account. If you don't set a value for `isCashEquivalent` in the `fiAttributes` array, then Plaid uses `cashAccount` in determining the [is_cash_equivalent](https://plaid.com/docs/api/products/investments/#investments-holdings-get-response-securities-is-cash-equivalent) status.   # noqa: E501

        :return: The cash_account of this Holding.
        :rtype: bool
        """
        return self._cash_account

    @cash_account.setter
    def cash_account(self, cash_account):
        """Sets the cash_account of this Holding.

        If true, indicates that this holding is used to maintain proceeds from sales, dividends, and other cash postings to the investment account. If you don't set a value for `isCashEquivalent` in the `fiAttributes` array, then Plaid uses `cashAccount` in determining the [is_cash_equivalent](https://plaid.com/docs/api/products/investments/#investments-holdings-get-response-securities-is-cash-equivalent) status.   # noqa: E501

        :param cash_account: The cash_account of this Holding.
        :type cash_account: bool
        """
        if cash_account is None:
            raise ValueError("Invalid value for `cash_account`, must not be `None`")  # noqa: E501

        self._cash_account = cash_account

    @property
    def currency(self):
        """Gets the currency of this Holding.


        :return: The currency of this Holding.
        :rtype: Currency
        """
        return self._currency

    @currency.setter
    def currency(self, currency):
        """Sets the currency of this Holding.


        :param currency: The currency of this Holding.
        :type currency: Currency
        """

        self._currency = currency

    @property
    def fi_attributes(self):
        """Gets the fi_attributes of this Holding.

        Array of financial institution-specific attributes. Plaid recommends including a value for [is_cash_equivalent](https://plaid.com/docs/api/products/investments/#investments-holdings-get-response-securities-is-cash-equivalent) property in this array. Plaid accepts `isCashEquivalent` as the name and a string `true` or `false` as the value. If you return a value for `isCashEquivalent`, then return the same value for `cashAccount` as a boolean.   # noqa: E501

        :return: The fi_attributes of this Holding.
        :rtype: List[FiAttribute]
        """
        return self._fi_attributes

    @fi_attributes.setter
    def fi_attributes(self, fi_attributes):
        """Sets the fi_attributes of this Holding.

        Array of financial institution-specific attributes. Plaid recommends including a value for [is_cash_equivalent](https://plaid.com/docs/api/products/investments/#investments-holdings-get-response-securities-is-cash-equivalent) property in this array. Plaid accepts `isCashEquivalent` as the name and a string `true` or `false` as the value. If you return a value for `isCashEquivalent`, then return the same value for `cashAccount` as a boolean.   # noqa: E501

        :param fi_attributes: The fi_attributes of this Holding.
        :type fi_attributes: List[FiAttribute]
        """

        self._fi_attributes = fi_attributes
