<?php
// 이 파일은 새로운 파일 생성시 반드시 포함되어야 함
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$begin_time = get_microtime();

if (!isset($g5['title'])) {
    $g5['title'] = $config['cf_title'];
    $g5_head_title = $g5['title'];
}
else {
    $g5_head_title = $g5['title']; // 상태바에 표시될 제목
    $g5_head_title .= " | ".$config['cf_title'];
}

// 현재 접속자
// 게시판 제목에 ' 포함되면 오류 발생
$g5['lo_location'] = addslashes($g5['title']);
if (!$g5['lo_location'])
    $g5['lo_location'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
$g5['lo_url'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
if (strstr($g5['lo_url'], '/'.G5_ADMIN_DIR.'/') || $is_admin == 'super') $g5['lo_url'] = '';

/*
// 만료된 페이지로 사용하시는 경우
header("Cache-Control: no-cache"); // HTTP/1.1
header("Expires: 0"); // rfc2616 - Section 14.21
header("Pragma: no-cache"); // HTTP/1.0
*/
?>
<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $g5_head_title; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
<meta name="author" content="FREEHTML5.CO" />

<!-- Facebook and Twitter integration -->
<meta property="og:title" content=""/>
<meta property="og:image" content=""/>
<meta property="og:url" content=""/>
<meta property="og:site_name" content=""/>
<meta property="og:description" content=""/>
<meta name="twitter:title" content="" />
<meta name="twitter:image" content="" />
<meta name="twitter:url" content="" />
<meta name="twitter:card" content="" />

<?
	if($config['cf_add_meta'])
    echo $config['cf_add_meta'].PHP_EOL;
?>


<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="<?php echo G5_THEME_CSS_URL; ?>/favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/animate.css">
	<!-- Icomoon Icon Fonts-->
<style>	
@font-face {
	font-family: 'icomoon';
	src:url('<?php echo G5_THEME_URL; ?>/fonts/icomoon/icomoon.eot?qtatmt');
	src:url('<?php echo G5_THEME_URL; ?>/fonts/icomoon/icomoon.eot?qtatmt#iefix') format('embedded-opentype'),
		url('<?php echo G5_THEME_URL; ?>/fonts/icomoon/icomoon.ttf?qtatmt') format('truetype'),
		url('<?php echo G5_THEME_URL; ?>/fonts/icomoon/icomoon.woff?qtatmt') format('woff'),
		url('<?php echo G5_THEME_URL; ?>/fonts/icomoon/icomoon.svg?qtatmt#icomoon') format('svg');
	font-weight: normal;
	font-style: normal;
}

@font-face {
    font-family: 'nanum-barun-gothic-bold';
    font-style: normal;
    font-weight: 700;
    
    src: url('<?php echo G5_THEME_URL; ?>/fonts/NanumBarunGothicBold/nanumbarungothicbold.eot');
    src: url('<?php echo G5_THEME_URL; ?>/fonts/NanumBarunGothicBold/nanumbarungothicbold.eot?#iefix') format('embedded-opentype'),
         url('<?php echo G5_THEME_URL; ?>/fonts/NanumBarunGothicBold/nanumbarungothicbold.woff2') format('woff2'),
         url('<?php echo G5_THEME_URL; ?>/fonts/NanumBarunGothicBold/nanumbarungothicbold.woff') format('woff'),
         url('<?php echo G5_THEME_URL; ?>/fonts/NanumBarunGothicBold/nanumbarungothicbold.ttf') format('truetype'),
         url('<?php echo G5_THEME_URL; ?>/fonts/NanumBarunGothicBold/nanumbarungothicbold.svg#nanum-barun-gothic-bold') format('svg');
}
@font-face {
    font-family: 'nanum-barun-gothic-regular';
    font-style: normal;
    font-weight: 400;    
    src: url('<?php echo G5_THEME_URL; ?>/fonts/NanumBarunGothicRegular/nanumbarungothicregular.eot');
    src: url('<?php echo G5_THEME_URL; ?>/fonts/NanumBarunGothicRegular/nanumbarungothicregular.eot?#iefix') format('embedded-opentype'),
         url('<?php echo G5_THEME_URL; ?>/fonts/NanumBarunGothicRegular/nanumbarungothicregular.woff2') format('woff2'),
         url('<?php echo G5_THEME_URL; ?>/fonts/NanumBarunGothicRegular/nanumbarungothicregular.woff') format('woff'),
         url('<?php echo G5_THEME_URL; ?>/fonts/NanumBarunGothicRegular/nanumbarungothicregular.ttf') format('truetype'),
         url('<?php echo G5_THEME_URL; ?>/fonts/NanumBarunGothicRegular/nanumbarungothicregular.svg#nanum-barun-gothic-regular') format('svg');
}
@font-face {
    font-family: 'nanum-barun-gothic-light';
    src: url('<?php echo G5_THEME_URL; ?>/fonts/NanumBarunGothicLight/nanumbarungothiclight.eot');
    src: url('<?php echo G5_THEME_URL; ?>/fonts/NanumBarunGothicLight/nanumbarungothiclight.eot?#iefix') format('embedded-opentype'),
         url('<?php echo G5_THEME_URL; ?>/fonts/NanumBarunGothicLight/nanumbarungothiclight.woff2') format('woff2'),
         url('<?php echo G5_THEME_URL; ?>/fonts/NanumBarunGothicLight/nanumbarungothiclight.woff') format('woff'),
         url('<?php echo G5_THEME_URL; ?>/fonts/NanumBarunGothicLight/nanumbarungothiclight.ttf') format('truetype'),
         url('<?php echo G5_THEME_URL; ?>/fonts/NanumBarunGothicLight/nanumbarungothiclight.svg#nanum-barun-gothic-light') format('svg');
}
</style>

	<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/simple-line-icons.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/magnific-popup.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/bootstrap.css">
<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/style.css">



	
	

<!--<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/<?php echo G5_IS_MOBILE ? 'mobile' : 'default'; ?>.css">-->
<!--[if lte IE 8]>
<script src="<?php echo G5_JS_URL ?>/html5.js"></script>
<![endif]-->
<script>
// 자바스크립트에서 사용하는 전역변수 선언
var g5_url       = "<?php echo G5_URL ?>";
var g5_bbs_url   = "<?php echo G5_BBS_URL ?>";
var g5_is_member = "<?php echo isset($is_member)?$is_member:''; ?>";
var g5_is_admin  = "<?php echo isset($is_admin)?$is_admin:''; ?>";
var g5_is_mobile = "<?php echo G5_IS_MOBILE ?>";
var g5_bo_table  = "<?php echo isset($bo_table)?$bo_table:''; ?>";
var g5_sca       = "<?php echo isset($sca)?$sca:''; ?>";
var g5_editor    = "<?php echo ($config['cf_editor'] && $board['bo_use_dhtml_editor'])?$config['cf_editor']:''; ?>";
var g5_cookie_domain = "<?php echo G5_COOKIE_DOMAIN ?>";
</script>
<script src="<?php echo G5_JS_URL ?>/jquery-1.8.3.min.js"></script>
<script src="<?php echo G5_JS_URL ?>/jquery.menu.js"></script>
<script src="<?php echo G5_JS_URL ?>/common.js"></script>
<script src="<?php echo G5_JS_URL ?>/wrest.js"></script>

	</head>
	<body>