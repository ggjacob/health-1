<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$ci =& get_instance();
$ci->load->model('mconfig');
$admin_data = $ci->mconfig->get_values(array('admin_login', 'admin_pass'));

if (!isset($_SERVER['PHP_AUTH_USER']) OR !isset($_SERVER['PHP_AUTH_PW']) OR 
    $_SERVER['PHP_AUTH_USER'] != $admin_data['admin_login'] OR 
	md5($_SERVER['PHP_AUTH_PW']) != $admin_data['admin_pass']) 
{
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Admin area. Password required.';
    exit;
}

// End of file