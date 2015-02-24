<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_m extends MY_Model {

	protected $_table_name = 'user';
	protected $_order_by = 'username';
	public $rules_login = array(
		'username' => array(
			'field' => 'username',
			'label' => 'Username',
			'rules' => 'trim|required|xss_clean'
		),
		'password' => array(
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'trim|required'
		),
	);

	public $rules_edit = array(
		'username' => array(
			'field' => 'username',
			'label' => 'Username',
			'rules' => 'trim|required|callback__unique_username|xss_clean'
		),
		'name' => array(
			'field' => 'name',
			'label' => 'Name',
			'rules' => 'trim|required|xss_clean'
		),
		'password' => array(
			'field' => 'password', 
			'label' => 'Password', 
			'rules' => 'trim|matches[password_confirm]'
		),
		'password_confirm' => array(
			'field' => 'password_confirm', 
			'label' => 'Confirm password', 
			'rules' => 'trim|matches[password]'
		),
	);



	public function __construct()
	{
		parent::__construct();
		
	}

	public function login(){
		$user = $this->get_by(
			array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
			), TRUE);

		if (count($user)) {
			$data = array(
				'name' => $user->name,
				'username' => $user->username,
				'id' => $user->id,
				'loggedin' => TRUE,
			);
			$this->session->set_userdata($data);
		}

	}

	public function get_new()
	{
		$user = new stdClass();
		$user->username = '';
		$user->name = '';
		$user->password = '';
		return $user;
	}

	public function logout(){
		$this->session->sess_destroy();	
	}

	public function loggedin(){
		return (bool) $this->session->userdata('loggedin');
	}

}

/* End of file user_m.php */
/* Location: ./application/models/user_m.php */