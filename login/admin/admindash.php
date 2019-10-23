<?php
session_start();
 if($_SESSION['uid']){
     
?>
   
     <html lang="en">
       <head>
         <!-- Required meta tags -->
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
         <!-- Bootstrap CSS -->
         
     
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="css\bootstrap-grid.min.css">
         <link rel="stylesheet" href="css\bootstrap.min.css">
         <link rel="stylesheet" href="bryproo.css">
         
         <title >Admin Login</title>
         <link rel="shortcut icon" href="LOGO.jpg" type="image/icon type">
         
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
marquee{
background-color:red;
color:black;
font-size:20px;

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
     
<?php

require 'includes/dbh.inc.php';

$acctno=$_SESSION['acctnum'];

     

     $qry2="SELECT amount FROM atm_machines "; 

     $data2=mysqli_query($conn,$qry2);
     $qry3="SELECT branch FROM atm_machines "; 
     
     $data3=mysqli_query($conn,$qry3);
     
     $b2=mysqli_fetch_array($data3,MYSQLI_NUM);
     $b3=mysqli_fetch_array($data3,MYSQLI_NUM);
     $b4=mysqli_fetch_array($data3,MYSQLI_NUM);

     $r2=mysqli_fetch_array($data2,MYSQLI_NUM);
     $r3=mysqli_fetch_array($data2,MYSQLI_NUM);
     $r4=mysqli_fetch_array($data2,MYSQLI_NUM);
    
     if($r2[0]<10000 ){
     echo "<marquee>Money shortage in branch <b>".$b2[0]."</b> Please refill ASAP!!!</marquee>";
     }
     if( $r3[0]<10000 ){
       echo "<marquee>Money shortage in branch <b>".$b3[0]."</b> Please refill ASAP!!!</marquee>";
       }
       if($r4[0]<10000 ){
         echo "<marquee>Money shortage in branch <b>".$b4[0]."</b> Please refill ASAP!!!</marquee>";
         }
   


?>
            
     
     <div class="row">
     <div class="coly-1">
         <div class="col1-butts">
         <button class="withdrawal btn btn-danger"style=";margin-top:125px;margin-left:260px;padding:20px;"><a href="refill.php" style="color:white;" >Refill ATM</a></button>
         <br>
              
               <br>
               
            
             </div>
     
     </div>
     <div class="coly-2">
          <div class="logo" style="margin-top:95px;margin-left:90px;"><p id="custname" >WELCOME<br><?php echo $_SESSION['uid'];?></p></div>
          
     </div>
     <div>
     <button class="crac btn btn-warning" style="margin-top:155px; margin-left:190px;padding:20px;"><a href="show.php" style="color:black;">Show amount in atm machines</a></button>
     </div>
   </DIV>
   <br><br>
     <button class="transfer btn btn-success" style="margin-left:630px;margin-top:20px;padding:20px;" ><a href="alltrans.php"  style="color:white;">Display All Transactions</a></button>
             
         
         
            
 
       
     
     
     
     
         <!-- Optional JavaScript -->
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