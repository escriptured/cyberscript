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
if(!isset($_GET["lwl"])) {}else{
     if(!empty($_GET["lwl"])) {
        $pass=1;}}

if(!isset($_GET["swl"])) {}else{
     if(!empty($_GET["swl"])) {
        $pass=$pass +2;}}

if(!isset($_GET["fmt"])) {}else{
     if(!empty($_GET["fmt"])) {
       $fmt=$_GET["fmt"];
       $pass=$pass+4;}}   

$uuw=false;
while ($uuw==false) {
       $w[]=cur_dt();
       $w[]=series($_GET["lwl"]);
       $w[] =series($_GET["swl"]);
       $w[]=series($_GET["swl"]);
       $w[] =series($_GET["swl"]);
       $uuw = true;}

switch ($pass) {
    case 7:
       echo json_encode($w);
       break;
     default:
       echo join('',$o);}
?>
