<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	/*���������� ��� ������ � view*/
	public $data;

	public function __construct()
	{
		date_default_timezone_set('Europe/London');
		parent::__construct();
		/*���������  ���������� ������*/
		$this->load->library('session');
		/*��������� ������*/
		$this->load->model('auth_model');
		$this->load->model('nrk_model');
		/*���������� �������*/
		$this->load->helper('form');
		$this->load->helper('url');

		/*������ ��� � ��� ������������ ��������� �� ������*/
		$this->data['logout_url']=$this->auth_model->GetLogoutUrl();
		$this->data['user_name']=$this->auth_model->GetloginUser();
	}


	/*����� ��������*/
	public function index()
	{

			echo print_r($this->nrk_model->search($_POST));

	}
}
