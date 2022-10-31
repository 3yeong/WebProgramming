<html>
<?php
  $selet = $_POST["select"];
  $title = $_POST["title"];
  $desc = $_POST["des"];
  $id = $_POST["here"];

  $myfile = fopen("data/".$id."_".$selet.".txt","a+") or die("Unable to open file!");

  fwrite($myfile,$id."|".$title."|".$desc."\n");

  fclose($myfile);
?>
</html>
