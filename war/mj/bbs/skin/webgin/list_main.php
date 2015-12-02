<?
if($number%2) {
	$listBg="class=\"ctl_list1\"";
}else{
	$listBg="class=\"ctl_list2\"";
}

// 코멘트 개수의 [ ] 없애고
$comment_num = str_replace("[","",$comment_num); 
$comment_num = str_replace("]","",$comment_num); 

// 코멘트 말풍선이미지 처리
if($comment_num){
$com_img = "<img src=\"$dir/images/iconReply.gif\" class=\"list_com_icon\" title=\"덧글\" alt=\"덧글\" />";
}else{
$com_img = "";}

// 오늘 올라온글 표시
if((date("d", $data[reg_date]) == date("d", time())) && (time()-$data[reg_date] < 86400)) {
	$nIcon="<img src=\"$dir/images/new.gif\" class=\"list_n_icon\" title=\"오늘 등록된 글\" alt=\"오늘 등록된 글\" />";
} else {
	$nIcon="";
}

// 업로드 파일 검사
 if(eregi("\.gif|\.png|\.bmp|\.jpg",$data[file_name1])) { 
$list_image1 = "<img src=\"$dir/images/file_image.gif\" style=\"width:14px; height:13px; vertical-align:middle\" title=\"이미지\" alt=\"이미지\" /></a>";
$list_imgss = "<img src=\"$data[file_name1]\" style=\"width:100px; height:100px; border:1px solid #E0E1DB; cursor:pointer\" onload=\"changeopacity(this,100)\" onmouseover=\"changeopacity(this,50)\" onmouseout=\"changeopacity(this,100)\" onclick=\"location.href='view.php?$href$sort&no=$data[no]'\" title=\"이미지\" alt=\"이미지\" /></a>";

}else{
$list_image1 = "";
$list_imgss = "<img src=\"$dir/images/no_image.gif\" style=\"width:100px; height:100px; border:1px solid #E0E1DB; cursor:pointer\" onload=\"changeopacity(this,100)\" onmouseover=\"changeopacity(this,50)\" onmouseout=\"changeopacity(this,100)\" onclick=\"location.href='view.php?$href$sort&no=$data[no]'\" title=\"이미지\" alt=\"이미지\" /></a>";
}


 if(eregi("\.gif|\.png|\.bmp|\.jpg",$data[file_name2])) { 
$list_image2 = "<img src=\"$dir/images/file_image.gif\" style=\"width:14px; height:13px; vertical-align:middle\" title=\"이미지\" alt=\"이미지\" /></a>";
}else{
$list_image2 = "";
}

$memomax=200; // 메모의 내용을 자르고
$list_memos = cut_str(strip_tags(stripslashes($data['memo'])), $memomax);

?>

	<tr <?=$listBg?>>
	<td class="ctl_nb"><?=$hide_cart_start?><input type="checkbox" name="cart" value="<?=$data[no]?>" /><?=$hide_cart_end?><?=$number?></td>
	<td class="ctl_ss"><?=$list_imgss?></td>
	<td colspan="4" valign="top">
		<table width="100%" cellSpacing="0" cellpadding="0" border="0" style="table-layout: fixed">
		<colgroup span="4">
		<col></col>
		<col width="120px"></col>
		<col width="70px"></col>
		<col width="95px"></col>
		</colgroup>
		<tr>
			<td class="ctl_sj"><?=$hide_category_start?><strong><?=$category_name?></strong> <?=$hide_category_end?><?=$insert?><?=$icon?><?=$subject?> <?=$com_img?><span class="list_com_sp"><?=$comment_num?></span> <?=$list_image1?><?=$list_image2?><?=$nIcon?></td>
			<td class="ctl_name"><?=$name?></td>
			<td class="ctl_hit"><?=$hit?></td>
			<td class="ctl_date"><?=$date=date("n/d, g:i a",$data[reg_date])?></td>
		</tr>
		<tr>
			<td colspan="4" style="font:12px 굴림; color:#666; padding:10px 3px 0 10px"><?=$list_memos?></td>
		</tr>
		</table>
	</td>
	</tr>
	<tr><td colspan="6" style="background-color:#EFF0ED; height:1px"></td></tr>