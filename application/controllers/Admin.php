<?php

// Error Logging -> file_put_contents('debug.txt', date("Y-m-d H:i:s"));

defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'controllers/Base.php';

class Admin extends Base {

	/**
	 * Admin constructor
	 */
	public function __construct() {
		parent::__construct();

		if (!$this->admin) {
			redirect('auth/login');
		}
	}

	/**
	 * Admin Index Page
	 */
	public function index() {
		$this->load_header('Admin Dashboard', true);
		$this->load_sidebar('index');
		$this->load->view('admin/index');
		$this->load_footer(true);
	}

	/**
	 * Form Processing Page
	 * @param string $com
	 */
	public function form($com = 'list') {
		if ($com === 'list') {
			$title = 'All Forms';
		} else {
			$title = 'Create a Form';
		}
		$this->load_header($title, true);
		$this->load_sidebar('form', $com);
		$this->load->view('admin/form/' . $com);
		$this->load_footer(true);
	}
}