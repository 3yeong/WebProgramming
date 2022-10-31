document.getElementById("mkTable").addEventListener("click",makeTable);
document.getElementById("addTable").addEventListener("click",addTab);
document.getElementById("addtxtBt").addEventListener("click",addText);

var trs=document.getElementsByTagName("tr");
var table=document.getElementById("t1");

function makeTable(){
  var ncol = document.getElementsByName("col")[0].value;
  var nrow = document.getElementsByName("row")[0].value;
  if(ncol==""||isNaN(ncol)==true){
    alert("열의 값을 숫자로 입력하세요.");
  }
  if( nrow==""||isNaN(nrow)==true){
    alert("행의 값을 숫자로 입력하세요.");
  }
  for(var i = 0; i<nrow;i++){
    var trt = document.createElement("TR");
    for(var j = 0; j < ncol;j++){
      var tdt = document.createElement("TD");
      trt.appendChild(tdt);
    }
    table.appendChild(trt);
  }
}

function addTab(){
  var cradio = document.getElementById("colradio");
  var rradio = document.getElementById("rowradio");
  var w = document.getElementById("where").value;

  if(w==""&&!cradio.checked&&!rradio.checked){
    alert("추가할 위치의 행 또는 열의 번호를 숫자로 입력하시고, Radio 버튼을 하나 선택해주세요");
  }else if(w==""){
    alert("추가할 위치의 행 또는 열의 번호를 숫자로 입력해주세요");
  }else if(!cradio.checked&&!rradio.checked){
    alert("Radio 버튼을 하나 선택해주세요");
  }

  if(cradio.checked){
    var tds = trs[0].getElementsByTagName("td");
    if(w-1>tds.length||w<0){
      alert("추가할 위치의 값이 범위를 초과하였습니다. 다시 입력해주세요.");
      return;
    }
    for(var i = 0; i < trs.length;i++){
      var tdt = document.createElement("TD");
      tds = trs[i].getElementsByTagName("td");
      var txt = document.createTextNode("");
      tdt.appendChild(txt);
      tdt.style.backgroundColor="green";
      trs[i].insertBefore(tdt,tds[w-1]);
    }
  }else if(rradio.checked){
    var trt = document.createElement("TR");
    var tds = trs[0].getElementsByTagName("td");
    if(w-1>trs.length||w<0){
      alert("추가할 위치의 값이 범위를 초과하였습니다. 다시 입력해주세요.");
      return;
    }
    for(var i = 0; i < tds.length;i++){
      var tdt = document.createElement("td");
      trt.appendChild(tdt);
      var txt = document.createTextNode("");
      tdt.appendChild(txt);
      tdt.style.backgroundColor="pink";
    }
    table.insertBefore(trt,trs[w-1]);
  }
}

function addText(){
  var ncol = document.getElementsByName("col")[1].value;
  var nrow = document.getElementsByName("row")[1].value;
  var txt = document.getElementById("addtxt").value;
  if(ncol==""||isNaN(ncol)==true){
    alert("열의 값을 숫자로 입력하세요.");
  }
  if( nrow==""||isNaN(nrow)==true){
    alert("행의 값을 숫자로 입력하세요.");
  }
  if(txt==null){
    alert("추가할 값을 입력하세요");
  }
  var tds = trs[nrow-1].getElementsByTagName("td");
  tds[ncol-1].innerHTML=txt;
}
