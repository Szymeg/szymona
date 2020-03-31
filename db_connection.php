<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "szymona";
 $dbpass = "Szymona2020";
 $db = "szymona";
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>