<?php 
include('../dash_functions.php');

foreach ($_POST as $value => $key) {
    echo($value . " " . $key . "<br>");
}

$connection = db_connect();

if (empty($_POST)) {
    echo("Post is empty");
} else {
    switch ($_POST['table']) {
        case 'question_bank':
            echo("Question Bank <br>");
            $query =    "INSERT INTO " . $_POST['table'] 
                        . " (`categoryId`, `subCategory`, `questionText`, `answerA`, `answerB`, `answerC`, `answerD`, `theAnswer`, `imageUrl`) 
                        VALUES (" . $_POST['categoryName'] . ", " . $_POST['vehicleCategory'] . ", '" . $_POST['question'] . "', '" 
                        . $_POST['answerA'] . "', '" . $_POST['answerB'] . "', '" . $_POST['answerC'] . "', '" . $_POST['answerD'] 
                        . "', '" . $_POST['theAnswer'] . "', '" . $_POST['imageUrl'] . "');";
            echo($query . "<br>");           
            break;
    }
    $queryResult = mysqli_query($connection, $query);
    if (!$queryResult) {
        echo("Error: " . $query . "<br>" . mysqli_error($connection));
    }    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dashStyle.css">
    <title>Document</title>
</head>
<body>
    
    <form action="index.php" method="POST" class="normal-form">
        <input type="hidden" class="hidden" name="table" value="question_bank">
        <h2 class="form-title a-row">
            Question Input:
        </h2>
        <div class="a-row">
            <label for="categoryName" class="a-label">Category Name: </label>
            <select name="categoryName">
                <option value="1">Road Rules</option>
                <option value="2">Road Signs</option>
                <option value="3">Vehicle Control</option>
            </select>
        </div>
        <div class="a-row">
            <label for="vehicleCategory" class="a-label">Vehicle Category: </label>
            <select name="vehicleCategory">
                <option value="4">All Categories</option>
                <option value="1">Motorcycle</option>
                <option value="2">Normal Car</option>
                <option value="3">Heavy Vehicle</option>
            </select>            
        </div>
        <div class="a-row">
            <label for="question" class="a-label">Question: </label>
            <textarea type="text" class="an-input" cols="50" rows="5" name="question" placeholder="Enter Question"></textarea>
        </div>
        <div class="a-row">
            <label for="answerA" class="a-label">Answer A: </label>
            <input type="text" class="an-input" name="answerA" placeholder="Answer A">
        </div>
        <div class="a-row">
            <label for="answerB" class="a-label">Answer B: </label>
            <input type="text" class="an-input" name="answerB" placeholder="Answer B">
        </div>
        <div class="a-row">
            <label for="answerC" class="a-label">Answer C: </label>
            <input type="text" class="an-input" name="answerC" placeholder="Answer C">
        </div>
        <div class="a-row">
            <label for="answerD" class="a-label">Answer D: </label>
            <input type="text" class="an-input" name="answerD" placeholder="Answer D">
        </div>
        <div class="a-row">
            <label for="theAnswer" class="a-label">The Answer: </label>
            <select name="theAnswer">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
            </select>
        </div>
        <div class="a-row">
            <label for="imageUrl" class="a-label">Image Name(.png): </label>
            <input type="text" class="an-input" name="imageUrl" placeholder="image.png">
        </div>
        <div class="a-row">
            <button type="submit">Submit Question</button>
        </div>
    </form>
</body>
</html>