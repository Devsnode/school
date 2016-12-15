<?php

defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Frontend_controller/get_page';
$route['(:any)'] = 'Frontend_controller/get_page/$1';
$route['about'] = 'Frontend_controller/about_school';
$route['officials'] = 'Frontend_controller/administration';
$route['students-info'] = 'Frontend_controller/students_info';
$route['daily-curriculum'] = 'Frontend_controller/daily_curriculum';
$route['extra-curricular'] = 'Frontend_controller/extra_curricular';
$route['results'] = 'Frontend_controller/results';
$route['gallery'] = 'Frontend_controller/gallery';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


/* Admin Route */

$route['admin/admin-login'] = 'Login_controller';
$route['logout'] = 'Login_controller/logout';
$route['admin/admin-login-action'] = 'Login_controller/admin_login_action';
$route['admin/dashboard'] = 'Admin_controller';
$route['admin/add-school'] = 'Admin_controller/add_school';
$route['admin/show-school'] = 'Admin_controller/show_school';
$route['admin/add-school-action'] = 'Admin_controller/add_school_action';
$route['admin/update-school-details/(:num)'] = 'Admin_controller/update_school_details/$1';
$route['admin/update-school-action'] = 'Admin_controller/update_school_action';
$route['admin/add-pages'] = 'Admin_controller/add_pages';
$route['admin/page-list'] = 'Admin_controller/page_list';
$route['admin/add-page-action'] = 'Admin_controller/add_pages_action';
$route['admin/add-sub-pages'] = 'Admin_controller/add_sub_pages';
$route['admin/add-sub-page-action'] = 'Admin_controller/add_sub_page_action';
$route['admin/add-page-contents'] = 'Admin_controller/add_page_contents';
$route['admin/update-single-page-content/(:any)/(:any)'] = 'Admin_controller/update_single_page_content/$1/$2';
$route['admin/add-page-content-action'] = 'Admin_controller/add_page_content_action';
$route['admin/add-about-page-content-action'] = 'Admin_controller/add_about_page_content_action';
$route['admin/view-multiple-pages/(:num)'] = 'Admin_controller/view_multiple_pages/$1';
$route['admin/update-subpage-content/(:num)'] = 'Admin_controller/update_subpage_content/$1';
$route['admin/add-subpage-content-action'] = 'Admin_controller/add_subpage_content_action';
$route['make-multipages/(:any)/(:any)'] = 'Admin_controller/make_multipages/$1/$2';
