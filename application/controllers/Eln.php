<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eln extends CI_Controller {

	/*переменная для вывода в view*/
	public $data;

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('auth_model');
		$this->load->helper('form');
		$this->load->helper('url');

		$this->data['logout_url']=$this->auth_model->GetLogoutUrl();
		$this->data['user_name']=$this->auth_model->GetloginUser();
	}

	public function index()
	{
		if($this->auth_model->IsLogin())
		{
			$this->load->model('mainpage_model');

			$this->load->view('head',$this->data);
			$this->load->view('navbar',$this->data);
			$this->load->view('eln_main',$this->data);
			$this->load->view('footer',$this->data);
		}
		else
		{
			header('Location: '.base_url('auth'));
			exit;
		}
	}

	public function search()
	{

	}
}
