<html>
<head>
<style>
table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

table td, table th {
  border: 1px solid #ddd;
  padding: 8px;
}

table tr:nth-child(even){background-color: #f2f2f2;}

table tr:hover {background-color: #ddd;}

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #333;
  color: white;
}
</style>
</head>
<center>
<h3>Visitor Details</h3>
</center>
<?php
$host = "localhost";
$port = "5433";
$dbname = "artgallery22";
$user = "postgres";
$password = "dipsg1400"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
$result=pg_query("Select * from visitor");
echo"<table border=2;cellpadding=3;><tr><th>Visitor Id</th><th>Visitor Name</th><th>Visitor Email</th><th>Visitor PhoneNo</th><th>Visitor Password</th><th>Visitor Address</th></tr>";
       while($row=pg_fetch_row($result))
       {
       echo"<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td></tr>";
       }
	
echo "</table>";

?>
