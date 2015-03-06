<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer_m extends MY_Model {

	protected $_table_name = 'customers';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';
	protected $_order_by = 'time';

	public function __construct()
	{
		parent::__construct();
		
	}

	public function get($id = NULL, $single = FALSE, $order = 'asc'){
		
		if ($id != NULL) {
			$filter = $this->_primary_filter;
			$id = $filter($id);
			$this->db->where($this->_primary_key, $id);
			$method = 'row';
		}
		elseif($single == TRUE) {
			$method = 'row';
		}
		else {
			$method = 'result';
		}
		
		if (!count($this->db->ar_orderby)) {
			$this->db->order_by('read asc, time desc');
		}
		return $this->db->get($this->_table_name)->$method();
	}

}

/* End of file category_m.php */
/* Location: ./application/models/category_m.php */