<?
// ���̺귯�� �Լ� ���� ��ũ���
	include "lib.php";

// DB ����
	if(!$connect) $connect=dbConn();

// �׷� ��ȣ üũ
	if(!$group_no) {
		$tmpResult = mysql_fetch_array(mysql_query("select * from $group_table order by no limit 1"));
		$group_no = $tmpResult[no];
	}

// ��� ���� ���ؿ���;;; ����� ������
	$member=member_info();

	if($mode=="admin"&&($member[is_admin]==1||($member[is_admin]==2&&$member[group_no]==$group_no))) $mode = "admin";
	else $mode = "";

	if($member[no]&&!$mode) Error("�̹� ������ �Ǿ� �ֽ��ϴ�.");


// �Խ��ǰ� �׷켳���� ���� ȸ�� ���� ����
	if($id) {
		// ���� �Խ��� ���� �о� ����
		$setup=get_table_attrib($id);

		// �������� ���� �Խ����϶� ���� ǥ��
		if(!$setup[name]) Error("�������� ���� �Խ����Դϴ�.<br><br>�Խ����� ������ ����Ͻʽÿ�","window.close");

		// ���� �Խ����� �׷��� ���� �о� ����
		$group=group_info($setup[group_no]);
		if(!$group[use_join]&&!$mode) Error("���� ������ �׷��� �߰� ȸ���� �������� �ʽ��ϴ�","window.close");

	} else {

		if($group_name) $group=mysql_fetch_array(mysql_query("select * from $group_table where name='$group_name'"));
		elseif($group_no) $group=mysql_fetch_array(mysql_query("select * from $group_table where no='$group_no'"));
		if(!$group[no]) Error("������ �׷��� �������� �ʽ��ϴ�");
		if(!$group[use_join]&&!$mode) Error("���� ������ �׷��� �߰� ȸ���� �������� �ʽ��ϴ�");

	}

	$check[1]="checked";

	if(!$referer) $referer=$HTTP_REFERER;

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

	echo "<div align=center><br>";
?>

<script>
 function address_popup(num)
 {
  window.open('zipcode/search_zipcode.php?num='+num,'searchaddress','width=440,height=230,scrollbars=yes');
 }

 function check_submit()
 {

<?
	if(file_exists("./join_license.txt")) {
?>

  if(!write.accept.checked) {
	alert("���Ծ���� �����ϼž� ȸ�������� �Ҽ� �ֽ��ϴ�");
	return false;
  }

<?
	}
?>

  if(!write.user_id.value) {alert("���̵� �Է��Ͽ� �ֽʽÿ�.");write.user_id.focus(); return false;}

<?
	if($_zbDefaultSetup[enable_hangul_id]=="false") {
?>

  // ID Check
  if(write.user_id.value.length<4||write.user_id.value.length>40) {
    alert("���̵�� 4�� �̻�, 40�� ���Ͽ��� �մϴ�.");
    write.user_id.focus();
    return false;
  }
  var valid = "abcdefghijklmnopqrstuvwxyz0123456789_"; 
  var startChar = "abcdefghijklmnopqrstuvwxyz"; 
  var temp; 
  write.user_id.value = write.user_id.value.toLowerCase(); 
  temp = write.user_id.value.substring(0,1); 
  if (startChar.indexOf(temp) == "-1") {
    alert("���̵��� ù ���ڴ� �����̾�� �մϴ�.");
    write.user_id.value = ""; 
    write.user_id.focus(); 
    return false;
  }
  for (var i=0; i<write.user_id.value.length; i++) { 
    temp = "" + write.user_id.value.substring(i, i+1); 
    if (valid.indexOf(temp) == "-1") { 
      alert("���̵�� ������ ����, _ �θ� �̷������ �ֽ��ϴ�.");
      write.user_id.value = ""; 
      write.user_id.focus(); 
      return false;
    }
  } 
<?
	}
?>

  if(!write.password.value) {alert("��й�ȣ�� �Է��Ͽ� �ֽʽÿ�.");write.password.focus(); return false;}
  if(!write.password1.value) {alert("��й�ȣ Ȯ���� �Է��Ͽ� �ֽʽÿ�.");write.password1.focus(); return false;}
  if(write.password.value!=write.password1.value) {alert("�н����尡 ��ġ���� �ʽ��ϴ�.");write.password.value="";write.password1.value=""; write.password.focus(); return false;}
  if(!write.name.value) { alert("�̸��� �Է��ϼ���"); write.name.focus(); return false; }

<? if($group[use_birth])
   { ?>

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
<? } ?>
  if(!write.email.value) {alert("E-Mail�� �Է��Ͽ� �ֽʽÿ�.");write.email.focus(); return false;}

<? if($group[use_jumin]&&!$mode)
   { ?>
   if(!write.jumin1.value) {alert("�ֹε�Ϲ�ȣ�� �Է��Ͽ� �ֽʽÿ�");write.jumin1.focus(); return false;}
   if(!write.jumin2.value) {alert("�ֹε�Ϲ�ȣ�� �Է��Ͽ� �ֽʽÿ�");write.jumin2.focus(); return false;}
<?}?>

  return true;
  }

  function check_id(id)
  {
   if(!id)
   {
    alert('���̵� �Է��Ͽ� �ֽʽÿ�');
   }
   else
   {
    window.open('check_user_id.php?user_id='+id,'check_user_id','width=200,height=100,toolbar=no,status=no,resizable=no');
   }
  }

  function check_accept() {
	return confirm("���� ���� ����� ��� ��������, �����Ͻʴϱ�?");
  }

