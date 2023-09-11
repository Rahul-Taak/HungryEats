<?php

include "dbConnect.php";

if(isset($_GET['x'])){
    $unique = $_GET['x'];
    $fetch = "SELECT * FROM menu WHERE id='$unique'";
    $res = mysqli_query($conn, $fetch);
    $line = mysqli_fetch_array($res);
    $sql = "INSERT INTO orderkro(uni,category,types,price) VALUES('$unique','$line[2]','Medium','$line[3]')";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("location:menu.php");
    }
}

if(isset($_GET['y'])){
    $unique = $_GET['y'];
    $fetch = "SELECT * FROM menu WHERE id='$unique'";
    $res = mysqli_query($conn, $fetch);
    $line = mysqli_fetch_array($res);
    $sql = "INSERT INTO orderkro(uni,category,types,price) VALUES('$unique','$line[2]','Large','$line[4]')";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("location:menu.php");
    }
}


?>