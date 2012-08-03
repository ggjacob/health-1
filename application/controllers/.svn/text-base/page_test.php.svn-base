<?php

class Page_test extends ControllerBase 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('mpages', 'mmenu'));
	}		
	
	function get_page($name)
	{
        //echo 'page';die;
		$this->data['page'] = $this->mpages->get_page_draft($name, true);
		if (!$this->data['page']) show_404();
		$this->data['main_menu'] = $this->mmenu->menu_items(array('status' => '1'), true);
        ///$this->data['files'] =$this->mfiles->get_files_by_id($this->data['page']['id']);
        //print_r($this->data['files']);die;
		$this->data['content'] = 'front/page';
        $this->data['body_onload'] = '';
        $this->data['extra_head_content'] = '';				
        $this->load->view('front/layout', $this->data);        
	}

}

// End of file