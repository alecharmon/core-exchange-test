/* eslint-disable no-unused-vars */
const Service = require('./Service');

/**
* List all account transactions
* List all account transactions. Plaid always queries this endpoint using an `startTime` and `endTime`, for example, `/accounts/{accountId}/transactions?startTime=2022-01-30&endTime=2022-05-30`, and expects the time filters to be based on the `postedTimestamp`. Plaid consumes information from this endpoint solely for deposit, investment, loan, or line of credit (LOC) account types. 
*
* accountId String Account identifier, found in the `GET /accounts` endpoint response. Plaid expects the ID to be a different value from the account number. 
* startTime date Start time for use in retrieval of elements (ISO 8601). For transactions, Plaid expects this to filter by the `postedTimestamp`. (optional)
* endTime date End time for use in retrieval of elements (ISO 8601). For transactions, Plaid expects this to filter by the `postedTimestamp`. (optional)
* offset String Plaid receives this value from your organization's latest response in a paginated response, and returns it to in a new request to get the next page. Your organization omits `nextOffset` in the response to indicate the last page.  (optional)
* limit Integer Number of elements that the API consumer wishes to receive. Plaid has a default limit of 100 elements. If this value differs from your organization's limit for the number of items to send in one response, then pick the lower of the two different limits and use the lower limit to define the number of items you send on each page of a paginated response. Plaid then gets the next page by making a new request with the opaque `nextOffset` field that your organization returned in the latest response, until your organization omits `nextOffset` in the response to indicate the last page.  (optional)
* returns Transactions
* */
const listAccountTransactions = ({ accountId, startTime, endTime, offset, limit }) => new Promise(
  async (resolve, reject) => {
    try {
      resolve(Service.successResponse({
        accountId,
        startTime,
        endTime,
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
  listAccountTransactions,
};
