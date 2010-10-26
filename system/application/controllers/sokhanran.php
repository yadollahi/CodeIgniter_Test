<?php 

if (! defined('BASEPATH')) exit('No direct script access');

class Sokhanran extends Controller {

	//php 5 constructor
	function __construct() {
		parent::Controller();
	}
	
	//php 4 constructor
	function Sokhanran() {
		parent::Controller();
	}
	
	function index() {
		echo "test";
	}
	
	function fehrest(){
		$this->load->model("MSokhanran");
		$data['fehrest']  = $this->MSokhanran->getFehrest();
		$this->load->view('sokhanran/fehrest', $data);
	}
	
	function show($id){
		$this->load->model("MSokhanran");
		$sokhanran = $this->MSokhanran->getSokhanran($id);
		echo "<pre>";
		print_r($sokhanran);
		echo "</pre>";
	}

}