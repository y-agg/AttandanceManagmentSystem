<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
           <?php include "admin.php" ?>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>Sign</span>Up</h2>
         <div style="width: 700px; height: 550px; overflow: auto;">
           <form action="Teacher1.php"  method="post">
                    <table width="70%"  style="height: 450px; overflow: auto;">

                        <tr>
                            <td>
                                <fieldset>
                                    <legend class="tabHeading">Login Information</legend>
                                    <table cellpadding="5" cellspacing="5">
                                          <?php
                                    include('connection/dbconfig.php');
                                        // $query = ("select * from student order by (StudentId)desc limit 1 ");
                                        //$r = mysqli_query($selected,$query);
                                        $result = mysqli_query($selected,"select * from teacher order by (sid)desc limit 1");
                                        while ($row = mysqli_fetch_assoc($result)) {
                                        //echo  "abc";
                                        $num = $row['sid'];
                                        //echo $num;
                                        $n = (int) $num;
                                        //echo $n;
                                        //$num = $num + 1;
                                        $StudentId = $n + 1;
                                        }
                                        ?>
                                        <tr>
                                            <td class="text"><span style="color: red;"></span>&nbsp;Teacher&nbsp;Id:</td>
                                            <td> <input type= "text" size="25"  id="txthidden" name="txthidden" readonly value="<?php echo $StudentId ?>"></td>
                                            <td class="text"><span style="color: red;">*</span> Teacher&nbsp;Name:</td>
                                            <td class="text-1"><input type="text" size="25"  id="uname" name="uname"></td>

                                        </tr>
                                        <tr>
                                            <td class="text"><span style="color: red;">*</span>Password&nbsp;:</td>
                                            <td> <input type= "password" size="25"  id="pwd" name="pwd"></td>
                                            <td class="text"><span style="color: red;">*</span>Confirm&nbsp;Password&nbsp;:</td>
                                            <td> <input type= "password" size="25"  id="cpwd" name="cpwd" onblur="validatepassword();"></td>

                                        </tr>
                                    </table>
                                </fieldset>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <fieldset>
                                    <legend class="tabHeading">Personal Information</legend>
                                    <table cellpadding="5" cellspacing="5">

                                        <tr>
                                            <td class="text"><span style="color: red;">*</span>First&nbsp;Name:</td>
                                            <td><input type="text" size="25"  id="txtname" name="txtname" onblur=" CheckForAlphabets(this)" ></td>
                                            <td class="text"><span style="color: red;"></span>Last&nbsp;Name&nbsp;:</td>
                                            <td> <input type= text size="25"  id="txtlname" name="txtlname" onblur=" CheckForAlphabets(this)" ></td>
                                        </tr>
                                        <tr>
                                            <td class="text"><span style="color: red;">*</span>
                                                Gender
                                            </td>
                                            <td class="text">
                                                <select  id="cmbgender"name="cmbgender" style="width: 180px">
                                                    <option value="Select"> - - - - - - - - - Select- - - - - - - - - </option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </td>
                                            <td class="text"><span style="color: red;">*</span>Date&nbsp;of&nbsp;Birth</td>
                                            <td> <input type= text size="25" name="txtdb"  id="txtdb" readonly onclick="scwShow(this,event)" ></td>
                                        </tr>
                                        <tr>
                                            <td class="text"><span style="color: red;">*</span>Contact&nbsp;Number:</td>
                                            <td> <input type= text size="25"  id="number" name="number" onkeyup="contact(this)" onblur="mob()"></td>
                                            <td class="text"><span style="color: red;">*</span>Email&nbsp;Id:</td>
                                            <td><input type="text" size="25" id="txtemail" name="txtemail"  onblur="valid()"></td>
                                        </tr>
                                        <tr>
                                            <td class="text">Address:</td>
                                            <td><input type= text size="25"  id="txtaddress" name="txtaddress"></td>

                                            <td class="text">City:</td>
                                            <td>
                                                <select id="cmbcity"   name="cmbcity" style="width: 180px;">
                                                    <option value="Select"> Select </option>
                                                    <option value="Delhi">  Delhi </option>
                                                    <option value="Gurgoan"> Gurgoan </option>
                                                    <option value="Noida"> Noida </option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text">Pin&nbsp;Code:</td>
                                            <td> <input type= text size="25"  id="txtpin" name="txtpin" onkeyup="contact(this)" onblur="pin()"></td>
                                            <td class="text">State:</td>
                                            <td><input type= text size="25"  id="txtstate" name="txtstate"></td>
                                        </tr>
                                        <tr>
                                            <td class="text">Country:</td>
                                            <td>
                                                <select  id="cmbcountry"name="cmbcountry" style="width:180px">
                                                    <option value="Select">- - - - Select - - - - </option>
                                                    <option value="America">America</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Africa">Africa</option>
                                                    <option value="Bangalore">Bangalore</option>
                                                    <option value="Bangkok">Bangkok</option>
                                                    <option value="India">India</option>
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
