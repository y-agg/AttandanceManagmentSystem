<?php

error_reporting(0);
ob_start();
session_start();
header("Pragma: no-cache");
header("Cache: no-cahce");
include_once "connection/dbconfig.php"; //Connection
$UNAME = $_SESSION["TEA"];
$id = $_POST['category'];
$bid = $_POST['textmessage'];
$name = $_POST['course'];
$categrory = $_POST['semester'];
//$tname = $_POST['txt_name'];


$query = "insert into attandancenoti(sname,pstatus,course,sem,date,tname) values('$id','$bid','$name','$categrory',now(),'$UNAME')";

$r = mysqli_query($selected,$query);
$num = (int) $r;
if ($num > 0) {
    $_SESSION['MSG'] = "Your information has been successfully submited.!!";
} else {
    $_SESSION['MSG'] = "Your information has not been submited.!!";
}
header("location:AttandanceNotification.php");
?>
