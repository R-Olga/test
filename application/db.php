<?php

class DB{

	public static function connToDB() {

		$user = "root";
		$pass = "";
		$host = "localhost";
		$db   = "database";

		$conn = new PDO("mysql:dbname=$db;host=$host", $user, $pass);
		return $conn;

	}
}