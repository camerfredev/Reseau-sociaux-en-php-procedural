<?php
if(!isset($_SESSION['user_id'])){
    // set_flash("Vous devez etre connecter pour acceder à cette page","danger");
    $_SESSION['forwarding_url']= $_SERVER['REQUEST_URI'];
    $_SESSION['notification']['message']="Vous devez etre connecter pour acceder à cette page";
    $_SESSION['notification']['type'] = "danger";
    header('Location: login.php');
    exit();
} 