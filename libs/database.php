<?php

class Database extends PDO
{
	
	function __construct()
	{
		parent::__construct(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSW); //establishing the database connection
	}
}

?>