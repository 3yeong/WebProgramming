<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="films.css?ver1">
      <link href="https://fonts.googleapis.com/css?family=Merienda+One&display=swap" rel="stylesheet">
    <title>Dead Men Tell No Tales</title>
  </head>
  <body>
      <form method="post" enctype="multipart/form-data" name = "Dead">
    <div>
      <p><!--영화이름-->
        Dead Men Tell No Tales
        </p>
        <table>
          <tr>
            <!--영화 예고편-->
            <h3>예고편</h3>
              <iframe  allowfullscreen="" width="100%" height="360" frameborder="0" src="//www.youtube.com/embed/1xo3af_6_Jk"></iframe>
          </tr>
          <tr>
            <!--영화 설명-->
            <h3>소개</h3>
            <table border="1" id = "fil">
              <tr ><th>장르 </th><td>판타지, 모험, 액션</td></tr>
              <tr ><th>감독 </th><td>요아킴 뢴닝, 에스펜 산드베르그</td></tr>
              <tr><th>제작사 </th><td>월트 디즈니 픽처스, 제리 브룩하이머 필름</td></tr>
              <tr ><th>개봉일자 </th><td>2017.5.24</td></tr>
              <tr><th>러닝 타임 </th><td>129분</td></tr>
              <tr ><th>국내등급 </th><td>12세 이상 관람가</td></tr>
            </table>
          </tr>
          <tr>
            <!--줄거리-->
            <h3>줄거리</h3>
            포세이돈의 창이 그려진 그림을 보여줌으로써 영화의 막이 오른다. 아버지 윌 터너의 저주를 풀기 위해 어린 헨리 터너는 온갖 문헌들을 수소문하고 있었다. 아버지가 저주를 받은 후로 몇년의 세월이 지났는지를 세고 있었으며 12살이 되던 해 어느날 밤 일부러 아버지와 만나기 위해 다리에 돌을 묶고 바다에 빠진다. 그렇게 가라 앉던 어린 헨리가 착지한 곳은 바로 플라잉 더치맨 호의 갑판. 얼굴에 따개비가 붙어 있는 자신의 아버지 윌 터너와 만나 '포세이돈의 삼지창을 찾으면 바다의 모든 저주를 풀 수 있다.'라는 사실을 전해 주지만 '난 저주 받았으니 더 이상 날 찾아오지 말고 바다에서 얼씬거리지 말라'만 듣고는 수면 위로 내쫓길 뿐이었다. 윌의 말과 함께 플라잉 더치맨이 잠수해 떠나가는 모습을 보며 '절대 포기하지 않겠다.'며 의지를 굳힌다.

            그리고 잭의 과거도 알려준다
          </tr>
          <tr>
            <!--사용자의 내용추가 수정 추가 가능-->
            <h3>Notes</h3>


                <?php
                $lines = @file("../data/Dead_Men_Tell_No_Tales.txt") or $result = "파일을 읽을 수 없습니다.";
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
