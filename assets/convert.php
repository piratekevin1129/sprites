<?php

//$name = "image-".date('G').'-'.date('i').'-'.date('s').'.png';
$name = "image_sprite.png";
$img = $_POST['photo'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file = 'images/'.$name;

if(file_put_contents($file, $data)){
    echo "bien";
}else{
    echo "mal";
}

?>