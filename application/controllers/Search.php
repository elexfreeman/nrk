<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	/*ïåğåìåííàÿ äëÿ âûâîäà â view*/
	public $data;

	public function __construct()
	{
		date_default_timezone_set('Europe/London');
		parent::__construct();
		/*Çàãğóæàåì  áèáëèîòåêó ñåññèé*/
		$this->load->library('session');
		/*Çàãğóæàåì ìîäåëè*/
		$this->load->model('auth_model');
		$this->load->model('nrk_model');
		/*Çàêãğóæàåì õåëïåğû*/
		$this->load->helper('form');
		$this->load->helper('url');

		/*Ëîãîóò óğë è èìÿ ïîëüçîâàòåëÿ âûâîäÿòñÿ èç ìîäåëè*/
		$this->data['logout_url']=$this->auth_model->GetLogoutUrl();
		$this->data['user_name']=$this->auth_model->GetloginUser();
	}


	/*Ïîèñê àÿêñîâûé*/
	public function index()
	{
		$date=$this->input->post('birthday');

		if($this->input->post('birthday')!='')
		{
			$date=mb_convert_encoding($this->input->post('birthday'),  "Windows-1251","utf-8");
			$date = new DateTime($date);
			$date =  ($date->format('Y-m-d')).' 00:00:00';
		}


		$arh = array(
			'surname' => mb_convert_encoding($this->input->post('surname'),  "Windows-1251","utf-8"),
			'name' => mb_convert_encoding($this->input->post('name'),  "Windows-1251","utf-8"),
			'secname' => mb_convert_encoding($this->input->post('secname'),  "Windows-1251","utf-8"),
			'birthday' => $date,
			'snils' => mb_convert_encoding($this->input->post('snils'),  "Windows-1251","utf-8"),
			'address' => mb_convert_encoding($this->input->post('address'),  "Windows-1251","utf-8"),

		);
		$this->data['res']=$this->nrk_model->search($arh);
		$this->load->view('search_result',$this->data);
	}
}
