<?php
    require_once 'inc/header.php';
?>
	<hr>
<script>
    function sample6_execDaumPostcode(){
        new daum.Postcode({
            oncomplete: function(data){
                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                var fullAddr = ''; // 최종 주소 변수
                var extraAddr = ''; // 조합형 주소 변수

                // 사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                    fullAddr = data.roadAddress;

                } else { // 사용자가 지번 주소를 선택했을 경우(J)
                    fullAddr = data.jibunAddress;
                }

                // 사용자가 선택한 주소가 도로명 타입일때 조합한다.
                if(data.userSelectedType === 'R'){
                    //법정동명이 있을 경우 추가한다.
                    if(data.bname !== ''){
                        extraAddr += data.bname;
                    }
                    // 건물명이 있을 경우 추가한다.
                    if(data.buildingName !== ''){
                        extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                    }
                    // 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
                    fullAddr += (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
                }

                // 우편번호와 주소 정보를 해당 필드에 넣는다.
                document.getElementById('sample6_postcode').value = data.zonecode; //5자리 새우편번호 사용
                document.getElementById('sample6_address').value = fullAddr;

                // 커서를 상세주소 필드로 이동한다.
                document.getElementById('sample6_address2').focus();
            }
        }).open();
    }
    function sample7_execDaumPostcode(){
        new daum.Postcode({
            oncomplete: function(data){
                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                var fullAddr = ''; // 최종 주소 변수
                var extraAddr = ''; // 조합형 주소 변수

                // 사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                    fullAddr = data.roadAddress;

                } else { // 사용자가 지번 주소를 선택했을 경우(J)
                    fullAddr = data.jibunAddress;
                }

                // 사용자가 선택한 주소가 도로명 타입일때 조합한다.
                if(data.userSelectedType === 'R'){
                    //법정동명이 있을 경우 추가한다.
                    if(data.bname !== ''){
                        extraAddr += data.bname;
                    }
                    // 건물명이 있을 경우 추가한다.
                    if(data.buildingName !== ''){
                        extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                    }
                    // 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
                    fullAddr += (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
                }

                // 우편번호와 주소 정보를 해당 필드에 넣는다.
                document.getElementById('sample7_postcode').value = data.zonecode; //5자리 새우편번호 사용
                document.getElementById('sample7_address1').value = fullAddr;

                // 커서를 상세주소 필드로 이동한다.
                document.getElementById('sample7_address2').focus();
            }
        }).open();
    }

    $(document).ready(function(){
        var re_id = /^[a-z0-9_]{4,20}$/; //아이디 정규식
        var re_pw = /^[a-z0-9_-]{6,18}$/; // 비밀번호 정규식
        var re_email = /^([\w\.-]+)@([a-z\d\.-]+)\.([a-z\.]{2,6})$/; // 이메일 정규식
        var 
        form = $(".form"),
            uid = $("#uid"),
            upw = $("#upw"),
            uemail = $("#uemail");

//        $("#uid").on("keyup keydown keypress", function(){
//            fn($("#uid").val());
//        });

        form.submit(function(){
            if(re_id.test(uid.val()) != true){
                alert("[ID 입력 오류] 유효한 ID를 입력해 주세요.");
                uid.focus();
                return false;
            }else if(re_pw.test(upw.val()) != true){
                alert("[PASSWORD 입력 오류] 유효한 PW를 입력해 주세요.");
                upw.focus();
                return false;
            }else if(re_email.test(uemail.val()) != true){
                alert("[EMAIL 입력 오류] 이메일을 정확히 입력해 주세요.");
                uemail.focus();
                return false;
            }
        });
    });


