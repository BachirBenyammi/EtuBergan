<? include ("./test.php"); ?>
<html dir="rtl">
<head>
<title>�������� - etubergan</title>
<? include ("head.php"); ?>	
</head>

<body onLoad="debuteDate();debuteTemps()" onUnload="clearTimeout(ddate);clearTimeout(ttime)" bgcolor="#EEEEEE">
<table width="90%" align="center" height="610" cellspacing="0" background="./style/background.png">
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
			 <a href="index.php">������ ��������</a> >> ��������
		</div>
		<p align="center"><br>��������</p>
		<p>
			<? include ("./connect.php");?>
			<table width="80%" align="center">
				<tr>
					<?  
							$sql = "select num from tb_universities";
							$result = mysql_query($sql);	
							$nbr = mysql_num_rows($result);
					?>
					<td class="td"><a href="univ.php">�������� (<?=$nbr?>)</a></td>
					<?  
							$sql = "select num from tb_cities";
							$result = mysql_query($sql);	
							$nbr = mysql_num_rows($result);
					?>
					<td class="td"><a href="city.php">�������� �������� (<?=$nbr?>)</a></td>					
				</tr>	
				<tr>
					<?  
							$sql = "select num from tb_schools";
							$result = mysql_query($sql);	
							$nbr = mysql_num_rows($result);
					?>
					<td class="td"><a href="school.php">�������� ��������� (<?=$nbr?>)</a></td>
					<?  
							$sql = "select num from tb_students";
							$result = mysql_query($sql);	
							$nbr = mysql_num_rows($result);
					?>
					<td class="td"><a href="student.php">������ (<?=$nbr?>)</a></td>					
				</tr>					
				<tr>
					<? if (session_is_registered("super"))
						{
							$sql = "select num from tb_access";
							$result = mysql_query($sql);	
							$nbr = mysql_num_rows($result);
						}
					?>
						<td class="td"><a href="records.php?user=nul">������� (<?=$nbr?>)</a></td>
						<td class="td"></td>
				</tr>
				<tr>
					<?  
							$sql = "select account from tb_users";
							$result = mysql_query($sql);	
							$nbr = mysql_num_rows($result);
					?>
					<td class="td"><a href="users.php">�������� (<?=$nbr?>)</a></td>						
					<?  
							$sql = "select num from tb_visitors";
							$result = mysql_query($sql);	
							$nbr = mysql_num_rows($result);
					?>
					<td class="td"><a href="visitors.php">���� (<?=$nbr?>)</a></td>
				</tr>
				<tr><td></td></tr>
			</table>
		</p>
	</td>
  </tr>
	<? include ("footer.php"); ?>   
</table>

</body>
</html>