<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Khachhang_m extends MY_Model {

	protected $_table_name = 'ttkhachhang';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';
	protected $_order_by = 'TenKhachHang';

	public function __construct()
	{
		parent::__construct();
		
	}

}

/* End of file category_m.php */
/* Location: ./application/models/category_m.php */