 

<?

// ####### ������ '�Է¾��' and '�߼��ڵ�' ########
  // �̰��� �ٷ� ��� ������ ������ ������ �ҽ��Դϴ�.
  // �� ���� ������ [�����Է�]->[���Ϲ߼�]�� ��� �Ϸ�˴ϴ�.
  // php �����̹Ƿ� �������� ���� �÷��� ������ �մϴ�.

 // ���� �޴»���� ������Ű�ų� �߰��� �� �ֽ��ϴ�.
  // �Է¶� �߰��׸��� 50�� �̻� �߰��� �� �ֽ��ϴ�.
  // ��ǥ(��) ǥ�õ� �����׸� Ȯ���� ������ �÷��� �׽�Ʈ �Ͻʽÿ�

 

 

 // [�� ���� 1] ���Ը��Ͽ� �ǿ�� ��� ������ �⺻���´� ���Ϲ߼� ���ܵǰ� �Ǿ� ������
  // �� ������ ���� ����Ϸ��� �� �����׿� 'yes' �� �����Ͻʽÿ�.
   $it_uses = "yes";


  // [�� ���� 2] ������ ���� ����� Ư����(������)���� �����Ϸ��� �� �����ּҿ�  �̸��� �����Ͻʽÿ�.
   $to_mail_set = "chin1927@naver.com	";  // �����ּ�
   $to_name_set = "MJ Homme";  // �̸�


  // [�� ���� 3] �������� �Ϸ����� ����������� �����Ϸ��� URL �ּ� ����(�⺻���´� ���� �Է����� �ٽ� ��µ�)
   $after_url="index.php";

 

 if($_POST['f_mailsend']){

  // ���Ϲ߼�
    send_mail_action($to_mail_set,$to_name_set);

  // [�� ���� 4] ���� ���� ����� ���� �߰��Ϸ���
   // send_mail_action("xxyyzz@abcd.net","ȫ�浿");
   // ���� �ڵ带 �����ּ�,�̸��� �ٲ㼭 ���⿡ �ݺ��� �־� �ָ� ��.


    alert_msg("MJ Homme���� ���������� ������ �߼۵Ǿ����ϴ�.",$after_url);
  }

?>

 

 


 <html>
  <head>
  <title>To MJ Homme</title>
  <meta http-equiv='Content-Type' content='text/html; charset=euc-kr'>

 <style type='text/css'>
   BODY,TD,TR,input,DIV,form,pre,select,textarea{font-size:9pt; font:Verdana, Arial, Helvetica, sans-serif; word-break:break-all;}
   form{margin:0; padding:0; display:inline;}
  </style>

 <script language=JavaScript>

  // [�� ���� 5] �Է¿��� üũ - �Է�Ȯ�� �ʿ� ���� ���� �����ص� ��
   function form_mail_submit(){

   //if(no_value('mail_subject'))    return error_msg('mail_subject','������ �Է��Ͻʽÿ�.');
    //if(no_value('mail_to_name'))    return error_msg('mail_to_name','�޴»�� �̸��� �Է��Ͻʽÿ�.');
    if(no_value('mail_from_name'))    return error_msg('mail_from_name','�̸��� �Է����ּ���.');
    if(no_value('mail_body'))    return error_msg('mail_body','����ó�� �Է����ּ���.');

   //if(no_value('add_value_1'))    return error_msg('add_value_1','�Է¶� �߰�1 �� �Է��Ͻʽÿ�.');
    //if(no_value('add_value_2'))    return error_msg('add_value_2','�Է¶� �߰�2 �� �Է��Ͻʽÿ�.');
    //if(no_value('add_value_3'))    return error_msg('add_value_3','�Է¶� �߰�3 �� �Է��Ͻʽÿ�.');
    //if(no_value('add_value_4'))    return error_msg('add_value_4','�Է¶� �߰�4 �� �Է��Ͻʽÿ�.');
    //if(no_value('add_value_5'))    return error_msg('add_value_5','�Է¶� �߰�5 �� �Է��Ͻʽÿ�.');

   //if(!document.MailWriteForm.mail_to_email.value.match(/\S+@\S+\.\S+/)) return error_msg('mail_to_email','�޴»�� �����ּҸ� Ȯ���Ͻʽÿ�.');
    //if(!document.MailWriteForm.mail_from_email.value.match(/\S+@\S+\.\S+/)) return error_msg('mail_from_email','������� �����ּҸ� Ȯ���Ͻʽÿ�.');
    document.MailWriteForm.submit();
   }
   function no_value(inputName){
    value=eval('document.MailWriteForm.'+inputName).value.replace(/\s/g,"");
    if(!value) return 1;
   }
   function error_msg(inputName,msg){
    alert(msg);
    eval('document.MailWriteForm.'+inputName).focus();
    return false;
   }

 </script>

 </head>

 <body bgcolor=#ffffff>

 

 <div align="left"><b>&nbsp;&nbsp;&nbsp;MJ Homme����...</b></div>


 <!--------- �׵θ� ����-------------------------------------------------------------->
 <table border=0 cellpadding=0 cellspacing=0 align=left>
 <tr>
 <td width=12 height=11 background='r1.gif'></td>
 <td height=11 background='r2.gif'></td>
 <td width=13 height=11 background='r3.gif'></td>
 </tr>
 <tr>
 <td width=12 background='r4.gif'></td>
 <td align=center style='padding:2;'>
 <!--------- �׵θ� ����-------------------------------------------------------------->

 

 

 

