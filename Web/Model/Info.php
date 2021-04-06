<?php
namespace Raiz\Model;

use system\database\ConnectionSupport;

class Info extends ConnectionSupport{


	public function getInfo(){
		$query = "select id, descricao, titulo from tb_info";

		return $this->dbConection->query($query)->fetchAll();
	}
}


?>