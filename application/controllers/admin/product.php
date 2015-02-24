<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$this->data['products'] = $this->product_m->get();
		
		$this->data['subview'] = 'admin/product/index';
		$this->load->view('admin/_layout_main', $this->data);
	}

	public function edit($id = null)
	{
		if($id != null){
			$this->data['product'] = $this->product_m->get($id);
		}else{
			$this->data['product'] = $this->product_m->get_new();
		}

		$rules = $this->product_m->rules_product;
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == TRUE){
			$product['name'] = $this->input->post('name');
			$product['id_category'] = $this->input->post('id_category');
			$product['gia'] = $this->input->post('gia');
			$product['giakm'] = $this->input->post('giakm');
			$product['description'] = $this->input->post('description');
			$this->product_m->save($product, $id);
			redirect('admin/product');
		}
		$this->data['categories'] = $this->category_m->get();

		$this->data['subview'] = 'admin/product/edit';
		$this->load->view('admin/_layout_main', $this->data);

	}

	public function delete($id)
	{
		$this->product_m->delete($id);
		redirect('admin/product');
	}


	public function _unique_productname($str)
	{
		$id = $this->uri->segment(4);
		$this->db->where('name', $this->input->post('name'));
		!$id || $this->db->where('id !=', $id);
		$product = $this->product_m->get();

		if(count($product)){
			$this->form_validation->set_message('_unique_productname', 'Tên loại sản phẩm đã tồn tại!');
			return false;
		}
		return true;

	}

}

/* End of file product.php */
/* Location: ./application/controllers/admin/product.php */