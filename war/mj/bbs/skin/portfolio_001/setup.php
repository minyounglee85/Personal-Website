<table border="0" cellspacing="0" cellpadding="0" width="<?=$width?>"><?=$memo_on_sound?>
<!-- 회원가입/로그인 등... 상단의 버튼을 삭제하려면 아래 4번 라인을 삭제하세요 -->
 <tr><td align=right><?=$a_member_memo?><span onClick="swapImage('memozzz','','<?=$dir?>/member_memo_off.gif',0)" title='쪽지관리'><?=$member_memo_icon?></span></a><?=$a_member_join?><img src=<?=$dir?>/images/setup_join.gif border=0></a><?=$a_login?><img src=<?=$dir?>/images/setup_login.gif border=0></a><?=$a_member_modify?><img src=<?=$dir?>/images/setup_info.gif border=0></a><?=$a_setup?><img src=<?=$dir?>/images/setup_setup.gif border=0></a><?=$a_logout?><img src=<?=$dir?>/images/setup_logout.gif border=0></td></td></tr>
<!-- 회원가입/로그인 등... 상단의 버튼을 삭제하려면 위 4번 라인을 삭제하세요 -->
 <tr><td align="center"><? include "include/print_category.php"; ?></td></tr>
</table>