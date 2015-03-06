<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$this->data['subview'] = 'admin/customer/index';

		$this->data['customers'] = $this->customer_m->get();

		$this->load->view('admin/_layout_main', $this->data);
	}

	public function read($id = null)
	{
		$customer['read'] = 1;

		$this->customer_m->save($customer, $id);

		redirect('admin/customer');
	}

}

/* End of file customer.php */
/* Location: ./application/controllers/admin/customer.php */