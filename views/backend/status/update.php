<?php

include '../../../header.php';

//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

$numStat = $_GET ['numStat'];
//$numStat = sql_select("STATUT","numStat")["4"]['numStat'];

$libStat = sql_select("STATUT", "libStat", "numStat = $numStat")[0]['libStat'];


?>

<!--Bootstrap form to deletew status-->
        <div class="col-md-10">
            <h1>Create keyword</h1>
            <!--Form to update status-->
            <form action="<?php echo ROOT_URL . '/api/status/update.php' ?>" method="post">
                <div class="form-group">
                    <label for="libStat">Statut</label>
                    <input id="numStat" class="form-control" style="display: none;" type="text" name="numStat" value="<?php echo($numStat); ?>" readonly="readonly">
                    <input id="libStat" class="form-control" type="text" name="libStat" value="<?php echo($libStat); ?>">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-warning">Edit</button>
                </div>
            </form>
        </div>

<?php include '../../../footer.php' ?>