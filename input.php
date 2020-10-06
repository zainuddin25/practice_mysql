<?php

include 'connection.php';

// var_dump($_POST);
$input=$db->exec("insert into pokemon(nama,elemen,skill,gambar) values('".$_POST["nama"]."','".$_POST["elemen"]."','".$_POST["skill"]."','".$_POST["gambar"]."')");

if ($input){
    header("Location:index.php ");
}