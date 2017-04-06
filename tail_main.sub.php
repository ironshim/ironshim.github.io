<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<?php if ($is_admin == 'super') {  ?><!-- <div style='float:left; text-align:center;'>RUN TIME : <?php echo get_microtime()-$begin_time; ?><br></div> --><?php }  ?>

<!-- ie6,7에서 사이드뷰가 게시판 목록에서 아래 사이드뷰에 가려지는 현상 수정 -->
<!--[if lte IE 7]>
<script>
$(function() {
    var $sv_use = $(".sv_use");
    var count = $sv_use.length;

    $sv_use.each(function() {
        $(this).css("z-index", count);
        $(this).css("position", "relative");
        count = count - 1;
    });
});
</script>
<![endif]-->

<!-- jQuery -->
	<script src="<?php echo G5_THEME_URL; ?>/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo G5_THEME_URL; ?>/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo G5_THEME_URL; ?>/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo G5_THEME_URL; ?>/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="<?php echo G5_THEME_URL; ?>/js/jquery.stellar.min.js"></script>
	<!-- Counter -->
	<script src="<?php echo G5_THEME_URL; ?>/js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="<?php echo G5_THEME_URL; ?>/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo G5_THEME_URL; ?>/js/magnific-popup-options.js"></script>
	<!-- Google Map -->

		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
		<!--
	<script src="<?php echo G5_THEME_URL; ?>/js/google_map.js"></script> 
	<!-- For demo purposes only styleswitcher ( You may delete this anytime ) -->
<!--
	<script src="<?php echo G5_THEME_URL; ?>/js/jquery.style.switcher.js"></script>
	<script>
		$(function(){
			$('#colour-variations ul').styleSwitcher({
				defaultThemeId: 'theme-switch',
				hasPreview: false,
				cookie: {
		          	expires: 30,
		          	isManagingLoad: true
		      	}
			});	
			$('.option-toggle').click(function() {
				$('#colour-variations').toggleClass('sleep');
			});
		});
	</script>
-->
	<!-- End demo purposes only -->

	<!-- Main JS (Do not remove) -->
	<script src="<?php echo G5_THEME_URL; ?>/js/main.js"></script>

	</body>
</html>

<?php echo html_end(); // HTML 마지막 처리 함수 : 반드시 넣어주시기 바랍니다. ?>