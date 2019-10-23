<?php
if (isset($_POST['adminlogin'])){
    require 'dbh.inc.php';
    $acctnumber=$_POST['paid'];
    
    $password=$_POST['ppassword'];
  

        if(empty($acctnumber) || empty($password) ){
        header("Location: ../login.php?error=emptyfields");
      exit();
  
        }
    else{
    $sql="SELECT * FROM admin WHERE acctno=? or iduser=?";
    $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location=../login.php?error=sqlerror");
            exit();
            }
        else{
    mysqli_stmt_bind_param($stmt,"ii",$acctnumber,$acctnumber);
    mysqli_stmt_execute($stmt);
    $result=mysqli_stmt_get_result($stmt);
            if($row=mysqli_fetch_assoc($result)){
           
            $pwdcheck = password_verify($password,$row['passwd']);

            if($pwdcheck==false) {
                    
                header("Location: ../login.php?error=wrongpwd");
                exit();
                }
                     else if($pwdcheck==true){
                        session_start();
                        $_SESSION['uid']=$row['username'];
                        $_SESSION['acctnum']=$row['acctno'];
                        header("Location:../admin/admindash.php?login=success");
                        exit();
  
                    }
                    
                    else{
                    
                        header("Location:../login.php?error=wrongpwd");
                        exit();
                        }
                }

                    else{

header("Location:../login.php?error=nouser");
exit();
}
}
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
}
 else{
    header("Location: ../login.php"); 
    exit();

 }

