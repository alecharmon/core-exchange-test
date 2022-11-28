# coding: utf-8

from __future__ import absolute_import
from datetime import date, datetime  # noqa: F401

from typing import List, Dict  # noqa: F401

from openapi_server.models.base_model_ import Model
from openapi_server.models.account_holder_relationship import AccountHolderRelationship
from openapi_server.models.customer_name import CustomerName
from openapi_server import util

from openapi_server.models.account_holder_relationship import AccountHolderRelationship  # noqa: E501
from openapi_server.models.customer_name import CustomerName  # noqa: E501

class AccountHolder(Model):
    """NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).

    Do not edit the class manually.
    """

    def __init__(self, name=None, relationship=None):  # noqa: E501
        """AccountHolder - a model defined in OpenAPI

        :param name: The name of this AccountHolder.  # noqa: E501
        :type name: CustomerName
        :param relationship: The relationship of this AccountHolder.  # noqa: E501
        :type relationship: AccountHolderRelationship
        """
        self.openapi_types = {
            'name': CustomerName,
            'relationship': AccountHolderRelationship
        }

        self.attribute_map = {
            'name': 'name',
            'relationship': 'relationship'
        }

        self._name = name
        self._relationship = relationship

    @classmethod
    def from_dict(cls, dikt) -> 'AccountHolder':
        """Returns the dict as a model

        :param dikt: A dict.
        :type: dict
        :return: The AccountHolder of this AccountHolder.  # noqa: E501
        :rtype: AccountHolder
        """
        return util.deserialize_model(dikt, cls)

    @property
    def name(self):
        """Gets the name of this AccountHolder.


        :return: The name of this AccountHolder.
        :rtype: CustomerName
        """
        return self._name

    @name.setter
    def name(self, name):
        """Sets the name of this AccountHolder.


        :param name: The name of this AccountHolder.
        :type name: CustomerName
        """
        if name is None:
            raise ValueError("Invalid value for `name`, must not be `None`")  # noqa: E501

        self._name = name

    @property
    def relationship(self):
        """Gets the relationship of this AccountHolder.


        :return: The relationship of this AccountHolder.
        :rtype: AccountHolderRelationship
        """
        return self._relationship

    @relationship.setter
    def relationship(self, relationship):
        """Sets the relationship of this AccountHolder.


        :param relationship: The relationship of this AccountHolder.
        :type relationship: AccountHolderRelationship
        """

        self._relationship = relationship
