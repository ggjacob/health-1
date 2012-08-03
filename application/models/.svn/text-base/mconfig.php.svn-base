<?php

class Mconfig extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function get_value($key)
	{
		$this->db->select('value');
		$this->db->where('key', $key);
		$query = $this->db->get('config');
		$result = $query->row_array();
		return $result ? $result['value'] : false;
	}
	
	function set_value($key, $value)
	{
		if ($this->key_exists($key))
		{
			$this->db->where('key', $key);
			$this->db->set('value', $value);
			$this->db->update('config');
		}
		else
		{
			$this->db->insert('config', array('key' => $key, 'value' => $value));
		}		
	}
	
	function get_values($keys)
	{
		$this->db->select('key, value');
		$this->db->where_in('key', $keys);
		$query = $this->db->get('config');
		$result = $query->result_array();
		if ($result)
		{
			$return_arr = array();
			foreach ($result as $rec)
			{
				$return_arr[$rec['key']] = $rec['value'];
			}
			return $return_arr;
		}
		else
		{
			return false;
		}
	}
	
	function key_exists($key)
	{
		$this->db->where('key', $key);
		return $this->db->count_all_results('config') > 0 ? true : false;
	}
}

// End of file