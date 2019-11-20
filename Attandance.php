<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
header("Pragma: no-cache");
header("Cache: no-cahce");
session_start();
$UNAME = null;
$UNAME = $_SESSION["TEA"];
if ($UNAME != null) {

    ob_start();
    include('connection/dbconfig.php');
    if (isset($_GET['uid'])) {
        $uid = $_GET['uid'];
        echo $uid;
        $query2 = "delete from signup where sid ='$uid'";
        mysqli_query($selected,$query2);
        header("location:StudentList.php");
    }
    $MSG = null;
    $MSG = $_SESSION['MSG'];
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Attendance Management System</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
        <script type="text/javascript" src="js/cufon-yui.js"></script>
        <script type="text/javascript" src="js/cufon-titillium-600.js"></script>
        <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/coin-slider.min.js"></script>
    </head>
    <script type="text/javascript">
        function contact(i)
        {
            if(i.value.length>0)
            {
                i.value = i.value.replace(/[^\d]+/g, '');

            }
        }
        function CheckForAlphabets(elem)
        {
            var alphaExp = /^[a-z A-Z]+$/;
            if(elem.value.match(alphaExp)){
                return true;
            }else{
                alert("give alphabatic name ");
                return false;
            }
        }
        function mob()
        {
            var rl=document.getElementById("number").value;
            if(rl.toString().length<10)
            {
                alert("Contact No. should be of ten digits");
                return false;
            }

        }
    </script>
    <script type="text/javascript">
        function valid() {
            //alert('calling');
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            // var address = document.forms[form_id].elements[txtemail_id].value;
            var address = document.getElementById('txtemail').value;
            if(reg.test(address) == false) {
                alert('Invalid Email Address');
                return false;
            }
        }
    </script>
    <script type="text/javascript">

        function pin()
        {
            var rl=document.getElementById("txtpwd").value;
            if(rl.toString().length<6)
            {
                alert("Pin Number should be of Six digits");
                return false;
            }

        }

    </script>
    <script type="text/javascript">



        function valid(){

            if(document.getElementById('uname').value == ""){
                alert('User Name Field Cannot be Blank Left !!');
                return false;
            }

            if(document.getElementById('txtname').value == ""){
                alert('First Name Field Cannot be Blank Left !!');
                return false;
            }
            if(document.getElementById('cmbgender').value == ""){
                alert('Gender Field Cannot be Blank Left !!');
                return false;
            }
            if(document.getElementById('txtdb').value == ""){
                alert('Date of Birth Field Cannot be Blank Left !!');
                return false;
            }

            if(document.getElementById('number').value == ""){
                alert('Number Field Cannot be Blank Left !!');
                return false;
            }
            if(document.getElementById('txtemail').value == ""){
                alert('Email Field Cannot be Blank Left !!');
                return false;
            }
        }

        function validatepassword(){

            var a = document.getElementById('pwd').value;
            var b = document.getElementById('cpwd').value;
            if(a != b){
                alert('Confirm Password Does Not Matched !!');
                return false;
            }

        }
    </script>
    <script src="scw.js" type="text/javascript"></script>
    <body>
        <div class="main">
            <div class="header">
                <div class="header_resize">
                    <div class="logo">
                      <h1><a href="index.php">Attendance Management<span>System</span></a></h1>
                    </div>
                    <div class="searchform">
                        <form id="formsearch" name="formsearch" method="post" action="#">
                            <span>
                                <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
                            </span>
                            <input name="button_search" src="images/search.gif" class="button_search" type="image" />
                        </form>
                    </div>
                    <div class="clr"></div>
                    <?php include "headerimage.php" ?>
                    <div class="clr"></div>
                    <div class="menu_nav">
                        <?php include "tea.php" ?>
                    </div>
                    <div class="clr"></div>
                </div>
            </div>
            <div class="content">
                <div class="content_resize">
                    <div class="mainbar">
                        <div class="article">

                            <div style="width: 700px; height: 550px; overflow: auto;">
                           <tr>
                        <td>
                            <h1>Attendance </h1>
                        </td>
                    </tr>
                    <form action="Attendance1.php"  method="post">
                        <table width="70%"  style="height: 450px; overflow: auto;">

                            <tr>
                                <td>
                                    <fieldset>
                                        <legend class="tabHeading">Attendance Information</legend>
                                        <table cellpadding="5" cellspacing="5">

                                            <tr>
                                                <td class="text"><span style="color: red;"></span>&nbsp;Course&nbsp;Name:</td>
                                                <td class="text">
                                                    <select  id="course"name="course" style="width: 180px">
                                                        <option value="Select"> - - - - - - - - - Select- - - - - - - - - </option>
                                                        <option value="BCA">BCA</option>
                                                        <option value="MCA">MCA</option>
                                                    </select>
                                                </td>
                                                <?php
                                                $course = null;
                                                if ($course!=null)
                                                $course = $_POST['course'];
                                                ?>
                                                <td class="text"><span style="color: red;">*</span> Semester&nbsp;:</td>
                                                <td class="text">
                                                    <select  id="semester"name="semester" onchange="showUser(this.value)">
                                                        <option value="Select"> - - - - - - - - - Select- - - - - - - - - </option>
                                                        <option value="SEM-1">SEM-1</option>
                                                        <option value="SEM-2">SEM-2</option>
                                                        <option value="SEM-3">SEM-3</option>
                                                        <option value="SEM-4">SEM-4</option>
                                                        <option value="SEM-5">SEM-5</option>
                                                        <option value="SEM-6">SEM-6</option>
                                                        <option value="SEM-7">SEM-7</option>
                                                        <option value="SEM-8">SEM-8</option>
                                                    </select>
                                                </td>
                                                

                                            </tr>
                                            <tr>
                                                <td class="text"><span style="color: red;"></span>&nbsp;Student&nbsp;Name:</td>
                                                <td><input type="text" size="25"  id="category" name="category" ></td>

                                                <td class="text"><span style="color: red;"></span>&nbsp;Status&nbsp;:</td>
                                                <td class="text">
                                                    <select  id="statuspa"name="statuspa" style="width: 180px">
                                                        <option value="Select"> - - - - - - - - - Select- - - - - - - - - </option>
                                                        <option value="P">P</option>
                                                        <option value="A">A</option>
                                                    </select>
                                                </td>
                                            </tr>

                                        </table>
                                    </fieldset>
                                </td>
                            </tr>


                            <tr>
                                <td align="center" colspan="2" >
                                    <input type="submit" value="Submit" onclick="return valid();"/>
                                    <input type= "reset" value="Reset">
                                </td>
                            </tr>


                        </table>
                    </form>
                            </div></div>

                    </div>
                    <?php include "sidepanel.php" ?>
                                    <div class="clr"></div>
                                </div>
                            </div>
            <?php include "footer.php" ?>
        </div>
</html>
<?php
                    } else {

                        header("location:logout.php");
                    }
?>