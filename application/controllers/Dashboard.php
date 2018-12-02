<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    protected $data = '';
    public function __construct() {
        parent::__construct();
        $this->load->model('dashboard_qry');
        $this->load->model('Auth_model');

		$this->load->library('parser');
    }

    public function index(){
      $this->Auth_model->isLoggedIn();
      $this->_init_add();
    /*    $data['form'] = array(
           'first_period'=> array(
                    'placeholder' => 'First Period',
                    'id'          => 'first_period',
                    'name'        => 'first_period',
                    'value'       => "2017",
                    'class'       => 'form-control year',
                    'required'    => '',
            ),
           'last_period'=> array(
                    'placeholder' => 'Last Period',
                    'id'          => 'last_period',
                    'name'        => 'last_period',
                    'value'       => "2018",
                    'class'       => 'form-control year',
                    'required'    => '',
                  ),
              );
              */
      //  $this->load->view('admin/dashboard', $data);
        $this->template
            ->title('Dashboard',$this->apps->name)
            ->set_layout('main')
            ->build('dashboard/index',$this->data);
    }


    public function getEmployees() {
        echo $this->dashboard_qry->getEmployees();
    }

    private function _init_add(){
        $this->data['form'] = array(
           'first_period'=> array(
                    'placeholder' => 'First Period',
                    'id'          => 'first_period',
                    'name'        => 'first_period',
                    'value'       => "1995",
                    'class'       => 'form-control year',
                    'required'    => '',
            ),
           'last_period'=> array(
                    'placeholder' => 'Last Period',
                    'id'          => 'last_period',
                    'name'        => 'last_period',
                    'value'       => "2019",
                    'class'       => 'form-control year',
                    'required'    => '',
            ),
        );
    }
}
