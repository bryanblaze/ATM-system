<?php 
session_start();

  ?>
  <html>
  <head><title>Refill</title>
  
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
<a href="admindash.php" style="margin-left:30px; text-decoration:none;font-size:30px;"><<<</a><br>
<img src="logo.png" class="logo" id="image" style="width:350px; height:150px;margin-left:540px;">
</div>


  <form action="refill.php" method="post" style="margin-left:500px;margin-top:100px; color:red;">
  <h1>SELECT BRANCH</h1><br>
<select name="option" class="xyz">
<option value=1>Thane</option>
<option value=2>Borivali</option>
<option value=3>Vasai</option>
</select>

<input name="submit" type="submit" value="Fill" style="width:20%; background-color:red;color:white;">
</body>
</form>
<?php
if (isset($_POST['submit'])){
    require 'includes/dbh.inc.php';
    $branch=$_POST['option'];
    $acctno=$_SESSION['acctnum'];
    if($branch==1){
        $b="thane";
    }elseif($branch==2){
     $b="borivali";
 }
 else{
     $b="vasai";
         }
    $query1="UPDATE atm_machines set amount='1000000' where id=$branch";
    mysqli_query($conn,$query1);
    $qry2="INSERT into admin_trans(branch,acctno,t_type) values('$b','$acctno','refilled') ";
    mysqli_query($conn,$qry2);
    echo"<h2>Refill Successful</h2>";}

?>