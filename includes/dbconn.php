
<?php 

$host="localhost"; // Host name 
$username="yasharth"; // Mysql username 
$password="123456789"; // Mysql password 
$db_name="matrimony"; // Database name 

// Connect to server and select databse.
$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 

mysqli_select_db($conn,"$db_name")or die("cannot select DB");

?>