/*//1, Hide spoiler
$(".spoiler span").hide();
//2, Add a button
$(".spoiler").append("<button>Reveal Spoiler!</button>");
//3, When button pressed
$("button").click(function(){
  //3.1, Show spoiler
  $(this).prev().show();
  //3.2, Get rid of button
  $(this).remove();
});*/

var $overlay = $('<div id="overlay2"></div>');

var $image = $("<img>");

var $caption = $("<p></p>");

$overlay.append($image);

$overlay.append($caption);

$("body").append($overlay);



$(".imageGallery a").click(function(event){
	event.preventDefault();
	var imageLocation = $(this).attr("href");
	$image.attr("src", imageLocation);
	$overlay.show();

	var captionText = $(this).children("img").attr("alt");
	$caption.text(captionText);

});

$overlay.click(function(){
	$overlay.hide();
});

var $select = $("<select></select>");
$("#menu").append($select);

$("#menu a").each(function(){
	var $anchor = $(this);
	var $option = $("<option></option>");

	if($anchor.parent().hasClass("selected")){
		$option.prop("selected", true);
	}

	$option.val($anchor.attr('href'));

	$option.text($anchor.text());

	$select.append($option);
});

var $button = $("<button>Go</button>");
$("#menu").append($button);
$button.click(function(){

	window.location = $select.val();
})

var color = $(".selecteddraw").css("background-color");
var $canvas = $("canvas");
var context = $canvas[0].getContext("2d");
var lastEvent;
var mouseDown = false;


$(".controls").on("click", "li", function(){

$(this).siblings().removeClass("selecteddraw");

$(this).addClass("selecteddraw");

color = $(this).css("background-color");
});

$("#revealColorSelect").click(function(){
	changeColor();
	$("#colorSelect").toggle();
});

function changeColor(){

var r = $("#red").val();
var b = $("#blue").val();
var g = $("#green").val();

$("#newColor").css("background-color", "rgb(" + r + "," + g + "," + b + ")");
}

$("input[type=range]").change(changeColor);

$("#addNewColor").click(function(){
		var $newColor = $("<li></li>");
		$newColor.css("background-color", $("#newColor").css("background-color"));
		$(".controls ul").append($newColor);

		$newColor.click();
});

$canvas.mousedown(function(e){
	lastEvent = e;
	mouseDown = true;
}).mousemove(function(e){
	if(mouseDown){
	context.beginPath();
	context.moveTo(lastEvent.offsetX, lastEvent.offsetY);
	context.lineTo(e.offsetX,e.offsetY);
	context.strokeStyle = color;
	context.stroke();
	lastEvent = e;
	}
}).mouseup(function(){
	mouseDown = false;
}).mouseleave(function(){
	$canvas.mouseup();
});