<FORM method='post' name="MailWriteForm" action="<?=$_SERVER['PHP_SELF']?>">
  <input type=hidden name='f_mailsend' value='1'>

 <table width=400 border=0 cellpadding=1 cellspacing=1>

  <tr>
    
   </tr>

  <tr><td colspan=2 height=5 style='padding:0;'></td></tr>


 <? // '����2' ���� ���Ϲ��� ����� �����ߴٸ� �޴»�� �̸�/���� �Է�ĭ�� ��¾���
    if($to_mail_set and $to_name_set){
     echo "<input type=hidden name='mail_to_email' value='$to_mail_set'>";
     echo "<input type=hidden name='mail_to_name' value='$to_name_set'>";
    }else{
 ?>

  <tr>
    <td bgcolor=#f7f7f7>�޴� ��� �̸�</td>
    <td><input type=text name='mail_to_name' style='border:1px solid #aaaaaa; width:150px;'></td>
   </tr>
   <tr>
    <td bgcolor=#f7f7f7>�޴� ��� �����ּ�</td>
    <td><input type=text name='mail_to_email' style='border:1px solid #aaaaaa; width:150px;'></td>
   </tr>
   <tr><td colspan=2 height=5 style='padding:0;'></td></tr>

<?}?>

  <tr>
    <td bgcolor=#f7f7f7>������ ��</td>
    <td><input type=text name='mail_from_name' style='border:1px solid #aaaaaa; width:150px;'></td>
   </tr>

  <tr>
    <td bgcolor=#f7f7f7>������� �����ּ�</td>
    <td><input type=text name='mail_from_email' style='border:1px solid #aaaaaa; width:150px;'></td>
   </tr>


   <tr><td colspan=2 height=5 style='padding:0;'></td></tr>


   <tr>
    <td bgcolor=#f7f7f7>�� &nbsp; ��</td>
    <td><input type=text name='mail_subject' style='border:1px solid #aaaaaa; width:250px;'></td>
   </tr>

 


   <!-----[�� ���� 6] �Է¶��� �߰� �Ϸ��� �Ʒ��� ���� �Ϸ� ���ڸ� ����� ��� �߰��� �ָ� �� --

  <tr>
    <td bgcolor=#f7f7f7>
     <img src='arow.gif' align=absmiddle> �Է¶� �߰�1
    </td>
    <td>
     <input type=hidden name='add_title_1' value="�Է¶� �߰�1">
     <input type=text name='add_value_1' style='border:1px solid #aaaaaa; width:250px;'>
    </td>
   </tr>

  <tr>
    <td bgcolor=#f7f7f7>
     <img src='arow.gif' align=absmiddle> �Է¶� �߰�2
    </td>
    <td>
     <input type=hidden name='add_title_2' value="�Է¶� �߰�2">
     <input type=text name='add_value_2' style='border:1px solid #aaaaaa; width:250px;'>
    </td>
   </tr>


   <tr>
    <td bgcolor=#f7f7f7>
     <img src='arow.gif' align=absmiddle> �Է¶� �߰�3
    </td>
    <td>
     <input type=hidden name='add_title_3' value="�Է¶� �߰�3">
     <input type=text name='add_value_3' style='border:1px solid #aaaaaa; width:250px;'>
    </td>
   </tr>

  <tr>
    <td bgcolor=#f7f7f7>
     <img src='arow.gif' align=absmiddle> �Է¶� �߰�4
    </td>
    <td>
     <input type=hidden name='add_title_4' value="�Է¶� �߰�4">
     <input type=text name='add_value_4' style='border:1px solid #aaaaaa; width:250px;'>
    </td>
   </tr>

  <tr>
    <td bgcolor=#f7f7f7>
     <img src='arow.gif' align=absmiddle> �Է¶� �߰�5
    </td>
    <td>
     <input type=hidden name='add_title_5' value="�Է¶� �߰�5">
     <input type=text name='add_value_5' style='border:1px solid #aaaaaa; width:250px;'>
    </td>
   </tr>

  <!-----[�� ���� 6] �Է¶��� �߰� �Ϸ��� ���� ���� �Ϸ� ���ڸ� ����� ��� �߰��� �ָ� �� ---->

 


   <tr><td colspan=2 height=5 style='padding:0;'></td></tr>

 

  <!--- ���� �Է¶� --->
   <tr>
    <td colspan=2 align=center>
     <textarea name='mail_body'
     style="border:1px solid #aaaaaa; width:100%; height:150px; overflow:auto; background-image:url('wrback.gif'); line-height:150%;"></textarea>
    </td>
   </tr>

 </table>

 <br>

 <!--- ���۹�ư --->
  <a onclick="javascript_:form_mail_submit()" style='cursor:pointer;'><img src="img/support/confirm.gif" border=0></a>

