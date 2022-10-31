
<html>
<body>
<?php
$at = $_POST["attendence"];
$select = $_POST["selects"];

$lines = @file("score.txt") or $result = "파일을 읽을 수 없습니다.";
for($i = 0; $i<count($lines);$i++){
  $arry = explode("|",$lines[$i]);
  $lines[$i] = str_replace($arry[2],$select[$i],$lines[$i]);
  $lines[$i] = str_replace($arry[3],$at[$i],$lines[$i]);
  echo $lines[$i];
}

$myfile = fopen("score.txt","w") or die("Unable to open file!");
for($i=0; $i<count($lines);$i++){
  fwrite($myfile,$lines[$i]."\n");
}

fclose($myfile);

echo "저장되었습니다.";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
</body>
</html>
