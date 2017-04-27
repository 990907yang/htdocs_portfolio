<?php
    require_once 'inc/header.php';
    include "db.php";
    $sql = "select * from board";
    $se = $pdo->prepare($sql);
    $se->execute();
    $result = $se->fetchAll();
?>
	
<hr>	
<!-- container -->
<div id="container">
    <div id="content">
        <div class="sub_con">
            <div class="left_con">
                <h2 class="sp_sub lnb_title">COMMUNITY 커뮤니티</h2>
                <ul class="lnb">
                <li><a href="./sub1.php" class="selected_hard">공지사항<span class="sp_sub select_ico"></span></a></li>
                <li><a href="#">자료실<span class="sp_sub select_ico"></span></a></li>
                <li><a href="#">Joinroom<span class="sp_sub select_ico"></span></a></li>
                </ul> 
            </div>		
            <div class="right_con">	
                <p class="pg_nav">	
                    <a href="#">홈</a>
                    <span>&gt;</span>
                    <a href="#">회원서비스</a>						
                    <span>&gt;</span>
                    <strong>회원가입</strong>
                </p>
                <div class="join_wrap">	
                    <h3 class="sp_sub join_title">공지사항</h3>
                    <p class="join_txt">금강컨트리클럽을 이용하시기 불편함 없도록 밝고 건강한 새로운 소식을 회원님께 알려드립니다.</p>
                              <table class="not_tb">
                <caption><span class="blind">공지사항 안내</span></caption>
                <colgroup>
                <col style="width:68px">
                <col>
                <col style="width:137px">
                <col style="width:82px">
                </colgroup>
                <thead>
                        <tr>
                            <th scope="col"><span class="in">번호</span></th>
                            <th scope="col"><span class="in">제목</span></th>
                            <th scope="col"><span class="in">등록일</span></th>
                            <th scope="col"><span class="in">조회수</span></th>
                        </tr>
                </thead>
                <tbody>
                   <?php
                        foreach($result as $ro){
                    ?>                                                                   
                    <tr>
                        <td>
                            <div class="in"><?=$ro['idx']?></div>
                        </td>
                        <td class="con">
                            <div class="in"><a href="./view.php?idx=<?=$ro['idx']?>"><?=$ro['title']?></a></div>
                        </td>
                        <td>
                            <div class="in">
                                <div class="in"><?=$ro['date']?></div>
                            </div>
                        </td>
                        <td>
                            <div class="in">
                                <?=$ro['count']?>
                            </div>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>

                </tbody>
                </table>

                </div>								


                <div class="btn_wrap"><p class="write"><a href="write.php">글쓰기</a></p>
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