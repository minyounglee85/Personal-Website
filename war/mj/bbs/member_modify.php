<?
// ���̺귯�� �Լ� ���� ��ũ���
	include "lib.php";

// DB ����
	if(!$connect) $connect=dbConn();

// ���� �Խ��� ���� �о� ����
	if($id) {
		$setup=get_table_attrib($id);

		// �������� ���� �Խ����϶� ���� ǥ��
		if(!$setup[name]) Error("�������� ���� �Խ����Դϴ�.<br><br>�Խ����� ������ ����Ͻʽÿ�","window.close");
	}

// ��� ���� ���ؿ���;;; ����� ������
	$member=member_info();

	if(!$member[no]) Error("ȸ�� ������ �������� �ʽ��ϴ�","window.close");

	$member[name] = stripslashes($member[name]);
	$member[job] = stripslashes($member[job]);
	$member[email] = stripslashes($member[email]);
	$member[homepage] = stripslashes($member[homepage]);
	$member[birth] = stripslashes($member[birth]);
	$member[hobby] = stripslashes($member[hobby]);
	$member[icq] = stripslashes($member[icq]);
	$member[msn] = stripslashes($member[msn]);
	$member[home_address] = stripslashes($member[home_address]);
	$member[home_tel] = stripslashes($member[home_tel]);
	$member[office_address] = stripslashes($member[office_address]);
	$member[office_tel] = stripslashes($member[office_tel]);
	$member[handphone] = stripslashes($member[handphone]);
	$member[comment] = stripslashes($member[comment]);


// �׷쵥��Ÿ �о����;;
	$group_data=mysql_fetch_array(mysql_query("select * from $group_table where no='$member[group_no]'"));
	$group=$group_data;
	$group_no=$group[no];

	$check[1]="checked";

	$referer=$HTTP_REFERER;

	$setup[header]="";
	$setup[footer]="";
	$setup[header_url]="";
	$setup[footer_url]="";
	$group[header]="";
	$group[footer]="";
	$group[header_url]="";
	$group[footer_url]="";
	$setup[skinname]="";

	head();

?>
<div align=center><br>

<script>
 function address_popup(num)                                                                                                      
 {                                                                                                                                
  window.open('zipcode/search_zipcode.php?num='+num,'searchaddress','width=440,height=230,scrollbars=yes');                       
 } 
 function check_submit()
 {
  if(write.password.value!=write.password1.value) {alert("�н����尡 ��ġ���� �ʽ��ϴ�.");write.password.value="";write.password1.value=""; write.password.focus(); return false;}
  if(!write.name.value) { alert("�̸��� �Է��ϼ���"); write.name.focus(); return false; }

<? 
	if($group_data[use_birth]) { 
?>

    if ( write.birth_1.value < 1000 || write.birth_1.value <= 0 )  {
         alert('������ �߸��ԷµǾ����ϴ�.');
         write.birth_1.value='';
         write.birth_1.focus();
        return false;
    }
    if ( write.birth_2.value > 12 || write.birth_2.value <= 0 ) {
         alert('������ �߸��ԷµǾ����ϴ�.');
         write.birth_2.value='';
         write.birth_2.focus();
        return false;
    }
    if ( write.birth_3.value > 31 || write.birth_3.value <= 0 )  {
         alert('������ �߸��ԷµǾ����ϴ�.');
         write.birth_3.value='';
         write.birth_3.focus();
        return false;
    }

<?
	} 
?>

  return true;
  }

