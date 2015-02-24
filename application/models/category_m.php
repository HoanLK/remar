<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_m extends MY_Model {

	protected $_table_name = 'categories';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';
	protected $_order_by = 'name';
	public $rules_category = array(
		'name' => array(
			'field' => 'name',
			'label' => 'name',
			'rules' => 'trim|required|xss_clean|callback__unique_categoryname'
		),
	);

	public function __construct()
	{
		parent::__construct();
		
	}

	public function get_new()
	{
		$category = new stdClass();
		$category->id = 1;
		$category->name = '';
		$category->id_parent = '';
		$category->description = '';
		return $category;
	}

}

/* End of file category_m.php */
/* Location: ./application/models/category_m.php */