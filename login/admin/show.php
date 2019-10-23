<?php
session_start();
?>
<html>
<head>
<title>Show amount in atm</title>
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
margin-left:420px;
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
<a href="admindash.php" style="margin-left:30px; text-decoration:none;font-size:30px;"><<<</a><br>
<img src="logo.png" class="logo" id="image" style="width:350px; height:150px;margin-left:540px;">
</div>




 <form action="show.php" method="post">
  <h1>SELECT BRANCH TO DISPLAY AMOUNT</h1><br>
<select name="option" class="xyz">
<option value=1>Thane</option>
<option value=2>Borivali</option>
<option value=3>Vasai</option>
</select>
<input name="submit" type="submit" value="SHOW" style="background-color:yellow;color:Black;">
</form>
</body>
</html>
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

         $qry2="SELECT amount FROM atm_machines where id=$branch"; 
         $data2=mysqli_query($conn,$qry2);
         $r2=mysqli_fetch_array($data2);
         echo "<h2>Amount in ATM ".$b." is ". $r2['amount']."</h2>";


        }
?>

