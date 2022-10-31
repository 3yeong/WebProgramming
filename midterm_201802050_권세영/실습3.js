var myid = document.getElementById("myid");
var myname = document.getElementById("myname");
var mycallnum = document.getElementById("mycallnum");
var gender = document.getElementsByName("gender");
var favt = document.getElementsByName("favtopic[]");
var pattern_num = /[0-9]/;	// 숫자
var pattern_eng = /[a-zA-Z]/;	// 문자
var pattern_spc = /[~!@#$%^&*()_+|<>?:{}]/; // 특수문자
var pattern_kor = /[ㄱ-ㅎ|ㅏ-ㅣ|가-힣]/; // 한글체크

document.getElementById("save0").addEventListener("click",save1);
function save1(){
  var gen = 0;
  var count = 0;
  for(var i = 0; i <gender.length; i++){
    if(gender[i].checked == true){
      gen ++;
    }
  }
  for(var j = 0; j<favt.length;j++){
    if(favt[j].checked == true){
      count ++;
    }
  }

  if(myid.value ==""){
    alert("아이디를 입력해주세요.");
  }else if(!myname.value.match(pattern_eng)&&!myname.value.match(pattern_kor)){
    alert("이름은 문자로 입력해주세요.");
  }else if(!mycallnum.value.match(pattern_num)){
    alert("전화번호는 숫자만 입력해주세요.");
  }else if(gen == 0){
    alert("성별을 입력해 주세요.");
  }else if(count <2){
    alert("관심 분야는 2개 이상 고르세요");
  }else{
    document.myform.action = "실습3.php";
  }
}
