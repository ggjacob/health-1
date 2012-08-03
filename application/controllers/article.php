<?php

class Article extends ControllerBase 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model(array('marticles', 'mmenu'));		
	}		
	
	function index()
	{
        ///print_r($_REQUEST);
        // argument
       // $info = file_get_contents('http://195.218.169.227:8088/stream/publish?application_key='.$_REQUEST['application_key'].'&sig=[Signature]&resig=[Re-signature]&message=User entered text&attachment=[Attachment]&action_links=[Action links]');
        $this->data['api_server'] = $_REQUEST['api_server'];
        $this->data['api_connection'] = $_REQUEST['apiconnection'];
        $article_id =  $_REQUEST['custom_args'];

        $info = file_get_contents('http://api.odnoklassniki.ru/api/users/getInfo?application_key='.$_REQUEST['application_key'].'&sig='.md5("application_key=".$_REQUEST['application_key']."fields=first_name,pic_1,pic_2uids=".$_REQUEST['logged_user_id']."14E0D643E215FB6D273D3513").'&uids='.$_REQUEST['logged_user_id'].'&fields=first_name,pic_1,pic_2');
        $data = json_decode($info);
        //var_dump($data[0]->uid);
        //echo $data[0]->uid;
        //die;pic_1
        echo '<img src="'.$data[0]->pic_1.'"/><br/>'.$data[0]->first_name.'<br/>';
        $this->data['articles'] = $this->marticles->articles_list(null, array('status' => '1'), true,'pub_date','desc');
		$this->data['main_menu'] = $this->mmenu->menu_items(array('status' => '1'), true);
		$this->data['content'] = 'front/articles_list';
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
	function get_article($id)
	{
		$this->data['article'] = $this->marticles->article_info($id, true);
		if (!$this->data['article']) show_404();
        //$data = array('view' => 'view+1');
        $this->marticles->update_view($id);
		$this->data['main_menu'] = $this->mmenu->menu_items(array('status' => '1'), true);				
		$this->data['content'] = 'front/article';				
        $this->load->view('front/layout', $this->data);
	}
   
}

// End of file