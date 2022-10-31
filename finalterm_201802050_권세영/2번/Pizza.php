<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>Pizza Recipe</title>
  </head>
  <body>
    <form  id="mform"  method="post" enctype="multipart/form-data">
    <div>
    <h1>나만의 Pizza Recipe</h1>
    <p>피자이름 : <input type="text" name = "pname" id = "pname" autofocus required></p>
    <h3>도우 & 토핑 선택 </h3>
    <p>도우 :
      <select name = "mydw" id = "mydw"required>
        <option value=""></option>
        <option value="thin">씬</option>
        <option value="napoli">나폴리</option>
        <option value="orignal">오리지널</option>
        <option value="doublecheese">더블치즈</option>
      </select></p>
      <p>
        메인토핑 :
        <input type = "checkbox"  value = "Kjun" name ="cheak1[]" > 케이준 새우살
        <input type = "checkbox" value = "pepper" name ="cheak1[]"> 페퍼로니
        <input type = "checkbox" value = "pineapple" name ="cheak1[]"> 파인애플
        <input type = "checkbox" value = "bulgogi" name ="cheak1[]"> 불고기
      </p>
      <p>
          주문일자/시간선택 :
          <input type="datetime-local" required id = "date_time" name = "date_time">
      </p>
      <p>
        수량 :
        <input type = "number" id = "count" required min = "1" max = '6' name = "count">
        </p>
      <p>
      <input type = "submit" value = "주문하기" id = "submit">
      </p>
    </div>
      </form>
      <form>
    <div>
      <h1>주문서 확인</h1>
      <p>
        <input type ="radio" id = "num"> 수량으로 검색
        <input type = "radio" id = "day"> 주문 일자 순으로 검색
      </p>
      <p>
        <input type = "submit" value = "검색하기" id = "submit2">
      </p>
      <p>
        <table id = "table">
        </table>
      </p>
    </div>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="module" src="./Pizza.js?ver1"></script>
  </body>
</html>
