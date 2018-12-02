<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class validateModel extends CI_model {

	public function True(){

		if ($this->session->userdata('id_login') == TRUE) {

			redirect(base_url());	

		}

	}

	public function False(){

		if ($this->session->userdata('id_login') == FALSE) {

			redirect(base_url());	

		}

	}

	public function Admin(){
		if ($this->session->userdata('status') == 1) {
			redirect(base_url('home'));
		}
	}



	public function TrueAdmin(){
		if ($this->session->userdata('status') == 1) {
			redirect(base_url());
		}
	}


	public function FalseAdmin(){
		if ($this->session->userdata('status') == 0) {
			redirect(base_url());
		}
	}

	
}