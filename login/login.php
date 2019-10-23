<?php
session_start();
?>

<html>
<head>
	<title>BOA Atm Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<style>
	.hideone{
		display: none;
		
	}
	.hidetwo{
		display:none;
	}

	body { 
  margin:0px;
  font-family: 'Open Sans', sans-serif;
		background-color:white;
  word-spacing: 4px;
  letter-spacing: 4px;
}

input {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid red;
  border-radius: 4px;
  box-sizing: border-box;
}


	</style>
</head>
<body >





<div style="background-color:#EEE9DB ;">
<a href="../index.html" style="margin-left:30px; text-decoration:none;font-size:20px;"><<<</a><br>
<img src="logo.png" class="logo" id="image" style="width:350px; height:150px;margin-left:540px;">
</div>



	
	
	<div class="container" style="margin-left:140px; padding:0px;">
<div class="row">
	<div class="col"></div>
	
	<div class="col-1">
	<br><br>
		<img src="a.jpg" style="width:280px; height:180px;"><br><br>
	<input id="but1" class="btn1" type="button" name="" value="Admin" style="margin-left:100px;">
</div>
<div class="col-1">
<img src="b.jpg" style="width:350px; height:230px;margin-top:5px;">
<input id="but2" class="btn2" type="button" name="" value="Customer" style="margin-left:100px;">
</div>
<div class="col"></div>
</div>


<div id="row">
	

	<div class="col-1">
    
<form action="includes/adminlogin.inc.php" method="post" class="pos1" name="admin">
	
		<input  id="hide1" class="hideone position2" type="text" placeholder="Enter acct Number" name="paid"><br>
		<input  id="hide2" class="hideone position2" type="password" placeholder="Password" name="ppassword"><br>
        <button id="bta" class="hideone position " name="adminlogin" style="padding:10px;background-color:#272727;color:white;">Login</button>
   <!--  <button id="btxa" class="hideone position "><a href="asignup.php" style="padding:10px; color:red;
		back">Create account?</a></button> -->
</form>
</form>
</div>

<div class="col-1">
<form action="includes/custlogin.inc.php" method="post" class="pos2" name="customer">

		<input id="hide3" class="hidetwo position"  type="text" placeholder="Enter acct no" name="caid"><br>
        <input id="hide4" class="hidetwo position" type="password" placeholder="Password" name="cpassword"><br>
        <button id="btb" class="hidetwo position " type="submit" name="custlogin" style="padding:10px;background-color:#272727;color:white;">Login</button>
        <button id="btxb"  class="hidetwo position "><a href="csignup.php" style="padding:10px; color:red;
	">Create account?</a></button> 
	
</form>
</div>
<div class="col"></div>
</div>
	<script>
	var but1=document.getElementById('but1');
	
		but1.addEventListener("mouseover",function(){
			
			var inpt1=document.getElementById('hide1');
			var inpt2=document.getElementById('hide2');
            var bta=document.getElementById('bta');
            var btxa=document.getElementById('btxa');
			inpt1.classList.toggle("hideone");
			inpt2.classList.toggle("hideone");
            bta.classList.toggle("hideone");
            btxa.classList.toggle("hideone");
		});
		var but2=document.getElementById('but2');
		but2.addEventListener("mouseover",function(){
			
			var inpt3=document.querySelector("#hide3");
			var inpt4=document.querySelector("#hide4");
            var btb=document.getElementById('btb');
            var btxb=document.getElementById('btxb');
			inpt3.classList.toggle("hidetwo");
			inpt4.classList.toggle("hidetwo");
            btb.classList.toggle("hidetwo");
            btxb.classList.toggle("hidetwo");
		});
		



	</script>

</div>

</body>
</html>