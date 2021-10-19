<?php
$nombre=$_POST["usuario"];
$password=$_POST["password"];

if(strcmp($nombre,"dani")==0 && strcmp($password,"dani")==0){
    header('Location: home.php');
}elseif(strcmp($nombre,"javic")==0 && strcmp($password,"javic")==0){
    header('Location: home.php');
}elseif(strcmp($nombre,"javicc")==0 && strcmp($password,"javicc")==0){
    header('Location: home.php');
}else{
    echo'ERROR EN INICIAR SESION';
}


?>