var results = document.getElementsByName("result[]");
var selects = document.getElementsByName("selects[]");
var grades = document.getElementsByName("grade");
var result = document.getElementById("gradeResult");
var sum = document.getElementById("sum");
var at = document.getElementsByName("attendence[]");
document.getElementById("save").addEventListener("click",saving);

for(var i = 0; i < selects.length;i++){
  selects[i].addEventListener("change",changeGrade);
}

function changeGrade(event){
  for(var i = 0; i<selects.length;i++){
    if(event.target == selects[i]){
      if(selects[i].options[selects[i].selectedIndex].value=="A"){
        results[i].innerHTML=4.0*grades[i].innerHTML;
      }else if(selects[i].options[selects[i].selectedIndex].value=="B"){
        results[i].innerHTML=3.0*grades[i].innerHTML;
      }
      else if(selects[i].options[selects[i].selectedIndex].value=="C"){
        results[i].innerHTML=2.0*grades[i].innerHTML;
      }
      else if(selects[i].options[selects[i].selectedIndex].value=="D"){
        results[i].innerHTML=1.0*grades[i].innerHTML;
      }
      else if(selects[i].options[selects[i].selectedIndex].value=="F"){
        results[i].innerHTML=0*grades[i].innerHTML;
      }
    }
  }
  changeresult();
}

function changeresult(){
  var s = 0;
  var g = 0;
  var r = 0;
  for(var i = 0; i <results.length;i++){
    s += Number(results[i].innerHTML);
    g += Number(grades[i].innerHTML);
  }
  sum.innerHTML=s;
  r = s/g;
  if(r>=4.0){
    result.innerHTML="A";
  }else if(r>=3.0){
    result.innerHTML="B";
  }
  else if(r>=2.0){
    result.innerHTML="C";
  }
  else if(r>=1.0){
    result.innerHTML="D";
  }else if(r>=0.0){
    result.innerHTML="F";
  }
}

function saving(){
  var bool = 0;
  for(var i = 0; i < results.length;i++){
    if(at[i].value>grades[i].innerHTML*15){
      alert("최대 시수시간을 초과하였습니다.");
      bool = 1;
    }else if(selects[i].options[selects[i].selectedIndex].value!="F"&&at[i].value<grades[i].innerHTML*15*0.75){
      alert("D이상은 해당 과목 시수의 3/4이상 출석해야 합니다.");
      bool = 1;
    }
  }
  if(bool==0){
    document.formm.action="WP_midterm_4_2.php";
  }
}
