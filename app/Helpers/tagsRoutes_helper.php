<?php

function tagsRoutes($routes)
{
    // == Tia punya ==
    // tabel tags
    $routes->get('/admin/tags', 'TagsController::index');
    $routes->get('/admin/tags/tambah', 'TagsController::add');
    $routes->get('/admin/tags/edit/(:num)', 'TagsController::edit/$1');
    $routes->post('/admin/tags/save', 'TagsController::save');
    $routes->post('/admin/tags/save/(:num)', 'TagsController::save/$1');
    $routes->post('/admin/tags/save/(:num)/(:segment)', 'TagsController::save/$1/$2');
    $routes->delete('/admin/tags/delete/(:num)', 'TagsController::delete/$1');
}
