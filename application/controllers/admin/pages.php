<?php

class Pages extends CI_Controller 
{
	private $data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('http_auth');
		$this->load->model(array('mpages', 'mpages_test'));
		$this->data['menu_section'] = 'pages';
		$this->data['msg'] = false;	
	}
	
	function index()
	{		
		$this->pages_list();
	}
	
	function pages_list()
	{
		// Get page
		$this->data['pages'] = $this->mpages->pages_list();
		
		// Prepare view
		$this->data['body'] = 'admin/pages/pages_list';
		$this->load->view('admin/layout', $this->data);
	}
	
	function add()
	{
		// Prepare view
		$this->data['action_title'] = 'Добавление новой страници';
        $this->data['files'] = array();
		$this->data['page'] = array('name' => '', 'title_ru' => '', 'title_ua' => '', 'text_ru' => '', 'text_ua' => '', 'id' => '', 'create' => true);
		$this->data['body'] = 'admin/pages/edit_page';
		$this->load->view('admin/layout', $this->data);
	}
	
	function edit($id)
	{
		// Get page
        $this->data['page'] = $this->mpages->page_info($id);
//print_r($this->data['page']);die;
      // print_r($this->data['page']);die;
		//$this->data['files'] = $this->mfiles->get_files_by_id($id);
		// Prepare view
		$this->data['action_title'] = 'Редактирование страници';
		$this->data['body'] = 'admin/pages/edit_page';
		$this->load->view('admin/layout', $this->data);
	}
	
	function submit()
	{
        
		// POST data
		$id = $this->input->post('id');
		$page['name'] = $this->input->post('name');
		$page['title_ru'] = $this->input->post('title_ru');
		$page['title_ua'] = $this->input->post('title_ua');
		$page['text_ru'] = $this->input->post('text_ru');
		$page['text_ua'] = $this->input->post('text_ua');

        // Validation
		// ...
		
		// Inserting/Updating
		if ($id)
		{

			$this->mpages->update_page($id, $page);
			$this->data['msg']['type'] = 'succeed';
			$this->data['msg']['text'] = 'Страница "'.$page['title_ru'].'" сохранена.';			 			
		}
		else
		{
			$id = $this->mpages->add_page($page);
			$this->data['msg']['type'] = 'succeed';
			$this->data['msg']['text'] = 'Страница "'.$page['title_ru'].'" добавлена.';
		}
		// Redirecting
        redirect('admin/pages/edit/'.$id);
		//$this->edit($id);
    
	}
	function submit_test()
	{
  		// POST data
		$id = $this->input->post('id');
		$page['draft_name'] = $this->input->post('name');
		$page['draft_title_ru'] = $this->input->post('title_ru');
		$page['draft_title_ua'] = $this->input->post('title_ua');
		$page['draft_text_ru'] = $this->input->post('text_ru');
		$page['draft_text_ua'] = $this->input->post('text_ua');
        $page['draft'] = 1;

        
        // Validation
		// ...

		// Inserting/Updating

		$this->mpages->update_page($id, $page);
		$this->data['msg']['type'] = 'succeed';
		$this->data['msg']['text'] = 'Страница "'.$page['title_ru'].'" сохранена.';
		redirect('admin/pages/edit/'.$id);
	}
    function submit_publish()
	{
  		// POST data
		$id = $this->input->post('id');
		$page['name'] = $this->input->post('name');
		$page['title_ru'] = $this->input->post('title_ru');
		$page['title_ua'] = $this->input->post('title_ua');
		$page['text_ru'] = $this->input->post('text_ru');
		$page['text_ua'] = $this->input->post('text_ua');
        $page['draft_name'] = '';
        $page['draft_title_ru'] = '';
        $page['draft_title_ua'] = '';
        $page['draft_text_ru'] = '';
        $page['draft_text_ua'] = '';
        $page['draft'] = 0;


        // Validation
		// ...

		// Inserting/Updating

		$this->mpages->update_page($id, $page);
		$this->data['msg']['type'] = 'succeed';
		$this->data['msg']['text'] = 'Страница "'.$page['title_ru'].'" сохранена.';
		redirect('admin/pages/edit/'.$id);
	}
    function submit_cancel()
	{
  		// POST data
		$id = $this->input->post('id');
        $page_info = $this->mpages->page_info($id);
		
        $page['draft_name'] = $page_info['name'];
        $page['draft_title_ru'] = $page_info['title_ru'];
        $page['draft_title_ua'] = $page_info['title_ua'];
        $page['draft_text_ru'] = $page_info['text_ru'];
        $page['draft_text_ua'] = $page_info['text_ua'];
        $page['draft'] = 1;


        // Validation
		// ...

		// Inserting/Updating

		$this->mpages->update_page($id, $page);
		$this->data['msg']['type'] = 'succeed';
		$this->data['msg']['text'] = 'Страница "'.$page['title_ru'].'" сохранена.';
		redirect('admin/pages/edit/'.$id);
	}
	function delete($id)
	{		
		if ($this->mpages->page_exists($id))
		{
			// Deletting
			$this->mpages->delete_page($id);
			$this->data['msg']['type'] = 'succeed';
			$this->data['msg']['text'] = 'Страница успешно удалена.';						
		}
		else
		{
			// Page not found
			$this->data['msg']['type'] = 'error';
			$this->data['msg']['text'] = 'Страница не найдена.';	
		}						
		
		// Redirecting
		$this->pages_list();
	}
	
	function change_status($id)
	{
		if ($this->mpages->page_exists($id))
		{
			// Deletting
			$this->mpages->change_status($id);
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
		$this->pages_list();
	}
    function validate_name()
	{
        if ($this->mpages->validate_page_name($_GET["name"])) {
            echo "Такое имя существует";
        } else {
            echo "Подходит";
        }
    }
		
}

// End of file