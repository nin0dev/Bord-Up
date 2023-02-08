<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bord'Up</title>
    <!-- Load CSS -->
    <link rel="stylesheet" href="./views/frontend/style home/index.css">
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<?php
//load config
require_once 'config.php';

//load php scripts
?>
<body>

<nav class="col-2">
    <img src="./views/frontend/assets/Frame.svg" alt="logo" />
    <ul>
        <li>Accueil</li>
        <li>Nos Articles</li>
        <li>Contact</li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/views/backend/dashboard.php">Admin</a>
        </li>
        <ul class="rs">
            <li>
                <i class="fa-brands fa-linkedin-in"></i>
            </li>
            <li><i class="fa-brands fa-facebook"></i></li>
        </ul>
    </ul>
    <ul class="settings d-block">
        <ul class="d-flex">
            <li>FR</li>
            <li>EN</li>
        </ul>
        <ul class="d-flex">
            <li><i class="fa-solid fa-moon"></i></li>

            <li>Aa</li>
        </ul>
    </ul>
    <div class="d-flex">
      <a class="btn btn-primary m-1" href="/views/frontend/login.php" role="button">Login</a>
      <a class="btn btn-dark m-1" href="/views/backend/register.php" role="button">Register</a>
      <a class="btn btn-primary m-1" href="/views/backend/login.php" role="button">Mon compte</a>
    </div>
</nav>
