<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
$libCom = $_POST['libCom'];
sql_insert('COMMENT', 'libCom', "'$libCom'");
header('Location: ../../views/backend/comments/list.php');