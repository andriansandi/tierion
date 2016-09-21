<?php
/**
 * Tierion Wrapper API
 *
 * @author 		Sandi Andrian (andrian.sandi@gmail.com)
 * @since   	Sep 21, 2016
 * @version 	0.1
 * @package		Tierion\Data
 **/
namespace Tierion;

use GuzzleHttp\Client;

class Tierion 
{
	public $base_uri = 'https://api.tierion.com/';
	public $api_version = 'v1';
	public $base_endpoint = '/';
	public $endpoint = '/';
	public $tierion;

	public function __construct()
	{
		$this->base_endpoint = $this->api_version.'/'.strtolower(class_basename($this));
		$this->tierion = new Client([
            'base_uri' => $this->base_uri,
            // 'cert' => __DIR__ . '/../cacert.pem',
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'X-Username' => "elliot.gembel@gmail.com",
                'X-Api-Key' => "kLFUTJ9DTSfjUCylAPb8AYVUvGdKoiCND/IQpcQoQNg="
            ]
        ]);
	}
}