<?php

class Contact extends ControllerBase
{
	function __construct()
	{
		parent::__construct();
        $this->load->model(array('mevents', 'mmenu', 'mimages', 'marticles'));
        $this->data['last_news'] =  $this->marticles->articles_list_last(5);
	}		
	
	function index()
	{
        $this->data['content'] = 'front/contact';
        $this->load->view('front/layout', $this->data);
	}
	function submit()
	{
		print_r($_POST);

       $to      = 'tepalenko@webkate.com';
       $subject = 'the subject';

       $headers = 'From: webmaster@example.com' . "\r\n" .
                   'Reply-To: webmaster@example.com' . "\r\n" .
                   'X-Mailer: PHP/';

		$html = '
		Subject: '.$_POST['u_subject'].'
		Name: '.$_POST['u_name'].'
		Mail: '.$_POST['u_mail'].'
		Phone: '.$_POST['u_phone'].'
		Site: '.$_POST['u_site'].'
		Message: '.$_POST['u_comment'].'
		';
	   mail($to, $subject, $html, $headers);
        redirect('/contact');
	}


   
}

// End of file