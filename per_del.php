<?php

include('include/config.php');
$id = $_GET["id"];
$query = "DELETE FROM user WHERE id=$id";
mysqli_query($db_connect,$query);
$per_del    = "Your account permanent deleted";
header('location:user.php?per_del='.$per_del);

?>