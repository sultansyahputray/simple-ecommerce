<?php
	session_start();
	$Id=$_GET['Id'];
// Establish Connection with Database
$con = mysqli_connect("localhost","id19921889_jubas","SultanSyahputraY-123");
// Select Database
mysqli_select_db($con,"id19921889_sultan");
// Specify the query to execute
$sql = "select * from item_master where ItemId=".$Id."";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$Id=$row['ItemId'];
$Name=$row['ItemName'];
$Description=$row['Description'];
$Size=$row['Size'];
$Price=$row['Price'];
$Discount=$row['Discount'];
$Total=$row['Total'];
$Image=$row['Image'];
}
	$Qty=$_POST['txtQty'];
	$CID=$_SESSION['ID'];
	$ODate= date('y/m/d');
	$Net=$Total*$Qty;
	mysqli_close ($con);
	
	
// Establish Connection with Database
$con = mysqli_connect("localhost","id19921889_jubas","SultanSyahputraY-123");
// Select Database
mysqli_select_db($con,"id19921889_sultan");
	// Specify the query to Insert Record
	$sql = "insert into shopping_cart	(CustomerId,ItemName,Quantity,Price,Total,OrderDate) values('".$CID."','".$Name."','".$Qty."','".$Total."','".$Net."','".$ODate."')";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("Item Added To the cart");window.location=\'Products.php\';</script>';

?>