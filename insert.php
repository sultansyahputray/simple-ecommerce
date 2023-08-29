<?php
	$Name=$_POST['txtName'];
	$Address=$_POST['txtAddress'];
	$City=$_POST['cmbCity'];
	
	$Email=$_POST['txtEmail'];
	$Mobile=$_POST['txtMobile'];
	$Gender=$_POST['rdGender'];
	$BirthDate=$_POST['txtDate'];
	
	$UserName=$_POST['txtUserName'];
	$Password=$_POST['txtPassword'];
	
	
	
	
// Establish Connection with Database
$con = mysqli_connect("localhost","id19921889_jubas","SultanSyahputraY-123");
// Select Database
mysqli_select_db($con,"id19921889_sultan");
	// Specify the query to Insert Record
	$sql = "insert into customer_registration(CustomerName,Address,Province,Email,Mobile,Gender,BirthDate,UserName,Password) values('".$Name."','".$Address."','".$City."','".$Email."',".$Mobile.",'".$Gender."','".$BirthDate."','".$UserName."','".$Password."')";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	
	echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'index.php\';</script>';
?>