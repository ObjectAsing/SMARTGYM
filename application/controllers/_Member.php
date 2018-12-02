<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//This is the Controller for codeigniter crud using ajax application.
class Member extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 public function __construct()
	 	{
	 		parent::__construct();
			$this->load->helper('url');
	 		$this->load->model('member_model');
	 	}


	public function index()
	{

		$data['members']=$this->member_model->get_all_members();
		$this->load->view('member_view',$data);
	}
	public function member_add()
		{
			$data = array(
					'fname' => $this->input->post('fname'),
					'mname' => $this->input->post('mname'),
					'lname' => $this->input->post('lname'),
					'area' => $this->input->post('area'),
				);
			$insert = $this->member_model->member_add($data);
			//echo json_encode(array("status" => TRUE));
			echo json_encode(array("status" => TRUE));
		}
		public function ajax_edit($id)
		{
			$data = $this->member_model->get_by_id($id);



			echo json_encode($data);
		}

		public function member_update()
	{
		$data = array(
				'fname' => $this->input->post('fname'),
				'mname' => $this->input->post('mname'),
				'lname' => $this->input->post('lname'),
				'area' => $this->input->post('area'),
			);
		$this->member_model->member_update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function member_delete($id)
	{
		$this->member_model->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}



}
