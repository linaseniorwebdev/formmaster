<?php

// Error Logging -> file_put_contents('debug.txt', date("Y-m-d H:i:s"));

defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'controllers/Base.php';

class Form extends Base {

	public function index() {
		$this->load->view('front/index');
	}

	public function lists() {
		$this->load->model('Form_model');
		$forms = $this->Form_model->get_all_forms();
		$this->load->view('front/lists', array('forms' => $forms));
	}

	public function view($uid = null) {
		if ($uid) {
			$this->load->view('storage/' . $uid);
		} else {
			$this->bad_request();
		}
	}
}