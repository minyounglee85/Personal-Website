<table border="0" cellspacing="0" cellpadding="0" width="<?=$width?>">
</table>

<table border="0" cellspacing="0" cellpadding="0" width="<?=$width?>">
 <tr><td nowrap class="view-top">글작성자</td>
     <td nowrap></td>
     <td width="100%" class="view-bg">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
       <tr><td class="daerew" width="100%">&nbsp;<?=$face_image?><?=$name?></td>
           <td class="daerew_s" nowrap><?=$hide_homepage_start?><?=$a_homepage?><img src=<?=$dir?>/icon_home.gif border=0 align=absmiddle title='작성자의 웹사이트'></a><?=$hide_homepage_end?> <?=$date?> | 조회 : <?=$hit?></td>
       </tr>
      </table>
     </td>
 </tr>
 <tr><td colspan="3" width="1" height="1" bgcolor="white"></td></tr>

 <tr><td nowrap class="view-top"><font color="#EF5900">제&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;목</font></td>
     <td colspan="2" class="view-bg" style="word-break:break-all">&nbsp;<font color="#EF5900"><?=$subject?></font></td>
 </tr>
 <tr><td colspan="3" width="1" height="1" bgcolor="white"></td></tr>
 <?=$hide_sitelink1_start?>
 <tr><td nowrap class="view-top">관련링크</td>
     <td colspan="2" class="view-bg" style="word-break:break-all">&nbsp;<?=$sitelink1?></td>
 </tr>
 <tr><td colspan="3" width="1" height="1" bgcolor="white"></td></tr>
 <?=$hide_sitelink1_end?>
 <?=$hide_sitelink2_start?>
 <tr><td nowrap class="view-top">관련링크</td>
     <td colspan="2" class="view-bg" style="word-break:break-all">&nbsp;<?=$sitelink2?></td>
 </tr>
 <tr><td colspan="3" width="1" height="1" bgcolor="white"></td></tr>
 <?=$hide_sitelink2_end?>
 <?=$hide_download1_start?>
 <tr><td nowrap class="view-top">첨부파일</td>
     <td colspan="2" class="view-bg" style="word-break:break-all">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
       <tr><td class="daerew_s" width="100%">&nbsp;<?=$a_file_link1?><img src=<?=$dir?>/icon_file.gif border=0 align=absmiddle> <?=$file_name1?></a> (<?=$file_size1?>)</td>
           <td class="daerew_s" align="right" nowrap> Download : <?=$file_download1?></td>
       </tr>
      </table>
     </td>
 </tr>
 <tr><td colspan="3" width="1" height="1" bgcolor="white"></td></tr>
 <?=$hide_download1_end?>
 <?=$hide_download2_start?>
 <tr><td nowrap class="view-top">첨부파일</td>
     <td colspan="2" class="view-bg" style="word-break:break-all">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
       <tr><td class="daerew_s" width="100%">&nbsp;<?=$a_file_link2?><img src=<?=$dir?>/icon_file.gif border=0 align=absmiddle> <?=$file_name2?></a> (<?=$file_size2?>)</td>
           <td class="daerew_s" align="right" nowrap> Download : <?=$file_download2?></td>
    </tr>
   </table>
  </td>
 </tr>
 <tr><td colspan="3" width="1" height="1" bgcolor="white"></td></tr>
 <?=$hide_download2_end?>
</table>
<table border="0" cellspacing="0" cellpadding="0" style="table-layout:fixed" width="<?=$width?>">
 <tr><td align="right" style="padding:5 5 0 0">
      <table border="0" cellpadding="0" cellspacing="0" width="100%">
       <tr><td align="right" valign="top" width="100%" class="daerew_s"><?=$ip?><img src="images/t.gif" width="10" height="10"></td>
           <td nowrap><?=$a_modify?><img src=<?=$dir?>/images/modify.gif border=0></a> <?=$a_delete?><img src=<?=$dir?>/images/delete.gif border=0></a></td>
       </tr>
      </table>
     </td>
 </tr>
 <tr><td style='word-break:break-all;padding:7px;'>
      <?=$upload_image1?>
      <?=$upload_image2?>
      <?=$memo?>
     </td>
 </tr>
</table>
<!-- 간단한 답글 시작하는 부분 -->
<?=$hide_comment_start?>
<table border="0" cellspacing="0" cellpadding="0" width="<?=$width?>">
<?=$hide_comment_end?>