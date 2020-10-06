<?php

include 'connection.php';

$update=$db->exec("update pokemon set nama='".$_POST['nama']."',elemen='".$_POST['elemen']."',skill='".$_POST['skill']."',gambar='".$_POST['gambar']."' where id=".$_POST['id']);

if ($update){
    header("Location:index.php");
}