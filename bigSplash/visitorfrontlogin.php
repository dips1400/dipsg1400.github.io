<!DOCTYPE html>
<html>
    <head>
        <title>
            Login page bigSplash
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
        <link href="login.css" rel="stylesheet" type="text/css">
        <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    </head>
    <body>




           
<!--for visitor-->

<div class="visitor">
            Are you an visitor ?<br>
            Please login here..<br><br>
        <button onclick="document.getElementById('vlogin').style.display='block'" style="width:auto;">Login</button><br><br>
        Don't have account ?<br><br>
        <a href="/ubuntu/visitorregis.php" class="signuplink">Sign up</a>


    <div id="vlogin" class="modal">
  
     <form class="modal-content animate" method="GET" action="visitorlogin.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('vlogin').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="paintingsf/loginlogo.svg" alt="Avatar" class="avatar" width="150px" height="150px">
    </div>

    <div class="container">
      <label for="uname"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="vemail" required >

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="vpassword" required >
        
      <button onclick="myFunction()" type="submit" name="=Submit">Login</button><br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container">
      <button type="button" onclick="document.getElementById('vlogin').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
    </form>
    </div>
    </div>

<script>
// Get the modal
var modal = document.getElementById('vlogin');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}









</script>        


    </body>
</html>
