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

/* ~~ ���/�±� ���ñ� ~~ */
ul, ol, dl { /* ���������� �ٸ��Ƿ� ����� �е��� ������ 0���� �����ϴ� ���� ���� �����ϴ�. �ϰ����� ����, ���⿡�� �Ǵ� �����ϰ� �ִ� ��� �׸�(LI, DT, DD)���� ���ϴ� ũ�⸦ ������ �� �ֽ��ϴ�. ���� ��ü���� ���ñ⸦ ���� �ʴ� �� ���⿡�� ������ �۾��� .nav ��Ͽ� ��ܽ����� ǥ�õ˴ϴ�. */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* ���� ������ �����ϸ� ���Ե� div���� ������ �̽��������Ǵ� ������ ������ �� �ֽ��ϴ�. ������ �Ʒ��� ������ �̾����� ��ҿ��� �� ������ �����մϴ�. */
	padding-right: 0px;
	padding-left: 0px; /* div�� ���� �߰��ϴ� ��� div ���� �ִ� ����� ���鿡 �е��� �߰��ϸ� ���� �� ������ ���ŵ˴ϴ�. ���� �е��� �ִ� ��ø�� div�� ��ü �޼���� ����� ���� �ֽ��ϴ�. */
}
a img { /* �� ���ñ�� ��ũ�� �ѷ����� �̹��� �ֺ��� �ִ� �Ϻ� �������� ǥ�õ� �Ķ��� �⺻ �׵θ��� �����մϴ�. */
	border: none;
}

