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

/////
function On_sj(obj,table){
	if(document.getElementById){
		var el  = document.getElementById(obj);
		var cat = "mdiv" + table;
		var ar  = document.getElementById(cat).getElementsByTagName("div");
		if(el.style.display != "block"){
			for (var i=0; i<ar.length; i++){
				var options = "options" + table
				if (ar[i].className== options)
					ar[i].style.display = "none";
				el.style.display = "block";
			}
		}else{
				el.style.display = "none";
		}		    
	}
}
/////
var Selected = ""
function SelectIcon(WhichIcon){
  if (Selected != "") {
    //Selected.style.borderColor = "#FFFFFF";
    Selected.style.color = "";
	Selected.style.fontWeight = "";
  }
  Selected = WhichIcon;
  WhichIcon.style.fontWeight = "bold";
  WhichIcon.style.color = "#FF3300";
}
</script>

<table width="<?=$width?>" class="xectl" cellSpacing="0" cellpadding="0" id="mdivmenu2" >
<colgroup span="3">
<col width="80px"></col>
<col></col>
<col width="100px"></col>
</colgroup>

	<tr class="ctl_title">
	<td class="ctl_titleL"><? if($is_admin) {?><span style="cursor:pointer" onclick="CheckAll()" title="전체선택">번호</span><?}else{?>번호<?}?></td>
	<td>제목 <?=$total_num?></td>
	<td>날짜</td>
	</tr>