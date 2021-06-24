</html>
<link href="events.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>
    <div class="evereg">
        <div class="row">
        <div class="column">
        <h3><i>Frieze New York 2021 </i>| <b>7th June,2021</b></h3></div>
        <div class="column"><a class="button" onclick="openForm()" href="#">Register!</a></div>
        <div class="form-popup" id="myForm">
            <form action="/action_page.php" class="form-container">
              <h1>Register</h1>
              <label for="fullname"><b>Full Name</b></label>
              <input type="text" placeholder="Enter Full Name" name="fullname" required>
 
              <label for="phoneno"><b>Phone Number</b></label>
              <input type="text" placeholder="Phone Number" name="phoneno" required>
 
              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="email" required>
          
              <label for="participants"><b>Participants Number</b></label>
              <input type="number" placeholder="Enter Participants Number" name="partno" required>
          
              <button type="submit" class="btn">Register</button>
              <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
          </div>          
        </div>  
    </div>
    <script>
        function openForm() {
          document.getElementById("myForm").style.display = "block";
        }
        
        function closeForm() {
          document.getElementById("myForm").style.display = "none";
        }
        </script> 
</body>
</html>
