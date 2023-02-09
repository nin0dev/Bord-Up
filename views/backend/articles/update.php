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

$libTitreArt = sql_select("ARTICLE", "libTitrArt = $libTitrArt", "libChapoArt = $libChapoArt", "libAccrochArt = $libAccrochArt", "parag1Art = $parag1Art", "libSsTitr1Art = $libSsTitr1Art", "libSsTitr1Art = $libSsTitr1Art", "parag2Art = $parag2Art", "libSsTitr2Art = $libSsTitr2Art", "parag3Art = $parag3Art", "libConclArt = $libConclArt", "urlPhotArt = $urlPhotArt", "numArt = $numArt")[0]['libTitrArt'];


?>

<!--Bootstrap form to deletew status-->
        <div class="col-md-10">
            <h1>Edit Article</h1>
            <!--Form to delete status-->
            <form action="<?php echo ROOT_URL . '/api/articles/update.php' ?>" method="post">
                <div class="form-group">
                    <label for="libTitrArt">Titre</label>
                    <input id="numCom" class="form-control" style="display: none;" type="text" name="numArt" value="<?php echo($numCom); ?>" readonly="readonly">
                    <input id="libCom" class="form-control" type="text" name="libCom" value="<?php echo($libCom); ?>">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-warning">Edit</button>
                </div>
            </form>
        </div>

<?php include '../../../footer.php'; ?>