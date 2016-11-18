var imagepath = "assets/image/";

var backgrounds = [
	"bg01.png",
	"bg02.png",
	"bg03.png"
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

	for(var i = 0; i<backgrounds.length; i++){
		console.log("hello again");
		$("#bgSelect").append(menustrings[i]);
	}

	
	$("#bgbutton").click(function(){
		$("#popupDialog").popup('open');
		
		$("#bgSelect").selectmenu();
		$("#bgSelect").change(function(){
			console.log($("#page").css('background-image'));
			var selected = $(this).val();
			$("#page").css('background-image', 'url('+selected+')');
			$("#popupDialog .message").show();
		});

	});





});

 