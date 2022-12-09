<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->get('/add', 'Home::add');


// == Tia punya ==
// tabel tags
$routes->get('/tags', 'TagsController::index');
$routes->get('/tags/tambah', 'TagsController::add');
$routes->get('/tags/edit/(:num)', 'TagsController::edit/$1');
$routes->post('/tags/save', 'TagsController::save');
$routes->post('/tags/save/(:num)', 'TagsController::save/$1');
$routes->post('/tags/save/(:num)/(:segment)', 'TagsController::save/$1/$2');
$routes->delete('/tags/delete/(:num)', 'TagsController::delete/$1');

// tabel comment
$routes->get('/comment', 'CommentController::index');
$routes->get('/comment/tambah', 'CommentController::add');
$routes->get('/comment/edit/(:num)', 'CommentController::edit/$1');
$routes->post('/comment/save', 'CommentController::save');
$routes->post('/comment/save/(:num)', 'CommentController::save/$1');
$routes->post('/comment/save/(:num)/(:segment)', 'CommentController::save/$1/$2');
$routes->delete('/comment/delete/(:num)', 'CommentController::delete/$1');

// =============== Mauliana punya==============
// tabel category
$routes->get('/category', 'CategoryController::index');
$routes->get('/category/tambah', 'CategoryController::add');
$routes->get('/category/edit/(:num)', 'CategoryController::edit/$1');
$routes->post('/category/save', 'CategoryController::save');
$routes->post('/category/save/(:num)', 'CategoryController::save/$1');
$routes->post('/category/save/(:num)/(:segment)', 'CategoryController::save/$1/$2');
$routes->delete('/category/delete/(:num)', 'CategoryController::delete/$1');

// tabel social link
$routes->get('/sociallink', 'SocialLinkController::index');
$routes->get('/sociallink/tambah', 'SocialLinkController::add');
$routes->get('/sociallink/edit/(:num)', 'SocialLinkController::edit/$1');
$routes->post('/sociallink/save', 'SocialLinkController::save');
$routes->post('/sociallink/save/(:num)', 'SocialLinkController::save/$1');
$routes->post('/sociallink/save/(:num)/(:segment)', 'SocialLinkController::save/$1/$2');
$routes->delete('/sociallink/delete/(:num)', 'SocialLinkController::delete/$1');


//=========Aldi Punya==================
// tabel property
$routes->get('/property', 'PropertyController::index');
$routes->get('/property/tambah', 'PropertyController::add');
$routes->get('/property/edit/(:num)', 'PropertyController::edit/$1');
$routes->post('/property/save', 'PropertyController::save');
$routes->post('/property/save/(:num)', 'PropertyController::save/$1');
$routes->post('/property/save/(:num)/(:segment)', 'PropertyController::save/$1/$2');
$routes->delete('/property/delete/(:num)', 'PropertyController::delete/$1');

// ===============astrid punya==============
// tabel about
$routes->get('/about', 'AboutController::index');
$routes->get('/about/tambah', 'AboutController::add');
$routes->get('/about/edit/(:num)', 'AboutController::edit/$1');
$routes->post('/about/save', 'AboutController::save');
$routes->post('/about/save/(:num)', 'AboutController::save/$1');
$routes->post('/about/save/(:num)/(:segment)', 'AboutController::save/$1/$2');
$routes->delete('/about/delete/(:num)', 'AboutController::delete/$1');
// tabel contact
$routes->get('/contact', 'ContactController::index');
$routes->get('/contact/tambah', 'ContactController::add');
$routes->get('/contact/edit/(:num)', 'ContactController::edit/$1');
$routes->post('/contact/save', 'ContactController::save');
$routes->post('/contact/save/(:num)', 'ContactController::save/$1');
$routes->post('/contact/save/(:num)/(:segment)', 'ContactController::save/$1/$2');
$routes->delete('/contact/delete/(:num)', 'ContactController::delete/$1');

// =============== Auliyaasariiii
// tabel post
$routes->get('/post', 'PostController::index');
$routes->get('/post/tambah', 'PostController::add');
$routes->get('/post/edit/(:num)', 'PostController::edit/$1');
$routes->post('/post/save', 'PostController::save');
$routes->post('/post/save/(:num)', 'PostController::save/$1');
$routes->post('/post/save/(:num)/(:segment)', 'PostController::save/$1/$2');
$routes->delete('/post/delete/(:num)', 'PostController::delete/$1');

// =============== Mauliani
// tabel property spec
$routes->get('/property-spec', 'PropertySpecController::index');
$routes->get('/property-spec/tambah', 'PropertySpecController::add');
$routes->get('/property-spec/edit/(:num)', 'PropertySpecController::edit/$1');
$routes->post('/property-spec/save', 'PropertySpecController::save');
$routes->post('/property-spec/save/(:num)', 'PropertySpecController::save/$1');
$routes->post('/property-spec/save/(:num)/(:segment)', 'PropertySpecController::save/$1/$2');
$routes->delete('/property-spec/delete/(:num)', 'PropertySpecController::delete/$1');

//================Joses==================
// tabel property public facility
$routes->get('/public-facility', 'PublicFacilityController::index');
$routes->get('/public-facility/tambah', 'PublicFacilityController::add');
$routes->get('/public-facility/edit/(:num)', 'PublicFacilityController::edit/$1');
$routes->post('/public-facility/save', 'PublicFacilityController::save');
$routes->post('/public-facility/save/(:num)', 'PublicFacilityController::save/$1');
$routes->post('/public-facility/save/(:num)/(:segment)', 'PublicFacilityController::save/$1/$2');
$routes->delete('/public-facility/delete/(:num)', 'PublicFacilityController::delete/$1');



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
