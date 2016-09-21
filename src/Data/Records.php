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
	public function __construct($config = [])
	{
		parent::__construct($config);
	}

	/**
	 * Create new Record
	 * 
	 **/
	public function create($data = [])
	{
		//do request
		try {

			$response = $this->tierion->post($this->endpoint,[
												'body' => json_encode($data)
											]);
			return json_decode($response->getBody()->getContents());
		} catch(\GuzzleHttp\Exception\ClientException $e) {
			return json_decode($e->getResponse()->getBody()->getContents());
		}
	}

	/**
	 * Delete Record on Datastore
	 * @param 	$id    String
	 **/
	public function delete($id)
	{
		//do request
		try {
			$this->tierion->delete($this->endpoint."/$id");

			return true;
		} catch(\GuzzleHttp\Exception\ClientException $e) {
			return json_decode($e->getResponse()->getBody()->getContents());
		}
	}
}