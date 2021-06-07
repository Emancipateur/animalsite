<?php
session_start();


ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
  <h1>Connect yourself</h1>
 
    <div id="container_main">
        <h2 id="h2_connect">Se connecter</h2>
        <form action="connect.php" method="POST">
        <div id="container">

            <label for="username">Username</label>
            <input type="text" id="username" name="username">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>
    <button id="button_connect" type="submit">OK</button>
    </form>
    <div><p>Vous n'avez pas encore de compte ?</p></div>
    <a href="index.php">Retour a l'acceuil</a>
    </div>
    
</body>
</html>

<?php
$content = ob_end_flush();
