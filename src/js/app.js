$(document).ready(function(){
	$(".menu").click(function(){
		var t = $(this).text();
		console.log(t);
		
		$("section,.menu").removeClass("on");
		$(this).addClass("on");
		$("."+t).addClass("on");
	});
	$(".wr_btn").click(function(){
		$("#wr").click();
	});
});