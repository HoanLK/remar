<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$this->data['users'] = $this->user_m->get();
		$this->data['subview'] = 'admin/user/index';
		$this->load->view('admin/_layout_main', $this->data);
	}

	public function edit($id = null)
	{
		if($id != null){
			$this->data['user'] = $this->user_m->get($id);
		}else{
			$this->data['user'] = $this->user_m->get_new();
		}

		$rules = $this->user_m->rules_edit;
		$this->form_validation->set_rules($rules);
		$id || $rules['password']['rules'] .= '|required';

		if($this->form_validation->run() == TRUE){
			// $user = $this->user_m->array_from_post('username', 'name', 'password');
			$user['username'] = $this->input->post('username');
			$user['name'] = $this->input->post('name');
			if($this->input->post('password') != null){
				$user['password'] = md5($this->input->post('password'));
			}
			$this->user_m->save($user, $id);
			redirect('admin/user');
		}

		$this->data['subview'] = 'admin/user/edit';
		$this->load->view('admin/_layout_main', $this->data);

	}

	public function delete($id)
	{
		$this->user_m->delete($id);
		redirect('admin/user');
	}

	public function login()
	{
		$dashboard = 'admin/dashboard';

		if($this->user_m->loggedin() == true){
			redirect($dashboard);
		}

		$rules = $this->user_m->rules_login;
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() === TRUE){
			if($this->user_m->login() == true){
				redirect($dashboard);
			}else{
				$this->session->set_flashdata('errors', 'Username / Mật khẩu không đúng! ');
				redirect('/admin/user/login');
			}
		}

		$this->data['subview'] = 'admin/user/login';
		$this->load->view('_layout_other', $this->data);
	}

	public function logout()
	{
		$this->user_m->logout();
		redirect('admin/user/login');
	}

	public function _unique_username($str)
	{
		$id = $this->uri->segment(4);
		$this->db->where('username', $this->input->post('username'));
		!$id || $this->db->where('id !=', $id);
		$user = $this->user_m->get();

		if(count($user)){
			$this->form_validation->set_message('_unique_username', '%s đã tồn tại!');
			return false;
		}
		return true;

	}

}

/* End of file user.php */
/* Location: ./application/controllers/admin/user.php */