<?php
$exec_start = microtime();

session_start();
include "config.php";
include APP_CORE."Autoload.php";

$router = new Router();
// IndexController
$router->add ("/", 				["IndexController", "index"]);
$router->add ("/about", 			["IndexController", "about"]);
// BlogController
$router->get ("/blog", 				["BlogController", "index"]);
// $router->get ("/blog/(?<page>\d+)", 		["BlogController", "page"]);
$router->get ("/blog/detail/(?<id>\d+)", 	["BlogController", "detail"]);
$router->get ("/blog/create", 			["BlogController", "form"]);
$router->post("/blog/create", 			["BlogController", "create"]);
$router->get ("/blog/modify/(?<id>\d+)", 	["BlogController", "modify"]);
$router->post("/blog/update", 			["BlogController", "update"]);
$router->get ("/blog/delete/(?<id>\d+)", 	["BlogController", "delete"]);
// Can use Anonymous Function
$router->get ("/hello", function(){
	echo "Hello World!";
});
// GO!!
$router->run();

$exec_end = microtime();
echo "<script>$('#exec_time').html('ExecTime: ".round(($exec_end-$exec_start), 6)."')</script>";
?>
