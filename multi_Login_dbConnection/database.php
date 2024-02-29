<?php 
   $server ="localhost";
   $userName="root";
   $pass="";
   $db_Name="practice";
   $conn="";

   try{
        $conn = mysqli_connect("$server","$userName","$pass","$db_Name");
   }
   catch(mysqli_sql_exception){
        echo"Database Couldn't Connect! <br>";
   }
?>