<?php

class Marticles extends CI_Model
{
	public $language;
	
	function __construct()
	{
		parent::__construct();
		$this->language = $this->config->item('cur_lang') ? $this->config->item('cur_lang') : $this->config->item('language');
	}		
	
	function articles_list()
	{
		//$this->db->where($filter);
        $this->db->order_by('pub_date', 'DESC');
		$query = $this->db->get('articles');		
		$result = $query->result_array();  
		return $result ? $result : false;
	}
    function articles_list_last($limit)
    {
        $this->db->select('articles.id, articles.title_ru,images.path');
        $this->db->join('images', 'images.item_id = articles.id');
        $this->db->order_by('pub_date', 'DESC');
        $this->db->group_by("articles.title_ru");

        $query = $this->db->get('articles', $limit, 0 );
        $result = $query->result_array();
        return $result ? $result : false;
    }
	  
	function article_info($id)
	{
		
		$this->db->where('id', $id);
		$query = $this->db->get('articles');
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