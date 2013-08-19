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


/*
 * Maps all auth pages to "auth/" without showing it in the URL
 * 
 * 	For example: 
 * 		site.com/login is routed to site.com/auth/login	 
 * 
 * */

$route['login'] = "auth/login";
$route['logout'] = "auth/logout";
$route['register'] = "auth/register";
$route['send_again'] = "auth/send_again";
$route['forgot_password'] = "auth/forgot_password";
$route['reset_password'] = "auth/reset_password";
$route['activate'] = "auth/activate";
$route['change_password'] = "auth/change_password";
$route['change_email'] = "auth/change_email";
$route['reset_email'] = "auth/reset_email";
$route['unregister'] = "auth/unregister";

/*
 * Maps all routes to "main/" without showing it in the URL
 * 
 * 	For example: 
 * 		site.com/home is routed to site.com/main/home
 * 
 * This is done to keep application URLs clean, SEO friendly, and
 * as least verbose as possible	 
 * 
 * */
$route['^(?!user|auth).*'] = "main/$0";


/* End of file routes.php */
/* Location: ./application/config/routes.php */