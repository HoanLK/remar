<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Controller extends MY_Controller {

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

		//Login check
		$exception_uris = array(
			'admin/user/login',
			'admin/user/logout'
		);
		if (in_array(uri_string(), $exception_uris) == false) {
			if ($this->user_m->loggedin() == false) {
				redirect('admin/user/login');
			}
		}
		
	}

	public function index()
	{
		
	}

}

/* End of file Admin_Controller.php */
/* Location: ./application/libraries/Admin_Controller.php */