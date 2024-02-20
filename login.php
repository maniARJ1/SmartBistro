<?php 
require("connection.php");

if(isset($_POST["submit"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $con->prepare("SELECT * FROM users WHERE username=:username");
    $stmt->bindParam(":username", $username);
    $stmt->execute();
    $userExists = $stmt->fetchAll();
    var_dump($userExists);

    $passwordHashed = $userExists[0] ["password"];
    $checkPassword = password_verify($password, $passwordHashed);

    if ($checkPassword === false) {
      echo "Login fehlgeschlagen, Passwort stimmt nicht überein.";
    }
    if ($checkPassword === true) {

      session_start();
      $_SESSION["username"] = $userExists[0]["username"];

      header("Location: Homepage.php");
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartBistro</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="banner">   
        <div id="login-container">
            <form action="login.php" method="POST" id="login-form">
                <label for="username">Benutzername:</label>
                <input type="text" id="username" name="username" autocomplete="off">

                <label for="password">Passwort:</label>
                <input type="password" id="password" name="password" autocomplete="off">
                <button name="submit">Anmelden</button>
            </form>
        </div> 
    </div>
</body>
</html>
