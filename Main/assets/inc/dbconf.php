<?php
    //connect to the databse
    $servername = "localhost";
    $username = "zah8756";
    $password = "Sorus7#breathlessly";
    $dbname = "zah8756";

    //run your query
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>