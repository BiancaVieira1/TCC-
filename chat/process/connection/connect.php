<?php
   $con = mysqli_connect("localhost", "root", "sistema", "sistema");
   mysqli_query($con, "SET time_zone='+00:00'");

   date_default_timezone_set("UTC");

   if(mysqli_connect_errno()) {
    echo "Falha a ligar a base de dados: ".mysqli_connect_error();
    exit();
   }
?>