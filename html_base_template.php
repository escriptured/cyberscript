<?php

$o=[];

$o[]='<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>GUID</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1>ID</h1>
                <p class="quote" id="quote">GUID</p>
                <button class="btn" id="btn">Generate</button>
            </div>
        </div>
        <!-- Javascript includes -->
        <script src="index.js"></script>
    </body>
</html>';

echo join('',$o);
