<?php

include '../../../header.php';

//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

$libTitrArt = $_GET ['libTitrArt'];
$libChapoArt = $_GET ['libChapoArt'];
$libAccrochArt = $_GET ['libAccrochArt'];
$parag1Art = $_GET ['parag1Art'];
$libSsTitr1Art = $_GET ['libSsTitr1Art'];
$parag2Art = $_GET ['parag2Art'];
$libSsTitr2Art = $_GET ['libSsTitr2Art'];
$parag3Art = $_GET ['parag3Art'];
$libConclArt = $_GET ['libConclArt'];
$urlPhotArt = $_GET ['urlPhotArt'];
$numArt = $_GET ['numArt'];

//$numStat = sql_select("STATUT","numStat")["4"]['numStat'];

$article = sql_select("ARTICLE", "libTitrArt = $libTitrArt", "libChapoArt = $libChapoArt", "libAccrochArt = $libAccrochArt", "parag1Art = $parag1Art", "libSsTitr1Art = $libSsTitr1Art", "libSsTitr1Art = $libSsTitr1Art", "parag2Art = $parag2Art", "libSsTitr2Art = $libSsTitr2Art", "parag3Art = $parag3Art", "libConclArt = $libConclArt", "urlPhotArt = $urlPhotArt", "numArt = $numArt")[0]['libTitrArt'];

?>


        <div class="col-md-10">
            <h1>Edit Article</h1>
            <!--Form to delete status-->
            <form action="<?php echo ROOT_URL . '/api/articles/update.php' ?>" method="post">
                <div class="form-group">
                    <label for="libTitrArt">Titre</label>
                    <input id="numArt" class="form-control" style="display: none;" type="text" name="numArt" value="<?php echo($numArt); ?>" readonly="readonly">
                    <input id="libTitrArt" class="form-control" type="text" name="libTitrArt" value="<?php echo($libTitrArt); ?>">
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
                    <input type="file" name="file" id="file">
                    <input type="submit" value="Upload">

                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-warning">Edit</button>
                </div>
            </form>
        </div>

<?php include '../../../footer.php'; ?>