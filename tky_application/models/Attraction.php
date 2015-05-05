<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Attraction extends CI_Model
{
 // Check which language is used
 private $lang;
 
  public function __construct()
    {
        parent::__construct();

		// Check which language is used
		if ($_SERVER['SERVER_NAME'] == 'come-to.tokyo'){
			$this->lang = "en";
		}else{
			$this->lang = substr($_SERVER['SERVER_NAME'],0,2);
		}
    }
	
	public function getAttraction($attraction_id = '1'){
		$this->load->database();
		$query = $this->db->get_where('attraction', array('attraction_id' => $attraction_id, 'language' => $this->lang));
		return $query->row();
	}

}
?>
