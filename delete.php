<?php

include "database.php"; 
$customer_id = $_GET["id_baju"];

$query = "DELETE FROM baju WHERE id_baju='" . $customer_id . "'";

if(mysqli_query($db_connect, $query)){
    $message = 3; 
} else {
    $message = 4;
}

header("Location:checkout.php?message=" . $message . "");

?>