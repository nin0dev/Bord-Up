<?php

include '../../../header.php';

//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

$numMotCle = $_GET ['numMotCle'];
//$numMotCle = sql_select("STATUT","numMotCle")["4"]['numMotCle'];

$libMotCle = sql_select("MOTCLE", "libMotCle", "numMotCle = $numMotCle")[0]['libMotCle'];


?>

<!--Bootstrap form to deletew status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Update Keywords</h1>
        </div>
        <div class="col-md-12">
            <!--Form to delete status-->
            <form action="<?php echo ROOT_URL . '/api/status/update.php' ?>" method="post">
                <div class="form-group">
                    <label for="libMotCle">libMotCle</label>
                    <input id="numMotCle" class="form-control" style="display: none;" type="text" name="numMotCle" value="<?php echo($numMotCle); ?>" readonly="readonly">
                    <input id="libMotCle" class="form-control" type="text" name="libMotCle" value="<?php echo($libMotCle); ?>">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-info">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>