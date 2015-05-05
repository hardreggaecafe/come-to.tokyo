<?php
class Restaurants extends CI_Controller{
	
  public function __construct(){
  parent::__construct();
 }
 
function view($restaurantid=NULL){
	// Language
	// Check which language is used
	if ($_SERVER['SERVER_NAME'] == 'come-to.tokyo'){
		$lang = "en";
	}else{
		$lang = substr($_SERVER['SERVER_NAME'],0,2);
	}

	// UsreAgent
	$this->load->library('user_agent');

	// Load Article Data
	$this->load->model('Restaurant');
	$this->load->model('Author');
	$res = $this->Restaurant->getRestaurant($restaurantid);
	$aut = $this->Author->getAuthor($res->author_id);
	$data = array('restaurant'=> $res
					, 'author' => $aut);
	$header['title'] = $data['restaurant']->restaurant_name;
	$header['description'] = $data['restaurant']->tagline;
	$header['keyword'] = $data['restaurant']->restaurant_name . "," . $data['restaurant']->area;
	$header['url'] = "Restaurants/view/" . $restaurantid;
	$header['thumb'] = $res->thumbnail;
	$header['fqdn'] = "http://" . $_SERVER["SERVER_NAME"];
	$header['lang'] = $lang;
	$analytics['lang'] = $lang;

	// push data to view
	if ($this->agent->is_robot())
	{
		// If Agent is Robot
		$this->load->view('header_contents_mb', $header);
		$this->load->view('contents/restaurant', $data);
		$this->load->view('analytics', $analytics);
		$this->load->view('footer_contents');
	}
	elseif ($this->agent->is_mobile())
	{
		// If Agent is Mobile
		$this->load->view('header_contents_mb', $header);
		$this->load->view('contents/restaurant', $data);
		$this->load->view('analytics', $analytics);
		$this->load->view('footer_contents');
	}
	elseif ($this->agent->is_browser())
	{
		// If Agent is PC
		$this->load->view('header_contents_pc', $header);
		$this->load->view('contents/restaurant', $data);
		$this->load->view('analytics', $analytics);
		$this->load->view('footer_contents');
	} else {
		// If Else
		$this->load->view('header_contents_pc', $header);
		$this->load->view('contents/restaurant', $data);
		$this->load->view('analytics', $analytics);
		$this->load->view('footer_contents');
	}
}
}
?>