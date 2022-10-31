<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="films.css?ver1">
    <link href="https://fonts.googleapis.com/css?family=Merienda+One&display=swap" rel="stylesheet">
    <title>The Curse of the Black Pear</title>
  </head>
  <body>
    <form method="post" enctype="multipart/form-data" name = "Pear">
    <div>
      <p><!--영화이름-->
        The Curse of the Black Pear
        </p>
        <table>
          <tr>
            <!--영화 예고편-->
            <h3>예고편</h3>
            <iframe  allowfullscreen="" width="100%" height="360" frameborder="0" src="//www.youtube.com/embed/im-y_uLkfvw"></iframe>
          </tr>
          <tr>
            <!--영화 설명-->
            <h3>소개</h3>
            <table border="1" id = "fil">
              <tr ><th>장르 </th><td>판타지, 모험, 액션</td></tr>
              <tr ><th>감독 </th><td>고어 버빈스키</td></tr>
              <tr><th>제작사 </th><td>월트 디즈니 픽처스, 제리 브룩하이머 필름, 터치스톤 픽처스</td></tr>
              <tr ><th>개봉일자 </th><td>2003.7.9</td></tr>
              <tr><th>러닝 타임 </th><td>114분</td></tr>
              <tr ><th>국내등급 </th><td>12세 이상 관람가</td></tr>
            </table>
          </tr>
          <tr>
            <!--줄거리-->
            <h3>줄거리</h3>
            매력 넘치는 해적 캡틴 잭 스패로우(조니 뎁)에게 수정처럼 맑고 투명한 카리브 해는 어드벤처와 미스터리로 가득찬 세계이다. 그는 현재 해적 생활을 그만두고 한적한 삶을 살고 있다. 그런 그의 인생이 사악한 해적 캡틴 바르보사(제프리 러쉬)에 의해 위기를 맞는다. 캡틴 바르보사가 잭 스패로우의 해적선 ‘블랙 펄(Black Pearl)’을 훔친 다음, 포트 로열(Port Royal)을 공격하여 총독(조나단 프라이스 분)의 아름다운 딸 엘리자베스 스완(키이라 나이틀리)을 납치해 갔기 때문이다. 평민 신분이지만 엘리자베스와 어린 시절 친구인 윌 터너(올란도 블룸)는 잭 스패로우와 손을 잡고 영국 함대 중에서도 가장 빠른 배인 H.M.S. 인터셉터(Interceptor) 호를 지휘하여 엘리자베스도 구하고 블랙펄 호도 되찾으려는 작전에 돌입한다. 그러나 두 사람과 그들의 보잘 것 없는 부하들은 엘리자베스의 약혼자이자 호방한 제독인 노링턴(잭 데이븐포트)과 그가 지휘하는 H.M.S. 돈트리스(Dauntless) 호의 추격을 받게 된다. 한편 캡틴 바르보사가 약탈한 ‘저주받은’ 보물들로 인해 그 자신은 물론 부하들을 영원히 죽을 수 없도록 저주를 받는다. 그들 해적들은 월광을 받으면 살아있는 해골로 변해버린다. 그들에게 내려진 저주는 그들이 훔친 보물을 하나도 빠짐없이 원래 있던 그대로 되돌려놓아야만 풀릴 수 있다.
            <br><br>
            그런 사실을 모르는 노링톤 제독과 그의 군대, 캡틴 잭 스패로우와 윌 터너는 인터셉터 호와 돈트리스 호를 타고 바르보사를 비롯한 초자연적 신비를 가진 해적들과 대적하기 위해 이슬라 데무에르타(죽음의 섬: Isla de Muerta)로 달려간다. 과연 캡틴 잭 스패로우는 바르보사에게 복수하고 블랙펄 호를 되찾을 수 있을까! 바르보사와 그의 부하들로 하여금 영원히 해골로 살도록 만든 무시무시한 저주는 풀릴 수 있을 것인가! 총독의 딸 엘리자베스를 구조하려고 떠난 대원들을 뒤쫓는 영국 해군은 먼저 엘리자베스를 구하겠다는 목적을 달성할 수 있을 것인가! 주인공 영웅들은 초자연적 해골인간 해적들을 무찌르려면 과연 어떻게 상대해야 하는 것일까!
          </tr>
          <tr>
            <!--사용자의 내용추가 수정 추가 가능-->
            <h3>Notes</h3>
            <ol>

                <?php
                $lines = @file("../data/The_Curse_of_the_Black_Pear.txt") or $result = "파일을 읽을 수 없습니다.";
                if($lines !=null){
                  for($i = 0; $i <count($lines);$i++){
                    echo "<li>".$lines[$i]."</li>";
                  }
                }
                 ?>

            </ol>
          </tr>
        </table>
      </div>
    </form>
  </body>
</html>
