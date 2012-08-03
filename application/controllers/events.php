<?php

class Events extends ControllerBase
{
	function __construct()
	{
		parent::__construct();
        date_default_timezone_set('Europe/Kiev');
		$this->load->model(array('mevents', 'mmenu', 'mimages', 'marticles'));
        $this->data['last_news'] =  $this->marticles->articles_list_last(5);
	}
    function test()
    {
        echo 'asdf';
    }
	function index()
	{
        echo 'asdfasdf';die;
        $this->data['events'] = $this->mevents->events_list(null, null,'time', 'ASC',date("H:i:s"));

        //print_r($this->data['last_news']);die;

        //print_r($this->data['events_images']);die;

        $this->data['content'] = 'front/events_list';
        $this->load->view('front/layout', $this->data);
	}
    function curl_file_get_contents($url)
    {
        $curl = curl_init();
        $userAgent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)';

        curl_setopt($curl,CURLOPT_URL,$url); //The URL to fetch. This can also be set when initializing a session with curl_init().
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,TRUE); //TRUE to return the transfer as a string of the return value of curl_exec() instead of outputting it out directly.
        curl_setopt($curl,CURLOPT_CONNECTTIMEOUT,5); //The number of seconds to wait while trying to connect.

        curl_setopt($curl, CURLOPT_USERAGENT, $userAgent); //The contents of the "User-Agent: " header to be used in a HTTP request.
        curl_setopt($curl, CURLOPT_FAILONERROR, TRUE); //To fail silently if the HTTP code returned is greater than or equal to 400.
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE); //To follow any "Location: " header that the server sends as part of the HTTP header.
        curl_setopt($curl, CURLOPT_AUTOREFERER, TRUE); //To automatically set the Referer: field in requests where it follows a Location: redirect.
        curl_setopt($curl, CURLOPT_TIMEOUT, 10); //The maximum number of seconds to allow cURL functions to execute.

        $contents = curl_exec($curl);
        curl_close($curl);
        return $contents;
    }
    function import()
    {

        //Get HTML from kinoteatr.ck.ua
        $html =$this->curl_file_get_contents('http://www.kinoteatr.ck.ua/today');
        $lines = explode('infobox', $html);
        $insert_data = array();
        for ($i = 1; $i <= 3; $i++) {
        //Get image
        preg_match_all("/<img .*?(?=src)src=\"([^\"]+)\"/si", $lines[$i], $image);
        $image_main = 'http://www.kinoteatr.ck.ua'.$image[1][0];
        //Get Time
        $time1 = explode('</div>', $lines[$i]);
        $time2 = explode('>', $time1[2]);


        //Get title and link
        $regexp = "<a\s[^>]*href=(\"??)([^\" >]*?)\\1[^>]*>(.*)<\/a>";
        if(preg_match_all("/$regexp/siU", $lines[$i], $matches)) {
            $title = $matches[3][1];
            $link = 'http://www.kinoteatr.ck.ua'.$matches[2][0];
        }
        // Get description

        $html_desc =$this->curl_file_get_contents($link);
        $lines_desc = explode('film-info-desctiption">', $html_desc);
        $lines_desc = explode('<div', $lines_desc[1]);
        $desc = $lines_desc[0];

        $data = array(
            'main_img' => $image_main,
            'time' => $time2[1],
            'title' => $title,
            'link' =>  $link,
            'description' => $desc,
            'id_owner' => 1

        );
            if($i == 3 ){
                //print_r($data);die;
            }
            $insert_data[$link] = $data;
        }
       // print_r($insert_data);die;
        foreach($insert_data as $event){
            $times =  explode(';', $event['time']);
            foreach($times as $one_time){
                $event['time'] = $one_time;
                $event['category'] = 1;
                $event['every_day'] = 1;
                $this->mevents->add_event($event);
            }

        }
        // Dneproplaza Chekkassy
        $html = file_get_contents('http://www.multiplex.ua/Poster.aspx?id=10');
        $lines = explode('</tr>', $html);
        $links = array();
        for ($i = 41; $i <= 43; $i++) {
            $a = explode('</td>', $lines[$i]); // делим на ячейки

            foreach($a as $er){
                $regexp = "<a\s[^>]*href=(\"??)([^\" >]*?)\\1[^>]*>(.*)<\/a>";
                if(preg_match_all("/$regexp/siU", $er, $matches)) {
                    $html_desc = file_get_contents('http://www.multiplex.ua/'.$matches[2][0]);
                    $lines_desc = explode('</p>', $html_desc);
                    $lines_desc = explode('<p>', $lines_desc[0]);
                    $links[$matches[2][0]]['description'] = $lines_desc[1];
                    $links[$matches[2][0]]['link'] = 'http://www.multiplex.ua/'.$matches[2][0];

                    preg_match_all("/<img .*?(?=src)src=\"([^\"]+)\"/si", $matches[3][0], $image);
                    $links[$matches[2][0]]['main_img'] = "http://www.multiplex.ua/".$image[1][0];
                    $links[$matches[2][0]]['title'] = $matches[3][1];


                    $time = '';

                    foreach($matches[3] as $id=>$hour){
                        if($id != 0 and $id != 1) $time .= $hour.',';
                    }
                    $links[$matches[2][0]]['time'] = $time;
                    $links[$matches[2][0]]['id_owner'] = 2;
                }

            }
            //print_r($i);
            //print_r($links);
        }
        foreach($links as $event){
            $times =  explode(',', $event['time']);
            foreach($times as $one_time){
                if(!empty($one_time)){
                    $event['time'] = $one_time;
                    $event['category'] = 1;
                    $event['every_day'] = 1;
                    $this->mevents->add_event($event);
                }
            }
        }
        // Salut Chekkassy
        $html = file_get_contents('http://www.multiplex.ua/Poster.aspx?id=9');
        $lines = explode('</tr>', $html);
        $links = array();
        for ($i = 41; $i <= 43; $i++) {
            $a = explode('</td>', $lines[$i]); // делим на ячейки

            foreach($a as $er){
                $regexp = "<a\s[^>]*href=(\"??)([^\" >]*?)\\1[^>]*>(.*)<\/a>";
                if(preg_match_all("/$regexp/siU", $er, $matches)) {
                    $html_desc = file_get_contents('http://www.multiplex.ua/'.$matches[2][0]);
                    $lines_desc = explode('</p>', $html_desc);
                    $lines_desc = explode('<p>', $lines_desc[0]);
                    $links[$matches[2][0]]['description'] = $lines_desc[1];
                    $links[$matches[2][0]]['link'] = 'http://www.multiplex.ua/'.$matches[2][0];

                    preg_match_all("/<img .*?(?=src)src=\"([^\"]+)\"/si", $matches[3][0], $image);
                    $links[$matches[2][0]]['main_img'] = "http://www.multiplex.ua/".$image[1][0];
                    $links[$matches[2][0]]['title'] = $matches[3][1];


                    $time = '';

                    foreach($matches[3] as $id=>$hour){
                        if($id != 0 and $id != 1) $time .= $hour.',';
                    }
                    $links[$matches[2][0]]['time'] = $time;
                    $links[$matches[2][0]]['id_owner'] = 3;
                }

            }
            //print_r($i);
            //print_r($links);
        }
        foreach($links as $event){
            $times =  explode(',', $event['time']);
            foreach($times as $one_time){
                if(!empty($one_time)){
                    $event['time'] = $one_time;
                    $event['category'] = 1;
                    $event['every_day'] = 1;
                    $this->mevents->add_event($event);
                }
            }
        }
        print_r($links);die;

        die;
        //var_dump($er);die;


    }
    function event($id)
    {
        $this->data['event'] = $this->mevents->event_info($id);
        //print_r($this->data['event']);die;
        if (!$this->data['event']) show_404();
        //$data = array('view' => 'view+1');
        //$this->marticles->update_view($id);
        $this->data['meta']['description'] = '';
        $this->data['meta']['link'] = base_url().'events/event'.$id;
        //$this->data['main_menu'] = $this->mmenu->menu_items(array('status' => '1'), true);
        $this->data['content'] = 'front/event';
        $this->load->view('front/layout', $this->data);
    }
    function category($name = 'cinema')
    {
        $this->data['events'] = $this->mevents->events_list_by_category($name);
        //print_r($this->data['events']);die;
        if (!$this->data['events']) show_404();

        $this->data['content'] = 'front/events_list';
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