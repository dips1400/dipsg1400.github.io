<?php
$host = "localhost";
$port = "5432";
$dbname = "login";
$user = "postgres";
$password = "dipsg1400"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$conn = pg_connect($connection_string);
?>
