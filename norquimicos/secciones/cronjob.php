<?php
include("admin/core/class/db.class.php");
$db = new Database();
$db->connect();
$db->doQuery("UPDATE cotizaciones SET estado='incompleto' WHERE estado='revisando'", UPDATE_QUERY);
?>