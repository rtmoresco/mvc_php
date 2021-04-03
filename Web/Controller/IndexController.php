<?php

namespace Raiz\Controller;

use Raiz\Model\Info;
use Raiz\Model\Produto;
use system\database\DB;

class IndexController{

	public function index(){
		$connection = DB::getConection();
		$produtoModel = new Produto($connection);

		echo "<pre>";
		print_r($produtoModel->getProduto());
		echo "<pre/>";
	}

	public function sobre_nos(){
		$connection = DB::getConection();
		$infoModel = new Info($connection);
		echo "<pre>";
		print_r($infoModel->getInfo());
		echo "<pre/>";

	}
}

?>