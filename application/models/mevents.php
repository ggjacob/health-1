<?php

class Mevents extends CI_Model
{
	public $language;
	
	function __construct()
	{
		parent::__construct();
		$this->language = $this->config->item('cur_lang') ? $this->config->item('cur_lang') : $this->config->item('language');
	}		
	
	function events_list($fields = null, $filter = null, $order_cat = null, $order_by = null, $time_now = null)
	{
	    if ($fields)
		{
			$this->db->select(implode(',', $fields));
		}				
		if ($filter) $this->db->where($filter);
        if ($order_cat) $this->db->order_by($order_cat, $order_by);
        $where = "(every_day ='1' OR (every_day='0' AND date='".date('m-d-Y')."'))";
        $this->db->where($where);
        $this->db->where('time >=',$time_now);
        $this->db->join('owner', 'owner.id = events.id_owner');
        $this->db->join('category', 'category.id = events.category');
		$query = $this->db->get('events');
		$result = $query->result_array();
        //echo  $this->db->last_query();die;
		return $result ? $result : false;
	}
    function events_list_admin()
    {
        $this->db->order_by('id', 'ASC');
        //$this->db->select('events.id as event_id, events.title, events.category, owner.id as owner_id');
       // $this->db->join('owner', 'owner.id = events.id_owner');
        //$this->db->join('category', 'category.id = events.category');
        $query = $this->db->get('events');
        $result = $query->result_array();
        //echo  $this->db->last_query();die;
        return $result ? $result : false;
    }
    function add_event($data)
    {
        $this->db->insert('events', $data);
    }
    function update_event($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('events', $data);
    }
	function event_info($id)
	{

		$this->db->where('id', $id);
		$query = $this->db->get('events');
		$result = $query->row_array();
		return $result ? $result : false;
	}
	function events_list_by_category($name)
	{
		$query = $this->db->query('SELECT * FROM `events`JOIN `owner` ON `owner`.`id` = `events`.`id_owner`  WHERE category IN (SELECT id FROM category WHERE `alias` = "'.$name.'") ORDER BY time ASC');
		$result = $query->result_array();
		return $result ? $result : false;
	}

  /* ------------------ ----------------- -------------- -  -------------*/
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