<?php

require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';


$libTitrArt = $_POST['libTitrArt'];
$numArt = $_POST['numArt'];


sql_update('ARTICLE',"libTitrArt='$libTitrArt'","numArt =$numArt");

header('Location: ../../views/backend/articles/list.php');