<?php

$ser="localhost";
$use="root";
$pass=""; 
$db="fa";
$conn=new mysqli($ser,$use,$pass,$db);
    

$imie=$_POST['imie'];
$nazwisko=$_POST['nazwisko'];
$wzrost=$_POST['wzrost'];
$waga=$_POST['waga'];
$klub=$_POST['klub'];
$sql = "INSERT INTO `zaw`(`Id`, `Imie`, `Nazwisko`, `Wzrost`, `Waga`, `Klub`) VALUES (NULL,'$imie','$nazwisko','$wzrost','$waga','$klub')";
mysqli_query($conn,$sql);
$conn->close();
header('location: http://localhost/fa/index.php');
?>