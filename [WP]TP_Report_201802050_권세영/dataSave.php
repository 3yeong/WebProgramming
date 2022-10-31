<?php
$name = $_POST["select1"];
$word = $_POST["adder"];

if(isset($_POST["add"])){
    $file = fopen("./data/".$name[0].".txt", "a+");
    if(!$file) die("<br>Cannot open the file.");

    $lines = @file("./data/".$name[0].".txt") or $result = "파일을 찾을 수 없습니다.";

      $i = count($lines);
      $inputList = ($i .")". $word ."\n");

      fwrite($file, $inputList);
      fclose($file);
      echo "<script>alert('저장되었습니다.')</script>";
      echo("<script>location.replace('./Addpage.html');</script>");
}
 ?>
