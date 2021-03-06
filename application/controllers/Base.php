<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

	public $admin;

	/**
	 * Default constructor
	 */
	public function __construct() {
		parent::__construct();

		if ($this->session->admin) {
			$this->admin = true;
		}
	}

	/**
	 * Load header file, with title
	 * @param $title
	 * @param null $admin
	 */
	public function load_header($title, $admin = null) {
		if ($admin) {
			$this->load->view('admin/header', array('title' => $title));
		} else {
			$this->load->view('front/header', array('title' => $title));
		}
	}

	/**
	 * Load sidebar with active items
	 * @param $com
	 * @param null $sub
	 */
	public function load_sidebar($com, $sub = null) {
		$this->load->view('admin/sidebar', array('com' => $com, 'sub' => $sub));
	}

	/**
	 * Load footer file
	 * @param null $admin
	 * @param null $params
	 */
	public function load_footer($admin = null, $params = null) {
		if ($admin) {
			if ($params) {
				$this->load->view('admin/footer', $params);
			} else {
				$this->load->view('admin/footer');
			}
		} else {
			$this->load->view('front/footer');
		}
	}

	/**
	 * Check if post data exist
	 */
	public function post_exist() {
		return isset($_POST) && count($_POST) > 0;
	}

	/**
	 * Check if get data exist
	 */
	public function get_exist() {
		return isset($_GET) && count($_GET) > 0;
	}
	
	/**
	 * Set output header as HTTP 400
	 */
	public function bad_request() {
		$this->output->set_status_header('400', 'Bad Request');
	}

	/**
	 * Set output header as HTTP 500
	 */
	public function server_error() {
		$this->output->set_status_header('500', 'Internal Server Error');
	}

	/**
	 * Get time based unique ID
	 */
	public function getUID() {
		$date = new DateTime();
		return $date->getTimestamp();
	}
}
