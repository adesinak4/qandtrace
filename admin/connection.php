<?php
/*    $servername = "localhost";
    $username = "Queue";
    $password = "b%a6ObM=qrE(";
    $dbname = "queuedb";*/
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "queuedb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>