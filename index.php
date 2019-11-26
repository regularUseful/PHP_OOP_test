<?php
    declare(strict_types = 1);
    include "includes/autoLoad.php";
?>

<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>
      <form action="includes/calc.inc.php" method="POST">
        <p>My PHP calculator</p>
        <input type="number" name="num1" placeholder="First Number">
        <select name="oper">
            <option value="add">Add</option>
            <option value="sub">Sub</option>
            <option value="mul">Mul</option>
            <option value="div">Div</option>
        </select>
        <input type="number" name="num2">
        <button type="submit" name="submit">Calculate</button>
      </form>
    </body>
</html>