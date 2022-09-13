<?php


require_once 'config/config.php';
require_once 'Autoloader.php';

use App\Autoloader;
use App\Service\Router;
use App\Controller\HomeController; // not created yet

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

    $router->get('/', function (){
        echo (new HomeController)->invoke();
    });

//    $router->post('/add', function (){
//        (new HomeController)->add();
//    });

    $router->run();
} catch (Exception $e) {
    die('Error: ' . $e);
}