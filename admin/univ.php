<? include ("./test.php"); ?>
<?
	if (isset($act))
	{
		if ($act=="new")
		{
?>
			<html dir="rtl">
			<head>
			<title> ÅÖÇİÉ ÌÇãÚÉ - etubergan</title>
<? include ("head.php"); ?>	
					<script language="javascript">
					function validate()
					{
						if (!document.form1.name.value) 
						{
							alert("íÌÈ ßÊÇÈÉ ÅÓã ÇáÌÇãÚÉ");
							return false;
						}
						if (!document.form1.wilaya.value) 
						{
							alert("íÌÈ ÊÍÏíÏ æáÇíÉ ãä ÇáŞÇÆãÉ");
							return false;
						}						
						document.form1.submit();
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
			 <a href="index.php">ÇáÕİÍÉ ÇáÑÆíÓíÉ</a> >> <a href="_univ.php">ÇáÌÇãÚÉ</a> >> <a href="univ.php">ÇáÌÇãÚÇÊ</a> >> ÅÖÇİÉ ÌÇãÚÉ
		</div><br> 
					<p align="center">ÅÖÇİÉ ÌÇãÚÉ</p>
				  <p> 
				  <form name="form1" method="post" action="add.php?type=univ">
					<table width="75%" align="center" border="0" cellspacing="0">
					  <tr> 
						
            			<td class="td" ><strong>ÅÓã:</strong></td>
						<td class="td" ><input name="name" type="text" id="name"></td>
					  </tr>
					  <tr> 
            			<td class="td" ><strong>ÚäæÇä:</strong></td>
						<td class="td" ><textarea name="adresse" cols="35" rows="5" id="adresse"></textarea></td>
					  </tr>
					  <tr> 
            			<td class="td" ><strong>åÇÊİ:</strong></td>
						<td class="td" ><input name="tel" type="text" id="tel" dir="ltr"> (00-00-00-000)</td>
					  </tr>
					  <tr> 
            			<td class="td" ><strong>İÇßÓ:</strong></td>
						<td class="td" ><input name="fax" type="text" id="fax" dir="ltr"> (00-00-00-000)</td>
					  </tr>
					  <tr> 
            			<td class="td" ><strong>ãæŞÚ ÇáæíÈ:</strong></td>
						<td class="td" ><input name="website" type="text" value="http://" id="website" dir="ltr"></td>
					  </tr>					  
					  <tr> 
            			<td class="td" ><strong>æáÇíÉ:</strong></td>
						<td class="td" >	
							<select name="wilaya">
								<option value=""></option>
							<?
								include("./connect.php");
								$sql = "select * from tb_wilayas";
								$result = mysql_query($sql);
								
								while ($col=mysql_fetch_row($result))					
								{
							?>
								<option value="<? print $col[0];?>"><? print $col[1];?></option>
								<?}?>
							</select>
						<td class="td" >
					  </tr>
					</table>
					<p align="center"> 
					  <input class="Button" type="button" value="   ÅÏÎÇá   " onClick="javascript: return validate();"> 
					  <input class="Button" type="reset" value="   ãÓÍ   "> 
					  <input class="Button" type="button" OnClick="javascript: history.go(-1);" value="   ÑÌæÚ   ">
					</p>
				  </form>
				  </td>
			  </tr>
			  <? include ("footer.php"); ?>
			</table>
			
			</body>
			</html>
			<?
		}
		else if ($act=="view")
		{
			include("./connect.php");
			$sql = "SELECT * FROM tb_universities, tb_wilayas WHERE code = wilaya and num=".$univ;
			$result = mysql_query($sql);
			
			while ($col=mysql_fetch_row($result))					
			{
				$name = $col[1];	
				$adresse = $col[2];	
				$tel = $col[3];	
				$fax = $col[4];	
				$website = $col[5];	
				$wilaya = $col[8];		
			}
		?>

			<html dir="rtl">
			<head>
			<title><?=$name?> - etubergan</title>
<? include ("head.php"); ?>				
					<script language="javascript">
					function deleteit()
					{
						return confirm('åá ÃäÊ ãÊÃßÏ ãä Ğáß ¿')					
					}		
					function redirect()
					{
						if (deleteit())
							location.href = "del.php?type=univ&univ=<?=$univ?>";
					}	
					function studentlist()
					{
							location.href = "univ.php?act=list&univ=<?=$univ?>";
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
			 <a href="index.php">ÇáÕİÍÉ ÇáÑÆíÓíÉ</a> >> <a href="_univ.php">ÇáÌÇãÚÉ</a> >> <a href="univ.php">ÇáÌÇãÚÇÊ</a> >> ãÚÇíäÉ ÌÇãÚÉ
		</div><br> 
				  <p align="center">ãÚÇíäÉ ÌÇãÚÉ</p>
				  <p> 
					<table width="75%" align="center" border="0" cellspacing="0">
					  <tr> 
						<td class="td" ><strong>ÅÓã:</strong></td>
						<td class="td" ><a href="<?=$website?>" target="_blank"><?=$name?></a></td>
					  </tr>
					  <tr> 
						<td class="td" ><strong>ÚäæÇä:</strong></td>
						<td class="td" ><?=$adresse?></td>
					  </tr>
					  <tr> 
						<td class="td" ><strong>åÇÊİ:</strong></td>
						<td class="td" ><?=$tel?></td>
					  </tr>
					  <tr> 
						<td class="td" ><strong>İÇßÓ:</strong></td>
						<td class="td" ><?=$fax?></td>
					  </tr>
					  <tr> 
						<td class="td" ><strong>ãæŞÚ ÇáæíÈ:</strong></td>
						<td class="td" ><a href="<?=$website?>" target="_blank"><?=$website?></a></td>
					  </tr>					  
					  <tr> 
						<td class="td" ><strong>æáÇíÉ:</strong></td>
						<td class="td" ><?=$wilaya?></td>
					  </tr>
					</table>
					</p>
					<p align="center">
						<input class="Button" type="button" OnClick="javascript: redirect();" value="   ÍĞİ   "> 
						<input class="Button" type="button" OnClick="javascript: studentlist();" value="   ÇáØáÈÉ   "> 
						<input class="Button" type="button" OnClick="javascript: history.go(-1);" value="   ÑÌæÚ   ">
					</p>
				  </td>
			  </tr>
			  <? include ("footer.php"); ?>
			</table>			
			</body>
			</html>
		<?
		}
		else if ($act=="list")
		{
				include ("./connect.php");		
				$sql = "SELECT name from tb_universities where num=".$univ;
				$result = mysql_query($sql);
				$name="";
				while ($col=mysql_fetch_row($result))
					$name= $col[0];
	?>
<html dir="rtl">
<head>
<title>ØáÈÉ ÌÇãÚÉ <?=$name?> - etubergan</title>
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
      <?include("./menu.php")?>
    </td>
        <td width="80%" valign="top" bgcolor="green">
		<div id="footer" align="left">
			 <a href="index.php">ÇáÕİÍÉ ÇáÑÆíÓíÉ</a> >> <a href="_univ.php">ÇáÌÇãÚÉ</a> >> <a href="univ.php">ÇáÌÇãÚÇÊ</a> >> ØáÈÉ ÌÇãÚÉ
		</div> 
	<p align="center"><br>
       ØáÈÉ ÌÇãÚÉ <?=$name?> : 
	  </p>
      <p>
		<table border="1" align="center" width="80%" cellspacing="0">
			<tr>
				<th class="th" > ÅÓã </th>
				<th class="th" > ÊÇÑíÎ ÇáÅÒÏíÇÏ </th>	
				<th class="th" > ÈáÏíÉ </th>					
				<th class="th" > ÇáÓäÉ </th>
				<th class="th" > ãÚÇíäÉ </th>
				<th class="th" > ÊÚÏíá </th>				
			</tr>
			<?
				include ("./connect.php");
				$sql = "select num, firstName , lastName, dtBearth, ville, year from tb_students, tb_university, tb_univ_year where numuniv=".$univ." and num_univ=info_univ and student=tb_students.num";
				$result = mysql_query($sql);	
		
				while ($col=mysql_fetch_row($result))					
				{
					$num = $col[0];			
					$name = $col[1] . " " . $col[2];	
					$dtbearth = $col[3];	
					$ville = $col[4];	
					$year = $col[5];
			?>										
			<tr>
				<td class="td" ><a href="student.php?act=view&num=<?=$num?>"><?=$name?></a></td>
				<td class="td" ><?=$dtbearth?></td>
				<td class="td" ><?=$ville?></td>
				<td class="td" ><?=$year?></td>
				<td class="td" ><a href="student.php?act=view&num=<?=$num?>">ãÚÇíäÉ</a></td>
				<td class="td" ><a href="student.php?act=update&num=<?=$num?>">ÊÚÏíá</a></td>
			</tr>	
			<?
				}
			?>	
		</table>
	  </p>
	  <p align="center">
		<?
			include ("./connect.php");
			$sql = "SELECT count(num) from tb_university, tb_univ_year, tb_students where numuniv =".$univ." and num_univ=info_univ and student=num";
			$result = mysql_query($sql);
			$nbr = mysql_num_rows($result);
		?>				
		ÚÏÏ ÇáØáÈÉ: <?=$nbr?>
	  </p>
		<p align="center">
			<input class="Button" type="button" OnClick="javascript: history.go(-1);" value="   ÑÌæÚ   ">
		</p>	  
	 </td>
  </tr>
	<? include ("footer.php"); ?>   
</table>

</body>
</html>
	
	<?
		}
	}		
	else
	{
	?>
	<html dir="rtl">
<head>
<title>ÇáÌÇãÚÇÊ - etubergan</title>
<? include ("head.php"); ?>	
					<script language="javascript">
					function redirect()
					{
							location.href = "./univ.php?act=new";
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
			 <a href="index.php">ÇáÕİÍÉ ÇáÑÆíÓíÉ</a> >> <a href="_univ.php">ÇáÌÇãÚÉ</a> >> ŞÇÆãÉ ÇáÌÇãÚÇÊ
		</div> <p align="center"><br>
       ŞÇÆãÉ ÇáÌÇãÚÇÊ: 
	   <input class="Button" type="button" OnClick="javascript: redirect();" value="   ÅÖÇİÉ   "> </p>
      <p>
		<table border="1" align="center" width="80%" cellspacing="0">
			<tr>
				<th class="th" > ÅÓã </th>
				<th class="th" > æáÇíÉ </th>
				<th class="th" > ÇáØáÈÉ </th>
				<th class="th" > ãÚÇíäÉ </th>								
			</tr>
			<?
				include ("./connect.php");
				$sql = "select num, name, title from tb_universities, tb_wilayas where wilaya = code order by name desc";
				$result = mysql_query($sql);	
		
				while ($col=mysql_fetch_row($result))					
				{
					$num = $col[0];			
					$name = $col[1];	
					$wilaya = $col[2];
			?>										
			<tr>
				<td class="td" ><a href="univ.php?act=view&univ=<?=$num?>"><?=$name?></a></td>
				<td class="td" ><?=$wilaya?></td>
				<td class="td" ><a href="univ.php?act=list&univ=<?=$num?>">ÇáØáÈÉ</a></td>
				<td class="td" ><a href="univ.php?act=view&univ=<?=$num?>">ãÚÇíäÉ</a></td>
			</tr>	
			<?
				}
			?>	
		</table>
	  </p>
	 </td>
  </tr>
	<? include ("footer.php"); ?>   
</table>

</body>
</html>

	<?
	}
	?>