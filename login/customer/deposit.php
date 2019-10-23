<?php session_start();
?>

<html>
<head><title>Deposit</title>

<style>
body{
    margin:0px;
  font-family: 'Open Sans', sans-serif;
		background-color:#272727;
  word-spacing: 4px;
  letter-spacing: 4px;
  color:white;
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
     color:slategrey;
     margin-left:20px;
 }
 .xyz{
    width:20%;

padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid red;
border-radius: 4px;
box-sizing: border-box;
color:#272727;
background-color:silver;
}  
 
 form{
    margin-left:540px;
margin-top:100px;
 }

</style>

</head>
<body>
<div style="background-color:#EEE9DB ;">
<a href="custdash.php" style="margin-left:30px; text-decoration:none;font-size:30px;"><<<</a><br>
<img src="logo.png" class="logo" id="image" style="width:350px; height:150px;margin-left:540px;">
</div>
<form action="deposit.php" method="post">

<h1>Enter amount to add </h1><input name="amount" type="number" ><br>
<select name="option" class="xyz">
<option value=1>Thane</option>
<option value=2>Borivali</option>
<option value=3>Vasai</option>
</select>
<input name="submit" type="submit" value="Deposit" style="background-color:slategrey;color:white;  border: 1px solid ;width:20%;">


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

         $qry2="SELECT amount FROM atm_machines where id=$branch"; 
         $data2=mysqli_query($conn,$qry2);
         $r2=mysqli_fetch_array($data2);
         if(empty($_POST['amount'])  ){
            echo "<h2>Enter Amount please</h2>";
          exit();
      
            }
if($r2['amount']>$amount)
{
   $qry="UPDATE customer set amount=amount+$amount where acctno=$acctno "; 
   $data=mysqli_query($conn,$qry);
   $qry5="INSERT into cust_trans(branch,acctno,t_type,amount) values('$b','$acctno','deposit','$amount') ";
   mysqli_query($conn,$qry5);
   $qry6="INSERT into admin_trans(branch,acctno,t_type,amount) values('$b','$acctno','deposit','$amount') ";
   mysqli_query($conn,$qry6);
   echo"<h2>Transaction Successful</h2>";
}
else{
    echo "<h2>no balance in atm</h2>";
} 
}

?>

</form>
</body>
</html>