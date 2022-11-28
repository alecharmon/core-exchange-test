import connexion
import six
from typing import Dict
from typing import Tuple
from typing import Union

from openapi_server.models.account_not_found import AccountNotFound  # noqa: E501
from openapi_server.models.account_with_details import AccountWithDetails  # noqa: E501
from openapi_server.models.accounts import Accounts  # noqa: E501
from openapi_server.models.customer_not_authorized import CustomerNotAuthorized  # noqa: E501
from openapi_server.models.error import Error  # noqa: E501
from openapi_server.models.internal_server_error import InternalServerError  # noqa: E501
from openapi_server.models.invalid_input_errors import InvalidInputErrors  # noqa: E501
from openapi_server import util


def get_account(account_id):  # noqa: E501
    """Get detailed information for a specific account

    Get account balances, liabilities, and other information. Plaid uses this endpoint to: - Get account balances for deposit accounts, for example, &#x60;CHECKING&#x60; or &#x60;SAVINGS&#x60;. For more information about how Plaid uses this information, see [Plaid Balance API](https://plaid.com/docs/api/products/balance/). - Get account liabilities for &#x60;STUDENTLOAN&#x60;, &#x60;MORTGAGE&#x60;, and &#x60;CREDITCARD&#x60;. For more information about how Plaid uses this information, see [Plaid Liabilities API](https://plaid.com/docs/api/products/liabilities/). For more information, see the example response descriptions.  # noqa: E501

    :param account_id: Account identifier, found in the &#x60;GET /accounts&#x60; endpoint response. Plaid expects the ID to be a different value from the account number. 
    :type account_id: str

    :rtype: Union[AccountWithDetails, Tuple[AccountWithDetails, int], Tuple[AccountWithDetails, int, Dict[str, str]]
    """
    return 'do some magic!'


def list_accounts(offset=None, limit=None):  # noqa: E501
    """List all accounts

    List all accounts # noqa: E501

    :param offset: Plaid receives this value from your organization&#39;s latest response in a paginated response, and returns it to in a new request to get the next page. Your organization omits &#x60;nextOffset&#x60; in the response to indicate the last page. 
    :type offset: str
    :param limit: Number of elements that the API consumer wishes to receive. Plaid has a default limit of 100 elements. If this value differs from your organization&#39;s limit for the number of items to send in one response, then pick the lower of the two different limits and use the lower limit to define the number of items you send on each page of a paginated response. Plaid then gets the next page by making a new request with the opaque &#x60;nextOffset&#x60; field that your organization returned in the latest response, until your organization omits &#x60;nextOffset&#x60; in the response to indicate the last page. 
    :type limit: int

    :rtype: Union[Accounts, Tuple[Accounts, int], Tuple[Accounts, int, Dict[str, str]]
    """
    return 'do some magic!'
