<?php
$servername = "db:3306";
$username = "root";
$password = "password";

try {
  $conn = new PDO("mysql:host=$servername;dbname=Blog", $username, $password);
  // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>





// $servername = "db:3306";
// $username = "root";
// $password = "password";
// try{
//     $pdo = new PDO("mysql:host=$servername;dbname=Blog", $username, $password);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     // $sql = "INSERT INTO User (id, Admin, name, email, password, time)
//     // VALUES (NULL, 0, John' , 'john@example.com' , 'test', current_timestamp()";
//     $sql = "INSERT INTO `User` (`id`, `Admin`, `name`, `email`, `password`, `time`) VALUES (NULL, '0', 'test', 'oui', 'test', current_timestamp())";
//     $pdo->exec($sql);
// }catch(PDOException $e){
//     echo $sql . "<br>" . $e->getMessage();
// }




// $email = $_REQUEST['email'];
// $password = $_REQUEST['password'];


// $sql = "SELECT * FROM `User` WHERE email = '$email'";
// $stmt = $pdo->prepare($sql);
// $stmt->execute();
// // $user = $stmt->fetchColumn();
// $user = $stmt->fetch();
// // if($stmt->fetchColumn()) echo 'found';  
// // else echo 'not found';
// echo $user;
// if(!$user) {
//     echo('Utilisateur existe pas');
// }

// if(!password_verify($_POST['password'], $user['password'])) {
//     echo('mot de passe incorect');
// }else echo "test";