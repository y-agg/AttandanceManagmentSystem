<?php
   $selected = mysqli_connect("localhost","root","","dbattandance");
   if (mysqli_connect_errno($selected)){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
?>