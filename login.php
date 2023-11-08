<?php
    // connection à la DB
    $connect = mysqli_connect("localhost","root","root","FlowerShop");
    // vérif connection
    if (mysqli_connect_errno()){
        echo "erreur de connection: " . mysqli_connect_error();
    }
?>