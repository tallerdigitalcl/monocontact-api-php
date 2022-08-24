<?php
 
namespace mono;

use \DateTime;
use \DateTimeZone;
class Monocontact{

    private $api_key;
    private $secret;
    private $curl;
    private $api_url = 'https://api.monocontact.net';

    public function __construct($apikey=null, $secret=null, $apiurl=null) {
		if(!$apikey || !$secret) throw new \Exception('You must provide a Monocontact API key');
		$this->apikey = $apikey;
		$this->secret = $secret;
		$this->curl = curl_init();

		if ($apiurl!=null) {
			$this->apiurl = $apiurl;
		}

		curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($this->curl, CURLOPT_SSL_VERIFYPEER, false);
		// curl_setopt($this->curl, CURLOPT_FAILONERROR, true);
/*		curl_setopt($this->curl, CURLOPT_USERAGENT, 'Mandrill-PHP/1.0.54');
		curl_setopt($this->curl, CURLOPT_POST, true);
		curl_setopt($this->curl, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($this->curl, CURLOPT_HEADER, false);
		curl_setopt($this->curl, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($this->curl, CURLOPT_TIMEOUT, 600);*/

		$this->listing = new Listing($this);
		$this->contact = new Contacto($this);
		$this->subscriber = new Subscriber($this);

		$this->apiurl = rtrim($this->apiurl, '/') . '/';
	}

	public function call($url, $params, $method){
		curl_setopt($this->curl, CURLOPT_URL, $this->apiurl . $url);
		if ($method == 'get' ){
			curl_setopt($this->curl, CURLOPT_HTTPGET, TRUE);
		} elseif ($method == 'post') {
			curl_setopt($this->curl, CURLOPT_POSTFIELDS, json_encode($params, JSON_PRETTY_PRINT));
		}        
		echo json_encode($params, JSON_PRETTY_PRINT);
		$now = DateTime::createFromFormat('U.u', microtime(true));
		$local = $now->setTimeZone(new DateTimeZone('America/Santiago'));
		$token  = $this->apikey;                 // base64_encode(random_bytes(12));
		$secret = $this->secret; // base64_encode(random_bytes(24));
		
		$stamp = $local->format("Y-m-d H:i:s.u");
		$value = $token.$stamp.$secret;
		
		$sig    = hash('SHA256', $value);
		echo $value;
		echo '/';
		
		echo $sig;

		curl_setopt($this->curl, CURLOPT_HTTPHEADER, [
			'Content-Type:application/json',
			"Authorization: Bearer $token",
			"Sig: $sig",
			"Stamp: $stamp"
		]);
		$server_output = curl_exec($this->curl);
		print_r($this->curl);

		if (curl_getinfo($this->curl, CURLINFO_HTTP_CODE)!='200') {
			throw new \Exception($server_output);
		}

		return json_decode($server_output);

	}

    public function saludo($api_key = null){

        return $this->api_key = $api_key;
    }
}
