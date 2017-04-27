/*menu scroll*/
$(".main_nav li").click(function(){

	var top = $( $(this).attr('href') ).offset();
	$("html body").animate({"scrollTop":top.top-100},860);
});