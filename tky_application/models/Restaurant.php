<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Restaurant extends CI_Model
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
	
	public function getRestaurant($restaurant_id = '1'){
//echo "model:". $restaurant_id;
		$this->load->database();
		$query = $this->db->get_where('restaurant', array('restaurant_id' => $restaurant_id, 'language' => $this->lang));
//print_r ($query->row()); 
		return $query->row();
	}

}
?>
