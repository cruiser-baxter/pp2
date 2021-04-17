<?php
/*
  Author: Cruiser Baxter
 Date: 17-Apr-2021
 Assignment: Pair Program 2
 File URL: http://cbaxter.greenriverdev.com/SDEV328/pp2/index.php
  */

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 2</title>
</head>
<body>
<header>
    <h1>Pair Program 2</h1>
</header>
<?php
echo "<h2>PHP Array Practice</h2>";

$numbers = array(7, 9, 8, 9, 8, 8, 6);
include("functions.php");
echo "<h3>Step 3: </h3>";
printArr($numbers);
?>

</body>
</html>
