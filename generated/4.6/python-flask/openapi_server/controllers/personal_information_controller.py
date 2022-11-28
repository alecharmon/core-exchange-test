import connexion
import six
from typing import Dict
from typing import Tuple
from typing import Union

from openapi_server.models.account_contact import AccountContact  # noqa: E501
from openapi_server.models.account_not_found import AccountNotFound  # noqa: E501
from openapi_server.models.customer_not_authorized import CustomerNotAuthorized  # noqa: E501
from openapi_server.models.customer_with_id import CustomerWithId  # noqa: E501
from openapi_server.models.error import Error  # noqa: E501
from openapi_server.models.internal_server_error import InternalServerError  # noqa: E501
from openapi_server.models.invalid_input_errors import InvalidInputErrors  # noqa: E501
from openapi_server import util


def get_account_contact(account_id):  # noqa: E501
    """Get an account&#39;s contact information

    Get contact information on the account. Plaid links contact information to accounts, rather than to users. Plaid consumes multiple holders and their contact information for the account, but doesn&#39;t attempt to correlate holders to their respective contact information. For more information about Plaid&#39;s identity model, see [Plaid Identity API](https://plaid.com/docs/api/products/identity/).  # noqa: E501

    :param account_id: Account identifier, found in the &#x60;GET /accounts&#x60; endpoint response. Plaid expects the ID to be a different value from the account number. 
    :type account_id: str

    :rtype: Union[AccountContact, Tuple[AccountContact, int], Tuple[AccountContact, int, Dict[str, str]]
    """
    return 'do some magic!'


def get_customer_id():  # noqa: E501
    """Get current authenticated customer id

    Get the id of the customer within the authorization scope. Plaid consumes this endpoint as an alternate method of customer identification if you use Oauth2. If you instead use OIDC (recommended), Plaid identifies the customer using the OIDC &#x60;id_token&#x60; response, and you don&#39;t need to implement this endpoint. # noqa: E501


    :rtype: Union[CustomerWithId, Tuple[CustomerWithId, int], Tuple[CustomerWithId, int, Dict[str, str]]
    """
    return 'do some magic!'
