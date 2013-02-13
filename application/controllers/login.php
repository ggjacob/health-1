<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends ControllerBase  {

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');

        $this->data['menu_id'] = 0;
    }
    public function index()
    {

        if(!empty($_POST)){
            $this->load->model('musers');
            $user = $this->musers->get_user($_POST['login']);

            if (!isset($user) OR md5($_POST['password']) != $user['pass']){
                redirect('/login');
            }else{
                $data['is_login'] = 'ok';
                $data['user'] = $user['name'];
                $this->session->set_userdata($data);
                redirect('/');
            }
        }else{
            $this->load->view('front/login', $this->data);
        }

    }
    function logout()
    {

        $data['is_login'] = '';
        $this->session->set_userdata($data);
        redirect('/');
    }

}

