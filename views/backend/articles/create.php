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
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Create Article</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/articles/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="libTitrArt">Titre</label>
                    <input id="numArt" class="form-control" type="text" name="libTitrArt">
                    <label for="libChapoArt">Chapô</label>
                    <textarea id="numArt" class="form-control" type="text" name="libChapoArt">
                    </textarea>
                    <label for="libAccrochArt">Acccroche</label>
                    <input id="numArt" class="form-control" type="text" name="libAccrochArt">
                    <label for="parag1Art">Paragraphe 1</label>
                    <textarea id="numArt" class="form-control" type="text" name="parag1Art">
                    </textarea>
                    <label for="libSsTitr1Art">Sous-titre 1</label>
                    <input id="numArt" class="form-control" type="text" name="libSsTitr1Art">
                    <label for="parag2Art">Paragraphe 2</label>
                    <textarea id="numArt" class="form-control" type="text" name="parag2Art">
                    </textarea>
                    <label for="libSsTitr2Art">Sous-titre 2</label>
                    <input id="numArt" class="form-control" type="text" name="libSsTitr2Art">
                    <label for="parag3Art">Paragraphe 3</label>
                    <textarea id="numArt" class="form-control" type="text" name="parag3Art">
                    </textarea>
                    <label for="libConclArt">Conclusion</label>
                    <textarea id="numArt" class="form-control" type="text" name="libConclArt">
                    </textarea>
                    <label for="urlPhotArt"></label>
                    <input id="numArt" class="form-control" type="text" name="urlPhotArt">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>