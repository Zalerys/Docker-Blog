<?php 
session_start(); 

require_once '../../DB/connect.php';


if(isset($_POST['login'])){ 
    $email = $_POST['emailLogin'];
    // $passworduser = $_POST['passwordLogin'];

    $sql = "SELECT * FROM `User` WHERE email = '$email'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $user = $stmt->fetch();


    if(!$user) {
      echo("no user");
    }else{
        if($_POST['passwordLogin'] != $user['password']) {
            echo('mot de passe incorect');
        }else {
            $_SESSION['UserID'] = $user["id"];
            header('Location: ../Blog/blog.php');
        };
    }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <h1>Connect</h1>
    <div class="container">
        <div class="connect">
            <form class="login" method="post">
                <h3>Login</h3>
                <input placeholder="Email" name="emailLogin">
                <input placeholder="password" name="passwordLogin">
                <button type="sumbit" name="login">Connect</button>
            </form>
        </div>
    </div>
</body>
</html>
















