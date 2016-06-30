<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function insert()
	{
		$patient = array(
			'Name' => $this->input->post('Name'),
			'Age' => $this->input->post('Age'),
			'Email' => $this->input->post('Email'),
		  );
		$this->load->model('Patient_model');
		if ($this->Patient_model->insert_Patient($patient)){
			redirect('Welcome');
		}
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
}