</script>
</style>
<style type = "text/css">

#Home {display:block;
}
.container {	width: 1024px;
	background-color: #FFFFFF;
	margin: 0 0; /* ���� �ڵ� ��, ������ ����, ���̾ƿ� ��� ���� */
}
</style>



<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
	
<body onLoad="MM_preloadImages('http://chin1927.dothome.co.kr/img/introbtnR.jpg','http://chin1927.dothome.co.kr/img/recommbtnR.jpg','http://chin1927.dothome.co.kr/img/eventbtnR.jpg','http://chin1927.dothome.co.kr/img/newsbtnR.jpg','http://chin1927.dothome.co.kr/img/commubtnR.jpg','http://chin1927.dothome.co.kr/img/supportbtnR.jpg')">
<div class="header"> 
  <img src="http://chin1927.dothome.co.kr/img/main_top.jpg" name="Home" usemap="#HomeMap" id="Home" border = "0">
  <map name="HomeMap"><area shape="rect" coords="913,95,964,110" href="../Login.php">
      <area shape="rect" coords="0,0,322,118" href="http://chin1927.dothome.co.kr">
      <area shape="rect" coords="969,93,1020,111" href="http://chin1927.dothome.co.kr/bbs/member_join.php?group_no=1">
    </map>
    <a href="../product.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Product','','http://chin1927.dothome.co.kr/img/introbtnR.jpg',1)"><img src="http://chin1927.dothome.co.kr/img/introbtn.jpg" border = "0" width="172" height="50" id="Product"></a><a href="../Recommand.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Recommand','','http://chin1927.dothome.co.kr/img/recommbtnR.jpg',1)"><img src="http://chin1927.dothome.co.kr/img/recommbtn.jpg" border = "0" width="170" height="50" id="Recommand"></a><a href="../event.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Event','','http://chin1927.dothome.co.kr/img/eventbtnR.jpg',1)"><img src="http://chin1927.dothome.co.kr/img/eventbtn.jpg" border = "0" width="170" height="50" id="Event"></a><a href="../News.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('News','','http://chin1927.dothome.co.kr/img/newsbtnR.jpg',1)"><img src="http://chin1927.dothome.co.kr/img/newsbtn.jpg" name="News"  border = "0" width="170" height="50" id="News"></a><a href="../community.php?str=http://chin1927.dothome.co.kr/bbs/zboard.php?id=Notice" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Community','','http://chin1927.dothome.co.kr/img/commubtnR.jpg',1)"><img src="http://chin1927.dothome.co.kr/img/commubtn.jpg"  border = "0" width="170" height="50" id="Community"></a><a href="../support.php?str=http://chin1927.dothome.co.kr/bbs/zboard.php?id=FAQ" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Support','','http://chin1927.dothome.co.kr/img/supportbtnR.jpg',1)"><img src="http://chin1927.dothome.co.kr/img/supportbtn.jpg" border = "0" width="172" height="50" id="Support"></a></div>
    &nbsp;
  <table border=0 cellspacing=1 cellpadding=0 width=540>
  <form name=write method=post action=member_join_ok.php enctype=multipart/form-data onSubmit="return check_submit();">
<input type=hidden name=id value=<?=$id?>>
<input type=hidden name=referer value="<?=$referer?>">
<input type=hidden name=group_no value="<?=$group[no]?>">
<input type=hidden name=mode value="<?=$mode?>">

  <tr><td colspan=2><p>&nbsp;</p>
    <p><img src=images/member_joinin.gif></p>
    <p>&nbsp;</p></td></tr>

