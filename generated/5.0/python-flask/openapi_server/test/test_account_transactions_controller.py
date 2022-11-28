# coding: utf-8

from __future__ import absolute_import
import unittest

from flask import json
from six import BytesIO

from openapi_server.models.account_not_found import AccountNotFound  # noqa: E501
from openapi_server.models.customer_not_authorized import CustomerNotAuthorized  # noqa: E501
from openapi_server.models.error import Error  # noqa: E501
from openapi_server.models.internal_server_error import InternalServerError  # noqa: E501
from openapi_server.models.invalid_input_errors import InvalidInputErrors  # noqa: E501
from openapi_server.models.transactions import Transactions  # noqa: E501
from openapi_server.test import BaseTestCase


class TestAccountTransactionsController(BaseTestCase):
    """AccountTransactionsController integration test stubs"""

    def test_list_account_transactions(self):
        """Test case for list_account_transactions

        List all account transactions
        """
        query_string = [('startTime', '2013-10-20'),
                        ('endTime', '2013-10-20'),
                        ('offset', 'qwer123454q2f'),
                        ('limit', 56)]
        headers = { 
            'Accept': 'application/json',
            'Authorization': 'Bearer special-key',
        }
        response = self.client.open(
            '/fdx/v5/accounts/{account_id}/transactions'.format(account_id='account_id_example'),
            method='GET',
            headers=headers,
            query_string=query_string)
        self.assert200(response,
                       'Response body is : ' + response.data.decode('utf-8'))


if __name__ == '__main__':
    unittest.main()
