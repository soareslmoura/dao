<?php

require_once("config.class.php");

$user = new Usuario();

$user->loadById(3);

echo $user;



/*
$sql = new Sql();

$users = $sql->select("SELECT * FROM tb_user");

echo json_encode($users);
*/

?> 