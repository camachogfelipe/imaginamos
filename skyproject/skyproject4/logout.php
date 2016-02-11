<?php
require_once './core/validation.php';
session_destroy();
header("Location: index.php");
?>
