  <? 
    $_zb_url = "http://chin1927.dothome.co.kr/bbs/";
    $_zb_path = "/host/home3/chin1927/html/bbs/";
    include $_zb_path."outlogin.php"; 
  ?>

<!doctype html>
<html>
<head>
<meta charset="euc-kr">
<!-- TemplateBeginEditable name="doctitle" -->
<title>MJ Homme</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background-color: #FFFFFF;
	margin: 0;
	padding: 0;
	color: #000;
}

/* ~~ 요소/태그 선택기 ~~ */
ul, ol, dl { /* 브라우저마다 다르므로 목록의 패딩과 여백을 0으로 지정하는 것이 가장 좋습니다. 일관성을 위해, 여기에서 또는 포함하고 있는 목록 항목(LI, DT, DD)에서 원하는 크기를 지정할 수 있습니다. 보다 구체적인 선택기를 쓰지 않는 한 여기에서 수행한 작업은 .nav 목록에 계단식으로 표시됩니다. */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* 위쪽 여백을 제거하면 포함된 div에서 여백이 이스케이프되는 문제를 방지할 수 있습니다. 나머지 아래쪽 여백은 이어지는 요소에서 이 문제를 보류합니다. */
	padding-right: 0px;
	padding-left: 0px; /* div에 직접 추가하는 대신 div 내에 있는 요소의 측면에 패딩을 추가하면 상자 모델 수학이 제거됩니다. 측면 패딩이 있는 중첩된 div를 대체 메서드로 사용할 수도 있습니다. */
}
a img { /* 이 선택기는 링크로 둘러싸인 이미지 주변에 있는 일부 브라우저에 표시된 파란색 기본 테두리를 제거합니다. */
	border: none;
}

/* ~~ 사이트 링크의 스타일링은 커서 놓기 효과를 생성하는 선택기 그룹을 포함하여 이 순서대로 남아 있어야 합니다. ~~ */

/* ~~이 고정 폭 컨테이너는 다른 div를 둘러쌉니다.~~ */
.container {
	width: 1024px;
	background-color: #FFFFFF;
	margin: 0 0; /* 측면 자동 값, 폭으로 연결, 레이아웃 가운데 정렬 */
}

/* ~~ 머리글에는 폭이 지정되지 않습니다. 레이아웃의 전체 폭이 확장됩니다. 연결된 자체 로고로 대체되어야 하는 이미지 자리 표시자를 포함합니다. ~~ */
.header {
	background-color: #FFFFFF;
}

/* ~~ 이 항목은 레이아웃에 대한 열입니다. ~~ 

1) 패딩은 div의 위쪽 및/또는 아래쪽에만 배치됩니다. 이 div에 포함된 요소의 경우 측면에 패딩이 있습니다. 이를 통해 "상자 모델 수학"에서 제외됩니다. div 자체에 측면 패딩 또는 테두리를 추가하면 *전체* 폭을 만들기 위해 정의한 폭에 추가됩니다. div 내의 요소에서 패딩을 제거하고, 디자인에 필요한 패딩과 폭이 없는 상태로 내부에 두 번째 div를 배치할 수도 있습니다. div 내의 요소에서 패딩을 제거하고, 디자인에 필요한 패딩과 폭이 없는 상태로 내부에 두 번째 div를 배치할 수도 있습니다.

2) 모두 부동화됨에 따라 열에 여백이 지정되지 않았습니다. 여백을 추가해야 하는 경우에는 부동화하는 방향의 측면에 배치하지 않도록 하십시오(예: 오른쪽 부동화로 설정된 div의 오른쪽 여백). 대신에 여러 번 패딩이 사용될 수 있습니다. 이 규칙을 무시해야 하는 div의 경우, 일부 버전의 Internet Explorer에서 여백이 이중으로 삽입되는 버그를 해결하기 위해 div의 규칙에 "display:inline" 선언을 추가해야 합니다.

3) 문서에서 클래스를 여러 번 사용할 수 있으므로(또한 요소에 여러 클래스를 적용할 수 있으므로), 열에 ID 대신 클래스 이름이 지정되었습니다. 예를 들어, 필요한 경우 두 개의 사이드바 div를 누적할 수 있습니다. 문서당 한 번만 사용하는 한, 사용자의 환경 설정에 해당하는 경우 이 사이드바 div를 손쉽게 ID로 변경할 수 있습니다.

4) nav를 왼쪽 대신 오른쪽에 오게 하려는 경우, 이러한 열을 반대 방향(전체 왼쪽 대신 전체 오른쪽)으로 부동화하면 역순으로 렌더링됩니다. HTML 소스에서 div를 이리저리 옮기지 않아도 됩니다.

*/
.sidebar {
	font:Verdana, Geneva, sans-serif;
	float: left;
	width:auto;
	background-color: #FFFFFF;
	padding-bottom: 0px;
	margin: 0;
}