<?
	if(file_exists("./join_license.txt")) {
		$f=fopen("join_license.txt",r);
		$join_license = fread($f,filesize("join_license.txt"));
		fclose($f);
?>
  <tr><td colspan="5" bgcolor="#333333" align="center"><img src="images/t.gif" width="10" height="3"></td></tr>
  <tr>
  	<td colspan=2>
  		<br><div align=center><textarea cols=80 rows=6 readonly style=border-color:#4374D9;width:95% class=input><?=$join_license?></textarea></div>
	</td>
  </tr>
  <tr>
  	<td colspan=2>&nbsp;&nbsp;&nbsp;<input type=checkbox name=accept value=1 onClick="return check_accept()"> ���� ���� ����� �����մϴ�</td>
  </tr>
<?
	}
?>
        <tr>
          <td colspan="5" bgcolor="#333333" align="center"><img src="images/t.gif" width="10" height="3"></td>
        </tr>
  <tr align=right>
     <td width=25% style=font-family:Tahoma;font-size:8pt;><b>ID &nbsp;</td>
     <td align=left>&nbsp;<input type=text name=user_id size=20 maxlength=20 style=border-color:#4374D9 class=input> <input type=button value='Check ID' style=color:#000000;border-color:#dfb8b8;background-color:#f0f0f0;font-size:8pt;font-family:Tahoma;height:20px; onclick=check_id(write.user_id.value)><br><img src=images/t.gif border=0 height=4><? if($_zbDefaultSetup[enable_hangul_id]=="false") {?><br>&nbsp;(����,����,_�θ� ���̵� �ۼ��ϼ���)<? } ?></td>
  </tr>
        <tr>
          <td colspan="5" bgcolor="#333333" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
  <tr align=right height=28>
     <td style=font-family:Tahoma;font-size:8pt;><B>Password  &nbsp;</td>
     <td align=left>&nbsp;<input type=password name=password size=20 maxlength=20 style=border-color:#4374D9 class=input> Ȯ�� : <input type=password name=password1 size=20 maxlength=20 style=border-color:#4374D9 class=input></td>
  </tr>
        <tr>
          <td colspan="5" bgcolor="#333333" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
  <tr align=right height=28>
     <td style=font-family:Tahoma;font-size:8pt;><b>Name &nbsp;</td>
     <td align=left>&nbsp;<input type=text name=name size=20 maxlength=20 value="<?=$member[name]?>" style=border-color:#4374D9 class=input></td>
  </tr>
        <tr>
          <td colspan="5" bgcolor="#333333" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
<? if($group[use_birth]) { ?>
  <tr align=right height=28>
     <td style=font-family:Tahoma;font-size:8pt;><b>Birthday &nbsp;</td>
     <td align=left>&nbsp;<input type=text name=birth_1 size=4 maxlength=4 style=border-color:#4374D9 class=input> �� 
                    &nbsp;<input type=text name=birth_2 size=2 maxlength=2 style=border-color:#4374D9 class=input> ��
                    &nbsp;<input type=text name=birth_3 size=2 maxlength=2 style=border-color:#4374D9 class=input> �� 
          <input type=checkbox value=1 checked name=open_birth> ����
  </tr>        <tr>
          <td colspan="5" bgcolor="#333333" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
<? } ?>

  <tr align=right height=28>
     <td style=font-family:Tahoma;font-size:8pt;><b>E-mail &nbsp;</td>
     <td align=left>&nbsp;<input type=text name=email size=50 maxlength=255 value="<?=$member[email]?>" style=border-color:#4374D9 class=input>
                          <input type=checkbox value=1 name=open_email checked> ����
                          </td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#333333" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
  <tr align=right height=28>
     <td style=font-family:Tahoma;font-size:8pt;>Homepage &nbsp;</td>
     <td align=left>&nbsp;<input type=text name=homepage size=50 maxlength=255 value="<?=$member[homepage]?>" style=border-color:#4374D9 class=input>
                          <input type=checkbox value=1 name=open_homepage checked> ����</td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#333333" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>

<? if($group[use_icq]) { ?>
  <tr align=right height=28>
     <td style=font-family:Tahoma;font-size:8pt;>ICQ &nbsp;</td>
     <td align=left>&nbsp;<input type=text name=icq size=20 maxlength=20 value="<?=$member[icq]?>" style=border-color:#4374D9 class=input>
                          <input type=checkbox value=1 name=open_icq checked> ����</td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#333333" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
<? } ?>

