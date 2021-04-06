<?php

namespace Raiz;

use system\routes\RouteSupport;

class Router extends RouteSupport {

	
	public function initRoutes(){
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

		
}	


?>