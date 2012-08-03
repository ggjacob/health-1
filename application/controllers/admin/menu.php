<?php

class Menu extends CI_Controller 
{
	private $data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('http_auth');
		$this->load->model('mmenu');
		$this->data['msg'] = false;
		$this->data['menu_section'] = 'menu';			
	}
	
	function index()
	{
		$this->menu_list();
	}
	
	function menu_list()
	{
        $items = $this->mmenu->menu_items();
        $tree = array();
        foreach($items as $i){
            if (!isset($tree[$i['parent']])) $tree[$i['parent']] = array();
                $tree[$i['parent']][$i['id']] = $i;
            }
        //print_r($tree);die;
        $this->data['menu_items'] = $tree;
		// Prepare view
		$this->data['action_title'] = 'Редактирование основного меню';
		$this->data['body'] = 'admin/menu/menu_list';
		$this->load->view('admin/layout', $this->data);
	}
	
	function add()
	{
		$this->data['menu'] = array('title_ru' => '', 'title_ua' => '', 'url' => '', 'id' => '', 'parent' => 0);
		$this->data['action_title'] = 'Добавление нового елемента меню';
         $items = $this->mmenu->menu_items();
        $tree = array();
        foreach($items as $i){
            if (!isset($tree[$i['parent']])) $tree[$i['parent']] = array();
                $tree[$i['parent']][$i['id']] = $i;
        }

        $this->data['menu_items'] = $tree;
		
		$this->data['body'] = 'admin/menu/edit_item';
		$this->load->view('admin/layout', $this->data);
	}
	
	function edit($id)
	{
		// Get menu item				
		$this->data['menu'] = $this->mmenu->get_item($id);
		if (!$this->data['menu']) show_404();
		
		// Prepare view
        $items = $this->mmenu->menu_items();
        $tree = array();
        foreach($items as $i){
            if (!isset($tree[$i['parent']])) $tree[$i['parent']] = array();
                $tree[$i['parent']][$i['id']] = $i;
        }

        $this->data['menu_items'] = $tree;
		//print_r($this->data['menu_items']);die;
        $this->data['action_title'] = 'Редактирование елемента меню';
		$this->data['body'] = 'admin/menu/edit_item';
		$this->load->view('admin/layout', $this->data);
	}
	
	function move_up($id)
	{
		$this->mmenu->move_up($id);
		$this->data['msg']['type'] = 'succeed';
		$this->data['msg']['text'] = 'Список успешно отсортирован.';
		// Redirecting
		$this->menu_list();
	}
	
	function move_down($id)
	{
		$this->mmenu->move_down($id);
		$this->data['msg']['type'] = 'succeed';
		$this->data['msg']['text'] = 'Список успешно отсортирован.';
		// Redirecting
		$this->menu_list();
	}
	
	function submit()
	{
		// POST data
		$id = $this->input->post('id');		
		$menu['title_ru'] = $this->input->post('title_ru');
		$menu['title_ua'] = $this->input->post('title_ua');
		$menu['url'] = $this->input->post('url');
        $menu['parent'] = $this->input->post('parent');		
		
		// Inserting/Updating
		if ($id)
		{
			$this->mmenu->update_item($id, $menu);
			$this->data['msg']['type'] = 'succeed';
			$this->data['msg']['text'] = 'Елемент меню "'.$menu['title_ru'].'" сохранен.';			 			
		}
		else
		{
			$this->mmenu->add_item($menu);
			$this->data['msg']['type'] = 'succeed';
			$this->data['msg']['text'] = 'Елемент меню "'.$menu['title_ru'].'" добавлен.';
		}
		
		// Redirecting
		redirect('/admin/menu');
	}
	
	function delete($id)
	{
		if ($this->mmenu->item_exists($id))
		{
			// Deletting
			$this->mmenu->delete_item($id);
			$this->data['msg']['type'] = 'succeed';
			$this->data['msg']['text'] = 'Елемент меню успешно удален.';						
		}
		else
		{
			// Page not found
			$this->data['msg']['type'] = 'error';
			$this->data['msg']['text'] = 'Елемент не найден.';	
		}						
		
		// Redirecting
		$this->menu_list();
	}
	
	function change_status($id)
	{
		if ($this->mmenu->item_exists($id))
		{
			// Deletting
			$this->mmenu->change_status($id);
			$this->data['msg']['type'] = 'succeed';
			$this->data['msg']['text'] = 'Статус успешно изменен.';						
		}
		else
		{
			// Page not found
			$this->data['msg']['type'] = 'error';
			$this->data['msg']['text'] = 'Елемент не найден.';	
		}						
		
		// Redirecting
		$this->menu_list();
	}
}

// End of file