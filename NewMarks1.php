<?php


include 'connection/dbconfig.php';

error_reporting(0);
ob_start();
session_start();
$user_id = $_SESSION['TEA'];
$a1 = $_POST['txtsname'];
$a2 = $_POST['txtenroll'];
$a3 = $_POST['maintainclass'];
$a4 = $_POST['semester'];
$a5 = $_POST['txttmarks'];
$a6 = $_POST['txtaggre'];
$a7 = $_POST['txtsession1'];
$a8 = $_POST['txtsession2'];
$a9 = $_POST['txtsession3'];


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
    $query = "insert into marksdetails(tname,sname,enroll,course,sem,marks,aggre,attachement,msg_date,a7,a8,a9) values('$user_id','$a1','$a2','$a3','$a4','$a5','$a6','$file',now(),'$a7','$a8','$a9')";
    $r = mysqli_query($selected,$query);
    $num = (int) $r;
    if ($num > 0) {
        $_SESSION['MSG'] = "Your Marks has been successfully submited.!!";
    } else {
        $_SESSION['MSG'] = "Your Marks has not been submited.!!";
    }
    echo "<script>window.location.href=('NewMarks.php')</script>";
}

//header("location:../compose.php");
?>