</FORM>

 

 

 


 <!--------- �׵θ� ����-------------------------------------------------------------->
 </td>
 <td width=13 background='r5.gif'></td>
 </tr>
 <tr>
 <td width=12 height=11 background='r6.gif'></td>
 <td height=11 background='r7.gif'></td>
 <td width=13 height=11 background='r8.gif'></td>
 </tr>
 </table>
 <!--------- �׵θ� ����-------------------------------------------------------------->

 


 <pre style="line-height:150%;">




 </pre>

</body>
 </html>

 

 

 

 

 

<?


 // ���ϳ��� html ����
 function mail_body_html($body){

 $join_html= <<<EOF_LINE


  <html>
   <head>
   <meta http-equiv='Content-Type' content='text/html; charset=euc-kr'>
   <style type=text/css>
    body,td,input,div,select,textarea{font-size:9pt; font-family:����,Tahoma; line-height:140%; word-break:break-all;}
   </style>
   </head>

  <body bgcolor='#ffffff' topmargin=5>


    <table width=90% border=1 cellspacing=0 cellpadding=1 frame=void bordercolordark='#ffffff' bordercolorlight='#eeeeee' style='margin-bottom:8px;'>
     <tr><td width=120><b>��</b>�������</td><td> $_POST[mail_from_name]  &lt;$_POST[mail_from_email]&gt;</td></tr>
     <tr><td width=120><b>��</b>�������</td><td> $_POST[mail_to_name]  &lt;$_POST[mail_to_email]&gt;</td></tr>

EOF_LINE;

   // �߰��Է¶� ����
    for($i=1; $i<50; $i++){ // �Է��߰��׸��� 50�� �̻� �ȴٸ� '50'�� �����Ұ�
     if(!$_POST['add_title_'.$i]) continue;
     $title=$_POST['add_title_'.$i];  $value=$_POST['add_value_'.$i];
     $join_html.="
       <tr>
        <td width=120><b>��</b>$title</td><td> $value</td>
       </tr>
      ";
    }

 $join_html.= <<<EOF_LINE

   </table>

   <table width=98% cellpadding=0 cellspacing=0 border=0 bgcolor='#ffffff' style='border:1px solid #1578FF;'>
     <tr><td height=1 bgcolor='#A9CDFF'></td></tr>
     <tr><td height=1 bgcolor='#67A7FF'></td></tr>
     <tr>
      <td bgcolor='#1578FF' style='padding:2px; padding-left:6px; color:#ffffff; font-weight:bold;'>
       &nbsp; $_POST[mail_subject]
      </td>
     </tr>
     <tr><td height=1 bgcolor='#67A7FF'></td></tr>
     <tr><td height=1 bgcolor='#A9CDFF'></td></tr>
     <tr><td height=1 bgcolor='#1578FF'></td></tr>
     <tr>
      <td style='padding:5px'>
       <!--���� ���� ����-->
       $body
      </td>
     </tr>
    </table>

  </body>
  </html>

EOF_LINE;

 return $join_html;

}

 

 

 


 function send_mail_action($snd_mail,$snd_name){
  if($GLOBALS['it_uses'] != 'yes') alert_msg("���Ϲ߼� ���� �߽��ϴ�. �ҽ����� '�����׸�1' �� �켱 Ȯ���Ͻʽÿ�.");

 if($snd_mail) $_POST['mail_to_email'] = $snd_mail;
  if($snd_name) $_POST['mail_to_name'] = $snd_name;

 if(!org_mail($_POST['mail_to_email'])) alert_msg('�޴� ��� �����ּҰ� �߸� �Ǿ����ϴ�.');
  if(!org_mail($_POST['mail_from_email'])) alert_msg('������ ��� �����ּҰ� �߸� �Ǿ����ϴ�.');

 if(!$_POST['mail_subject']) alert_msg('������ �Է��Ͻʽÿ�.');
  if(!$_POST['mail_to_name']) alert_msg('�޴»�� �̸��� �Է��Ͻʽÿ�.');
  if(!$_POST['mail_from_name']) alert_msg('������� �̸��� �Է��Ͻʽÿ�.');

 if(!$_POST['mail_body']) alert_msg('���� ������ �Է��Ͻʽÿ�.');

 $mail_to = "\"$_POST[mail_to_name]\" <$_POST[mail_to_email]>";
  $mail_from = "\"$_POST[mail_from_name]\" <$_POST[mail_from_email]>";

 $head  = "From:$_POST[mail_from_email]\n";
  $head .="Content-Type: text/html\n";
  $head .="Reply-To:$_POST[mail_from_email]\n";
  $head .="X-Mailer:PHP/".phpversion();

 $body=nl2br($_POST['mail_body']);
  $body=stripslashes($body);
  $body=mail_body_html($body);

 return @mail($mail_to,$_POST['mail_subject'],$body,$head);
 }


 function org_mail($mail){
  if(!preg_match("/\S+@(\S+\.\S+)/",$mail,$Tmp)) return ;
  // if(!checkdnsrr($Tmp[1], "MX") and !checkdnsrr($Tmp[1], "A")) return ;
  return 1;
 }


 function alert_msg($msg,$after_url=""){
  $msg=preg_replace("/\"/","'",$msg);
  echo " <script language='JavaScript'> alert(\"$msg\"); ";
  if($after_url) echo " location.href='$after_url'; ";
  else echo " history.go(-1); ";
  echo "</script>";
  exit;
 }

 


 ?>