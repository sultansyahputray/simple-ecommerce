<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_shop = "localhost";
$database_shop = "id19921889_sultan";
$username_shop = "id19921889_jubas";
$password_shop = "SultanSyahputraY-123";
$shop = mysqli_connect($hostname_shop, $username_shop, $password_shop) or trigger_error(mysqli_error(),E_USER_ERROR); 
?>