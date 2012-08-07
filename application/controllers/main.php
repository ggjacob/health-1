<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends ControllerBase  {

    function __construct()
    {
        parent::__construct();
        $this->load->model(array('mconfig', 'mpages', 'mmenu', 'marticles', 'mproducts', 'mcalories'));
        $this->data['menu_id'] = 0;
    }

	public function index()
	{
        $this->data['menu_item'] =  'tables';
        $cal = $this->mcalories->get_calories_by_user(1);

        $calories_by_date = array();
        foreach($cal as $item){
            if(!isset($calories_by_date[$item['date']])){
                $calories_by_date[$item['date']] = $item['value'];
            }else{
                $calories_by_date[$item['date']] = $calories_by_date[$item['date']] +$item['value'];
            }
        }
        //print_r($calories_by_date);die;
        $this->data['calories'] = $calories_by_date;
        $this->data['content'] = 'front/main';
        $this->load->view('front/layout', $this->data);
	}
    public function forms()
    {
        $this->data['menu_item'] =  'forms';
        $this->data['products'] = $this->mproducts->products_list();
        $this->data['content'] = 'front/forms';
        $this->load->view('front/layout', $this->data);
    }
    public function new_product()
    {
        if(empty($_POST)){
            $this->data['menu_item'] =  'new_product';
            //$this->data['products'] = $this->mproducts->products_list();
            $this->data['content'] = 'front/new_product';
            $this->load->view('front/layout', $this->data);
        }else{
            $data = array(
                'name' => $_POST['name'],
                'calories' => $_POST['calories'],
                'belki' => $_POST['belki'],
                'treonin' => $_POST['treonin'],
                'izolicin' => $_POST['izolicin'],
                'leycin' => $_POST['leycin'],
                'lizin' => $_POST['lizin'],
                'fenil' => $_POST['fenil'],
                'valin' => $_POST['valin'],
                'metonin' => $_POST['metonin'],
                'gistidin' => $_POST['gistidin'],

            );
           $this->mproducts->set_product($data);
            redirect("/main/new_product");
        }
    }
    public function set_product()
    {

        $product = $this->mproducts->get_product($_POST['product']);
        $calories = $product['calories']*$_POST['weight']/100;
        $date_array = explode("/", $_POST['date']);
        $date = $date_array[2].'-'.$date_array[0].'-'.$date_array[1];
        $data = array(
            'user_id' => 1,
            'value' => $calories,
            'date' => $date
        );
        //print_r($data);die;
        $this->mcalories->set_calories($data);
        redirect( '/' );
    }
    function test_main()
	{
		$this->data['main_menu'] = $this->mmenu->menu_items(array('status' => '1'), true);
		$this->data['content'] = 'front/main';
        $this->load->view('front/layout', $this->data);
	}
}

