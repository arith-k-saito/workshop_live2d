var imagepath = "assets/image/";

var backgrounds = [
	"bg01.png",
	"bg02.png",
	"bg03.png"
];

var speechy = [
	"I like rice.",
	"Melons are good.",
	"Tra la la la la la la."
];

var bgbutton = [
	"background_w.png",
	"background.png",
	"background.png"
]

var menustrings = [];

var setBackground = function(element){

	


	var randomnum = Math.floor(Math.random()*backgrounds.length);
	var image = backgrounds[randomnum];
	var bgbutt = "assets/"+bgbutton[randomnum];
	console.log(image);
	var path = imagepath + image;
	element.css('background-image', 'url('+path+')');
	$("#bgbutton").css('background-image', 'url('+bgbutt+')');


	for(var i = 0; i<backgrounds.length; i++){
		console.log("hello");
		var params = "";
		if(i == randomnum){params = "disabled selected";}
		menustrings[i] = "<option "+params+" value='"+path+backgrounds[i]+"'>Option "+i+"</option>";
	}

}


$(document).ready(function(){
	//set up the bg
	setBackground($("#page"));

	//set heigth of canvas container
	$(".chara-view").css('height', $(document).innerHeight());
	console.log($("#bgSelect"));


	$(".speechify").click(function(){
		console.log("Blah!");
		var randomnum = Math.floor(Math.random()*speechy.length);
		$(".speechwords").html(speechy[randomnum]);
	});

	for(var i = 0; i<backgrounds.length; i++){
		console.log("hello again");
		$("#bgSelect").append(menustrings[i]);
	}

	
	$("#bgbutton").click(function(){
		console.log("hi");
		setBackground($("#page"));

	});





});

 