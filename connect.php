<?php

require_once "connect1.php";


if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])){
  $_SESSION['username'] = $_POST['username'];
  header('Location: index.php');
  exit();
  

}

var_dump($_SESSION);






if(isset($_SESSION['username'])){
  echo "non";
} else {
    echo $content;
}
