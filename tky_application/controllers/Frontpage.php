<?php
class Frontpage extends CI_Controller{
	
  public function __construct(){
  parent::__construct();
 }
 
function index(){
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
	$this->load->model('Articles');
	$this->load->model('Restaurant');
	$this->load->model('Attraction');
	$data = array(
				'article'=>$this->Articles->getArticle(),
				'contents1'=>$this->Restaurant->getRestaurant("550ec9627a494"),
				'contents2'=>$this->Attraction->getAttraction("5531fe819a06d"),
				'fqdn' =>"http://" . $_SERVER["SERVER_NAME"],
				'lang' => $lang
			);
	$analytics['lang'] = $lang;

	// Push data to view
	if ($this->agent->is_mobile())
	{
		// If Agent is Mobile
		$this->load->view('header_mb', $data);
		$this->load->view('contents/frontpage_mb', $data);
		$this->load->view('analytics', $analytics);
		$this->load->view('footer_mb');
	}
		elseif ($this->agent->is_robot())
	{
		// If Agent is Robot
		$this->load->view('header_mb', $data);
		$this->load->view('contents/frontpage_mb', $data);
		$this->load->view('analytics', $analytics);
		$this->load->view('footer_mb');
	}	elseif ($this->agent->is_browser())
	{
		// If Agent is PC
		$this->load->view('header_pc', $data);
		$this->load->view('contents/frontpage_pc', $data);
		$this->load->view('analytics', $analytics);
		$this->load->view('footer_pc');
	}	else {
		// If Agent is PC
		$this->load->view('header_pc', $data);
		$this->load->view('contents/frontpage_pc', $data);
		$this->load->view('analytics', $analytics);
		$this->load->view('footer_pc');
	}
	
	}
}
?>
