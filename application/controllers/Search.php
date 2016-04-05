<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	/*переменная для вывода в view*/
	public $data;

	public function __construct()
	{
		date_default_timezone_set('Europe/London');
		parent::__construct();
		/*Загружаем  библиотеку сессий*/
		$this->load->library('session');
		/*Загружаем модели*/
		$this->load->model('auth_model');
		$this->load->model('nrk_model');
		/*Закгружаем хелперы*/
		$this->load->helper('form');
		$this->load->helper('url');

		/*Логоут урл и имя пользователя выводятся из модели*/
		$this->data['logout_url']=$this->auth_model->GetLogoutUrl();
		$this->data['user_name']=$this->auth_model->GetloginUser();
	}


	/*Поиск аяксовый*/
	public function index()
	{

			echo print_r($this->nrk_model->search($_POST));

	}
}
