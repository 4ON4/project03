<?php
    define('DBuser','aze624');
    define('DBpass','ay2111!!');
    define('DBname','aze624');
    
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
    if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
    else $userlevel = "";
    if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
    else $userpoint = "";
?>

        <!-- 헤더윗부분 -->
        <div id="headerGnb" class="cf">
            <div class="headerlibrary_gnb">
                <ul>
<?php 
    if (!$userid){
    ?>                  
                    <li title="회원가입화면으로 이동합니다."><a href="member_form.php">회원가입</a></li>
                    <li title="로그인화면으로 이동합니다."><a href="member_login.php">로그인</a></li>   

<?php
    } else {
        $logged = $username."(".$userid.")님[Level:".$userlevel.", Point:".$userpoint."]";
?>
                    <li><span><?=$logged?></span></li>      
                    <li title="로그아웃 됩니다."><a href="logout.php">로그아웃</a></li>
                    <li><a href="member_modify_form.php">정보 수정</a></li>
<?php
    }
?>
<?php
    if($userlevel==1) {
?>
                    <li><a href="admin.php">관리자 모드</a></li>
<?php
    }
?>
                    <li title="안양시립도서관 사이트맵으로 이동합니다."><a href="https://lib.anyang.go.kr/intro/siteMap.do">사이트맵</a></li>                
                </ul>
            </div>  
        </div> <!-- 헤더 윗부분 -->
        <!-- 헤더아랫부분 -->
        <div id="library_main_menu" class="cf">
            <div class="main_contents">
                <h1 class="hidden">안양시립도서관</h1>
                <div class="library_logo"><a href="index.php"><img src="images/logo.png" alt="도서관로고"/></a></div>
                <div class="main_menu_wrap">
                    <!-- 메뉴랩 -->
                    <div class="library_menu_wrap">
                        <ul class="oneInner">
                            <li class="oneDepth" title="도서관 자료검색 메뉴입니다."><a href="sub1/sub1.html">도서관자료검색</a>
                                <div class="twoInner">
                                    <div class="twoDepth">
                                        <div class="sub_blank_box"></div>
                                        <ul class="sub_box1">
                                            <li><a href="#">도서관소장자료검색</a></li>
                                            <li><a href="#">도서주제별검색</a></li>
                                            <li><a href="#">신착자료검색</a></li>
                                            <li><a href="#">정기간행물검색</a></li>
                                            <li><a href="#">비치희망도서신청</a></li>
                                        </ul>                               
                                        <ul class="sub_box2">
                                            <li><a href="#">사서추천도서</a></li>
                                            <li><a href="#">도서관대출베스트</a></li>
                                            <li><a href="#">원문/학술정보</a></li>
                                            <li><a href="#">향토자료</a></li>
                                            <li><a href="#">공공도서관인기도서</a></li>
                                        </ul>                               
                                        <ul class="sub_box3">
                                            <li><a href="#">문화행사신청</a></li>
                                            <li><a href="#">설문조사</a></li>
                                            <li><a href="#">독서마라톤</a></li>
                                            <li><a href="#">도서관영화상영</a></li>
                                            <li><a href="#">스마트영어도서관</a></li>
                                            <li><a href="#">북스타트</a></li>
                                            <li><a href="#">독서동아리활동</a></li>
                                        </ul>                               
                                        <ul class="sub_box4">
                                            <li><a href="#">도서관이용안내</a></li>
                                            <li><a href="#">도서실이용소식</a></li>
                                            <li><a href="#">자주하는질문</a></li>
                                            <li><a href="#">상호대차</a></li>
                                            <li><a href="#">책배달서비스</a></li>                 
                                            <li><a href="#">모바일앱</a></li>
                                            <li><a href="#">스마트도서관</a></li>
                                            <li><a href="#">전자도서관</a></li>
                                        </ul>                               
                                        <ul class="sub_box5">
                                            <li><a href="#">인사말</a></li>
                                            <li><a href="#">안양시도서관안내</a></li>
                                            <li><a href="#">도서관연혁</a></li>
                                            <li><a href="#">도서관자료현황</a></li>
                                            <li><a href="#">도서관내조직도</a></li>
                                            <li><a href="#">도서관련법규</a></li>
                                        </ul>                               
                                        <ul class="sub_box6">
                                            <li><a href="#">나의 정보</a></li>
                                            <li><a href="#">도서이용내역</a></li>
                                            <li><a href="#">안심도서대출</a></li>
                                            <li><a href="#">상호대차조회</a></li>
                                            <li><a href="#">관심도서목록</a></li>
                                            <li><a href="#">추천도서목록</a></li>
                                            <li><a href="#">문학행사신청조회</a></li>
                                            <li><a href="#">도서관에 문의하기</a></li>
                                        </ul>                              
                                    </div>
                                </div>                          
                            </li>
                            <li class="oneDepth"><a href="sub2/sub2.html">도서정보</a>
                                <div class="twoInner">
                                    <div class="twoDepth">
                                        <div class="sub_blank_box"></div>
                                        <ul class="sub_box1">
                                            <li><a href="#">도서관소장자료검색</a></li>
                                            <li><a href="#">도서주제별검색</a></li>
                                            <li><a href="#">신착자료검색</a></li>
                                            <li><a href="#">정기간행물검색</a></li>
                                            <li><a href="#">비치희망도서신청</a></li>
                                        </ul>                               
                                        <ul class="sub_box2">
                                            <li><a href="#">사서추천도서</a></li>
                                            <li><a href="#">도서관대출베스트</a></li>
                                            <li><a href="#">원문/학술정보</a></li>
                                            <li><a href="#">향토자료</a></li>
                                            <li><a href="#">공공도서관인기도서</a></li>
                                        </ul>                               
                                        <ul class="sub_box3">
                                            <li><a href="#">문화행사신청</a></li>
                                            <li><a href="#">설문조사</a></li>
                                            <li><a href="#">독서마라톤</a></li>
                                            <li><a href="#">도서관영화상영</a></li>
                                            <li><a href="#">스마트영어도서관</a></li>
                                            <li><a href="#">북스타트</a></li>
                                            <li><a href="#">독서동아리활동</a></li>
                                        </ul>                               
                                        <ul class="sub_box4">
                                            <li><a href="#">도서관이용안내</a></li>
                                            <li><a href="#">도서실이용소식</a></li>
                                            <li><a href="#">자주하는질문</a></li>
                                            <li><a href="#">상호대차</a></li>
                                            <li><a href="#">책배달서비스</a></li>                 
                                            <li><a href="#">모바일앱</a></li>
                                            <li><a href="#">스마트도서관</a></li>
                                            <li><a href="#">전자도서관</a></li>
                                        </ul>                               
                                        <ul class="sub_box5">
                                            <li><a href="#">인사말</a></li>
                                            <li><a href="#">안양시도서관안내</a></li>
                                            <li><a href="#">도서관연혁</a></li>
                                            <li><a href="#">도서관자료현황</a></li>
                                            <li><a href="#">도서관내조직도</a></li>
                                            <li><a href="#">도서관련법규</a></li>
                                        </ul>                               
                                        <ul class="sub_box6">
                                            <li><a href="#">나의 정보</a></li>
                                            <li><a href="#">도서이용내역</a></li>
                                            <li><a href="#">안심도서대출</a></li>
                                            <li><a href="#">상호대차조회</a></li>
                                            <li><a href="#">관심도서목록</a></li>
                                            <li><a href="#">추천도서목록</a></li>
                                            <li><a href="#">문학행사신청조회</a></li>
                                            <li><a href="#">도서관에 문의하기</a></li>
                                        </ul>                             
                                    </div>
                                </div>                          
                            </li>
                            <li class="oneDepth"><a href="sub3/sub3.html">문화행사/참여</a>
                                <div class="twoInner">
                                    <div class="twoDepth">
                                        <div class="sub_blank_box"></div>
                                        <ul class="sub_box1">
                                            <li><a href="#">도서관소장자료검색</a></li>
                                            <li><a href="#">도서주제별검색</a></li>
                                            <li><a href="#">신착자료검색</a></li>
                                            <li><a href="#">정기간행물검색</a></li>
                                            <li><a href="#">비치희망도서신청</a></li>
                                        </ul>                               
                                        <ul class="sub_box2">
                                            <li><a href="#">사서추천도서</a></li>
                                            <li><a href="#">도서관대출베스트</a></li>
                                            <li><a href="#">원문/학술정보</a></li>
                                            <li><a href="#">향토자료</a></li>
                                            <li><a href="#">공공도서관인기도서</a></li>
                                        </ul>                               
                                        <ul class="sub_box3">
                                            <li><a href="#">문화행사신청</a></li>
                                            <li><a href="#">설문조사</a></li>
                                            <li><a href="#">독서마라톤</a></li>
                                            <li><a href="#">도서관영화상영</a></li>
                                            <li><a href="#">스마트영어도서관</a></li>
                                            <li><a href="#">북스타트</a></li>
                                            <li><a href="#">독서동아리활동</a></li>
                                        </ul>                               
                                        <ul class="sub_box4">
                                            <li><a href="#">도서관이용안내</a></li>
                                            <li><a href="#">도서실이용소식</a></li>
                                            <li><a href="#">자주하는질문</a></li>
                                            <li><a href="#">상호대차</a></li>
                                            <li><a href="#">책배달서비스</a></li>                 
                                            <li><a href="#">모바일앱</a></li>
                                            <li><a href="#">스마트도서관</a></li>
                                            <li><a href="#">전자도서관</a></li>
                                        </ul>                               
                                        <ul class="sub_box5">
                                            <li><a href="#">인사말</a></li>
                                            <li><a href="#">안양시도서관안내</a></li>
                                            <li><a href="#">도서관연혁</a></li>
                                            <li><a href="#">도서관자료현황</a></li>
                                            <li><a href="#">도서관내조직도</a></li>
                                            <li><a href="#">도서관련법규</a></li>
                                        </ul>                               
                                        <ul class="sub_box6">
                                            <li><a href="#">나의 정보</a></li>
                                            <li><a href="#">도서이용내역</a></li>
                                            <li><a href="#">안심도서대출</a></li>
                                            <li><a href="#">상호대차조회</a></li>
                                            <li><a href="#">관심도서목록</a></li>
                                            <li><a href="#">추천도서목록</a></li>
                                            <li><a href="#">문학행사신청조회</a></li>
                                            <li><a href="#">도서관에 문의하기</a></li>
                                        </ul>                              
                                    </div>
                                </div>                          
                            </li>
                            <li class="oneDepth"><a href="sub4/sub4.html">이용안내</a>
                                <div class="twoInner">
                                    <div class="twoDepth">
                                        <div class="sub_blank_box"></div>
                                        <ul class="sub_box1">
                                            <li><a href="#">도서관소장자료검색</a></li>
                                            <li><a href="#">도서주제별검색</a></li>
                                            <li><a href="#">신착자료검색</a></li>
                                            <li><a href="#">정기간행물검색</a></li>
                                            <li><a href="#">비치희망도서신청</a></li>
                                        </ul>                               
                                        <ul class="sub_box2">
                                            <li><a href="#">사서추천도서</a></li>
                                            <li><a href="#">도서관대출베스트</a></li>
                                            <li><a href="#">원문/학술정보</a></li>
                                            <li><a href="#">향토자료</a></li>
                                            <li><a href="#">공공도서관인기도서</a></li>
                                        </ul>                               
                                        <ul class="sub_box3">
                                            <li><a href="#">문화행사신청</a></li>
                                            <li><a href="#">설문조사</a></li>
                                            <li><a href="#">독서마라톤</a></li>
                                            <li><a href="#">도서관영화상영</a></li>
                                            <li><a href="#">스마트영어도서관</a></li>
                                            <li><a href="#">북스타트</a></li>
                                            <li><a href="#">독서동아리활동</a></li>
                                        </ul>                               
                                        <ul class="sub_box4">
                                            <li><a href="#">도서관이용안내</a></li>
                                            <li><a href="#">도서실이용소식</a></li>
                                            <li><a href="#">자주하는질문</a></li>
                                            <li><a href="#">상호대차</a></li>
                                            <li><a href="#">책배달서비스</a></li>                 
                                            <li><a href="#">모바일앱</a></li>
                                            <li><a href="#">스마트도서관</a></li>
                                            <li><a href="#">전자도서관</a></li>
                                        </ul>                               
                                        <ul class="sub_box5">
                                            <li><a href="#">인사말</a></li>
                                            <li><a href="#">안양시도서관안내</a></li>
                                            <li><a href="#">도서관연혁</a></li>
                                            <li><a href="#">도서관자료현황</a></li>
                                            <li><a href="#">도서관내조직도</a></li>
                                            <li><a href="#">도서관련법규</a></li>
                                        </ul>                               
                                        <ul class="sub_box6">
                                            <li><a href="#">나의 정보</a></li>
                                            <li><a href="#">도서이용내역</a></li>
                                            <li><a href="#">안심도서대출</a></li>
                                            <li><a href="#">상호대차조회</a></li>
                                            <li><a href="#">관심도서목록</a></li>
                                            <li><a href="#">추천도서목록</a></li>
                                            <li><a href="#">문학행사신청조회</a></li>
                                            <li><a href="#">도서관에 문의하기</a></li>
                                        </ul>                             
                                    </div>
                                </div>                          
                            </li>
                            <li class="oneDepth"><a href="sub5/sub5.html">도서관소개</a>
                                <div class="twoInner">
                                    <div class="twoDepth">
                                        <div class="sub_blank_box"></div>
                                        <ul class="sub_box1">
                                            <li><a href="#">도서관소장자료검색</a></li>
                                            <li><a href="#">도서주제별검색</a></li>
                                            <li><a href="#">신착자료검색</a></li>
                                            <li><a href="#">정기간행물검색</a></li>
                                            <li><a href="#">비치희망도서신청</a></li>
                                        </ul>                               
                                        <ul class="sub_box2">
                                            <li><a href="#">사서추천도서</a></li>
                                            <li><a href="#">도서관대출베스트</a></li>
                                            <li><a href="#">원문/학술정보</a></li>
                                            <li><a href="#">향토자료</a></li>
                                            <li><a href="#">공공도서관인기도서</a></li>
                                        </ul>                               
                                        <ul class="sub_box3">
                                            <li><a href="#">문화행사신청</a></li>
                                            <li><a href="#">설문조사</a></li>
                                            <li><a href="#">독서마라톤</a></li>
                                            <li><a href="#">도서관영화상영</a></li>
                                            <li><a href="#">스마트영어도서관</a></li>
                                            <li><a href="#">북스타트</a></li>
                                            <li><a href="#">독서동아리활동</a></li>
                                        </ul>                               
                                        <ul class="sub_box4">
                                            <li><a href="#">도서관이용안내</a></li>
                                            <li><a href="#">도서실이용소식</a></li>
                                            <li><a href="#">자주하는질문</a></li>
                                            <li><a href="#">상호대차</a></li>
                                            <li><a href="#">책배달서비스</a></li>                 
                                            <li><a href="#">모바일앱</a></li>
                                            <li><a href="#">스마트도서관</a></li>
                                            <li><a href="#">전자도서관</a></li>
                                        </ul>                               
                                        <ul class="sub_box5">
                                            <li><a href="#">인사말</a></li>
                                            <li><a href="#">안양시도서관안내</a></li>
                                            <li><a href="#">도서관연혁</a></li>
                                            <li><a href="#">도서관자료현황</a></li>
                                            <li><a href="#">도서관내조직도</a></li>
                                            <li><a href="#">도서관련법규</a></li>
                                        </ul>                               
                                        <ul class="sub_box6">
                                            <li><a href="#">나의 정보</a></li>
                                            <li><a href="#">도서이용내역</a></li>
                                            <li><a href="#">안심도서대출</a></li>
                                            <li><a href="#">상호대차조회</a></li>
                                            <li><a href="#">관심도서목록</a></li>
                                            <li><a href="#">추천도서목록</a></li>
                                            <li><a href="#">문학행사신청조회</a></li>
                                            <li><a href="#">도서관에 문의하기</a></li>
                                        </ul>                             
                                    </div>
                                </div>                          
                            </li>
                            <li class="oneDepth"><a href="sub6/sub6.html">마이페이지</a>
                                <div class="twoInner">
                                    <div class="twoDepth">
                                        <div class="sub_blank_box"></div>
                                        <ul class="sub_box1">
                                            <li><a href="#">도서관소장자료검색</a></li>
                                            <li><a href="#">도서주제별검색</a></li>
                                            <li><a href="#">신착자료검색</a></li>
                                            <li><a href="#">정기간행물검색</a></li>
                                            <li><a href="#">비치희망도서신청</a></li>
                                        </ul>                               
                                        <ul class="sub_box2">
                                            <li><a href="#">사서추천도서</a></li>
                                            <li><a href="#">도서관대출베스트</a></li>
                                            <li><a href="#">원문/학술정보</a></li>
                                            <li><a href="#">향토자료</a></li>
                                            <li><a href="#">공공도서관인기도서</a></li>
                                        </ul>                               
                                        <ul class="sub_box3">
                                            <li><a href="#">문화행사신청</a></li>
                                            <li><a href="#">설문조사</a></li>
                                            <li><a href="#">독서마라톤</a></li>
                                            <li><a href="#">도서관영화상영</a></li>
                                            <li><a href="#">스마트영어도서관</a></li>
                                            <li><a href="#">북스타트</a></li>
                                            <li><a href="#">독서동아리활동</a></li>
                                        </ul>                               
                                        <ul class="sub_box4">
                                            <li><a href="#">도서관이용안내</a></li>
                                            <li><a href="#">도서실이용소식</a></li>
                                            <li><a href="#">자주하는질문</a></li>
                                            <li><a href="#">상호대차</a></li>
                                            <li><a href="#">책배달서비스</a></li>                 
                                            <li><a href="#">모바일앱</a></li>
                                            <li><a href="#">스마트도서관</a></li>
                                            <li><a href="#">전자도서관</a></li>
                                        </ul>                               
                                        <ul class="sub_box5">
                                            <li><a href="#">인사말</a></li>
                                            <li><a href="#">안양시도서관안내</a></li>
                                            <li><a href="#">도서관연혁</a></li>
                                            <li><a href="#">도서관자료현황</a></li>
                                            <li><a href="#">도서관내조직도</a></li>
                                            <li><a href="#">도서관련법규</a></li>
                                        </ul>                               
                                        <ul class="sub_box6">
                                            <li><a href="#">나의 정보</a></li>
                                            <li><a href="#">도서이용내역</a></li>
                                            <li><a href="#">안심도서대출</a></li>
                                            <li><a href="#">상호대차조회</a></li>
                                            <li><a href="#">관심도서목록</a></li>
                                            <li><a href="#">추천도서목록</a></li>
                                            <li><a href="#">문학행사신청조회</a></li>
                                            <li><a href="#">도서관에 문의하기</a></li>
                                        </ul>                              
                                    </div>
                                </div>                          
                            </li>
                        </ul>
                    </div>
                </div>
            </div>      
        </div> <!-- 헤더아랫부분 -->

