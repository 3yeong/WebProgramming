document.getElementById("join").addEventListener("click",open);
document.getElementById("addbut").addEventListener("click", addopen);
document.getElementById("cancel1").addEventListener("click", addclose);
document.getElementById("signinid").addEventListener("click", saveid);
document.getElementById("submitid").addEventListener("click",saveid);
document.getElementById("saveid").addEventListener("click", saved);
document.getElementById("editid").addEventListener("click",editta);
document.getElementById("submitch").addEventListener("click", editchange);
document.getElementById("deleteid").addEventListener("click", deletid);
document.getElementById("cancel2").addEventListener("click",disable);
document.getElementById("logout").addEventListener("click",logout);

var pattern_id = /^([A-Za-z0-9]){6,15}$/;
var pattern_pw = /^.*(?=^.{8,15}$)(?=.*\d)(?=.*[a-zA-Z])(?=.*[!@#$%^&+=]).*$/;

var lii = document.getElementsByTagName("li");
for(var k = 0; k < lii.length;k++){
  lii[k].addEventListener("click",change1);
}

function logout(){
  document.getElementById("hereid").innerHTML="";
  var sch = document.getElementById("table1").getElementsByTagName("tr")[1];
  var tdi = sch.getElementsByTagName("td");
  for(var i = 0; i < tdi.length; i++){
    var a = tdi[i];
    while (a.hasChildNodes()){
      a.removeChild(a.firstChild);
    }
  }
  window.mform.action = "schedule.php";
  alert("로그아웃 되었습니다.");
}

//로그인 박스 보이기
function open(){
   document.getElementById("joinid").style.display='block';
}
//로그인 박스 사라지기
function close(){
  document.getElementById("joinid").style.display = "none";
}
//회원가입
function saveid(e){
  var inid = document.getElementById("inid");
  var inpw = document.getElementById("inpw");
  var signin = document.getElementById("signinid");
  var submit = document.getElementById("submitid");
  if(!pattern_id.test(inid.value)||inid.value == ""){
    alert("아이디 또는 패스워드의 입력 양식을 체크해주세요.");
    close();
  }
  else if(!pattern_pw.test(inpw.value)||inpw == ""){
    alert("아이디 또는 패스워드의 입력 양식을 체크해주세요.");
    close();
  }else{

    if(e.target == signin){
      $.ajax({
        url: 'addperson.php',
        type: 'POST',
        data:{
          inid: inid.value,
          inpw: inpw.value
        },
        dataType: 'text',
        success: function(output){
          alert(output);
        }
      });
    }else if(e.target == submit){
      document.login.action = "schedule.php";
    }
  }
}

//스케줄 추가 박스 누르기
function addopen(){
  var here = document.getElementById("hereid");
  var add = document.getElementById("mysch");
  if(here.innerHTML == ""){
    alert("추가하기 위해 로그인 해주세요.");
  }else {
    if(add.style.display!="block"){
      add.style.display="block";
    }else{
      add.style.display = 'none';
    }
  }
}
//스케줄 추가 박스 사라지기
function addclose(){
    var add = document.getElementById("mysch");
  add.style.display = 'none';
}

//스케줄 편집

function change1(e){
    var here = document.getElementById("hereid").innerText;
    var ch = document.getElementById("change");
    var op = ch.getElementsByTagName("option");
    for(var n = 0; n < op.length; n++){
      if(e.target.parentNode.id == op[n].innerHTML){
        op[n].selected = "selected";
      }
    }
    var ti = ch.getElementsByTagName("input")[0];
    var de = ch.getElementsByTagName("input")[1];
    var se = e.target.parentNode.id;
    ti.value = e.target.innerText;
    ch.style.display = "block";

    $.ajax({
      url:'change.php',
      type: 'POST',
      data: {
        here: here,
        select: se,
        title: ti.value,
        k: 0
      },
      dataType: 'text',
      success: function(output){
        de.value = output;
      }
    });
    localStorage.setItem(0,here);
    localStorage.setItem(1,se);
    localStorage.setItem(2,e.target.innerHTML);
    localStorage.setItem(3, de.value);
}

function change(){
  document.getElementById("change").style.display="none";
}

function editchange(){
    var ch = document.getElementById("change");
    var id = localStorage.getItem(0);
    var se = localStorage.getItem(1);
    var ti = localStorage.getItem(2);
    var title = ch.getElementsByTagName("input")[0];
    var sel = document.getElementById("selectc");
    var val = sel.options[sel.selectedIndex].value;
    var des = document.getElementById("descin").value;
    $.ajax({
      url:'change.php',
      type:'POST',
      data: {
          here: id,
          select: se,
          title: ti,
          title2 : title.value,
          select2:val,
          des : des,
          k : 1
        },
        dataType: 'text',
        success: function(output){
          alert(output);
          document.getElementById("change").style.display="none";
          disable();
          history.go(0);
        }
    });
}

function deletid(){
  var here = document.getElementById("hereid").innerText;
  var ch = document.getElementById("change");
  var title = ch.getElementsByTagName("input")[0];
  var sel = document.getElementById("selectch");
  var val = sel.options[sel.selectedIndex].value;
  var des = document.getElementById("descin").value;

  $.ajax({
  url:'change.php',
  type:'POST',
  data: {
      here:here,
      select:des,
      title : title.value,
      select:val,
      k : -1
  },
  dataType:'text',
  success:function(output){
    alert(output);
    document.getElementById("change").style.display="none";
    disable();
    history.go(0);
  }
});
}

function editta(){
  var ch = document.getElementById("change");
  var tit = ch.getElementsByTagName("input")[0];
  var des = ch.getElementsByTagName("input")[1];
  var sel = ch.getElementsByTagName("select")[0];
  var submit = document.getElementById("submitch");
  tit.disabled=false;
  des.disabled=false;
  sel.disabled=false;
  submit.disabled=false;
  document.getElementById("editid").disabled=true;
  document.getElementById("deleteid").disabled=true;
}

function disable(){
  var ch = document.getElementById("change");
  ch.getElementsByTagName("input")[0].disabled=true;
  ch.getElementsByTagName("input")[1].disabled=true;
  ch.getElementsByTagName("select")[0].disabled=true;
  document.getElementById("submitid").disabled=true;
  document.getElementById("editid").disabled=false;
  document.getElementById("deleteid").disabled=false;
}


function saved(){
  var tit=document.getElementById("titlein").value;
  var des = document.getElementById("descin").value;
  var here = document.getElementById("hereid").innerText;
  var sel = document.getElementById("selectc");
  var val = sel.options[sel.selectedIndex].value;
  if(tit==""||des==""){
    alert("내용을 입력해주세요");

  }else{
    $.ajax({
    url:'add.php',
    type:'POST',
    data: {
        select:val,
        title:tit,
        des:des,
        here:here,
    },
    dataType:'text',
    success:
      alert("저장되었습니다.")
  });
    history.go(0);
  }
}

function allowDrop(e){
  e.preventDefault();
}
function drag(e){
  e.dataTransfer.setData("list",e.target.getAttribute('name'));
  var list = document.getElementsByName(e.target.getAttribute('name'));
  var id = document.getElementById("hereid").innerText;

  localStorage.removeItem(0);
  localStorage.removeItem(1);
  localStorage.removeItem(2);
  localStorage.removeItem(3);
  localStorage.setItem(0,id);
  localStorage.setItem(1,e.target.parentNode.id);
  localStorage.setItem(2,e.target.innerText);
  localStorage.setItem(3,e.target.id);
  for(var i = 0; i < list.length;i++){
    if(e.target===list[i]){
      e.dataTransfer.setData("listindex", i);
    }
  }
}

function drop(e){
  e.preventDefault();
  var name = e.dataTransfer.getData("list");
  var curr = e.target;
  var parent = e.target.parentNode.id;
  var i = e.dataTransfer.getData("listindex");
  var list1 = document.getElementsByName(name);

  var id =localStorage.getItem(0);
  var select = localStorage.getItem(1);
  var title = localStorage.getItem(2);
  var des = localStorage.getItem(3);
  document.getElementById(parentId).insertBefore(list1[i],current);

  $.ajax({
  url:'add2.php',
  type:'POST',
  data: {
      here:id,
      title : title ,
      select:parent,
      select2:select,
      pre:curr.innerText,
      des:des,
      k:1
  },
  dataType:'text',
  success:del()
  });
}

function drop_bottom(e){
  e.preventDefault();
  var name = e.dataTransfer.getData("list");
  var list1 = document.getElementsByName(name);
  var i = e.dataTransfer.getData("listindex");
  for(var k = 0;k<document.getElementsByTagName("ul").length;k++){
    if(e.target===document.getElementsByTagName("ul")[k].parentNode){
      var ul = document.getElementsByTagName("ul")[k];
      ul.appendChild(list1[i]);
    }
  }
  var id =localStorage.getItem(0);
  var sel = localStorage.getItem(1);
  var tit = localStorage.getItem(2);
  var des = localStorage.getItem(3);

  $.ajax({
  url:'add2.php',
  type:'POST',
  data: {
      here:id,
      title : tit ,
      select:ul.id,
      select2:sel,
      des:des,
      k:0
  },
  dataType:'text',
  success:del()
  });
}

function del(){
  var id =localStorage.getItem(0);
  var sel = localStorage.getItem(1);
  var tit = localStorage.getItem(2);
  $.ajax({
  url:'change.php',
  type:'POST',
  data: {
      here:id,
      title : tit ,
      select:sel,
      k : -2
  },
  dataType:'text'
});
location.reload(true);
}
