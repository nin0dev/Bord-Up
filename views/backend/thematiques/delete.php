<?php
include '../../../header.php';
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

$numThem = $_GET['numThem'];
$libThem = sql_select("THEMATIQUE", "libThem", "numThem = $numThem")[0]['libThem'];

?>

<!--Bootstrap form to create a new status-->
        <div class="col-md-10">
            <h1>Delete Theme</h1>
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/thematiques/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="libThem">libThem</label>
                    <input id="numThem" class="form-control" style="display: none" type="text" name="numThem" value="<?php echo($numThem) ?>" readonly="readonly">
                    <input id="libThem" class="form-control" type="text" name="libThem" value="<?php echo($libThem) ?>" readonly="readonly">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirm deletion ?</button>
                </div>
            </form>
        </div>

<?php include '../../../footer.php'; ?>