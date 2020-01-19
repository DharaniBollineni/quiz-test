<?php

class Quiz_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}

	public function insertRecord($uname, $score) {
		$data = array(
				'quiz_name' => $uname,
				'quiz_result' => $score
			);
		$this->db->insert('quiz_result', $data);  
	}

	public function getAllResults(){
		$this->db->select('*')->from('quiz_result');
		$query=$this->db->get();
		return $query->result();
	}
}