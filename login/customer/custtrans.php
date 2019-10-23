



<?php

session_start();
?>
<html>
<head><title>Customer Transactions</TITLE></head>
<style>
body{
    margin:0px;
  font-family: 'Open Sans', sans-serif;
		background-color:#272727;
  word-spacing: 4px;
  letter-spacing: 4px;
}
table{
margin-top:20px;

background-color:green;
color:white;
margin-left:200px;
border:1px solid black;
width:70%;
margin-bottom:60px;
}
table th{
    font-size:20px;
    color:black;
}
h2{
    text-align:center;
    color:green;
}
</style>


<body>

<div style="background-color:#EEE9DB ;">
<a href="custdash.php" style="margin-left:30px; text-decoration:none;font-size:30px;"><<<</a><br>
<img src="logo.png" class="logo" id="image" style="width:350px; height:150px;margin-left:540px;">
</div>
<h1 style="margin-left:290px;color:white;">Hello Mr.<?php echo $_SESSION['uid'];?> These are your transactions</h1>
<?php
require 'includes/dbh.inc.php';
$acctno=$_SESSION['acctnum'];
$query="SELECT * from cust_trans where acctno=$acctno";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0){
echo"<table border=1>";
echo "<tr>";
echo "<th>Type</th>";
echo  "<th>Amount</th>";
echo  "<th>Time and Date</th>";
echo  "<th>Branch</th>";
 while ($row=mysqli_fetch_array($result)){
     echo "<tr>";
     echo "<td>
     {$row['t_type']}</td>
     <td>
     {$row['amount']}</td>
     <td>
     {$row['t_time']}</td>
     <td>
     {$row['branch']}</td>";
     echo "</tr>";
 }
 echo "</table>";
}
else{
    echo "<h2>no transactions done</h2>";
}

mysqli_close($conn);
 ?>
 </body>
 </html>



