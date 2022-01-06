<?php
// database connection
    require('include/config.php');
// all input field
    $id             = $_POST["id"];
    $name           = filter_var($_POST["name"],FILTER_SANITIZE_STRING);
    $email          = filter_var($_POST["email"],FILTER_VALIDATE_EMAIL);
    $password       = $_POST["password"];
    $uppercase      = preg_match('@[A-Z]@', $password);
    $lowercase      = preg_match('@[a-z]@', $password);
    $number         = preg_match('@[0-9]@', $password);
    $specialChars   = preg_match('@[^\w]@', $password);
// name validation
    if(empty($name)){
        $err_mass   = 'Name field is requered';
        header('location:update.php?name_err='.$err_mass);
    }elseif(empty($email)){
        $err_mass   = '$Email field is requered';
        header('location:update.php?email_err='.$err_mass);
    }elseif(empty($password)){
        $err_mass   = 'password field is requered';
        header('location:update.php?pass_err='.$err_mass);
    }elseif(!$uppercase | !$lowercase | !$number | !$specialChars >=8){
        $err_mass   = 'Password should be strong';
        header('location:update.php?pass_err='.$err_mass);
    }else{
        $insart_query   = "UPDATE user SET name='$name',email='$email',pass='$password' WHERE id=$id";
        mysqli_query($db_connect, $insart_query);
        $sub_succ       = 'update successfull';
       header('location:user.php?submit_success='.$sub_succ);
    }

?>