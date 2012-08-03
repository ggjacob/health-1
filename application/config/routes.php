<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "main";
$route['404_override'] = '';


// Admin
$route['admin'] = 'admin/events';

// Pages
$route['(ru|ua)/page/(:any)'] = 'page/get_page/$2';
$route['page/(:any)'] = 'page/get_page/$1';

// Content
$route['(ru|ua)/content/(:any)'] = 'content/get_content/$2';
$route['content/(:any)'] = 'content/get_content/$1';


// Pages_test
$route['(ru|ua)/page_test/(:any)'] = 'page_test/get_page/$2';
$route['page_test/(:any)'] = 'page_test/get_page/$1';

// News
$route['(ru|ua)/article/(:num)'] = 'article/get_article/$2';
$route['article/(:num)'] = 'article/get_article/$1';

// News
$route['(ru|ua)/news/(:num)'] = 'news/get_news/$2';
$route['news/(:num)'] = 'news/get_news/$1';


// Shops
$route['(ru|ua)/shop/(:num)'] = 'shop/get_shop/$2';
$route['shop/(:num)'] = 'shop/get_shop/$1';

// Languages
$route['(ru|ua)'] = $route['default_controller'];
$route['(ru|ua)/(.+)'] = "$2";
/* End of file routes.php */
/* Location: ./application/config/routes.php */