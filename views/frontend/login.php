<?php
include '../../header.php';

?>

<form method="post">
    <input type="password" name="password" placeholder="Mot de passe" require>
    <input type="cpassword" name="cpassword" id="cpassword" require>
    <input type="submit" name="formsend" id="formsend" placeholder="Envoyer">
</form>

<?php
include '../../footer.php';

?>