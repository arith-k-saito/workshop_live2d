var imagepath = "assets/image/";


var setBackground = function(element){
	var backgrounds = [
		"bg01.png",
		"bg02.png",
		"bg03.png"
	];

	var image = backgrounds[Math.floor(Math.random()*backgrounds.length)];
	console.log(image);
	var path = imagepath + image;
	element.css('background-image', 'url('+path+')');
	
}


$(document).ready(function(){
	//set up the bg
	setBackground($("#page"));

	//set heigth of canvas container
	$(".chara-view").css('height', $(document).innerHeight());


});

 