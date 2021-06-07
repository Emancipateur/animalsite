<?php
ob_start();

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<nav>
    <ul>
        <li><a href="#">Acceuil</a></li>
        <li><a href="#">Nos envies</a></li>
        <li><a href="#">Nos désir</a></li>
    </ul>
</nav>
<div id="connect">
    <?php if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
        echo '<a href="disconnect.php">Se deconnecter </a>';
    } else echo '<a href="connect.php"> Se connecter </a>';
    ?>
    <p> <?php if(isset($_SESSION) && !empty($_SESSION)) echo 'Bienvenue '. $_SESSION['username'] ?></p>
    </div>
<h1>Les animaux en folie</h1>
<div id="open">Menu ></div>
<section id="section1">
    <h2>Pourquoi faut t'il nous proteger ?</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi totam est itaque vero molestias rem amet, ipsum ipsa provident sapiente! Voluptates aspernatur corrupti, perspiciatis qui sapiente nemo consectetur nulla numquam vel enim voluptatem suscipit in totam veniam, quam minima? Debitis exercitationem doloribus voluptate nam possimus ratione inventore sapiente, accusantium esse vero excepturi reiciendis error similique. Neque repellat dolores maxime laboriosam molestias! Distinctio vel facere accusamus molestias aperiam quas delectus autem doloremque reiciendis tempore. Asperiores quisquam laboriosam fugiat eos commodi debitis?</p>
    
        <button id="button">Nous aider</button>
</section>
<section class="sidebar">
    <div id="close">X</div>
    <ul>
        <li><a href="">Les Félins</a></li>
        <li><a href="">Les rongeurs</a></li>
        <li><a href="">Les animaux domestiques</a></li>
    </ul>
</section>
<main>
    <div class="chat"></div>
    <section id="article">
    <h2>Quel est votre choix ?</h2>
    <form action="action.php" method="GET">
    <div>
        <label for="chat">Chat</label>
        <input type="checkbox" id="chat" name="chat">
    </div>
    <div>
        <label for="chien">Chien</label>
        <input type="checkbox" id="chien">
    </div>
    <input type="submit" name="submit" id="submit">
    
    <div id="article1">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil neque perferendis nobis, vero quae dolore odio animi obcaecati facere qui! Voluptas quibusdam qui sequi molestias voluptates magnam, dolorum esse eos quaerat laudantium ab, doloribus, fugit reiciendis autem asperiores porro error aliquam? Ad quo, sunt adipisci laboriosam quis labore asperiores temporibus pariatur nisi impedit similique numquam autem sit tempora rem officia. Nihil inventore enim quisquam explicabo facere id perferendis alias sed labore doloribus culpa vel doloremque vero, asperiores necessitatibus maxime? Corporis?</p>
    </div>
</section>
</form>
<div class="chien"></div>
</main>
<body>

    <script src="script.js"></script>
</body>
</html>

<?php
$index = ob_end_flush();