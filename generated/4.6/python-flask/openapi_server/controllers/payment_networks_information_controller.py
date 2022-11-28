import connexion
import six
from typing import Dict
from typing import Tuple
from typing import Union

from openapi_server.models.account_not_found import AccountNotFound  # noqa: E501
from openapi_server.models.account_payment_network_list import AccountPaymentNetworkList  # noqa: E501
from openapi_server.models.customer_not_authorized import CustomerNotAuthorized  # noqa: E501
from openapi_server.models.error import Error  # noqa: E501
from openapi_server.models.internal_server_error import InternalServerError  # noqa: E501
from openapi_server.models.invalid_input_errors import InvalidInputErrors  # noqa: E501
from openapi_server import util


def get_account_payment_networks(account_id, offset=None, limit=None):  # noqa: E501
    """Get payment networks supported by the account

    Get payment networks supported by an account, for example ACH (Automated Clearing House). For more information about how Plaid uses this information, see the [Plaid Auth API](https://plaid.com/docs/api/products/auth/).  # noqa: E501

    :param account_id: Account identifier, found in the &#x60;GET /accounts&#x60; endpoint response. Plaid expects the ID to be a different value from the account number.
    :type account_id: str
    :param offset: Plaid receives this value from your organization&#39;s latest response in a paginated response, and returns it to in a new request to get the next page. Your organization omits &#x60;nextOffset&#x60; in the response to indicate the last page. 
    :type offset: str
    :param limit: Number of elements that the API consumer wishes to receive. Plaid has a default limit of 100 elements. If this value differs from your organization&#39;s limit for the number of items to send in one response, then pick the lower of the two different limits and use the lower limit to define the number of items you send on each page of a paginated response. Plaid then gets the next page by making a new request with the opaque &#x60;nextOffset&#x60; field that your organization returned in the latest response, until your organization omits &#x60;nextOffset&#x60; in the response to indicate the last page. 
    :type limit: int

    :rtype: Union[AccountPaymentNetworkList, Tuple[AccountPaymentNetworkList, int], Tuple[AccountPaymentNetworkList, int, Dict[str, str]]
    """
    return 'do some magic!'
