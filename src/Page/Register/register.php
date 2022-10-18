<?php
session_start(); 

require_once '../../DB/connect.php';


if (isset($_POST['register'])){
    $email = $_POST['emailRegister'];
    $name = $_POST['userRegister'];
    $passworduser = $_POST['passwordRegister'];
    $sql = "INSERT INTO `User` (`id`, `Admin`, `name`, `email`, `password`, `time`) VALUES (NULL, '0', '$name', '$email', '$passworduser', current_timestamp())";
    $pdo->exec($sql);  
    header('Location: ../Login/login.php');
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <div>
        <form class="register" method="post">
            <h3>Register</h3>
            <input placeholder="Email" name="emailRegister">
            <input placeholder="User" name="userRegister">
            <input placeholder="password" name="passwordRegister">
            <button type="sumbit" name="register">Connect</button>
        </form>
    </div> 
</body>
</html>