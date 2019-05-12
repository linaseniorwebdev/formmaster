<?php

// Error Logging -> file_put_contents('debug.txt', date("Y-m-d H:i:s"));

defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'controllers/Base.php';

class Admin extends Base {

	public function __construct() {
		parent::__construct();

		if (!$this->admin) {
			redirect('auth/login');
		}
	}

	public function index() {
		echo 'This is admin page';
	}

}