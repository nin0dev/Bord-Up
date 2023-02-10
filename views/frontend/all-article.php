<?php
include '../../header.php';

$articles = sql_select('ARTICLE', '*');
?>

<div class="main col-10">
    <div class="principal">
        <h1 class="intro">Tous nos articles</h1>
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button"data-bs-toggle="dropdown" aria-expanded="false">
                Trier par
            </button>
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" href="#">Date</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Thème</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Les plus vus</a>
                </li>
            </ul>
        </div>
        <div class="cardarticle">
            <?php foreach ($articles as $article) { ?>
                <div class="card" style="width: 18rem">
                    <img src="./assets/img/<?php echo $article['urlPhotArt']; ?>" class="card-img-top"/>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $article['libTitrArt'] ?></h5>
                        <p class="card-text">
                            <?php echo $article['libChapoArt'] ?>
                        </p>
                        <a href="#" class="btn btn-primary">Voir Plus</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
</div>
</div>
<footer>
    <p>Mentions légales</p>
    <p>Conditions générales</p>
</footer>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"
></script>
</body>
</html>