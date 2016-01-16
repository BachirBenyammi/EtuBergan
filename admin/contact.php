<? include ("./test.php"); ?>
<html dir="rtl">
<head>
	<title>≈ ’«· - etubergan</title>
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
			 <a href="index.php">«·’›Õ… «·—∆Ì”Ì…</a >> ≈ ’«·
		</div><br>
		<p align="center">≈ ’«·</a>
		<p>		
			<form action="add.php?type=contact" method="post">
			<table width="50%" align="center">
				<tr><td class="td" >«·≈”„:</td><td class="td" ><input name="name" id="name"><td class="td" ></tr>
				<tr><td class="td" >«·»—Ìœ «·≈»ﬂ —Ê‰Ì:</td><td class="td" ><input name="email" id="email"><td class="td" ></tr>
				<tr><td class="td" > ⁄·Ìﬁ« :</td>
				<td class="td" >
					<textarea name="comments" cols="30" rows="5" id="comments"></textarea>
				<td class="td" ></tr>
			</table>
			<p align="center">
				<input class="Button" type="button" OnClick="javascript: history.go(-1);" value="   —ÃÊ⁄   "> 
				<input class="Button" type="submit" value="   ≈—”«·   "> 
				<input class="Button" type="reset" value="   ≈·€«¡   ">
			</p>			
			</form>
		</p>
	</td>
  </tr>
	<? include ("footer.php"); ?>
</table>

</body>
</html>
