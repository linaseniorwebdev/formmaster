<?php

if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Admin_model extends CI_Model {

	/**
	 * Get all fields of table
	 * @return mixed
	 */
	public function get_table_fields() {
		return $this->db->list_fields('admins');
	}

	/**
	 * Get all admins
	 * @return mixed
	 */
	public function get_all_admins() {
		$this->db->order_by('id', 'desc');
		return $this->db->get('admins')->result_array();
	}

	/**
	 * Add new admin
	 * @param $params
	 * @return mixed
	 */
	public function add_user($params) {
		$this->db->insert('admins', $params);
		return $this->db->insert_id();
	}

	/**
	 * Update admin data
	 * @param $admin_id
	 * @param $params
	 * @return mixed
	 */
	public function update_user($admin_id, $params) {
		$this->db->where('id', $admin_id);
		return $this->db->update('admins', $params);
	}

	/**
	 * Get admin by id
	 * @param $admin_id
	 * @return mixed
	 */
	public function get_by_id($admin_id) {
		return $this->db->get_where('admins', array('id' => $admin_id))->row_array();
	}

	/**
	 * Get admin by name
	 * @param $name
	 * @return mixed
	 */
	public function get_by_name($name) {
		return $this->db->get_where('admins', array('admin' => $name))->row_array();
	}
}