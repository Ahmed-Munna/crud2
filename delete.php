<?php
    include('include/config.php');
    $id = $_GET["id"];
    // $delete_query = "DELETE FROM user WHERE id=$id";
    $trash = "UPDATE user SET status=0 WHERE id=$id";
    $delete_user  = mysqli_query($db_connect,$trash);
    $dell         = 'User delete successfull';
    header('location:user.php?del_secc='.$dell);
?>