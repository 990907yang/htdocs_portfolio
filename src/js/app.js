$(".menu").click(function(){
	var t = $(this).text();
	console.log(t);
	
	$("section,.menu").removeClass("on");
	$(this).addClass("on");
	$("."+t).addClass("on");
});