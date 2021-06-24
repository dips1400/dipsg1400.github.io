<?php
	session_start();
 
	//remove the id from our cart array
	$key = array_search($_GET['id'], $_SESSION['cart']);	
	unset($_SESSION['cart'][$key]);
 
	unset($_SESSION['qty_array'][$_GET['index']]);
	//rearrange array after unset
	$_SESSION['qty_array'] = array_values($_SESSION['qty_array']);
 
	//$_SESSION['message'] = "Product deleted from cart";
	$_SESSION['message'] = "<script LANGUAGE='JavaScript'>
			window.alert('Successfully deleted product from cart');
		</script>";
	header('location: view_cart.php');
?>
