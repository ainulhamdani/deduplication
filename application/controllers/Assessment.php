<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assessment extends CI_Controller {

	function __construct() {
        parent::__construct();
        if(empty($this->session->userdata('id_user'))&&$this->session->userdata('user_valid') == FALSE) {
            redirect('welcome/login');
        }
        $this->load->model("AssessModel");
    }

	public function index()
	{
        if($this->session->userdata('level')=="admin"){
        	$data['assessments'] = $this->AssessModel->getAssessments();
        	$this->load->view("admin/assess/main",$data);
        }else{
        	$this->load->view("user/main");
        }
	}

	public function create(){
		if($this->session->userdata('level')=="admin"){
        	$data['assessments'] = $this->AssessModel->getAssessments();
        	$this->load->view("admin/assess/create",$data);
        }else{
        	$this->load->view("user/main");
        }
	}

	public function edit($id=""){
		if($id=="") redirect('assessment');
		if($this->session->userdata('level')=="admin"){
        	$data['assessment'] = $this->AssessModel->getAssessment($id);
        	$this->load->view("admin/assess/edit",$data);
        }else{
        	$this->load->view("user/main");
        }
	}

	public function detail($id=""){
		if($id=="") redirect('assessment');
		if($this->session->userdata('level')=="admin"){
        	$data['assessment'] = $this->AssessModel->getAssessment($id);
        	$this->load->view("admin/assess/detail",$data);
        }else{
        	$this->load->view("user/main");
        }
	}

}