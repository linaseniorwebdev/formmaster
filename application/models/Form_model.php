<?php

if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Form_model extends CI_Model {

	/**
	 * Get all fields of table
	 * @return mixed
	 */
	public function get_table_fields() {
		return $this->db->list_fields('forms');
	}

	/**
	 * Get all forms
	 * @return mixed
	 */
	public function get_all_forms() {
		$this->db->order_by('id', 'desc');
		return $this->db->get('forms')->result_array();
	}

	/**
	 * Add new form
	 * @param $params
	 * @return mixed
	 */
	public function add_form($params) {
		$this->db->insert('forms', $params);
		return $this->db->insert_id();
	}

	/**
	 * Update form data
	 * @param $form_id
	 * @param $params
	 * @return mixed
	 */
	public function update_form($form_id, $params) {
		$this->db->where('id', $form_id);
		return $this->db->update('forms', $params);
	}

	/**
	 * Get form by id
	 * @param $form_id
	 * @return mixed
	 */
	public function get_by_id($form_id) {
		return $this->db->get_where('forms', array('id' => $form_id))->row_array();
	}

	/**
	 * Get form by name
	 * @param $name
	 * @return mixed
	 */
	public function get_by_name($name) {
		return $this->db->get_where('forms', array('name' => $name))->row_array();
	}
}