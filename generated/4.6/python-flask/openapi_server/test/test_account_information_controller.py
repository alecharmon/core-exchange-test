# coding: utf-8

from __future__ import absolute_import
import unittest

from flask import json
from six import BytesIO

from openapi_server.models.account_not_found import AccountNotFound  # noqa: E501
from openapi_server.models.account_with_details import AccountWithDetails  # noqa: E501
from openapi_server.models.accounts import Accounts  # noqa: E501
from openapi_server.models.customer_not_authorized import CustomerNotAuthorized  # noqa: E501
from openapi_server.models.error import Error  # noqa: E501
from openapi_server.models.internal_server_error import InternalServerError  # noqa: E501
from openapi_server.models.invalid_input_errors import InvalidInputErrors  # noqa: E501
from openapi_server.test import BaseTestCase


class TestAccountInformationController(BaseTestCase):
    """AccountInformationController integration test stubs"""

    def test_get_account(self):
        """Test case for get_account

        Get detailed information for a specific account
        """
        headers = { 
            'Accept': 'application/json',
            'Authorization': 'Bearer special-key',
        }
        response = self.client.open(
            '/fdx/v4/accounts/{account_id}'.format(account_id='account_id_example'),
            method='GET',
            headers=headers)
        self.assert200(response,
                       'Response body is : ' + response.data.decode('utf-8'))

    def test_list_accounts(self):
        """Test case for list_accounts

        List all accounts
        """
        query_string = [('offset', 'qwer123454q2f'),
                        ('limit', 56)]
        headers = { 
            'Accept': 'application/json',
            'Authorization': 'Bearer special-key',
        }
        response = self.client.open(
            '/fdx/v4/accounts',
            method='GET',
            headers=headers,
            query_string=query_string)
        self.assert200(response,
                       'Response body is : ' + response.data.decode('utf-8'))


if __name__ == '__main__':
    unittest.main()
