<?php 
// function test(){
//     header('Location: ../Blog/blog.php');
// };

session_start(); 

$servername = "db:3306";
$username = "root";
$password = "password";
$pdo = new PDO("mysql:host=$servername;dbname=Blog", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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
            echo'<script> window.location="../Blog/blog.php"; </script> ';
        };
    }
};

if (isset($_POST['register'])){
    $email = $_POST['emailRegister'];
    $name = $_POST['userRegister'];
    $passworduser = $_POST['passwordRegister'];
    
    try{
        $sql = "INSERT INTO `User` (`id`, `Admin`, `name`, `email`, `password`, `time`) VALUES (NULL, '0', '$name', '$email', '$passworduser', current_timestamp())";
        $pdo->exec($sql);
    }catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
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
            <form class="register" method="post">
                <h3>Register</h3>
                <input placeholder="Email" name="emailRegister">
                <input placeholder="User" name="userRegister">
                <input placeholder="password" name="passwordRegister">
                <button type="sumbit" name="register">Connect</button>
            </form>
        </div>
    </div>
</body>
</html>
















