<?php

class Connection
{

	static public function connect()
	{

		try {
			$link = new PDO("mysql:host=localhost;dbname=demomarketplace
			", "demomarketplace
			", "DemoMarketPlace@"); //PRODUCCION
			// $link = new PDO("mysql:host=localhost:33065;dbname=marketplace", "root", ""); //LOCAL
			$link->exec("set names utf8");
		} catch (PDOException $e) {
			die("Error: " . $e->getMessage());
		}

		return $link;
	}
}