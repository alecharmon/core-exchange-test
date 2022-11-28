# coding: utf-8

from __future__ import absolute_import
from datetime import date, datetime  # noqa: F401

from typing import List, Dict  # noqa: F401

from openapi_server.models.base_model_ import Model
from openapi_server.models.account_descriptor import AccountDescriptor
from openapi_server import util

from openapi_server.models.account_descriptor import AccountDescriptor  # noqa: E501

class AccountWithDescriptorOneOf1(Model):
    """NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).

    Do not edit the class manually.
    """

    def __init__(self, loan_account=None):  # noqa: E501
        """AccountWithDescriptorOneOf1 - a model defined in OpenAPI

        :param loan_account: The loan_account of this AccountWithDescriptorOneOf1.  # noqa: E501
        :type loan_account: AccountDescriptor
        """
        self.openapi_types = {
            'loan_account': AccountDescriptor
        }

        self.attribute_map = {
            'loan_account': 'loanAccount'
        }

        self._loan_account = loan_account

    @classmethod
    def from_dict(cls, dikt) -> 'AccountWithDescriptorOneOf1':
        """Returns the dict as a model

        :param dikt: A dict.
        :type: dict
        :return: The AccountWithDescriptor_oneOf_1 of this AccountWithDescriptorOneOf1.  # noqa: E501
        :rtype: AccountWithDescriptorOneOf1
        """
        return util.deserialize_model(dikt, cls)

    @property
    def loan_account(self):
        """Gets the loan_account of this AccountWithDescriptorOneOf1.


        :return: The loan_account of this AccountWithDescriptorOneOf1.
        :rtype: AccountDescriptor
        """
        return self._loan_account

    @loan_account.setter
    def loan_account(self, loan_account):
        """Sets the loan_account of this AccountWithDescriptorOneOf1.


        :param loan_account: The loan_account of this AccountWithDescriptorOneOf1.
        :type loan_account: AccountDescriptor
        """
        if loan_account is None:
            raise ValueError("Invalid value for `loan_account`, must not be `None`")  # noqa: E501

        self._loan_account = loan_account
