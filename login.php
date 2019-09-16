<?php
echo("Login Script<br><br>");

echo("Input Data<br>");
var_dump($_POST);

if (isset($_POST['guest'])) {
    echo("Is Guest");
} else {
    echo("Attempted Login");
}

$userData = array(
    'username' => 'Richard',
    'password' => '1234'
);

var_dump($userData);
$encodingCheck = json_encode($userData);
var_dump($encodingCheck);





//REDIRECT TO REQUESTED PAGE

header("Location: http://localhost/k53/menu.php?" . $encodingCheck);

//DONT CLOSE PHP