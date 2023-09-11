<?php

include "dbConnect.php";

if(isset($_GET['z'])){
    $uid = $_GET['z'];
    $sql = "DELETE FROM orderkro WHERE id='$uid'";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("location:order.php");
    }
}

?>