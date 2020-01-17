<?php

class Dady extends CI_Controller
{
	protected $model_name;
	
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model($this->model_name);
	}

	protected function go_to($where, $data = null)
	{
		$this->load->view('header', $data);

		$this->load->view($where, $data);
		
		$this->load->view('footer', $data);
	}

	protected function is_post()
	{
		if ($_SERVER['REQUEST_METHOD'] == 'POST') return true;

		else return false;
	}
}