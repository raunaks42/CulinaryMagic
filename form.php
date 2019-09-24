<?php
    include ("backend.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Input form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Form for everyday cooking</h1>
    <form method="post" action="backend.php">

        Choose meal<input type="radio" name="meal" value='BAAD' checked> Breakfast&All<br>
        <input type="radio" name="meal" value="Lunch & Dinner"> Lunch&Dinner<br>
        Choose type<input type="radio" name="type" value="YES" checked> Veg.<br>
        <input type="radio" name="type" value="NO"> Non-veg.<br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
        
    </form>
</body>
</html>