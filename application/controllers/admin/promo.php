<?php

class Promo extends CI_Controller
{
	private $data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('http_auth');
		$this->load->model('mconfig');
		$this->data['menu_section'] = 'promo';
		$this->data['msg'] = false;	
	}
	
	function index()
	{		
		$this->promo_list();
	}
	
	function promo_list()
	{
		// Get page
		//$this->data['comments'] = $this->mcomment->get_all_comments();
        $this->data['promo_active'] = $this->mconfig->get_value('promo');
		//print_r($this->data['promo_active']);die;
		// Prepare view
		$this->data['body'] = 'admin/promo/promo_list';
		$this->load->view('admin/layout', $this->data);
	}
	
	function edit($id)
	{
		// Get page
		$this->data['comment'] = $this->mcomment->comment_info($id);
		// Prepare view
		$this->data['action_title'] = 'Редактирование комментария';
		$this->data['body'] = 'admin/comments/edit_comment';
		$this->load->view('admin/layout', $this->data);
	}
	
	function submit()
	{
		// POST data
		$id = $this->input->post('id');		
		$comment['comment'] = $this->input->post('comment');

		// Validation
		// ...
		// Inserting/Updating
		if ($id)
		{
			$this->mcomment->update_comment($id, $comment);
			$this->data['msg']['type'] = 'succeed';
			$this->data['msg']['text'] = 'Статья "'.$comment['comment'].'" сохранена.';
		}
		else
		{
			$this->mcomment->add_comment($comment);
			$this->data['msg']['type'] = 'succeed';
			$this->data['msg']['text'] = 'Статья "'.$comment['comment'].'" добавлена.';
		}
		
		// Redirecting
		$this->comments_list();
	}
	
	function delete($id)
	{
		if ($this->mcomment->comment_exists($id))
		{
			// Deletting
			$this->mcomment->delete_comment($id);
			$this->data['msg']['type'] = 'succeed';
			$this->data['msg']['text'] = 'Статья успешно удалена.';						
		}
		else
		{
			// Page not found
			$this->data['msg']['type'] = 'error';
			$this->data['msg']['text'] = 'Статья не найдена.';	
		}						
		
		// Redirecting
		$this->comments_list();
	}
	function active()
	{
        $this->mconfig->set_value('promo','1');
		$this->promo_list();
	}
	function deactive()
	{
        $this->mconfig->set_value('promo','0');
		$this->promo_list();
	}
		
}

// End of file