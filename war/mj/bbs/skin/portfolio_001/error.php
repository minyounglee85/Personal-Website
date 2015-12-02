<br><br><br>
<div align="center">
 <table border="0" cellpadding="0" cellspacing="0" width="300">
  <tr><td height="30" class="daerew_b">오류안내</td></tr>
  <tr><td bgcolor="cccccc" style="padding-bottom:2;" height="2"></td></tr>
  <tr><td align="center" height="30"><br><? echo $message;?><br><br><? if(!$url) { ?><img src=<?=$dir?>/images/back.gif align=absmiddle border=0 onclick=history.go(-1) style=cursor:hand> <? } else { ?> <div align=center><input type=button value='   Move   ' onclick=location.href="<?echo $url;?>" class=daerew_submit><? } ?><br><br></td></tr>
  <tr><td bgcolor="cccccc" height="2" style="padding-top:2;"></td></tr>
 </table>
</div>
<br><br>