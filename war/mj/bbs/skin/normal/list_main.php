<?
if($number%2) {
	$listBg="class=\"ctl_list1\"";
}else{
	$listBg="class=\"ctl_list2\"";
}

// �ڸ�Ʈ ������ [ ] ���ְ�
$comment_num = str_replace("[","",$comment_num); 
$comment_num = str_replace("]","",$comment_num); 

// �ڸ�Ʈ ��ǳ���̹��� ó��
if($comment_num){
$com_img = "<img src=\"$dir/images/iconReply.gif\" class=\"list_com_icon\" title=\"����\" alt=\"����\" />";
}else{
$com_img = "";}

// ���� �ö�±� ǥ��
if((date("d", $data[reg_date]) == date("d", time())) && (time()-$data[reg_date] < 86400)) {
	$nIcon="<img src=\"$dir/images/new.gif\" class=\"list_n_icon\" title=\"���� ��ϵ� ��\" alt=\"���� ��ϵ� ��\" />";
} else {
	$nIcon="";
}

// ���ε��� ������ �̹���(Ȯ���� �˻�)�϶� ����Ʈ�� ����ϱ�
 if(eregi("\.gif|\.png|\.bmp|\.jpg",$data[file_name1]) || eregi("\.gif|\.png|\.bmp|\.jpg",$data[file_name2])) { 
		$list_image1 = "<img src=\"$dir/images/file_image.gif\" style=\"width:14px; height:13px; vertical-align:middle\" title=\"�̹���\" alt=\"�̹���\" /></a>";
		}
		else{
		$list_image1 = "";
		}
?>

	<tr <?=$listBg?>>
	<td class="ctl_nb"><?=$hide_cart_start?><input type="checkbox" name="cart" value="<?=$data[no]?>" /><?=$hide_cart_end?><?=$number?></td>
	<td class="ctl_sj"><?=$hide_category_start?><strong><?=$category_name?></strong> <?=$hide_category_end?><?=$insert?><?=$icon?><?=$subject?> <?=$com_img?><span class="list_com_sp"><?=$comment_num?></span> <?=$list_image1?><?=$nIcon?></td>
	<td class="ctl_name"><?=$name?></td>
	<td class="ctl_hit"><?=$hit?></td>
	<td class="ctl_date"><?=$date=date("n/d, g:i a",$data[reg_date])?></td>
	</tr>