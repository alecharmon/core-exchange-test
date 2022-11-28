import connexion
import six
from typing import Dict
from typing import Tuple
from typing import Union

from openapi_server.models.account_not_found import AccountNotFound  # noqa: E501
from openapi_server.models.customer_not_authorized import CustomerNotAuthorized  # noqa: E501
from openapi_server.models.error import Error  # noqa: E501
from openapi_server.models.internal_server_error import InternalServerError  # noqa: E501
from openapi_server.models.invalid_input_errors import InvalidInputErrors  # noqa: E501
from openapi_server.models.transactions import Transactions  # noqa: E501
from openapi_server import util


def search_for_account_transactions(account_id, start_time=None, end_time=None, offset=None, limit=None):  # noqa: E501
    """Search for account transactions

    List all account transactions. Plaid always queries this endpoint using an &#x60;startTime&#x60; and &#x60;endTime&#x60;, for example, &#x60;/accounts/{accountId}/transactions?startTime&#x3D;2022-01-30&amp;endTime&#x3D;2022-05-30&#x60;, and expects the time filters to be based on the &#x60;postedTimestamp&#x60;. Plaid consumes information from this endpoint solely for loan, deposit, or line of credit (LOC) account types.  # noqa: E501

    :param account_id: Account identifier, found in the &#x60;GET /accounts&#x60; endpoint response. Plaid expects the ID to be a different value from the account number.
    :type account_id: str
    :param start_time: Start time for use in retrieval of elements (ISO 8601). For transactions, Plaid expects this to filter by the &#x60;postedTimestamp&#x60;.
    :type start_time: str
    :param end_time: End time for use in retrieval of elements (ISO 8601). For transactions, Plaid expects this to filter by the &#x60;postedTimestamp&#x60;.
    :type end_time: str
    :param offset: Plaid receives this value from your organization&#39;s latest response in a paginated response, and returns it to in a new request to get the next page. Your organization omits &#x60;nextOffset&#x60; in the response to indicate the last page. 
    :type offset: str
    :param limit: Number of elements that the API consumer wishes to receive. Plaid has a default limit of 100 elements. If this value differs from your organization&#39;s limit for the number of items to send in one response, then pick the lower of the two different limits and use the lower limit to define the number of items you send on each page of a paginated response. Plaid then gets the next page by making a new request with the opaque &#x60;nextOffset&#x60; field that your organization returned in the latest response, until your organization omits &#x60;nextOffset&#x60; in the response to indicate the last page. 
    :type limit: int

    :rtype: Union[Transactions, Tuple[Transactions, int], Tuple[Transactions, int, Dict[str, str]]
    """
    return 'do some magic!'