<? if($group[use_aol]) { ?>
  <tr align=right height=28>
     <td style=font-family:Tahoma;font-size:8pt;>AIM &nbsp;</td>
     <td align=left>&nbsp;<input type=text name=aol size=20 maxlength=20 value="<?=$member[aol]?>" style=border-color:#4374D9 class=input>
                          <input type=checkbox value=1 name=open_aol checked> ����</td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#333333" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
<? } ?>

<? if($group[use_msn]) { ?>
  <tr align=right height=28>
     <td style=font-family:Tahoma;font-size:8pt;>MSN &nbsp;</td>
     <td align=left>&nbsp;<input type=text name=msn size=20 maxlength=250 value="<?=$member[msn]?>" style=border-color:#4374D9 class=input>
                          <input type=checkbox value=1 name=open_msn checked> ����</td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#333333" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
<? } ?>

<? if($group[use_jumin]) { ?>
  <tr align=right height=28>
     <td style=font-family:Tahoma;font-size:8pt; valign=top><table border=0 cellspacing=0 cellpadding=0 height=4><tr><td></td></tr></table>
     <b>�ֹε�Ϲ�ȣ  &nbsp;</td>
     <td align=left>&nbsp<input type=text name=jumin1 size=6 maxlength=6 style=border-color:#4374D9 class=input>-<input type=text name=jumin2 size=7 maxlength=7 style=border-color:#4374D9 class=input> <br>* �ֹε�Ϲ�ȣ�� ��ȣȭ�Ǿ� ������ �ǹǷ� �����ڵ� �˼� �����ϴ�<br>
     &nbsp; (ȸ�� �ߺ������� ���� ���� �˻�������θ� ����� �˴ϴ�)</td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#333333" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
<? } ?>

<? if($group[use_hobby]) { ?>
  <tr align=right height=28>
     <td style=font-family:Tahoma;font-size:8pt;>Hobby &nbsp;</td>
     <td align=left>&nbsp;<input type=text name=hobby size=50 maxlength=50 value="<?=$member[hobby]?>" style=border-color:#4374D9 class=input>
                          <input type=checkbox value=1 name=open_hobby checked> ����</td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#333333" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
<? } ?>

<? if($group[use_job]) { ?>
  <tr align=right height=28>
     <td style=font-family:Tahoma;font-size:8pt;>Occupation(Job) &nbsp;</td>
     <td align=left>&nbsp;<input type=text name=job size=20 maxlength=20 value="<?=$member[job]?>" style=border-color:#4374D9 class=input>
                          <input type=checkbox value=1 name=open_job checked> ����</td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#333333" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
<? } ?>

<? if($group[use_home_address]) { ?> 
  <tr align=right height=28>
     <td style=font-family:Tahoma;font-size:8pt;>Home Address &nbsp; </td>
     <td align=left>&nbsp;<input type=text name=home_address size=40 maxlength=255 value="<?=$member[home_address]?>" style=border-color:#4374D9 class=input><input type=button value='�˻�' class=input style=border-color:#4374D9 onclick=address_popup(1)>
                          <input type=checkbox value=1 name=open_home_address checked> ����</td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#333333" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
<? } ?>

<? if($group[use_home_tel]) { ?>
  <tr align=right height=28>
     <td style=font-family:Tahoma;font-size:8pt;>Home Phone &nbsp;</td>
     <td align=left>&nbsp;<input type=text name=home_tel size=20 maxlength=20 value="<?=$member[home_tel]?>" style=border-color:#4374D9 class=input>
                          <input type=checkbox value=1 name=open_home_tel checked> ����</td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#333333" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
<? } ?>

<? if($group[use_office_address]) { ?>
  <tr align=right height=28>
     <td style=font-family:Tahoma;font-size:8pt;>Office Address &nbsp;</td>
     <td align=left>&nbsp;<input type=text name=office_address size=40 maxlength=255 value="<?=$member[office_address]?>" style=border-color:#4374D9 class=input><input type=button value='�˻�' class=input style=border-color:#4374D9 onclick=address_popup(2)>
                          <input type=checkbox value=1 name=open_office_address checked> ����</td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#333333" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
<? } ?>

