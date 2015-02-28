<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends Frontend_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$this->load->view('frontend/index');
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

		if($this->input->post('TenKhachHang')) {
			$KhachHang['TenKhachHang'] = $this->input->post('TenKhachHang');
			$KhachHang['SDTKhachHang'] = $this->input->post('SDTKhachHang');
			$KhachHang['DaDoc'] = false;
			$KhachHang['id_product'] = $id;
			$KhachHang['time'] = date('D, d M Y H:i:s');  

			$this->khachhang_m->save($KhachHang);
		}

		$this->data['subview'] = 'frontend/product';
		$this->load->view('frontend/_layout_page', $this->data);
	}

}

/* End of file index.php */
/* Location: ./application/controllers/frontend/index.php */