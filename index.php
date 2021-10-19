<?php
$data = json_decode( file_get_contents('https://dog.ceo/api/breeds/image/random'), true );

$image= $data['message'];
$mostrar = '<img src ='.$image.' style="width:20%">';

echo $mostrar;

/* function mostrarimagen(){
    echo "<img src ='$image'>";
}
$mostrarimaagen = mostrarimagen(); */
//echo "<button type='submit'name='ok'onclick=$mostrarimaagen>Mostrarperro</button>";

/* <button type="submit" name="ok" onclick="mostrarimagen()">Guardar</button>
 */


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form class="form" method="POST" action="index.php"> 
<button type="submit" name="ok" >MostrarPerro</button>
</form>
</body>
</html>