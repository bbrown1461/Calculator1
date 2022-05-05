<?php
    include_once("connection.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form>
    <input type="text" name="num01" placeholder="Number 1">
    <input type="text" name="num02" placeholder="Number 2">
    <select name="operator">
        <option value="None">None</option>
        <option value="Add">Add</option>
        <option value="Subtract">Subtract</option>
        <option value="Multiply">Multiply</option>
        <option value="Divide">Divide</option>
    </select>

    <br>
    <button name="submit" value="submit" type="submit">Calculate</button>
</form>   

<p>The answer is:</p>

<?php
include_once("functions.php")
?>
</body>
</html>