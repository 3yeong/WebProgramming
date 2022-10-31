<!DOCTYPE HTML>
<?php
$result = "";
$lines = @file("score.txt") or $result = "파일을 읽을 수 없습니다.";
 ?>
<html lang = "ko">
  <head>
    <title>2019 MidTerm</title>
    <meta charset = "utf-8">
<link type="text/css" rel="stylesheet" href="WP_midterm_4.css">
  </head>
  <body>
    <form method="post" enctype="multipart/form-data" name="formm">
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
        $sum=0;
        $a1sum=0;
        if ($lines != null)
        {
          for($i = 0;$i < count($lines);$i++)
          {
            $arry = explode("|",$lines[$i]);
            $gr=0;
            if($arry[2]=="A"){
              $gr=$arry[1]*4.0;
            }else if($arry[2]=="B"){
              $gr=$arry[1]*3.0;
            }else if($arry[2]=="C"){
              $gr=$arry[1]*2.0;
            }else if($arry[2]=="D"){
              $gr=$arry[1]*1.0;
            }else if($arry[2]=="F"){
              $gr=$arry[1]*0;
            }
            $sum=$sum+$gr;
            $a1sum = $a1sum+$arry[1];
              echo "<tr><td name=\"bname[]\">".$arry[0]."</td>";
              echo "<td name='grade'>".$arry[1]."</td>";
              echo "<td>  <select name='selects[]'>";
              if($arry[2] == "A"){
                echo "<option selected='selected' value='A'>A</option>
                <option value='B'>B</option>
                <option value='C'>C</option>
                <option value='D'>D</option>
                <option value='F'>F</option>";
              }else if($arry[2] == "B"){
                echo "
                <option value='A'>A</option>
                <option selected='selected' value='B'>B</option>
                <option value='C'>C</option>
                <option value='D'>D</option>
                <option value='F'>F</option>";
              }else if($arry[2] == "C"){
                echo "
                <option value='A'>A</option>
                <option value='B'>B</option>
                <option selected='selected' value='C'>C</option>
                <option value='D'>D</option>
                <option value='F'>F</option>";
              }else if($arry[2] == "D"){
                echo "
                <option value='A'>A</option>
                <option value='B'>B</option>
                <option value='C'>C</option>
                <option selected='selected' value='D'>D</option>
                <option value='F'>F</option>";
              }else if($arry[2] == "F"){
                echo "
                <option value='A'>A</option>
                <option value='B'>B</option>
                <option value='C'>C</option>
                <option value='D'>D</option>

                <option selected='selected' value='F'>F</option>";
              }

              echo  "</select></td>";
              echo "<td><input type='text' value='".$arry[3]."' name='attendence[]'></td>";
              echo "<td name='result[]'>".$gr."</td></tr>";
          }
        }
        ?>

      <tr>
        <td colspan="4" ><span style="font-weight:bold">총 계</span></td>
        <td id = "sum"><?php echo $sum; ?></td>
      </tr>
      <tr>
        <td colspan="4" ><span style="font-weight:bold">총 평점</span></td>
        <td id = "gradeResult"><?php
        if($sum/$a1sum>=4.0){
          echo "A";
        }else if($sum/$a1sum>=3.0){
          echo "B";
        }else if($sum/$a1sum>=2.0){
          echo "C";
        }else if($sum/$a1sum>=1.0){
          echo "D";
        }else {
          echo "F";
        }


         ?></td>
      </tr>

    </table>
    <br>
    <input type="submit" value="저장하기" id = "save">
  </form>
    <script src="WP_midterm_4.js"></script>
</body>
</html>
