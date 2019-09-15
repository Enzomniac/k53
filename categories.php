<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="test.php" class="category-choice" method="post">
        <input type="hidden" name="category" value="rules" method="post">
        <button type="submit">Road Rules</button>
    </form>
    <form action="test.php" class="category-choice" method="post">
        <input type="hidden" name="category" value="signs">
        <button type="submit">Road Signs</button>
    </form>
    <form action="test.php?category=control" class="category-choice" method="post">
        <input type="hidden" name="category" value="control"> 
        <button type="submit">Vehicle Control</button>
    </form>
</body>
</html>