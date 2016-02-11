<?php

if (!isset($_SESSION["CMSRolUser"])) {
    header("Location: ../../../dashboard.php");
}
?>