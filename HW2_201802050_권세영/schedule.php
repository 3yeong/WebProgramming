<!DOCTYPE html>
<html lang="ko">
<head>
  <title>Schedule Page</title>
  <meta charset = "utf-8">
  <link type="text/css" rel="stylesheet" href="schedule.css?ver1">
</head>
<body>

  <table >
    <tr>
      <td>
        <div id="addbut">
        <button >Add</button>
        </div>
      </td>
      <td class="myinput" >
        <form  id="mform"  method="post" enctype="multipart/form-data">
        <?php
          $myid = test_input($_POST["inid"]);
          $mypw = test_input($_POST["inpw"]);
          $lines = @file("person.txt") or $result = "파일을 읽을 수 없습니다.";
          $cheak = 0;
          $count=0;
          $line="";
          for($i=0; $i<count($lines);$i++){
            $arry=explode("|",$lines[$i]);
            if($arry[0]==$myid){
              if(trim($arry[1])==$mypw){
                $line=$arry[0];
                $cheak=1;
                $a = array("Sun","Mon","Tue","Wed","Thu","Fri","Sat");
                for($k = 0; $k < 7;$k++){
                   if(file_exists("data/".$myid."_".$a[$k].".txt")){
                   }else{
                     $count=$count+1;
                   }
                }
              }
            }
          }
            if($count==7){
              echo "<script>
              alert('저장된 데이터가 없습니다');
              </script>";
            }
            echo "<p id='hereid' class='disin'>".$line."</p>";
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
         ?>

        <button type = "button" id="join">Join</button>
        <button id="logout" name="logout">Logout</button>
</form>
      </td>
    </tr>
  </table>

  <form id="tableform"  method="post" enctype="multipart/form-data">
    <?php
    echo "<p name='idid' style='display:none'>".$line."</p>"; ?>

  <table id="table1" style="visibility:hidden">
    <tr >
      <th>Sun</th>
      <th>Mon</th>
      <th>Tue</th>
      <th>Wed</th>
      <th>Thu</th>
      <th>Fri</th>
      <th>Sat</th>
    </tr>

    <tr>
      <td ondrop="drop_bottom(event)" ondragover="allowDrop(event)">
        <ul id="Sun">
          <?php
          if(file_exists("data/".$myid."_".$a[0].".txt")){
          $lines = @file("data/".$myid."_".$a[0].".txt");
          for($i = 0; $i < count($lines);$i++){
            $arr = explode("|",$lines[$i]);
            echo '<li name="sun[]" id="'.$arr[2].'" ondrop="drop(event)" ondragover="allowDrop(event)" draggable="true" ondragstart="drag(event)">
                '.$arr[1].'</li>';
          }
        }
           ?>
        </ul>
      </td>
      <td ondrop="drop_bottom(event)" ondragover="allowDrop(event)">
        <ul id="Mon">
          <?php
          if(file_exists("data/".$myid."_".$a[1].".txt")){
          $lines = @file("data/".$myid."_".$a[1].".txt");
          for($i = 0; $i < count($lines);$i++){
            $arr = explode("|",$lines[$i]);
            echo '<li name="mon" id="'.$arr[2].'" ondrop="drop(event)" ondragover="allowDrop(event)" draggable="true" ondragstart="drag(event)">
                '.$arr[1].'</li>';
          }
        }
           ?>
        </ul>
      </td>
      <td ondrop="drop_bottom(event)" ondragover="allowDrop(event)">
        <ul id="Tue">
          <?php
          if(file_exists("data/".$myid."_".$a[2].".txt")){
          $lines = @file("data/".$myid."_".$a[2].".txt");
          for($i = 0; $i < count($lines);$i++){
            $arr = explode("|",$lines[$i]);
            echo '<li name="tue[]" id="'.$arr[2].'" ondrop="drop(event)" ondragover="allowDrop(event)" draggable="true" ondragstart="drag(event)">
                '.$arr[1].'</li>';
          }
        }
           ?>
        </ul>
      </td>
      <td ondrop="drop_bottom(event)" ondragover="allowDrop(event)">
        <ul id="Wed">
          <?php
          if(file_exists("data/".$myid."_".$a[3].".txt")){
          $lines = @file("data/".$myid."_".$a[3].".txt");
            for($i = 0; $i < count($lines);$i++){
              $arr = explode("|",$lines[$i]);
              echo '<li name="wed[]" id="'.$arr[2].'"  ondrop="drop(event)" ondragover="allowDrop(event)" draggable="true" ondragstart="drag(event)">
                  '.$arr[1].'</li>';
            }
          }
           ?>
        </ul>
      </td>
      <td  ondrop="drop_bottom(event)" ondragover="allowDrop(event)">
        <ul id="Thu">
          <?php
          if(file_exists("data/".$myid."_".$a[4].".txt")){
          $lines = @file("data/".$myid."_".$a[4].".txt");
          for($i = 0; $i < count($lines);$i++){
              $arr = explode("|",$lines[$i]);
              echo '<li name="thu[]" id="'.$arr[2].'" ondrop="drop(event)" ondragover="allowDrop(event)" draggable="true" ondragstart="drag(event)">
                  '.$arr[1].'</li>';
            }
          }
           ?>
        </ul>
      </td>
      <td  ondrop="drop_bottom(event)" ondragover="allowDrop(event)">
        <ul id="Fri">
          <?php
          if(file_exists("data/".$myid."_".$a[5].".txt")){
          $lines = @file("data/".$myid."_".$a[5].".txt");
          for($i = 0; $i < count($lines);$i++){
              $arr = explode("|",$lines[$i]);
              echo '<li name="fri[]" id="'.$arr[2].'" ondrop="drop(event)" ondragover="allowDrop(event)" draggable="true" ondragstart="drag(event)">
                  '.$arr[1].'</li>';
          }
        }
           ?>
        </ul>
      </td>
      <td ondrop="drop_bottom(event)" ondragover="allowDrop(event)">
        <ul id="Sat">
          <?php
          if(file_exists("data/".$myid."_".$a[6].".txt")){
            $lines = @file("data/".$myid."_".$a[6].".txt");
            for($i = 0; $i < count($lines);$i++){
              $arr = explode("|",$lines[$i]);
              echo '<li name="sat[]" id="'.$arr[2].'"ondrop="drop(event)" ondragover="allowDrop(event)" draggable="true" ondragstart="drag(event)">
                  '.$arr[1].'</li>';
            }
          }
           ?>
        </ul>
      </td>
    </tr>
  </table>
