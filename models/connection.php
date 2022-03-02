<?php

class Connection
{

	static public function connect()
	{
		$servidor = "localhost";
		$usuario = "b31201012d645e";
		$password = "42a8ed3d0d30baa";

		try {
			$link = new PDO("mysql:host=$servidor;dbname=heroku_95a8d1ce0696946", $usuario, $password); //PRODUCCION
			// $link = new PDO("mysql:host=localhost:33065;dbname=marketplace", "root", ""); //LOCAL
			$link->exec("set names utf8");
		} catch (PDOException $e) {
			die("Error: " . $e->getMessage());
		}

		return $link;
	}
}