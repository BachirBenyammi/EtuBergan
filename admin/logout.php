<?
	session_start();
	session_unset();
	session_destroy();
?>

<html dir="rtl">
<head>
<title>��� ������� - edubergan</title>
<? include ("head.php"); ?>	
</head>

<body>
<body bgcolor="#EEEEEE">
<table width="90%" align="center" height="610" cellspacing="0" background="./style/background.png">
<tr>
<td>
<br>

<div align="center">
   <img src="./style/logo.gif">
  <h1 style="font-family:Segoe UI; font-size: 24px">
	����� ���� �����<br>
  ���������� �� ���������� �� ���� ����������</h1>
</div>

	<table align="center">
		<tr>
			<td valign="center" align="center">
				<table cellpadding="0" cellspacing="0" align="center">
					<tr>
						<td>
							<br>
							<h2>��� �� ��� �������</h2>
							<hr>
							<p>������ ������� <a class=link href="login.php">���� �������</a><br>
							������ ������ �������� <a class=link href="../index.php">������ ��������</a> </p>
							<hr>
						</td>
					</tr>
				</table>				
			</td>
		</tr>
	</table>
  </td></tr><? include ("footer.php"); ?></table>
</body>
</html>