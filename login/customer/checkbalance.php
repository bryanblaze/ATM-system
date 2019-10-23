<?php
session_start();
require 'includes/dbh.inc.php';

$acctno=$_SESSION['acctnum'];

$qry2="SELECT amount FROM customer where acctno=$acctno";
       
   
    $data2=mysqli_query($conn,$qry2);
    $r=mysqli_fetch_array($data2);
    ?>
<html>
<head><title>Check Balance</title>
<style>
body{
    margin:0px;
  font-family: 'Open Sans', sans-serif;
		background-color:#272727;
  word-spacing: 4px;
  letter-spacing: 4px;
}
h1{
    color:white;
    margin-left:300px;
    margin-top:80px;
}
p{
    color:Purple;
    font-size:40px;
    margin-left:360px;
}
</style>


</head>
<body >
<div style="background-color:#EEE9DB ;">
<a href="custdash.php" style="margin-left:30px; text-decoration:none;font-size:30px;"><<<</a><br>
<img src="logo.png" class="logo" id="image" style="width:350px; height:150px;margin-left:540px;">
</div>

<h1 style="margin-left:220px;">Welcome <?php echo($_SESSION['uid']);?> , The current balance in your account is <?php echo "<p>"."Rs."." ".$r['amount']."</p>";?></h1>



</body>
</html>




