document.getElementById("submit").addEventListener("click",cheakf);

function cheakf(){
  var pizname = document.getElementById("pname");
  var dw = document.getElementById("mydw");
  var num = document.getElementById("count");
  var date2 = document.getElementById('date_time');
  var date = new Date();
  var topping = 0;
  var ch = document.getElementsByName("cheak1[]");
  for(var i = 0; i <ch.length; i++){
    if(ch[i].checked == true){
      topping ++;
    }
  }

  if(topping == 0){
    alert("토핑을 선택해 주세요.");
  }else{
    /*$.ajax({
      url: 'add.php',
      type: 'POST',
      data:{
        name : pizname.value,
        dw : dw.value,
        date : date2.value,
        number : num.value
      },
      dataType: 'text',
      success: function(output){
        alert(output);
      }
    });*/
    document.mform.action = "add.php";
  }
}
