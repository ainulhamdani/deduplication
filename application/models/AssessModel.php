<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AssessModel extends CI_Model {

	function __construct() {
        parent::__construct();
    }

    public function getAssessments(){
    	return $this->db->query("SELECT * FROM assessment")->result();
    }

    public function getAssessment($id){
    	return $this->db->query("SELECT * FROM assessment WHERE id='$id'")->row();
    }

}