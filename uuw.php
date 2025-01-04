<?php

$o=[];

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
        <div class="container">
            <div class="header">
                <p class="quote" id="quote">Unique universal words</p>
                <button class="btn" id="btn">Generate</button>
            </div>
        </div>
        <!-- Javascript includes -->
        <script src="index.js"></script>
    </body>
</html>';

echo join('',$o);
?>
