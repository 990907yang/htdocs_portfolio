<?php 
	include "./src/community/db.php";
	$sql = "select * from community order by idx desc";
	$se = $pdo->prepare($sql);
	$se->execute();
	$result = $se->fetchAll();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>PORTFOLIO</title>
	<link rel="stylesheet" type="text/css" href="./src/css/style.css">
</head>
<body>
<!-- wrap -->
	<div id="wrap">
		<!-- header -->
		<header id="header">
			<div class="headbar">
				<div class="tit">
				<!-- logo -->
					<h1 class="logo">Yang Gyoung Sik</h1>
					<p>Web developer &#38; designer</p>
				</div>
			</div>
			<!-- menu -->
			<div class="nav">
				<ul>
					<li class="menu">ABOUT</li>
					<li class="menu on">PORTFOLIO</li>
					<li class="menu">CONTACT</li>
					<li class="menu">COMMUNITY</li>
					<li class="menu" id="wr">WRITE</li>
				</ul>
			</div>
		</header>
		<!-- section -->
		<!-- about -->
		<section class="ABOUT">
			<div class="sec_tit">
				<h2>ABOUT</h2>
				<div class="underline"></div>
			</div>
			<div class="profil">
				<p><span>Name</span> : Yang Gyoung Sik</p>
				<p><span>Major</span> : Web Design &#38; Development</p>
				<p><span>Languages</span> : HTML, CSS, JAVA SCRIPT, PHP</p>
				<p><span>GitHub</span> : <a href="https://github.com/990907yang">https://github.com/990907yang</a></p>
				<p><span>API</span> : 서울시 지하철 시간 API, 다음지도 API, 구글지도 API</p>
			</div>
		</section>
		<!-- portfolio -->
		<section class="PORTFOLIO on">
			<div class="sec_tit">
				<h2>PORTFOLIO</h2>
				<div class="underline"></div>
			</div>
			<ul>
				<li class="site" onclick="window.open('http://shgs.kangwonjae.com')">
	                <div class="bg">
	                    <p>HTML,CSS,JS,PHP</p>
	                </div>
	                <img src="./src/img/sdhs.jpg" alt="site">
	                <div class="text">
	                    <h3>디지텍고등학교 소개 사이트</h3>
	                    <p>교내 웹경진대회 대상작품</p>
	                </div>
	            </li>
	            <li class="site" onclick="window.open('https://github.com/990907yang/htdocs_web')">
	                <div class="bg">
	                    <p>코드를 Git에 저장</p>
	                </div>
	                <img src="./src/img/git.jpg" alt="site">
	                <div class="text">
	                    <h3>웹 경진대회 코드</h3>
	                    <p>GitHub를 이용하여 코드저장</p>
	                </div>
	            </li>
	            <li class="site">
	            	<a href="./sub/kccgolf/index.php">
	            	<div class="bg">
	            		<p>HTML,CSS,JS,PHP</p>
	            	</div>
	            	<img src="./src/img/kcc.jpg" alt="site">
		                <div class="text">
		                	<h3>KCC금강컨트리클럽</h3>
		                    <p>KCC홈페이지 회원가입,커뮤니티등 사용가능</p>
		                </div>
	            	</a>
		        </li>
		        <li class="site">
	            	<a href="./sub/lock/index.html">
	            	<div class="bg">
	            		<p>제작중</p>
	            	</div>
	            	<img src="./src/img/lock.jpg" alt="site">
		                <div class="text">
		                	<h3>Lock &#38; Lock 홈페이지</h3>
		                    <p>퍼블리싱 능력향상을 위한 홈페이지 제작중</p>
		                </div>
	            	</a>
		        </li>
		        <li class="site">
	            	<a href="./sub/taxnow/index.html">
	            	<div class="bg">
	            		<p>HTML,CSS,JS,반응형웹</p>
	            	</div>
	            	<img src="./src/img/tax.jpg" alt="site">
		                <div class="text">
		                	<h3>영수증 정리프로그램 TaxNow</h3>
		                    <p>퍼블리싱과 CSS tranceform요소를 살린 홈페이지</p>
		                </div>
	            	</a>
		        </li>
			</ul>
		</section>
		<!-- contact -->
		<section class="CONTACT">
			<div class="sec_tit">
				<h2>CONTACT</h2>
				<div class="underline"></div>
			</div>
			<div class="cont">
				<p><span>Email</span> : yam0907@naver.com, yam09071004@gmail.com</p>
				<p><span>Address</span> : 서울시 강북구 송천동 삼양로24길 19</p>
				<p><span>Phone</span> : 010-7371-7919</p>
			</div>
		</section>

		<section class="COMMUNITY">
			<div class="sec_tit">
				<h2>COMMUNITY</h2>
				<div class="underline"></div>
			</div>
			<div class="board">
				<div class="table">
					<div class="tb_head">
						<ul>
							<li>번호</li>
							<li>제목</li>
							<li>글쓴이</li>
							<li>날짜</li>
							<li>조회수</li>
						</ul>
					</div>
					<div class="tb_body">
					<?php
					foreach($result as $ro){
					 ?>
						<ul class="list">
							<li class="number"><?=$ro['idx']?></li>
							<li class="title"><a href="./src/community/view/view.php?idx=<?=$ro['idx']?>"><?=$ro['title']?></a></li>
							<li class="writer"><?=$ro['writer']?></li>
							<li class="date"><?=$ro['date']?></li>
							<li class="count"><?=$ro['count']?></li>
						</ul>
					<?php
					}
					 ?>
					</div>
				</div>
				<button class="wr_btn">글쓰기</button>
			</div>
		</section>
		<section class="WRITE">
			<div class="sec_tit">
				<h2>글쓰기</h2>
				<div class="underline"></div>
			</div>
			<div class="writing">
				<form action="./src/community/function/write.php" method="post">
					<input type="text" name="title" placeholder="제목" required>
					<input type="text" name="writer" placeholder="작성자" required>
					<textarea type="textarea" class="textaa" name="text" placeholder="내용을 입력하세요." required></textarea>
					<button class="wr_btn">글쓰기</button>
					<a href="index.php" class="wr_btn">취소</a>
				</form>
			</div>
		</section>
		<!-- footer -->
		<footer id="footer">
			<p>Copyright &#169; 2017 Yang Gyoung Sik All rights reserved. </p>
		</footer>
	</div>
</body>
<script src="./src/js/jquery.js"></script>
<script src="./src/js/app.js"></script>
</html>