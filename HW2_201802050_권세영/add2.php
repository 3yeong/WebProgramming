<?php
function add(){
  $selet = $_POST["select"];
  $title = $_POST["title"];
  $id = $_POST["here"];
  $selet2 = $_POST["select2"];
  $des = $_POST["des"];
  $myfile = fopen("data/".$id."_".$selet.".txt","a+") or die("Unable to open file!");
  fwrite($myfile,$id."|".$title."|".$des);
  fclose($myfile);

}

function add2(){
  $selet = $_POST["select"];
  $title = $_POST["title"];
  $des = $_POST["des"];
  $id = $_POST["here"];
  $lines2 = @file("data/".$idtxt."_".$selet.".txt");
  $myfile = fopen("data/".$idtxt."_".$selet.".txt","w") or die("Unable to open file!");

  for($i=0; $i<=count($lines2);$i++){
      $list = explode("|",$lines2[$i]);
      $pre = $_POST["pre"];
    if(trim($list[1])==trim($pre)){
        fwrite($myfile,$id."|".$title."|".$des);
        fwrite($myfile,$lines2[$i]);
    }else{
      fwrite($myfile,$lines2[$i]);
    }
  }

  fclose($myfile);
}
$k=$_POST["k"];
if($k==0){
  echo add();
}
else{
  echo add2();
}
?>
