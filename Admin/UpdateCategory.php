<?php
$Id = $_POST['txtId'];
$Name=$_POST['txtName'];
$Desc=$_POST['txtDesc'];
// Establish Connection with Database
$con = mysqli_connect("localhost","id19921889_jubas","SultanSyahputraY-123");
// Select Database
mysqli_select_db($con,"id19921889_sultan");
// Specify the query to Update Record
$sql = "Update category_master set CategoryName='".$Name."',Description='".$Desc."' where CategoryId=".$Id."";
// Execute query
mysqli_query($con,$sql);
// Close The Connection
mysqli_close($con);
echo '<script type="text/javascript">alert("Category Updated Succesfully");window.location=\'Category.php\';</script>';
?>