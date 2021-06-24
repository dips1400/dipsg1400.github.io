<?php
$host = "localhost";
$port = "5433";
$dbname = "artgallery22";
$user = "postgres";
$password = "dipsg1400"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);



//get values pass from form in login.php file
$email=$_POST['email'];
$password=$_POST['password'];



//to prevent pgsql injection
$email=stripcslashes($email);
$password=stripcslashes($password);
$email=pg_escape_string($email); $password=pg_escape_string($password);






//query the database for user
$result=pg_query("select * from artist where artist.email='$email' and artist.password='$password'")
or die("failed to query database");
$row=pg_fetch_array($result);
if($row['email']==$email && $row['password']==$password){
echo "Login Successfully!!!!! welcome".$row['email'];
echo ("<script LANGUAGE='JavaScript'>

        window.alert('You Logged in to bigSplash');
        window.location.href='/ubuntu/artproj.html';
            
        </script>"); 

}
else{
	echo ("<script LANGUAGE='JavaScript'>

		        window.alert('Something failed.Please try again..!!');
	        window.location.href='/ubuntu/loginpage.html';

	        </script>");
}

?>












