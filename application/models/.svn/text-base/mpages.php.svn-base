<?php

class Mpages extends CI_Model
{
	public $language;
	
	function __construct()
	{
		parent::__construct();
		$this->language = $this->config->item('cur_lang') ? $this->config->item('cur_lang') : $this->config->item('language');
	}		
	
	function pages_list($fields = null, $filter = null)
	{
		if ($fields) $this->db->select(implode(',', $fields));
		if ($filter) $this->db->where($filter);
		$this->db->order_by('id');
		$query = $this->db->get('pages');		
		$result = $query->result_array();
		return $result ? $result : false;
	}
	
	function get_page($name, $i18n = false)
	{
		$this->db->select('id, status, name');
		if ($i18n)
		{
			$this->db->select('title_'.$this->language.' as title');
			$this->db->select('text_'.$this->language.' as text');
		}
		else
		{
			$this->db->select('title_ru, title_ua, text_ru, text_ua');
		}
		$this->db->where('name', $name);
		$query = $this->db->get('pages');
		$result = $query->row_array();
		return $result ? $result : false;
	}
	function get_page_draft($name, $i18n = false)
	{
		$this->db->select('id, status, name');
		if ($i18n)
		{
			$this->db->select('draft_title_'.$this->language.' as title');
			$this->db->select('draft_text_'.$this->language.' as text');
		}
		else
		{
			$this->db->select('draft_title_ru, draft_title_ua, draft_text_ru, text_ua');
		}
		$this->db->where('name', $name);
		$query = $this->db->get('pages');
		$result = $query->row_array();
		return $result ? $result : false;
	}
	function get_page_by_id($id)
	{
		$this->db->select('id, status, name');
		$this->db->select('title_'.$this->language.' as title');
		$this->db->select('text_'.$this->language.' as text');
		$this->db->where('id', $id);
		$query = $this->db->get('pages');
		$result = $query->row_array();
		return $result ? $result : false;
	}
	
	function page_info($id, $i18n = false)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('pages');
		$result = $query->row_array();
		return $result ? $result : false;
	}
	function page_draft_info($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('pages');
		$result = $query->row_array();
		return $result ? $result : false;
	}
	function update_page($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('pages', $data);
	}
	
	function add_page($data)
	{
		$this->db->insert('pages', $data);
        return $this->db->insert_id();
	}
	
	function delete_page($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('pages');
	}
	
	function page_exists($id)
	{
		$this->db->where('id', $id);
		return $this->db->count_all_results('pages') > 0 ? true : false;
	}
	
	function change_status($id)
	{
		$page = $this->page_info($id);
		$new_status = $page['status'] == '0' ? '1' : '0';		
		$this->db->where('id', $id);
		$this->db->set('status', $new_status);
		$this->db->update('pages');
	}
    function set_test_page($id,$value)
	{
		$this->db->where('id', $id);
		$this->db->set('test_page', $value);
		$this->db->update('pages');
	}
    function get_page_by_test($test_page)
	{
        $this->db->select('id');
		$this->db->where('test_page', $test_page);
		$query = $this->db->get('pages');
		$result = $query->row_array();
        return $result;
	}
    function validate_page_name($name)
	{
		$this->db->where('name', $name);
		$query = $this->db->get('pages');
		$result = $query->row_array();
		return $result ? $result : false;
	}
}

// End of file