<?php

namespace Raiz\Controller;

use Raiz\Model\Info;
use Raiz\Model\Produto;

use system\template\Template;

class IndexController extends Template{

	public function index(){


		$produtoModel = new Produto();

		$this->view->dados = $produtoModel->getProduto();  
		$this->getTemplate("index");

	}

	public function sobre_nos(){

		$infoModel = new Info();

		$this->view->dados = $infoModel->getInfo();  

		$this->getTemplate("sobre_nos");

	}
}

?>