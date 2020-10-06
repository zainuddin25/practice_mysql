<?php

include 'connection.php';

$delete=$db->exec("delete from pokemon where id=".$_GET['id']);

if ($delete){
    header("Location:index.php");
}