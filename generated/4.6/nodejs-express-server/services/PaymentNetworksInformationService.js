/* eslint-disable no-unused-vars */
const Service = require('./Service');

/**
* Get payment networks supported by the account
* Get payment networks supported by an account, for example ACH (Automated Clearing House). For more information about how Plaid uses this information, see the [Plaid Auth API](https://plaid.com/docs/api/products/auth/). 
*
* accountId String Account identifier, found in the `GET /accounts` endpoint response. Plaid expects the ID to be a different value from the account number.
* offset String Plaid receives this value from your organization's latest response in a paginated response, and returns it to in a new request to get the next page. Your organization omits `nextOffset` in the response to indicate the last page.  (optional)
* limit Integer Number of elements that the API consumer wishes to receive. Plaid has a default limit of 100 elements. If this value differs from your organization's limit for the number of items to send in one response, then pick the lower of the two different limits and use the lower limit to define the number of items you send on each page of a paginated response. Plaid then gets the next page by making a new request with the opaque `nextOffset` field that your organization returned in the latest response, until your organization omits `nextOffset` in the response to indicate the last page.  (optional)
* returns AccountPaymentNetworkList
* */
const getAccountPaymentNetworks = ({ accountId, offset, limit }) => new Promise(
  async (resolve, reject) => {
    try {
      resolve(Service.successResponse({
        accountId,
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
  getAccountPaymentNetworks,
};
