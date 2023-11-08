<?php
    // connection à la DB
    $connect = mysqli_connect("localhost","root","root","FlowerShop");
    // vérif connection
    if (mysqli_connect_errno()){
        echo "erreur de connection: " . mysqli_connect_error();
    }


//code pour le hashage
$test = "test";
$hash = password_hash($test, PASSWORD_BCRYPT);
$hash2 = password_hash($test, PASSWORD_BCRYPT);


echo $hash;
if($hash == $hash2){
    echo ("same");
}
else{
    echo ("different");
}
?>