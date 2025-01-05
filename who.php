<?php
// Legal, Terms and Conditions
// Proprietary Source-Code
// Mr Andrew. O. E. N. J
/* Insures the customer has
   unique universal word data,
   for database privilages and
   general use.
*/

// PHASE   : CD 
// RELEASE : B1.0.0.0
// Non-free licence
// Read README.md
// The owner and developer AOENJ
// requires your upfront
// fees
// to further develop his bespoke
// models and methodologies.
// thank you.
// developer contact is
// iamandrewj@outlook.com
$new_pass=false;
$w=[];
$try_max=20;
$condition=[128,64,64,64]

// PHASE : CI 
// DRAFT : B1.0.0.0
function first_universal_auth_db($a) {
  $directive=0;
  $pass=[false,-1,$directive];
  $d=[];
  for($v =1;$v<count($a)-1;$v++) {
       $d[]=$a[$v];
       $f= '_@_'.join('/',$d);
       
       if(is_file_existing($f)) {
         $pass=[false,2,$directive];
       } else {
         created($f);
         if(is_file_existing($f)) {
           writef($f.'end_point.php',json_encode($a,JSON_PRETTY_PRINT),"w");
           $pass=[true,1,$directive];
         }
       }
  }
  return $pass;
}

function universal_error_code($a) {
  $e=[];
  $msg="unknown error code";
  $directive=0;
  switch ($a) {
    case 1:
      $msg =  "exceeded tries";
      $directive=0;
      break;
    default:
  }
  
  $e["error"]["code"]=$a;
  $e["error"]["message"]=$msg;
  $e["error"]["directive"]=$directive;
  return $e;
}
while ($new_pass) {
$try++;
$w[]=series($condition[0]);
$w[]=series($condition[1]);
$w[]=series($condition[2]);
$w[]=series($condition[3]);
$existence=first_universal_auth_db($w);
$new_pass=$existence[0];
if($try==$try_max){
  $w=universal_error_code(1);
  $new_pass=true;}
}
echo json_encode($w);
?>


