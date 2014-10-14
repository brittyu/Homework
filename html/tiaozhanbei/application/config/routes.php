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

$route['default_controller'] = "home";

//走进挑战杯
$route['intro'] = "posts/intro/8";
$route['rule'] = "posts/intro/10";
$route['idea'] = "posts/intro/11";
$route['r'] = "posts/review/28";
$route['r/(:num)'] = "posts/review/$1";

//新闻宣传
$route['list/(:any)'] = "posts/page_list/$1/$2";

//文章
$route['p/(:any)'] = "posts/post/$1/$2";
//项目展示
$route['pro_list'] = "posts/project_list";
$route['pro_list/(:num)'] = "posts/project_list/$1";
$route['pro/(:num)'] = "posts/project/$1";
$route['404_override'] = '';

// 后台管理
$route['backend'] = "backend/posts";


/* End of file routes.php */
/* Location: ./application/config/routes.php */
