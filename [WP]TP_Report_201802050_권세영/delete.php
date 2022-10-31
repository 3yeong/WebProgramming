<?php
$name = $_POST["select2"];
$word = $_POST["number"];

if(isset($_POST["delete"])){

    $lines = @file("./data/".$name[0].".txt") or $result = "파일을 찾을 수 없습니다.";
      $i = count($lines);
      if($i < $word-1){
        echo "<script>alert('없는 번호입니다.')</script>";
        echo("<script>location.replace('./Addpage.html');</script>");
      }else{
        $myfile = fopen("./data/".$name[0].".txt","w") or die("Unable to open file!");
        for($i=0;$i<count($lines);$i++){
          $arr = explode(")",$lines[$i]);
          if($arr[0]!=$word-1){
              $inputline = ($i.")".$arr[1]);
              fwrite($myfile,$inputline);
          }
        }
        fclose($myfile);
        echo "<script>alert('삭제되었습니다.')</script>";
        echo("<script>location.replace('./Addpage.html');</script>");
      }

}
?>
