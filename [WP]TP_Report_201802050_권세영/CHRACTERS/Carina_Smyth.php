<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>Carina Smyth</title>
    <link type="text/css" rel="stylesheet" href="chr.css">
    <link href="https://fonts.googleapis.com/css?family=Merienda+One&display=swap" rel="stylesheet">
  </head>
  <body>
    <form method="post" enctype="multipart/form-data" name = "Carina">
    <div>
      <!--캐릭터 이름으로 메인 배너-->
      <p>
      Carina Smyth
      </p>
      <table>
        <tr>
          <td><!--캐릭터 기본 설명-->
            <table border="1" id = "ch">
              <tr><th>이름 : </th><td>카리나 스미스</td></tr>
              <tr><th>성별 : </th><td>여성</td></tr>
              <tr><th>가족관계 : </th><td>헥터 바르보사(아빠) ,<br> 마가렛 스미스(엄마)</td></tr>
              <tr><th>배우 : </th><td>카야 스코델라리오</td></tr>
            </table>
        </td>
        <td>
          <!--캐릭터 이미지-->
          <input type="image" src="chractersImage/kari.png" alt="CarinaSmyth" >
        </td>
      </tr>
        <tr>
          <!--시리즈 별 내용-->
          <td colspan="2" style="font-size: 20px;" class = "add">
            <h3>줄거리</h3>
            캐리비안의 한 영국령 식민지인 세인트 마틴 섬에 사는 영국인 처녀로 직업은 천문학자.
            하지만 마녀로 몰려 영국군과 마을 주민에게 계속 마녀라고 불려 교수형까지 당할 뻔하며 아무리 해명해도 아무도 믿어주지 않는다.
            고아 출신으로 아버지가 남긴 유품인 루비 박힌 일기장을 토대로 포세이돈의 삼지창을 쫓는 과정에서 잭 일행과 합류한다.
            <br><br>
            바다에 나간 후 잭이 지도를 내놓으라고 하지만 해적들을 못 믿어 아무말도 안하고 헨리를 죽이겠다는 협박에 무시한다. 그러나 비록, 연기지만 헨리가 위험에 처하자 바로 위치를 알려주겠다고 한다. 이후 헨리와 이야기를 나누며 두 사람 모두 아버지가 없다는 공감대를 얻게 된다. 다음 날, 헨리에 의해 살라자르를 발견하고 살라자르의 이야기를 모르던 선원들이 공포감에 잭을 죽이려하자 잭의 설득, '자기를 죽이면 더욱 분노해서 너희를 죽일것이다'라는 말에 동의하고 잭의 제안에 따라 같이 구명보트를 타고 섬으로 향한다. 그리고 답답한 상황에서 그냥 육지로 가기위해 드레스 벗고 수영해서 섬에 도착한다. 이후 살라자르와 선원들을 보고 경악하며 도망치다가 함정에 걸려서 잭의 강제 결혼식의 하례객으로 있다가 바르보사에 의해 구출되고 블랙 펄의 부활을 보게 된다. 이후 바르보사에 의해 다시 묶이지만 헨리와 함께 바르보사를 설득하여 블랙펄의 키를 잡게된다.
            <br><br>
          </td>
        </tr>
        <tr>
          <td colspan="2" class = "add">
            <!--대사-->
            <h3>유명 대사</h3>
            <ul>
              <li></li>
                <li>
                  카리나 : 당신에게 나는 무슨 의미죠?<br>
                  헥터 : 보물 이란다.
                </li>
              </ul>
          </td>
        </tr>
        <tr>
          <td colspan ="2" class = "add">
            <!--기타 사용자가 내용을 추가 삭제 할 수 있도록 한다-->
            <h3>Notes</h3>
              <ol>
                <?php
                $lines = @file("../data/Carina_Smyth.txt") or $result = "파일을 읽을 수 없습니다.";
                if($lines !=null){
                  for($i = 0; $i <count($lines);$i++){
                    echo "<li>".$lines[$i]."</li>";
                  }
                }
                 ?>
              </ol>
          </td>
        </tr>
      </table>
    </div>
  </form>
  </body>
</html>
