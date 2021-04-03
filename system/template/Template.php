<?php
namespace system\template;

abstract class Template{

	private $view;
	private $nameHeader = "header";
	private $nameFooter = "footer";

	public function __construct(){
		$this->view = new \stdClass();
	}

	protected function getTemplate($content){
		$pathHeader = "../Web/View/template/".$this->nameHeader .".html";
		$pathFooter = "../Web/View/template/".$this->nameFooter.".html";

		if(file_exists($pathHeader) && file_exists($pathFooter)){
			require_once $pathHeader;

			$this->getContent($content);

			require_once $pathFooter;
		}else{
			echo "Verifique o nome dos templates";
		}
	}

	private function getContent($content){
		$pathController = get_class($this);
		$pathController = str_replace("Raiz\\Controller\\", "", $pathController);
		$pathController = str_replace("Controller", "", $pathController);

		require_once "../Web/View/".$pathController."/".$content."Content.html";
	}

	
}	
?>