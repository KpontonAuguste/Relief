<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['as' => 'home.index']);
$routes->post('newsletter', 'Newsletter::formHandler', ['as' => 'newsletter.handler']);
$routes->get('blog', 'Post::index', ['as' => 'post.index']);



$routes->group('admin', static function ($routes) {

    $routes->group('', [], static function ($routes) {
        $routes->get('home', 'AdminController::index', ['as' => 'admin.home']);
        $routes->get('logout', 'AdminController::logoutHandler', ['as' => 'admin.logout']);

        $routes->get('listCategory', 'AdminController::listCategory', ['as' => 'admin.category']);
        $routes->get('category', 'AdminController::categoryForm', ['as' => 'admin.category.form']);
        $routes->post('addCategory', 'AdminController::addCategory', ['as' => 'admin.category.handler']);

        $routes->group('posts', [], static function ($routes) {
            $routes->get('/', 'AdminController::listPost', ['as' => 'admin.post']);
            $routes->get('new-post', 'AdminController::postForm', ['as' => 'admin.post.form']);
            $routes->post('create-post', 'AdminController::addPost', ['as' => 'admin.post.handler']);
            $routes->get('get-post', 'AdminController::getPost');
        });


        $routes->get('listNewsletter', 'AdminController::listNewsletter', ['as' => 'admin.newsletter']);
    });

    $routes->group('', [], static function ($routes) {
        $routes->get('login', 'AuthController::loginForm', ['as' => 'admin.login.form']);
        $routes->post('login', 'AuthController::loginHandler', ['as' => 'admin.login.handler']);
    });
});