</script>
<table border=0 cellspacing=1 cellpadding=0 width=540>
<form name=write method=post action=member_modify_ok.php enctype=multipart/form-data onsubmit="return check_submit();">
<input type=hidden name=one_page value="<?=$HTTP_REFERER?>">
<input type=hidden name=page value=<?=$page?>>
<input type=hidden name=id value=<?=$id?>>
<input type=hidden name=no value=<?=$no?>>
<input type=hidden name=select_arrange value=<?=$select_arrange?>>
<input type=hidden name=desc value=<?=$desc?>>
<input type=hidden name=page_num value=<?=$page_num?>>
<input type=hidden name=keyword value="<?=$keyword?>">
<input type=hidden name=category value="<?=$category?>">
<input type=hidden name=sn value="<?=$sn?>">
<input type=hidden name=ss value="<?=$ss?>">
<input type=hidden name=sc value="<?=$sc?>">
<input type=hidden name=referer value="<?=$referer?>">

  <tr><td colspan=2><img src=images/member_modify.gif></td></tr>
        <tr>
          <td colspan="5" bgcolor="#00D8FF" align="center"><img src="images/t.gif" width="10" height="3"></td>
        </tr>
  <tr height=28 align=right>
     <td width=28% style=font-family:Tahoma;font-size:8pt;><b>ID&nbsp;</td>
     <td align=left>&nbsp;<?=$member[user_id]?> &nbsp;(<?=date("Y�� m�� d�� H�� i��",$member[reg_date])?>�� ����)</td>
  </tr>
        <tr>
          <td colspan="5" bgcolor="#00D8FF" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
  <tr height=28 align=right>
     <td style=font-family:Tahoma;font-size:8pt;><b>Password&nbsp;</td>
     <td align=left>&nbsp;<input type=password name=password size=20 maxlength=20 style=border-color:#4374D9 class=input> Ȯ�� : <input type=password name=password1 size=20 maxlength=20 style=border-color:#4374D9 class=input></td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#00D8FF" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
  <tr height=28 align=right>
     <td style=font-family:Tahoma;font-size:8pt;>Level&nbsp;</td>
     <td align=left>&nbsp;<?=$member[level]?></td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#00D8FF" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
  <tr height=28 align=right>
     <td style=font-family:Tahoma;font-size:8pt;><b>Name&nbsp;</td>
     <td align=left>&nbsp;<input type=text name=name size=20 maxlength=20 value="<?=$member[name]?>" style=border-color:#4374D9 class=input></td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#00D8FF" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
<? if($group_data[use_birth]) { ?>
  <tr height=28 align=right>
     <td style=font-family:Tahoma;font-size:8pt;><b>Birthday&nbsp;</td>
     <td align=left>&nbsp;<input type=text name=birth_1 size=4 maxlength=4 value="<?=date("Y",$member[birth])?>" style=border-color:#4374D9 class=input> �� 
                    &nbsp;<input type=text name=birth_2 size=2 maxlength=2 value="<?=date("m",$member[birth])?>" style=border-color:#4374D9 class=input> ��
                    &nbsp;<input type=text name=birth_3 size=2 maxlength=2 value="<?=date("d",$member[birth])?>" style=border-color:#4374D9 class=input> �� 
          <input type=checkbox value=1 name=open_birth <?=$check[$member[open_birth]]?>> ����
  </tr>        <tr>
          <td colspan="5" bgcolor="#00D8FF" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
<? } ?>

  <tr height=28 align=right>
     <td style=font-family:Tahoma;font-size:8pt;><b>E-mail&nbsp;</td>
     <td align=left>&nbsp;<input type=text name=email size=40 maxlength=255 value="<?=$member[email]?>" style=border-color:#4374D9 class=input>
                          <input type=checkbox value=1 name=open_email <?=$check[$member[open_email]]?>> ����
                          </td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#00D8FF" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
  <tr height=28 align=right>
     <td style=font-family:Tahoma;font-size:8pt;>Homepage&nbsp;</td>
     <td align=left>&nbsp;<input type=text name=homepage size=40 maxlength=255 value="<?=$member[homepage]?>" style=border-color:#4374D9 class=input>
                          <input type=checkbox value=1 name=open_homepage <?=$check[$member[open_homepage]]?>> ����</td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#00D8FF" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>

