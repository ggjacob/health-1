<?php

class Main_page extends CI_Controller 
{
	private $data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('http_auth');
		$this->load->model('mconfig');		
		$this->load->model('mpages');
		$this->data['msg'] = false;
		$this->data['menu_section'] = 'main_page';	
	}
	
	function index()
	{
		// Main page config
		$config_keys = array('main_page_block', 'main_page_miniblock_1', 'main_page_miniblock_2', 'main_page_miniblock_3','banner1','banner2','banner3','banner_deposit','banner_galery', 'banner_deposit_link', 'banner_galery_link');
		$this->data['main_page_config'] = $this->mconfig->get_values($config_keys);				
		
		// Get all pages
		$this->data['pages'] = $this->mpages->pages_list(array('id', 'title_ru'));			 
		
		// Prepare view
		$this->data['action_title'] = 'Редактирование главной страници';
		$this->data['body'] = 'admin/main_page/page';
		$this->load->view('admin/layout', $this->data);
	}
	
	function submit()
	{
		// POST data
		$main_block = $this->input->post('main_block');
		$miniblock_1 = $this->input->post('miniblock_1');
		$miniblock_2 = $this->input->post('miniblock_2');
		$miniblock_3 = $this->input->post('miniblock_3');
        $banner_deposit_link = $this->input->post('banner_deposit_link');
        $banner_galery_link = $this->input->post('banner_galery_link');
        // Save banners
        $config['upload_path'] = './uploads/banners/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
        foreach($_FILES as $key => $value)
        {
            if( !empty($value['name']))
            {
                if ( !$this->upload->do_upload($key))
		        {
		        	$error = array('error' => $this->upload->display_errors());
			        $this->data['msg']['type'] = 'error';
			        $this->data['msg']['text'] = $error;
		        }
		        else
		        {
			        $data = array('upload_data' => $this->upload->data());
                    $this->mconfig->set_value($key, 'uploads/banners/'.$data['upload_data']['file_name']);
		        }
            }
        }

        
		
		// Saving
		if ($main_block) $this->mconfig->set_value('main_page_block', $main_block);
		if ($miniblock_1) $this->mconfig->set_value('main_page_miniblock_1', $miniblock_1);
		if ($miniblock_2) $this->mconfig->set_value('main_page_miniblock_2', $miniblock_2);
		if ($miniblock_3) $this->mconfig->set_value('main_page_miniblock_3', $miniblock_3);
        if ($banner_deposit_link) $this->mconfig->set_value('banner_deposit_link', $banner_deposit_link);
        if ($banner_galery_link) $this->mconfig->set_value('banner_galery_link', $banner_galery_link);
        

		
		// Message
		$this->data['msg']['type'] = 'succeed';
		$this->data['msg']['text'] = 'Изменения сохранены.';
		
		// Redirect
		$this->index();
	}
}

// End of file