<?php

require_once("config.class.php");

$sql = new Sql();

$users = $sql->select("SELECT * FROM tb_user");

echo json_encode($users);


?> 