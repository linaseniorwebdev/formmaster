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
	 * Generate Unique ID
	 */
	private function generateUID() {
		$nick = '';
		$base = '0123456789abcdefghijklmnopqrstuvwxyz';
		$uid = round(microtime(true) * 1000);
		for (;;) {
			if ($uid < 1) {
				break;
			}
			$idx = $uid - floor($uid / 36) * 36;
			$nick = $base[(int)$idx] . $nick;
			$uid = floor($uid / 36.0);
		}
		return $nick;
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
		if ($com === 'create') {
			$csrf = array(
				'name' => $this->security->get_csrf_token_name(),
				'hash' => $this->security->get_csrf_hash()
			);
			$uid = $this->generateUID();
			$this->load->view('admin/form/' . $com, array('uid' => $uid, 'csrf' => $csrf));
		} elseif ($com === 'list') {
			$this->load_header('All Forms', true);
			$this->load_sidebar('form', $com);
			$this->load->view('admin/form/' . $com);
			$this->load_footer(true);
		} elseif ($com === 'save') {
			if ($this->post_exist()) {
				$form = $this->input->post('form');
				$uid  = $this->input->post('uid');
				$arr  = explode("\n", $form);
				$res  = array();
				foreach ($arr as $item) {
					if (preg_replace('/\s+/', '', $item) !== '') {
						$res[] = $item;
					}
				}
				$res[0] = '<form action="<?=base_url(\'form/' . $uid .'\')?>" method="post">';
				$text = implode("\n", $res);
				file_put_contents(APPPATH . 'views/storage/' . $uid . '.php', $text);
				$this->load->model('Form_model');
				$this->Form_model->add_form(array('name' => $uid));
				echo json_encode(array('status' => 'success'));
			} else {
				$this->bad_request();
			}
		}
	}

}