<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head_main.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

	<header role="banner" id="fh5co-header">
		<div class="container">
			<!-- <div class="row"> -->
			<nav class="navbar navbar-default">
			<div class="navbar-header">
				<!-- Mobile Toggle Menu Button -->
				<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
			 <a class="navbar-brand" href="/"><?=$g5_head_title;?></a> 
			</div>
			<div id="navbar" class="navbar-collapse collapse">
			  <ul class="nav navbar-nav navbar-right">
			    <li class="active"><a href="#" data-nav-section="home"><span>Home</span></a></li>
			    <li><a href="#" data-nav-section="work"><span>포트폴리오</span></a></li>
			    <li><a href="#" data-nav-section="testimonials"><span>고객의소리</span></a></li>
			    <li><a href="#" data-nav-section="services"><span>서비스</span></a></li>
			    <li><a href="#" data-nav-section="about"><span>맴버</span></a></li>
			    <li><a href="#" data-nav-section="contact"><span>Contact</span></a></li>
			  </ul>
			</div>
			</nav>
			<!-- </div> -->
		  </div>
	</header>