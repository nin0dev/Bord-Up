<?php

include '../../../header.php';

//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

$numMemb = $_GET ['numMemb'];
//$numMemb = sql_select("STATUT","numMemb")["4"]['numMemb'];

$prenomMemb = sql_select("MEMBRE", "prenomMemb", "numMemb = $numMemb")[0]['prenomMemb'];
$nomMemb = sql_select("MEMBRE", "nomMemb", "numMemb = $numMemb")[0]['nomMemb'];
$eMailMemb = sql_select("MEMBRE", "eMailMemb", "numMemb = $numMemb")[0]['eMailMemb'];


?>

<!--Bootstrap form to deletew status-->
        <div class="col-md-10">
            <h1>Edit Member</h1>
            <!--Form to delete status-->
            <form action="<?php echo ROOT_URL . '/api/users/update.php' ?>" method="post">
                <div class="form-group">
                    <label for="prenomMemb">Prénom</label>
                    <input id="prenomMemb" class="form-control" type="text" name="prenomMemb" value="<?php echo($prenomMemb); ?>">                    
                    <label for="nomMemb">Nom</label>
                    <input id="nomMemb" class="form-control" type="text" name="nomMemb" value="<?php echo($nomMemb); ?>">                    
                    <label for="eMailMemb">Email</label>
                    <input id="eMailMemb" class="form-control" type="email" name="emailMemb" value="<?php echo($eMailMemb); ?>">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-warning">Edit</button>
                </div>
            </form>
        </div>
<?php include '../../../footer.php'; ?>