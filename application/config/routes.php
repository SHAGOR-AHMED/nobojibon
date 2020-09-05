<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//========================= Frontend =============================//

$route['NoboJibon'] = 'Welcome/index';
$route['About-Us'] = 'Welcome/AboutUs';
$route['Contact-Us'] = 'Welcome/contactUs';
$route['Publication'] = 'Welcome/Publication';
$route['Our-Gallery'] = 'Welcome/Gallery';
$route['Our-Partner'] = 'Welcome/Partner';
$route['Achievements'] = 'Welcome/Achievements';
$route['UsefulLink'] = 'Welcome/UsefulLink';
$route['Donate'] = 'Welcome/Donate';
$route['Program-Details/(:num)'] = 'Welcome/ProgramDetailsByType/$1';
$route['Album-Image/(:num)'] = 'Welcome/AlbumImages/$1';
$route['Details/(:num)'] = 'Welcome/newsEventDetailsByID/$1';
$route['Program-detail/(:num)'] = 'Welcome/programDetailsByID/$1';

//$route['product_description/(:any)']='Welcome/product_description/$1';


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

