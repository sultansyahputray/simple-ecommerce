<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$Id=$_GET['OfferId'];
// Establish Connection with Database
$con = mysqli_connect("localhost","id19921889_jubas","SultanSyahputraY-123");
// Select Database
mysqli_select_db($con,"id19921889_sultan");
	// Specify the query to Insert Record
	$sql = "delete from offer_master where OfferId='".$Id."'";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("Offer Deleted Succesfully");window.location=\'Offers.php\';</script>';

?>
</body>
</html>
