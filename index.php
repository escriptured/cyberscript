<?php
$o =[];
$o[]='
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="&copy; Uniword " content="Universal Unique Word Register">
</head>
<title>&copy; Uniword</title>
</head>

<body style="border:0px;padding:5px;width:100%;height:100%">
  <table cellpadding=0px cellspacing=0px style="font-family:verdana;font-size:80%;table-layout:fixed;max-width:400px;border:0px;padding:0px;width:100%;height:98%;">
    ';

  $o[]='
      <tr style="height:20px">
         <td style="">
             <img src="ico_0.jpg" style="height:35px;width:35px">
         </td>
      </tr>';
  $o[]='
     <tr><td style="vertical-align:top">
         <a style="text-decoration:none;word-wrap:word-break" href="who.php">Generate a non-coincident universal unique word</a>
     </td></tr>
  ';

  $o[]='
      <tr style="height:20px">
         <td style="word-wrap:break-word;padding-bottom:10px; font-size:80%">
             &copy; Uniword
         </td>
      </tr>
  ';
  $o[]='
    </body>
    </html>
  ';
echo join('',$o);
?>
