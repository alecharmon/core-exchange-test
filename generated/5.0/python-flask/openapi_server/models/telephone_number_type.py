# coding: utf-8

from __future__ import absolute_import
from datetime import date, datetime  # noqa: F401

from typing import List, Dict  # noqa: F401

from openapi_server.models.base_model_ import Model
from openapi_server import util


class TelephoneNumberType(Model):
    """NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).

    Do not edit the class manually.
    """

    """
    allowed enum values
    """
    HOME = "HOME"
    BUSINESS = "BUSINESS"
    CELL = "CELL"
    FAX = "FAX"
    def __init__(self):  # noqa: E501
        """TelephoneNumberType - a model defined in OpenAPI

        """
        self.openapi_types = {
        }

        self.attribute_map = {
        }

    @classmethod
    def from_dict(cls, dikt) -> 'TelephoneNumberType':
        """Returns the dict as a model

        :param dikt: A dict.
        :type: dict
        :return: The TelephoneNumberType of this TelephoneNumberType.  # noqa: E501
        :rtype: TelephoneNumberType
        """
        return util.deserialize_model(dikt, cls)
