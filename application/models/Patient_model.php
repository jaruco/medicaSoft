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
}
