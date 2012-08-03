<?php

class Comments extends CI_Controller 
{
	private $data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('http_auth');
		$this->load->model('mcomment');
		$this->data['menu_section'] = 'comments';
		$this->data['msg'] = false;	
	}
	
	function index()
	{		
		$this->comments_list();
	}
	
	function comments_list()
	{
		// Get page
		$this->data['comments'] = $this->mcomment->get_all_comments();
		//print_r($this->data['comments']);die;
		// Prepare view
		$this->data['body'] = 'admin/comments/comments_list';
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
	
	function delete_all_comments()
	{
		foreach($_POST as $key)
   			{
				$post_id=$this->mcomment->get_post_id($key);
				$this->delete($key, $post_id['post_id'], $all=true);
   			}
		// Redirecting
		$this->comments_list();		
	}
	
	function delete($id, $post_id, $all='')
	{
		
		if ($this->mcomment->comment_exists($id))
		{
			// Deletting
			
			$this->mcomment->delete_comment($id);
			$count=$this->mcomment->comments_count($post_id);
			$this->mcomment->update_comments_count($post_id, $count['count']);
			$last_id=$this->mcomment->get_last_comment_id ($post_id);
			$this->mcomment->update_last_comment($post_id,$last_id['comment_id']);
			$this->data['msg']['type'] = 'succeed';
			$this->data['msg']['text'] = 'Комментарий успешно удален.';						
		}
		else
		{
			// Page not found
			$this->data['msg']['type'] = 'error';
			$this->data['msg']['text'] = 'Комментарий не найден.';	
		}						
		
		if (!$all){
		// Redirecting
		$this->comments_list();
		}
	}
	
	
		
}

// End of file