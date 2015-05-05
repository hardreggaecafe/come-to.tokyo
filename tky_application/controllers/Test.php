<?php
class Test extends CI_Controller{
	
  public function __construct(){
  parent::__construct();
 }
 
function index(){

echo "hahaha";

$data = array('testscript'=>"OreOre");

$this->load->view('test', $data);
}
}
?>