a:link {color:#000; text-decoration:none;}
a:visited {color:#000; text-decoration:none; }
a:active {color:#999; text-decoration:none;}
a:hover {color:#999; text-decoration:none;}

.content {

	padding: 0px 0;
	width: 780px;
	float: left;
}

/* ~~ 그룹화된 이 선택기는 .content 영역 공간에 목록을 제공합니다. ~~ */
.content ul, .content ol { 
	padding: 0 15px 15px 40px; /* 이 패딩은 머리글의 오른쪽 패딩과 위의 단락 규칙을 미러링합니다. 패딩은 목록에서 다른 요소들 사이의 공간 아래쪽과 들여쓰기 생성을 위한 왼쪽에 배치되었습니다. 패딩은 원하는 대로 조정할 수 있습니다. */
}

/* ~~ 탐색 목록 스타일(Spry와 같이 미리 만들어진 플라이아웃 메뉴를 사용하기로 선택한 경우 제거될 수 있음) ~~ */
ul.nav {
	list-style: none; /* 목록 표시 기호를 제거합니다. */
	border-top: 0px solid #666; /* 링크의 위쪽 테두리를 만듭니다. 다른 모든 항목은 LI에서 아래쪽 테두리를 사용하여 배치됩니다. */
	margin-bottom: 15px; /* 아래 내용의 내비게이션 사이에 공간을 만듭니다. */
}
ul.nav li {
	border-bottom: px solid #666; /* 버튼 간격을 만듭니다. */
}
ul.nav a, ul.nav a:visited { /* 이러한 선택기를 그룹화하여 방문한 이후에도 링크가 버튼 모양을 유지하도록 합니다. */
	padding: 5px 5px 5px 15px;
	display: block; /* 링크에 블록 속성을 제공하여 이를 포함한 전체 LI를 채우도록 합니다. 이렇게 하면 전체 영역이 마우스 클릭에 반응하게 됩니다. */
	width: 160px;  /*이 폭은 IE6에서 전체 버튼을 클릭할 수 있도록 합니다. IE6를 지원할 필요가 없는 경우에는 제거할 수 있습니다. 사이드바 컨테이너의 폭에서 이 링크의 패딩을 제외함으로써 올바른 폭을 계산합니다. */
	text-decoration: none;
	background-color: #C6D580;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* 마우스 및 키보드 탐색기의 배경 및 텍스트 색상을 변경합니다. */
	background-color: #ADB96E;
	color: #FFFFFF;
}

/* ~~ 바닥글 ~~ */
.footer {
	padding: 10px 0;
	background-color: #FFFFFF;
	position: relative;/* 제대로 지우기 위한 IE6 hasLayout을 제공합니다. */
	clear: both; /* 이 지우기 속성은 열이 끝나고 포함하는 위치를 .container가 인식하도록 합니다. */
}

/* ~~ 기타 부동/클래스 지우기 ~~ */
.fltrt {  /* 이 클래스는 페이지에서 오른쪽 요소를 부동화하는 데 사용될 수 있습니다. 부동화된 요소는 페이지에서 옆에 있는 다른 요소의 앞쪽에 배치되어야 합니다. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* 이 클래스는 페이지에서 왼쪽 요소를 부동화하는 데 사용될 수 있습니다. 부동화된 요소는 페이지에서 옆에 있는 다른 요소의 앞쪽에 배치되어야 합니다. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* #container에서 #footer가 제거되거나 없어진 경우 <br /> 이 클래스는 마지막 부동 div(#container 내) 뒤에 오는 최종 요소로 빈 div에 배치될 수 있습니다. */
	clear:both;
	height:0;
	font-size: 0px;
	line-height: 0px;
}
a img {
   margin-left: 0px;
   margin-top: 0px;
   margin-right: 0px;
   margin-bottom: 0px;
   vertical-align:top
  }
  
img {
   margin-left: 0px;
   margin-top: 0px;
   margin-right: 0px;
   margin-bottom: 0px;
   vertical-align:top
  }
#Home
{display:block;
}



-->
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
</head>
	
<body onLoad="MM_preloadImages('img/recommbtnR.jpg','img/eventbtnR.jpg','img/newsbtnR.jpg','img/commubtnR.jpg','img/supportbtnR.jpg')">
<div align=center>

<div class="container">
  <div class="header">
    <?print_outlogin("default","1","10");?> <img src="img/introbtnR.jpg" border = "0" width="170" height="50" id="Product"><a href="Recommand.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Recommand','','img/recommbtnR.jpg',1)"><img src="img/recommbtn.jpg" border = "0" width="170" height="50" id="Recommand"></a><a href="event.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Event','','img/eventbtnR.jpg',1)"><img src="img/eventbtn.jpg" border = "0" width="170" height="50" id="Event"></a><a href="News.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('News','','img/newsbtnR.jpg',1)"><img src="img/newsbtn.jpg" name="News"  border = "0" width="170" height="50" id="News"></a><a href="community.php?str=http://chin1927.dothome.co.kr/bbs/zboard.php?id=Notice" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Community','','img/commubtnR.jpg',1)"><img src="img/commubtn.jpg"  border = "0" width="170" height="50" id="Community"></a><a href="support.php?str=http://chin1927.dothome.co.kr/bbs/zboard.php?id=FAQ" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Support','','img/supportbtnR.jpg',1)"><img src="img/supportbtn.jpg" border = "0" width="172" height="50" id="Support"></a></p>
  </div>
  <div class="sidebar"><!-- end .container -->
    <table width="175" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="169"><div align="left"></div></td>
      </tr>
      <tr>
        <td><div align="left"></div></td>
      </tr>
      <tr>
        <td><img src="img/submenu/SKIN-LOTION.jpg" width="171" height="25"></td>
      </tr>
      <tr>
        <td height="2"><img src="img/submenu/line.jpg" width="171" height="6" style="vertical-align:baseline"></td>
      </tr>
      <tr>
        <td><div align="left" style="font-size:14px"><a href="product.php" style="color:#ccc; text-decoration:none;" onMouseOver='this.style.color="#000"' onMouseOut='this.style.color="#ccc"'>Skin type</a></div></td>
      </tr>
      <tr>
        <td><div align="left" style="font-size:14px"><a href="productp.php" style="color:#ccc; text-decoration:none;" onMouseOver='this.style.color="#000"' onMouseOut='this.style.color="#ccc"'>Perfume type</a></div></td>
      </tr>
      <tr>
        <td><div align="left" style="font-size:14px">Viscosity type</div></td>
      </tr>
      <tr>
        <td><div align="left" style="font-size:14px">Price type</div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="26"><div align="left"><img src="img/submenu/sun_cream.jpg" width="171" height="25"></div></td>
      </tr>
      <tr>
        <td height="2"><img src="img/submenu/line.jpg" width="171" height="6" style="vertical-align:baseline"></td>
      </tr>
      <tr>
        <td><div align="left" style="font-size:14px">Skin type</div></td>
      </tr>
      <tr>
        <td><div align="left" style="font-size:14px">Perfume type</div></td>
      </tr>
      <tr>
        <td><div align="left" style="font-size:14px">Viscosity type</div></td>
      </tr>
      <tr>
        <td><div align="left" style="font-size:14px">Price type</div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><img src="img/submenu/humectant.jpg" alt="" width="171" height="25"></td>
      </tr>
      <tr>
        <td><img src="img/submenu/line.jpg" alt="" width="171" height="6" style="vertical-align:baseline"></td>
      </tr>
      <tr>
        <td><div align="left" style="font-size:14px">Skin type</div></td>
      </tr>
      <tr>
        <td><div align="left" style="font-size:14px">Perfume type</div></td>
      </tr>
      <tr>
        <td><div align="left" style="font-size:14px">Viscosity type</div></td>
      </tr>
      <tr>
        <td><div align="left" style="font-size:14px">Price type</div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><img src="img/submenu/pack.jpg" width="171" height="25"></td>
      </tr>
      <tr>
        <td><img src="img/submenu/line.jpg" width="171" height="6" style="vertical-align:baseline"></td>
      </tr>
      <tr>
        <td><div align="left" style="font-size:14px">Skin type</div></td>
      </tr>
      <tr>
        <td><div align="left" style="font-size:14px">Perfume type</div></td>
      </tr>
      <tr>
        <td><div align="left" style="font-size:14px">Viscosity type</div></td>
      </tr>
      <tr>
        <td><div align="left" style="font-size:14px">Price type</div></td>
      </tr>
    </table>
    <p class="sidebar">&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
  <div style="position:relative;top:0;left:0;">
  <div id="apDiv1" style="position: absolute; left: -345px; top: 320px" >
  <div align="left">
    <p>라네즈 스킨로션<br>
    피부노화 방지<br>
    트러블 방지</p>
  </div>
  </div>
  <div id="apDiv2" style="position: absolute; left: -100px; top: 320px">
        <div align="left">
          <p>끈적임 없는 상쾌함<br>
시원한 느낌의 향 함유<br>
지성피부를 위한 스킨</p>
        </div>
        </div>
        <div id="apDiv3" style="position: absolute; left: 145px; top: 320px">
        <div align="left">
        <p>스포츠형<br>
지성피부를 위하여 유분보다<br>
수분 함유량이 높음</p>
	</div>
      </div>  
         <div id="apDiv4" style="position: absolute; left: -345px; top: 730px">
        <div align="left">
        <p>고급 제품<br>
피부에 좋은 콜라겐 함유<br>
오래 지속되는 보습력</p>
	</div>
      </div>  
        <div id="apDiv5" style="position: absolute; left: -345px; top: 1275px" >
  <div align="left">
    <p>건성피부를 위한 스킨<br>
    트거나, 갈라진 피부 복원<br>
    피부 트러블 억제</p>
  </div>
  </div>
  <div id="apDiv6" style="position: absolute; left: -100px; top: 1275px">
        <div align="left">
          <p>유분 함유량 높음<br>
자외선 차단 보호 기능<br>
오래 지속되는 보습력</p>
        </div>
        </div>
        <div id="apDiv7" style="position: absolute; left: 145px; top: 1275px">
        <div align="left">
        <p>남성 고급 셋트<br>
건성/복합성 모두 사용가능<br>
대용량</p>
	</div>
      </div>  
         <div id="apDiv8" style="position: absolute; left: -345px; top: 1685px">
        <div align="left">
        <p>깔끔한 느낌<br>
건성 피부를 위한 젤 성분의<br>
오래 지속되는 보습제 함유</p>
	</div>
      </div> 
         <div id="apDiv13" style="position: absolute; left: -100px; top: 1685px">
        <div align="left">
        <p>남성 고급 셋트<br>
수분크림 포함<br>
빠른 피보 복원력</p>
	</div>
      </div> 
      <div id="apDiv9" style="position: absolute; left: -345px; top: 2230px" >
  <div align="left">
    <p>복합성 피부를 위한 셋트 <br>
    100% 미네랄 함유<br>
    피부 트러블 억제</p>
  </div>
  </div>
  <div id="apDiv10" style="position: absolute; left: -100px; top: 2230px">
        <div align="left">
          <p>고급 불가리 제품<br>
건성에도 사용가능<br>
오래 지속되는 보습력</p>
        </div>
        </div>
        <div id="apDiv11" style="position: absolute; left: 145px; top: 2230px">
        <div align="left">
        <p>복합성을 위한 스킨<br>
        피부 트러블 억제 효과<br>
유분 조절 기능</p>
	</div>
      </div>  
         <div id="apDiv12" style="position: absolute; left: -345px; top: 2640px">
        <div align="left">
        <p>깔끔한 느낌<br>
피부 트러블 억제 효과<br>
오래 지속되는 보습력</p>
	</div>
      </div> 

      </div>      
      <div align="left"></div>  
  <table width="250" border="0">
    <tr>
      <td colspan="3"></td>
    </tr>
    <tr>
      <td colspan="3"><a id="jisung"></a>&nbsp;SKIN TYPE ( <a href="#jisung">지성</a> / <a href="#gunsung">건성</a> / <a href="#bokhap">복합성</a> )</td>
    </tr>
    <tr>
      <td colspan="3"><div align="left">&nbsp;SKIN/LOTION - 지성</div></td>
      </tr>
    <tr>
      <td><img src="img/produck/PRODUCT_8.jpg" width="244" height="408" border="0" usemap="#Map"></td>
      <td><img src="img/produck/PRODUCT_9.jpg" width="244" height="408" border="0" usemap="#Map2"></td>
      <td><img src="img/produck/PRODUCT_14.jpg" width="244" height="408" border="0" usemap="#Map3"></td>
    </tr>
    <tr>
      <td><img src="img/produck/PRODUCT_10.jpg" width="244" height="408"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
</table>
  <div align="center">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><a id="gunsung"></a></p>
    <table width="250" border="0">
      <tr>
        <td colspan="3"><div align="left">&nbsp;SKIN TYPE ( <a href="#jisung">지성</a> / <a href="#gunsung">건성</a> / <a href="#bokhap">복합성</a> )</div></td>
        </tr>
      <tr>
        <td colspan="3"><div align="left">&nbsp;SKIN/LOTION - 건성</div></td>
        </tr>
      <tr>
        <td><img src="img/produck/PRODUCT_4.jpg" width="244" height="408"></td>
        <td><img src="img/produck/PRODUCT_11.jpg" width="244" height="408"></td>
        <td><img src="img/produck/PRODUCT_13.jpg" width="244" height="408"></td>
        </tr>
      <tr>
        <td><img src="img/produck/PRODUCT_6.jpg" width="244" height="408"></td>
        <td><img src="img/produck/PRODUCT_15.jpg" width="244" height="408"></td>
        <td>&nbsp;</td>
        </tr>
</table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><a id="bokhap"></a></p>
    <table width="250" border="0">
      <tr>
        <td colspan="3"><div align="left">&nbsp;SKIN TYPE ( <a href="#jisung">지성</a> / <a href="#gunsung">건성</a> / <a href="#bokhap">복합성</a> )</div></td>
      </tr>
      <tr>
        <td colspan="3"><div align="left">&nbsp;SKIN/LOTION - 복합성</div></td>
      </tr>
      <tr>
        <td><img src="img/produck/PRODUCT_5.jpg" width="244" height="408"></td>
        <td><img src="img/produck/PRODUCT_1.jpg" width="244" height="408"></td>
        <td><img src="img/produck/PRODUCT_11.jpg" width="244" height="408"></td>
      </tr>
      <tr>
        <td><img src="img/produck/PRODUCT_2.jpg" width="244" height="408"></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
</div>
  <p>&nbsp;</p>
  <p><img src="img/footer.jpg" width="1024" height="100" border="0" usemap="#MapMap">
    <map name="MapMap">
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
  </p>
</div>
</div>

<map name="Map">
  <area shape="rect" coords="13,373,117,396" href="http://skinnkorea.com/product/-LANEIGE--HOMME-COOL-SPORTS-SKIN/APLA01AA0003114/?main_cate_no=ABAC0000&display_group=1" target="new">
  <area shape="rect" coords="125,373,229,395" href="javascript:;" onclick="window.open('cartp.php?str=1','name','resizable=no status=no menubar=no toolbar=no location=no width=760 height=320');return false">
</map>

<map name="Map2">
  <area shape="rect" coords="13,373,118,395" href="http://www.gsshop.com/prd/prd.gs?prdid=7214127&lseq=361480" target="new">
  <area shape="rect" coords="126,372,230,395" href="javascript:;" onclick="window.open('cartp.php?str=2','name','resizable=no status=no menubar=no toolbar=no location=no width=760 height=320');return false">
</map>

<map name="Map3">
  <area shape="rect" coords="13,372,118,395" href="http://www.labseries.co.kr/product/8305/21793/whatsnew/MAX-LS-LIGHT-MOISTURE-LOTION/index.tmpl" target="new">
  <area shape="rect" coords="125,373,229,396" href="javascript:;" onclick="window.open('cartp.php?str=3','name','resizable=no status=no menubar=no toolbar=no location=no width=760 height=320');return false">
</map>
</body>
</html>




