<form method="post" name="write" action="write_ok.php" onsubmit="return check_submit();" enctype=multipart/form-data>
<input type="hidden" name="page" value="<?=$page?>" />
<input type="hidden" name="id" value="<?=$id?>" />
<input type="hidden" name="no" value="<?=$no?>" />
<input type="hidden" name="select_arrange" value="<?=$select_arrange?>" />
<input type="hidden" name="desc" value="<?=$desc?>" />
<input type="hidden" name="page_num" value="<?=$page_num?>" />
<input type="hidden" name="keyword" value="<?=$keyword?>" />
<input type="hidden" name="category" value="<?=$category?>" />
<input type="hidden" id="sn" name="sn" value="<?=$sn?>" />
<input type="hidden" id="ss" name="ss" value="<?=$ss?>" />
<input type="hidden" id="sc" name="sc" value="<?=$sc?>" />
<input type="hidden" name="mode" value="<?=$mode?>" /> 


<table class="xeWrite_tb" width="<?=$width?>" cellSpacing="0" cellpadding="0">
<colgroup span="2"><col width="130px"></col><col></col></colgroup>
<?=$hide_start?>
	<tr>
	  <td class="xeWrite_td_L">�̸�</td>
	  <td class="xeWrite_td_R"><input type="text" name="name" value="<?=$name?>" maxlength="20" class="xeWrite_ip2" /></td>
	</tr>
	<tr>
	  <td class="xeWrite_td_L">��й�ȣ</td>
	  <td class="xeWrite_td_R"><input type="password" name="password" maxlength="20" class="xeWrite_ip2" /></td>
	</tr>
	<tr>
	  <td class="xeWrite_td_L">�̸���</td>
	  <td class="xeWrite_td_R"><input type="text" name="email" value="<?=$email?>" maxlength="200" class="xeWrite_ip1" /></td>
	</tr>
	<tr>
	  <td class="xeWrite_td_L">Ȩ������</td>
	  <td class="xeWrite_td_R"><input type="text" name="homepage" value="<?=$homepage?>" maxlength="200" class="xeWrite_ip1" /></td>
	</tr>
<?=$hide_end?>
	<tr>
		<td class="xeWrite_td_L">����</td>
		<td class="xeWrite_td_R"><?=$category_kind?> <input type="text" name="subject" value="<?=$subject?>" maxlength="200" class="xeWrite_ip1" /></td>
	</tr>

	<tr>
		<td class="xeWrite_td_L">�ɼ�</td>
		<td class="xeWrite_td_R">
			<?=$hide_notice_start?> <input type="checkbox" name="notice" <?=$notice?> value="1" /> �������� <?=$hide_notice_end?>
			<?=$hide_html_start?> <input type="checkbox" name="use_html" <?=$use_html?> value="1" /> HTML��� <?=$hide_html_end?>
			<input type="checkbox" name="reply_mail" <?=$reply_mail?> value="1" /> �亯���Ϲޱ�
			<?=$hide_secret_start?> <input type="checkbox" name="is_secret" <?=$secret?> value="1" /> ��б� <?=$hide_secret_end?>
		</td>
	</tr>

	<tr>
		<td class="xeWrite_memo" colspan="2">
		<textarea name="memo" class="xeWrite_memoT"><?=$memo?></textarea></td>
	</tr>

	<tr class="xeWrite_bttr">
		<td class="xeWrite_bttr_L"><a class="button" href="#" onclick="history.go(-1)" title="���"><span>���</span></a></td>
		<td class="xeWrite_bttr_R">
			<a class="button" href="javascript:void(0)" onclick="view_preview()" title="�̸�����"><span>�̸�����</span></a>
			<?if($member[no]&&$setup[grant_imagebox]>=$member[level]) {// �̹����ڽ�?>
			<a class="button" href="javascript:void(0)" onclick="showImageBox('<?=$id?>')" title="�̹����ڽ�"><span>�̹����ڽ�</span></a><?}?></td>
	</tr>

<?=$hide_sitelink1_start?>
	<tr>
		<td class="xeWrite_td_L">��ũ 1</td>
		<td class="xeWrite_td_R"><input type="text" name="sitelink1" value="<?=$sitelink1?>" maxlength="200" class="xeWrite_ip1" /></td>
	</tr>
<?=$hide_sitelink1_end?>
<?=$hide_sitelink2_start?>
	<tr>
		<td class="xeWrite_td_L">��ũ 2</td>
		<td class="xeWrite_td_R"><input type="text" name="sitelink2" value="<?=$sitelink2?>" maxlength="200" class="xeWrite_ip1" /></td>
	</tr>
<?=$hide_sitelink2_end?>
<?=$hide_pds_start?>
	<tr>
		<td class="xeWrite_td_L">���� 1</td>
		<td class="xeWrite_td_R"><input type="file" name="file1" maxlength="255" class="xeWrite_ip1" /><?=$file_name1?></td>
	</tr>

	<tr>
		<td class="xeWrite_td_L">���� 2</td>
		<td class="xeWrite_td_R"><input type="file" name="file2" maxlength="255" class="xeWrite_ip1" /><?=$file_name2?></td>
	</tr>
<?=$hide_pds_end?>
</table>

<div style="display:block; width:<?=$width?>; height:50px; padding:20px10px; text-align:right">
<span class="button"><input type="submit" value="�ۼ��Ϸ�" accesskey="s" title="�ۼ��Ϸ�" /></span></div>
</form>