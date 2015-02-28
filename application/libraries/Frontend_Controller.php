<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontend_Controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->data['meta_title'] = "My page";
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('user_m');
		$this->load->model('category_m');
		$this->load->model('product_m');
		$this->load->model('khachhang_m');

		
	}

	public function index()
	{
		
	}

}

/* End of file Frontend_Controller.php */
/* Location: ./application/libraries/Frontend_Controller.php */