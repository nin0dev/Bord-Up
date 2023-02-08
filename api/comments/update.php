<?php

require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';


$libCom = $_POST['libCom'];
$numCom = $_POST['numCom'];


sql_update('COMMENT',"libCom='$libCom'", "numCom='$numCom'");

header('Location: ../../views/backend/comments/list.php');