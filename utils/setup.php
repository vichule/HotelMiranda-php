<?php

require_once(__DIR__ . '/../BladeOne.php');
$dbconfig = parse_ini_file(".env");

use eftec\bladeone\BladeOne;

$views = __DIR__ . '/../views';
$cache = __DIR__ . '/../cache';

$blade = new BladeOne($views, $cache, BladeOne::MODE_DEBUG); // MODE_DEBUG allows to pinpoint troubles.


$servername = $dbconfig["HOST"];
$user = $dbconfig["USER"];
$password = $dbconfig["PASSWORD"];
$dbname = $dbconfig["DB_NAME"];
$port = $dbconfig["SQL_PORT"];

$conn = new mysqli($servername, $user, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