<? if($group[use_office_tel]) { ?>
  <tr align=right height=28>
     <td style=font-family:Tahoma;font-size:8pt;>Office Phone &nbsp;</td>
     <td align=left>&nbsp;<input type=text name=office_tel size=20 maxlength=20 value="<?=$member[office_tel]?>" style=border-color:#4374D9 class=input>
                          <input type=checkbox value=1 name=open_office_tel checked> ����</td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#333333" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
<? } ?>

<? if($group[use_handphone]) { ?>
  <tr align=right height=28>
     <td style=font-family:Tahoma;font-size:8pt;>Cellular &nbsp;</td>
     <td align=left>&nbsp;<input type=text name=handphone size=20 maxlength=20 value="<?=$member[handphone]?>" style=border-color:#4374D9 class=input>
                          <input type=checkbox value=1 name=open_handphone checked> ����</td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#333333" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
<? } ?>

<? if($group[use_mailing]) { ?>
  <tr align=right height=28>
     <td style=font-family:Tahoma;font-size:8pt;><b>Mailling List &nbsp;</td>
     <td align=left>&nbsp;<input type=checkbox name=mailing value=1 checked> ���ϸ� ����</td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#333333" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
<? } ?>

<? if($group[use_picture]) { ?>
  <tr align=right height=28>
     <td style=font-family:Tahoma;font-size:8pt;>Photo &nbsp;</td>
     <td align=left>&nbsp;<input type=file name=picture size=35 maxlength=255 style=border-color:#4374D9 class=input>
                 <? if($member[picture]) echo"<br>&nbsp;<img src='$member[picture]' border=0>"; ?>
                          <input type=checkbox value=1 name=open_picture checked> ����
     </td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#333333" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
<? } ?>

<? if($group[use_comment]) { ?>
  <tr align=right height=28>
     <td style=font-family:Tahoma;font-size:8pt;>�ڱ� �Ұ���</td>
     <td align=left>&nbsp;<textarea cols=50 rows=4 name=comment style=border-color:#4374D9 class=textarea><?=$member[comment]?></textarea><br>&nbsp;<input type=checkbox value=1 name=open_comment checked> ����</td>

  </tr>        <tr>
          <td colspan="5" bgcolor="#333333" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>
<? } ?>

  <tr align=right height=28>
     <td style=font-family:Tahoma;font-size:8pt;><b>�������� ���� </td>
     <td align=left>&nbsp;<input type=checkbox name=openinfo value=1 checked> ���� ����</td>
  </tr>        <tr>
          <td colspan="5" bgcolor="#333333" align="center"><img src="images/t.gif" width="10" height="1"></td>
        </tr>

<tr height=30 bgcolor=#ffffff>
   <td  colspan=2 align=right ><img src=images/t.gif height=5><br>
   <input type=image border=0 src=images/button_join.gif> &nbsp;
   <img src=images/memo_close.gif border=0 onClick=window.close() style=cursor:hand>&nbsp;&nbsp;&nbsp;
   </td>
</tr>

  </form>
</table>
<br>
<br>
<br>
<span class="container"><img src="../img/footer.jpg" width="1024" height="100" border="0" usemap="#Map"></span>
<map name="Map">
  <area shape="rect" coords="205,42,239,54" href="http://chin1927.dothome.co.kr/">
  <area shape="rect" coords="400,40,475,55" href="support.php?str=FormMail.php">
  <area shape="rect" coords="850,43,885,78" href="http://www.facebook.com" target="new">
  <area shape="rect" coords="893,44,928,77" href="http://www.twitter.com" target="new">
  <area shape="rect" coords="939,43,972,76" href="http://www.me2day.net" target="new">
  <area shape="rect" coords="619,41,669,54" href="javascript:;" onclick="window.open('privacy.html','name','resizable=no status=no menubar=no toolbar=no location=no scrollbars = yes width=500 height=600');return false">
  <area shape="rect" coords="205,56,263,69" href="javascript:;" onclick="window.open('company.html','name','resizable=no status=no menubar=no toolbar=no location=no scrollbars = yes width=750 height=750');return false">
  <area shape="rect" coords="402,56,465,69" href="javascript:;" onclick="window.open('map.html','name','resizable=no status=no menubar=no toolbar=no location=no scrollbars = yes width=700 height=650');return false">
  <area shape="rect" coords="620,55,727,70" href="javascript:;" onclick="window.open('term.html','name','resizable=no status=no menubar=no toolbar=no location=no scrollbars = yes width=500 height=600');return false">
  <area shape="rect" coords="619,71,674,83" href="sitemap.php">
</map>
<p>
  <?
	@mysql_close($connect);
	foot();
?>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
