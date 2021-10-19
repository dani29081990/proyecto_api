<?php
$nombre=$_POST["usuario"];
$password=$_POST["password"];

if(strcmp($nombre,"dani")==0 && strcmp($password,"dani")==0){
    header('Location: index.php');
}


?>