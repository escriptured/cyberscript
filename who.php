<?php
// Non-free licence
// Read README.md
// The owner and developer AOENJ
// requires your upfront fees
// to further develop his bespoke
// models and methodologies.
// thank you.
// contact developer at iamandrewj@outlook.com
$new_pass=false;
$w=[];
$try_max=20;

function first_universal_auth_db($a) {
  $pass=[false,-1];
  $d=[];
  for($v =1;$v<count($a)-1;$v++) {
       $d[]=$a[$v];
       $f= '_@_'.join('/',$d);
       
       if(is_file_existing($f)) {
         $pass=[false,2];
       } else {
         created($f);
         if(is_file_existing($f)) {
           writef($f.'end_point.php',json_encode($a,JSON_PRETTY_PRINT),"w");
           $pass=[true,1];
         }
       }
  }
  return $pass;
}

function universal_error_code($a) {
  $e=[];
  $msg="";
  switch ($a) {
    case 1:
      $msg =  "exceeded tries";
      break;
    default:
  }
  
  $e["error"]["code"]=$a;
  $e["error"]["message"]=$msg;
  return $e;
}
while ($new_pass) {
$try++;
$w[]=series(128);
$w[]=series(32);
$w[]=series(32);
$w[]=series(32);
$existence=first_universal_auth_db($w);
$new_pass=$existence[0];
if($try==$try_max){
  $w=universal_error_code(1);
  $new_pass=true;}
}

echo json_encode($w);
?>


