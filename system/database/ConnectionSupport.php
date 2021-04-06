<?php

namespace system\database;

use system\database\DB;

abstract class ConnectionSupport{
	
	protected \PDO $dbConection;
	
	public function __construct(){
		$this->dbConection = DB::getConection();
	}
}
?>