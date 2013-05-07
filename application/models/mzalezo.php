<?php

class Mzalezo extends CI_Model
{
	public $language;
	
	function __construct()
	{
		parent::__construct();
		$this->language = $this->config->item('cur_lang') ? $this->config->item('cur_lang') : $this->config->item('language');
	}

    function set_zalezo($data)
    {
        $this->db->insert('zalezo', $data);
    }
    function get_zalezo_by_user($user_id)
    {
        $this->db->where('user_id', $user_id);
        //2 month
        $this->db->where('date >', date('Y-m-d', time()-2*2629800));
        $this->db->order_by('date','DESC');

        $query = $this->db->get('zalezo');
        $result = $query->result_array();
        ///echo  $this->db->last_query();die;
        return $result ? $result : false;
    }



    /////////////////////////------------------------------//////////////////////////////////
    function products_list()
    {
        $query = $this->db->get('products');
        $result = $query->result_array();
        //echo  $this->db->last_query();die;
        return $result ? $result : false;
    }
    function get_product($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('products');
        $result = $query->row_array();
        return $result ? $result : false;
    }

}

// End of file