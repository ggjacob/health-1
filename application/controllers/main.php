<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends ControllerBase  {

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        if($this->session->userdata('is_login') != 'ok')redirect('login');
        $this->load->model(array('mconfig', 'mpages', 'mmenu', 'marticles', 'mproducts', 'mcalories', 'musers', 'mamino'));
        $this->data['user'] = $this->musers->get_user($this->session->userdata('user'));
       // print_r($this->data['user']);die;
        $this->data['menu_id'] = 0;
    }
	public function index()
	{
        $this->data['menu_item'] =  'tables';
        $this->data['user_info'] = $this->musers->get_user_by_id($this->data['user']['id']);
        $norma = $this->mamino->get_norma();
        $norma_by_name = array();
        foreach($norma as $item){
            if(!isset($norma_by_name[$item['date']])){
                $norma_by_name[$item['name']] = $item['norma'];
            }
        }
        $this->data['norma'] =  $norma_by_name;
       // Calories
        $cal = $this->mcalories->get_calories_by_user($this->data['user']['id']);

        $calories_by_date = array();
        if(!empty($cal)){
        foreach($cal as $item){
            if(!isset($calories_by_date[$item['date']])){
                $calories_by_date[$item['date']] = $item['value'];
            }else{
                $calories_by_date[$item['date']] = $calories_by_date[$item['date']] +$item['value'];
            }
        }
        }
        $this->data['calories'] = $calories_by_date;
        // Belki
        $belki = $this->mamino->get_amino_by_user('belki', $this->data['user']['id']);

        $belki_by_date = array();
        if(!empty($belki)){
        foreach($belki as $item){
            if(!isset($calories_by_date[$item['date']])){
                $belki_by_date[$item['date']] = $item['value'];
            }else{
                $belki_by_date[$item['date']] = $belki_by_date[$item['date']] +$item['value'];
            }
        }
        }
        $this->data['belki'] = $belki_by_date;

        // tereonin
        $treonin = $this->mamino->get_amino_by_user('treonin', $this->data['user']['id']);
        $treonin_by_date = array();
        if(!empty($treonin)){
        foreach($treonin as $item){
            if(!isset($treonin_by_date[$item['date']])){
                $treonin_by_date[$item['date']] = $item['value'];
            }else{
                $treonin_by_date[$item['date']] = $treonin_by_date[$item['date']] +$item['value'];
            }
        }
        }
        $this->data['treonin'] = $treonin_by_date;

        // izolicin
        $izolicin = $this->mamino->get_amino_by_user('izolicin', $this->data['user']['id']);
        $izolicin_by_date = array();
        if(!empty($izolicin)){
        foreach($izolicin as $item){
            if(!isset($izolicin_by_date[$item['date']])){
                $izolicin_by_date[$item['date']] = $item['value'];
            }else{
                $izolicin_by_date[$item['date']] = $izolicin_by_date[$item['date']] +$item['value'];
            }
        }
        }
        $this->data['izolicin'] = $izolicin_by_date;


        // leycin
        $leycin = $this->mamino->get_amino_by_user('leycin', $this->data['user']['id']);
        $leycin_by_date = array();
        if(!empty($leycin)){
        foreach($leycin as $item){
            if(!isset($leycin_by_date[$item['date']])){
                $leycin_by_date[$item['date']] = $item['value'];
            }else{
                $leycin_by_date[$item['date']] = $leycin_by_date[$item['date']] +$item['value'];
            }
        }
        }
        $this->data['leycin'] = $leycin_by_date;


        // lizin
        $lizin = $this->mamino->get_amino_by_user('lizin', $this->data['user']['id']);
        $lizin_by_date = array();
        if(!empty($lizin)){
        foreach($lizin as $item){
            if(!isset($lizin_by_date[$item['date']])){
                $lizin_by_date[$item['date']] = $item['value'];
            }else{
                $lizin_by_date[$item['date']] = $lizin_by_date[$item['date']] +$item['value'];
            }
        }
        }
        $this->data['lizin'] = $lizin_by_date;


        // fenil
        $fenil = $this->mamino->get_amino_by_user('fenil', $this->data['user']['id']);
        $fenil_by_date = array();
        if(!empty($fenil)){
        foreach($fenil as $item){
            if(!isset($fenil_by_date[$item['date']])){
                $fenil_by_date[$item['date']] = $item['value'];
            }else{
                $fenil_by_date[$item['date']] = $fenil_by_date[$item['date']] +$item['value'];
            }
        }
        }
        $this->data['fenil'] = $fenil_by_date;


        // valin
        $valin = $this->mamino->get_amino_by_user('valin', $this->data['user']['id']);
        $valin_by_date = array();
        if(!empty($valin)){
        foreach($valin as $item){
            if(!isset($valin_by_date[$item['date']])){
                $valin_by_date[$item['date']] = $item['value'];
            }else{
                $valin_by_date[$item['date']] = $valin_by_date[$item['date']] +$item['value'];
            }
        }
        }
        $this->data['valin'] = $valin_by_date;


        // metonin
        $metonin = $this->mamino->get_amino_by_user('metonin', $this->data['user']['id']);
        $metonin_by_date = array();
        if(!empty($metonin)){
        foreach($metonin as $item){
            if(!isset($metonin_by_date[$item['date']])){
                $metonin_by_date[$item['date']] = $item['value'];
            }else{
                $metonin_by_date[$item['date']] = $metonin_by_date[$item['date']] +$item['value'];
            }
        }
        }
        $this->data['metonin'] = $metonin_by_date;



        // tereonin
        $gistidin = $this->mamino->get_amino_by_user('gistidin', $this->data['user']['id']);
        $gistidin_by_date = array();
        if(!empty($metonin)){
        foreach($gistidin as $item){
            if(!isset($gistidin_by_date[$item['date']])){
                $gistidin_by_date[$item['date']] = $item['value'];
            }else{
                $gistidin_by_date[$item['date']] = $gistidin_by_date[$item['date']] +$item['value'];
            }
        }
        }
        $this->data['gistidin'] = $gistidin_by_date;


        // triptofan
        $triptofan = $this->mamino->get_amino_by_user('triptofan', $this->data['user']['id']);
        $triptofan_by_date = array();
        if(!empty($metonin)){
        foreach($triptofan as $item){
            if(!isset($triptofan_by_date[$item['date']])){
                $triptofan_by_date[$item['date']] = $item['value'];
            }else{
                $triptofan_by_date[$item['date']] = $triptofan_by_date[$item['date']] +$item['value'];
            }
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
        $user_products = $this->mproducts->get_user_product($this->data['user']['id']);
        $user_products_date = array();
        if($user_products){
        foreach($user_products as $prod){
                $user_products_date[$prod['date']][] = $prod;
        }
        }
        $this->data['user_products'] = $user_products_date;
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
        //user products
        $data_product = array(
            'user_id' => $this->data['user']['id'],
            'weight' => $_POST['weight'],
            'date' => $date,
            'product' =>  $product['name']

        );
        $this->mproducts->set_user_product($data_product);

        // Calories
        $calories = $product['calories']*$_POST['weight']/100;
        $data = array(
            'user_id' => $this->data['user']['id'],
            'value' => $calories,
            'date' => $date
        );
        $this->mcalories->set_calories($data);
        // belki
        $belki = $product['belki']*$_POST['weight']/100;
        $data['value'] = $belki;
        $this->mamino->set_amino('belki',$data);
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
    public function registration()
    {
        if(empty($_POST)){
            $this->load->view('front/registration', $this->data);
        }else{
            $data = array(
                'name' => $_POST['name'],
                'username' => $_POST['nickname'],
                'available' => 1,
                'weight' => $_POST['weight'],
                'pass' => md5($_POST['password'])            );
            $this->musers->add_user($data);


            redirect("/main");
        }
    }
}

