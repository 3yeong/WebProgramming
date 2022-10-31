<?php
$name = $_POST["name"];
$word = $_POST["word"];

if(isset($_POST["sear"])){
  if($name!=null && $word !=null){
    $lines = @file("dataSave.txt") or $result = "파일을 찾을 수 없습니다.";
    if($lines != null){
      for($i = 0; $i < count($lines)/2; $i++){
        $array = explode(".",$lines[$i*2]);
        $ar = $lines[$i*2+1];
        if($array[0]===$name&&strpos($ar, $word)!==false){
          echo "<li>". $lines[$i*2] ." : ".$lines[$i*2+1]."</li>";
        }
      }
    }
  }else if($name!=null){
    $lines = @file("dataSave.txt") or $result = "파일을 찾을 수 없습니다.";
    if($lines != null){
      for($i = 0; $i < count($lines)/2; $i++){
        $array = explode(".",$lines[$i*2]);
        if($array[0]===$name){
          echo "<li>". $lines[$i*2] ." : ".$lines[$i*2+1]."</li>";
        }
      }
    }
  }else if($word != null){
    $lines = @file("dataSave.txt") or $result = "파일을 찾을 수 없습니다.";
    if($lines != null){
      for($i = 0; $i < count($lines)/2; $i++){
        $ar = $lines[$i*2+1];
        if(strpos($ar, $word)!==false){
          echo "<li>". $lines[$i*2] ." : ".$lines[$i*2+1]."</li>";
        }
      }
    }
  }else{
     echo "Enter the keywords of list that you want to search";
  }
}
 ?>
