<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Mundane';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//========================= Frontend =============================//

$route['Mundane'] = 'Mundane/index';
$route['About-Us'] = 'Mundane/AboutUs';
$route['Our-Principals'] = 'Mundane/ourPrincipals';
$route['Support-Team'] = 'Mundane/supportTeam';
$route['Certificates'] = 'Mundane/ourCertificates';
$route['Contact-Us'] = 'Mundane/contactUs';
$route['Product-Details/(:num)'] = 'Mundane/ProductDetailsByTypeID/$1';

/*--Admin Panel--*/

$route['admin_login']='Admin/admin_login';
$route['master']='Super_admin/index';
$route['slider']='Super_admin/slider';
$route['logout']='Super_admin/logout';

$route['client']='Super_admin/client';
$route['active2/(:num)']='Super_admin/active2/$1';
$route['inactive2/(:num)']='Super_admin/inactive2/$1';

$route['cpassword']='Super_admin/cpassword';
$route['change_password']='Super_admin/change_password';


/*--End Admin Panel--*/

