<? include ("./test.php"); ?>
<html dir="rtl">
<head>
	<title>����� ������ - etubergan</title>
	<? include ("./head.php"); ?>	
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
			 ������ ��������
		</div><br>
		<table  align="center" width="80%" height="80%">
		<tr>
		<td>
			<table width="80%" align="center">
				<tr><td><a href="_univ.php">�������</a><hr></td></tr>
				<tr><td align="left">�������ʡ �������� �������ɡ ����� � ���������</td></tr>
				<tr><td><a href="_bac.php">�����������</a><hr></td></tr>
				<tr><td align="left">����� � �������� ��������� (��������� � �������).</td></tr>
				<tr><td><a href="student.php">������</a><hr></td></tr>
				<tr><td align="left">������� ��� �����ɡ ������� �������ɡ ����������ǡ ...</td></tr>
				<tr><td><a href="users.php">����������</a><hr></td></tr>
				<tr><td align="left">������� ��� ���������� ������ʡ...</td></tr>		
				<tr><td><a href="stats.php">��������</a><hr></td></tr>
				<tr><td align="left">����� ���������� � �������</td></tr>	
			</table>
		</td></tr></table>
	</td>
  </tr>
	<? include ("footer.php"); ?>
</table>

</body>
</html>
