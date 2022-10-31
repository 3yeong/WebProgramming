<!DOCTYPE HTML>
<html lang ="ko">
<head>
  <title>customer page</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <link type="text/css" rel="stylesheet" href="customer.css">
</head>
<body>
<h1>도서 주문 페이지</h1>
<form method="post" enctype="multipart/form-data" name = "custform">
<P>
구매자 아이디 : <input type = "text" id = "myid" name = "myid">
</p>
<p>
<input type = "checkbox" name = "check1" value = "ALL" id = "checkin">모두 선택
</p>
<table id = "table1">
  <tr>
    <th>선택</th><th>상품명</th><th>미리보기</th><th>정가</th><th>수량</th><th>합계</th>
</tr>


<?php

$lines = @file("data/booklist.txt") or $result = "파일을 읽을 수 없습니다.";
if($lines != null){
  for($i = 0; $i < count($lines); $i++){
    $array = explode("|" , $lines[$i]);
      echo "<tr name = 'tabl'>";
      echo "<td><input type = 'checkbox' name = 'check[]' value = '$i' ></td>";
      echo "<td name = 'bookname'>". $array[0]."</td>";
      echo "<td> <button><a href='$array[3]' target='_blank'>미리보기</a></button></td>";
      echo "<td name = 'price'>{$array[1]}</td>";
      echo "<td><input type = 'text' name = 'quant[]' value = '{$array[2]}' ><button type='button' name = 'mybut'>변경</button></td>";
      echo "<td name = 'totl'>". $array[1] * $array[2]."</td>";
      echo "</tr>";
  }
}

 ?>
<tr>
  <th colspan = "5" id = "choi">선택한 상품 총 금액</th><td id = "total">0</td>
</tr>
</table>

<p id = "total_count">
  총 0개 상품 선택
</p>

<button type="button" id = "remo">삭제하기</button> <input type ="submit" id = "save1" name = "save" value = "주문하기">
</form>

<script src = "customer.js"> </script>
</body>
</html>
