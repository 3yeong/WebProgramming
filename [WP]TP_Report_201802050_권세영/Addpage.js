document.getElementById("addbt").addEventListener("click",add);
document.getElementById("deletebt").addEventListener("click",delete1);



function add(){
  var page = document.getElementsByName("select1[]")[0];
  var txt = document.getElementById("adder");
  if(page.value == "none"){
    alert("페이지를 선택해 주세요.");
  }else if(txt.value == ""){
    alert("내용을 입력해주세요.");
  }else{
      window.mform.action = "dataSave.php";
  }
}

function delete1(){
  var page = document.getElementsByName("select2[]")[0];
  var num = document.getElementById("number");

  if(page.value == "none"){
    alert("페이지를 선택해 주세요.");
  }else if(num.value ==""){
    alert("번호를 입력해주세요.");
  }else{
    window.mform.action = "delete.php";
  }
}
