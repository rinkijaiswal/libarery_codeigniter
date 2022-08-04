<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/category','Home::category');
$routes->get("/contact",'Home::contact');
$routes->post("/contact",'Home::contact');
$routes->get('/single/(:num)','Home::single/$1');
$routes->get('/showcategory/(:any)','Home::showcategory/$1');
$routes->post('/search','Home::search');
// admin
$routes->group('admin',function($routes){
   $routes->get('login','AdminController::login');
   $routes->post('login','AdminController::login');
   $routes->get('dashboard','AdminController::dashboard');
   $routes->get('logout','AdminController::logout');
   $routes->get("contact",'AdminController::contact');
   $routes->get('issue','AdminController::issue');
});
$routes->group('book',function($routes){
    $routes->get('create','BookController::book');
    $routes->post('create','BookController::book');
    $routes->get('read','BookController::read');
    $routes->get('update/(:num)','BookController::update/$1');
    $routes->post('update/(:num)','BookController::update/$1');
    $routes->get('delete/(:num)','BookController::delete/$1');
});
$routes->group('category',function($routes){
    $routes->get('create','Controller::create');
    $routes->post('create','Controller::create');
    $routes->get('read','Controller::read');
    $routes->get('update/(:num)','Controller::update/$1');
    $routes->post('update/(:num)','Controller::update/$1');
    $routes->get('delete/(:num)','Controller::delete/$1');  
   
});

$routes->group('cart',function($routes){
    $routes->get('create','CartController::index');
    $routes->post('create', 'CartController::index');
    $routes->get('delete/(:num)', 'CartController::delete/$1');
});

//book
$routes->group('issue',function($routes){
    $routes->post('create','IssueController::issue');
    $routes->get('delete/(:num)','IssueController::delete/$1');
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
