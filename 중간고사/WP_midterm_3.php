
<html>
<body>
<?php
$idValue = test_input($_POST["inputID"]);
$nameValue = test_input($_POST["inputName"]);
$phoneValue = test_input($_POST["phoneNumber"]);
$checkary=$_POST["hobby"];
$gender = $_POST["gender"];


$file = fopen("data.txt","a+") or die("Unable to open file!");
fwrite($file,"id:".$idValue."\n");
fwrite($file,"name:".$nameValue."\n");
fwrite($file,"ph:".$phoneValue."\n");
fwrite($file,"gender:".$gender."\n");
$txt="";
for($i=0;$i<count($checkary);$i++){
  $txt=$txt.$checkary[$i]."/";
}
fwrite($file,"favtopic:".$txt);

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
fwrite($file,"\n");
fclose();
echo "저장을 성공하였습니다.";
 ?>
</body>
<html>
