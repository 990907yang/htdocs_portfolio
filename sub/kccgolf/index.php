<?php
    require_once 'inc/header.php';
    include "db.php";
    $sql = "select * from board";
    $se = $pdo->prepare($sql);
    $se -> execute();
    $result = $se->fetchAll();
?>
	<hr>
	
	<!-- container -->
	<div id="container">
		<div id="content">
            <!--로그인 팝업-->
            <!-- <div id="login-box" class="login-popup">
            <a href="#" class="close"><img src="./img/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
              <form method="post" class="signin" action="#">
                    <fieldset>
                        <label for="id">
                            <span>ID</span>
                            <input type="text" name="id" value="" autocomplete="on" placeholder="ID">
                        </label>
                        <label for="pw">
                            <span>PASSWORD</span>
                            <input type="password" name="pw" value="" autocomplete="off" placeholder="PASSWORD">
                        </label>
                        <button class="submit_button" type="button">로그인</button>
                        <p><a href="signin.php">회원가입</a></p>
                    </fieldset>
              </form>
            </div> -->
            <!--//로그인 팝업-->
			<div class="sp_bg spot_wth">
				<h2 class="blind">날씨온도 정보</h2>
				<ol class="wth_list">
				<li class="today">
					<strong class="w_tit">오늘</strong>
					<strong class="w_tit2">02. 14 FRI</strong>
					<img src="img/img_wth.png" width="90" height="70" alt="구름많음" class="w_img">
					<div class="tmpr_info">
						<span class="now_tmpr">23</span>
						<span class="tmpr_ico">℃</span>
					</div>
					<p class="tmpr_info2">
					<span>최고 25℃</span>
					<span>최저 14℃</span>
					<span>강수확률 0%</span>
					</p>
				</li>
				<li class="tomorrow">
					<strong class="w_tit">내일</strong>
					<img src="img/img_wth2.png" width="60" height="45" alt="맑음" class="w_img">
				</li>
				<li class="after_tmr">
					<strong class="w_tit">모레</strong>
					<img src="img/img_wth3.png" width="60" height="45" alt="구름많음" class="w_img">
				</li>
				</ol>
				<a href="#" class="week_wth">주간 날씨보기<span class="sp_main ico"></span></a>
			</div>
			<ul class="spot_link">
			<li>
				<a href="#" class="sp_main reserv">RESERVATION<span class="blind">온라인 예약하기</span></a>
			</li>	
			<li>
				<a href="#" class="sp_main webcam">WEBCAM<span class="blind">현재 필드상태를 보여드립니다</span></a>
			</li>
			<li>
				<a href="#" class="sp_main mobileapp">MOBILE APP<span class="blind">모바일에서도 금강CC를 만나세요</span></a>	
			</li>	
			</ul>	
			<div class="notice_area">
				<div class="sp_bg notice">
					<h3 class="sp_main notice_txt">공지사항</h3>
				</div>
				<div class="sp_bg notice_list">
					<table class="notice_list_in">
                       <th></th>
                       <th></th>
				<?php
                    foreach($result as $ro){
                ?>
                    <tbody class="tbody_fst">
                        <tr>
                            <td class="title"><a href="./view.php?idx=<?=$ro['idx']?>"><?=$ro['title']?></a></td>
                            <td class="reg_date"><?=$ro['date']?></td>
                        </tr>
					</tbody>
				<?php
                    }
                ?>
					</table>					
					<div class="notice_pg">
						<a href="#" class="sp_main btn_pre">이전 공지사항 목록</a>
						<a href="#" class="sp_main btn_next">다음 공지사항 목록</a>
						<a href="#" class="notice_more">+ 더보기</a>
					</div>
				</div>
				<!-- http://flexslider.woothemes.com/ -->
				<div class="banner">
					<ul class="bnn_list slides">
					<li>
						<a href="#"><img src="img/main_banner2.gif" width="490" height="220" alt="현대카드 M포인트 사용가능"/></a>
					</li>
					<li>
						<a href="#"><img src="img/main_banner3.jpg" width="490" height="220" alt="클럽회원 모집 안내"/></a>
					</li>
					<li>
						<a href="#"><img src="img/main_banner3.jpg" width="490" height="220" alt="국민관광 상품권을 이용하세요"/></a>
					</li>
					</ul>
				</div>	
			</div>
			<ul class="link_area">			
			<li>
				<a href="#" class="dirctns"><span class="sp_main dirctns_txt">찾아오는 길</span></a>
			</li>
			<li>
				<a href="#" class="contactus"><span class="sp_main contactus_txt">연락하기</span></a>
			</li>
			<li>
				<a href="#" class="clubhouse"><span class="sp_main clubhouse_txt">CLUB HOUSE</span></a>
			</li>
			<li>
				<a href="#" class="courceinfo"><span class="sp_main courceinfo_txt">코스안내</span></a>
			</li>
			</ul>
			<span class="sp_main bg_ico"></span>
		</div>	
	</div>
	<!-- //container -->
	<hr>
	
	<!-- footer -->
	<div id="footer">		
		<div class="f_inner">
			<p class="policy">
				<a href="#">회칙 및 이용약관</a>
				<a href="#">개인정보 취급방침</a>
				<a href="#">인트라넷</a>
			</p>
			<div class="site_info">
				<p class="none_style">(주)금강레저 대표자:조종호</p>
				<p>경기도 여주군 가남면 본두리 1-2</p>
				<p>대표전화: 031-880-6000</p>
				<p>대표전화: 031-884-5155</p><br>
				<!--사업자 등록번호는 전화번호로 인식되지 않도록 빈 span 태그를 넣어준다-->
				<p class="none_style">사업자등록번호: 126-<span></span>81-<span></span>07997</p>
				<p>통신판매법 신고 : 2009-경기여주-0058</p>
				<p>개인정보관리책임자 : 윤두한 031-880-6000</p>
				<p>
					<a href="#" class="licenseInfo sp_main"><span class="blind">사업자 정보확인</span></a>
				</p>	
			</div>
			<address>Copyright (c) Kumkang leisure Ltd.  All rights reserved</address>
		</div>	
	</div>
	<!-- //footer -->
</div>
</body>
</html>