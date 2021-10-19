<?php
$data = json_decode( file_get_contents('https://dog.ceo/api/breeds/image/random'), true );

$image= $data['message'];

echo "<img src ='$image'>";