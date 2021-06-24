<?php
	session_start();
	//user needs to login to checkout
	$_SESSION['message'] = 'Your order has been successfully placed..!!!';
	//header('location: /ubuntu/artproj.html');
	echo ("<script LANGUAGE='JavaScript'>
            window.alert('Your order has been successfully placed..!!!');
            window.location.href='/ubuntu/artproj.html';
            </script>");
?>
