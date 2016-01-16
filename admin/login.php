<?
	session_start();
	$output = "";
if (isset($act))
	if ($act=="login")
	{
		function allowentry($account, $password)
		{
			include("./connect.php");
			$sql = "SELECT account, password, level FROM tb_users WHERE account = '".$account."' and password='".$password."'";
			$result = mysql_query($sql);
			$rows = mysql_num_rows($result);
			while ($col=mysql_fetch_row($result))
			if ($col[2]==1)
				session_register("super");
			return ($rows==1);				
		}	
		if (allowentry($account, $password))
		{
			session_register("account"); 
			include("./connect.php");
			$sql = "INSERT into tb_access (account, dt, tm) values ('".$account."', now(), now())";
			$result = mysql_query($sql);
			header ("Location: index.php");
		}
		else
			$output = "בד םÊד ÇבÅÊÕÇב¡ ÇבÑÌÇÁ ÇבדÍÇזבÉ";
	}
?>
<html dir="rtl">
<head>
<title>בזÍÉ ÇבÊÍ‗ד - edubergan</title>
<? include ("head.php"); ?>	
</head>

<body>
<body bgcolor="#EEEEEE">
<table width="90%" align="center" height="610" cellspacing="0" background="./style/background.png">
<tr>
<td>
<br>
  <form name="form1" method="post" action="?act=login">
<div align="center">
   <img src="./style/logo.gif">
  <h1 style="font-family:Segoe UI; font-size: 24px">
	ÑÇÈØÉ ØבÈÉ ÈÑםÇה<br>
  ÅÒתדץזבףהת הת ÇץזÚתÒףÇדת הת ÇףÊת ÅÈףÑתÞףÇהת</h1>
</div>
<table align="center">
<tr>
<td>
  <div class="login_box" align="center">
  <table width="262" height="153" background="box.gif">
  <tr>
	<th width="52"></th>
	<th width="135"></th>
    <th width="53"></th>	
</tr>
  <tr>
    <td></td>
    <td><input type="text" name="account" /></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="password" name="password" /></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td align="center"><input class="Button_login" type="submit" value="  ÏÎזב  " /></td>
    <td></td>
  </tr>
  <tr>
    <td align="center" colspan="3"><font color="red"><? print $output; ?></font></td>
  </tr>   
</table>
</div>
</td>
</tr> 
</table>
  </form>
  </td></tr><? include ("footer.php"); ?></table>
</body>
</html>