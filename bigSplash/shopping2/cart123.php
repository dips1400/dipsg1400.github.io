<!DOCTYPE html>
<html>
<head>
<title>bigSplash-Online_Shopping_of_Painting</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&display=swap" rel="stylesheet">
  <script src="jquery-3.5.1.min.js"></script>
</head>

<body class="container">
<br><br>
<h2 class="text-center mb-5" style="font-family: 'Lobster Two', cursive; color:#a7c4bc">bigSplash Welcomes you to Online Art Gallery Shopping</h2>

<div class="container">
<!--header menu-->
<nav class="navbar navbar-default" role="navigation">

<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Menu</span>
<span class="glyphicon glyphicon-menu-hamburger"></span>
</button>
<a class="navbar-brand" href="/pro_onlineart/artproj.html">bigSplash</a>
</div>

<!--shopping cart with total amount of cart-->
<div id="navbar-cart" class="navbar-collapse collapse">
<ul class="nav navbar-nav">
<li>
<a id="cart-popover" class="btn" data-placement="bottom" title="Shopping cart">
<span class="glyphicon glyphicon-shopping-cart"></span>
<span class="badge"></span>
<span class="total_price">$0.00</span>
</a>
</li>
</ul>
</div>


</div>
</nav>

<div id="popover_content_wrapper" style="display: none;">
<span id="cart_details"></span>
<div align="right">
<a href="#" class="btn btn-primary" id="chech_out_cart">
<span class="gylphicon glyphicon-shopping-cart"></span>Check out
</a>
<a href="#" class="btn btn-default" id="clear_cart">
<span class="glyphicon glyphicon-trash"></span>Clear</a>
</div>
</div>

<div class="display_item">

</div>

</div>


</body>
</html>

<script>
$(document).ready(function(){

    function load_product(){
      $.ajax({
        url:"fetch_item.php",
        method:"POST",
        success:function(data){
          $('#display_item').html(data);
        }
      });
    }
});


</script>