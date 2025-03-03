<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="verifactionuser.php" method="post">
    <br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>
        <br>
        <label for="password">Password:</label><br>
        <input type="text" id="password" name="password"><br>
        <br>
    <button type="submit" name="action" value="aj">ajouger</button>
    <br>
    <label for="id">id:
    <input type="text" id="id" name="id">
    </label>
    <button type="submit" name="action" value="su">supp</button>
    <button type="submit" name="action" value="sh">show</button>
    <button type="submit" name="action" value="up">update</button>
    </form>

    
</body>
</html>