</form>
  <?php
  if($cheak==1){
    echo "<script>document.getElementById(\"table1\").style.visibility=\"visible\"</script>";
  }
  if(isset($_POST["logout"])){
      echo "<script>document.getElementById(\"table1\").style.visibility=\"visible\"</script>";
  }
   ?>
<form name="login"  method="post" enctype="multipart/form-data">
  <div id="joinid">
    <table>
      <tbody>
        <tr >
        <td>id</td>
        <td> <input name = "inid" id="inid" type="text"></td>
        </tr>
        <tr>
        <td>password</td>
        <td><input name="inpw" id="inpw" type = "password"></td>
        </tr>
        <tr>
          <td></td>
          <td>  <input id="submitid" name="submitid" type="submit" value = "Submit">
            <input id="signinid" name="signinid" type="submit" value = "SignIn"><td>
        </tr>
      </tbody>
    </table>
  </div>
</form>

<form id="addform" name="addform"  method="post" enctype="multipart/form-data">
  <input id="addid" name="addid" type="text" value="<?php echo $line;?>" class="none">
  <div id="mysch">
    <table>
      <tbody>
        <tr >
        <td>day</td>
        <td> <select name="selection" id="selectc">
          <option selected="selected" value="Sun">Sun</option>
          <option value="Mon">Mon</option>
          <option value="Tue">Tue</option>
          <option value="Wed">Wed</option>
          <option value="Thu">Thu</option>
          <option value="Fri">Fri</option>
          <option value="Sat">Sat</option>
        </select></td>
        </tr>
        <tr>
        <td>title</td>
        <td><input  id="titlein" name="titlein" type = "text"></td>
        </tr>
        <tr>
          <td>description</td>
          <td><input id="descin" name = "descin" type = "text"></td>
        </tr>
        <tr>
          <td><input id="saveid" type="button" value = "save"></td>
          <td>
            <input id="cancel1" type="button" value = "Cancel">
          <td>
        </tr>
      </tbody>
    </table>
  </div>
</form>
<?php
$titletxt = $_POST["titleid"];
$desctxt = $_POST["descid"];
$selected = $_POST["selection"];
 ?>
  <div id="change">
    <table>
      <tbody>
        <tr >
        <td>day</td>
        <td> <select id="selectch" disabled>
          <option value="Sun">Sun</option>
          <option value="Mon">Mon</option>
          <option value="Tue">Tue</option>
          <option value="Wed">Wed</option>
          <option value="Thu">Thu</option>
          <option value="Fri">Fri</option>
          <option value="Sat">Sat</option>
        </select></td>
        </tr>
        <tr>
        <td>title</td>
        <td><input type = "text" disabled></td>
        </tr>
        <tr>
          <td>description</td>
          <td><input id="descr" type = "text" disabled></td>
        </tr>
        <tr>
          <td colspan="2">
            <button id="editid">Edit</button>
            <button id="deleteid">Delete</button>
            <input id="submitch" type="button" value = "submit" disabled>
            <button id="cancel2" onclick="change()">Cancel</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <form>
  </form>
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="schedule.js?ver1"></script>
</body>
</html>
