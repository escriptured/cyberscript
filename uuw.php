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
// DRAFT : B1.0.0.0


include 'generic.php';
$o=[];
$w=[];
$pass=0;

function universal_auth_db($a) {
   $re=[-1,""];
   $d=[];

        // create
    for($v =1;$v<count($a)-1;$v++) {
       $d[]=$a[$v];
       $f= 'x_@_'.join('/',$d);
       if(is_file_existing($f)) {
          if(is_file_existing($f.'endpoint.php')) {            
            $re=[2,json_decode(readf($f.'endpoint.php',"1"),true)];
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

/*function assemble_d($a) {
   return ["created"=>"'.$a[0].'","lw"=>"'.$a[1].'","sw_1"=>"'.$a[2].'","sw_2"=>"'.$a[3].'","sw_3"=>"'.$a[4].'"];}
*/
// Caseworker
//$example=universal_auth_db(assemble_d(["YeHtfc1n668RH125XQkgp1ZUqNDP36Yv","8sZ219rWuP34t7nv","4s52dY57s8ydZf9r","8kbm2b2yxNtfM6xP"]),1);
//echo '#### '.var_dump($example);

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


$uuw=[-1,""];
while ($uuw[0]<0) {
       $w=[];
       $ww["lw"]=join(' ',cur_dt());
       $w[]=$ww["lw"];
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
       $ww["1"]=series($vo);
       $w[]=$ww["1"];
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
       $ww["2"] =series($vo);
       $w[]=$ww["2"];
       $ww["3"]=series($vo);
       $w[]=$ww["3"];
       $ww["4"] =series($vo);
       $w[]=$ww["4"];
       $uuw=universal_auth_db($ww,1);}
       

//echo var_dump($dat[1])." ++ ";
echo " ___ ".$pass;
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

?>
