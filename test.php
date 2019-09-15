<?php
if (empty($_POST)) {
    echo("No Category Selected");
    die("Died");
} else {
    echo($_POST['category'] . "<br>");
    $category = $_POST['category'];
    if ($category == 'rules') {$categoryId = '1';}
    elseif ($category == 'signs') {$categoryId = '2';}
    elseif ($category == 'control') {$categoryId = '3';}
}

include('dash_functions.php');
$connection = db_connect();
$phpState = buildState($connection, $categoryId);
var_dump($phpState);


$theQuery =     "SELECT * FROM question_bank
                WHERE categoryId = '" . $categoryId . "'";

$dbResult = mysqli_query($connection, $theQuery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="js_modules/test.js"></script>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav class="nav">
        <a href="profile.php" class="link">My Profile</a>
        <a href="categories.php" class="link">Change Category</a>
    </nav>
    <?php 
    if (mysqli_num_rows($dbResult) > 0) {
        $questionNumber = 1;
        while ($aQuestion = mysqli_fetch_assoc($dbResult)) {
            if ($questionNumber == 1) {$show = 'show';} else {$show = 'hidden';}
    ?>
    <div class="card <?php echo($show); ?>" id="<?php echo($aQuestion['questionId']); ?>">
        <div class="question">
            <?php echo($questionNumber) . ". " . $aQuestion['questionText']; ?>
        </div>
        <div class="theImage">
            <?php 
            if (!empty($aQuestion['imageUrl'])) {echo('<img src="assets/signs/' . $aQuestion['imageUrl'] . '" alt="">');}
            ?>
        </div>
        <div class="answers">
            <?php
                $theAnswer = $aQuestion['theAnswer'];
            ?>
            <div onclick="selectAnswer('A')" class="an-answer selectA <?php if ($theAnswer == "A") {echo('the-answer');} ?>">
                A. <?php echo($aQuestion['answerA']); ?>
            </div>
            <div onclick="selectAnswer('B')" class="an-answer selectB <?php if ($theAnswer == "B") {echo('the-answer');} ?>">
                B. <?php echo($aQuestion['answerB']); ?>
            </div>
            <div onclick="selectAnswer('C')" class="an-answer selectC <?php if ($theAnswer == "C") {echo('the-answer');} ?>">
                C. <?php echo($aQuestion['answerC']); ?>
            </div>
            <div onclick="selectAnswer('D')" class="an-answer selectD <?php if ($theAnswer == "D") {echo('the-answer');} ?>">
                D. <?php echo($aQuestion['answerD']); ?>
            </div>
        </div>
    </div>
    <?php
            $questionNumber++;
        }
    }
    ?>
    <div class="flow">
        <button>CHECK ANSWER</button>
        <button onclick="questionCycle()">NEXT QUESTION</button>
    </div>
    
    
</body>
</html>