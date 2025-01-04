<?php

include 'generic.php';
$o=[];
$pass=0;
if(isset($_GET["lwl"]) {
     if(empty($_GET["lwl"]) {
        $pass=1;
     }
}

if(isset($_GET["swl"]) {
     if(empty($_GET["swl"]) {
        $pass=2;
     }
}

   
echo "aaaa";

$o[]='<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>UUW</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
';
switch ($pass) {
    case 3:

    $o[]= $_GET["lwl"];
    default:

$o[]='
        <div class="container">
            <div class="header">
                <a href="uuw.php?lwl=256&swl=16" <button class="btn" id="btn">Generate</button></a>
            </div>
        </div>
     ';
}    
$o[]='
</body>
</html>';

echo join('',$o);
?>
