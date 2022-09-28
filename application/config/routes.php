<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'MainController/view';
// $route['create']['post'] = 'create';
// $route['edit']['post'] = 'edit';
// $route['delete']['post'] = 'delete';

//ROUTES are from controller
$route['create']['get'] = 'MainController/create';
$route['register']['get'] = 'MainController/register';
$route['login']['post'] = 'MainController/login';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

