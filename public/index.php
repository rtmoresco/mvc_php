<?php
	require_once "../vendor/autoload.php";
	$route = new \Raiz\Router;

	echo $route->sendAction_Controller();

	echo "<pre>";
	print_r($route->getRoutes());
	echo "<pre/>";
?>