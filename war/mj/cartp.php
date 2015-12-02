   <?php
  	$type = $_GET['str'];
  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cart</title>

<Script language="Javascript">
 
function selfwin() 
{
	self.close();
	<? echo	"opener.location.href='cart.php?str=$type';"; ?> // 팝업 닫으면서 열릴 부모창의 경로
}
 </Script> 

</head>

<body>
<img src="img/CART.jpg" width="760" height="300" usemap="#Map" border="0" />
<map name="Map" id="Map">
<area shape="rect" coords="591,172,747,248" onclick="selfwin();" />
</map>
</body>
</html>
