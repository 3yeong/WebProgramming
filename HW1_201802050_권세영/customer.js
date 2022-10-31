
var k = document.getElementsByName("tabl");
var box = document.getElementsByName("check[]");
var quant = document.getElementsByName("quant[]");
var totl = document.getElementsByName("totl");
var total = document.getElementById("total");
var but = document.getElementsByName('mybut');
var price = document.getElementsByName("price");

var no = 0;

document.getElementById("save1").addEventListener("click",save);
function save(){
  var q = 0;
  for(var i = 0; i<box.length; i++){
    if(box[i].checked==true){
      q ++;
    }
  }
  if(document.getElementById("myid").value == ""&&q==0){
    alert("아이디는 영문자로 입력하시고 체크박스도 선택해 주세요");
  }else if(q==0){
    alert("체크박스를 선택해주세요");
  }else if(document.getElementById("myid").value == ""){
    alert("아이디는 영문자로 입력해주세요");
  }else{
    document.custform.action = "customer2.php";
  }

}

for (var i = 0; i < box.length; i++) {
  box[i].addEventListener("change", checks);
   }
  for (var i = 0; i < but.length; i++) {
     but[i].addEventListener("click",change);
    }

function checks(){
  var size = box.length;
  var alln=0;
  var sum=0;
  for(var i = 0;i<size;i++){
    if(box[i].checked){
      if(k[i].style.display != "none"){
        alln++;
        sum+=Number(totl[i].innerHTML);
        }
      }
    }

    if(alln == box.length-no){
      document.getElementsByName("check1")[0].checked = true;
    }else {
      document.getElementsByName("check1")[0].checked = false;
    }
     document.getElementById("total_count").innerHTML = all + alln + and;
     total.innerHTML=sum;
  }

document.getElementsByName("check1")[0].addEventListener("change",all);
var all = "총 "
var and = "개 상품 선택"

function all(){
  var size = box.length;
  var to = 0;
  var alln=0;
  if(document.getElementsByName("check1")[0].checked == true){
    for(var i = 0; i<size; i++){
        box[i].checked = true;
        if(k[i].style.display != "none"){
          alln++;
        }
      }
     document.getElementById("total_count").innerHTML = all + alln + and;
  }
  if(document.getElementsByName("check1")[0].checked == false){
    for(var i = 0; i<size; i++){
        box[i].checked = false;

      }
      document.getElementById("total_count").innerHTML = all + 0 + and;
  }
  checks();
}

document.getElementById("remo").addEventListener("click",re);

function re(){
    var size = box.length;
  for(var i = 0; i < size; i++){
        if(box[i].checked == true){
          k[i].style.display = "none";
          box[i].checked = false;
          no ++;
        }
    }
    checks();
    document.getElementById("total_count").innerHTML = all + 0 + and;
}

function change(e){
  for(var i = 0; i<but.length; i++){
    if(e.target == but[i]){
      if(totl[i].innerHTML==price[i].innerHTML * quant[i].value){
        alert("수량이 변경되지 않았습니다.");
      }else{
        totl[i].innerHTML = price[i].innerHTML * quant[i].value;
        box[i].checked=true;
      }

    }
  }
  checks();
}
