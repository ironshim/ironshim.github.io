<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_THEME_PATH.'/head_main.php');
?>

	<section id="fh5co-home" data-section="home" style="background-image: url(<?php echo G5_THEME_URL; ?>/images/bg_main_2.jpeg); " data-stellar-background-ratio="0.5">
		<div class="gradient"></div>
		<div class="container">
			<div class="text-wrap">
				<div class="text-inner">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h1 class="to-animate">그누테마에 오신것을 환영합니다.</h1>
							<h2 class="to-animate">SIR 콘텐츠몰에 오시면 다양한 스킨과 테마, 플러그인등을 만나실 수 있습니다. <a href="http://sir.kr/cmall/" target="_blank" title="그누보드 스킨, 플러그인, 테마">sir.kr/cmall</a> 에서 제공하고 있습니다.</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slant"></div>
	</section>

	<section id="fh5co-intro">
		<div class="container">
			<div class="row row-bottom-padded-lg">
				<div class="fh5co-block to-animate" style="background-image: url(<?php echo G5_THEME_URL; ?>/images/img_7.jpg);">
					<div class="overlay-darker"></div>
					<div class="overlay"></div>
					<div class="fh5co-text">
						<i class="fh5co-intro-icon icon-bulb"></i>
						<h2>기획</h2>
						<p>모든 시작은 기획입니다.<br> 귀사에 맞는 올바른 기획이 성공의 시작입니다.</p>
						<p><a href="#" class="btn btn-primary">Get In Touch</a></p>
					</div>
				</div>
				<div class="fh5co-block to-animate" style="background-image: url(<?php echo G5_THEME_URL; ?>/images/img_8.png);">
					<div class="overlay-darker"></div>
					<div class="overlay"></div>
					<div class="fh5co-text">
						<i class="fh5co-intro-icon icon-wrench"></i>
						<h2>개발</h2>
						<p>디자인 퍼블리싱 그리고 프로그램 기준의 선택부터 마무리까지 전문인력이 함께합니다.</p>
						<p><a href="#" class="btn btn-primary">Click Me</a></p>
					</div>
				</div>
				<div class="fh5co-block to-animate" style="background-image: url(<?php echo G5_THEME_URL; ?>/images/img_10.jpg);">
					<div class="overlay-darker"></div>
					<div class="overlay"></div>
					<div class="fh5co-text">
						<i class="fh5co-intro-icon icon-rocket"></i>
						<h2>런칭</h2>
						<p>그럴싸한 말좀 적어주세요. 이건 기획자가 하세요. 프로그래머가 하기 싫어요.</p>
						<p><a href="#" class="btn btn-primary">Why Us?</a></p>
					</div>
				</div>
			</div>
			<div class="row watch-video text-center to-animate">
				<span>Watch the video</span>

				<a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo btn-video"><i class="icon-play2"></i></a>
			</div>
		</div>
	</section>
<? 
	include (G5_THEME_PATH.'/main/main_work.php');
	include (G5_THEME_PATH.'/main/main_customer.php');
	include (G5_THEME_PATH.'/main/main_service.php');
	include (G5_THEME_PATH.'/main/main_about.php');
	include (G5_THEME_PATH.'/main/main_contactus.php');
?>
	<script type="text/javascript" src="//apis.daum.net/maps/maps3.js?apikey=40c42a3eba905b67498d3a519237e9b0"></script>
	<script>
		var container = document.getElementById('map'); //지도를 담을 영역의 DOM 레퍼런스
		var options = { //지도를 생성할 때 필요한 기본 옵션
			center: new daum.maps.LatLng(33.450701, 126.570667), //지도의 중심좌표.
			level: 3 //지도의 레벨(확대, 축소 정도)
		};
		
		var map = new daum.maps.Map(container, options); //지도 생성 및 객체 리턴
		
		var markerPosition  = new daum.maps.LatLng(33.450701, 126.570667); 

		// 마커를 생성합니다
		var marker = new daum.maps.Marker({
		    position: markerPosition
		});
		marker.setMap(map);
		setZoomable(false);
		
		function setZoomable(zoomable) {
		    // 마우스 휠로 지도 확대,축소 가능여부를 설정합니다
		    map.setZoomable(zoomable);    
		}
		</script>
		<!-- Modernizr JS -->
	<script src="<?php echo G5_THEME_URL; ?>/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->	

<?php
include_once(G5_THEME_PATH.'/tail_main.php');
?>