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
	public function __construct()
	{
		parent::__construct();
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
			return $e->getResponse()->getStatusCode();
		}
		
		// return json_decode($this->tierion->getBody());
	}
}