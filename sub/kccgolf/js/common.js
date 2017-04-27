$(document).ready(function(){ 

  //banner
  $('.banner').flexslider({
    animation: "slide",
    controlNav: true,
    directionNav: false,
    slideshow: true,
    slideshowSpeed: 3000,
    animationLoop: true
    });

  //site menu
  $('.site_menu_lst > li > a').on('mouseenter focus', function(){
    $('.site_sub_menu').css('display','block');
    $('.site_menu_lst').addClass("site_menu_opn");
  });
  $('.site_menu_lst').mouseleave(function(){
    $('.site_sub_menu').css('display','none');
    $('.site_menu_lst').removeClass("site_menu_opn");
  });
  $('.site_menu_lst > li').on('mouseenter', function(){
    $(this).find('a').addClass('selected')
    .next('ul').find('a').addClass('selected');
  });
  $('.site_menu_lst > li').mouseleave(function(){
    $(this).find('a').removeClass('selected')
    .next('ul').find('a').removeClass('selected');
  });

  //subpage lnb
  $('.lnb li a').on('mouseenter focus', function(){
    $('.lnb li a.selected').removeClass('selected');
    $(this).addClass('selected');
  });
  $('.lnb').mouseleave(function(){
    $('.lnb li a.selected').removeClass('selected');
  });
});

//라디오버튼
  function fn_smsclick(at)
  {
    if(at == "Y"){
      // agreement_y 찾아서 checked="checked" 부여한다.
      var agreeY = document.getElementById("agreement_y");
      agreeY.setAttribute("checked", "checked");

      // agree_fake_y 찾아서 class 명을 rdo_on 으로 부여한다.
      var fakeY = document.getElementById("agree_fake_y");
      fakeY.setAttribute("class", "rdo_on");

      // agreement_n 찾아서 checked="checked" 삭제한다.
      var agreeN = document.getElementById("agreement_n");
      agreeN.removeAttribute("checked");

      // agree_fake_n 찾아서 class 명을 rdo_off 부여한다.
      var fakeN = document.getElementById("agree_fake_n");
      fakeN.setAttribute("class", "rdo_off");
    }
    else if(at == "N"){
      // agreement_y 찾아서 checked="checked" 삭제한다
      var agreeY = document.getElementById("agreement_y");
      agreeY.removeAttribute("checked");

      // agree_fake_y 찾아서 class 명을 rdo_off 로 부여한다.
      var fakeY = document.getElementById("agree_fake_y");
      fakeY.setAttribute("class", "rdo_off");

      // agreement_n 찾아서 checked="checked" 부여한다.
      var agreeN = document.getElementById("agreement_n");
      agreeN.setAttribute("checked", "checked");

      // agree_fake_n 찾아서 class 명을 rdo_on 부여한다.
      var fakeN = document.getElementById("agree_fake_n");
      fakeN.setAttribute("class", "rdo_on");
    }
  }