<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends Frontend_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$this->data['sptbs']['phongans'] = $this->product_m->get_by_limit(array('id_category' => '1'), 4, 0);
		$this->data['sptbs']['phongkhachs'] = $this->product_m->get_by_limit(array('id_category' => '2'), 4, 0);
		$this->data['sptbs']['phongngus'] = $this->product_m->get_by_limit(array('id_category' => '3'), 4, 0);
		$this->data['sptbs']['phonglamviecs'] = $this->product_m->get_by_limit(array('id_category' => '8'), 4, 0);
		$this->data['sptbs']['beps'] = $this->product_m->get_by_limit(array('id_category' => '9'), 4, 0);
		$this->data['sptbs']['treems'] = $this->product_m->get_by_limit(array('id_category' => '10'), 4, 0);
		$this->data['sptbs']['quancafes'] = $this->product_m->get_by_limit(array('id_category' => '11'), 4, 0);
		$this->data['sptbs']['tus'] = $this->product_m->get_by_limit(array('id_category' => '12'), 4, 0);
		$this->data['sptbs']['cuas'] = $this->product_m->get_by_limit(array('id_category' => '13'), 4, 0);

		

		$this->load->view('frontend/index', $this->data);
	}

	public function category($id=null)
	{
		$category = $this->category_m->get($id, true);
		if (count($category)) {
			$this->data['category'] = $category;
			$this->data['products'] = $this->product_m->get_by(array('id_category' => $category->id) );
		}
		
		$this->data['subview'] = 'frontend/category';
		$this->load->view('frontend/_layout_page', $this->data);
	}

	public function product($id=null)
	{
		$product = $this->product_m->get($id, true);
		if (count($product)) {
			$this->data['product'] = $product;
		}

		if($this->input->post('name')) {
			$customer['name'] = $this->input->post('name');
			$customer['phone'] = $this->input->post('phone');
			$customer['read'] = 0;
			$customer['id_product'] = $id;
			$customer['time'] = date('D, d M Y H:i:s');  

			$this->customer_m->save($customer);
		}

		$this->data['subview'] = 'frontend/product';
		$this->load->view('frontend/_layout_page', $this->data);
	}

}

/* End of file index.php */
/* Location: ./application/controllers/frontend/index.php */