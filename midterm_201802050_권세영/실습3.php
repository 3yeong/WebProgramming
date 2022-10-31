<?php
$myidv = test_input($_POST["myid"]);
$mynamev = test_input($_POST["myname"]);
$mycallnumv = test_input($_POST["mycallnum"]);
$mygenderv = $_POST["gender"];
$myfavtv = $_POST["favtopic"];

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$myfile = fopen("data.txt","a+")or die("Unable to open file!");
$abc="";
  for($i=0;$i<count($myfavtv);$i++){
	   $abc = $abc.$myfavtv[$i]."|";
  }
fwrite($myfile,"id:".$myidv."\n");
fwrite($myfile,"name:".$mynamev."\n");
fwrite($myfile,"ph:".$mycallnumv."\n");
fwrite($myfile,"gender:".$mygenderv."\n");
fwrite($myfile,"favtopic:".$abc."\n");

fclose($myfile);
echo "저장되었습니다.";
 ?>
