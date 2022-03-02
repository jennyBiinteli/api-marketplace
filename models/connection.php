<?php

class Connection
{

	static public function connect()
	{

		try {
			$link = new PDO("mysql:host=us-cdbr-east-05.cleardb.net;dbname=heroku_95a8d1ce0696946", "b31201012d645e", "2ce2f069"); //PRODUCCION
			// $link = new PDO("mysql:host=localhost:33065;dbname=marketplace", "root", ""); //LOCAL
			$link->exec("set names utf8");
		} catch (PDOException $e) {
			die("Error: " . $e->getMessage());
		}

		return $link;
	}
}