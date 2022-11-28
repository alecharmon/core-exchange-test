# coding: utf-8

from __future__ import absolute_import
from datetime import date, datetime  # noqa: F401

from typing import List, Dict  # noqa: F401

from openapi_server.models.base_model_ import Model
from openapi_server.models.account_with_descriptor import AccountWithDescriptor
from openapi_server import util

from openapi_server.models.account_with_descriptor import AccountWithDescriptor  # noqa: E501

class AccountsAllOf(Model):
    """NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).

    Do not edit the class manually.
    """

    def __init__(self, accounts=None):  # noqa: E501
        """AccountsAllOf - a model defined in OpenAPI

        :param accounts: The accounts of this AccountsAllOf.  # noqa: E501
        :type accounts: List[AccountWithDescriptor]
        """
        self.openapi_types = {
            'accounts': List[AccountWithDescriptor]
        }

        self.attribute_map = {
            'accounts': 'accounts'
        }

        self._accounts = accounts

    @classmethod
    def from_dict(cls, dikt) -> 'AccountsAllOf':
        """Returns the dict as a model

        :param dikt: A dict.
        :type: dict
        :return: The Accounts_allOf of this AccountsAllOf.  # noqa: E501
        :rtype: AccountsAllOf
        """
        return util.deserialize_model(dikt, cls)

    @property
    def accounts(self):
        """Gets the accounts of this AccountsAllOf.

        An array of accounts with entity types dependent on the account type (deposit, investment, loan, or line of credit). Plaid expects your organization to return an empty array if this information isn't available. Plaid accepts all account types for this endpoint but consumes account details through `GET accounts/{accountID}` solely for deposit, loan, and line of credit accounts.   # noqa: E501

        :return: The accounts of this AccountsAllOf.
        :rtype: List[AccountWithDescriptor]
        """
        return self._accounts

    @accounts.setter
    def accounts(self, accounts):
        """Sets the accounts of this AccountsAllOf.

        An array of accounts with entity types dependent on the account type (deposit, investment, loan, or line of credit). Plaid expects your organization to return an empty array if this information isn't available. Plaid accepts all account types for this endpoint but consumes account details through `GET accounts/{accountID}` solely for deposit, loan, and line of credit accounts.   # noqa: E501

        :param accounts: The accounts of this AccountsAllOf.
        :type accounts: List[AccountWithDescriptor]
        """
        if accounts is None:
            raise ValueError("Invalid value for `accounts`, must not be `None`")  # noqa: E501
        if accounts is not None and len(accounts) < 1:
            raise ValueError("Invalid value for `accounts`, number of items must be greater than or equal to `1`")  # noqa: E501

        self._accounts = accounts
