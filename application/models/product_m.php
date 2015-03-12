<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_m extends MY_Model {

	protected $_table_name = 'products';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';
	protected $_order_by = 'name';
	public $rules_product = array(
		'name' => array(
			'field' => 'name',
			'label' => 'name',
			'rules' => 'trim|required|xss_clean|callback__unique_productname'
		),
	);

	public function __construct()
	{
		parent::__construct();
		
	}

	public function get_new()
	{
		$product = new stdClass();
		$product->name = '';
		$product->id_category = '';
		$product->gia = '';
		$product->vat_lieu = '';
		$product->kich_thuoc = '';
		$product->mo_ta = '';
		$product->huong_dan = '';
		return $product;
	}

}

/* End of file product_m.php */
/* Location: ./application/models/product_m.php */