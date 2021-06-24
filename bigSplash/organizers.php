<?php
$host = "localhost";
$port = "5433";
$dbname = "artgallery22";
$user = "postgres";
$password = "dipsg1400"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
if(isset($_POST['submit'])&&!empty($_POST['submit'])){
    
    $sql = "insert into organizers(oname,oevent,email,place,date,time,description) values('".$_POST['oname']."','".$_POST['oevent']."','".$_POST['email']."','".$_POST['place']."','".$_POST['date']."',
	'".$_POST['time']."','".$_POST['description']."')";
    $ret = pg_query($dbconn, $sql);
    if($ret){
        
            /*echo "Thank You for registration to bigSplash...!!!<br>";
            echo "Data has been save successfully and securly<br>";
            echo '<a href="login.php">Click here</a>';*/
			echo ("<script LANGUAGE='JavaScript'>
        window.alert('Successfully registered your event');
        </script>");
    }else{
        
         echo ("<script LANGUAGE='JavaScript'>
		         window.alert('Something went wrong. Please Try Again');
	         </script>");
    }
}
?>








<!DOCTYPE html>
<html>
    <head>
        <title>Event/Exhibition Organizers</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&display=swap" rel="stylesheet">
        <link href="organizers.css" rel="stylesheet">
    </head>
    <body>
        <div class="main">
            <p>Get excited soon for another event.</p>
        <h1>COMING SOON</h1>
        <hr>
        <p id="launch"></p>
        </div>
        <input type="checkbox" id="toggle">
<label for="toggle">See Upcoming Events</label>

<dialog>
  <p>
    
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nihil dolore similique quis qui ad blanditiis ex eum! Enim maiores ipsam fugiat officiis earum distinctio natus reprehenderit aliquam est iusto!
  </p>
    
  
  <label for="toggle">close overlay</label>
</dialog>
        


        <div class="container-contact100">

		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="POST" onsubmit="return validateForm()" name="myForm" >
				<span class="contact100-form-title">
					Create an event or exhibition
				</span>

				<div class="wrap-input100 validate-input" data-validate="Please enter Organizer Name">
					<input class="input100" type="text" name="oname" placeholder="Organizer Name">
					<span class="focus-input100"></span>
				</div>

                <div class="wrap-input100 validate-input" data-validate="Please enter Event Name">
					<input class="input100" type="text" name="oevent" placeholder="Event Name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Please enter your email: e@a.x">
					<input class="input100" type="email" name="email" placeholder="E-mail">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Please enter Event/Exhibition Place">
					<input class="input100" type="text" name="place" placeholder="Event/Exhibition Place">
					<span class="focus-input100"></span>
				</div>

                <div class="wrap-input100 validate-input" data-validate = "Please enter event/Exhibition Date">
					<input class="input100" type="text" name="date" placeholder="Event/Exhibition Date">
					<span class="focus-input100"></span>
				</div>

                <div class="wrap-input100 validate-input" data-validate = "Please enter event/exhibition time">
					<input class="input100" type="text" name="time" placeholder="Event/Exhibition Time">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Please enter your message">
					<textarea class="input100" name="description" placeholder="Description"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" name="submit" value="submit"  onclick="myFunction()">
						<span>
							<i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
							Create
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>










    </body>

    <script>
        var countDownDate = new Date("Jun 25, 2021 00:00:00").getTime();
        var x = setInterval(function(){
            var now = new Date().getTime();
            var distance = countDownDate - now;
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in an element with id="demo"
            document.getElementById("launch").innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";

            // If the count down is finished, write some text
            if (distance < 0) {
            clearInterval(x);
            document.getElementById("launch").innerHTML = "EXPIRED";
         }
	}, 1000);

	function validateForm() {
		                var x = document.forms["myForm"]["oname"].value;
				                var y = document.forms["myForm"]["oevent"].value;
				                  if (x == "") {
							                                alert("Name must be filled out");
											                                  return false;
											                                }
				                else if(!isNaN(x)){
							                            alert("Name should be in characters");
										                                  return false;
										                                  }
				                else if (y == "") {
							                              alert("Event name must be filled out");
										                                        return false;
										                                      }
				                else if(!isNaN(y)){
							                            alert("Event name should be in characters");
										                                  return false;
										                                  }
				                   if( document.myForm.email.value == "" ) {
							                                          alert( "Please provide your Email!" );
												                                                     document.myForm.email.focus() ;
												                                                     return false;
																		                                                           }


                                                    }



        </script>
</html>
