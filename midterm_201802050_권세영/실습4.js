var resulti = document.getElementsByName("result[]");
var selecti = document.getElementsByName("selecti[]");
var gradei = document.getElementsByName("gra");
var re = document.getElementById("graResult");
var sum = document.getElementById("sum");
var att = document.getElementsByName("atte[]");

document.getElementById("save").addEventListener("click",savei);

for(var i = 0; i < selecti.length; i++){
  selecti[i].addEventListener("change",chanGrade);
}

function chanGrade(e){
  for(var i = 0;  i<selecti.length; i++){
    var a = selecti[i].selectedIndex;
    if(e.target == selecti[i]){
      if(selecti[i].options[a].value == "A"){
        resulti[i].innerHTML = 4.0*gradei[i].innerHTML;
      }else if(selecti[i].options[a].value == "B"){
        resulti[i].innerHTML = 3.0*gradei[i].innerHTML;
      }else if(selecti[i].options[a].value == "C"){
        resulti[i].innerHTML = 2.0*gradei[i].innerHTML;
      }else if(selecti[i].options[a].value == "D"){
        resulti[i].innerHTML = 1.0*gradei[i].innerHTML;
      }else if(selecti[i].options[a].value == "F"){
        resulti[i].innerHTML = 0*gradei[i].innerHTML;
      }
    }
  }
  chanRe();
}

function chanRe(){
  var su = 0;
  var gr = 0;
  var r = 0;
  for(var i = 0; i <re.length; i++){
    se += Number(resulti[i].innerHTML);
    gr += Number(gradei[i].innerHTML);
  }
  sum.innerHTML = se;
  r = su/gr;
  if(r>=4.0){
    re.innerHTML="A";
  }else if(r>=3.0){
    re.innerHTML="B";
  }
  else if(r>=2.0){
    re.innerHTML="C";
  }
  else if(r>=1.0){
    re.innerHTML="D";
  }else if(r>=0.0){
    re.innerHTML="F";
  }
}

function savei(){
  var cheak = 0;
  for(var i = 0; i<resulti.length; i++){
    if(att[i].value>gradei[i].innerHTML*15){
      alert("최대 시수 시간을 최과하였습니다.");
      cheak = 1;
    }else if(selecti[i].options[selecti[i].selectedIndex].value!="F"&&att[i].value<gradei[i].innerHTML*15*0.75){
      alert("D 이상은 해당 과목 시수의 3/4이상 출석해야 합니다.");
      cheak = 1;
    }
  }
    if(cheak == 0){
      document.form1.action="실습4_2.php";
  }
}
