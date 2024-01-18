<?php 
    include 'headder.php';
    include 'conn.php';

    $id = $_GET['did'];

    $sql = "DELETE FROM `user` WHERE `id`='$id'";

    if($conn->query($sql) == true){
        header("Location: view.php");
    }else{
        echo "Deleting Error". $conn->error;
    }
?>