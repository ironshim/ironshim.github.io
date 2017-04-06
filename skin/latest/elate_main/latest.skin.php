<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
//add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$work_width="400";
$work_height="300"
?>
<div class="row row-bottom-padded-sm">
	
<?php 
	for ($i=0; $i<count($list); $i++) {  
		$o_sql = " select bf_file, bf_content from {$g5['board_file_table']}
            where bo_table = '$bo_table' and wr_id = '{$list[$i]['wr_id']}' and bf_type between '1' and '3' order by bf_no limit 0, 1 ";
		$o_row = sql_fetch($o_sql);
		 if($o_row['bf_file']) {
			$filename = $o_row['bf_file'];
			$ori = G5_DATA_URL.'/file/'.$bo_table.'/'.$filename;
		 }
        $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $work_width, $work_height);
?>
	<div class="col-md-4 col-sm-6 col-xxs-12">
		<a href="<?=$ori?>" class="fh5co-project-item image-popup to-animate">
			<img src="<?=$thumb[src]?>" alt="<?=$thumb['alt']?>" class="img-responsive">
			<div class="fh5co-text">
			<h2><?=$list[$i]['subject']?></h2>
			<span><?=$list[$i]['ca_name']?></span>
			</div>
		</a>
	</div>
<? } ?>
</div>