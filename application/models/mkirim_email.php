<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Mkirim_email extends CI_Model {

function getEmail()
{
  $this->db->select('email');
  $query = $this->db->get('t_email');
  return $query;
}

function cek()

{

$this->db->where('status_mail','wait');

$query = $this->db->get('t_email');

return $query->result_array();

}



function update($data)

{

$this->db->where('status_mail', 'wait');

$this->db->update('t_email',$data);

}



}



/* End of file mkirim_email.php */

/* Location: ./application/models/mkirim_email.php */
