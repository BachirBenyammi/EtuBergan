<? include ("./test.php"); ?>
<html dir="rtl">
<head>
	<title>‘ﬂ—« - etubergan</title>
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
			 <a href="index.php">«·’›Õ… «·—∆Ì”Ì…</a >> ‘ﬂ—«
		</div><br>
		<p><h3 align="center">
			‰‘ﬂ—ﬂ ⁄·Ï «·ﬁÌ«„ »«·≈ ’«· »«·„Êﬁ⁄°<br>
			Ì„ﬂ‰ﬂ «·¬‰ «·⁄Êœ… ··’›Õ… «·—∆Ì”Ì….<br>
			</h3></p>
			<p align="center"><input class="Button" type="button" OnClick="javascript: redirect();" value="   —ÃÊ⁄   "> 					
		</p>
	</td>
  </tr>
	<? include ("footer.php"); ?>
</table>

</body>
</html>
