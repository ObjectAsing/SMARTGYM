<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Charts extends CI_Controller {

    function __Construct() {
        parent::__Construct();

        $this->load->helper(array('form', 'url'));
        $this->load->model('Admin_model');

    }
    /**
     * @desc: This method is used to load view
     */
    public function index()
    {

        $this->load->view('admin/barchart');
    }
    /**
     * @desc: This method is used to get data to call model and print it into Json
     * This method called by Ajax
     */
      function getdata(){
         $data  = $this->Admin_model->getdataPlan();



         print_r(json_encode($data, true));
     }
}
