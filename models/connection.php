<?php

class Connection
{

	static public function connect()
	{

		try {
			$link = new PDO("mysql:host=us-cdbr-east-05.cleardb.net:3306;dbname=heroku_95a8d1ce0696946
			", "b31201012d645e
			", "42a8ed3d0d30baa"); //PRODUCCION
			// $link = new PDO("mysql:host=localhost:33065;dbname=marketplace", "root", ""); //LOCAL
			$link->exec("set names utf8");
		} catch (PDOException $e) {
			die("Error: " . $e->getMessage());
		}

		return $link;
	}
}