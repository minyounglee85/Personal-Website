<?
$img_name   = "$dir/no_screenshot.jpg";
if($data[file_name1])
  { $img_name = $data[file_name1];
    $temp = @GetImageSize($img_name); // 화면에 표시할 그림파일 크기 정보 얻고
    if($temp[0] > $bbs_height ) { // 지정된 게시판 가로크기보다 클경우
    $ratio = $bbs_height/$temp[1]; // 게시판 height에 대한 그림파일의 height 비율 계산.
    $img_width = $temp[1]*$ratio; // 그림파일의 width와 height에 동일 ratio 적용.
    $img_height = $temp[1]*$ratio;
                                }
  else { $img_width = $temp[0]; // 지정된 크기보다 작을경우 원사이즈대로 출력
         $img_height = $temp[1];
       }
  }

if($setup[use_alllist]) $view_file="zboard.php"; else $view_file="view.php";
$sa1 = "<a href=\"".$view_file."?$href$sort&no=$data[no]\">";
$daerew_sub = "$data[subject]";
$daerew_sub = "$sa1<font class=daerew_sub>$data[subject]</font>$a2";
$imgTwidth=170;	//목록 하나의  폭 제한
$img_width = 150; // 위 파일 width
$img_height = 150; // 위 파일 height
$view_img="<a href='javascript:void(0)'  onclick=\"window.open('$dir/show_pic.php?file=$data[file_name1]','img','left=10,top=10,width=$temp[0],height=$temp[1],scrollbar=no,status=no')\">";

?>

<table border="0" cellspacing="0" cellpadding="0" width="<?=$width?>" style="table-layout:fixed;padding:5 0 5 0;margin:5 0 5 0">
 <tr><td align="left" valign="top" width="<?=$imgTwidth?>"><?=$view_img?><img src="<?=$img_name?>" width="<?=$img_width?>" height="<?=$img_height?>"></td>
     <td valign="top">
      <table border="0" cellspacing="0" cellpadding="0" width="100%" style="table-layout:fixed">
       <tr>
        <td align="left" valign="top" height="24" width="100%" class="daerew" style="border-bottom-width:1; border-bottom-color:#F4F4F4; border-bottom-style:solid;"><?=$hide_category_start?><font class="daerew_s">[<?=$category_name?>] </font><?=$hide_category_end?><?=$daerew_sub?>
        <td align="right" valign="top" height="24" width="75" class="daerew_s" style="border-bottom-width:1; border-bottom-color:#F4F4F4; border-bottom-style:solid;">&nbsp;<?=$a_modify?>수정</a> <?=$a_delete?>삭제</a><?=$hide_cart_start?><input type=checkbox name=cart value="<?=$data[no]?>"><?=$hide_cart_end?></td>
       </tr>
       <tr><td valign="top" align="left" height="100%" colspan="2" class="daerew" style="padding:5 0 0 0"><?if($sitelink1) { ?><img src=<?=$dir?>/images/go_site.gif border=0 align=absmiddle> <font class="daerew_verdana"><?=$sitelink1?></font><br><img src=<?=$dir?>/images/t.gif height="3"><br><? } ?><?=$memo?></td></tr>
      </table>
     </td>
 </tr>
</table>
<table border="0" cellspacing="0" cellpadding="0" width="<?=$width?>">
 <tr><td align="left" valign="top" class="bar1"></td></tr>
</table>