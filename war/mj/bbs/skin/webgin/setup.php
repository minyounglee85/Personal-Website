<table width="<?=$width?>" cellSpacing="0" cellpadding="0" class="xe_setup">
<colgroup span="2"><col width="200px"></col><col></col></colgroup>
	<tr>
		<td class="xe_setupTt_L"><?if($setup[title]) {?><?=$setup[title]?><?}else{?>�Խ���<?}?>&nbsp;</td>
		<td class="xe_setupTt_R" align="right">&nbsp;
		<?php if($is_admin) { // ��� �Խ��Ǽ��� ��ư?>
		<a class="button" href="admin_setup.php?exec=view_board&no=<?=$setup[no]?>&group_no=<?=$setup[group_no]?>&exec2=modify" title="����" target="_blank"><span>�Խ��Ǽ���</span></a>
		<?}?></td>
	</tr>

	<tr>
		<td class="xe_setup_total"><img src="<?=$dir?>/images/iconArticle.gif" class="xe_setup_total_ic" title="total" alt="total" onclick="location.href='zboard.php?id=<?=$id?>'" />�ۼ� <span class="list_com_sp"><?=$total?></span></td>
		<td class="xe_setup_ct"><?=$hide_category_start?><? include "include/print_category.php"; ?><?=$hide_category_end?>&nbsp;</td>
	</tr>
</table>