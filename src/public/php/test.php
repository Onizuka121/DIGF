<?php
require_once __DIR__."/DbControl.php";
$db_control = DBControl::getDB("root","forge_db");
$myfile = fopen(__DIR__."/.sql-db/db.sql", "r") or die("Unable to open file!");

echo fread($myfile,filesize(__DIR__."/.sql-db/db.sql"));        
