<?php


require_once 'config/config.php';
require_once 'Autoloader.php';

use App\Autoloader;

Autoloader::$folderList =
    [
        "App/Model/",
        "App/Controller/",
        "App/Repository/",
        "App/Service/",
    ];
Autoloader::register();

session_start();

try {

    $router = new Router($_GET['url']);


    // HomePage
    $router->get('/', function () {
        echo (new HomeController())->invoke();
    });

    if (Auth::isAuthenticated()) {
        // Search
        $router->get('/search', function () {
            echo (new SearchController())->invoke();
        });
    } else {
        Redirect::to('user/register', true);
    }


    // Sport CRUD methods
    $router->get('/admin/sport/', function () {
        echo (new SportController())->invoke();
    });

    $router->get('/admin/sport/create', function () {
        echo (new SportController())->addSport();
    });

    $router->post('/admin/sport/add', function () {
        (new SportController())->addSport();
    });

    $router->post('/admin/sport/delete/:id', function ($params) {
        (new SportController())->deleteSportById($params);
    });

    $router->post('/admin/sport/update/:id', function ($params) {
        (new SportController())->updateSportById($params);
    });

    $router->get('/admin/sport/:id', function ($params) {
        echo (new SportController())->getSportById($params);
    });

    // User CRUD methods
    $router->get('/admin/user/', function () {
        echo (new UserController())->invoke();
    });

    $router->get('/admin/user/create', function () {
        echo (new UserController())->addUser();
    });

    $router->post('/admin/user/add', function () {
        (new UserController())->addUser();
    });

    $router->post('/admin/user/delete/:id', function ($params) {
        (new UserController())->deleteUserById($params);
    });

    $router->post('/admin/user/update/:id', function ($params) {
        (new UserController())->updateUserById($params);
    });

    $router->get('/admin/user/:id', function ($params) {
        echo (new UserController())->getUserById($params);
    });

    $router->run();
} catch (RouterException|Exception $e) {
    die('Error: ' . $e);
}