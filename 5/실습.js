document.getElementById("but1").addEventListener("click", fun);


function allowDrop(e) {
  e.preventDefault();
}

function drag(e) {
  e.dataTransfer.setData("text", e.target.id);
}

function drop(e) {
  e.preventDefault();
  var data = e.dataTransfer.getData("text");
  e.target.appendChild(document.getElementById(data));
  var a = document.getElementById("div2");
  localStorage.setItem(1,a.innerHTML);
  var b = document.getElementById("div3");
  localStorage.setItem(2,b.innerHTML);
}


function fun(){
  if(localStorage.getItem(1)){
    var a = document.getElementById("div2");
    a.innerHTML = localStorage.getItem(1);
  }
  if(localStorage.getItem(2)){
    var b = document.getElementById("div3");
    b.innerHTML = localStorage.getItem(2);
  }
}
