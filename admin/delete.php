<?php
    include "../connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = " DELETE from `addexam` where id=$id";
        // $con->query($sql);
        mysqli_query($con,$sql);
    }
    header('location:add.php');
    exit;
?>