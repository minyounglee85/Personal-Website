<?
$img_name   = "$dir/no_screenshot.jpg";
if($data[file_name1])
  { $img_name = $data[file_name1];
    $temp = @GetImageSize($img_name); // ȭ�鿡 ǥ���� �׸����� ũ�� ���� ���
    if($temp[0] > $bbs_height ) { // ������ �Խ��� ����ũ�⺸�� Ŭ���
    $ratio = $bbs_height/$temp[1]; // �Խ��� height�� ���� �׸������� height ���� ���.
    $img_width = $temp[1]*$ratio; // �׸������� width�� height�� ���� ratio ����.
    $img_height = $temp[1]*$ratio;
                                }
  else { $img_width = $temp[0]; // ������ ũ�⺸�� ������� ���������� ���
         $img_height = $temp[1];
       }
  }

if($setup[use_alllist]) $view_file="zboard.php"; else $view_file="view.php";
$sa1 = "<a href=\"".$view_file."?$href$sort&no=$data[no]\">";
$daerew_sub = "$data[subject]";
$daerew_sub = "$sa1<font class=daerew_sub>$data[subject]</font>$a2";
$imgTwidth=170;	//��� �ϳ���  �� ����
$img_width = 150; // �� ���� width
$img_height = 150; // �� ���� height
$view_img="<a href='javascript:void(0)'  onclick=\"window.open('$dir/show_pic.php?file=$data[file_name1]','img','left=10,top=10,width=$temp[0],height=$temp[1],scrollbar=no,status=no')\">";

?>

<table border="0" cellspacing="0" cellpadding="0" width="<?=$width?>" style="table-layout:fixed;padding:5 0 5 0;margin:5 0 5 0">
 <tr><td align="left" valign="top" width="<?=$imgTwidth?>"><?=$view_img?><img src="<?=$img_name?>" width="<?=$img_width?>" height="<?=$img_height?>"></td>
     <td valign="top">
      <table border="0" cellspacing="0" cellpadding="0" width="100%" style="table-layout:fixed">
       <tr>
        <td align="left" valign="top" height="24" width="100%" class="daerew" style="border-bottom-width:1; border-bottom-color:#F4F4F4; border-bottom-style:solid;"><?=$hide_category_start?><font class="daerew_s">[<?=$category_name?>] </font><?=$hide_category_end?><?=$daerew_sub?>
        <td align="right" valign="top" height="24" width="75" class="daerew_s" style="border-bottom-width:1; border-bottom-color:#F4F4F4; border-bottom-style:solid;">&nbsp;<?=$a_modify?>����</a> <?=$a_delete?>����</a><?=$hide_cart_start?><input type=checkbox name=cart value="<?=$data[no]?>"><?=$hide_cart_end?></td>
       </tr>
       <tr><td valign="top" align="left" height="100%" colspan="2" class="daerew" style="padding:5 0 0 0"><?if($sitelink1) { ?><img src=<?=$dir?>/images/go_site.gif border=0 align=absmiddle> <font class="daerew_verdana"><?=$sitelink1?></font><br><img src=<?=$dir?>/images/t.gif height="3"><br><? } ?><?=$memo?></td></tr>
      </table>
     </td>
 </tr>
</table>
<table border="0" cellspacing="0" cellpadding="0" width="<?=$width?>">
 <tr><td align="left" valign="top" class="bar1"></td></tr>
</table>