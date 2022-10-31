document.getElementById("mybtn1").addEventListener("click",datalist);

document.getElementById("mybtn2").addEventListener("click",remake);

var listol = document.getElementById("olin") ;

function datalist() {  //e 또는 event
  var listin = document.createElement("LI");
  listin.addEventListener("click",remo);
  var te = document.getElementById("textin").value;
  var tx = document.createTextNode(te);
  listin.appendChild(tx);
  listol.appendChild(listin);
}

function remo(){
  alert("Are you really going to remove?");
  listol.removeChild(this);
}

function remake(){

  var listcha = document.createElement("LI");
  var tvl = document.getElementById("textvl").value;
  var tv = document.createTextNode(tvl);
  listcha.appendChild(tv);

  var num = document.getElementById("textnum").value;

  listol.replaceChild(listcha,listol.childNodes[num-1]);
}
