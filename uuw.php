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
       if(isset($_GET["lwl"])) {echo 1;
         if(!empty(trim($_GET["lwl"]))) {echo 2;
           if (is_numeric($_GET["lwl"])) {echo 3;
              if($_GET["lwl"] >= 32) {echo 4;
              $vo =$_GET["lwl"];
              $v_pass=true;
              }
           }
         }
       }
       echo 'pass -'.$v_pass.'#';
       if (!$v_pass) {$vo=32;}
       $w[]=series($vo);

       $v_pass=false;
       $vo=16;
       if(isset($_GET["swl"])) {echo 5;
         if(!empty(trim($_GET["swl"]))) {echo 6;
           if (is_numeric($_GET["swl"])) {echo 7;
              if($_GET["swl"] >= 16) {echo 7;
              $vo =$_GET["swl"];
              $v_pass=true;
              }
           }
         }
       }

       echo $v_pass;
       if (!$v_pass) {$vo=16;}
       $w[] =series($vo);
       $w[]=series($vo);
       $w[] =series($vo);
       $uuw =universal_auth_db($w);}

echo "-65767".$pass;
switch ($pass) {
    case 4:
    case 5:
    case 6:
    case 7:
       echo json_encode($w);
       break;
     default:
       $res = join('<br><br>',$w);
       $o[]='<html>
              <meta name="viewport" content="width=device-width, initial-scale=1.0" />
              <body style="background-color:black;color:red">
       ';
       $o[]='<p style="border:5px;word-wrap:break-word">'.$res.'</p>';
       $o[]='</body></html>';
       echo join('',$o);}
?>
