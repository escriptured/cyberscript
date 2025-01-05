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

// PHASE : CI
include 'generic.php';
$o=[];
$w=[];
$pass=0;



function universal_auth_db($a) {
   $re=[-1,""];
   $d=[];
   for($v =1;$v<count($a)-1;$v++) {
       $d[]=$a[$v];
       $f= '_@_'.join('/',$d);
       if(is_file_existing($f)) {
          if(is_file_existing($f.'endpoint.php')) {            
            $re=[2,json_decode(readf($f.'endpoint.php',0),true)];
          } else {
             writef($f.'endpoint.php',json_encode($a,JSON_PRETTY_PRINT),"w");
             $re=[3,json_decode(readf($f.'endpoint.php',"1"),true)];
          }
       } else {
          if(created($f)) {
            writef($f.'endpoint.php',json_encode($a),"w");
            $re=[1,json_decode(readf($f.'endpoint.php',"1"),true)];
          }
       }
   }
   return $re;
}


$fe=universal_auth_db(["created"=>"Jan-2025","lw" =>"test_sandbox","sw_1" =>"1","sw_2"=> "1","sw_3"=>"3"]);
if($fe[0]>0) {
   echo var_dump($fe[1]);
}


/*
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

       //...
       $v_pass=false;
       $vo=32;
       if(isset($_GET["lwl"])) {
         if(!empty(trim($_GET["lwl"]))) {
           if (is_numeric($_GET["lwl"])) {
              if($_GET["lwl"] >= 32) {
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
           if (is_numeric($_GET["swl"])) {
              if($_GET["swl"] >= 16) {
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
              <body style="background-color:green;color:white">
       ';
       $o[]='<p style="border:5px;word-wrap:break-word;font-size:65%">'.$res.'</p>';
       $o[]='</body></html>';
       echo join('',$o);}

*/

?>
