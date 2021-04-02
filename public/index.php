<?php
	require_once "../vendor/autoload.php";
	$route = new \Raiz\Router;


	echo "<pre>";
	print_r($route->getRoutes());
	echo "<pre/>";
?>