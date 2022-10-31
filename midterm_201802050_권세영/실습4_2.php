<?php
$att = $_POST["atte"];
$selects = $_POST["selecti"];

$lines = @file("score.txt") or $result = "파일을 읽을 수 없습니다.";
for($i = 0; $i<count($lines); $i++){
  $list = explode("|",$lines[$i]);
  $lines[$i] = str_replace($list[2],$selects[$i],$lines[$i]);
  $lines[$i] = str_replace($list[3],$att[$i],$lines[$i]);
}

$myfile = fopen("score.txt","w") or die("Unable to open file!");
for($i = 0; $i<count($lines);$i++){
  fwrite($myfile, $lines[$i]."\n");
}

fclose($myfile);

echo "저장되었습니다.";

 ?>
