<?php
//Code by AJ

date_default_timezone_set('UTC');
$dr=$_SERVER['DOCUMENT_ROOT'];

function cur_dt() {
  return [date('Y m d H i s'),'UTC'];
}
function setuseralias($n,$a,$u,$c,$d) {
   $ar=[];
   $dr=$_SERVER['DOCUMENT_ROOT'];
   $fn = $dr.$n;
   
   //if(file_exists($fn)){
     // $ar = file_get_contents($fn,true);
   //}
   $ar[$a]["t"]=date('Y m d H i s');
   $ar[$a]["u"]=$u;
   $ar[$a]["c"]=$c;
   $ar[$a]["d"][]=$d;
   writef($n,json_encode($ar));
}

function getuseralias($n,$a) {
   $d=[];
   $r=[];
   $dr=$_SERVER['DOCUMENT_ROOT'];
   $fn = $dr.$n;
   
   if(file_exists($fn)){
      $d = file_get_contents($fn,true);
      $r = $d[$a];
   }
   return $r;
}
function series($n) {
   $a="abcdefghjkmnpqrstuvwxyz123456789";
   $s=[];
   for($v=0;$v<$n;$v++) {
      $ca=rand(0,3);
      
      $sc=substr($a,rand(0,strlen($a)-1),1);
      if($ca>1){$sc=strtoupper($sc);}
      $s[]=$sc;
   }
   
   $r=join("",$s);
   return $r;
}

function created($n) {
   $dr=$_SERVER['DOCUMENT_ROOT'];
   $fn = $dr.$n;
   if(!file_exists($fn)){mkdir($fn,0644);}
}
function writef($n,$t,$m) {
   $dr=$_SERVER['DOCUMENT_ROOT'];
   $fn = $dr.$n;
   if(chmod($fn,0644)){}else{}
   $f = fopen($fn, $m);
   fwrite($f, $t);
   fclose($f);
}

function readf($n,$b) {
   $dr=$_SERVER['DOCUMENT_ROOT'];
   $fn = $dr.$n;
   $c="init";
   if(file_exists($fn)) {
      if (empty($b)) {
        $c= file_get_contents($fn);
      } else {
        $c =file_get_contents($fn,true);
   
      }
      return $c;
   }
}


//writef("a_test1.php","");
//file_put_contents("a_test2.php","");

//setuseralias("a_test2.php",series(50),"Foo","PDA",["1.0.0",10,63.65,23.07,44.76]);
function impression($fn) {
  // $dr=$_SERVER['DOCUMENT_ROOT'];
   //$fn = $dr.$n;
$c=0;
$c =readf($fn,"");
$c=$c+1;
   writef($fn,$c);
   return $c;
}

function db($ph,$d) {
  $c=[];
  $c =readf($ph,"#");

  if(!empty($d)) {
    $c=json_encode($d);
    writef($ph,$c);
    $c =readf($ph,"#");
  } else {
    $c=[];
  }
  return $c;
}

?>
