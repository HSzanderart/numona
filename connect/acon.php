
<link rel="shortcut icon" type="img/x-icon" href="../pic/logo.jpg"/>

<?php 
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_Acon = "localhost";
$database_Acon = "numonashop";
$username_Acon = "root";
$password_Acon = "";
@$Acon = mysqli_connect($hostname_Acon, $username_Acon, $password_Acon, $database_Acon);

//or trigger_error(mysqli_error(),E_USER_ERROR); 
mysqli_set_charset($Acon, "UTF8");
//mysql_query("Set Names UTF8");
//error_reporting( error_reporting() & ~E_NOTICE );
//error_reporting(E_ALL & ~E_NOTICE);
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
//date($format);
?>


