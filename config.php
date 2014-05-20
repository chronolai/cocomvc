<?php
// Application
define('WEBTITLE', "CocoMVC");
define('WEBROOT', dirname($_SERVER['SCRIPT_NAME']));

// Database
date_default_timezone_set("Asia/Taipei");
define('DB_HOSTNAME', '127.0.0.1');
define('DB_DATABASE', 'coco');
define('DB_USERNAME', 'coco');
define('DB_PASSWORD', 'coco');
define('DB_CONNINFO', 'mysql:host='.DB_HOSTNAME.';dbname='.DB_DATABASE.';charset=utf8');

// Path
define('APP_CORE', './core/');

define('MVC_MODL', './app/model/');
define('MVC_VIEW', './app/view/');
define('MVC_CTRL', './app/controller/');
define('MVC_LANG', './app/language/');

define('DEFAULT_LAYOUT', '_default.tpl');

// Develop
define('DEVMODE', true);
if(DEVMODE)
	error_reporting(E_ALL);
else
	error_reporting(0);
?>