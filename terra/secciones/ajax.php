<?php

include("admin/core/class/db.class.php");
$db = new Database();
$db->connect();

$id = $_POST["id"];
$db->doQuery("INSERT INTO leidos
                            (
                            id,
                            id_usuario,
                            leido)
                            VALUES(
                            NULL,
                            " . $_SESSION['id'] . ",
                            $id                            
                            );", INSERT_QUERY);
echo 1;
?>