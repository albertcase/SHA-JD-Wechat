<?php
	if ( isset($_SESSION["wishlist"]) ) {
		array_splice($_SESSION["wishlist"],$_GET['keyproduct'] ,'1');
		return true;
	} else
		return false;
?>