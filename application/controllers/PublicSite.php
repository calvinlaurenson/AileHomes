<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PublicSite extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
    {
        parent::__construct();
    }
   

	public function index()
	{
		//$data['feed'] = $this->getInstagramFeeds(3);
		$this->load->view('include/header');
		$this->load->view('index');
		$this->load->view('include/bottom');
	}

	function getInstagramFeeds($limit = 1){
        $api_url = "https://api.instagram.com/v1/users/self/media/recent/?access_token=255252639.1677ed0.ac997294534643369e212cf98c91d7a9&count=".$limit;
        $connection_c = curl_init(); // initializing
        curl_setopt( $connection_c, CURLOPT_URL, $api_url ); // API URL to connect
        curl_setopt( $connection_c, CURLOPT_RETURNTRANSFER, 1 ); // Return the result, do not print
        curl_setopt( $connection_c, CURLOPT_TIMEOUT, 20 );
        $json_return = curl_exec( $connection_c ); // Connect and get json data
        curl_close( $connection_c ); // Close connection
        $insta = json_decode( $json_return ); // Decode and return
        foreach($insta->data as $feed){
                /* Photo Type
                * link - 0
                * standard_resolution - 1
                * likes - 2
                * comments - 3
                * caption = 4
                */
            $items[] = array($feed->link, $feed->images->standard_resolution->url, $feed->likes->count, $feed->comments->count, $feed->caption->text);
        }
        return $items;
    }
}
