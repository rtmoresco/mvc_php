<?php

namespace Raiz\Model;
 
class Produto{
	private $dbConection;

	public function __construct(\PDO $dbConection){
		$this->dbConection = $dbConection;
	}

	public function getProduto(){
		$query = "select id, descricao, preco from tb_produtos";

		return $this->dbConection->query($query)->fetchAll();
	}
}

?>