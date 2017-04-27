<?php
    require_once 'inc/header.php';
    include "db.php";
?>	
	<hr>
	
	<!-- container -->
	<div id="container">
		<div id="content">
				<div class="sub_con">
				<div class="left_con">
					<h2 class="sp_sub lnb_title">회원서비스</h2>
					<ul class="lnb">
					<li><a href="#" class="selected_hard">글쓰기<span class="sp_sub select_ico"></span></a></li>
					<li><a href="#">자료실<span class="sp_sub select_ico"></span></a></li>
					</ul>
				</div>		
				<div class="right_con">	
					<p class="pg_nav">	
						<a href="#">홈</a>
						<span>&gt;</span>
						<a href="#">커뮤니티</a>						
						<span>&gt;</span>
						<strong>글쓰기</strong>
					</p>
                   <div class="join_wrap">
						<h3 class="join_title">공지사항</h3>
						<p class="mo_te">공지사항을 작성하세요.</p>
                        <form action="insert.php" method="post" enctype="multipart/form-data">
                            <span>제목</span><input type="text" name="title" required>
                            <span>작성자</span><input type="text" name="writer" required>
                            <span>내용</span><textarea name="content" class="textaaa" cols="30" rows="10" required></textarea><br>
                            <div class="insert">
                                <label for="insert">첨부파일</label>
                                <input type="file" name="upload" class="insert">
                                <br><span>* 파일이름은 꼭 영어로 해주세요. ex) aa.jpg</span>
                            </div>
                            <div class="btn_area">
                                <div class="btn_view">
                                    <button type="submit">글쓰기</button>
                                </div>
                                <div class="btn_view">
                                    <a href="sub1.php">취소</a>
                                </div>
					        </div>
                        </form>  
                   </div>
				</div>
				</div>	
		</div>	
	</div>
	<!-- //container -->
	<hr>
	
	<!-- footer -->
	<div id="footer">		
		<div class="f_inner">
			<p class="policy_sub">
				<a href="#">회칙 및 이용약관</a>
				<a href="#">개인정보 취급방침</a>
				<a href="#">인트라넷</a>
			</p>
			<div class="site_info">
				<p class="none_style">(주)금강레저 대표자:조종호</p>
				<p>경기도 여주군 가남면 본두리 1-2</p>
				<p>대표전화: 031-880-6000</p>
				<p>대표전화: 031-884-5155</p><br>
				<p class="none_style">사업자등록번호: 126-81-07997</p>
				<p>통신판매법 신고 : 2009-경기여주-0058</p>
				<p>개인정보관리책임자 : 윤두한 031-880-6000</p>
				<p><a href="#" class="licenseInfo sp_main">사업자 정보확인</a></p>	
			</div>
			<address>Copyright (c) Kumkang leisure Ltd.  All rights reserved</address>
		</div>	
	</div>
	<!-- //footer -->
</div>
</body>
</html>