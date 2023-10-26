<?php

define("WP_ROOT", __DIR__);
define("DS", DIRECTORY_SEPARATOR);
require_once WP_ROOT . DS . "wp-load.php";

$sqlServerIP = "205.174.25.157,1433";
$sqlServerUserName = "test";
$sqlServerPassword = 'psswd';
$sqlServerDBname = "Test";



$sqlConn =  new PDO("sqlsrv:server=$sqlServerIP ;Database=$sqlServerDBname ;APP=dstore", $sqlServerUserName, $sqlServerPassword);

$sqlConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$sqlConn->query("select N'Test Connection'");



