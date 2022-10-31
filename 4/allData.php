<?php
if(isset($_POST["all"])){
  // Output one line until end-of-file
    $lines = @file("dataSave.txt") or $result = "파일을 읽을 수 없습니다.";
    if ($lines != null){
      for($i = 0; $i < count($lines)/2;$i++){
        echo "<li>".$lines[$i*2]. " : ".$lines[$i*2+1]."</li>";
       }
     }
}

?>
