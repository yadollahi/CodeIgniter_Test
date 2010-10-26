<?php 

if (! defined('BASEPATH')) exit('No direct script access');

class MSokhanran extends Model {

	//php 5 constructor
	function __construct() {
		parent::Model();
	}
	
	//php 4 constructor
	function MSokhanran() {
		parent::Model();
	}
	
	function getFehrest() {
		$this->db->select('id, name');
		$q = $this->db->get('sokhanrans');
		return $q->result();
	}
	
	function getSokhanran($id){
		$this->db->where('id', $id);
		$this->db->limit(1);
		$q = $this->db->get('sokhanrans');
		return $q->result();
	}

}