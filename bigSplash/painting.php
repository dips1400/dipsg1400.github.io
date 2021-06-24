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

<?php
$host = "localhost";
$port = "5433";
$dbname = "artgallery22";
$user = "postgres";
$password = "dipsg1400"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
$pname = $_GET['pname'];

 setcookie("Painting_name",$_GET['pname'],time()+172800);
    

$sql="SELECT artist.aname,painting.pid,painting.pname,painting.ptype,painting.price 
FROM painting,artist WHERE artist.aid=painting.aid and painting.pname='$pname'";
       $res=pg_query($dbconn,$sql) or die("selected searched failed");
       echo"<table border=2;cellpadding=3;><tr><th>Artist Name</th><th>Painting ID</th><th>Painting Name</th><th>Painting Type</th><th>Painting Price</th></tr>";
       while($row=pg_fetch_row($res))
       {
       echo"<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td></tr>";
       }
       pg_free_result($res);
       pg_close($dbconn);


?>
