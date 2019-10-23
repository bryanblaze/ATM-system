<?php
session_start();


?>

<html>
<head><title>Withdrawal</title>
<style>
body{
    margin:0px;
  font-family: 'Open Sans', sans-serif;
		background-color:white;
  word-spacing: 4px;
  letter-spacing: 4px;
}
 input{
     width:40%;

  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid red;
  border-radius: 4px;
  box-sizing: border-box;
 }

 h2{
     color:red;
     margin-left:500px;
 }
 .xyz{
    width:20%;

padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid red;
border-radius: 4px;
box-sizing: border-box;
color:green;
}  
 
</style>



</head>
<body style="background-color:#272727;margin:0px;">

<div style="background-color:#EEE9DB ;">
<a href="custdash.php" style="margin-left:30px; text-decoration:none;font-size:30px;"><<<</a><br>
<img src="logo.png" class="logo" id="image" style="width:350px; height:150px;margin-left:540px;">
</div>



<form action="withdraw.php" method="post" style="margin-left:500px;margin-top:100px; color:red;">

<h1>Enter amount to withdraw  </h1><input type="number" name="amount" ><br>
<select name="option" class="xyz">
<option value=1>Thane</option>
<option value=2>Borivali</option>
<option value=3>Vasai</option>
</select>

<input name="submit" type="submit" value="Withdraw" style="width:20%; background-color:red;color:white;">
</form>

<?php

if (isset($_POST['submit'])){
    require 'includes/dbh.inc.php';
    $amount=$_POST['amount'];
    $acctno=$_SESSION['acctnum'];
    $branch=$_POST['option'];

    if($branch==1){
        $b="thane";
    }elseif($branch==2){
     $b="borivali";
 }
 else{
     $b="vasai";
         }



         if(empty($_POST['amount'])  ){
            echo "<h2>Enter Amount please</h2>";
          exit();
      
            }


    if($amount>10000){
        echo"<h2>Amount more than 10k</h2>";
    }
    else{
   $qry1="SELECT amount FROM customer where acctno=$acctno";       
    $data1=mysqli_query($conn,$qry1);
    $r1=mysqli_fetch_array($data1);
    $qry2="SELECT amount FROM atm_machines where id=$branch"; 
    $data2=mysqli_query($conn,$qry2);
    $r2=mysqli_fetch_array($data2);
 

    if($r1['amount']>$amount && $r2['amount']>$amount ){
    $qry3="UPDATE customer set amount=amount-$amount where acctno=$acctno ";
    $data3=mysqli_query($conn,$qry3);
    $qry4="UPDATE atm_machines set amount=amount-$amount where id=$branch";
    $data4=mysqli_query($conn,$qry4);
    

    $qry5="INSERT into cust_trans(branch,acctno,t_type,amount) values('$b','$acctno','withdraw','$amount') ";
    mysqli_query($conn,$qry5);
    $qry6="INSERT into admin_trans(branch,acctno,t_type,amount) values('$b','$acctno','withdraw','$amount') ";
    mysqli_query($conn,$qry6);
    echo"<h2>Transaction Successful</h2>";
    }
    else if($r2['amount']<$amount){
    echo "<h2>Insufficent balance in atm</h2>";

     }
     else{
        echo "<h2>Insufficent balance in account</h2>";
     }
    } 
}

?>


</body>
</html>