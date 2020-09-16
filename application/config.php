<?php

define("ROOT", "/application");

require_once 'db.php';
require_once 'route.php';
require_once 'models/Model.php';
require_once 'views/View.php';
require_once 'controllers/Controller.php';

Routing::buildRoute(); 
