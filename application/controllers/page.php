<?php

class Page extends ControllerBase 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('mpages', 'mmenu', 'marticles'));
        $this->data['last_news'] =  $this->marticles->articles_list_last(5);
        $this->data['menu_id'] = '';
	}		
	
	function get_page($name)
	{
        
		$this->data['page'] = $this->mpages->get_page($name, true);
		if (!$this->data['page']) show_404();
		$this->data['main_menu'] = $this->mmenu->menu_items(array('status' => '1'), true);

		$this->data['content'] = 'front/page';
        $this->data['body_onload'] = '';
        $this->data['extra_head_content'] = '';
        $page_menu_id = $this->mmenu->get_filtered_item(array('url'=>'page/'.$this->data['page']['name']));
        $this->load->view('front/layout', $this->data);
	}
    function get_page_test($name)
	{
		$this->data['page'] = $this->mpages->get_page($name, true);
		if (!$this->data['page']) show_404();
		$this->data['main_menu'] = $this->mmenu->menu_items(array('status' => '1'), true);
		$this->data['content'] = 'front/page';
        $this->data['body_onload'] = '';
        $this->data['extra_head_content'] = '';
        $this->load->view('front/layout', $this->data);
	}
}

// End of file