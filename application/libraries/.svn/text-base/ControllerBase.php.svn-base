<?php

class ControllerBase extends CI_Controller
{
    public $data;
        
    function __construct()
    {
        parent::__construct();
		$this->load->helper('language');        
        $this->_lang();        
		$this->data['body_onload'] = '';   		     
    }
	
	function _lang()
    {
		$lang = $this->uri->segment(1);
		if ($lang != 'ru' AND $lang != 'ua') $lang = false;
        $cookie_lang = $this->input->cookie('lang');                         
        
		// Language is set in the URL
		if ($lang)
        {                          
           if ($cookie_lang != $lang) setcookie('lang', $lang, time()+60*60*24*30, '/', '');          
        }
        // Language is set in COOKIE
		elseif ($cookie_lang)
		{
			if ($cookie_lang == 'ru' OR $cookie_lang == 'ua')
			{
				$lang = $cookie_lang;
			}
			else
			{
				$lang = $this->config->item('language');
				setcookie('lang', $lang, time()+60*60*24*30, '/', '');
			}
		}
		// Use default language        
        else        
        {
        	$lang = $this->config->item('language');                        
            setcookie('lang', $lang, time()+60*60*24*30, '/', '');                        
        }
        
        // Alternative url for this page in other language
        $uri = str_replace(array('ru','ua'), '', uri_string());

		$this->data['ua_url'] = base_url().'ua'.$uri;
		$this->data['ru_url'] = base_url().'ru'.$uri;

    	$this->lang->load('interface', $lang);		    
    	$this->data['lang'] = $lang;
    	$this->config->set_item('cur_lang', $lang);
    	$this->data['base_url'] = base_url().$lang.'/'; 
    }            
}

// End of file