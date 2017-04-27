$(document).ready(function(){
    $("#header").mouseenter(function(){
        $("#logo img").attr('src','./src/img/h_logo_on.png');
    });
    $("#header").mouseleave(function(){
        $("#logo img").attr('src','./src/img/h_logo.png');
    });
    
    
    $("#header").mouseenter(function(){
        $("#menu >li").css({'border-top':'1px solid #000','color':'#000'});
    });
    $("#header").mouseleave(function(){
        $("#menu >li").css({'border-top':'1px solid #fff','color':'#fff'});
    });
    
    
    $("#menu > li").mouseenter(function(){
        $("#header").css('height','397px');
        $(this).css('border-bottom','2px solid #3498db');
    });
    $("#menu > li").mouseleave(function(){
        $("#header").css('height','130px');
        $(this).css('border-bottom','none');
    });
    
    var max = $(".slider li").length;
    var current = 1;
    for(var i=0; i < max; i++){
        if(i==max-1){
            $(".slider li:nth-child("+(i+1)+")").css({"left":-1920+"px"});
        }else{
            $(".slider li:nth-child("+(i+1)+")").css({"left":i*1920+"px"});
        }
    }
    if( current == 1 ){
            $('.slide_1 > p').css({'opacity':'1','top':'500px'});
    }
    //오른쪽 버튼 클릭시에
    $(".next").click(function(){
        if($(".slider li").is(":animated")) return false;
        $(".slider li").animate({"left":"-=1920px"},function(){
            $(".slide_"+(current + 1)).css({"left":1920+"px"});
        });
        if((current + 1)==max) current = 0;
        else if((current + 1) > max) current = 1;
        else current++;
        if( current == 2 ){
            $('.slide_2 > p').css({'opacity':'1','top':'500px'});
        }
        if( current == 0 ){
            $('.slide_3 > p').css({'opacity':'1','top':'500px'});
        }
        console.log(current);
    });
    //왼쪽 버튼 클릭시에
    $(".prev").click(function(){
        if($(".slider li").is(":animated")) return false;
        $(".slider li").animate({"left":"+=1920px"},function(){
            if(current == 1){
               $(".slide_"+max).css({"left":-1920+"px"});
            }else{
                $(".slide_"+(current-1)).css({"left":-1920+"px"});
            }
        });
        console.log(current);
        if((current-1)==0) current=max;
        else if((current-1)<0) current = max-1;
        else current--;
    });
});