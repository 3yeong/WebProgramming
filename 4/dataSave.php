
<?php
$name = $_POST["name"];
$word = $_POST["word"];

if(isset($_POST["add"])){
    $file = fopen("dataSave.txt", "a+");
    if(!$file) die("<br>Cannot open the file.");
    $inputList = ($name ."\n". $word ."\n");
    $text = "{$inputList}";
    fwrite($file, $text);
    fclose($file);
    echo "<br><p>저장되었습니다.</p>";
}
 ?>
