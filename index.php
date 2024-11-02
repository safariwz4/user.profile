<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Профиль пользователя</h2>
    <?php
    if($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = htmlspecialchars($_POST["username"]); 
        $email = htmlspecialchars($_POST["email"]); 
        $age = htmlspecialchars($_POST["age"]); 

        echo "<p>Привет, $username!</p>";
        echo "<p>Ваш email: $email</p>";
        echo "<p>Ваш возраст: $age</p>";
    }
    elseif ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["username"], $_GET["email"], $_GET["age"])) {
       $username = htmlspecialchars($_GET["username"]); 
       $email = htmlspecialchars($_GET["email"]); 
       $age = htmlspecialchars($_GET["age"]); 
       echo "<p>Привет, $username!</p>";
       echo "<p>Ваш email: $email</p>";
       echo "<p>Ваш возраст: $age</p>";
    } else {
        echo "<p>Данные не были переданы.</p>"
    }
    ?>
</body>
</html>