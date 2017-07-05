<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('main/home');
		$this->load->view('common/footer');
	}

	private function addcontact($name,$email,$phone)
	{

		$url = 'https://netqom.api-us1.com';
		$params = array(

		    // the API Key can be found on the "Your Settings" page under the "API" tab.
		    // replace this with your API Key
		    'api_key'      => 'b9b7120b391e52e9f08aa9d425e45b226df87558ab94ebaacc717342b3c0f83f109edab8',

		    // this is the action that adds a list
		    'api_action'   => 'contact_add',

		    // define the type of output you wish to get back
		    // possible values:
		    // - 'json' :      data is returned in JSON format and can be decoded with
		    //                 json_decode() function (included in PHP since 5.2.0)
		    'api_output'   => 'serialize',
		);

		$post = array(
		    'email'                    => $email,
		    'name'               	   => $name,
		    'phone'                    => $phone,
		    //'ip4'                    => '127.0.0.1',

		    // any custom fields
		    //'field[345,0]'           => 'field value', // where 345 is the field ID
		    //'field[%PERS_1%,0]'      => 'field value', // using the personalization tag instead (make sure to encode the key)

		    // assign to lists:
		    'p[1]'                   => 1, // example list ID (REPLACE '123' WITH ACTUAL LIST ID, IE: p[5] = 5)
		    'status[1]'              => 1, // 1: active, 2: unsubscribed (REPLACE '123' WITH ACTUAL LIST ID, IE: status[5] = 1)
		    //'form'          => 1001, // Subscription Form ID, to inherit those redirection settings
		    //'noresponders[123]'      => 1, // uncomment to set "do not send any future responders"
		    //'sdate[123]'             => '2009-12-07 06:00:00', // Subscribe date for particular list - leave out to use current date/time
		    // use the folowing only if status=1
		    'instantresponders[1]' => 1, // set to 0 to if you don't want to sent instant autoresponders
		    //'lastmessage[123]'       => 1, // uncomment to set "send the last broadcast campaign"

		    //'p[]'                    => 345, // some additional lists?
		    //'status[345]'            => 1, // some additional lists?
		);

		// This section takes the input fields and converts them to the proper format
		$query = "";
		foreach( $params as $key => $value ) $query .= urlencode($key) . '=' . urlencode($value) . '&';
		$query = rtrim($query, '& ');

		// This section takes the input data and converts it to the proper format
		$data = "";
		foreach( $post as $key => $value ) $data .= urlencode($key) . '=' . urlencode($value) . '&';
		$data = rtrim($data, '& ');

		// clean up the url
		$url = rtrim($url, '/ ');

		// This sample code uses the CURL library for php to establish a connection,
		// submit your request, and show (print out) the response.
		if ( !function_exists('curl_init') ) die('CURL not supported. (introduced in PHP 4.0.2)');

		// If JSON is used, check if json_decode is present (PHP 5.2.0+)
		if ( $params['api_output'] == 'json' && !function_exists('json_decode') ) {
		    die('JSON not supported. (introduced in PHP 5.2.0)');
		}

		// define a final API request - GET
		$api = $url . '/admin/api.php?' . $query;

		$request = curl_init($api); // initiate curl object
		curl_setopt($request, CURLOPT_HEADER, 0); // set to 0 to eliminate header info from response
		curl_setopt($request, CURLOPT_RETURNTRANSFER, 1); // Returns response data instead of TRUE(1)
		curl_setopt($request, CURLOPT_POSTFIELDS, $data); // use HTTP POST to send form data
		//curl_setopt($request, CURLOPT_SSL_VERIFYPEER, FALSE); // uncomment if you get no gateway response and are using HTTPS
		curl_setopt($request, CURLOPT_FOLLOWLOCATION, true);

		$response = (string)curl_exec($request); // execute curl post and store results in $response

		// additional options may be required depending upon your server configuration
		// you can find documentation on curl options at http://www.php.net/curl_setopt
		curl_close($request); // close curl object

		if ( !$response ) {
		    die('Nothing was returned. Do you have a connection to Email Marketing server?');
		}

		// This line takes the response and breaks it into an array using:
		// JSON decoder
		//$result = json_decode($response);
		// unserializer
		$result = unserialize($response);
		return $result;

		// // Result info that is always returned
		// echo 'Result: ' . ( $result['result_code'] ? 'SUCCESS' : 'FAILED' ) . '<br />';
		// echo 'Message: ' . $result['result_message'] . '<br />';

		// // The entire result printed out
		// echo 'The entire result printed out:<br />';
		// echo '<pre>';
		// print_r($result);
		// echo '</pre>';

		// // Raw response printed out
		// echo 'Raw response printed out:<br />';
		// echo '<pre>';
		// print_r($response);
		// echo '</pre>';

		// // API URL that returned the result
		// echo 'API URL that returned the result:<br />';
		// echo $api;

		// echo '<br /><br />POST params:<br />';
		// echo '<pre>';
		// print_r($post);
		// echo '</pre>';



	}	
	public function search()
	{


		if($this->input->post('email')!=""){

			$out=$this->addcontact($this->input->post('name'),$this->input->post('email'),$this->input->post('phone'));
			if(!$out['result_code']){
				$data['error']=$out['result_message'];
				$this->load->view('common/header');
				$this->load->view('main/cool',$data);
				$this->load->view('common/footer');
			} else {
				$sess=$this->session->userdata("verified");

				if($sess['minPrice']!="" && $sess['maxPrice']!="")
					$price="And ListPrice Bt ".$sess['minPrice'].",".$sess['maxPrice'];
				else if($sess['minPrice']!="")
					$price="And ListPrice Bt ".$sess['minPrice'].",0";
				else if($sess['maxPrice']!="")
					$price="And ListPrice Bt 0,".$sess['maxPrice'];

				if($sess['minBedroom']!="" && $sess['maxBedroom']!="")
					$bedroom="And BedsTotal Bt ".$sess['minBedroom'].",".$sess['maxBedroom'];
				else if($sess['minBedroom']!="")
					$bedroom="And BedsTotal Ge ".$sess['minBedroom'];
				else if($sess['maxBedroom']!="")
					$bedroom="And BedsTotal Le ".$sess['maxBedroom'];


				$filter=urlencode("MlsStatus Eq 'Active' And PropertyType Eq '{$sess['PropertyType']}' {$price} {$bedroom}");
				$this->session->set_userdata("verified",array());
				redirect("http://p.flexmls.com/amylosquadro/portal/new-search/20141118194127138774000000/listings?_filter=".$filter, 'location');
			}
		} else {
			$this->session->set_userdata("verified", $this->input->post());
			$data['error']="";
			$this->load->view('common/header');
			$this->load->view('main/cool',$data);
			$this->load->view('common/footer');
		}
	}
}





//https://netqom.activehosted.com/app/contacts/