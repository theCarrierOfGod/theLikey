<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/how-it-works', 'Home::aboutUs');

$routes->match(['get', 'post'], '/sign-in', 'Auth::sign_in', ['filter' => 'guest']);
$routes->match(['get', 'post'], '/sign-up', 'Auth::sign_up', ['filter' => 'guest']);
$routes->match(['get', 'post'], '/auth/verify/(:segment)', 'Auth::verify/$1', ['filter' => 'guest']);
$routes->get('/sign-out', 'Auth::sign_out');




$routes->get('/dashboard', 'User::index', ['filter' => 'auth']);
$routes->match(['get', 'post'], '/profile/social', 'User::social', ['filter' => 'auth']);


$routes->match(['get', 'post'], '/new_task', 'TaskController::create', ['filter' => 'auth']);
$routes->match(['get', 'post'], '/new_promotion', 'TaskController::promotion', ['filter' => 'auth']);
$routes->match(['get', 'post'], '/task_done/(:any)', 'TaskController::taskDone/$1', ['filter' => 'auth']);
$routes->match(['get', 'post'], '/promotions/(:any)', 'TaskController::fetchPromos/$1', ['filter' => 'auth']);
$routes->match(['get', 'post'], '/balance', 'TaskController::balance', ['filter' => 'auth']);
$routes->match(['get', 'post'], '/getpromos', 'TaskController::getPromos', ['filter' => 'auth']);
$routes->match(['get', 'post'], '/task/(:any)', 'TaskController::eachTask/$1', ['filter' => 'auth']);

$routes->get('/earn_credits', 'TaskController::earnCredits', ['filter' => 'auth']);
$routes->get('/make_money', 'TaskController::makeMoney', ['filter' => 'auth']);

$routes->post('/addProof', 'TaskController::addProof', ['filter' => 'auth']);


$routes->match(['get', 'post'], '/wallet/add_fund', 'WalletController::addFund', ['filter' => 'auth']);
$routes->match(['get', 'post'], '/wallet/withdraw', 'WalletController::Withdraw', ['filter' => 'auth']);
$routes->match(['get', 'post'], '/wallet/transfer', 'WalletController::Transfer', ['filter' => 'auth']);

// $routes->get('/sign-up', 'Auth::sign_up');

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
