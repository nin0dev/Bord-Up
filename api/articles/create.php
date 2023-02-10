<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$libTitrArt = sql_escape($_POST['libTitrArt']);
$libChapoArt = sql_escape($_POST['libChapoArt']);
$libAccrochArt = sql_escape($_POST['libAccrochArt']);
$parag1Art = sql_escape($_POST['parag1Art']);
$libSsTitr1Art = sql_escape($_POST['libSsTitr1Art']);
$parag2Art = sql_escape($_POST['parag2Art']);
$libSsTitr2Art = sql_escape($_POST['libSsTitr2Art']);
$parag3Art = sql_escape($_POST['parag3Art']);
$libConclArt = sql_escape($_POST['libConclArt']);
$numThem = sql_escape($_POST['numThem']);
// $urlPhotArt = sql_escape($_POST['urlPhotArt']);

sql_insert('ARTICLE', 'libTitrArt, libChapoArt, libAccrochArt , parag1Art , libSsTitr1Art , parag2Art , libSsTitr2Art , parag3Art , libConclArt, numThem', "'$libTitrArt','$libChapoArt','$libAccrochArt','$parag1Art','$libSsTitr1Art','$parag2Art','$libSsTitr2Art','$parag3Art','$libConclArt', '$numThem'");
header('Location: ../../views/backend/articles/list.php');

?>