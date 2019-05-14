<?php

// Error Logging -> file_put_contents('debug.txt', date("Y-m-d H:i:s"));

defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'controllers/Base.php';

class Auth extends Base {

	public function index() {
		if ($this->admin) {
			redirect('admin');
		} else {
			redirect('auth/login');
		}
	}

	public function login() {
		$csrf = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);
		$message = '';
		if ($this->post_exist()) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->load->model('Admin_model');
			$admin = $this->Admin_model->get_by_name($username);
			if ($admin) {
				if ($admin['password'] !== md5(PASSWORD_SALT . $password)) {
					$message = 'Password incorrect';
				} else {
					$this->session->set_userdata('admin', $admin['id']);
					redirect('admin');
				}
			} else {
				$message = 'Unregistered user!';
			}
		}
		$this->load->view('auth/login', array('csrf' => $csrf, 'message' => $message));
	}

	public function logout() {
		$this->session->unset_userdata('admin');
		redirect('/');
	}
}