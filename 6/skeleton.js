var table = document.getElementById("bb");
var trs = table.getElementsByTagName("tr");
var wrap = [];
for(var i = 0; i<trs.length;i++){
  var tds = trs[i].getElementsByTagName("td");
  wrap[i] = {'name':tds[0].innerHTML,'price':tds[1].innerHTML};
}


function search(){
  var nametext = document.getElementById("bookname").value;
  var pricetext = document.getElementById("price").value;
  var nradio = document.getElementById("n");
  var pradio = document.getElementById("p");

  if(nradio.checked ){
    wrap.sort(function(a, b) {
        return a['name']<b['name']?-1:1;
    });

    if(pricetext!=""&&nametext!=""){
      for(var i = 0; i<trs.length;i++){
        if(wrap[i].price>=pricetext&&wrap[i].name.indexOf(nametext)!=-1){
          var lis = document.createElement("LI");
          var ta = document.getElementById("list");

          var node = document.createTextNode(wrap[i].name+" : "+wrap[i].price);
          lis.appendChild(node);
            ta.appendChild(lis);
        }
      }
    }
    else if(pricetext!=""){
      for(var i = 0; i<trs.length;i++){
        if(wrap[i].price>=pricetext){
          var lis = document.createElement("LI");
          var ta = document.getElementById("list");
          var node = document.createTextNode(wrap[i].name+" : "+wrap[i].price);
          lis.appendChild(node);
          ta.appendChild(lis);
        }
      }
    }else if(nametext!=""){
      for(var i = 0; i<trs.length;i++){
        if(wrap[i].name.indexOf(nametext)!=-1){
          var lis = document.createElement("LI");
          var ta = document.getElementById("list");
          var node = document.createTextNode(wrap[i].name+" : "+wrap[i].price);
          lis.appendChild(node);
          ta.appendChild(lis);
        }
      }
    }else{
        alert("Enter the keywords of list that you want to search.");
    }

  }else{
    wrap.sort(function(a, b) {
        return a['price'] - b['price'];
    })
    for(var i = 0; i<trs.length;i++){
      console.log(wrap[i].name+" "+wrap[i].price);
    }
    if(pricetext!=""&&nametext!=""){
      for(var i = 0; i<trs.length;i++){
        if(wrap[i].price>=pricetext&&wrap[i].name.indexOf(nametext)!=-1){
          var lis = document.createElement("LI");
          var ta = document.getElementById("list");

          var node = document.createTextNode(wrap[i].name+" : "+wrap[i].price);
          lis.appendChild(node);
            ta.appendChild(lis);
        }
      }
    }
    else if(pricetext!=""){
      for(var i = 0; i<trs.length;i++){
        if(wrap[i].price>=pricetext){
          var lis = document.createElement("LI");
          var ta = document.getElementById("list");
          var node = document.createTextNode(wrap[i].name+" : "+wrap[i].price);
          lis.appendChild(node);
          ta.appendChild(lis);
        }
      }
    }else if(nametext!=""){
      for(var i = 0; i<trs.length;i++){
        if(wrap[i].name.indexOf(nametext)!=-1){
          var lis = document.createElement("LI");
          var ta = document.getElementById("list");
          var node = document.createTextNode(wrap[i].name+" : "+wrap[i].price);
          lis.appendChild(node);
          ta.appendChild(lis);
        }
      }
    }else{
      alert("Enter the keywords of list that you want to search.");
    }

  }

  }
