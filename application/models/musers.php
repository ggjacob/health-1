<?php

class Musers extends CI_Model
{
	public $language;
	
	function __construct()
	{
		parent::__construct();
	}
    function get_user($name)
    {
        $this->db->where('name', $name);
        $query = $this->db->get('users');
        $result = $query->row_array();
        //echo  $this->db->last_query();die;
        return $result ? $result : false;
    }

}

// End of file