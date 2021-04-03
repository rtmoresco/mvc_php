<?php

namespace Raiz\Controller;

use Raiz\Model\Info;
use Raiz\Model\Produto;

use system\database\DB;
use system\template\Template;

class IndexController extends Template{

	public function index(){

		$this->getTemplate("index");

		$connection = DB::getConection();
		$produtoModel = new Produto($connection);

		echo "<pre>";
		print_r($produtoModel->getProduto());
		echo "<pre/>";
	}

	public function sobre_nos(){

		$this->getTemplate("sobre_nos");

		$connection = DB::getConection();
		$infoModel = new Info($connection);
		echo "<pre>";
		print_r($infoModel->getInfo());
		echo "<pre/>";

	}
}

?>