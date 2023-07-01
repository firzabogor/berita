<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['berita/delete/(:any)'] = 'berita/delete/$1';
$route['berita/update/(:any)'] = 'berita/update/$1';
$route['berita/create'] = 'berita/create';
$route['berita'] = 'berita';
$route['berita/(:any)'] = 'berita/detail/$1';

$route['halaman'] = 'halaman';
$route['halaman/(:any)'] = 'halaman/index/$1';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
