<?php

namespace system\routes;

abstract class RouteSupport{

	protected $routes;
	private const CONTROLLER_DEFAULT = "indexController";

	public function __construct()
	{
		$this->initRoutes();
		$this->sendAction_Controller($this->getCurrentUrl());
	}

	abstract protected function initRoutes();

	protected function setRoutes($routes){
		$this->routes = $routes;
	}

	protected function getCurrentUrl(){
		return $_SERVER["REQUEST_URI"];
	}

	
	protected function sendAction_Controller($url){
		foreach ($this->getRoutes() as $key => $route) {
			if($url == $route["route"]){
				
				$Class = $this->getPathController($route["controller"]);

				$controller = new $Class;

				$action = $route["action"];

				$controller->$action();

			}
		}
	}

	protected function getRoutes(){
		return $this->routes;
	}

	protected function getPathController($controller = CONTROLLER_DEFAULT){
		return "Raiz\\Controller\\".ucfirst($controller);
	}

	
}

?>