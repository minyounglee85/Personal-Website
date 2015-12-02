  <? 
    $_zb_url = "http://chin1927.dothome.co.kr/bbs/";
    $_zb_path = "/host/home3/chin1927/html/bbs/";
    include $_zb_path."outlogin.php"; 
  ?>
<style type="text/css">
.apDivclass{
	width: 1024px;
	background-color: #FFF;
	margin: auto auto auto; /* 측면 자동 값, 폭으로 연결, 레이아웃 가운데 정렬 */
}
#apDiv1 {
	position:relative;
	width: 1024px;
	height: 500px;
	z-index: 1;
	left: 0px;
	top: 0px;
}
#apDiv2 {
	position:absolute;
	width: 162px;
	height: 105px;
	z-index:auto;
	left: 0px;
	top: 0px;
}
#apDiv3 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 1;
	left: 141px;
	top: 226px;
}
</style>
<?print_outlogin("default","1","10");?>


<a href="product.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Product','','img/introbtnR.jpg',1)"><img src="img/introbtn.jpg" border = "0" width="172" height="50" id="Product"></a><a href="Recommand.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Recommand','','img/recommbtnR.jpg',1)"><img src="img/recommbtn.jpg" border = "0" width="170" height="50" id="Recommand"></a></a><a href="event.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Event','','img/eventbtnR.jpg',1)"><img src="img/eventbtn.jpg" border = "0" width="170" height="50" id="Event"></a><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('News','','img/newsbtnR.jpg',1)"><img src="img/newsbtn.jpg" name="News"  border = "0" width="170" height="50" id="News"></a><a href="community.php?str=http://chin1927.dothome.co.kr/bbs/zboard.php?id=Notice" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Community','','img/commubtnR.jpg',1)"><img src="img/commubtn.jpg"  border = "0" width="170" height="50" id="Community"></a><a href="support.php?str=http://chin1927.dothome.co.kr/bbs/zboard.php?id=FAQ" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Support','','img/supportbtnR.jpg',1)"><img src="img/supportbtn.jpg" border = "0" width="172" height="50" id="Support"></a></div></div>

<div align="center">
<div style="position:relative;top:0;left:0;">
<div class="apDivclass">

<div id="apDiv1" style="position:absolute"><img src="img/login/Login.png" width="1024" height="484" usemap="#Map" border="0" />
  <map name="Map" id="Map">
    <area shape="rect" coords="357,271,432,294" href="http://chin1927.dothome.co.kr/bbs/member_join.php?group_no=1" />
    <area shape="poly" coords="451,381" href="#" />
    <area shape="rect" coords="418,395,447,408" href="event.php" />
  </map>
</div>
  <div id="apDiv2" style="position: absolute; left: 3px; top: 120px" ><?print_outlogin("nzeo","1","10");?></div>
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
<p><img src="img/footer.jpg" width="1024" height="100" border="0" usemap="#MapMap" />
    <map name="MapMap" id="MapMap">
      <area shape="rect" coords="205,42,239,54" href="http://chin1927.dothome.co.kr/" />
      <area shape="rect" coords="400,40,475,55" href="support.php?str=FormMail.php" />
      <area shape="rect" coords="850,43,885,78" href="http://www.facebook.com" target="new" />
      <area shape="rect" coords="893,44,928,77" href="http://www.twitter.com" target="new" />
      <area shape="rect" coords="939,43,972,76" href="http://www.me2day.net" target="new" />
      <area shape="rect" coords="619,41,669,54" href="javascript:;" onclick="window.open('privacy.html','name','resizable=no status=no menubar=no toolbar=no location=no scrollbars = yes width=500 height=600');return false" />
      <area shape="rect" coords="205,56,263,69" href="javascript:;" onclick="window.open('company.html','name','resizable=no status=no menubar=no toolbar=no location=no scrollbars = yes width=750 height=750');return false" />
      <area shape="rect" coords="402,56,465,69" href="javascript:;" onclick="window.open('map.html','name','resizable=no status=no menubar=no toolbar=no location=no scrollbars = yes width=700 height=650');return false" />
      <area shape="rect" coords="620,55,727,70" href="javascript:;" onclick="window.open('term.html','name','resizable=no status=no menubar=no toolbar=no location=no scrollbars = yes width=500 height=600');return false" />
      <area shape="rect" coords="619,71,674,83" href="sitemap.php" />
    </map>
  </p>
  
</div>
</div>
</div>




