<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		
	}

	public function index()
	{

		if($this->input->post('loc')){
			if($this->input->post('id_category') == '0'){
				$this->data['products'] = $this->product_m->get();
			}else{
				$this->data['products'] = $this->product_m->get_by(array('id_category' => $this->input->post('id_category')));
			}
		}else{
			$this->data['products'] = $this->product_m->get();
		}

		

		$this->data['categories'] = $this->category_m->get();

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
			$product['vat_lieu'] = $this->input->post('vat_lieu');
			$product['kich_thuoc'] = $this->input->post('kich_thuoc');
			$product['mo_ta'] = $this->input->post('mo_ta');
			$product['huong_dan'] = $this->input->post('huong_dan');

			$categorie = $this->category_m->get($product['id_category']);
			$url_img = 'public/images/product/'.$categorie->alias;


			$config = array(
				'upload_path' => './'.$url_img,
				'allowed_types' => "gif|jpg|png|jpeg|pdf",
				'overwrite' => TRUE,
				'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
				'max_height' => "768",
				'max_width' => "1024"
			);
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload()){
				$this->data['error'] = array('error' => $this->upload->display_errors());
			}
			else{
				$data_upload = $this->upload->data();
				$product['img_truoc'] = $url_img.'/'.$data_upload['file_name'];
			}


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