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
	public function __construct($client_id, $client_secret, $user_id, $site_id=null)
	{
		$this->client_id = $client_id;
		$this->client_secret = $client_secret;
		$this->user_id = $user_id;
		$this->site_id = $site_id;
	}

}