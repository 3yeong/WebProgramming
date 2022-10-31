<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>William Turner</title>
    <link type="text/css" rel="stylesheet" href="chr.css?ver1">
    <link href="https://fonts.googleapis.com/css?family=Merienda+One&display=swap" rel="stylesheet">
  </head>
  <body>
    <form method="post" enctype="multipart/form-data" name = "Willam">
    <div>
      <!--캐릭터 이름으로 메인 배너-->
      <p>
      William Turner
      </p>
      <table>
        <tr>
          <td><!--캐릭터 기본 설명-->
            <table border="1" id = "ch">
              <tr><th>이름 : </th><td>윌리엄 터너 주니어</td></tr>
              <tr><th>성별 : </th><td>남성</td></tr>
              <tr><th>가족관계 : </th><td>빌 터너(아버지),<br> 엘리자베스 스완(아내),<br> 헨리 터너(아들)<br></td></tr>
              <tr><th>배우 : </th><td>올랜도 블룸</td></tr>
              <tr><th>직책 : </th><td>선장</td></tr>
            </table>
        </td>
        <td>
          <!--캐릭터 이미지-->
          <input type="image" src="chractersImage/wil.jpeg" alt="William" >
        </td>
      </tr>
        <tr>
          <!--시리즈 별 내용-->
          <td colspan="2" style="font-size: 20px;" class = "add">
            <h3>줄거리</h3>
            어렸을 적에 헤어져 얼굴도 모르는 부친인 빌 터너는 해적이었지만 이 사실을 아는 사람은 적고 사실 아들인 윌 터너 그 자신도 이 사실을 1편 후반부까지도 모르고 있을 정도였다. 1편에서 엘리자베스에게 그가 한 말에 따르면 "아버지는 뱃사람인데 일찍 돌아가셔서 어머니와 단둘이 살았다."고. 그러나 그 어머니마저 일찍 여의는 바람에 배를 타고 고향을 떠나게 됐는데 그 배가 헥터 바르보사가 이끄는 블랙 펄에게 습격을 받아 난파되었다.
            <br><br>
            잭을 구출하기 위해 사오펭으로부터 해도를 훔치려다 잡히고 만다. 아버지를 구하기 위해선 블랙 펄이 필요하기 때문에 사오펭과 거래하고 잭과 바르보사를 배신하기도 한다. 하지만 여차저차 해서 결국 해적왕이된 엘리자베스의 편에 서고 더치맨과 최후의 격전 중에 엘리자베스에게 청혼했고 그녀가 청혼을 받아들여 헥터 바르보사의 주례로 결혼식을 올리지만 그 직후에 엘리자베스를 구하기 위해 데비 존스와 결투를 벌이다 그에게 붙잡혀 자기가 만든 칼에 심장을 찔리는 중상을 입는다. 다 죽게 된 아들을 보고 분노한 빌 터너가 데비 존스와 실랑이를 벌이는 사이에 시간을 벌 수 있었던 잭이 데비 존스의 심장을 윌의 손에 칼을 쥐어 파괴했다. 심장이 파괴된 데비 존스가 사망한 직후에 윌은 엘리자베스의 애원에도 불구하고 끝내 사망했다.
            <br><br>
          </td>
        </tr>
        <tr>
          <td colspan="2" class = "add">
            <!--대사-->
            <h3>유명 대사</h3>
            <ul>
              <li>
                "항상 당신 거였소.(It's always belonged to you.)"
              </li>
              <li>'우리는 배의 일부이자, 선원 중 하나이니.(Part of the Ship, Part of the Crew)'</li>

              </ul>
          </td>
        </tr>
        <tr>
          <td colspan ="2" class = "add">
            <!--기타 사용자가 내용을 추가 삭제 할 수 있도록 한다-->
            <h3>Notes</h3>
              <ol>
                <?php
                $lines = @file("../data/William_Turner.txt") or $result = "파일을 읽을 수 없습니다.";
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
