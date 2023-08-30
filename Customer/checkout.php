<?php
	session_start();
    // Establish Connection with Database
    $con = mysqli_connect("localhost","id19921889_jubas","SultanSyahputraY-123");
    // Select Database
    mysqli_select_db($con,"id19921889_sultan");
	// Specify the query to Insert Record
	$sql = "INSERT INTO `shopping_cart_final` (`CustomerId`, `ItemName`, `Quantity`, `Price`, `Total`, `OrderDate`)  SELECT `CustomerId`, `ItemName`, `Quantity`, `Price`, `Total`, `OrderDate` FROM `shopping_cart` where CustomerId=".$_SESSION['ID']."";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	$con = mysqli_connect("localhost","id19921889_jubas","SultanSyahputraY-123");
	// Select Database
	mysqli_select_db($con,"id19921889_sultan");
	// Specify the query to Insert Record
	$sql = "delete from shopping_cart where CustomerId=".$_SESSION['ID']."";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	
	echo '<script type="text/javascript">alert("Thank You For Your order");window.location=\'Cart.php\';</script>';
	
	?>