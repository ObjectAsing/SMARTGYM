<?php defined('BASEPATH') OR exit('No direct script access allowed');



class Kirim_email extends CI_Controller {



public function __construct() {

parent::__construct();
$this->load->model('Admin_model');
$this->load->Model('Auth_model');
$this->load->model('Our_chart_model');

$this->load->helper('string');
$this->load->helper('url');
$this->load->model('member_model');
$this->load->library('session');
$this->load->model('mkirim_email');

}



public function send()

{

$this->load->library('email');

$data['cek'] =  $this->mkirim_email->cek();

foreach ($data['cek'] as $value) {

$subject = 'GYM Membership Expiration-ID :'.$value['id'].'';



$message = '<p>ID : '.$value['id'].' VERIFIED MEMBER</p>


<p>Member Name : '.$value['nama'].'</p>

<p>Message : '.$value['keterangan'].'</p>

';
$receiver = $value['email'];

$result = $this->email

->from('gympremierbuddy@hotmail.com')

->to($receiver)

->subject($subject)

->message($message)

->send();



$data = array(

'status_mail' => 'send',

);

$this->mkirim_email->update($data);

}

if($result)
{
echo 'Your email was sent, successfully.';
}
else
{
show_error($this->email->print_debugger());
}

  redirect(base_url().'admin');

exit;
die;



/*
$this->session->set_userdata('referred_from', current_url());
$referred_from = $this->session->userdata('referred_from');
redirect($referred_from, 'refresh'); */


}

}
