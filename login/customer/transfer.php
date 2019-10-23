<?php


session_start();
require 'includes/dbh.inc.php';

?>
<html>
<head>
<title>Transfer</title>
<style>

body{
    margin:0px;
  font-family: 'Open Sans', sans-serif;
		background-color:#272727;
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
background-color:#272727;
}  
 form{
margin-left:540px;
margin-top:100px;
 }
 .xyz{
    width:20%;

padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid red;
border-radius: 4px;
box-sizing: border-box;
color:yellow;
}  
h1{
  color:yellow;
}
h2{
  color:yellow;
  margin-left:540px;
}

</style>
</head>
<body>

<div style="background-color:#EEE9DB ;">
<a href="custdash.php" style="margin-left:30px; text-decoration:none;font-size:30px;"><<<</a><br>
<img src="logo.png" class="logo" id="image" style="width:350px; height:150px;margin-left:540px;">
</div>


<form action="transfer.php" method="post">
<h1>Enter acctno to transfer</h1><input name="transfer" type="number" >
<select name="option" class="xyz">
<option value=1>Thane</option>
<option value=2>Borivali</option>
<option value=3>Vasai</option>
</select>
<h1>Enter amount to add </h1><input name="amount" type="number" ><br>
<input name="submit" type="submit" value="Transfer" style="background-color:yellow;color:Black;">
</form>
</body>
</html>
<?php
if (isset($_POST['submit'])){
    require 'includes/dbh.inc.php';
    $amount=$_POST['amount'];
    $acctno=$_SESSION['acctnum'];
    $transfer=$_POST['transfer'];
    $branch=$_POST['option'];
    $trans=$_POST['transfer'];
if($branch==1){
  $b="thane";
}elseif($branch==2){
$b="borivali";
}
else{
$b="vasai";
   }


   if(empty($_POST['amount']) ){
    echo "<h2>Enter Amount please</h2>";
  exit();

    }
    if(empty($_POST['transfer']) ){
      echo "<h2>Enter Account no to transfer</h2>";
    exit();
  
      }
if($acctno==$transfer){

    echo"<h2>Account No Same as The user</h2>";
}

else{
   
    $sql=mysqli_query($conn,"SELECT acctno FROM customer where acctno=$trans");
  if(mysqli_num_rows($sql)===0){
    echo"<h2>Invalid Account No</h2>";
  }

  
  
else{

$qryx="SELECT amount FROM atm_machines where id=$branch"; 
    $datax=mysqli_query($conn,$qryx);
    $rx=mysqli_fetch_array($datax);
 




    $qry1="SELECT amount FROM customer where acctno=$acctno";
    $data1=mysqli_query($conn,$qry1);
    $r=mysqli_fetch_array($data1);
    $qry2="SELECT acctno FROM customer where acctno=$transfer";
    $data2=mysqli_query($conn,$qry2);
    if($r['amount']>$amount && $rx['amount']>$amount ){
    $qry3="UPDATE customer set amount=amount-$amount where acctno=$acctno ";
    $data3=mysqli_query($conn,$qry3);
    $qry4="UPDATE customer set amount=amount+$amount where acctno=$transfer ";
    $data4=mysqli_query($conn,$qry4);



    $qry5="INSERT into cust_trans(branch,acctno,t_type,amount) values('$b','$acctno','transfer','$amount') ";
    mysqli_query($conn,$qry5);
    $qry6="INSERT into admin_trans(branch,acctno,t_type,amount) values('$b','$acctno','transfer','$amount') ";
    mysqli_query($conn,$qry6);


   
    echo"<h2>Transaction Successful</h2>";
    }
  else  {

    echo"<h2>Insufficient Balance</h2>";
    
  }
}
}  
}
?>