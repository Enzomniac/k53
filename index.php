<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form class="form__login" action="login.php" method="post">
        <div class="form__row">
            <label for="username">Username: </label>
            <input type="text" name="userName" placeholder="USERNAME" value="RUPTO">
        </div>
        <div class="form__row">
            <label for="password">Password: </label>
            <input type="text" name="password" value="1234">
        </div>
        <div class="form__row">
            <button>Login</button>
        </div>
        <div class="form__row">- - - OR - - -</div>
    </form>
    <form class="form__login guest" action="login.php" method="post">
        <input type="hidden" name="userName" value="GUEST">
        <input type="hidden" name="password" value="1234">

        <div class="form__row">
            <button>Continue as Guest</button>
        </div>
    </form>    
</body>
</html>