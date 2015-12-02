<? $date="<span title='".date("Y년 m월 d일 D H시 i분 s초", $c_data[reg_date])."'><font class=daerew_s009900>".date("m.d. h:i", $c_data[reg_date])."</font></span>"; ?>
 <tr><td colspan=2 bgcolor=ffffff>

<table width="<?=$width?>" cellspacing="0" cellpadding="0">
 <tr><td class="bar1"></td></tr>
	 <td style='padding:10 0 10 0' onmouseover="this.style.backgroundColor='f7f7f7'" onmouseout="this.style.backgroundColor=''">
	  <table width=100% cellspacing=0 cellpadding=0 style='table-layout:fixed'>
	   <col width=110></col><col width=1></col><col width=></col>
	   <tr valign=top>
	    <td title='<?=$show_comment_ip?>' style='padding:0 10 0 10'><?=$c_face_image?> <?=$comment_name?><br></td>
	    <td class='bar2'></td>
	    <td style='word-break:break-all;padding:0 10 0 10;' valign=top ><?=str_replace("\n","<br>",$c_memo)?> <?=$date?> - <font class="daerew_s"><?=$a_del?>삭제</a></font></td>
	   </tr>
      </table>
	 </td>
 </tr>
</table>

  </td>
 </tr>