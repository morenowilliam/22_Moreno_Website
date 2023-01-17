<?php 

include "database.php";

if (count($_POST) > 0) {
    // ambil id dari customer sebagai penanda 
    $id_barang = $_POST["id"];
    $nama_barang = $_POST["item"];
    $harga_barang = $_POST["price"];
   
    

    $query =
        "UPDATE baju set id_baju='" . 
        $id_barang .  
        "', nama_barang='" . 
        $nama_barang . 
        "', harga_barang='" . 
        $harga_barang . 
        "' WHERE id_baju='" . 
        $id_barang . 
        "'";

    if (mysqli_query($db_connect, $query)) {
        $message = 2;
    } else {
        $message = 4;
    }
}

header("Location:checkout.php?message=" . $message . "");

?>