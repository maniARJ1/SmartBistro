<?php 
	require("connection.php");

	if(isset($_POST["submit"])){
		var_dump($_POST);

		$username = $_POST["username"];
		$email = $_POST["email"];
		$password = PASSWORD_HASH($_POST["password"], PASSWORD_DEFAULT);

		$stmt = $con->prepare("SELECT * FROM users WHERE username=:username OR email=:email");
		$stmt->bindParam(":username", $username);
		$stmt->bindParam(":email", $email);
		$stmt->execute();

		$userAlreadyExists = $stmt->fetchColumn();

		if(!$userAlreadyExists) {
			//Registrieren
			registerUser($username, $email, $password);
		}
		else {	
			//Benutzer existiert bereits
		}
	}

	function registerUser($username, $email, $password) {
		global $con;
		$stmt = $con->prepare("INSERT INTO users(username, email, password) VALUES(:username, :email, :password)");
		$stmt->bindParam(":username", $username);
		$stmt->bindParam(":email", $email);
		$stmt->bindParam(":password", $password);
		$stmt->execute();
		header("Location: login.php");
	}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartBistro</title>
    <link rel="stylesheet" href="registrieren.css">
</head>
<body>
    <div class="banner">   
        <div id="login-container">
            <form action="registrieren.php" method="POST" id="login-form">
                <label for="username">Benutzername:</label>
                <input type="text" id="username" name="username" autocomplete="off">

                <label for="username">E-Mail</label>
                <input type="text" id="email" name="email" autocomplete="off">

                <label for="password">Passwort:</label>
                <input type="password" id="password" name="password" autocomplete="off">
                <button name="submit">Erstellen</button>
            </form>
        </div> 
    </div>
</body>
</html>
