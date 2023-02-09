<?php
//load config
require_once 'config.php';

//load php scripts
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bord'Up</title>
    <!-- Load CSS -->
    <link rel="stylesheet" href="<?php echo ROOT_URL . '/views/frontend/style home/index.css'?>">
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-2">
            <img src="/views/frontend/assets/Frame.svg" alt="logo" />
            <ul>
                <li><a href="/views/frontend/home.php" class="nav-link active">Accueil</a></li>
                <li><a href="/views/frontend/all-article.php">Articles</a></li>
                <li><a href="/views/frontend/contact.php">Contact</a></li>
                <li><a class="nav-link" href="/views/backend/dashboard.php">Admin</a></li>
                <ul class="rs">
                    <li><i class="fa-brands fa-linkedin-in"></i></li>
                    <li><i class="fa-brands fa-facebook"></i></li>
                </ul>
            </ul>
            <ul class="settings d-block">
                <ul class="d-flex">
                    <li>FR</li>
                    <li>EN</li>
                </ul>
                <ul class="d-flex">
                    <li><a href=""><i class="fa-solid fa-moon"></i></a></li>
                    <li>Aa</li>
                </ul>
            </ul>
            <div class="d-flex">
                <a class="" href="/views/frontend/login.php">Login</a>
                <a class="" href="/views/backend/register.php">Register</a>
                <a class="" href="/views/backend/login.php">Mon compte</a>
            </div>
        </div>