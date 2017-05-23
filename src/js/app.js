
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

	/*$("#w_bt").click(function(){
		console.log("클릭");
		var title = $.trim($('.title').val());
		if( title == "" ){
			alert("제목을 제대로 입력하세요.");
			$('.title').focus();
			return false;
		}
	}); */
	$("#w_bt").click(function(){
		if( $(".title").val().replace(/\s/g,"").length == 0 ){
			alert("값을 제대로 입력해주세요.");
			$(".title").focus();
			return false;
		}
		else if( $(".writer").val().replace(/\s/g,"").length == 0){
			alert("값을 제대로 입력해주세요.");
			$(".writer").focus();
			return false;
		}

		else if( $(".textaa")/val().replace(/\s/g,"").length == 0 ){
			alert("제대로 해라");
			$(".textaa").focus();
			return false;
		}else{
			alert("글작성을 성공했습니다.");
		}
	});

});