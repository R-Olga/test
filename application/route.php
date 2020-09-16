<?php

class Routing {

public static function buildRoute() {

		$controllerName = "IndexController";
		$action = "index";


		require_once "controllers/IndexController.php"; 
		require_once "models/IndexModel.php"; 


		$controller = new $controllerName();
		$controller->$action(); 

	}

	public function errorPage() {

    }
}
