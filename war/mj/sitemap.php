  <? 
    $_zb_url = "http://chin1927.dothome.co.kr/bbs/";
    $_zb_path = "/host/home3/chin1927/html/bbs/";
    include $_zb_path."outlogin.php"; 
  ?>
  
 <?php
  	$type = $_GET['str'];
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

/* ~~�� ���� �� �����̳ʴ� �ٸ� div�� �ѷ��Դϴ�.~~ */
.container {
	width: 1024px;
	background-color: #FFFFFF;
	margin: 0 0; /* ���� �ڵ� ��, ������ ����, ���̾ƿ� ��� ���� */
}

/* ~~ �Ӹ��ۿ��� ���� �������� �ʽ��ϴ�. ���̾ƿ��� ��ü ���� Ȯ��˴ϴ�. ����� ��ü �ΰ�� ��ü�Ǿ�� �ϴ� �̹��� �ڸ� ǥ���ڸ� �����մϴ�. ~~ */
.header {
	background-color: #FFFFFF;
}

/* ~~ �� �׸��� ���̾ƿ��� ���� ���Դϴ�. ~~ 

1) �е��� div�� ���� ��/�Ǵ� �Ʒ��ʿ��� ��ġ�˴ϴ�. �� div�� ���Ե� ����� ��� ���鿡 �е��� �ֽ��ϴ�. �̸� ���� "���� �� ����"���� ���ܵ˴ϴ�. div ��ü�� ���� �е� �Ǵ� �׵θ��� �߰��ϸ� *��ü* ���� ����� ���� ������ ���� �߰��˴ϴ�. div ���� ��ҿ��� �е��� �����ϰ�, �����ο� �ʿ��� �е��� ���� ���� ���·� ���ο� �� ��° div�� ��ġ�� ���� �ֽ��ϴ�. div ���� ��ҿ��� �е��� �����ϰ�, �����ο� �ʿ��� �е��� ���� ���� ���·� ���ο� �� ��° div�� ��ġ�� ���� �ֽ��ϴ�.

2) ��� �ε�ȭ�ʿ� ���� ���� ������ �������� �ʾҽ��ϴ�. ������ �߰��ؾ� �ϴ� ��쿡�� �ε�ȭ�ϴ� ������ ���鿡 ��ġ���� �ʵ��� �Ͻʽÿ�(��: ������ �ε�ȭ�� ������ div�� ������ ����). ��ſ� ���� �� �е��� ���� �� �ֽ��ϴ�. �� ��Ģ�� �����ؾ� �ϴ� div�� ���, �Ϻ� ������ Internet Explorer���� ������ �������� ���ԵǴ� ���׸� �ذ��ϱ� ���� div�� ��Ģ�� "display:inline" ������ �߰��ؾ� �մϴ�.

3) �������� Ŭ������ ���� �� ����� �� �����Ƿ�(���� ��ҿ� ���� Ŭ������ ������ �� �����Ƿ�), ���� ID ��� Ŭ���� �̸��� �����Ǿ����ϴ�. ���� ���, �ʿ��� ��� �� ���� ���̵�� div�� ������ �� �ֽ��ϴ�. ������ �� ���� ����ϴ� ��, ������� ȯ�� ������ �ش��ϴ� ��� �� ���̵�� div�� �ս��� ID�� ������ �� �ֽ��ϴ�.

4) nav�� ���� ��� �����ʿ� ���� �Ϸ��� ���, �̷��� ���� �ݴ� ����(��ü ���� ��� ��ü ������)���� �ε�ȭ�ϸ� �������� �������˴ϴ�. HTML �ҽ����� div�� �̸����� �ű��� �ʾƵ� �˴ϴ�.

*/
.sidebar {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	float: left;
	width:auto;
	background-color: #FFFFFF;
	padding-bottom: 0px;
	margin: 0;
}



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
	display: block; /* ��ũ�� ��� �Ӽ��� �����Ͽ� �̸� ������ ��ü LI�� ä�쵵�� �մϴ�. �̷��� �ϸ� ��ü ������ ���콺 Ŭ���� �����ϰ� �˴ϴ�. */
	width: 160px;  /*�� ���� IE6���� ��ü ��ư�� Ŭ���� �� �ֵ��� �մϴ�. IE6�� ������ �ʿ䰡 ���� ��쿡�� ������ �� �ֽ��ϴ�. ���̵�� �����̳��� ������ �� ��ũ�� �е��� ���������ν� �ùٸ� ���� ����մϴ�. */
	text-decoration: none;
	background-color: #C6D580;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* ���콺 �� Ű���� Ž������ ��� �� �ؽ�Ʈ ������ �����մϴ�. */
	background-color: #ADB96E;
	color: #FFFFFF;
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
a:link {color:#000; text-decoration:none;}
a:visited {color:#000; text-decoration:none; }
a:active {color:#999; text-decoration:none;}
a:hover {color:#999; text-decoration:none;}
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

iframe {
	position: absolute;
	left: 0px;
	top: 2px;
	width: 1024px;
	height: 2000px;
	background: none;
	border: 0px solid #A0A0A0;
}
#apDiv1 {
	position: absolute;
	width: 721px;
	height: 206px;
	z-index: 1;
	left: -350px;
	top: -270px;
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
	
<body onLoad="MM_preloadImages('img/recommbtnR.jpg','img/eventbtnR.jpg','img/newsbtnR.jpg','img/commubtnR.jpg','img/supportbtnR.jpg','img/introbtnR.jpg')">
<div align=center>

<div class="container">
  <div class="header">
    <p><?print_outlogin("default","1","10");?><a href="product.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Product','','img/introbtnR.jpg',1)"><img src="img/introbtn.jpg" alt="" width="172" height="50" id="Product" border = "0"></a><a href="Recommand.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Recommand','','img/recommbtnR.jpg',1)"><img src="img/recommbtn.jpg" border = "0" width="170" height="50" id="Recommand"></a><a href="event.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Event','','img/eventbtnR.jpg',1)"><img src="img/eventbtn.jpg" border = "0" width="170" height="50" id="Event"></a><a href="News.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('News','','img/newsbtnR.jpg',1)"><img src="img/newsbtn.jpg" name="News"  border = "0" width="170" height="50" id="News"></a><a href="community.php?str=http://chin1927.dothome.co.kr/bbs/zboard.php?id=Notice" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Community','','img/commubtnR.jpg',1)"><img src="img/commubtn.jpg"  border = "0" width="170" height="50" id="Community"></a><a href="community.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Community','','img/commubtnR.jpg',1)"></a><a href="support.php?str=http://chin1927.dothome.co.kr/bbs/zboard.php?id=FAQ" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Support','','img/supportbtnR.jpg',1)"><img src="img/supportbtn.jpg" border = "0" width="172" height="50" id="Support"></a></p>
    <p> <img src="img/sitemap.jpg" width="745" height="692" border="0" usemap="#Map2">
      <map name="Map2">
        <area shape="rect" coords="41,164,166,191" href="product.php">
        <area shape="rect" coords="285,163,415,191" href="recommand.php">
        <area shape="rect" coords="550,165,669,191" href="event.php">
        <area shape="rect" coords="25,214,109,235" href="product.php">
        <area shape="rect" coords="270,212,351,234" href="recommand.php">
        <area shape="rect" coords="530,213,629,234" href="event.php">
        <area shape="rect" coords="45,423,159,451" href="News.php">
        <area shape="rect" coords="25,475,115,498" href="News.php">
        <area shape="rect" coords="282,421,415,452" href="http://chin1927.dothome.co.kr/community.php?str=http://chin1927.dothome.co.kr/bbs/zboard.php?id=Notice">
        <area shape="rect" coords="269,476,345,495" href="http://chin1927.dothome.co.kr/community.php?str=http://chin1927.dothome.co.kr/bbs/zboard.php?id=Notice">
        <area shape="rect" coords="271,515,361,536" href="http://chin1927.dothome.co.kr/community.php?str=http://chin1927.dothome.co.kr/bbs/zboard.php?id=Community">
        <area shape="rect" coords="268,551,346,575" href="http://chin1927.dothome.co.kr/community.php?str=http://chin1927.dothome.co.kr/bbs/zboard.php?id=Review">
        <area shape="rect" coords="553,424,666,449" href="http://chin1927.dothome.co.kr/support.php?str=http://chin1927.dothome.co.kr/bbs/zboard.php?id=FAQ">
        <area shape="rect" coords="529,476,654,498" href="http://chin1927.dothome.co.kr/support.php?str=http://chin1927.dothome.co.kr/bbs/zboard.php?id=FAQ">
        <area shape="rect" coords="529,512,615,537" href="http://chin1927.dothome.co.kr/support.php?str=http://chin1927.dothome.co.kr/bbs/zboard.php?id=Qna">
        <area shape="rect" coords="529,554,594,576" href="http://chin1927.dothome.co.kr/support.php?str=FormMail.php">
      </map>
    </p>
    <div style="position:relative;top:0;left:0;"></div>
  </div><img src="img/footer.jpg" width="1024" height="100" border="0" usemap="#Map">
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
  </p>
</div>
</div>
</body>
</html>




