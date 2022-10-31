<!DOCTYPE HTML>
<?php
$result = "";
$lines = @file("score.txt") or $result = "파일을 읽을 수 없습니다.";
 ?>
<html lang = "ko">
  <head>
    <title>
      <meta charset="utf-8">
      <title>2019 MidTerm_4</title>
      <link type="text/css" rel="stylesheet" href="실습4.css">
    </head>
    <body>
      <form method="post" enctype="multipart/form-data" name="form1">
        <h1>성적 처리 페이지</h1>
        <table>
          <tr>
            <th>과목명</th>
            <th>학점</th>
            <th>점수</th>
            <th>출석</th>
            <th>소계</th>
          </tr>
            <?php
            $sum = 0;
            $alsum = 0;
            if($lines !=null){
              for($i = 0; $i < count($lines);$i++){
                $list = explode("|",$lines[$i]);
                $grade = 0;
                if($list[2]=="A"){
                  $grade = $list[1]*4.0;
                }else if($list[2]=="B"){
                  $grade = $list[1]*3.0;
                }else if($list[2]=="C"){
                  $grade = $list[1]*2.0;
                }else if($list[2]=="D"){
                  $grade = $list[1]*1.0;
                }else if($list[2]=="F"){
                  $grade = $list[1]*0;
                }
                $sum = $sum + $grade;
                $alsum = $alsum+$list[1];
                echo "<tr> <td name =\"subject[]\">".$list[0]."</td>";
                echo "<td name = 'gra'>".$list[1]."</td>";
                echo "<td> <select name='selecti[]'>";
                if($list[2] == "A"){
                  echo "<option selected='selected' value='A'>A</option>
                  <option value='B'>B</option>
                  <option value='C'>C</option>
                  <option value='D'>D</option>
                  <option value='F'>F</option>";
                }else if($list[2] == "B"){
                  echo "
                  <option value='A'>A</option>
                  <option selected='selected' value='B'>B</option>
                  <option value='C'>C</option>
                  <option value='D'>D</option>
                  <option value='F'>F</option>";
                }else if($list[2] == "C"){
                  echo "
                  <option value='A'>A</option>
                  <option value='B'>B</option>
                  <option selected='selected' value='C'>C</option>
                  <option value='D'>D</option>
                  <option value='F'>F</option>";
                }else if($list[2] == "D"){
                  echo "
                  <option value='A'>A</option>
                  <option value='B'>B</option>
                  <option value='C'>C</option>
                  <option selected='selected' value='D'>D</option>
                  <option value='F'>F</option>";
                }else if($list[2] == "F"){
                  echo "
                  <option value='A'>A</option>
                  <option value='B'>B</option>
                  <option value='C'>C</option>
                  <option value='D'>D</option>
                  <option selected='selected' value='F'>F</option>";
                }
                echo "</select></td>";
                echo "<td><input type = 'text' value = '$list[3]' name = 'atte[]'></td>";
                echo "<td name = 'result[]'>".$grade."</td></tr>";
              }
            }
             ?>
          <tr>
            <td colspan="4" ><span style="font-weight:bold">총 계</span></td>
            <td id = "sum"><?php echo $sum?></td>
          </tr>
          <tr>
            <td colspan="4" ><span style="font-weight:bold">총 평점</span></td>
            <td id = "graResult"><?php
              if($sum/$alsum >= 4.0){
                echo "A";
              }else if($sum/$alsum>=3.0){
                echo "B";
              }else if($sum/$alsum>=2.0){
                echo "C";
              }else{
                echo "F";
              }
            ?></td>
          </tr>
        </table><br>
        <input type = "submit" value = "저장하기" id = "save">
      </form>
      <script src = "실습4.js?ver1"></script>
    </body>
</html>
