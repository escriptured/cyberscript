<?php

include 'generic.php';
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
        $pass=$pass +2;
     }
}

if(!isset($_GET["fmt"])) {}else{
     if(empty($_GET["fmt"])) {
       $fmt=$_GET["fmt"];
       $pass=$pass+4;
     }
}   

    $w[]=series($_GET["lwl"]);
    $w[] =series($_GET["swl"]);
    $w[]=series($_GET["swl"]);
    $w[] =series($_GET["swl"]);


switch ($pass) {
    case 7:
       echo json_encode($w);
       break;
     default:
       
       echo join('',$o);
}
?>
