<?php

function buildState($connection) {
    echo("Building State<br>");
    //make object from database
    $phpState = "Nothing Yet";
    $stateConnection = db_connect();
    //return user from db
    $stateQuery = "SELECT * FROM question_bank
    WHERE categoryId = '" . $categoryId . "'";
        //based on user and questions
        //encode to json
        //give to client

    //switch to JS
    echo("State Completed ------------------------------");
    return($phpState);
}

function db_connect() {
    $connection = mysqli_connect('localhost', 'root', '', 'k53v1_db');
    if (!$connection) {
        die("DB Connection Failed: " . mysqli_connect_error());
    }
    return $connection;
}
?>