<?php

ob_start(); 
session_start(); 

include('connection/dbconfig.php');



if (isset($_POST['btnLogin'])) {


    $error_msg = '';
    $row_effected = 0;
    $status = false;


    $loginas = $_POST['rdType']; 
    $email = $_POST['login']; 
    $password = $_POST['password']; 

    if ($loginas == "admin") {

      
        $query = "select uname from admin where uname='$email' and pwd = '$password'";
        $result = mysqli_query($selected,$query);
        if($row=mysqli_fetch_assoc($result)){
            $name = $row ['uname']; 
            header("location:AdminHome.php");
            $_SESSION['ADMIN'] = $name;
        }
        else {
            $_SESSION['MSG'] = " id and password are wrong.!!";
            header("location:index.php");
        }
        
        
    } else if ($loginas == "teacher") {

  
        $query = "select uname from teacher where uname='$email' and pwd = '$password'";
        $result = mysqli_query($selected,$query);
        $row=mysqli_fetch_assoc($result);
        if(count($row!=0)){
            $name = $row ['uname'];
            header("location:MyAccountTeacher.php");
            $_SESSION['TEA'] = $name;
    }   else {
            $_SESSION['MSG'] = " id and password are wrong.!!";
            header("location:index.php");
        }
    }
 
    else if ($loginas == "signup") {


        $query = "select uname from signup where uname='$email' and pwd = '$password'";
        $result = mysqli_query($selected,$query);
        
        if($row=mysqli_fetch_assoc($result)){
            $name = $row ['uname'];
            header("location:MyAccountStudent.php");
            $_SESSION['STU'] = $name;
        }
        else {
            $_SESSION['MSG'] = " id and password are wrong.!!";
            header("location:index.php");
        }
    }else {
        $_SESSION['MSG'] = $error_msg; 
        header("location:index.php");
    }
}
?>
