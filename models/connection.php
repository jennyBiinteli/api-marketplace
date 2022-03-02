<?php

class Connection
{

	static public function connect()
	{
		$servidor = "us-cdbr-east-05.cleardb.net";
		$usuario = "b31201012d645e";
		$password = "42a8ed3d0d30baa";

		try {
			//Get Heroku ClearDB connection information
			// $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
			// $cleardb_server = $cleardb_url["host"];
			// $cleardb_username = $cleardb_url["user"];
			// $cleardb_password = $cleardb_url["pass"];
			// $cleardb_db = substr($cleardb_url["path"], 1);
			// $active_group = 'default';
			// $query_builder = TRUE;
			// Connect to DB
			// $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

			$link = new PDO("mysql:host=$servidor;dbname=heroku_95a8d1ce0696946", $usuario, $password); //PRODUCCION
			// $link = new PDO("mysql:host=localhost:33065;dbname=marketplace", "root", ""); //LOCAL
			$link->exec("set names utf8");
		} catch (PDOException $e) {
			die("Error: " . $e->getMessage());
		}

		return $link;
	}
}