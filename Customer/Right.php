
<div id="right-col">
    

    <div class="scroll">
       <ul class="side">
           <?php
// Establish Connection with Database
$con = mysqli_connect("localhost","id19921889_jubas","SultanSyahputraY-123");
// Select Database
mysqli_select_db($con,"id19921889_sultan");
// Specify the query to execute
$sql = "select * from category_master";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$Id=$row['CategoryId'];
$CategoryName=$row['CategoryName'];


?>
     <li><a href="Products.php?CategoryId=<?php echo $Id;?>"><?php echo $CategoryName;?></a></li>
    
    <?php
	}
// Close the connection
mysqli_close($con);
?>
    </ul>
    
  </div>
   
    <ul class="side">
      <table width="100%" height="122" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><div align="center"><a href="checkout.php">Procced To Checkout</a></div></td>
        </tr>
        <tr>
          <td><div align="center"><img src="img/checkout.png" width="32" height="32" /></div></td>
        </tr>
        <tr>
          <td><div align="center"><a href="History.php">Order History</a></div></td>
        </tr>
        <tr>
          <td><div align="center"><img src="img/order.png" width="32" height="32" /></div></td>
        </tr>
      </table>
  </ul>
   
</div>
 