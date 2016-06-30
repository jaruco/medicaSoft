<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_model extends CI_Controller {

  public function insert_Patient($patient){
    if ($this->db->insert('Patient',$patient)){
      return true;
    }
    else {
      return false;
    }
  }

  public function get_All_Patients(){
    $this->db->order_by('Email DESC');
    $q = $this->db->get('Patient');
    return $q->result);
  }
}
