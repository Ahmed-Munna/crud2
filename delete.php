<?php
    include('include/config.php');
    $id = $_GET["id"];
    $delete_query = "DELETE FROM user WHERE id=$id";
    $delete_user  = mysqli_query($db_connect,$delete_query);
    $dell         = 'User delete successfull';
    header('location:user.php?del_secc='.$dell);
?>