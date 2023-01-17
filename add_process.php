<?php
// add_process.php

include "database.php";

if(count($_POST) > 0){
    $id = $_POST["id"];
    $item = $_POST["item"];
    $price = $_POST["price"];

    $query = "INSERT INTO baju (id_baju, nama_barang, harga_barang) VALUES ('$id', '$item', '$price')";

    if(mysqli_query($db_connect, $query)){
        $message = 1;
    }else{
        $message = 4;
    }
        
}

header("Location:checkout.php?message=" . $message . "");

?>