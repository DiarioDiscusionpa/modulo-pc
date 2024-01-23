<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $id_pc = $_POST["id_pc"];

    header("Location: index.html");
    exit();
}
?>
