<?php

namespace Config;

helper('tagsRoutes');

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
$routes->get('/about', 'Home::about');
$routes->get('/admin', 'Admin::dashboard');
//routes login
$routes->get('/', 'Home::index');
$routes->post('/login', 'Login::index');
$routes->get('/user', 'User::index', ['filter' => 'UserMemberFilter']);
$routes->get('/login', 'Login::index', ['filter' => 'UserTamuFilter']);
$routes->get('/user/logout', 'User::logout');
// routes BLog
$routes->get('/blog', 'Home::blog');
$routes->get('/blog/(:segment)', 'Home::blogDetail/$1');
$routes->get('/blog/tags/(:segment)', 'Home::tags/$1');
$routes->get('/blog/category/(:segment)', 'Home::category/$1');
//routes property
$routes->get('/property/grid', 'Home::propertyGrid');
$routes->get('/property/detail/(:num)', 'Home::propertyDetail/$1');





tagsRoutes($routes);

// tabel comment
$routes->get('/admin/comment', 'CommentController::index');
$routes->get('/admin/comment/tambah', 'CommentController::add');
$routes->get('/admin/comment/edit/(:num)', 'CommentController::edit/$1');
$routes->post('/admin/comment/save', 'CommentController::save');
$routes->post('/admin/comment/save/(:num)', 'CommentController::save/$1');
$routes->post('/admin/comment/save/(:num)/(:segment)', 'CommentController::save/$1/$2');
$routes->delete('/admin/comment/delete/(:num)', 'CommentController::delete/$1');

// =============== Mauliana punya==============
// tabel category
$routes->get('/admin/category', 'CategoryController::index');
$routes->get('/admin/category/tambah', 'CategoryController::add');
$routes->get('/admin/category/edit/(:num)', 'CategoryController::edit/$1');
$routes->post('/admin/category/save', 'CategoryController::save');
$routes->post('/admin/category/save/(:num)', 'CategoryController::save/$1');
$routes->post('/admin/category/save/(:num)/(:segment)', 'CategoryController::save/$1/$2');
$routes->delete('/admin/category/delete/(:num)', 'CategoryController::delete/$1');

// tabel social link
$routes->get('/admin/sociallink', 'SocialLinkController::index');
$routes->get('/admin/sociallink/tambah', 'SocialLinkController::add');
$routes->get('/admin/sociallink/edit/(:num)', 'SocialLinkController::edit/$1');
$routes->post('/admin/sociallink/save', 'SocialLinkController::save');
$routes->post('/admin/sociallink/save/(:num)', 'SocialLinkController::save/$1');
$routes->post('/admin/sociallink/save/(:num)/(:segment)', 'SocialLinkController::save/$1/$2');
$routes->delete('/admin/sociallink/delete/(:num)', 'SocialLinkController::delete/$1');


//=========Aldi Punya==================
// tabel property
$routes->get('/admin/property', 'PropertyController::index');
$routes->get('/admin/property/tambah', 'PropertyController::add');
$routes->get('/admin/property/edit/(:num)', 'PropertyController::edit/$1');
$routes->post('/admin/property/save', 'PropertyController::save');
$routes->post('/admin/property/save/(:num)', 'PropertyController::save/$1');
$routes->post('/admin/property/save/(:num)/(:segment)', 'PropertyController::save/$1/$2');
$routes->delete('/admin/property/delete/(:num)', 'PropertyController::delete/$1');

// ===============astrid punya==============
// tabel about
$routes->get('/admin/about', 'AboutController::index');
$routes->get('/admin/about/tambah', 'AboutController::add');
$routes->get('/admin/about/edit/(:num)', 'AboutController::edit/$1');
$routes->post('/admin/about/save', 'AboutController::save');
$routes->post('/admin/about/save/(:num)', 'AboutController::save/$1');
$routes->post('/admin/about/save/(:num)/(:segment)', 'AboutController::save/$1/$2');
$routes->delete('/admin/about/delete/(:num)', 'AboutController::delete/$1');
// tabel contact
$routes->get('/admin/contact', 'ContactController::index');
$routes->get('/admin/contact/tambah', 'ContactController::add');
$routes->get('/admin/contact/edit/(:num)', 'ContactController::edit/$1');
$routes->post('/admin/contact/save', 'ContactController::save');
$routes->post('/admin/contact/save/(:num)', 'ContactController::save/$1');
$routes->post('/admin/contact/save/(:num)/(:segment)', 'ContactController::save/$1/$2');
$routes->delete('/admin/contact/delete/(:num)', 'ContactController::delete/$1');

// =============== Auliyaasariiii
// tabel post
$routes->get('/admin/post', 'PostController::index');
$routes->get('/admin/post/tambah', 'PostController::add');
$routes->get('/admin/post/edit/(:num)', 'PostController::edit/$1');
$routes->post('/admin/post/save', 'PostController::save');
$routes->post('/admin/post/save/(:num)', 'PostController::save/$1');
$routes->post('/admin/post/save/(:num)/(:segment)', 'PostController::save/$1/$2');
$routes->delete('/admin/post/delete/(:num)', 'PostController::delete/$1');

// =============== Mauliani
// tabel property spec
$routes->get('/admin/property-spec', 'PropertySpecController::index');
$routes->get('/admin/property-spec/tambah', 'PropertySpecController::add');
$routes->get('/admin/property-spec/edit/(:num)', 'PropertySpecController::edit/$1');
$routes->post('/admin/property-spec/save', 'PropertySpecController::save');
$routes->post('/admin/property-spec/save/(:num)', 'PropertySpecController::save/$1');
$routes->post('/admin/property-spec/save/(:num)/(:segment)', 'PropertySpecController::save/$1/$2');
$routes->delete('/admin/property-spec/delete/(:num)', 'PropertySpecController::delete/$1');

//================Joses==================
// tabel property public facility
$routes->get('/admin/public-facility', 'PublicFacilityController::index');
$routes->get('/admin/public-facility/tambah', 'PublicFacilityController::add');
$routes->get('/admin/public-facility/edit/(:num)', 'PublicFacilityController::edit/$1');
$routes->post('/admin/public-facility/save', 'PublicFacilityController::save');
$routes->post('/admin/public-facility/save/(:num)', 'PublicFacilityController::save/$1');
$routes->post('/admin/public-facility/save/(:num)/(:segment)', 'PublicFacilityController::save/$1/$2');
$routes->delete('/admin/public-facility/delete/(:num)', 'PublicFacilityController::delete/$1');



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
