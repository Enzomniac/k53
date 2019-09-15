<?php
echo("Login Script<br><br>");

echo("Input Data<br>");
var_dump($_POST);

if (isset($_POST['guest'])) {
    echo("Is Guest");
} else {
    echo("Attempted Login");
}






//REDIRECT TO REQUESTED PAGE

//DONT CLOSE PHP