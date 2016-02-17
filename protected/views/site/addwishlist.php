<?php
	if ( !isset($_SESSION["wishlist"]) )
		$_SESSION["wishlist"] = array( array("categorie" => $_GET['cat'] , "produit" => $_GET['prod'] ) );
	else
		array_push($_SESSION["wishlist"], array("categorie" => $_GET['cat'] , "produit" => $_GET['prod'] ) );
	return true;
?>