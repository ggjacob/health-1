<?php

class Settings extends CI_Controller 
{
	private $data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('http_auth');
		$this->load->model('mconfig');
		$this->data['msg'] = false;	
		$this->data['menu_section'] = 'settings';		
	}
	
	function index()
	{
		// Main page config
		$config_keys = array('admin_login');
		$this->data['settings'] = $this->mconfig->get_values($config_keys);											 				
		
		// Prepare view
		$this->data['body'] = 'admin/settings/site_settings';
		$this->load->view('admin/layout', $this->data);
	}
	
	function submit()
	{
		// POST data
		$admin_login = $this->input->post('admin_login');
		$old_pass = $this->input->post('old_pass');
		$new_pass = $this->input->post('new_pass');
		$new_pass_confirm = $this->input->post('new_pass_confirm');
		
		// Saving
		if ($admin_login) $this->mconfig->set_value('admin_login', $admin_login);
		if ($old_pass AND $new_pass AND $new_pass_confirm)
		{
			$db_pass = $this->mconfig->get_value('admin_pass');
			if ($db_pass == md5($old_pass) AND $new_pass == $new_pass_confirm)
			{
				$this->mconfig->set_value('admin_pass', md5($new_pass));
			}
			else
			{
				if ($db_pass != md5($old_pass))
				{
					// Message
					$this->data['msg']['type'] = 'error';
					$this->data['msg']['text'] = 'Старый пароль введен неверно.';			
				}
				elseif ($new_pass != $new_pass_confirm)
				{
					// Message
					$this->data['msg']['type'] = 'error';
					$this->data['msg']['text'] = 'Пароли не совпадают.';
				}
			}
		}
		
		if (!$this->data['msg'])
		{
			$this->data['msg']['type'] = 'succeed';
			$this->data['msg']['text'] = 'Данные сохранены.';
		}				
		
		// Redirect
		$this->index();
	}
}

// End of file