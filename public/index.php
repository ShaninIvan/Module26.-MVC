<?php
    define ('ROOT', dirname(dirname(__FILE__)));
    define('CONTROLLERS', ROOT . '/app/controllers/');
    define('MODELS', ROOT . '/app/models/');
    define('VIEWS', ROOT . '/app/views/');

    require_once(ROOT . '/app/core/Controller.php');
    require_once(ROOT . '/app/core/Model.php');
    require_once(ROOT . '/app/core/View.php');
    require_once(ROOT . '/app/core/Router.php');

    require_once(ROOT . '/app/templates/vendor/autoload.php');
    
    $router = new Router;
    $router->run();
?>

