<?php
$host = "localhost";
$port = "5433";
$dbname = "artgallery22";
$user = "postgres";
$password = "dipsg1400"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    
    $sql = "insert into visitor(vname,vemail,vaddress,vmobile,vpassword) values('".$_POST['vname']."','".$_POST['vemail']."','".$_POST['vaddress']."','".$_POST['vmobile']."','".$_POST['vpassword']."')";
    $ret = pg_query($dbconn, $sql);
    if($ret){
        
            /*echo "Thank You for registration to bigSplash...!!!<br>";
            echo "Data has been save successfully and securly<br>";
            header("Location: /pro_onlineart/artproj.html ");
            die();*/       
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Succesfully updated your data Now have a walk through our virtual art gallery');
            window.location.href='/ubuntu/artproj.html';
            </script>");
    }else{
        
            echo "Something Went Wrong";
            echo "PLEASE TRY AGAIN";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Visitor login - bigSplash </title>
  <meta name="keywords" content="PHP,PostgreSQL,Insert,Login">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  <link href="/artistallcode/register.css" rel="stylesheet">
  <style>
            body{
                background-color: #f69e7b;
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
                  .form-group .w3-input{
                    border: none;
                    font-size: medium;
                    line-height: 1cm;
                    border-bottom: 0.6px solid #7e7d7d;
                  }
                  .form .form-group .w3-input{
                    background-color: none;
                  }
        </style>
</head>
<body>
<center>
<div class="user">
<header class="user__header">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
        <h1 class="user__title">Registration form for visitor</h1>
    </header>
    
  <!--<form method="post" class="fm">
  
    <div class="form-group">
      <label for="name">Name:</label><br>
      <input type="text" class="form__input" id="name" placeholder="Enter name" name="name" required>
    </div>
    
    <br>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form__input" id="email" placeholder="Enter email" name="email" required>
    </div>
    
    <br>
    <div class="form-group">
      <label for="mobno">Mobile No:</label>
      <input type="number" class="form__input" maxlength="8" id="mobileno" placeholder="Enter Mobile Number" name="mobno" required>
    </div>
    
    <br>
    <div class="form-group">
      <label for="add">Address:</label>
      <input type="varchar" class="form__input"  id="address" placeholder="Enter your address" name="address" required>
    </div>

    <br>
    <div class="form-group">
      <label for="pwd">Password:</label><br>
      <input type="password" class="form__input" id="password" placeholder="Enter password" name="password" required>
    </div>
    <br>
    <input  onclick="myFunction()"  type="submit" name="submit" class="btn btn-primary" value="submit">
    
  </form>
</div>-->
<form method="post" class="fm" onsubmit="return validateForm()" name="myForm" >
  
    <div class="form-group ">
      
      <input type="text" class="w3-input" id="name" placeholder="Enter name" name="vname" >
    </div>
    <br>
    <div class="form-group ">
    
      <input type="email" class="w3-input" id="email" placeholder="Enter email" name="vemail" required>
    </div>
    <br>
    <div class="form-group">
     
      <input type="text" class="w3-input"  id="address" placeholder="Enter address" name="vaddress" required>
    </div>
    <br>
    <div class="form-group">
      
      <input type="varchar" class="w3-input" maxlength="10" id="mobileno" placeholder="Enter mobile no" name="vmobile" required>
    </div>
    <br>
    <div class="form-group">
      
      <input type="password" class="w3-input" id="password" placeholder="Enter password" name="vpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and of 8 characters."  required>
    </div>
    <br>
    <input onclick="myFunction()"  type="submit" name="submit" class="btn btn-primary" value="Submit">
    
  </form>
</div>

                </center>


<script>
function validateForm() {
	var x = document.forms["myForm"]["vname"].value;
	var y = document.forms["myForm"]["vmobile"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  else if(!isNaN(x)){
  alert("Name should be in characters");
  return false;
  }
   if( document.myForm.vemail.value == "" ) {
            alert( "Please provide your Email!" );
            document.myForm.EMail.focus() ;
            return false;
   }
	if(isNaN(y) || y == " "){
		alert("Please check Mobile No.");
		return false;
	}
//}
//myInput.onkeyup = function() {
	  // Validate lowercase letters
      var lowerCaseLetters = /[a-z]/g;
     if(document.myForm.vpassword.value(lowerCaseLetters)) {  
       letter.classList.remove("invalid");
       letter.classList.add("valid");
	
       } else {
         letter.classList.remove("valid");
         letter.classList.add("invalid");
       }
                          
         // Validate capital letters
         var upperCaseLetters = /[A-Z]/g;
         if(document.myForm.vpassword.value(upperCaseLetters)) {  
         capital.classList.remove("invalid");
         capital.classList.add("valid");
         } else {
         capital.classList.remove("valid");
         capital.classList.add("invalid");
         }
         // Validate numbers
         var numbers = /[0-9]/g;
         if(document.myForm.vpassword.value(numbers)) {  
         number.classList.remove("invalid");
         number.classList.add("valid");
         } else {
         number.classList.remove("valid");
         number.classList.add("invalid");
	 }
	 // Validate length
        if(document.myForm.vpassword.value < 9) {
        length.classList.remove("valid");
        length.classList.add("invalid");
           } else {
         alert("Password should be of 8 characters");
         }
         }
                                                                                




</script>

</body>
</html>
