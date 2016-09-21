<?php
/**
 * Tierion Data Records Wrapper API
 *
 * @author 		Sandi Andrian (andrian.sandi@gmail.com)
 * @since   	Sep 21, 2016
 * @version 	0.1
 * @package		Tierion\Data
 **/

namespace Tierion\Data;

use Tierion\Tierion;

class Records extends Tierion 
{
	public function __construct($username, $api_key)
	{
		parent::__construct($username, $api_key);
	}

	public function create()
	{
		
	}

	/**
	 * Delete Records
	 *
	 * @param  		id     string
	 **/
	public function delete($id)
	{
		$this->endpoint = '/'.$this->base_endpoint.'/'.$id;

		//do request
		try {
			$this->tierion->delete($this->endpoint);
		} catch(\GuzzleHttp\Exception\ClientException $e) {
			return json_decode($e->getResponse()->getBody()->getContents());
		}
		
		// return json_decode($this->tierion->getBody());
	}
}