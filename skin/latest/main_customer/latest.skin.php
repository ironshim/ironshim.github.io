<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
//add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$work_width="100";
$work_height="100"
?>
<div class="row">
	
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
	<div class="col-md-4">
		<div class="box-testimony">
			<blockquote class="to-animate-2">
				<p>&ldquo;<?=$list[$i]['wr_content']?>&rdquo;</p>
			</blockquote>
			<div class="author to-animate">
				<figure><img src="<?=$thumb[src]?>" alt="<?=$thumb[src]?>"></figure>
				<p>
				<?=$list[$i]['wr_subject']?> <a href="http://<?=$list[$i]['wr_link1']?>" target="_blank"><?=$list[$i]['wr_link1']?></a> <span class="subtext"><?=$list[$i]['ca_name']?></span>
				</p>
			</div>
		</div>
	</div>	
<? } ?>
</div>