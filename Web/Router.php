<?php

namespace Raiz;

class Router{

	private $routes;
	private const CONTROLLER_DEFAULT = "indexController";

	function __construct()
	{
		$this->initRoutes();
		$this->sendAction_Controller($this->getCurrentUrl())
	}

	function initRoutes(){
		$routes["index"] = array(
			"route" => "/",
			"controller" => "indexController",
			"action" => "index"			
		);

		$routes["sobre_nos"] = array(
			"route" => "/sobre_nos",
			"controller" => "indexController",
			"action" => "sobre_nos"			
		);

		$this->setRoutes($routes);
	}

	function setRoutes($routes){
		$this->routes = $routes;
	}

	function getCurrentUrl(){
		return $_SERVER["REQUEST_URI"];
	}

	
	function sendAction_Controller($url){
		foreach ($this->getRoutes() as $key => $route) {
			if($url == $route["route"]){

				echo $route["action"];
			}
		}
	}

	function getRoutes(){
		return $this->routes;
	}

	function getPathController($controller = CONTROLLER_DEFAULT){
		return "App"
	}

	

	
}	


?>