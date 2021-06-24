<?php
$host = "localhost";
$port = "5433";
$dbname = "artgallery22";
$user = "postgres";
$password = "dipsg1400"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);



//get values pass from form in login.php file
$email=$_GET['vemail'];
$password=$_GET['vpassword'];



//to prevent pgsql injection
$email=stripcslashes($email);
$password=stripcslashes($password);
$email=pg_escape_string($email); $password=pg_escape_string($password);






//query the database for user
$result=pg_query("select * from visitor where visitor.vemail='$email' and visitor.vpassword='$password'")
or die("failed to query database");
$row=pg_fetch_array($result);
if($row['vemail']==$email && $row['vpassword']==$password){
/*echo "Login Succussfully!!!!! welcome".$row['email'];*/
echo ("<script LANGUAGE='JavaScript'>
            window.alert('You Logged in to bigSplash');
            window.location.href='/ubuntu/artproj.html';
            </script>"); 

}
else{
	echo ("<script LANGUAGE='JavaScript'>
		            window.alert('Something went wrong.Please try again');
	            window.location.href='/ubuntu/visitorfrontlogin.php';
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











