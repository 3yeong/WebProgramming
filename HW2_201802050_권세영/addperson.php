<?php
$myid = $_POST["inid"];
$mypw = $_POST["inpw"];
function sign($myid, $mypw){
  $output = " ";
  $myfile = fopen("person.txt","a+") or die("Unable to open file!");
  $lines = @file("person.txt") or $result = "파일을 읽을 수 없습니다.";
  $cheak = 0;

  for($i = 0; $i<count($lines); $i++){
    $list = explode("|",$lines[$i]);
    if($list[0] == $myid){
        $cheak = 1;
    }
  }
  if($cheak == 0){
      $inputlist = $myid."|".$mypw."\n";
      fwrite($myfile,$inputlist);
      fclose($myfile);
      $output = "회원가입이 되었습니다.";
      return $output;
  }else{
    fcolse($myfile);
    $output = "아이디가 중복됩니다. 다시 회원 가입해주세요.";
    return $output;
  }

}
echo sign($myid, $mypw);

 ?>
