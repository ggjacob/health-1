<?php

class Articles extends CI_Controller 
{
	private $data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('http_auth');
		$this->load->model('marticles');
		$this->load->model('mcomment');
		$this->data['menu_section'] = 'articles';
		$this->data['msg'] = false;	
	}
	
	function index()
	{		
		$this->articles_list();
	}
	
	function articles_list()
	{
		// Get page
		$this->data['articles'] = $this->marticles->articles_list_admin(null, null, false,'pub_date','desc');
		
		// Prepare view
		$this->data['body'] = 'admin/articles/articles_list';
		$this->load->view('admin/layout', $this->data);
	}
	
	function add()
	{
		// Prepare view
		$this->data['action_title'] = 'Добавление новой статьи';
		$this->data['page'] = array('title_ru' => '', 'title_ua' => '', 'anons_ru' => '', 'anons_ua' => '', 'pub_date' => date('d-m-Y H:i'), 'text_ru' => '', 'text_ua' => '', 'video' => '','id' => '');
		$this->data['body'] = 'admin/articles/edit_article';
		$this->load->view('admin/layout', $this->data);
	}
	
	function edit($id)
	{
		// Get page
		$this->data['page'] = $this->marticles->article_info($id);
		$this->data['page']['pub_date'] = date('d-m-Y H:i', strtotime($this->data['page']['pub_date']));
		
		// Prepare view
		$this->data['action_title'] = 'Редактирование статьи';
		$this->data['body'] = 'admin/articles/edit_article';
		$this->load->view('admin/layout', $this->data);
	}
	
	function submit()
	{
		// POST data
		$id = $this->input->post('id');		
		$article['title_ru'] = $this->input->post('title_ru');

		$article['anons_ru'] = $this->input->post('anons_ru');

		$article['text_ru'] = $this->input->post('text_ru');
		
        $video = $this->input->post('video');
		$article['pub_date'] = date('Y-m-d H:i:s', strtotime($this->input->post('pub_date')));		

        if(strpos ( $video , 'youtube' , 0 )){
            $repl = '';
            $video = str_replace ('watch?', $repl, $video);
            $repl = '/v/';
            $video = str_replace ('/v=', $repl, $video);

        }elseif(strpos ( $video , 'vimeo.com' , 0 )){
            $repl = '';
            $video = str_replace ('http://vimeo.com/', $repl, $video);
            $video = 'http://player.vimeo.com/video/'.$video.'?title=0&amp;byline=0&amp;portrait=0&amp;color=ff0179';
        }
        echo $video;
        $article['video'] = $video;

		// Validation
		// ...
       /// print_r($_FILES);die;
		if($_FILES['file_upload']['size'] != 0){
        $config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
        
		if ( !$this->upload->do_upload('file_upload'))
		{
			$error = array('error' => $this->upload->display_errors());
			$this->data['msg']['type'] = 'error';
			$this->data['msg']['text'] = $error;
            print_r($error);die;

		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
            $article['image'] = $data['upload_data']['file_name'];
		}

        }
		// Inserting/Updating
		if ($id)
		{
			$this->marticles->update_article($id, $article);
			$this->data['msg']['type'] = 'succeed';
			$this->data['msg']['text'] = 'Статья "'.$article['title_ru'].'" сохранена.';			 			
		}
		else
		{
			$this->marticles->add_article($article);
			$this->data['msg']['type'] = 'succeed';
			$this->data['msg']['text'] = 'Статья "'.$article['title_ru'].'" добавлена.';
		}
		
		// Redirecting
		$this->articles_list();
	}
	
	function delete($id)
	{
		if ($this->marticles->article_exists($id))
		{
			// Deletting
			$this->marticles->delete_article($id);
			$this->mcomment->delete_all_coments($id);
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
		$this->articles_list();
	}
	
	function delete_video($id)
	{
		if ($this->marticles->article_exists($id))
		{
				// Deletting
				$this->marticles->delete_article_video($id);
				$this->data['msg']['type'] = 'succeed';
				$this->data['msg']['text'] = 'Видео успешно удалено.';
		}
		else
		{
			// Page not found
			$this->data['msg']['type'] = 'error';
			$this->data['msg']['text'] = 'Медиа файл не найден.';	
		}						
		
		// Redirecting
		$this->edit($id);
	}
	
	function delete_img($id, $filename)
	{
		
		
		if ($this->marticles->article_exists($id))
		{
			// Deletting
				
			//current dirrectory
			$directory=$_SERVER['DOCUMENT_ROOT'].'\uploads';
			
			$dir = opendir($directory);
  			while(($file = readdir($dir)))
			{
          		if((is_file("$directory/$file")) && ("$directory/$file" == "$directory/$filename"))
  				{
    			unlink("$directory/$file");
                if(!file_exists($directory."/".$filename));
  				}
			}
			closedir($dir);  
				
				
				$this->marticles->delete_article_img($id);
				$this->data['msg']['type'] = 'succeed';
				$this->data['msg']['text'] = 'Видео успешно удалено.';
		}
		else
		{
			// Page not found
			$this->data['msg']['type'] = 'error';
			$this->data['msg']['text'] = 'Медиа файл не найден.';	
		}						
		
		// Redirecting
		$this->edit($id);
	}
	function change_status($id)
	{
		if ($this->marticles->article_exists($id))
		{
			// Deletting
			$this->marticles->change_status($id);
			$this->data['msg']['type'] = 'succeed';
			$this->data['msg']['text'] = 'Статус успешно изменен.';						
		}
		else
		{
			// Page not found
			$this->data['msg']['type'] = 'error';
			$this->data['msg']['text'] = 'Элемент не найден.';	
		}						
		
		// Redirecting
		$this->articles_list();
	}
		
}

// End of file