<center>
<p>&nbsp;</p>
<form>
<style type="text/css"  media="all">
.askTb {background-color:#fff; table-layout: fixed; border:1px solid #E0E1DB}
.askTitle {background-color:#fbfbfb; font:bold 12px ����; color:#FF6600; text-align:center; padding:10px}
.askPass {font:12px ����; color:#333; text-align:right; padding:10px;}
.askBtn {font:bold 12px ����; color:#333; text-align:center; padding:10px}

.askPass input {
	background-color:#FBFBFB; width:150px; height:22px; font:12px ����; color:#333;
	border-top:1px solid #A6A6A6;
	border-right:1px solid #D8D8D8;
	border-bottom:1px solid #D8D8D8;
	border-left:1px solid #A6A6A6;
	margin-right:10px; padding:3px 0 0 3px
}
</style>
<table width="300px" cellSpacing="0" cellpadding="0" border="0" class="askTb">
	<tr>
		<td class="askTitle"><?echo $message;?></td>
	</tr>
	<?if(!$url) {?>
	<tr>
		<td class="askBtn"><a class="button" href="#" onclick="history.go(-1); return false;" title="�ڷ�"><span>�ڷ�</span></a></td>
	</tr>
	<?}else{?>
	<tr>
		<td class="askTitle"><a class="button" href="#" onclick="location.href='<?echo $url;?>'" title="�̵�"><span>�̵�</span></a></td>
	</tr>
	<?}?>
</table>

</form>
</center>
