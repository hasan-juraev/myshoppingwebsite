<?php 
    $conn = mysqli_connect("localhost", "root", "", "shopee");
    if(!$conn){
        die("Failed to connect: ". mysqli_connect_error());
    }
?>