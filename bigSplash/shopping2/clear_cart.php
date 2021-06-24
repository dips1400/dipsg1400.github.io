<?php
	session_start();
	unset($_SESSION['cart']);
	//$_SESSION['message'] = 'Cart cleared successfully';
	$_SESSION['message'] = "<script LANGUAGE='JavaScript'>
			window.alert('Successfully cleared your cart');
		</script>";
	header('location: index123.php');
?>
