<?
// �ڸ�Ʈ ������ [ ] ���ְ�
$comment_num = str_replace("[","",$comment_num); 
$comment_num = str_replace("]","",$comment_num); 

// �ڸ�Ʈ ��ǳ�� ó��
if($comment_num){
$com_img = "<img src=\"$dir/images/iconReply.gif\" class=\"list_com_icon\" title=\"����\" alt=\"����\" />";
}else{
$com_img = "";}
?>

	<tr class="ctl_listN">
	<td class="ctl_nbN">����</td>
	<td class="ctl_sj"><?=$insert?><?=$subject?> <?=$com_img?><span class="list_com_sp"><?=$comment_num?></span></td>
	<td class="ctl_name"><?=$name?></td>
	<td class="ctl_hit"><?=$hit?></td>
	<td class="ctl_date"><?=$date=date("n/d, g:i a",$data[reg_date])?></td>
	</tr>