<?php

class Blog extends ControllerBase
{
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('marticles', 'mmenu', 'mimages'));
        $this->data['last_news'] =  $this->marticles->articles_list_last(5);
	}		
	
	function index()
	{
        $this->data['articles'] = $this->marticles->articles_list();
        $images =  $this->mimages->events_list_img();
        $this->data['articles_images'] = array();
        foreach($images as $img){
            $this->data['articles_images'][$img['item_id']] = $img;
        }
        $this->data['content'] = 'front/articles_list';
        $this->load->view('front/layout', $this->data);
	}
	function get_article($id)
	{
		$this->data['article'] = $this->marticles->article_info($id);
        $this->data['article_images'] = $this->mimages->event_img($this->data['article']['id']);
       // print_r($this->data['article_images']);die;
		if (!$this->data['article']) show_404();
        //$data = array('view' => 'view+1');
        $this->marticles->update_view($id);
		$this->data['content'] = 'front/article';
        $this->load->view('front/layout', $this->data);
	}

    function popular_article()
	{
       // echo 'asdf';die;
		$this->data['articles'] = $this->marticles->articles_list(null, array('status' => '1'), true, 'view','desc');
       // print_r($this->data['articles']);die;
		$this->data['main_menu'] = $this->mmenu->menu_items(array('status' => '1'), true);
		$this->data['content'] = 'front/articles_list';
        $this->load->view('front/layout', $this->data);
	}

   
}

// End of file