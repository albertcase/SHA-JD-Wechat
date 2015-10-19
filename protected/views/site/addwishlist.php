<?php
	if ( !isset($_SESSION["wishlist"]) )
		$_SESSION["wishlist"] = array($_GET['idproduct']);
	else
		array_push($_SESSION["wishlist"], $_GET['idproduct']);
	return true;
?>