<?php 

session_start();
$UserID = $_SESSION["UserID"];

require_once '../../DB/connect.php';


$sql = "SELECT User.name, articles.content, articles.user, articles.articleId FROM articles JOIN User ON articles.user = User.id";
$request = $pdo->query($sql);
$articles = $request->fetchAll();


if (isset($_POST['Post'])){
    $content = $_POST['text'];
    
    try{
        $article = "INSERT INTO articles(user, content) VALUES ('$UserID','$content')";
        $query = $pdo->prepare($article);
        $query->execute();

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
    <title>Document</title>
</head>
<body>
    <body>
        <form class="Post" method="post">
            <h3>Post Message</h3>
            <input placeholder="Write your text" name="text">
            <button type="sumbit" name="Post">Connect</button>
        </form>
        <br>
        <?php foreach($articles as $art) : ?>
        <div>
            <h5><?= $art['name'] ?>:</h5>
            <span><?= $art['content'] ?></span>
        </div>
        <?php endforeach; ?>
    </body>
</body>
</html>