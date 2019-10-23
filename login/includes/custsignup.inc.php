<?php
if (isset($_POST['create'])){
    require 'dbh.inc.php';
 
    $acctnumber=$_POST['aid'];
    $username=$_POST['uid'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $passwordrepeat=$_POST['reptpassword'];
   if(!filter_var($acctnumber, FILTER_VALIDATE_INT) ){
        header("Location: ../csignup.php?error=invalidacctnumber"); 
        exit();
    }
   else if(empty($acctnumber) || empty($username) || empty($email) || empty($password) || empty($passwordrepeat) ){
        header("Location: ../csignup.php?error=emptyfields&uid=".$username."&email=".$email);
      
  
    }
    
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("location: ../csignup.php?error=invalidemail&uid".$username);
    exit();
 }
 
else if ($password !== $passwordrepeat){
    header("Location: ../csignup.php?error=passwordcheck&uid".$username."&email=".$email); 
    exit();
}

else{
    $sql="SELECT acctno FROM customer where acctno=?";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: ../csignup.php?error=sqlerror"); 
        exit();
    }
else{
    mysqli_stmt_bind_param($stmt,"i",$acctnumber);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $resultcheck=mysqli_stmt_num_rows($stmt);
if($resultcheck>0){
    header("Location:../csignup.php?error=usertaken&email=".$email); 
        exit();
}
else{
    $sql="INSERT INTO customer (acctno,username,mail,passwd) VALUES (?,?,?,?)";
  
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location:../csignup.php?error=sqlerror"); 
        exit();
    }
    
    
else{
    $hashedpwd=password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"isss",$acctnumber,$username,$email,$hashedpwd);
    mysqli_stmt_execute($stmt);

    header("Location:../csignup.php?signup=success"); 
    
    exit();
}

}

}
}
mysqli_stmt_close($stmt);
mysqli_close($connc);
mysqli_stmt_close($stmt1);
mysqli_close($connc);
}
 else{
    header("Location:../ login.php"); 
    exit();

 }



