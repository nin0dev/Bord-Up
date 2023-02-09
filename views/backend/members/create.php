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
            <h1>Create Member</h1>
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/users/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="prenomMemb">Prénom</label>
                    <input id="prenomMemm" class="form-control" type="text" name="prenomMemb">
                    <label for="nomMemb">Nom</label>
                    <input id="nomMemb" class="form-control" type="text" name="nomMemb">
                    <label for="pseudoMemb">Pseudo</label>
                    <input id="pseudoMemb" class="form-control" type="text" name="pseudoMemb">
                    <label for="passMemb">Mot de passe</label>
                    <input id="passMemb" class="form-control" type="password" name="passMemb">
                    <label for="eMailMemb">Email</label>
                    <input id="eMailMemb" class="form-control" type="text" name="eMailMemb">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>

<?php include '../../../footer.php'; ?>