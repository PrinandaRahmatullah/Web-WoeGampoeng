<?php
    $DB_NAME = 'woegampoeng';
    $DB_HOST = 'localhost';
    $DB_USER = 'root';
    $DB_PASS = '';
    $conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

    if (mysqli_connect_errno($conn)) {
        echo "Failed to connect to mySQL: " . mysqli_connect_error();
    }

    date_default_timezone_set("Asia/Jakarta");
?>