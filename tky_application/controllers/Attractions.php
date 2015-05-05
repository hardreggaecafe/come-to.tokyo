<?php
class Attractions extends CI_Controller{
	
  public function __construct(){
  parent::__construct();
 }
 
function view($attractionid=NULL){
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
	$this->load->model('Attraction');
	$this->load->model('Author');
	$att = $this->Attraction->getAttraction($attractionid);
	$aut = $this->Author->getAuthor($att->author_id);
	$data = array('attraction'=> $att
					, 'author' => $aut);
	$header['title'] = $data['attraction']->attraction_name;
	$header['description'] = $data['attraction']->tagline;
	$header['keyword'] = $data['attraction']->attraction_name . "," . $data['attraction']->area;
	$header['url'] = "Attractions/view/" . $attractionid;
	$header['thumb'] = $att->thumbnail;
	$header['fqdn'] = "http://" . $_SERVER["SERVER_NAME"];
	$header['lang'] = $lang;
	$analytics['lang'] = $lang;
	
	// push data to view
	if ($this->agent->is_robot())
	{
		// If Agent is Robot
		$this->load->view('header_contents_mb', $header);
		$this->load->view('contents/attraction', $data);
		$this->load->view('analytics', $analytics);
		$this->load->view('footer_contents');
	}
	elseif ($this->agent->is_mobile())
	{
		// If Agent is Mobile
		$this->load->view('header_contents_mb', $header);
		$this->load->view('contents/attraction', $data);
		$this->load->view('analytics', $analytics);
		$this->load->view('footer_contents');
	}elseif ($this->agent->is_browser())
	{
		// If Agent is PC
		$this->load->view('header_contents_pc', $header);
		$this->load->view('contents/attraction', $data);
		$this->load->view('analytics', $analytics);
		$this->load->view('footer_contents');
	}else {
		// If Else
		$this->load->view('header_contents_pc', $header);
		$this->load->view('contents/attraction', $data);
		$this->load->view('analytics', $analytics);
		$this->load->view('footer_contents');
	}
}
}
?>