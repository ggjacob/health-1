<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends ControllerBase  {

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        if($this->session->userdata('is_login') != 'ok')redirect('login');
        $this->load->model(array('mconfig', 'mpages', 'mmenu', 'marticles', 'mproducts', 'mcalories', 'musers', 'mamino'));
        $this->data['user'] = $this->musers->get_user($this->session->userdata('user'));

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
        $this->data['calories'] = $calories_by_date;
        // tereonin
        $treonin = $this->mamino->get_amino_by_user('treonin', 1);
        $treonin_by_date = array();
        foreach($treonin as $item){
            if(!isset($treonin_by_date[$item['date']])){
                $treonin_by_date[$item['date']] = $item['value'];
            }else{
                $treonin_by_date[$item['date']] = $treonin_by_date[$item['date']] +$item['value'];
            }
        }
        $this->data['treonin'] = $treonin_by_date;

        // izolicin
        $izolicin = $this->mamino->get_amino_by_user('izolicin', 1);
        $izolicin_by_date = array();
        foreach($izolicin as $item){
            if(!isset($izolicin_by_date[$item['date']])){
                $izolicin_by_date[$item['date']] = $item['value'];
            }else{
                $izolicin_by_date[$item['date']] = $izolicin_by_date[$item['date']] +$item['value'];
            }
        }
        $this->data['izolicin'] = $izolicin_by_date;


        // leycin
        $leycin = $this->mamino->get_amino_by_user('leycin', 1);
        $leycin_by_date = array();
        foreach($leycin as $item){
            if(!isset($leycin_by_date[$item['date']])){
                $leycin_by_date[$item['date']] = $item['value'];
            }else{
                $leycin_by_date[$item['date']] = $leycin_by_date[$item['date']] +$item['value'];
            }
        }
        $this->data['leycin'] = $leycin_by_date;


        // lizin
        $lizin = $this->mamino->get_amino_by_user('lizin', 1);
        $lizin_by_date = array();
        foreach($lizin as $item){
            if(!isset($lizin_by_date[$item['date']])){
                $lizin_by_date[$item['date']] = $item['value'];
            }else{
                $lizin_by_date[$item['date']] = $lizin_by_date[$item['date']] +$item['value'];
            }
        }
        $this->data['lizin'] = $lizin_by_date;


        // fenil
        $fenil = $this->mamino->get_amino_by_user('fenil', 1);
        $fenil_by_date = array();
        foreach($fenil as $item){
            if(!isset($fenil_by_date[$item['date']])){
                $fenil_by_date[$item['date']] = $item['value'];
            }else{
                $fenil_by_date[$item['date']] = $fenil_by_date[$item['date']] +$item['value'];
            }
        }
        $this->data['fenil'] = $fenil_by_date;


        // valin
        $valin = $this->mamino->get_amino_by_user('valin', 1);
        $valin_by_date = array();
        foreach($valin as $item){
            if(!isset($valin_by_date[$item['date']])){
                $valin_by_date[$item['date']] = $item['value'];
            }else{
                $valin_by_date[$item['date']] = $valin_by_date[$item['date']] +$item['value'];
            }
        }
        $this->data['valin'] = $valin_by_date;


        // metonin
        $metonin = $this->mamino->get_amino_by_user('metonin', 1);
        $metonin_by_date = array();
        foreach($metonin as $item){
            if(!isset($metonin_by_date[$item['date']])){
                $metonin_by_date[$item['date']] = $item['value'];
            }else{
                $metonin_by_date[$item['date']] = $metonin_by_date[$item['date']] +$item['value'];
            }
        }
        $this->data['metonin'] = $metonin_by_date;



        // tereonin
        $gistidin = $this->mamino->get_amino_by_user('gistidin', 1);
        $gistidin_by_date = array();
        foreach($gistidin as $item){
            if(!isset($gistidin_by_date[$item['date']])){
                $gistidin_by_date[$item['date']] = $item['value'];
            }else{
                $gistidin_by_date[$item['date']] = $gistidin_by_date[$item['date']] +$item['value'];
            }
        }
        $this->data['gistidin'] = $gistidin_by_date;


        // triptofan
        $triptofan = $this->mamino->get_amino_by_user('triptofan', 1);
        $triptofan_by_date = array();
        foreach($triptofan as $item){
            if(!isset($triptofan_by_date[$item['date']])){
                $triptofan_by_date[$item['date']] = $item['value'];
            }else{
                $triptofan_by_date[$item['date']] = $triptofan_by_date[$item['date']] +$item['value'];
            }
        }
        $this->data['triptofan'] = $triptofan_by_date;




        $this->data['content'] = 'front/main';
        $this->load->view('front/layout', $this->data);
	}
    public function info()
    {
        $this->data['menu_item'] =  'info';
        $this->data['products'] = $this->mproducts->products_list();
        $this->data['content'] = 'front/info_tables';
        $this->load->view('front/layout', $this->data);
    }
    public function forms()
    {
        $this->data['menu_item'] =  'forms';
        $this->data['products'] = $this->mproducts->products_list();

        $this->data['content'] = 'front/forms';
        $this->load->view('front/layout', $this->data);
    }
    public function delete_product($id = false)
    {
        $this->mproducts->delete_product($id);
        redirect("/main/new_product");
    }
    public function duplicate_product($id = false)
    {
        $data =  $this->mproducts->get_product($id);
        unset($data['id']);
        $this->mproducts->set_product($data);
        redirect("/main/new_product");
    }
    public function new_product($id = false)
    {
        if(empty($_POST)){
            $this->data['menu_item'] =  'new_product';
            $this->data['products'] = $this->mproducts->products_list();

            if($id)$this->data['edit_product'] = $this->mproducts->get_product($id);
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
                'triptofan' => $_POST['triptofan'],
            );
            if($_POST['id'] != ''){
                $this->mproducts->update_product($_POST['id'],$data);
            }else{
                $this->mproducts->set_product($data);
            }

            redirect("/main/new_product");
        }
    }
    public function set_product()
    {

        $product = $this->mproducts->get_product($_POST['product']);
        $date_array = explode("/", $_POST['date']);
        $date = $date_array[2].'-'.$date_array[0].'-'.$date_array[1];
        // Calories
        $calories = $product['calories']*$_POST['weight']/100;
        $data = array(
            'user_id' => 1,
            'value' => $calories,
            'date' => $date
        );
        $this->mcalories->set_calories($data);
        // Treonin
        $treonin = $product['treonin']*$_POST['weight']/100;
        $data['value'] = $treonin;
        $this->mamino->set_amino('treonin',$data);
        // izolicin
        $izolicin = $product['izolicin']*$_POST['weight']/100;
        $data['value'] = $izolicin;
        $this->mamino->set_amino('izolicin',$data);
        // leycin
        $leycin = $product['leycin']*$_POST['weight']/100;
        $data['value'] = $leycin;
        $this->mamino->set_amino('leycin',$data);
        // lizin
        $lizin = $product['lizin']*$_POST['weight']/100;
        $data['value'] = $lizin;
        $this->mamino->set_amino('lizin',$data);
        // fenil
        $fenil = $product['fenil']*$_POST['weight']/100;
        $data['value'] = $fenil;
        $this->mamino->set_amino('fenil',$data);
        // valin
        $valin = $product['valin']*$_POST['weight']/100;
        $data['value'] = $valin;
        $this->mamino->set_amino('valin',$data);
        // metonin
        $metonin = $product['metonin']*$_POST['weight']/100;
        $data['value'] = $metonin;
        $this->mamino->set_amino('metonin',$data);
        // gistidin
        $gistidin = $product['gistidin']*$_POST['weight']/100;
        $data['value'] = $gistidin;
        $this->mamino->set_amino('gistidin',$data);
        // triptofan
        $triptofan = $product['triptofan']*$_POST['weight']/100;
        $data['value'] = $triptofan;
        $this->mamino->set_amino('triptofan',$data);
        redirect( '/' );
    }
    function test_main()
	{
		$this->data['main_menu'] = $this->mmenu->menu_items(array('status' => '1'), true);
		$this->data['content'] = 'front/main';
        $this->load->view('front/layout', $this->data);
	}
}

