document.getElementById("clickin").addEventListener("click", myCanvasi);
var c = document.getElementById("myCanvas");
var vi = document.getElementById("video1");

function myCanvasi() {
  var rotation = 10;
  var angleInRadians= rotation * Math.PI/180;
  var ctx = c.getContext("2d");



  var i;

  i = window.setInterval(
    function() {
      ctx.clearRect(0,0,c.width, c.height);

      ctx.rotate(angleInRadians);
      ctx.drawImage(vi,10,15,320,180);

      ctx.restore();
      rotation++;
    }, 80);




  //ctx.translate(rotation+.5*vi.width, rotation+.5*vi.height);
  ctx.rotate(angleInRadians);
//  ctx.restore( );
  rotation ++;
  //setInterval(drawScreen, 33)
}
