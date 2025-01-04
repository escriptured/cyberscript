<?php
// Read README.md for
// Legal, Terms and Conditions
// Proprietary Source-Code
// Mr Andrew. O. E. N. J
/* Insures the customer has
   unique universal word data,
   for database privilages and
   general use.
*/


include 'generic.php';
$o=[];
$w=[];
$pass=0;

function universal_auth_db($a) {

   return true;
}
if(!isset($_GET["lwl"])) {}else{
     if(!empty(trim($_GET["lwl"]))) {
        $pass=1;}}

if(!isset($_GET["swl"])) {}else{
     if(!empty(trim($_GET["swl"]))) {
        $pass=$pass +2;}}

if(!isset($_GET["fmt"])) {}else{
     if(!empty(trim($_GET["fmt"]))) {
       $fmt=trim($_GET["fmt"]);
       $pass=$pass+4;}}  


$uuw=false;
while ($uuw==false) {
       $w["created"]=join(' ',cur_dt());

       //...
       $v = trim($_GET["lwl"]);
       if (is_numeric($v)) {
         if($v < 32) {$vo=32;}
       } else { $vo=32;}
       $w["long_word_api-key"]=[series($vo)];

       //...
       $v = trim($_GET["swl"]);
       if (is_numeric($v)) {
         if($v < 16) {$vo=16;}
       } else { $vo=16;}
       $w["short_word"][] =[series($vo)];
       $w["short_word"][]=[series($vo)];
       $w["short_word"][] =[series($vo)];
       $uuw = universal_auth_db($w);}

switch ($pass) {
    case 7:
       echo json_encode($w);
       break;
     default:
       $res = join('<br><br>',$w);
       $o[]='<html>
              <meta name="viewport" content="width=device-width, initial-scale=1.0" />
              <body style="background-color:grey;font-color:red">
       ';
       $o[]='<p style="word-wrap:break-word">'.$res.'</p>';
       $o[]='</body></html>';
       echo join('',$o);}
?>
