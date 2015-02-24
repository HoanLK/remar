<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$this->data['categories'] = $this->category_m->get();
		
		$this->data['subview'] = 'admin/category/index';
		$this->load->view('admin/_layout_main', $this->data);
	}

	public function edit($id = null)
	{
		if($id != null){
			$this->data['categories'] = $this->category_m->get($id);
		}else{
			$this->data['categories'] = $this->category_m->get_new();
		}

		$rules = $this->category_m->rules_category;
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == TRUE){
			// $category = $this->category_m->array_from_post('categoryname', 'name', 'password');
			$categories['name'] = $this->input->post('name');
			$categories['id_parent'] = $this->input->post('id_parent');
			$categories['description'] = $this->input->post('description');
			$this->category_m->save($categories, $id);
			redirect('admin/category');
		}
		$this->data['categories_parent'] = $this->category_m->get();

		$this->data['subview'] = 'admin/category/edit';
		$this->load->view('admin/_layout_main', $this->data);

	}

	public function delete($id)
	{
		$this->category_m->delete($id);
		redirect('admin/category');
	}


	public function _unique_categoryname($str)
	{
		$id = $this->uri->segment(4);
		$this->db->where('name', $this->input->post('name'));
		!$id || $this->db->where('id !=', $id);
		$category = $this->category_m->get();

		if(count($category)){
			$this->form_validation->set_message('_unique_categoryname', 'Tên loại sản phẩm đã tồn tại!');
			return false;
		}
		return true;

	}

}

/* End of file category.php */
/* Location: ./application/controllers/admin/category.php */