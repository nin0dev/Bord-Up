<?php

require_once $_SERVER['DOCUMENT_ROOT']. '/config.php';


$prenomMemb = $_POST['prenomMemb'];
$nomMemb = $_POST['nomMemb'];
$pseudoMemb = $_POST['pseudoMemb'];
$eMailmMemb = $_POST['eMailMemb'];
$numMemb = $_POST['numMemb'];


sql_update('MEMBRE',"prenomMemb='$prenomMemb'", "pseudoMemb='$pseudoMemb'", "eMailMemb='$eMailMemb'", "numMemb =$numMemb");

header('Location: ../../views/backend/members/list.php');