<!DOCTYPE html>
<html>
<body>

  <?php
  $winNum = 0;  //총 이깃 횟수

    for($i=0; $i<10; $i++) {  //10번의 게임
      for($j=0; $j<2;$j++) {    //A와 B 값을 각각 계산하기 위해 myTest를 호출
        myTest(rand(10, 1000));   //10 ~ 1000사이의 값 중에 하나를 선택하여 myTest()의 입력 값으로 전달
      }
    }

    function myTest($num) {   // A와 B의 값의 홀,짝을 계산하고, 값을 비교
    // 구현해야 할 코드 영역
      global $winNum;
      static $Avl="";
      static $Bvl="";
      static $num1 = 0;
      if($num1 == 0){
        if($num%2==0){
          $Avl = "even";
        }else{
          $Avl = "odd";
        }

      }else{
        if($num%2===0){
          $Bvl = "even";
        }else{
          $Bvl = "odd";
        }
      echo "\nA : $Avl<br />";
      echo " \nB : $Bvl<br />";
      if($Avl === $Bvl){
        echo "\nWin<br />";
        $winNum += 1;
        }
      }
      $num1 += 1;
      if($num1 === 2){
          $num1 = 0;
        }
    }

    //최종 이깃 횟수 출력 코드 영역

    echo "\nWins : ${winNum} times";
    //필요에 따라 구현이 필요하면 이 영역에 추가로 구현하시오.
  ?>

</body>
</html>