<? if($group_data[use_icq]) { ?>
  <tr height=28 align=right>
     <td style=font-family:Tahoma;font-size:8pt;>ICQ&nbsp;</td>
     <td align=left>&nbsp;<input type=text name=icq size=20 maxlength=20 value="<?=$member[icq]?>" style=border-color:#4374D9 class=input>
                          <input type=checkbox value=1 name=open_icq <?=$check[$member[open_icq]]?>> ����</td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#00D8FF" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
<? } ?>

<? if($group_data[use_aol]) { ?>
  <tr height=28 align=right>
     <td style=font-family:Tahoma;font-size:8pt;>AIM&nbsp;</td>
     <td align=left>&nbsp;<input type=text name=aol size=20 maxlength=30 value="<?=$member[aol]?>" style=border-color:#4374D9 class=input>
                          <input type=checkbox value=1 name=open_aol <?=$check[$member[open_aol]]?>> ����</td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#00D8FF" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
<? } ?>

<? if($group_data[use_msn]) { ?>
  <tr height=28 align=right>
     <td style=font-family:Tahoma;font-size:8pt;>MSN&nbsp;</td>
     <td align=left>&nbsp;<input type=text name=msn size=20 maxlength=250 value="<?=$member[msn]?>" style=border-color:#4374D9 class=input>
                          <input type=checkbox value=1 name=open_msn <?=$check[$member[open_msn]]?>> ����</td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#00D8FF" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
<? } ?>

<? if($group_data[use_hobby]) { ?>
  <tr height=28 align=right>
     <td style=font-family:Tahoma;font-size:8pt;>Hobby&nbsp;</td>
     <td align=left>&nbsp;<input type=text name=hobby size=40 maxlength=40 value="<?=$member[hobby]?>" style=border-color:#4374D9 class=input>
                          <input type=checkbox value=1 name=open_hobby <?=$check[$member[open_hobby]]?>> ����</td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#00D8FF" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
<? } ?>

<? if($group_data[use_job]) { ?>
  <tr height=28 align=right>
     <td style=font-family:Tahoma;font-size:8pt;>Occupation(Job)&nbsp;</td>
     <td align=left>&nbsp;<input type=text name=job size=20 maxlength=20 value="<?=$member[job]?>" style=border-color:#4374D9 class=input>
                          <input type=checkbox value=1 name=open_job <?=$check[$member[open_job]]?>> ����</td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#00D8FF" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
<? } ?>

<? if($group_data[use_home_address]) { ?> 
  <tr height=28 align=right>
     <td style=font-family:Tahoma;font-size:8pt;>Home Address&nbsp;</td>
     <td align=left>&nbsp;<input type=text name=home_address size=40 maxlength=255 value="<?=$member[home_address]?>" style=border-color:#4374D9 class=input><input type=button value='�˻�' class=input style=border-color:#4374D9 onclick=address_popup(1)>
                          <input type=checkbox value=1 name=open_home_address <?=$check[$member[open_home_address]]?>> ����</td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#00D8FF" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
<? } ?>

<? if($group_data[use_home_tel]) { ?>
  <tr height=28 align=right>
     <td style=font-family:Tahoma;font-size:8pt;>Home Phone&nbsp;</td>
     <td align=left>&nbsp;<input type=text name=home_tel size=20 maxlength=20 value="<?=$member[home_tel]?>" style=border-color:#4374D9 class=input>
                          <input type=checkbox value=1 name=open_home_tel <?=$check[$member[open_home_tel]]?>> ����</td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#00D8FF" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
<? } ?>

<? if($group_data[use_office_address]) { ?>
  <tr height=28 align=right>
     <td style=font-family:Tahoma;font-size:8pt;>Office Address&nbsp;</td>
     <td align=left>&nbsp;<input type=text name=office_address size=40 maxlength=255 value="<?=$member[office_address]?>" style=border-color:#4374D9 class=input><input type=button value='�˻�' class=input style=border-color:#4374D9 onclick=address_popup(2)>
                          <input type=checkbox value=1 name=open_office_address <?=$check[$member[open_office_address]]?>> ����</td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#00D8FF" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
<? } ?>

