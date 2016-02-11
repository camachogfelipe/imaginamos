<?php

if (isset($_POST["bandera"])) {
    if ($_POST["bandera"] == "123") {
        $newlss = DbHandler::GetAll("SELECT * FROM form_news WHERE correo='" . $_POST["correo"]."'");
        if (count($newlss) > 0) {
            echo "<script>window.location.href='index.php?seccion=contacto&no'</script>";
        } else {
           
            $ing = DbHandler::Execute(
                            "INSERT INTO form_news 
                        (
                        id,
                        nombre,
                        correo,
                        suscripcion
                        )
                        VALUES
                        (
                        NULL,
                        '" . utf8_decode($_POST["nombre"]) . "',
                        '" . $_POST["correo"] . "',
                        '" . utf8_decode($_POST["suscripcion"]) . "'
                        )");
            echo "<script>window.location.href='index.php?seccion=contacto&yes'</script>";
        }
    }
}
?>