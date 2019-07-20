<?php

// var_dump($_SERVER['SERVER_NAME']);
// var_dump($_SERVER["SERVER_PORT"]);
session_start();
$_SESSION['BASE'] = '/xampp/htdocs/mvc/app/';

include_once $_SESSION['BASE'].'core/Application.php';
include_once $_SESSION['BASE'].'controller/homeController.php';

// define('BASE','/var/www/html/mvc/app');
define('BASE','/xampp/htdocs/mvc/app/');
define('ROOT',dirname(__DIR__).DIRECTORY_SEPARATOR);
define('APP',ROOT.'app'.DIRECTORY_SEPARATOR);
define('VIEW',ROOT.'app'.DIRECTORY_SEPARATOR.'view',DIRECTORY_SEPARATOR);
define('CONTROLLER',ROOT.'app'.DIRECTORY_SEPARATOR.'controller',DIRECTORY_SEPARATOR);
define('MODEL',ROOT.'app'.DIRECTORY_SEPARATOR.'model',DIRECTORY_SEPARATOR);
define('DATA',ROOT.'app'.DIRECTORY_SEPARATOR.'data',DIRECTORY_SEPARATOR);
define('CORE',ROOT.'app'.DIRECTORY_SEPARATOR.'core',DIRECTORY_SEPARATOR);
$modules = [ROOT,APP,DATA,CORE,CONTROLLER,BASE];
set_include_path(get_include_path(). PATH_SEPARATOR . implode( PATH_SEPARATOR ,$modules));
// var_dump(get_include_path()); 
spl_autoload_register('spl_autoload',false);
// var_dump($_SERVER['REQUEST_URI']);
// echo CONTROLLER;
$app=new Application;
?>