document.getElementById("mybut1").addEventListener("click",intable);
document.getElementById("mybut2").addEventListener("click",addtable);
document.getElementById("mybut3").addEventListener("click",addtext);

var tri = document.getElementsByTagName("tr");
var tablein = document.getElementById("tablein");//tabletag

var inrow = document.getElementById("textinr");//makeTable
var incol = document.getElementById("textinc");//makeTable

var pattern_num = /[0-9]/;	// 숫자

function intable(){
  if(!inrow.value.match(pattern_num)||inrow.value == ""){
    alert("열의 값을 숫자로 입력해주세요");
  }
  if(!incol.value.match(pattern_num)||incol.value == ""){
    alert("행의 값을 숫자로 입력해주세요");
  }
  for(var i = 0; i<inrow.value;i++){
    var tableintr = document.createElement("TR");
    for(var j = 0; j<incol.value; j++){
      var tableintd = document.createElement("TD");
      tableintr.appendChild(tableintd);
    }
    tablein.appendChild(tableintr);
  }
}

function addtable(){
  var radiobox = document.getElementsByName("rad"); //radioname
  var textlo = document.getElementById("textloc").value;//addtable
  var q = 0;
  var a;
  for(var i = 0; i<radiobox.length; i++){
    if(radiobox[i].checked == true){
      q = 1;
      a = i; // 0 = col , 1 = row
    }
  }

  if(q == 0 && !textlo.match(pattern_num)){
    alert("추가할 위치의 행 또는 열의 번호를 숫자로 입력하시고 Radio 버튼을 하나 선택해주세요.");
  }else if(q == 0){
    alert("Radio 버튼을 하나 선택해 주세요.");
  }else if(!textlo.match(pattern_num)){
    alert("추가할 위치의 행 또는 열의 번호를 숫자로 입력해주세요.");
  }else{
    if(a == 0){ //col
      var tdi = tri[0].getElementsByTagName("td");
      if(textlo-1 > tdi.length||textlo<0){
        alert("추가할 위치의 값이 범위를 초과했습니다. 다시 입력해주세요.");
        return;
      }
      for(var j = 0; j<tri.length; j++){
        var tdta = document.createElement("TD");
        tdi = tri[j].getElementsByTagName("td");
        var text = document.createTextNode("");
        tdta.appendChild(text);
        tdta.style.backgroundColor = "green";
        tri[j].insertBefore(tdta,tdi[textlo-1]);
            }
      }else if(a == 1){//row
          var trta = document.createElement("TR");
          var tdi = tri[0].getElementsByTagName("td");
          if(textlo-1 > tri.length||textlo<0){
            alert("추가할 위치의 값이 범위를 초과했습니다. 다시 입력해주세요.");
            return;
          }
          for(var j = 0; j < tdi.length; j++){
            var tdta = document.createElement("td");
            trta.appendChild(tdta);
            var text = document.createTextNode("");
            tdta.appendChild(text);
            tdta.style.backgroundColor = "pink";
          }
          tablein.insertBefore(trta, tri[textlo-1]);
          }
      }
}

var textval = document.getElementById("textval");//table in text
function addtext(){
  var tcol = document.getElementsByName("tcol")[0].value;
  var trow = document.getElementsByName("trow")[0].value;
  var txt = document.getElementById("textval").value;

  if(tcol == ""||!tcol.match(pattern_num)){
    alert("열의 값을 숫자로 입력하세요.");
  }
  if(trow ==""||!trow.match(pattern_num)){
    alert("행의 값을 숫자로 입력하세요.");
  }
  if(txt == null){
    alert("추가할 값을 입력하세요.");
  }
  var tdi = tri[trow-1].getElementsByTagName("td");
  tdi[tcol-1].innerHTML = txt;
}
