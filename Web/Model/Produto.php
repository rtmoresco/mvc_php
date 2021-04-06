<?php

namespace Raiz\Model;

use system\database\ConnectionSupport;
 
class Produto extends ConnectionSupport{
	

	public function getProduto(){
		$query = "select id, descricao, preco from tb_produtos";

		return $this->dbConection->query($query)->fetchAll();
	}
}

?>