/* ~~ ����Ʈ ��ũ�� ��Ÿ�ϸ��� Ŀ�� ���� ȿ���� �����ϴ� ���ñ� �׷��� �����Ͽ� �� ������� ���� �־�� �մϴ�. ~~ */
a:link {color:#000; text-decoration:none;}
a:visited {color:#000; text-decoration:none; }
a:active {color:#999; text-decoration:none;}
a:hover {color:#999; text-decoration:none;}/* ~~�� ���� �� �����̳ʴ� �ٸ� div�� �ѷ��Դϴ�.~~ */
.container {
	width: 1024px;
	background-color: #FFF;
	margin: 0 0; /* ���� �ڵ� ��, ������ ����, ���̾ƿ� ��� ���� */
}

/* ~~ �Ӹ��ۿ��� ���� �������� �ʽ��ϴ�. ���̾ƿ��� ��ü ���� Ȯ��˴ϴ�. ����� ��ü �ΰ��� ��ü�Ǿ�� �ϴ� �̹��� �ڸ� ǥ���ڸ� �����մϴ�. ~~ */
.header {
	background-color: #FFFFFF;
}

/* ~~ �� �׸��� ���̾ƿ��� ���� ���Դϴ�. ~~ 

1) �е��� div�� ���� ��/�Ǵ� �Ʒ��ʿ��� ��ġ�˴ϴ�. �� div�� ���Ե� ����� ��� ���鿡 �е��� �ֽ��ϴ�. �̸� ���� "���� �� ����"���� ���ܵ˴ϴ�. div ��ü�� ���� �е� �Ǵ� �׵θ��� �߰��ϸ� *��ü* ���� ����� ���� ������ ���� �߰��˴ϴ�. div ���� ��ҿ��� �е��� �����ϰ�, �����ο� �ʿ��� �е��� ���� ���� ���·� ���ο� �� ��° div�� ��ġ�� ���� �ֽ��ϴ�. div ���� ��ҿ��� �е��� �����ϰ�, �����ο� �ʿ��� �е��� ���� ���� ���·� ���ο� �� ��° div�� ��ġ�� ���� �ֽ��ϴ�.

2) ��� �ε�ȭ�ʿ� ���� ���� ������ �������� �ʾҽ��ϴ�. ������ �߰��ؾ� �ϴ� ��쿡�� �ε�ȭ�ϴ� ������ ���鿡 ��ġ���� �ʵ��� �Ͻʽÿ�(��: ������ �ε�ȭ�� ������ div�� ������ ����). ��ſ� ���� �� �е��� ���� �� �ֽ��ϴ�. �� ��Ģ�� �����ؾ� �ϴ� div�� ���, �Ϻ� ������ Internet Explorer���� ������ �������� ���ԵǴ� ���׸� �ذ��ϱ� ���� div�� ��Ģ�� "display:inline" ������ �߰��ؾ� �մϴ�.

3) �������� Ŭ������ ���� �� ����� �� �����Ƿ�(���� ��ҿ� ���� Ŭ������ ������ �� �����Ƿ�), ���� ID ��� Ŭ���� �̸��� �����Ǿ����ϴ�. ���� ���, �ʿ��� ��� �� ���� ���̵�� div�� ������ �� �ֽ��ϴ�. ������ �� ���� ����ϴ� ��, ������� ȯ�� ������ �ش��ϴ� ��� �� ���̵�� div�� �ս��� ID�� ������ �� �ֽ��ϴ�.

4) nav�� ���� ��� �����ʿ� ���� �Ϸ��� ���, �̷��� ���� �ݴ� ����(��ü ���� ��� ��ü ������)���� �ε�ȭ�ϸ� �������� �������˴ϴ�. HTML �ҽ����� div�� �̸����� �ű��� �ʾƵ� �˴ϴ�.

*/

.content {

	padding: 0px 0;
	width: 780px;
	float: left;
}

/* ~~ �׷�ȭ�� �� ���ñ�� .content ���� ������ ����� �����մϴ�. ~~ */
.content ul, .content ol { 
	padding: 0 15px 15px 40px; /* �� �е��� �Ӹ����� ������ �е��� ���� �ܶ� ��Ģ�� �̷����մϴ�. �е��� ��Ͽ��� �ٸ� ��ҵ� ������ ���� �Ʒ��ʰ� �鿩���� ������ ���� ���ʿ� ��ġ�Ǿ����ϴ�. �е��� ���ϴ� ��� ������ �� �ֽ��ϴ�. */
}

/* ~~ Ž�� ��� ��Ÿ��(Spry�� ���� �̸� ������� �ö��̾ƿ� �޴��� ����ϱ�� ������ ��� ���ŵ� �� ����) ~~ */
ul.nav {
	list-style: none; /* ��� ǥ�� ��ȣ�� �����մϴ�. */
	border-top: 0px solid #666; /* ��ũ�� ���� �׵θ��� ����ϴ�. �ٸ� ��� �׸��� LI���� �Ʒ��� �׵θ��� ����Ͽ� ��ġ�˴ϴ�. */
	margin-bottom: 15px; /* �Ʒ� ������ ������̼� ���̿� ������ ����ϴ�. */
}
ul.nav li {
	border-bottom: px solid #666; /* ��ư ������ ����ϴ�. */
}
ul.nav a, ul.nav a:visited { /* �̷��� ���ñ⸦ �׷�ȭ�Ͽ� �湮�� ���Ŀ��� ��ũ�� ��ư ����� �����ϵ��� �մϴ�. */
	padding: 5px 5px 5px 15px;
	display: block; /* ��ũ�� ���� �Ӽ��� �����Ͽ� �̸� ������ ��ü LI�� ä�쵵�� �մϴ�. �̷��� �ϸ� ��ü ������ ���콺 Ŭ���� �����ϰ� �˴ϴ�. */
	width: 160px;  /*�� ���� IE6���� ��ü ��ư�� Ŭ���� �� �ֵ��� �մϴ�. IE6�� ������ �ʿ䰡 ���� ��쿡�� ������ �� �ֽ��ϴ�. ���̵�� �����̳��� ������ �� ��ũ�� �е��� ���������ν� �ùٸ� ���� ����մϴ�. */
	text-decoration: none;
	background-color: #C6D580;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* ���콺 �� Ű���� Ž������ ��� �� �ؽ�Ʈ ������ �����մϴ�. */
	background-color: #ADB96E;
	color: #FFF;
}

/* ~~ �ٴڱ� ~~ */
.footer {
	padding: 10px 0;
	background-color: #FFFFFF;
	position: relative;/* ����� ����� ���� IE6 hasLayout�� �����մϴ�. */
	clear: both; /* �� ����� �Ӽ��� ���� ������ �����ϴ� ��ġ�� .container�� �ν��ϵ��� �մϴ�. */
}

/* ~~ ��Ÿ �ε�/Ŭ���� ����� ~~ */
.fltrt {  /* �� Ŭ������ ���������� ������ ��Ҹ� �ε�ȭ�ϴ� �� ���� �� �ֽ��ϴ�. �ε�ȭ�� ��Ҵ� ���������� ���� �ִ� �ٸ� ����� ���ʿ� ��ġ�Ǿ�� �մϴ�. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* �� Ŭ������ ���������� ���� ��Ҹ� �ε�ȭ�ϴ� �� ���� �� �ֽ��ϴ�. �ε�ȭ�� ��Ҵ� ���������� ���� �ִ� �ٸ� ����� ���ʿ� ��ġ�Ǿ�� �մϴ�. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* #container���� #footer�� ���ŵǰų� ������ ��� <br /> �� Ŭ������ ������ �ε� div(#container ��) �ڿ� ���� ���� ��ҷ� �� div�� ��ġ�� �� �ֽ��ϴ�. */
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
   vertical-align:top;  
  }
  
 img
 {vertical-align:top;}
#apDiv1 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 1;
}
#apDiv2 {
	position: absolute;
	width: 251px;
	height: 28px;
	z-index: 1;
	left: 531px;
	top: 84px;
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
	
<body onLoad="MM_preloadImages('img/introbtnR.jpg','img/recommbtnR.jpg','img/eventbtnR.jpg','img/newsbtnR.jpg','img/commubtnR.jpg','img/supportbtnR.jpg')">
<div align=center>

<div class="container">
  <div class="header"> 
    <?print_outlogin("default","1","10");?>
    
<div block="button">
    <a href="product.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Product','','img/introbtnR.jpg',1)"><img src="img/introbtn.jpg" border = "0" width="172" height="50" id="Product"></a><a href="Recommand.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Recommand','','img/recommbtnR.jpg',1)"><img src="img/recommbtn.jpg" border = "0" width="170" height="50" id="Recommand"></a></a><a href="event.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Event','','img/eventbtnR.jpg',1)"><img src="img/eventbtn.jpg" border = "0" width="170" height="50" id="Event"></a><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('News','','img/newsbtnR.jpg',1)"><img src="img/newsbtn.jpg" name="News"  border = "0" width="170" height="50" id="News"></a><a href="community.php?str=http://chin1927.dothome.co.kr/bbs/zboard.php?id=Notice" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Community','','img/commubtnR.jpg',1)"><img src="img/commubtn.jpg"  border = "0" width="170" height="50" id="Community"></a><a href="support.php?str=http://chin1927.dothome.co.kr/bbs/zboard.php?id=FAQ" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Support','','img/supportbtnR.jpg',1)"><img src="img/supportbtn.jpg" border = "0" width="172" height="50" id="Support"></a></div></div>
    
    <img src="img/body/main_first.jpg" alt="" name="MainImage" width="1024" height="668" class="container" id="MainImage" margin=0 border="0"></span></p>
  <!-- end .container --></div>
</div>
</body>
</html>
