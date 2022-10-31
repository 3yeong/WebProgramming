<?php
$myid = $_POST["here"];
$selt = $_POST["select"];
$tit = $_POST["title"];
$k = $_POST["k"];

function read1($myid,$selt,$tit){
  $lines = @file("data/".$myid."_".$selt.".txt");
  for($i=0;$i<count($lines);$i++){
    $list = explode("|",$lines[$i]);
    if($list[1]==$tit){
      break;

    }
  }
  return $list[2];
}

function edit1($myid,$selt){
  $title=$_POST["title"];
  $title2=$_POST["title2"];
  $lines = @file("data/".$myid."_".$selt.".txt");
  $des =$_POST["des"];
  for($i=0;$i<count($lines);$i++){
    $list = explode("|",$lines[$i]);
    if($list[1]==$title){
      $lines[$i] = str_replace($list[1],$title2,$lines[$i]);
      $lines[$i] = str_replace($list[2],$des."\n",$lines[$i]);
    }
  }

  $myfile = fopen("data/".$myid."_".$selt.".txt","w") or die("Unable to open file!");
  for($i=0;$i<count($lines);$i++){
    fwrite($myfile,$lines[$i]);
  }
  fclose($myfile);

  return "저장되었습니다";
}

function delet2($myid,$selt,$tit){
$lines = @file("data/".$myid."_".$selt.".txt");

$myfile = fopen("data/".$myid."_".$selt.".txt","w") or die("Unable to open file!");
for($i=0;$i<count($lines);$i++){
  $list = explode("|",$lines[$i]);
  if($list[1]!=$tit){
      fwrite($myfile,$lines[$i]);
  }
}
fclose($myfile);
  return "삭제되었습니다.";
}

function delet1($myid,$selt,$tit){
$lines = @file("data/".$myid."_".$selt.".txt");
$myfile = fopen("data/".$myid."_".$selt.".txt","w") or die("Unable to open file!");
for($i=0;$i<count($lines);$i++){
  $list = explode("|",$lines[$i]);
  if($list[1]!=$tit){
      fwrite($myfile,$lines[$i]);
  }
}
fclose($myfile);
}

if($k==0){
  echo read1($myid,$selt,$tit);
}else if($k==1){
  echo edit1($myid,$selt,$tit);
}else if($k==-2){
  echo delet1($myid,$selt,$tit);
}else{
  echo delet2($myid,$selt,$tit);
}



?>
