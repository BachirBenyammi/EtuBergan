<? include ("./test.php"); ?>

<html dir="rtl">
<head>
<title>����� ������ - etubergan</title>
<? include ("head.php"); ?>	
					<script language="javascript">
					function deleteit()
					{
						return confirm('�� ��� ����� �� ��� �')					
					}		
					function trydeleteit()
					{
						if (deleteit())
							location.href = "del.php?type=visitors";
					}					
					</script>
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
      <?include("./menu.php")?>
    </td>
        <td width="80%" valign="top" bgcolor="green">
		<div id="footer" align="left">
			 <a href="index.php">������ ��������</a> >>
		</div> <p align="center"><br>
       ����� ������: 
      <p>
		<table border="1" align="center" cellspacing="0">
			<tr>
				<th class="th" > ��� </th>
				<th class="th" > ���� </th>						
				<th class="th" > ���� </th>
				<th class="th" > ��� </th>	
				<th class="th" > IP Adresse </th>	
				<th class="th" > ����� </th>
				<th class="th" > ���� ������� </th>			
				<th class="th" > ����� </th>
			</tr>
			<?
				include ("./connect.php");
				$sql = "select * from tb_visitors order by dt desc";
				$result = mysql_query($sql);	
				$nbr = mysql_num_rows($result);
				$i=0;
				while ($col=mysql_fetch_row($result))					
				{
					$i++;
					$page = $col[1];
					$link = $col[2];			
					$lang = $col[3];
					$ip_adresse = $col[4];	
					$browser = $col[5];	
					$os = $col[6];
					$dt = $col[7];
			?>										
			<tr>
				<td class="td" ><?=$i?></td>
				<td class="td" align="left"><?=$page?></td>
				<td class="td" ><?=$link?></td>
				<td class="td" ><?=$lang?></td>
				<td class="td"><?=$ip_adresse?></td>					
				<td class="td"><?=$browser?></td>								
				<td class="td" ><?=$os?></td>
				<td class="td" ><?=$dt?></td>
			</tr>	
			<?
				}
			?>	
		</table>
	  </p>
	  	<p align="center">��� ������: <?=$nbr?></p>
	  <p align="center">
			<input class="Button" type="button" OnClick="javascript: trydeleteit();" value="   ���   "> 
			<input class="Button" type="button" OnClick="javascript: history.go(-1);" value="   ����   ">
	  </p>	  
	 </td>
  </tr>
	<? include ("footer.php"); ?>   
</table>

</body>
</html>