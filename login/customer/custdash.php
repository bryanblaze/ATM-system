<?php
session_start();
 if($_SESSION['uid']){
     
?>

     <html lang="en">
       <head>
         <!-- Required meta tags -->
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
    
         
     
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="css\bootstrap-grid.min.css">
         <link rel="stylesheet" href="css\bootstrap.min.css">
         <link rel="stylesheet" href="bryproo.css">
         
         <title >Customer Login</title>
         <link rel="shortcut icon" href="LOGO.png" type="image/icon type">
         
     
         <style>
           body{
    margin:0px;
  font-family: 'Open Sans', sans-serif;
		background-color:white;
  word-spacing: 4px;
  letter-spacing: 4px;
}
   button:hover{
    transform: perspective(500px) rotateY(30deg) rotateX(30deg) rotateZ(0deg);
    box-shadow:-30px 30px  50px white;
}
   </style>
     
       </head>
       <body style="background-color:#272727;">
     
       <div style="background-color:#EEE9DB ;">
  <div class="row">
  <div class="col" style="margin-top:20px; ">
<a href="#" style="margin-left:30px; text-decoration:none;font-size:25px;color:blue;">Help?</a>
</div>
<div class="col">
<img src="logo.png" class="logo" id="image" style="width:350px; height:150px;margin-left:60px;margin-top:0px;padding:2px;"></div>
<div class="col">
<a href="includes/logout.php" style="margin-left:30px; text-decoration:none;"><p style="color:green;float:right;font-size:25px;margin-right:30px;margin-top:20px;">Logout</p></a>
</div>

</div>
</div>


     
     
     <div class="row">
     <div class="coly-1">
         <div class="col1-butts" style="margin-left:70px;margin-top:50px;">
         <button class="withdrawal btn btn-danger"><a href="withdraw.php" style="color:white;">Withdraw Money</a></button>
        <br>
               <br>
               <button class="transfer btn btn-warning"><a href="transfer.php " style="color:white;">Transfer</a></button>
               <br>
            
             </div>
     
     </div>
     <div class="coly-2">
          <div class="logo" style="margin-top:50px;margin-left:100px;" ><p id="custname">Welcome<br><?php echo $_SESSION['uid'];?></p></div>
          
     </div>
     
     <div class="coly-3" style="margin-top:70px;">
     
         
         
         <button class="crac btn btn-success"><a href="custtrans.php" STYLE="color:white;">Generate my transactions</a></button> <br>
         <button class="bai btn btn-dark" style="margin-top:70px;"><a href="deposit.php">Deposit</a></button>  <br>
          
     </div>
     <div style="margin-left:660px;margin-top:0px;">
     <button style="padding:20px;"><a href="checkbalance.php" >Check Balance</a></button>     
     </div>
     
     
    
         <!-- jQuery first, then Popper.js, then Bootstrap JS -->
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
         <script src="js\bootstrap.min.js"></script> 
         </body>
     </html>


 <?php
    }
 else{
     echo"error";
 }
 ?>