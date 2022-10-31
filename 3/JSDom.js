document.getElementById("insertData").addEventListener("click", insertData);
document.getElementById("replace").addEventListener("click", replace);

var test = document.getElementById("test");

test.addEventListener("mouseout", function(event) {
  event.target.style.color = "black";
}, false);

test.addEventListener("mouseover", function(event) {
  event.target.style.color = "red";

  document.getElementById("test").addEventListener("click", remove);
      // reset the color after a short delay
    }, false);

function remove() {
      alert('Are you really going to remove?', '');
      if (true) {
        var li2 = event.target;
        test.removeChild(li2);
      }
}


function insertData() {

  var li = document.createElement("li"); //child
  var inputWork = document.getElementById("myWork").value;
  var insert = document.createTextNode(inputWork);

  li.appendChild(insert);

  if (inputWork === '') {
    alert("Is Empty! Writing something!");
  } else {
    document.getElementById("test").appendChild(li);
  }
  document.getElementById("myWork").value = "";
}

function replace() {

  var num = document.getElementById("num").value;
  var elmnt = document.createElement("li");
  var reWork = document.getElementById("reWork").value;
  var replace = document.createTextNode(reWork);
  elmnt.appendChild(replace);
  var item = document.getElementById("test");
  item.replaceChild(elmnt, item.childNodes[num]);

}
