<?php
$servername='php-sreps.crcenrpk8ost.ap-southeast-2.rds.amazonaws.com';
$username='admin';
$password='Unicornempire';
$dbname = "php_db";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>