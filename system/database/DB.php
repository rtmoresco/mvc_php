<?php

namespace system\database;

class DB{

	public static function getConection(){
		try{
			$connection = new \PDO(
				"mysql:host=localhost;port=3306;dbname=mvc",
				"root",
				""
			);

				
			return $connection;
		}catch(\PDOException $erro){
			echo "Erro ao Conectar";
		}
	}
}

?>