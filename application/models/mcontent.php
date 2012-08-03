<?php

class Mcontent extends CI_Model
{
	public $language;
	
	function __construct()
	{
		parent::__construct();
		$this->language = $this->config->item('cur_lang') ? $this->config->item('cur_lang') : $this->config->item('language');
	}		
	
	function content_list($fields = null, $filter = null, $i18n = false)
	{
		if ($i18n)
		{
			$this->db->select('id, status, pub_date');
			$this->db->select('title_'.$this->language.' as title');	
			$this->db->select('anons_'.$this->language.' as anons');
		}
		elseif ($fields)
		{
			$this->db->select(implode(',', $fields));
		}				
		if ($filter) $this->db->where($filter);
		$this->db->order_by('pub_date', 'desc');
		$query = $this->db->get('content');
		$result = $query->result_array();
		return $result ? $result : false;
	}		
	
	function content_info($id, $i18n = false)
	{
		if ($i18n)
		{
			$this->db->select('id, pub_date');
			$this->db->select('title_'.$this->language.' as title');
			$this->db->select('text_'.$this->language.' as text');
		}
		$this->db->where('id', $id);
		$query = $this->db->get('content');
		$result = $query->row_array();
		return $result ? $result : false;
	}
	
	function update_content($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('content', $data);
	}
	
	function add_content($data)
	{
		$this->db->insert('content', $data);
	}
	
	function delete_content($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('content');
	}
	
	function content_exists($id)
	{
		$this->db->where('id', $id);
		return $this->db->count_all_results('content') > 0 ? true : false;
	}
	
	function change_status($id)
	{
		$content = $this->content_info($id);
		$new_status = $content['status'] == '0' ? '1' : '0';
		$this->db->where('id', $id);
		$this->db->set('status', $new_status);
		$this->db->update('content');
	}
}

// End of file