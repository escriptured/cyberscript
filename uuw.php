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

function universal_auth_db($w) {
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
       $w[]=join(' ',cur_dt());
       $w[]=series(trim($_GET["lwl"]));
       $w[] =series(trim($_GET["swl"]));
       $w[]=series(trim($_GET["swl"]));
       $w[] =series(trim($_GET["swl"]));
       $uuw = universal_auth_db($w);}

switch ($pass) {
    case 7:
       echo json_encode($w);
       break;
     default:
       $res = join('<br><br>',$w);
       $o[]='

       ';
       $o[]='<p style="word-wrap:break-word">'.$res.'</p>';
       $o[]='</body></html>';
       echo join('',$o);}
?>
