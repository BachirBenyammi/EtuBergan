<? include ("./test.php"); ?>
<html dir="rtl">
<head>
	<title>���� - etubergan</title>
	<? include ("./head.php"); ?>	
					<script language="javascript">	
					function redirect()
					{
							location.href = "index.php";
					}				
					</script>	
</head>

<body onLoad="debuteDate();debuteTemps()" onUnload="clearTimeout(ddate);clearTimeout(ttime)" bgcolor="#EEEEEE">
<table width="90%" align="center" height="600" cellspacing="0" background="./style/background.png">
<tr>
	<td colspan="2" valign="top" height="100">
		<? include ("top.php"); ?>
	</td>
</tr>
  <tr>
    <td valign="top">
      <? include("./menu.php"); ?>
    </td>
    <td width="80%" valign="top" bgcolor="green">
		<div id="footer" align="left">
			 <a href="index.php">������ ��������</a >> ����
		</div><br>
		<p><h3 align="center">
			����� ��� ������ �������� ������ڡ<br>
			����� ���� ������ ������ ��������.<br>
			</h3></p>
			<p align="center"><input class="Button" type="button" OnClick="javascript: redirect();" value="   ����   "> 					
		</p>
	</td>
  </tr>
	<? include ("footer.php"); ?>
</table>

</body>
</html>
