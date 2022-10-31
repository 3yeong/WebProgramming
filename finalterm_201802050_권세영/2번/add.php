<?php
$name = test_input($POST["pname"]);
$dw = text_input($POST["mydw"]);
$date = $POST["date_time"];
$number =$POST["count"];
$cheak = $_POST['check1'];
$array = array($check);//error
foreach ($array as $value){
        $result = implode("/",$value);
      //  var_dump($result);
  }

  $myfile = fopen("add.txt", "a+") or die ("Unable to open file!");
  $inputlist = $name."|".$dw."|".$result."|".$date."|".$number;
  fwrite($myfile, $inputlist);
  fclose($myfile);
  echo "저장을 성공하였습니다.";


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>
