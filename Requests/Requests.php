<?php

class Requests {

	private $function_map;
	public $API_TOKEN = null;
	public const API_KEY = 'd0d051a80d6f7cc992d05de71b658264';
	public const business_secret = 'fd0MJTJqIvxn0AqTgY5OGtSs9DY%2F%2F7j2WuMtgeDA5So%3D';
    // public const url = 'http://localhost/Remotiq-API/v1/api/';
	 public const url = 'https://api.remotiq.com/v1/api/';
	//--------------------------------------------------------------------------------------------------------------------
	public function __construct() {
		try {
			if($this::API_KEY)
			$this->API_TOKEN = JWT::encode(['int' => date('y-m-d h:i:s')], $this::business_secret);
		} catch(exception $ex) {
			print_r($ex);
		}
		// $this->loadFunctionMap();
	}

	//----------------------------------------------------------------------------------------------------
	public function getConnection() {
		return ['url' => $this::url, 'token' => $this->API_TOKEN];
	}

	public static function Execute($data) {
		$that = new self;
		if(isset($data['query'])) {
			$url = $that::url.$data['query'];
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			if ($data['method'] == 'post') {
				curl_setopt($ch, CURLOPT_POST, 1);
				$data['fields']['api_key'] = $that::API_KEY;
				curl_setopt($ch, CURLOPT_POSTFIELDS, $data['fields']);
			}
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$headers = array();
			$headers[] = 'Authorization: Bearer '.$data['token'];
			$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8';
			$headers[] = 'Accept-Language: en-US,en;q=0.5';
			$headers[] = 'Cache-Control: no-cache';
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			$server_output = curl_exec ($ch);
			curl_close ($ch);
			return $server_output;
		} else {
			return ['message' => 'bad request', 'code' => 400];
		}
	}

} // end of class
