<?php

require_once __DIR__ . "/config.php";
require_once __DIR__ . "/db-config.php";

global $dbHost, $dbPort, $dbUser, $dbPassword, $dbName;



$connection = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName, $dbPort);



