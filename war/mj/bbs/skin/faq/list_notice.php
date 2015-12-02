<?
// 코멘트 개수의 [ ] 없애고
$comment_num = str_replace("[","",$comment_num); 
$comment_num = str_replace("]","",$comment_num); 

// 코멘트 말풍선 처리
if($comment_num){
$com_img = "<img src=\"$dir/images/iconReply.gif\" class=\"list_com_icon\" title=\"덧글\" alt=\"덧글\" />";
}else{
$com_img = "";}

// 업로드 파일 검사
 if(eregi("\.gif|\.png|\.bmp|\.jpg",$data[file_name1])) { 
$list_image1 = "<img src=\"$dir/images/file_image.gif\" style=\"width:14px; height:13px; vertical-align:middle\" title=\"이미지\" alt=\"이미지\" /></a>";
$list_imgss = "<img src=\"$data[file_name1]\" style=\"width:100px; height:100px; border:1px solid #E0E1DB; cursor:pointer\" onclick=\"location.href='view.php?$href$sort&no=$data[no]'\" title=\"이미지\" alt=\"이미지\" /></a>";

}else{
$list_image1 = "";
$list_imgss = "<img src=\"$dir/images/no_image.gif\" style=\"width:100px; height:100px; border:1px solid #E0E1DB; cursor:pointer\" onclick=\"location.href='view.php?$href$sort&no=$data[no]'\" title=\"이미지\" alt=\"이미지\" /></a>";
}


 if(eregi("\.gif|\.png|\.bmp|\.jpg",$data[file_name2])) { 
$list_image2 = "<img src=\"$dir/images/file_image.gif\" style=\"width:14px; height:13px; vertical-align:middle\" title=\"이미지\" alt=\"이미지\" /></a>";
}else{
$list_image2 = "";
}

$memomax=200; // 메모의 내용을 자르고
$list_memos = cut_str(strip_tags(stripslashes($data['memo'])), $memomax);

$memo = str_replace("<table border=0 cellspacing=0 cellpadding=0 width=100% style=\"table-layout:fixed;\"><col width=100%></col><tr><td valign=top>","<table border=0 cellspacing=0 cellpadding=0 width=100% style=\"table-layout:fixed;\"><col width=100%></col><tr><td class=\"xe_listMemo\">",$memo);?>

	<tr <?=$listBg?>>
	<td class="ctl_nbN"><?=$hide_cart_start?><input type="checkbox" name="cart" value="<?=$data[no]?>" /><?=$hide_cart_end?>공지</td>
	<td class="ctl_sj">
	<img src="<?=$dir?>/images/list_faq_icon.gif" class="list_FAQ_icon" title="FAQ" alt="FAQ" />
	<?=$hide_category_start?><strong><?=$category_name?></strong> <?=$hide_category_end?><?=$insert?><?=$icon?><span onclick="On_sj('menu2sup<?=$data[no]?>','menu2'); SelectIcon(this)" class="mainnav_sp"><?=$data[subject]?></span> <?=$com_img?><span class="list_com_sp"><?=$comment_num?></span> <?=$list_image1?><?=$list_image2?><?=$nIcon?> 
	<?=$a_modify?><img src="<?=$dir?>/images/list_modify.gif" class="list_DM_btn" title="수정" alt="수정" /></a>
	<?=$a_delete?><img src="<?=$dir?>/images/list_del.gif" class="list_DM_btn" title="삭제" alt="삭제" /></a></td>
	<td class="ctl_date"><?=$date=date("n/d, g:i a",$data[reg_date])?></td>
	</tr>
	<tr>
		<td colspan="3" style="background-color:#FDFFF6;"><div id="menu2sup<?=$data[no]?>" class="optionsmenu2" style="display: none; padding:10px"><?=$memo?></div></td>
	</tr>