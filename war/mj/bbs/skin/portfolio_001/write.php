<table border="0" cellspacing="0" cellpadding="0" width="<?=$width?>">
 <form method=post name=write action=write_ok.php onsubmit="return check_submit();" enctype=multipart/form-data><input type=hidden name=page value=<?=$page?>><input type=hidden name=id value=<?=$id?>><input type=hidden name=no value=<?=$no?>><input type=hidden name=select_arrange value=<?=$select_arrange?>><input type=hidden name=desc value=<?=$desc?>><input type=hidden name=page_num value=<?=$page_num?>><input type=hidden name=keyword value="<?=$keyword?>"><input type=hidden name=category value="<?=$category?>"><input type=hidden name=sn value="<?=$sn?>"><input type=hidden name=ss value="<?=$ss?>"><input type=hidden name=sc value="<?=$sc?>"><input type=hidden name=mode value="<?=$mode?>">
</table>

<table border="0" cellspacing="0" cellpadding="0" class="background" style="word-break:break-all;margin:10 0 0 0" width="<?=$width?>">
 <col width="95" align=right></col><col width=></col>
 <?=$hide_start?>
 <tr><td class="daerew"><font color="000000">글작성자&nbsp;&nbsp;</font></td>
     <td class="daerew" style="padding-bottom:3"><input type=text name=name value="<?=$name?>" <?=size(15)?> maxlength=10 class="daerew_input" style=width:30%></td>
 </tr>
 <tr><td class="daerew"><font color="000000">비밀번호&nbsp;&nbsp;</font></td>
     <td class="daerew" style='padding-bottom:3'><input type=password name=password <?=size(12)?> maxlength=20 class="daerew_input" style=width:30%></td>
 </tr>
 <tr><td class="daerew">전자우편&nbsp;&nbsp;</td>
     <td class="daerew" style="padding-bottom:3"><input type=text name=email value="<?=$email?>" <?=size(67)?> maxlength=200 class="daerew_input" style=width:80%></td>
 </tr>
 <tr><td class="daerew">웹사이트&nbsp;&nbsp;</td>
     <td class="daerew" style="padding-bottom:3"><input type=text name=homepage value="<?=$homepage?>" <?=size(67)?> maxlength=200 class="daerew_input" style=width:80%></td>
 </tr>
 <?=$hide_end?>
 <tr><td class="daerew"><font color="#EF5900">제&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;목&nbsp;&nbsp;</font></td>
     <td class="daerew" style="padding-right:20;padding-bottom:3"><input type=text name=subject value="<?=$subject?>" <?=size(67)?> maxlength=200 class="daerew_input" style=width:100%></td>
 </tr>
 <tr><td class="daerew">옵&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;션&nbsp;&nbsp;</td>
     <td class="daerew_s" style="padding-bottom:3">
      <?=$category_kind?><?=$hide_notice_start?><input type=checkbox name=notice <?=$notice?> value=1> 공지<?=$hide_notice_end?>
                           <?=$hide_html_start?><input type=checkbox name=use_html <?=$use_html?> value=1> 태그사용<?=$hide_html_end?>
                                                <input type=checkbox name=reply_mail <?=$reply_mail?> value=1> 답변글메일로받기<?=$hide_secret_start?>
                                                <input type=checkbox name=is_secret <?=$secret?> value=1> 비밀글<?=$hide_secret_end?>
     </td>
 </tr>
 <tr><td class="daerew" onclick="document.write.memo.rows=document.write.memo.rows+3" style=cursor:hand title='클릭하시면 내용 쓰는 공간이 늘어납니다'>내&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;용&nbsp;&nbsp;<br><br>▼&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
     <td class="daerew" style='padding-right:20;padding-bottom:3'><textarea name=memo <?=size2(72)?> rows=15 class="daerew_textarea" style=width:100%><? $memo = str_replace( "&lt", "&amplt", $memo ); $memo = str_replace( "&lt", "&ampgt", $memo ); echo $memo; ?></textarea></td>
 </tr>
 <?=$hide_sitelink1_start?>
 <tr><td class="daerew">링크 #01&nbsp;&nbsp;</td>
     <td class="daerew" style="padding-right:20;padding-bottom:3"><input type=text name=sitelink1 value="<?=$sitelink1?>" <?=size(73)?> maxlength=200 class="daerew_input" style=width:100%></td>
 </tr>
 <?=$hide_sitelink1_end?>
 <?=$hide_sitelink2_start?>
 <tr><td class="daerew">링크 #02&nbsp;&nbsp;</td>
     <td class="daerew" style="padding-right:20;padding-bottom:3"><input type=text name=sitelink2 value="<?=$sitelink2?>" <?=size(73)?> maxlength=200 class="daerew_input" style=width:100%></td>
 </tr>
 <?=$hide_sitelink2_end?>

 <?=$hide_pds_start?>
 <tr>
  <td class="daerew" valign=top style='padding-top:3'>파일 #01&nbsp;&nbsp;</td>
  <td class="daerew" style="padding-right:20;padding-bottom:3"><input type=file name=file1 <?=size(30)?> maxlength=255 class="daerew_input" style=width:100%><?=$file_name1?></td>
 </tr>
 <tr>
  <td class="daerew" valign=top style='padding-top:3'>파일 #02&nbsp;&nbsp;</td>
  <td class="daerew" style="padding-right:20;padding-bottom:3"><input type=file name=file2 <?=size(58)?> maxlength=255 class="daerew_input" style=width:100%><?=$file_name2?></td>
 </tr>
 <?=$hide_pds_end?>
</table>
<table border="0" cellspacing="0" cellpadding="0" width="<?=$width?>">
 <tr align="center" height="35">
  <td align="left"><?=$a_preview?><img src=<?=$dir?>/images/preview.gif border=0></a> <?=$a_imagebox?><img src=<?=$dir?>/images/imagebox.gif border=0></a></td>
  <td align="right"><input accesskey="s" type=image border=0 align=absmiddle src=<?=$dir?>/images/confirm.gif> <img src=<?=$dir?>/images/back.gif align=absmiddle border=0 onclick=history.go(-1) style=cursor:hand></td>
 </tr>
</table>