<form method="post" id="list" name="list" action="list_all.php">
<input type="hidden" name="page" value="<?=$page?>" />
<input type="hidden" name="id" value="<?=$id?>" />
<input type="hidden" name="select_arrange" value="<?=$select_arrange?>" />
<input type="hidden" name="desc" value="<?=$desc?>" />
<input type="hidden" name="page_num" value="<?=$page_num?>" />
<input type="hidden" name="selected" />
<input type="hidden" name="exec" />
<input type="hidden" id="sn" name="sn" value="<?=$sn?>" />
<input type="hidden" id="ss" name="ss" value="<?=$ss?>" />
<input type="hidden" id="sc" name="sc" value="<?=$sc?>" />
<script type="text/javascript" language="JavaScript">
var chk;
chk=false;
function CheckAll()
{
        if (!chk){
                for (i=0;i<document.list.length;i++)
                {
                        if(document.list[i].type=='checkbox')
                   {
                                document.list[i].checked=true;
                        }
                }
                chk=true;
        }
        else
        {
                for (i=0;i<document.list.length;i++)
                {
                        if(document.list[i].type=='checkbox')
                        {
                                document.list[i].checked=false;
                        }
                }
                chk=false;
        }
}
///////
function changeopacity(imageobject, opacity) {
var object = imageobject.style;
    object.opacity = (opacity/100);
    object.MozOpacity = (opacity /100);
    object.KhtmlOpacity = (opacity/100);
    object.filter = "alpha(opacity="+ opacity +")";
} 
</script>

<table width="<?=$width?>" class="xectl" cellSpacing="0" cellpadding="0">
<colgroup span="6">
<col width="80px"></col>
<col width="120px"></col>
<col></col>
<col width="120px"></col>
<col width="70px"></col>
<col width="100px"></col>
</colgroup>

	<tr class="ctl_title">
	<td class="ctl_titleL"><? if($is_admin) {?><span style="cursor:pointer" onclick="CheckAll()" title="��ü����">��ȣ</span><?}else{?>��ȣ<?}?></td>
	<td colspan="2">���� <?=$total_num?></td>
	<td>�۾���</td>
	<td>��ȸ��</td>
	<td>��¥</td>
	</tr>
	<tr><td colspan="6" style="background-color:#EFF0ED; height:1px"></td></tr>