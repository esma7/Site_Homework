<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'UserController';

//User
$route['index'] = 'UserController/index';
$route['about'] = 'UserController/about';
$route['contact'] = 'UserController/contact';
$route['blog'] = 'UserController/blog';
$route['course/(.*)'] = 'UserController/course/$1';
// $route['category/(.*)'] = 'UserController/category/$1';
$route['single/(.*)'] = 'UserController/single/$1';
$route['teacher'] = 'UserController/teacher';
$route['message'] = 'UserController/send_message';
$route['contact_message'] = 'UserController/contact_message';

//Admin
$route['a_login'] = 'AdminController/index';
$route['a_loginAct'] = 'AdminController/loginAct';
$route['a_loginout'] = 'AdminController/logout';

$route['a_dashboard'] = 'AdminController/dashboard';
$route['a_news_list'] = 'AdminController/news_list';

$route['a_news_create'] = 'AdminController/news_create';
$route['a_news_create_act'] = 'AdminController/news_create_act';
                //contact info
$route['a_news_contact'] = 'AdminController/news_contact';
$route['a_contact_delete/(.*)'] = 'AdminController/deleteContact/$1';

$route['a_contact_detail/(.*)'] = 'AdminController/contact_detail/$1';


                    //slider news//
$route['a_slider_list'] = 'AdminController/slider_list';
$route['a_news_slider'] = 'AdminController/news_create_slider';
$route['a_news_slider_act'] = 'AdminController/news_create_slider_act';
$route['a_slider_delete/(.*)'] = 'AdminController/deleteSlider/$1';
$route['a_slider_update/(.*)'] = 'AdminController/news_slider_update/$1';
$route['a_slider_update_act/(.*)'] = 'AdminController/news_slider_update_act/$1';

$route['a_slider_view/(.*)'] = 'AdminController/slider_view/$1';



$route['a_news_delete/(.*)'] = 'AdminController/deleteNews/$1';

$route['a_news_update/(.*)'] = 'AdminController/update_news/$1';
$route['a_news_update_act/(.*)'] = 'AdminController/update_newsAct/$1';

$route['a_news_view/(.*)'] = 'AdminController/view_news/$1';





$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
