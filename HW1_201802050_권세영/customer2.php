<?php

$myid = test_input($_POST["myid"]);
$checkon = $_POST["check"];
$count = $_POST["quant"];

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$lines = @file("data/booklist.txt") or $result = "파일을 읽을 수 없습니다.";

$myfile = fopen("./data/".$myid.".txt","a+") or die("Unable to open file!");

for($i = 0; $i<count($checkon); $i++){
  $index = $checkon[$i];
  $array = explode("|" , $lines[$index]);
  $inputList = ($array[0]."|".$count[$index]."\n");
  fwrite($myfile,$inputList);
  $lines[$index] = str_replace($array[2],$array[2] - $count[$index],$lines[$index]);
}
fclose($myfile);
$text = "";
for($i = 0; $i<count($lines);$i++){
  $text = $text.$lines[$i];
}
$mylist = fopen("data/booklist.txt","w") or die("unable");
fwrite($mylist, $text);
fclose($mylist);


echo "저장되었습니다.";
 ?>
