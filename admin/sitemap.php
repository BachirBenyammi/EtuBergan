<? include ("./test.php"); ?>
<html dir="rtl">
<head>
	<title>ЮбэиЩ Чсуцок - etubergan</title>
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
			 <a href="index.php">ЧсенЭЩ ЧсбЦэгэЩ</a >> ЮбэиЩ Чсуцок
		</div>
		<p align="center">ЮбэиЩ Чсуцок</p>
		<table align="center" width="60%">
		<tr></td>
		<ul>
		<li><a href="index.php">[ ЧсбЦэгммэЩ ]</a></li>
		<li><a href="_univ.php">[ ЧсмЬЧуммкЩ ]</a>
		<ul>
			<li><a href="./univ.php">[ ЧсЬЧукЧЪ ]</a></li>		
			<li><a href="./city.php">[ ЧсХоЧуЧЪ ]</a></li>		
			<li><a href="./branches.php">[ ЧсдкШ" ]</a></li>		
			<li><a href="./levels.php">[ ЧсугЪцэЧЪ ]</a></li>		
		</ul></li>
		<li><a href="_bac.php">[ ЧсШЧпЧсцбэЧ ]</a>
		<ul>
			<li><a href="./bac_branches.php">[ ЧсдкШ ]</a></li>		
			<li><a href="./school.php">[ ЧсуЯЧбг ]</a></li>				
		</ul></li>
		<li><a href="student.php">[ ЧсммимсШммЩ ]</a></li>
		<li><a href="users.php">[ ЧсугЪЮЯуэф ]</a></li>
		<li><a href="stats.php">[ ХЭеЧЦэЧЪ ]</a></li>
		<li><a href="contact.php">[ ХЪеЧс ]</a></li>
		<li><a href="trouble.php">[ ХШсЧл кф Юсс ]</a></li>
		<li><a href="sitemap.php">[ ЮбэиЩ Чсуцок ]</a></li>
		</ul>
		</td></tr></table>
		<p align="center"><input class="Button" type="button" OnClick="javascript: redirect();" value="   бЬцк   "></p>
		<br>
	</td>
  </tr>
	<? include ("footer.php"); ?>
</table>

</body>
</html>
