<?php 
    $statCode=$_GET['code'];
    $statMessage=$_GET['mess'];
    header("Status: $statCode $statMessage")
?>