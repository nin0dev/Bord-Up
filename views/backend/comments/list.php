<?php

include '../../../header.php'; // contains the header and call to config.php

//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

//Load all statuses
$comments = sql_select("COMMENT", "*");
?>

<!-- Bootstrap default layout to display all status in foreach -->
        <div class="col-md-10">
            <h1>Comments</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($comments as $comment) { ?>
                        <tr>
                            <td><?php echo $comment['numCom']; ?></td>
                            <td><?php echo $comment['libCom']; ?></td>
                            <td>
                                <a href="update.php?numCom=<?php echo $comment['numCom']; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numCom=<?php echo $comment['numCom']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Create</a>
        </div>

<?php
include '../../../footer.php'; // contains the footer