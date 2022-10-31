var rotation = 0;

function clear() {
	var myCanvas = document.getElementById("myCanvas");
	myCanvas.width = myCanvas.width; //크기를 조정할때 마다 canvas 영역이 지워진다. 실제 너비는 동일하게 trick
}

function rotateVideo(){
	var video = document.getElementById("videoPlay");
	video.play(); // .play() : 비디오나 오디오 재생
	setInterval(drawScreen, 33); // setInterval 첫번째 파라미터는 함수, 두번째 파라미터는 ms
}

function drawScreen(){
	var myCanvas = document.getElementById("myCanvas");
	var ctx = myCanvas.getContext("2d"); // .getContext("2d") : 텍스트, 선, 상자, 원 등을 그리는데 사용
	var videoPlay = document.getElementById("videoPlay");

	clear();

	//ctx.save();
	ctx.setTransform(1,0,0,1,0,0);
	var anqleInRadians = rotation * Math.PI/180;

	var x = 150;
	var y = 150;
	ctx.translate(x+.5*200, y+.5*150);
	ctx.rotate(anqleInRadians);

	ctx.drawImage(videoPlay,85,30); //이미지 배치할 위치(85,30)

	ctx.restore();
	rotation ++;
}
