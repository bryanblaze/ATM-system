<br>
<style>
	body { 
  margin:0px;
  font-family: 'Open Sans', sans-serif;
		background-color:white;
  word-spacing: 4px;
  letter-spacing: 4px;
}

input {
  
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid red;
  border-radius: 4px;
  box-sizing: border-box;
}


</style>
<a href="login.php" style="margin-left:30px; text-decoration:none;text-size:40px;"><<<</a>
<h1 style="text-align:center;">Customer Signup</h1><BR>
<div style="margin-left:650px;">
<form  action="includes/custsignup.inc.php" method="post"><br>
    <input type="text" placeholder=" Enter AcctNo" name="aid"><br>
    <input type="text" placeholder=" Enter Username" name="uid"><br>
    <input type="text" placeholder=" Enter Email" name="email"><br>
	<input type="password" placeholder=" Enter Password" name="password"><br>
  <input type="password" placeholder="Repeat Password" name="reptpassword"><br>
  <br>
  <button class="btn" type="submit" name="create" style="padding:10px;background-color:yellowgreen;color:white;margin-left:60px;">Create</button><br>
</form>
<div>


