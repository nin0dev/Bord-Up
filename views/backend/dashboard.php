<!--Bootstrap admin dashboard template-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Bord'Up</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../frontend/style home/index.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            @import url("https://fonts.googleapis.com/css2?family=ABeeZee&display=swap");
        </style>
    </head>

    <body>
        <div class="d-block col-12">
            <div class="not-footer d-flex">
                <nav class="col-2">
                    <img src="../frontend/assets/Frame.svg" alt="logo" />
                    <ul>
                        <li>Accueil</li>
                        <li>Nos Articles</li>
                        <li>Contact</li>
                        <ul class="rs">
                            <li>
                                <i class="fa-brands fa-linkedin-in"></i>
                            </li>
                            <li>
                                <i class="fa-brands fa-facebook"></i>
                            </li>
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
                </nav>
                <div class="main col-10">
                <div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Bord'Up Admin Dashboard</h1>
                <p>Welcome to the dashboard</p>
            </div>
            <div class="col-md-12">
                <h3>Find here links to admin pages and what to do next</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Pages</th>
                            <th>Actions</th>
                            <th>Commentaires</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Status</td>
                            <td>
                                <a href="/views/backend/status/list.php" class="btn btn-primary">List</a>
                                <a href="/views/backend/status/create.php" class="btn btn-success">Create</a>
                                <a href="/views/backend/status/update.php" class="btn btn-warning disabled">Edit</a>
                                <a href="/views/backend/status/delete.php" class="btn btn-danger disabled">Delete</a>
                            </td>
                            <td>
                                <p>Exemple fournis s'y referer pour travailler</p>
                            </td>
                        </tr>
                        <tr>
                            <td>Members</td>
                            <td>
                                <a href="/views/backend/members/list.php" class="btn btn-primary">List</a>
                                <a href="/views/backend/members/create.php" class="btn btn-success">Create</a>
                                <a href="/views/backend/members/update.php" class="btn btn-warning disabled">Edit</a>
                                <a href="/views/backend/members/delete.php" class="btn btn-danger disabled">Delete</a>
                            </td>
                            <td>Attention, il faut aussi gérer la partie inscription/connection et la sécurité</td>
                        </tr>
                        <tr>
                            <td>Articles</td>
                            <td>
                                <a href="/views/backend/articles/list.php" class="btn btn-primary">List</a>
                                <a href="/views/backend/articles/create.php" class="btn btn-success">Create</a>
                                <a href="/views/backend/articles/update.php" class="btn btn-warning disabled">Edit</a>
                                <a href="/views/backend/articles/delete.php" class="btn btn-danger disabled">Delete</a>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Thematiques</td>
                            <td>
                                <a href="/views/backend/thematiques/list.php" class="btn btn-primary">List</a>
                                <a href="/views/backend/thematiques/create.php" class="btn btn-success">Create</a>
                                <a href="/views/backend/thematiques/update.php" class="btn btn-warning disabled">Edit</a>
                                <a href="/views/backend/thematiques/delete.php" class="btn btn-danger disabled">Delete</a>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Comments</td>
                            <td>
                                <a href="/views/backend/comments/list.php" class="btn btn-primary">List</a>
                                <a href="/views/backend/comments/create.php" class="btn btn-success">Create</a>
                                <a href="/views/backend/comments/update.php" class="btn btn-warning disabled">Edit</a>
                                <a href="/views/backend/comments/delete.php" class="btn btn-danger disabled">Delete</a>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Likes</td>
                            <td>
                                <a href="/views/backend/likes/list.php" class="btn btn-primary disabled">List</a>
                                <a href="/views/backend/likes/create.php" class="btn btn-success disabled">Create</a>
                                <a href="/views/backend/likes/update.php" class="btn btn-warning disabled">Edit</a>
                                <a href="/views/backend/likes/delete.php" class="btn btn-danger disabled">Delete</a>
                            </td>
                            <td>Utilisation de Ajax si trop de temps ;)</td>
                        </tr>
                        <tr>
                            <td>Keywords</td>
                            <td>
                                <a href="/views/backend/keywords/list.php" class="btn btn-primary">List</a>
                                <a href="/views/backend/keywords/create.php" class="btn btn-success">Create</a>
                                <a href="/views/backend/keywords/update.php" class="btn btn-warning disabled">Edit</a>
                                <a href="/views/backend/keywords/delete.php" class="btn btn-danger disabled">Delete</a>
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
include '../../footer.php';
?>