<? if($group_data[use_office_tel]) { ?>
  <tr height=28 align=right>
     <td style=font-family:Tahoma;font-size:8pt;>Office Phone&nbsp;</td>
     <td align=left>&nbsp;<input type=text name=office_tel size=20 maxlength=20 value="<?=$member[office_tel]?>" style=border-color:#4374D9 class=input>
                          <input type=checkbox value=1 name=open_office_tel <?=$check[$member[open_office_tel]]?>> ����</td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#00D8FF" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
<? } ?>

<? if($group_data[use_handphone]) { ?>
  <tr height=28 align=right>
     <td style=font-family:Tahoma;font-size:8pt;>Cellular&nbsp;</td>
     <td align=left>&nbsp;<input type=text name=handphone size=20 maxlength=20 value="<?=$member[handphone]?>" style=border-color:#4374D9 class=input>
                          <input type=checkbox value=1 name=open_handphone <?=$check[$member[open_handphone]]?>> ����</td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#00D8FF" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
<? } ?>

<? if($group_data[use_mailing]) { ?>
  <tr height=28 align=right>
     <td style=font-family:Tahoma;font-size:8pt;><b>Mailling List</td>
     <td align=left>&nbsp;<input type=checkbox name=mailing value=1 <?=$check[$member[mailing]]?>> ���ϸ� ����</td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#00D8FF" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
<? } ?>

  <tr height=28 align=right>
     <td style=font-family:Tahoma;font-size:8pt;><b>Disclose Info</td>
     <td align=left>&nbsp;<input type=checkbox name=openinfo value=1 <?=$check[$member[openinfo]]?>> ���� ����</td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#00D8FF" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>

<? if($group_data[use_picture]) { ?>
  <tr height=28 align=right>
     <td style=font-family:Tahoma;font-size:8pt;>Photo</td>
     <td align=left>&nbsp;<input type=file name=picture size=34 maxlength=255 style=border-color:#4374D9 class=input>
                 <? if($member[picture]) echo"<br>&nbsp;<img src='$member[picture]' border=0> <input type=checkbox name=del_picture value=1> ����"; ?>
                          <input type=checkbox value=1 name=open_picture <?=$check[$member[open_picture]]?>> ����
                          
     </td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#00D8FF" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
<? } ?>

<? if($group_data[use_comment]) { ?>
  <tr height=28 align=right>
     <td style=font-family:Tahoma;font-size:8pt;>Comments</td>
     <td align=left>&nbsp;<textarea cols=40 rows=4 name=comment style=border-color:#4374D9 class=textarea><?=$member[comment]?></textarea><br>&nbsp;
                          <input type=checkbox value=1 name=open_comment <?=$check[$member[open_comment]]?>> ����</td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#00D8FF" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
<? } ?>

  <tr height=28 align=right>
     <td style=font-family:Tahoma;font-size:8pt;>Point</td>
     <td align=left>&nbsp;<?=($member[point1]*10+$member[point2])?> �� ( �ۼ��ۼ� : <?=$member[point1]?>, �ڸ�Ʈ : <?=$member[point2]?> )</td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#00D8FF" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
<tr height=30 bgcolor=#ffffff>
   <td align=center><? if($member[no]>1) {?><a href=member_out.php?id=<?=$id?>&group_no=<?=$group_no?> onclick="return confirm('Ż���Ͻðڽ��ϱ�?\n\nŻ�� �Ͻø� ��� ������ DB���� ������ϴ�.\n\nŻ���� ������ �� ���԰����մϴ�\n')"><img src=images/button_out.gif border=0 alt="ȸ��Ż��"></a><?}?></td>
   <td align=right ><img src=images/t.gif height=5><br>
   <input type=image border=0 src=images/button_modify.gif> &nbsp;
   <img src=images/memo_close.gif border=0 onClick=window.close() style=cursor:hand>&nbsp;&nbsp;&nbsp;
   </td>
</tr>
  </form>
</table>

<?
	@mysql_close($connect);
	foot();
?>