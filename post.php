<?php
// database connection
    require('include/config.php');
// all input field
    $name           = filter_var($_POST["name"],FILTER_SANITIZE_STRING);
    $email          = filter_var($_POST["email"],FILTER_VALIDATE_EMAIL);
    $password       = $_POST["password"];
    $uppercase      = preg_match('@[A-Z]@', $password);
    $lowercase      = preg_match('@[a-z]@', $password);
    $number         = preg_match('@[0-9]@', $password);
    $specialChars   = preg_match('@[^\w]@', $password);
    $conPassword    = $_POST["conPassword"];
    $gender         = $_POST["gender"];
    $country        = $_POST["country"];
// name validation
    if(empty($name)){
        $err_mass   = 'Name field is requered';
        header('location:index.php?name_err='.$err_mass);
    }elseif(empty($email)){
        $err_mass   = '$Email field is requered';
        header('location:index.php?email_err='.$err_mass);
    }elseif(empty($password)){
        $err_mass   = 'password field is requered';
        header('location:index.php?pass_err='.$err_mass);
    }elseif(!$uppercase | !$lowercase | !$number | !$specialChars >=8){
        $err_mass   = 'Password should be strong';
        header('location:index.php?pass_err='.$err_mass);
    }elseif(empty($conPassword)){
        $err_mass   = 'Confirm password field is requered';
        header('location:index.php?cPass_err='.$err_mass);
    }elseif($conPassword !== $password){
        $err_mass   = 'password and cofirm passsword should be same';
        header('location:index.php?cPass_err='.$err_mass);
    }elseif(empty($gender)){
        $err_mass   = 'Gender field is requered';
        header('location:index.php?gender_err='.$err_mass);
    }elseif(empty($country)){
        $err_mass   = 'Country field is requered';
        header('location:index.php?coun_err='.$err_mass);
    }else{
        $insart_query   = "INSERT INTO user(name, email, pass, gender, country) VALUES ('$name','$email','$password ','$gender','$country')";
        mysqli_query($db_connect, $insart_query);
        $sub_succ       = 'Ragistration successfull';
        header('location:index.php?submit_success='.$sub_succ);
    }

?>