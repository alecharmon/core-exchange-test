# coding: utf-8

from __future__ import absolute_import
import unittest

from flask import json
from six import BytesIO

from openapi_server.models.account_contact import AccountContact  # noqa: E501
from openapi_server.models.account_not_found import AccountNotFound  # noqa: E501
from openapi_server.models.customer_not_authorized import CustomerNotAuthorized  # noqa: E501
from openapi_server.models.customer_with_id import CustomerWithId  # noqa: E501
from openapi_server.models.error import Error  # noqa: E501
from openapi_server.models.internal_server_error import InternalServerError  # noqa: E501
from openapi_server.models.invalid_input_errors import InvalidInputErrors  # noqa: E501
from openapi_server.test import BaseTestCase


class TestPersonalInformationController(BaseTestCase):
    """PersonalInformationController integration test stubs"""

    def test_get_account_contact(self):
        """Test case for get_account_contact

        Get an account's contact information
        """
        headers = { 
            'Accept': 'application/json',
            'Authorization': 'Bearer special-key',
        }
        response = self.client.open(
            '/fdx/v5/accounts/{account_id}/contact'.format(account_id='account_id_example'),
            method='GET',
            headers=headers)
        self.assert200(response,
                       'Response body is : ' + response.data.decode('utf-8'))

    def test_get_customer_id(self):
        """Test case for get_customer_id

        Get current authenticated customer id
        """
        headers = { 
            'Accept': 'application/json',
            'Authorization': 'Bearer special-key',
        }
        response = self.client.open(
            '/fdx/v5/customers/current',
            method='GET',
            headers=headers)
        self.assert200(response,
                       'Response body is : ' + response.data.decode('utf-8'))


if __name__ == '__main__':
    unittest.main()
