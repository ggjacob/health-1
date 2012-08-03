<?php

class Mmenu extends CI_Model
{
	public $language;
	
	function __construct()
	{
		parent::__construct();
		$this->language = $this->config->item('cur_lang') ? $this->config->item('cur_lang') : $this->config->item('language');
	}
	
	function menu_items($filter = null, $i18n = false)
	{
		$this->db->select('id, url, status, parent');
		if ($i18n)
		{

            $this->db->select('title_'.$this->language.' as title');

        }
		else
		{
			$this->db->select('title_ru, title_ua');
		}
		if ($filter) $this->db->where($filter);
       
		$this->db->order_by('ordering', 'asc');
		$query = $this->db->get('menu');
		$result = $query->result_array();
        if ($result)
		{
            foreach ($result as $key => $item)
			{

				if (strpos($item['url'], 'article/') !== false OR strpos($item['url'], 'page/') !== false)
				{
					$result[$key]['url'] = base_url() . $this->language . '/' . $item['url'];
				}
				if ($item['url'] == 'store')
				{
					$result[$key]['url'] = base_url() . $item['url'] . '/' . $this->language;
				}
				elseif (strpos($item['url'], '/') === false AND strpos($item['url'], '.') === false)
				{
					$result[$key]['url'] = base_url() . $this->language . '/' . $item['url'];
				}

			}

			return $result;

        }
		else
		{
			return false;
		}		
	}
	
	function item_exists($id)
	{
		$this->db->where('id', $id);
		return $this->db->count_all_results('menu') > 0 ? true : false;
	}
	
	function get_item($id)
	{
		$this->db->where('id', $id);		
		$query = $this->db->get('menu');
		$result = $query->row_array();
		return $result ? $result : false;
	}
	
	function get_filtered_item($filter)
	{
		$this->db->where($filter);		
		$query = $this->db->get('menu');
		$result = $query->row_array();
		return $result ? $result : false;
	}
	
	function update_item($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('menu', $data);
	}
	
	function add_item($data)
	{
		$data['ordering'] = $this->get_last_order() + 1;		
		$this->db->insert('menu', $data);
	}
	
	function delete_item($id)
	{
		// Set ordering of other menu elements
		$item = $this->get_item($id);
		$this->db->where('ordering > ', $item['ordering']);
		$this->db->set('ordering', 'ordering - 1', false);
		$this->db->update('menu');
		
		// Delete item
		$this->db->where('id', $id);
		$this->db->delete('menu');
	}
	
	function get_last_order()
	{
		$this->db->select('ordering');
		$this->db->order_by('ordering', 'desc');
		$this->db->limit(1);
		$query = $this->db->get('menu');
		$result = $query->row_array();
		return $result ? $result['ordering'] : 0;
	}
	
	function move_up($id)
	{
		$item = $this->get_item($id);
		$prev_item = $this->get_filtered_item(array('ordering' => (int)$item['ordering'] - 1));
		if ($prev_item)
		{
			$this->update_item($id, array('ordering' => $prev_item['ordering']));
			$this->update_item($prev_item['id'], array('ordering' => $item['ordering']));
		}
	}
	
	function move_down($id)
	{
		$item = $this->get_item($id);
		$next_item = $this->get_filtered_item(array('ordering' => (int)$item['ordering'] + 1));
		if ($next_item)
		{
			$this->update_item($id, array('ordering' => $next_item['ordering']));
			$this->update_item($next_item['id'], array('ordering' => $item['ordering']));
		}
	}
	
	function change_status($id)
	{
		$item = $this->get_item($id);
		$new_status = $item['status'] == '0' ? '1' : '0';		
		$this->db->where('id', $id);
		$this->db->set('status', $new_status);
		$this->db->update('menu');
	}		
}

// End of file