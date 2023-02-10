<?php
include '../../../header.php';
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */
?>

<!--Bootstrap form to create a new status-->
        <div class="col-md-10">
            <h1>Create Article</h1>
            <!--Form to create a new status-->
            <form method="POST" enctype='multipart/form-data' action="<?php echo ROOT_URL . '/api/articles/create.php' ?>">
                <label for="libTitrArt">Titre</label>
                <input id="libTitrArt" class="form-control" type="text" name="libTitrArt">
                <label for="libChapoArt">Chapô</label>
                <textarea id="libChapoArt" class="form-control" type="text" name="libChapoArt">
                </textarea>
                <label for="libAccrochArt">Acccroche</label>
                <input id="libAccrochArt" class="form-control" type="text" name="libAccrochArt">
                <label for="parag1Art">Paragraphe 1</label>
                <textarea id="parag1Art" class="form-control" type="text" name="parag1Art">
                </textarea>
                <label for="libSsTitr1Art">Sous-titre 1</label>
                <input id="libSsTitr1Art" class="form-control" type="text" name="libSsTitr1Art">
                <label for="parag2Art">Paragraphe 2</label>
                <textarea id="parag2Art" class="form-control" type="text" name="parag2Art">
                </textarea>
                <label for="libSsTitr2Art">Sous-titre 2</label>
                <input id="libSsTitr2Art" class="form-control" type="text" name="libSsTitr2Art">
                <label for="parag3Art">Paragraphe 3</label>
                <textarea id="parag3Art" class="form-control" type="text" name="parag3Art">
                </textarea>
                <label for="libConclArt">Conclusion</label>
                <textarea id="LibConclArt" class="form-control" type="text" name="libConclArt">
                </textarea>
                <label for="numThem">Numéro thématique</label>
                <input id="numThem" class="form-control" type="text" name="numThem">

                <label for="urlPhotArt"></label>
                <input type="file" name="file" id="file">
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
<?php include '../../../footer.php'; ?>