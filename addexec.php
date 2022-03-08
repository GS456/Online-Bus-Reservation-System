<?php
include('../db.php');
$type=$_POST['type'];
$Origin=$_POST['Origin'];
$Destination=$_POST['Destination'];
$price=$_POST['price'];
$seat=$_POST['seat'];
$time=$_POST['time'];
$update=mysql_query("INSERT INTO route (type, price, numseats, Origin, Destination, time)
VALUES
('$type','$price','$seat','$Origin','$Destination','$time')");

header("location: route.php");
?>
