<?php
function db_connect() {
    $connection = mysqli_connect('localhost', 'root', '', 'k53v1_db');
    if (!$connection) {
        die("DB Connection Failed: " . mysqli_connect_error());
    }
    return $connection;
}
?>