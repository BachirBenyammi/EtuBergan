<? include ("./test.php"); ?>
<html dir="rtl">
<head>
	<title> ”ÃÌ·«  - etubergan</title>
	<? include ("head.php"); ?>	
					<script language="javascript">			
					function deleteit()
					{
						return confirm('Â· √‰  „ √ﬂœ „‰ –·ﬂ ø')					
					}		
					function redirect()
					{
						if (deleteit())
							location.href = "del.php?type=record&user=<?=$user?>";
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
			 <a href="index.php">«·’›Õ… «·—∆Ì”Ì…</a> >>  ”ÃÌ·« 
		</div> <p align="center"><br>
        ”ÃÌ·« : 
		<? if ($user != "nul") {?>
		<a href="users.php?act=view&user=<?=$user?>"><?=$user?></a>
		<?}?>
      <p>
		<table border="1" align="center" width="80%" cellspacing="0">
			<tr>
				<th class="th" > —ﬁ„ </th>
				<? if ($user == "nul") {?>
				<th class="th" > „” Œœ„ </th>
				<?}?>
				<th class="th" >  «—ÌŒ </th>								
				<th class="th" >  ÊﬁÌ  </th>
			</tr>
			<?
				include ("./connect.php");
				if ($user == "nul")
					$sql = "SELECT * FROM tb_access order by dt desc, tm desc";
				else
					$sql = "SELECT * FROM tb_access WHERE account='".$user."' order by dt desc, tm desc";					
				$result = mysql_query($sql);			
				$nbr = mysql_num_rows($result);
				$i=0;
				while ($col=mysql_fetch_row($result))					
				{
					$i++;
					$acct = $col[1];	
					$tm = $col[3];
					$dt = $col[2];					
			?>										
			<tr>
				<td class="td" ><?=$i?></td>
				<? if ($user == "nul"){ ?>
				<td class="td" ><a href="users.php?act=view&user=<?=$acct?>"><?=$acct?></a></td>
				<?}?>				
				<td class="td" ><?=$dt?></td>
				<td class="td" ><?=$tm?></td>
			</tr>	
			<?
				}
			?>	
		</table>
	  </p>
	  <p align="center">⁄œœ «· ”ÃÌ·« : <?=$nbr?></p>
	  <p align="center">
			<input class="Button" type="button" OnClick="javascript: redirect();" value="   Õ–›   "> 
			<input class="Button" type="button" OnClick="javascript: history.go(-1);" value="   —ÃÊ⁄   ">
	  </p>
	 </td>
  </tr>
	<? include ("footer.php"); ?>   
</table>

</body>
</html>