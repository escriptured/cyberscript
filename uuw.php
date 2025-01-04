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
       $v_pass=false;
       $vo=32;
       if(isset($_GET["lwl"])) {
         if(!empty(trim($_GET["lwl"]))) {
           if (is_numeric($v)) {
              if($v >= 32) {
              $vo =$_GET["lwl"];
              $v_pass=true;
              }
           }
         }
       }
       if (!$v_pass) {$vo=32;}
       $w[]=series($vo);

       $v_pass=false;
       $vo=16;
       if(isset($_GET["swl"])) {
         if(!empty(trim($_GET["swl"]))) {
           if (is_numeric($v)) {
              if($v >= 16) {
              $vo =$_GET["swl"];
              $v_pass=true;
              }
           }
         }
       }
   
       if (!$v_pass) {$vo=16;}
       $w[] =series($vo);
       $w[]=series($vo);
       $w[] =series($vo);
       $uuw =universal_auth_db($w);}

echo "7576 ".$pass;
switch ($pass) {
    case 5:
    case 6:
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
