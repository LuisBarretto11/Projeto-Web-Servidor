<?php
session_start();

if(isset($_SESSION['usuario'])){
    header('Location: home.php');
    exit;
}

header('Location: login.php');
exit;