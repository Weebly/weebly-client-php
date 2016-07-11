# Weebly Client

Weebly Client is a basic PHP class that simplifies interactions with the Weebly REST API.

You can find more details about how to get set-up with your Weebly project at <https://dev.weebly.com/get-started-with-developing-apps.html>.

You can find details about the various endpoints that you may access with the Weebly Client at <https://dev.weebly.com/about-rest-apis.html>.

## Usage

### Instantiating the Client

You may insantiate a new Weebly Client as such:

```php
$client = \Weebly\WeeblyClient($client_id, $client_secret, $user_id, $site_id, $access_token);
```

The only mandatory options that you must provide to the constructor are `$client_id` and `$client_secret`. You can find them both in your dev dashboard at <https://www.weebly.com/developer-admin> once you have registered a developer account with Weebly.
Please store these credentials securely on your server, and do not expose them publically.
The `$user_id`, `site_id` and `$access_token` are made accessible to you when a user grants your app permissions through the App OAuth flow. You do not need to provide these parameters unless you are accessing the OAuth methods. (i.e. _*Store APIs*_, _*Site APIs*_)

You can find more information about the OAuth flow at <https://dev.weebly.com/authentication-with-oauth2.html>.

#### Authorizing through the OAuth Flow
The WeeblyClient provides a few helper methods to aid you through the OAuth flow.
    * `getAuthorizationUrl` Returns a properly formatted authorization URL that you should respond with after our servers initiate the OAuth flow.
    * `getAccessToken` Retrieves the access token once you have obtained the necessary authorization code in OAuth.

You can find about how to configure the OAuth flow and how to obtain the `$user_id`, `site_id` and `$access_token` at <https://dev.weebly.com/configure-oauth.html>.


### Making API Calls
We have provided simplified functions to make requests with the GET, POST, DELETE, PATCH and PUT methods.

#### Examples:
Get Site Details:

```php
$endpoint = '/user/sites/' . $site_id;
$response = $client.get($endpoint);
```

Mark a product as shipped:
```php
$endpoint = '/user/sites/' . $site_id . '/store/orders/' . $order_id . '/shipments/' . $order_shipment_id;
$product = ['tracking_number' => '1234567810abcde']; //Modifying the tracking_number on an unshipped product will mark it as shipped as well!
$response = $client.put($endpoint, $product);
```

You can find details about the various endpoints that you may access with the Weebly Client at <https://dev.weebly.com/about-rest-apis.html>.

### Questions?
If you have any questions or feature requests pertaining to the Weebly Client, please open up a new issue.
For general API questions, please contact us at dev-support@weebly.com, and we'll be happy to lend a hand!