</script>
	<!-- container -->
	<div id="container">
		<div id="content">
				<div class="sub_con">
				<div class="left_con">
					<h2 class="sp_sub lnb_title">회원서비스</h2>
					<ul class="lnb">
					<li><a href="#">로그인<span class="sp_sub select_ico"></span></a></li>
					<li><a href="#" class="selected_hard">회원가입<span class="sp_sub select_ico"></span></a></li>
					<li><a href="#">아이디/비밀번호찾기<span class="sp_sub select_ico"></span></a></li>
					<li><a href="#">회원정보 수정<span class="sp_sub select_ico"></span></a></li>
					<li><a href="#">개인정보 취급방침<span class="sp_sub select_ico"></span></a></li>
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
						<h2 class="sp_sub join_title">회원가입</h2>
						<p class="join_txt">다양한 서비스와 풍부한 컨텐츠를 만나실 수 있는 회원가입입니다.</p>
						<ol class="join_step">
						<li class="selected">약관동의</li>
						<li>본인인증<span class="sp_sub ico_arr"></span></li>
						<li>회원정보입력<span class="sp_sub ico_arr"></span></li>
						<li>가입완료<span class="sp_sub ico_arr"></span></li>
						</ol>
					</div>
                    <form action="sign_up.php" method="post">
                        <div class="article_box">
                            <div class="art_tit_wrap">
                                <h3 class="article_tit">상세정보 입력</h3>
                            </div>	
                            <div class="enter_area">
                                <span>이름</span><input name="name" type="text" class="m start" placeholder="name" ><br>
                                <span>이름(영문)</span><input type="text" name="ename" class="one" placeholder="Eng name"><br>
                                <span>생년월일</span><select name="year" class="year m" >
                                    <option value="" selected>연도를 선택</option>
                                    <?php
                                    for($i=1960; $i<=2016; $i++){
                                        print "<option value=".$i.">".$i."</option>";
                                    }
                                    ?>
                                </select>년
                                <select name="month" class="month m" >
                                    <option value="" selected>월을 선택</option>
                                    <?php
                                    for($i=1; $i<=12; $i++){
                                        print "<option value=".$i.">".$i."</option>";
                                    }
                                    ?>
                                </select>월
                                <select name="day" class="day m" >
                                    <option value="" selected>일을 선택</option>
                                    <?php
                                    for($i=1; $i<=31; $i++){
                                        print "<option value=".$i.">".$i."</option>";
                                    }
                                    ?>
                                </select>일<br>
                                <span>ID</span><input name="id" id="uid" type="text" class="m" placeholder="ID" ><br>
                                <span>비밀번호</span><input name="password" id="upw" type="password" placeholder="PASSWORD" class="m" ><br>
                                <span>휴대폰 번호</span><select name="phone1" class="w" >
                                    <option value="010">010</option>
                                    <option value="011">011</option>
                                    <option value="016">016</option>
                                    <option value="017">017</option>
                                    <option value="018">018</option>
                                    <option value="019">019</option>
                                </select> - <input name="phone2" type="text" class="w" > - <input name="phone3" type="text" class="w" ><br>
                                <span>SMS 수신여부</span> <input type="radio" name="ok" value="수신동의" checked required>예
                                <input type="radio" name="ok" value="수신거부" required>아니오<br>
                                <span>E-MAIL</span> <input type="text" name="email" id="uemail" placeholder="admin@aaa.com" class="m" ><br>
                                
                                <!--주소-->
                                <span>주소</span><input type="text" name="add_num" id="sample6_postcode" placeholder="우편번호" readonly>
                                <input type="button" onclick="sample6_execDaumPostcode()" value="우편번호 찾기" ><br>
                                <input type="text" name="address1" id="sample6_address" placeholder="주소" readonly >
                                <input type="text" name="address2" id="sample6_address2" placeholder="상세주소" ><br>
                                
                                <span>DM발송처</span> <input type="radio" name="DM" value="자택" checked >자택
                                <input type="radio" name="DM" value="직장" >직장<br>
                                
                                <div class="lin2"></div>

                                <span>직장명</span><input type="text" name="emp" class="one"><br>
                                <span>직종</span><input type="text" name="op" class="one"><br>
                                <span>직위</span><input type="text" name="sp" class="one"><br>
                                <!--직장주소-->
                                <span>직장 주소</span><input type="text" name="add_num2" id="sample7_postcode" placeholder="우편번호"  readonly>
                                <input type="button" onclick="sample7_execDaumPostcode()" value="우편번호 찾기" ><br>
                                <input type="text" name="address11" id="sample7_address1" placeholder="주소" readonly >
                                <input type="text" name="address22" id="sample7_address2" placeholder="상세주소" ><br>
                                
                                <span>직장 전화번호</span><select name="phone11" class="w" >
                                    <option value="010">010</option>
                                    <option value="011">011</option>
                                    <option value="016">016</option>
                                    <option value="017">017</option>
                                    <option value="018">018</option>
                                    <option value="019">019</option>
                                </select> - <input name="phone22" type="text" class="w" > - <input name="phone33" type="text" class="w" ><br>
                                <span>결혼여부</span> <input type="radio" name="merry" value="미혼" checked >미혼
                                <input type="radio" name="merry" value="기혼" >기혼<br>
                                <span>결혼기념일</span><select name="meyear" class="year m" >
                                <option value="" selected>연도를 선택</option>
                                <?php
                                for($i=1960; $i<=2016; $i++){
                                    print "<option value=".$i.">".$i."</option>";
                                }
                                ?>
                                </select>년
                                <select name="memonth" class="month m" >
                                    <option value="" selected>월을 선택</option>
                                    <?php
                                    for($i=1; $i<=12; $i++){
                                        print "<option value=".$i.">".$i."</option>";
                                    }
                                    ?>
                                </select>월
                                <select name="meday" class="day m" >
                                    <option value="" selected>일을 선택</option>
                                    <?php
                                    for($i=1; $i<=31; $i++){
                                        print "<option value=".$i.">".$i."</option>";
                                    }
                                    ?>
                                </select>일
                            </div>
                        </div>
                        <div class="btn_wrap">
                            <button type="submit" class="sp_sub btn_next">회원가입</button>
                            <a href="./index.php" class="sp_sub btn_cancle">취소</a>
                        </div>
                    </form>
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