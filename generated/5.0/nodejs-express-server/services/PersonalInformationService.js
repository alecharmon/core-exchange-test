/* eslint-disable no-unused-vars */
const Service = require('./Service');

/**
* Get an account's contact information
* Get contact information on the account. Plaid links contact information to accounts, rather than to users. Plaid consumes multiple holders and their contact information for the account, but doesn't attempt to correlate holders to their respective contact information. For more information about Plaid's identity model, see [Plaid Identity API](https://plaid.com/docs/api/products/identity/). 
*
* accountId String Account identifier, found in the `GET /accounts` endpoint response. Plaid expects the ID to be a different value from the account number. 
* returns AccountContact
* */
const getAccountContact = ({ accountId }) => new Promise(
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
* Get current authenticated customer id
* Get the id of the customer within the authorization scope. Plaid consumes this endpoint as an alternate method of customer identification if you use Oauth2. If you instead use OIDC (recommended), Plaid identifies the customer using the OIDC `id_token` response, and you don't need to implement this endpoint.
*
* returns CustomerWithId
* */
const getCustomerId = () => new Promise(
  async (resolve, reject) => {
    try {
      resolve(Service.successResponse({
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
  getAccountContact,
  getCustomerId,
};
