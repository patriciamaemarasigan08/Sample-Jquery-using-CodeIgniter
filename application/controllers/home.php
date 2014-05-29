<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct()
    {
        parent::__construct();
    }

	function index() {
		#$this->auth->xmlhttprequest();
		#redirect('coming_soon');
	}

	function welcome() {
		
		//Engine::XmlHttpRequestOnly();

		$this->authenticate_user();

		Engine::appStyle('bootstrap.min.css');
		Engine::appStyle('application.css');
		Engine::appStyle('mystyle.css');
		
		Jquery::form();
		Jquery::datatable();
		Jquery::inline_validation();
		Jquery::tipsy();

		$data['page_title'] = "IDRS :: Home";
		$data['home'] 		= "active";

		$this->load->view('home/index',$data);
	}

	function encoding() {
		
		//Engine::XmlHttpRequestOnly();

		Engine::appStyle('bootstrap.min.css');
		Engine::appStyle('application.css');

		Engine::appScript('application.js');

		Jquery::form();
		Jquery::datatable();
		Jquery::inline_validation();
		Jquery::tipsy();

		$data['page_title'] = "";

		$this->load->view('page/encoding',$data);
	}

	function coming_soon() {
		Engine::appStyle('bootstrap.min.css');
		Engine::appStyle('coming_soon.css');

		$data['page_title'] = "IDRS :: Coming Soon";
		$this->load->view('page/coming_soon',$data);
	}

}