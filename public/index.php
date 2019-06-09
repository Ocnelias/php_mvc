<?php

session_start();

require_once '../vendor/autoload.php';

define('WEBROOT', str_replace("public/index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("public/index.php", "", $_SERVER["SCRIPT_FILENAME"]));

if (isset($_SERVER) && isset($_SERVER['REMOTE_ADDR']))
{
    $configPHP   = ROOT . 'config/local.php';
    $localConfig = file_exists($configPHP) ? require_once($configPHP) : [];
}


// start the application
$app = new Core\Application($localConfig);