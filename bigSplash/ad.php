<?php
$host = "localhost";
$port = "5433";
$dbname = "artgallery22";
$user = "postgres";
$password = "dipsg1400"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
$email=$_GET['email'];
$password=$_GET['password'];
$email=stripcslashes($email);
$password=stripcslashes($password);
$email=pg_escape_string($email); $password=pg_escape_string($password);


$result=pg_query("select * from ad where ad.ademail='$email' and ad.adpassword='$password'")
or die("failed to query database");
$row=pg_fetch_array($result);
if($row['ademail']==$email && $row['adpassword']==$password){

echo ("<script LANGUAGE='JavaScript'>
            window.alert('You Logged in as admin');
            window.location.href='/ubuntu/admin.html';
            </script>"); 

}
else{
echo ("<script LANGUAGE='JavaScript'>

        window.alert('Failed to login to bigSplash. Incorrect password or Emailid.Try again');
        window.location.href='/ubuntu/ad.html';
            
        </script>"); 

}


/*$host = "localhost";
$port = "5432";
$dbname = "login";
$user = "postgres";
$password = "dipsg1400"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
if(isset($_GET['Submit'])&&!empty($_GET['Submit'])){
    
    $hashpassword = $_GET['vpassword'];
    $sql ="select * from visitor where vemail = '".pg_escape_string($_GET['vemail'])."' and vpassword ='".$hashpassword."'";
    $data = pg_query($dbconn,$sql); 
    $login_check = pg_num_rows($data);
    if($login_check > 0){ 
        
        echo "Login Successfully";    
    }else{
        
        echo "Invalid Details";
    }
}*/

?>











