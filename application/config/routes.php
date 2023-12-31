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
$route['default_controller'] = 'PanelController';

$route['api-auth-login']['POST'] = 'AuthController/login_api';
$route['api-auth-register']['POST'] = 'AuthController/index';

$route['gallery/all'] = 'GalleryController/list';
$route['gallery/(:any)'] = 'GalleryController/details/$1';

$route['popups/all'] = 'PopupsController/list';
$route['popup/(:any)'] = 'PopupsController/details/$1';

$route['banners/all'] = 'BannersController/list';
$route['banner/(:any)'] = 'BannersController/details/$1';

$route['documents/pdfs/all'] = 'DocumentsController/list';
$route['document/pdfs/(:any)'] = 'DocumentsController/details/$1';

$route['login'] = 'AuthController/login';
$route['invoice/get/(:any)'] = 'InvoiceController/index';

/* API Calls */

$route['api/gallery-images/upload'] = 'GalleryController/upload';
$route['api/gallery-data/update'] = 'GalleryController/update_gallery_info';

$route['api/banner/new']['POST'] = 'BannersController/add';
$route['api/banner/update']['POST'] = 'BannersController/update';
$route['api/banner/delete']['POST'] = 'BannersController/delete';
$route['api/banner/upload'] = '';
$route['api/banner-data/update'] = '';

$route['api/popup/new']['POST'] = 'PopupsController/add';
$route['api/popup/update']['POST'] = 'PopupsController/update';
$route['api/popup/delete']['POST'] = 'PopupsController/delete';

$route['api/pdf/upload'] = '';
$route['api/pdf-data/update'] = '';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
