<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('validateModel');

	}


	public function index(){
		$data['title'] = "HOME";
		$data['subtitle'] = "HOME GYM";


		$templates['contents'] = $this->load->view('pages/beranda', $data, TRUE);
		$this->load->view('master', $templates);
	}

	public function About(){
		$data['title'] = "ABOUT US";
		$data['subtitle'] = "ABOUT GYM";



		$templates['contents'] = $this->load->view('pages/about', $data, TRUE);
		$this->load->view('master', $templates);
	}

	public function Contact(){
		$data['title'] = "CONTACT US";
		$data['subtitle'] = "CONTACT GYM";


		$templates['contents'] = $this->load->view('pages/contact', $data, TRUE);
		$this->load->view('master', $templates);
	}

/*
	public function Carabooking(){
		$data['title'] = "Cara-Booking";
		$data['subtitle'] = "Cara Booking Studio";



		$templates['contents'] = $this->load->view('pages/carabooking', $data, TRUE);
		$this->load->view('master', $templates);
	}
	*/

	/*public function Logout(){
		$id = $this->session->userdata('id_login');
		if ($this->session->userdata('status') == 1) {

			$this->db->where('id_login', $id);
			$this->db->update('admin', array(
				'status_login' => 0,

				));
			$this->session->sess_destroy();
			redirect(base_url('loginadmin'));

		}else{

			$this->db->where('id_login', $id);
			$this->db->update('login', array(
				'status_login' => 0,

				));
			$this->session->sess_destroy();
			redirect(base_url('login'));

		}
	}*/
}
