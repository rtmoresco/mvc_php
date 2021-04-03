<?php
namespace Raiz\Model;



class Info{

	private $dbConection;

	public function __construct(\PDO $dbConection){
		$this->dbConection = $dbConection;
	}

	public function getInfo(){
		$query = "select id, descricao, titulo from tb_info";

		return $this->dbConection->query($query)->fetchAll();
	}
}


?>