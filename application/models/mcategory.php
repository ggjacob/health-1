<?php

class Mcategory extends CI_Model
{
	public $language;
	
	function __construct()
	{
		parent::__construct();
		$this->language = $this->config->item('cur_lang') ? $this->config->item('cur_lang') : $this->config->item('language');
	}		
	
	function events_list($fields = null, $filter = null, $order_cat = null, $order_by = null)
	{
	    if ($fields)
		{
			$this->db->select(implode(',', $fields));
		}				
		if ($filter) $this->db->where($filter);
        if ($order_cat) $this->db->order_by($order_cat, $order_by);
        $this->db->join('owner', 'owner.id = events.id_owner');
		$query = $this->db->get('events');
		$result = $query->result_array();
		return $result ? $result : false;
	}
    function add_event($data)
    {
        $this->db->insert('events', $data);
    }

	function event_info($id)
	{

		$this->db->where('id', $id);
		$query = $this->db->get('events');
		$result = $query->row_array();
		return $result ? $result : false;
	}
	
	function update_article($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('articles', $data);
	}
	function update_view($id)
	{
		$this->db->where('id', $id);
          $this->db->set('view', 'view + 1', false);
		$this->db->update('articles');
	}
	function add_article($data)
	{
		$this->db->insert('articles', $data);
	}
	
	function delete_article($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('articles');
	}
	
	function article_exists($id)
	{
		$this->db->where('id', $id);
		return $this->db->count_all_results('articles') > 0 ? true : false;
	}
	
	function change_status($id)
	{
		$article = $this->article_info($id);
		$new_status = $article['status'] == '0' ? '1' : '0';		
		$this->db->where('id', $id);
		$this->db->set('status', $new_status);
		$this->db->update('articles');
	}
}

// End of file