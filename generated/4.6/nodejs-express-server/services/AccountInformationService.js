/* eslint-disable no-unused-vars */
const Service = require('./Service');

/**
* Get detailed information for a specific account
* Get account balances, liabilities, and other information. Plaid uses this endpoint to: - Get account balances for deposit accounts, for example, `CHECKING` or `SAVINGS`. For more information about how Plaid uses this information, see [Plaid Balance API](https://plaid.com/docs/api/products/balance/). - Get account liabilities for `STUDENTLOAN`, `MORTGAGE`, and `CREDITCARD`. For more information about how Plaid uses this information, see [Plaid Liabilities API](https://plaid.com/docs/api/products/liabilities/). For more information, see the example response descriptions. 
*
* accountId String Account identifier, found in the `GET /accounts` endpoint response. Plaid expects the ID to be a different value from the account number. 
* returns AccountWithDetails
* */
const getAccount = ({ accountId }) => new Promise(
  async (resolve, reject) => {
    try {
      resolve(Service.successResponse({
        accountId,
      }));
    } catch (e) {
      reject(Service.rejectResponse(
        e.message || 'Invalid input',
        e.status || 405,
      ));
    }
  },
);
/**
* List all accounts
* List all accounts
*
* offset String Plaid receives this value from your organization's latest response in a paginated response, and returns it to in a new request to get the next page. Your organization omits `nextOffset` in the response to indicate the last page.  (optional)
* limit Integer Number of elements that the API consumer wishes to receive. Plaid has a default limit of 100 elements. If this value differs from your organization's limit for the number of items to send in one response, then pick the lower of the two different limits and use the lower limit to define the number of items you send on each page of a paginated response. Plaid then gets the next page by making a new request with the opaque `nextOffset` field that your organization returned in the latest response, until your organization omits `nextOffset` in the response to indicate the last page.  (optional)
* returns Accounts
* */
const listAccounts = ({ offset, limit }) => new Promise(
  async (resolve, reject) => {
    try {
      resolve(Service.successResponse({
        offset,
        limit,
      }));
    } catch (e) {
      reject(Service.rejectResponse(
        e.message || 'Invalid input',
        e.status || 405,
      ));
    }
  },
);

module.exports = {
  getAccount,
  listAccounts,
};
