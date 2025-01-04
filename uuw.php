<?php

include 'generic.php';
$gui=[];
$o=[];
$w=[];
$pass=0;
if(!isset($_GET["lwl"])) {}else{
     if(empty($_GET["lwl"])) {
        $pass=1;
     }
}

if(!isset($_GET["swl"])) {}else{
     if(empty($_GET["swl"])) {
        $pass=2;
     }
}

if(isset($_GET["fmt"])) {}else{
     if(empty($_GET["fmt"])) {
       $fmt=$_GET["fmt"];
     }
}   
   


switch ($pass) {
    case 3:
    $w[]= series($_GET["lwl"]);
    $w[] =series($_GET["swl"]);
    $w[]=series($_GET["swl"]);
    $w[] =series($_GET["swl"]);
     break;
    default:

$gui[]='
        <div class="container">
            <div class="header">
                <a href="uuw.php?lwl=256&swl=16" <button class="btn" id="btn">Generate</button></a>
            </div>
        </div>
     ';
}    


switch ($fmt) {
     case "json":
         switch ($pass) {
              case 7:
              $o[]=json_encode($w);
              break;
              default:
         }
        break;
     default:
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
       $o[]=join('',$gui);
       switch ($pass) {
            case 3
               $o[]=join('<br><br>',$w);
               break:
            default:
       }

       $o[]='
       </body>
       </html>';
}


echo join('',$o);
?>
