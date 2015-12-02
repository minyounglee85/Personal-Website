 

<?

// ####### 폼메일 '입력양식' and '발송코드' ########
  // 이것은 바로 사용 가능한 독립된 폼메일 소스입니다.
  // 본 파일 내에서 [내용입력]->[메일발송]이 모두 완료됩니다.
  // php 파일이므로 웹서버에 직접 올려야 정상동작 합니다.

 // 메일 받는사람을 고정시키거나 추가할 수 있습니다.
  // 입력란 추가항목은 50개 이상 추가할 수 있습니다.
  // 별표(★) 표시된 설정항목 확인후 서버에 올려서 테스트 하십시오

 

 

 // [★ 설정 1] 스팸메일에 악용될 우려 때문에 기본상태는 메일발송 차단되게 되어 있으니
  // 본 파일을 실제 사용하려면 이 설정항에 'yes' 를 대입하십시오.
   $it_uses = "yes";


  // [★ 설정 2] 메일을 받을 사람을 특정인(관리자)으로 고정하려면 그 메일주소와  이름을 대입하십시오.
   $to_mail_set = "chin1927@naver.com	";  // 메일주소
   $to_name_set = "MJ Homme";  // 이름


  // [★ 설정 3] 메일전송 완료후의 출력페이지를 지정하려면 URL 주소 대입(기본상태는 메일 입력폼이 다시 출력됨)
   $after_url="index.php";

 

 if($_POST['f_mailsend']){

  // 메일발송
    send_mail_action($to_mail_set,$to_name_set);

  // [★ 설정 4] 메일 받을 사람을 여럿 추가하려면
   // send_mail_action("xxyyzz@abcd.net","홍길동");
   // 위의 코드를 메일주소,이름만 바꿔서 여기에 반복해 넣어 주면 됨.


    alert_msg("MJ Homme에게 성공적으로 메일이 발송되었습니다.",$after_url);
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

  // [★ 설정 5] 입력여부 체크 - 입력확인 필요 없는 것은 삭제해도 됨
   function form_mail_submit(){

   //if(no_value('mail_subject'))    return error_msg('mail_subject','제목을 입력하십시오.');
    //if(no_value('mail_to_name'))    return error_msg('mail_to_name','받는사람 이름을 입력하십시오.');
    if(no_value('mail_from_name'))    return error_msg('mail_from_name','이름을 입력해주세요.');
    if(no_value('mail_body'))    return error_msg('mail_body','연락처를 입력해주세요.');

   //if(no_value('add_value_1'))    return error_msg('add_value_1','입력란 추가1 을 입력하십시오.');
    //if(no_value('add_value_2'))    return error_msg('add_value_2','입력란 추가2 을 입력하십시오.');
    //if(no_value('add_value_3'))    return error_msg('add_value_3','입력란 추가3 을 입력하십시오.');
    //if(no_value('add_value_4'))    return error_msg('add_value_4','입력란 추가4 을 입력하십시오.');
    //if(no_value('add_value_5'))    return error_msg('add_value_5','입력란 추가5 을 입력하십시오.');

   //if(!document.MailWriteForm.mail_to_email.value.match(/\S+@\S+\.\S+/)) return error_msg('mail_to_email','받는사람 메일주소를 확인하십시오.');
    //if(!document.MailWriteForm.mail_from_email.value.match(/\S+@\S+\.\S+/)) return error_msg('mail_from_email','보낸사람 메일주소를 확인하십시오.');
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

 

 <div align="left"><b>&nbsp;&nbsp;&nbsp;MJ Homme에게...</b></div>


 <!--------- 테두리 라운딩-------------------------------------------------------------->
 <table border=0 cellpadding=0 cellspacing=0 align=left>
 <tr>
 <td width=12 height=11 background='r1.gif'></td>
 <td height=11 background='r2.gif'></td>
 <td width=13 height=11 background='r3.gif'></td>
 </tr>
 <tr>
 <td width=12 background='r4.gif'></td>
 <td align=center style='padding:2;'>
 <!--------- 테두리 라운딩-------------------------------------------------------------->

 

 

 

<FORM method='post' name="MailWriteForm" action="<?=$_SERVER['PHP_SELF']?>">
  <input type=hidden name='f_mailsend' value='1'>

 <table width=400 border=0 cellpadding=1 cellspacing=1>

  <tr>
    
   </tr>

  <tr><td colspan=2 height=5 style='padding:0;'></td></tr>


 <? // '설정2' 에서 메일받을 사람을 설정했다면 받는사람 이름/메일 입력칸은 출력안함
    if($to_mail_set and $to_name_set){
     echo "<input type=hidden name='mail_to_email' value='$to_mail_set'>";
     echo "<input type=hidden name='mail_to_name' value='$to_name_set'>";
    }else{
 ?>

  <tr>
    <td bgcolor=#f7f7f7>받는 사람 이름</td>
    <td><input type=text name='mail_to_name' style='border:1px solid #aaaaaa; width:150px;'></td>
   </tr>
   <tr>
    <td bgcolor=#f7f7f7>받는 사람 메일주소</td>
    <td><input type=text name='mail_to_email' style='border:1px solid #aaaaaa; width:150px;'></td>
   </tr>
   <tr><td colspan=2 height=5 style='padding:0;'></td></tr>

<?}?>

  <tr>
    <td bgcolor=#f7f7f7>보내는 이</td>
    <td><input type=text name='mail_from_name' style='border:1px solid #aaaaaa; width:150px;'></td>
   </tr>

  <tr>
    <td bgcolor=#f7f7f7>답장받을 메일주소</td>
    <td><input type=text name='mail_from_email' style='border:1px solid #aaaaaa; width:150px;'></td>
   </tr>


   <tr><td colspan=2 height=5 style='padding:0;'></td></tr>


   <tr>
    <td bgcolor=#f7f7f7>제 &nbsp; 목</td>
    <td><input type=text name='mail_subject' style='border:1px solid #aaaaaa; width:250px;'></td>
   </tr>

 


   <!-----[★ 설정 6] 입력란을 추가 하려면 아래와 같이 일련 숫자를 사용해 계속 추가해 주면 됨 --

  <tr>
    <td bgcolor=#f7f7f7>
     <img src='arow.gif' align=absmiddle> 입력란 추가1
    </td>
    <td>
     <input type=hidden name='add_title_1' value="입력란 추가1">
     <input type=text name='add_value_1' style='border:1px solid #aaaaaa; width:250px;'>
    </td>
   </tr>

  <tr>
    <td bgcolor=#f7f7f7>
     <img src='arow.gif' align=absmiddle> 입력란 추가2
    </td>
    <td>
     <input type=hidden name='add_title_2' value="입력란 추가2">
     <input type=text name='add_value_2' style='border:1px solid #aaaaaa; width:250px;'>
    </td>
   </tr>


   <tr>
    <td bgcolor=#f7f7f7>
     <img src='arow.gif' align=absmiddle> 입력란 추가3
    </td>
    <td>
     <input type=hidden name='add_title_3' value="입력란 추가3">
     <input type=text name='add_value_3' style='border:1px solid #aaaaaa; width:250px;'>
    </td>
   </tr>

  <tr>
    <td bgcolor=#f7f7f7>
     <img src='arow.gif' align=absmiddle> 입력란 추가4
    </td>
    <td>
     <input type=hidden name='add_title_4' value="입력란 추가4">
     <input type=text name='add_value_4' style='border:1px solid #aaaaaa; width:250px;'>
    </td>
   </tr>

  <tr>
    <td bgcolor=#f7f7f7>
     <img src='arow.gif' align=absmiddle> 입력란 추가5
    </td>
    <td>
     <input type=hidden name='add_title_5' value="입력란 추가5">
     <input type=text name='add_value_5' style='border:1px solid #aaaaaa; width:250px;'>
    </td>
   </tr>

  <!-----[★ 설정 6] 입력란을 추가 하려면 위와 같이 일련 숫자를 사용해 계속 추가해 주면 됨 ---->

 


   <tr><td colspan=2 height=5 style='padding:0;'></td></tr>

 

  <!--- 본문 입력란 --->
   <tr>
    <td colspan=2 align=center>
     <textarea name='mail_body'
     style="border:1px solid #aaaaaa; width:100%; height:150px; overflow:auto; background-image:url('wrback.gif'); line-height:150%;"></textarea>
    </td>
   </tr>

 </table>

 <br>

 <!--- 전송버튼 --->
  <a onclick="javascript_:form_mail_submit()" style='cursor:pointer;'><img src="img/support/confirm.gif" border=0></a>

</FORM>

 

 

 


 <!--------- 테두리 라운딩-------------------------------------------------------------->
 </td>
 <td width=13 background='r5.gif'></td>
 </tr>
 <tr>
 <td width=12 height=11 background='r6.gif'></td>
 <td height=11 background='r7.gif'></td>
 <td width=13 height=11 background='r8.gif'></td>
 </tr>
 </table>
 <!--------- 테두리 라운딩-------------------------------------------------------------->

 


 <pre style="line-height:150%;">




 </pre>

</body>
 </html>

 

 

 

 

 

<?


 // 메일내용 html 구성
 function mail_body_html($body){

 $join_html= <<<EOF_LINE


  <html>
   <head>
   <meta http-equiv='Content-Type' content='text/html; charset=euc-kr'>
   <style type=text/css>
    body,td,input,div,select,textarea{font-size:9pt; font-family:굴림,Tahoma; line-height:140%; word-break:break-all;}
   </style>
   </head>

  <body bgcolor='#ffffff' topmargin=5>


    <table width=90% border=1 cellspacing=0 cellpadding=1 frame=void bordercolordark='#ffffff' bordercolorlight='#eeeeee' style='margin-bottom:8px;'>
     <tr><td width=120><b>ㆍ</b>보낸사람</td><td> $_POST[mail_from_name]  &lt;$_POST[mail_from_email]&gt;</td></tr>
     <tr><td width=120><b>ㆍ</b>받은사람</td><td> $_POST[mail_to_name]  &lt;$_POST[mail_to_email]&gt;</td></tr>

EOF_LINE;

   // 추가입력란 삽입
    for($i=1; $i<50; $i++){ // 입력추가항목이 50개 이상 된다면 '50'을 수정할것
     if(!$_POST['add_title_'.$i]) continue;
     $title=$_POST['add_title_'.$i];  $value=$_POST['add_value_'.$i];
     $join_html.="
       <tr>
        <td width=120><b>ㆍ</b>$title</td><td> $value</td>
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
       <!--메일 본문 내용-->
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
  if($GLOBALS['it_uses'] != 'yes') alert_msg("메일발송 실패 했습니다. 소스내의 '설정항목1' 을 우선 확인하십시오.");

 if($snd_mail) $_POST['mail_to_email'] = $snd_mail;
  if($snd_name) $_POST['mail_to_name'] = $snd_name;

 if(!org_mail($_POST['mail_to_email'])) alert_msg('받는 사람 메일주소가 잘못 되었습니다.');
  if(!org_mail($_POST['mail_from_email'])) alert_msg('보내는 사람 메일주소가 잘못 되었습니다.');

 if(!$_POST['mail_subject']) alert_msg('제목을 입력하십시오.');
  if(!$_POST['mail_to_name']) alert_msg('받는사람 이름을 입력하십시오.');
  if(!$_POST['mail_from_name']) alert_msg('보낸사람 이름을 입력하십시오.');

 if(!$_POST['mail_body']) alert_msg('본문 내용을 입력하십시오.');

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