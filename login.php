<?php
session_start();
$UserName=$_POST['txtUserName'];
$Password=$_POST['txtPassword'];
$UserType=$_POST['rdType'];
if($UserType=="Admin")
{
// Establish Connection with Database
$con = mysqli_connect("localhost","id19921889_jubas","SultanSyahputraY-123");
// Select Database
mysqli_select_db($con,"id19921889_sultan");
$sql = "select * from admin_master where UserName='".$UserName."' and Password='".$Password."'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
}
else
{
header("location:Admin/index.php");
} 
mysqli_close($con);
}
else if($UserType=="Customer")
{
// Establish Connection with Database
$con = mysqli_connect("localhost","id19921889_jubas","SultanSyahputraY-123");
// Select Database
mysqli_select_db($con,"id19921889_sultan");
$sql = "select * from customer_registration where UserName='".$UserName."' and Password='".$Password."' ";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong Username or Password");window.location=\'index.php\';</script>';
}
else
{
$_SESSION['ID']=$row['CustomerId'];
$_SESSION['Name']=$row['CustomerName'];
header("location:Customer/index.php");
} 
mysqli_close($con);
}

?>