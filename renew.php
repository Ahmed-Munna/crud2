<?php
include('include/config.php');
$id = $_GET["id"];
$query = "UPDATE user SET status=1 WHERE id=$id";
mysqli_query($db_connect,$query);
header('location:user.php');



?>