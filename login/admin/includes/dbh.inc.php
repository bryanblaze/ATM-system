<?php



$servername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="system";

$conn = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);

if(!$conn){
die("CONNECTION FAILED: ".mysqli_connect_error());

}
?>