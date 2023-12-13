<?php
    $servername = "localhost";
    $Utilisateurname = "root";
    $password = "";
    $db = "projetkamel";

    $conn = new mysqli($servername, $Utilisateurname, $password, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>