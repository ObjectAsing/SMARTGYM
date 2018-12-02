<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserCtrl extends CI_Controller {

	public function __construct(){
    parent::__construct();
    $this->load->model('Admin_model');
    $this->load->Model('Auth_model');
    $this->load->model('Our_chart_model');

    $this->load->helper('string');
    $this->load->helper('url');
    $this->load->model('member_model');
    $this->load->library('session');
	}


	public function ProfileUser(){

    $this->Auth_model->isLoggedIn();

		$data['title'] = "Profile";
		$data['subtitle'] = "Profile user Resort";
		$data['user'] = $this->Admin_model->user();


//	$templates['contents'] = $this->load->view('admin/user_profile', $data, TRUE);
		$this->load->view('admin/user_profile', $data);
	}




}
