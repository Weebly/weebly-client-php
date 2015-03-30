<?php

namespace Weebly;

class WeeblyClient 
{
	/**
	 * Weebly User Id
	 */
	public $user_id;

	/**
	 * Weebly Site Id
	 */
	public $site_id;

	/**
	 * Application Client Id
	 */
	private $client_id;

	/**
	 * Application Client Secret
	 */
	private $client_secret;

	/**
	 * Creates a new API interaction object.
	 *
	 * @param $client_id       Your application client_id
	 * @param $client_secret   Your application client_secret
	 * @param $user_id         The Weebly User Id
	 * @param $site_id         The Weebly Site Id
	 *
	 * @return instance
	 */
	public function __construct($client_id, $client_secret, $user_id, $site_id=null, $access_token=null)
	{
		$this->client_id = $client_id;
		$this->client_secret = $client_secret;
		$this->user_id = $user_id;
		$this->site_id = $site_id;
	}

	/**
	 * Returns the url to redirect to for oauth authentication (Step 1 in OAuth flow)
	 *
	 * @param (optional) array $scope           An array of the permissions your application is 
	 *                                          requesting i.e (read:user, read:commerce)
	 * @param (optional) string $redirect_uri   The url weebly will redirect to upon user's grant of 
	 *                                          permissions. Defaults to application callback url
	 *
	 *
	 * @return string $authorization_url
	 */
	public function getAuthorizationUrl($scope=array(), $redirect_uri=null)
	{

	}

	/**
	 * Exchanges a temporary authorization code for a permanent access_token
	 *
	 * @param string $authorization_code   The authorization_code sent from weebly after the user has 
	 *                                     granted the application access to their data.
	 *
	 *
	 * @return string $access_token
	 */
	public function getAccessToken($authorization_code)
	{

	}
}