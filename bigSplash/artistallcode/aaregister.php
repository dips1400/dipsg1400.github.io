<!DOCTYPE html>
<html>
<head>
  <title>Artist login - bigSplash </title>
  <meta name="keywords" content="PHP,PostgreSQL,Insert,Login">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <body>
        <style>
            body{
                background-color: aquamarine;
            }
            h2{
                color: white;
            }
            .fm{
                border: 2px solid rgb(168, 154, 154);
                border-radius: 8px;
                width: 300px;
                padding: 20px;
                background-color: #ffffff;
                margin-top: 20px;
	    }
	    .btn {
                    background-color: #838383;
                    border: none;
                    color: white;
                    padding: 16px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                    margin: 4px 2px;
                    transition-duration: 0.4s;
                    cursor: pointer;
                    border-radius: 12px;
                    }
                    .btn {
                                background-color: rgba(121, 114, 114, 0.589);
                                color: black;
                                border: 2px solid #7e7d7d;
                                }
                  .btn:hover {background-color: #e7e7e7;}
                  .form-group .form__input{
                    border: none;

		                      }
        </style>






<?php
$host = "host=127.0.0.1";
$port = "port=5433";
$dbname = "dbname=artgallery22";
$cre = "user=postgres password=dipsg1400" ;
$str="$host $port $dbname $cre";
$conn = pg_connect("$host $port $dbname $cre");
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    
   $sql = "insert into artist(aname,email,address,mobno,password) values('".$_POST['aname']."','".$_POST['email']."','".$_POST['address']."','".$_POST['mobno']."','".$_POST['password']."')";
    $ret = pg_query($conn, $sql);
    if($ret){
        
            /*echo "Thank You for registration to bigSplash...!!!<br>";
            echo "Data has been save successfully and securly<br>";
            header("Location: /pro_onlineart/artproj.html ");
            die();*/       
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Succesfully updted your data Now have a walk through our virtual art gallery');
            window.location.href='/ubuntu/artproj.html';
            </script>");
    }else{
        
	    echo ("<script LANGUAGE='JavaScript'>
            window.alert('Succesfully updated your data Now have a walk through our virtual art gallery');
            window.location.href='/ubuntu/artproj.html';
            </script>");
            echo "PLEASE TRY AGAIN";
    }
}
?>


        <center>
	<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
	<h2>Registration for Artist</h2>
<div class="user fm">
<header class="user__header">
        <h1 class="user__title">Registration form</h1>
    </header>
  <form method="post" class="form" onsubmit="return validateForm()" name="myForm" >
  
    <div class="form-group ">
      
      <input type="text" class="w3-input" id="name" placeholder="Enter name" name="aname">
    </div>
    <br>
    <div class="form-group ">
    
      <input type="email" class="w3-input" id="email" placeholder="Enter email" name="email" required>
    </div>
    <br>
    <div class="form-group">
     
      <input type="text" class="w3-input" id="address" placeholder="Enter address" name="address" required>
    </div>
    <br>
    <div class="form-group">
      
      <input type="varchar" class="w3-input" maxlength="10" id="mobno" placeholder="Enter mobile no" name="mobno" required>
    </div>
    <br>
    <div class="form-group">
      
      <input type="password" class="w3-input" id="password" placeholder="Enter password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and of 8 characters." required>
    </div>
    <br>
    <input onclick="myFunction()"  type="submit" name="submit" class="btn btn-primary" value="Submit">
    
  </form>
</div>
        </center>

<script>
function validateForm() {
	        var x = document.forms["myForm"]["aname"].value;
		        var y = document.forms["myForm"]["mobno"].value;
		  if (x == "") {
			      alert("Name must be filled out");
			          return false;
			        }
		  else if(!isNaN(x)){
			    alert("Name should be in characters");
			      return false;
			      }
		   if( document.myForm.email.value == "" ) {
			               alert( "Please provide your Email!" );
				                   document.myForm.EMail.focus() ;
				                   return false;
						      }
		        if(isNaN(y) || y == " "){
				                alert("Please check Mobile No.");
						                return false;
						        }
		
		////myInput.onkeyup = function() {
		//          // Validate lowercase letters
		         var lowerCaseLetters = /[a-z]/g;
		         if(document.myForm.password.value(lowerCaseLetters)) {
		         letter.classList.remove("invalid");
		         letter.classList.add("valid");
		         } else {
		         letter.classList.remove("valid");
		         letter.classList.add("invalid");
                         }
		// Validate capital letters
		         var upperCaseLetters = /[A-Z]/g;
		         if(document.myForm.password.value(upperCaseLetters)) {
		         capital.classList.remove("invalid");
		         capital.classList.add("valid");
		         } else {
		         capital.classList.remove("valid");
		         capital.classList.add("invalid");                                                                                                                                                    }
	        // Validate numbers
	                                                                                                                                                                             var numbers =/[0-9]/g;
			 if(document.myForm.password.value(numbers)) {
			number.classList.remove("invalid"); 
			number.classList.add("valid");} 
			else {
			number.classList.remove("invalid");
			number.classList.remove("valid");
			}
		
			if(document.myForm.password.value < 9) {
		        length.classList.remove("valid");
	                length.classList.add("invalid");
	                } else {
	                alert("Password should be of 8 characters");
                        }
              }





</script>





</body>
</html>
