<table width="<?=$width?>" cellspacing="0" cellpadding="0" style="table-layout:fixed;margin-top:10;margin-bottom:10;">
 <tr><td class="bar1"></td></tr>
 <tr><td style="padding:10 0 10 0">
	  <table width="100%" cellspacing="0" cellpadding="0" style="table-layout:fixed">
	   <form method=post name=write action=comment_ok.php onsubmit=return check_comment_submit(this)><input type=hidden name=page value=<?=$page?>><input type=hidden name=id value=<?=$id?>><input type=hidden name=no value=<?=$no?>><input type=hidden name=select_arrange value=<?=$select_arrange?>><input type=hidden name=desc value=<?=$desc?>><input type=hidden name=page_num value=<?=$page_num?>><input type=hidden name=keyword value="<?=$keyword?>"><input type=hidden name=category value="<?=$category?>"><input type=hidden name=sn value="<?=$sn?>"><input type=hidden name=ss value="<?=$ss?>"><input type=hidden name=sc value="<?=$sc?>"><input type=hidden name=mode value="<?=$mode?>">
       <col width="110"></col><col width="1"></col><col width=></col>
       <tr valign="top">
        <td>
         <table width="100%" cellspacing="0" cellpadding="0">
		  <tr><td><?if(!$member['no']){?><font class="daerew">이름 : </font><?=$c_name?>&nbsp;&nbsp;<?}?></td></tr>
		 </table>
		 <?=$hide_c_password_start?>
		 <table width="100%" cellspacing="0" cellpadding="0">
	      <tr><td><font class="daerew">암호 : </font><input type="password" name="password" <?=size(8)?> maxlength="20" class="daerew_input"></td>
		 </table>
	     <?=$hide_c_password_end?>
	    </td>
        <td class="bar2"></td>
	    <td style="padding-left:10"><textarea name="memo" cols="20" rows="10" class="daerew_textarea" style="width:100%;height:100;overflow:visible;text-overflow:ellipsis;"></textarea><br>
		                            <input type="submit" class="daerew_button2" value="짧은답글남기기" accesskey="s" style="width:100%" onfocus=blur()>
		</td>
       </tr>
       </form>
      </table>
     </td>
 </tr>
 <tr><td bgcolor="f0f0f0" height="1"></td></tr>
</table>