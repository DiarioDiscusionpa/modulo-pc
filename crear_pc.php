<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $modelo = $_POST["modelo"];
    $procesador = $_POST["procesador"];

    header("Location: index.html");
    exit();
}
?>
