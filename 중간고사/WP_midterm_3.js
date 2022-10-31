document.getElementById("subBt").addEventListener("click",sub);


function sub(){
  var id = document.getElementById("Id").value;
  var name = document.getElementById("name").value;
  var pNum = document.getElementById("phoneNumber").value;
  var femaler = document.getElementsByName("gender")[0];
  var maler = document.getElementsByName("gender")[1];
  var ckbox = document.getElementsByName("hobby[]");
  var cksum=0;
  for(var i = 0; i < ckbox.length;i++){
    if(ckbox[i].checked){
      cksum++;
    }
  }
  if(id==""){
    alert("아이디를 입력해 주세요!");
  }else if(name=""||isNaN(name)==false){
    alert("이름은 문자만 입력해 주세요!");
  }else if(pNum==""||isNaN(pNum)==true){
    alert("전화번호는 숫자만 입력해 주세요!");
  }else if(!femaler.checked&&!maler.checked){
    alert("성별을 선택하세요!");
  }else if(cksum<2){
    alert("관심분야는 두 개 이상 고르세요!");
  }else{
    document.form1.action="WP_midterm_3.php";
  }
}
