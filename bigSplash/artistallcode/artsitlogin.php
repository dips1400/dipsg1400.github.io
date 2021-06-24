<?php
/*$host = "localhost";
$port = "5432";
$dbname = "login";
$user = "postgres";
$password = "dipsg1400"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    
    $hashpassword = $_POST['password'];
    $sql ="select * from artist where email = '".pg_escape_string($_POST['email'])."' and password ='".$hashpassword."'";
    $data = pg_query($dbconn,$sql); 
    $login_check = pg_num_rows($data);
    if($login_check > 0){ 
        
        
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('You Logged in to bigSplash');
            window.location.href='/pro_onlineart/artproj.html';
            </script>");  
    }else{
        
        echo '<div id="errmsg">Invalid Details</div><br>';
        echo '<div id="errmsg">Invalid email or password</div><br>';
        echo '<div id="errmsg">PLEASE CHECK YOUR DETAILS</div><br>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login artist </title>
  <meta name="keywords" content="PHP,PostgreSQL,Insert,Login">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Login Here </h2>
  <form method="post">
  
     
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    
     
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
     
    <!--<button onclick="myFunction()"><input type="submit" name="submit" class="btn btn-primary" value="submit"></button>-->
    <input onclick="myFunction()" type="submit" name="submit" class="btn btn-primary" value="submit">
    </form>
</div>



<!--<script>
function myFunction() {
  location.replace("C:/xampp/htdocs/pro_onlineart/artproj.html")
}
</script>-->
</body>
</html>*/