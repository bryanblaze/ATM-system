<?php
if (isset($_POST['custlogin'])){
    require 'dbh.inc.php';
    $acctnumber=$_POST['caid'];
    
    $password=$_POST['cpassword'];
  

        if(empty($acctnumber) || empty($password) ){
        header("Location: ../login.php?error=emptyfields");
      exit();
  
        }
    else{
    $sql="SELECT * FROM customer WHERE acctno=? or iduser=?";
    $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location:../login.php?error=sqlerror");
            exit();
            }
        else{
    mysqli_stmt_bind_param($stmt,"ii",$acctnumber,$acctnumber);
    mysqli_stmt_execute($stmt);
    $result=mysqli_stmt_get_result($stmt);
            if($row=mysqli_fetch_assoc($result)){
           
            $pwdcheck = password_verify($password,$row['passwd']);

            if($pwdcheck==false) {
                echo"<SCRIPT>Incorrect password</SCRIPT>";
                header("Location: ../login.php?error=wrongpwd");
              

                exit();
                
                }
                     else if($pwdcheck==true){
                        session_start();
                        $_SESSION['uid']=$row['username'];
                        $_SESSION['acctnum']=$row['acctno'];
                        header("Location:../customer/custdash.php?login=success");
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

?>