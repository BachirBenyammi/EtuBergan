<? include ("./test.php"); ?>
<html dir="rtl">
<head>
	<title>����� ������ - etubergan</title>
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
			 <a href="index.php">������ ��������</a >> ����� ������
		</div>
		<p align="center">����� ������</p>
		<table align="center" width="60%">
		<tr></td>
		<ul>
		<li><a href="index.php">[ ���������� ]</a></li>
		<li><a href="_univ.php">[ ���������� ]</a>
		<ul>
			<li><a href="./univ.php">[ �������� ]</a></li>		
			<li><a href="./city.php">[ �������� ]</a></li>		
			<li><a href="./branches.php">[ �����" ]</a></li>		
			<li><a href="./levels.php">[ ��������� ]</a></li>		
		</ul></li>
		<li><a href="_bac.php">[ ����������� ]</a>
		<ul>
			<li><a href="./bac_branches.php">[ ����� ]</a></li>		
			<li><a href="./school.php">[ ������� ]</a></li>				
		</ul></li>
		<li><a href="student.php">[ ����������� ]</a></li>
		<li><a href="users.php">[ ���������� ]</a></li>
		<li><a href="stats.php">[ �������� ]</a></li>
		<li><a href="contact.php">[ ����� ]</a></li>
		<li><a href="trouble.php">[ ����� �� ��� ]</a></li>
		<li><a href="sitemap.php">[ ����� ������ ]</a></li>
		</ul>
		</td></tr></table>
		<p align="center"><input class="Button" type="button" OnClick="javascript: redirect();" value="   ����   "></p>
		<br>
	</td>
  </tr>
	<? include ("footer.php"); ?>
</table>

</body>
</html>
