<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Jquery_123 extends CI_Controller {	
		public function __construct()
    {
        parent::__construct();
        Engine::class_loader();
        $this->load->database();
    }

	function index() {
		#$this->auth->xmlhttprequest();
		#redirect('coming_soon');
		//$data['test'] = Jquery_Model::findAll();
		$data['page_title'] = "Panget si Pat";
		$this->load->view("jquery_view",$data);
	}

	function getSearch(){

		$post = $this->input->post();
		$data['test'] = Jquery_Model::get_search(array("textbox" => $post['search']));
		$this->load->view("jquery_view2", $data);
	}

}



