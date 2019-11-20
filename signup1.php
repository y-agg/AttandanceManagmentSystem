<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include 'connection/dbconfig.php';

error_reporting(0);
ob_start();
session_start();
$user_id = $_POST['txthidden'];
$a1 = $_POST['uname'];
$a2 = $_POST['txtpassword'];
$a3 = $_POST['cmbreligin'];
$a4 = $_POST['cmblocation'];
$a5 = $_POST['txtheight'];
$a6 = $_POST['txtcolor'];
$a7 = $_POST['txtname'];
$a8 = $_POST['txtlname'];
$a9 = $_POST['cmbgender'];
$a10 = $_POST['txtdb'];
$a11 = $_POST['number'];
$a12 = $_POST['txtemail'];
$a13 = $_POST['txtaddress'];
$a14= $_POST['cmbcity'];






//upload attachement

$current_file = $_FILES['attachedfile']['name'];
$extension = substr(strrchr($current_file, '.'), 1);
$time = date("fYhis");
$file = "attachement_" . $time . "." . $extension;
$path = "attachement/" . $file;
$action = copy($_FILES['attachedfile']['tmp_name'], $path);
if (!$action) {
    $file = "";
}

if (isset($_POST['btnsend'])) {
//insert into msgbox table
    $query = "insert into signup(id,a1,a2,a3,a4,a5,a6,a7,a8,a9,a10,a11,a12,a13,a14,image) values('$user_id','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$file')";
    $r = mysqli_query($selected,$query);
    $num = (int) $r;
    if ($num > 0) {
        $_SESSION['MSG'] = "Your Signup has been successfully submited.!!";
    } else {
        $_SESSION['MSG'] = "Your Notes has not been submited.!!";
    }
    echo "<script>window.location.href=('Signup.php')</script>";
}

//header("location:../compose.php");
?>
