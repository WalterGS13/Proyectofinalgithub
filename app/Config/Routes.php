<?php
namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();



$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();


$routes->setAutoRoute(false);
$routes->get('/', 'Home::index');

/*
/**
 * @var RouteCollection $routes
 * 
 * 
 

$routes->get('/Article', 'Article::index');
$routes->get("Article/(:num)","Article::show/$1");
$routes->get('Article/new', 'Article::new',["as"=>"new_article"]);
$routes->post("Article", "Article::create");




*/


service('auth')->routes($routes);

$routes->group("", ["filter"=>"login"], static function ($routes){

    $routes->get("set-password", "Password::set");
    $routes->post("set-password", "Password::update");
    
    $routes->get("Article/(:num)/delete", "Article::confirmDelete/$1");
    $routes->post("Article/delete/(:num)","Article::delete/$1");
    $routes->get("Article/(:num)/edit","Article::edit/$1");
    $routes->post("Article/(:num)","Article::update/$1");
    $routes->resource("Article", ["placeholder"=>"(:num)"]);

    $routes->get("Articles/(:num)/Image/new", "Article\Image::new/$1");
    $routes->post("Articles/(:num)/image/create", "Article\Image::create/$1");

    $routes->get("Article/(:num)/image", "Article\Image::get/$1");

    $routes->post("Article/(:num)/image/delete", "Article\Image::delete/$1");

});




if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
