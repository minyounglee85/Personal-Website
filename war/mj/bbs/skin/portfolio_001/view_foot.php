<?=$hide_prev_start?>
<table border="0" width="<?=$width?>" cellspacing="0" cellpadding="0">
 <tr height="25"><td class="daerew_b" width="60" nowrap> 이전글 | </td>
               <td class="daerew" width="100%" nowrap><?=$a_prev?><?=$prev_subject?></a></td>
               <td class="daerew" style="word-break:break-all" nowrap><?=$prev_face_image?> <?=$prev_name?></td>
               <td class="daerew" style="word-break:break-all" nowrap>&nbsp;&nbsp<?=$prev_reg_date?></td>
 </tr>
 <tr><td colspan="4" bgcolor="e5e5e5"  height="1"></td></tr>
</table>
<?=$hide_prev_end?>
<?=$hide_next_start?>
<table border="0" width="<?=$width?>" cellspacing="0" cellpadding="0">
 <tr height="25"><td class="daerew_b" width="60" nowrap> 다음글 | </td>
               <td class="daerew" width="100%" align="left"> <?=$a_next?><?=$next_subject?></a></td>
               <td class="daerew" style="word-break:break-all" nowrap><?=$next_face_image?> <?=$next_name?></td>
               <td class="daerew" style="word-break:break-all" nowrap>&nbsp;&nbsp<?=$next_reg_date?></td>
 </tr>
 <tr><td colspan="4" bgcolor="e5e5e5"  height="1"></td></tr>
</table>
<?=$hide_next_end?>

<!-- 버튼 관련 출력 -->
<table border="0" cellspacing="0" cellpadding="0" width="<?=$width?>" style="margin-top:10;">
 <tr><td><?=$a_list?><img src=<?=$dir?>/images/list.gif border=0 align=absmiddle></a> <?=$a_modify?><img src=<?=$dir?>/images/modify.gif border=0 align=absmiddle></a> <?=$a_delete?><img src=<?=$dir?>/images/delete.gif border=0 align=absmiddle></a></td>
     <td align="right"><?=$a_reply?><img src=<?=$dir?>/images/reply.gif border=0 align=absmiddle></a> <?=$a_write?><img src=<?=$dir?>/images/write.gif border=0 align=absmiddle></a></td>
 </tr>
</table>
<br>