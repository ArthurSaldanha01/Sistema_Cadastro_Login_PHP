<?php
    //session_start();

    $servername = "localhost:3307";
    $username = "arthur";
    $password = "123456";
    $dbname = "login";


    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if($conn->connect_error) {
        die("falha na conexão: " .$conn->connect_error);
    }


?>