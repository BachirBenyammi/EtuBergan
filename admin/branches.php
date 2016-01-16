<? include ("./test.php"); ?>
<?
	if (isset($act))
	{
		if ($act=="new")
		{
?>
			<html dir="rtl">
			<head>
				<title> ÅÖÇİÉ ÔÚÈÉ - etubergan</title>
				<? include ("head.php"); ?>	
			<script language="javascript">
					function validate()
					{
						if (!document.form1.title.value) 
						{
							alert("íÌÈ ßÊÇÈÉ ÚäæÇä ááÔÚÈÉ");
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
			 <a href="index.php">ÇáÕİÍÉ ÇáÑÆíÓíÉ</a> >> <a href="_univ.php">ÇáÌÇãÚÉ</a> >> <a href="branches.php">ÇáÔÚÈ</a> >> ÅÖÇİÉ ÔÚÈÉ
		</div><br> 
					<p align="center">ÅÖÇİÉ ÔÚÈÉ</p>
				  <p> 
				  <form name="form1" method="post" action="add.php?type=branch">
					<table class="table" width="75%" align="center" border="0" cellspacing="0">
					  <tr> 
            			<td class="td" ><strong>ÊÑãíÒ:</strong></td>
						<td class="td" ><input name="code" type="text" id="code"></td>
					  </tr>					
					  <tr> 
            			<td class="td" ><strong>ÚäæÇä:</strong></td>
						<td class="td" ><input name="title" type="text" id="title"></td>
					  </tr>
					  <tr> 
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
		else if ($act=="list")
		{
				include ("./connect.php");		
				$sql = "SELECT title from tb_branches where num=".$num;
				$result = mysql_query($sql);
				$name="";
				while ($col=mysql_fetch_row($result))
					$name= $col[0];
	?>
<html dir="rtl">
<head>
	<title>ØáÈÉ ÔÚÈÉ <?=$name?> - etubergan</title>
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
			 <a href="index.php">ÇáÕİÍÉ ÇáÑÆíÓíÉ</a> >> <a href="_univ.php">ÇáÌÇãÚÉ</a> >> <a href="branches.php">ÇáÔÚÈ</a> >> ØáÈÉ ÔÚÈÉ
		</div> 
	<p align="center"><br>
       ØáÈÉ ÔÚÈÉ <?=$name?> : 
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
				$sql = "select num, firstName , lastName, dtBearth, ville, year from tb_students, tb_university, tb_univ_year where numuniv=info_univ and student=tb_students.num order by firstName asc";
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
			$sql = "SELECT count(num) from tb_university, tb_univ_year, tb_students where bronche =".$num." and num_univ=info_univ and student=num";
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
	<title>ÔÚÈ ÇáÌÇãÚÉ - etubergan</title>
	<? include ("head.php"); ?>	
					<script language="javascript">
					function redirect()
					{
							location.href = "./branches.php?act=new";
					}
					function deleteit()
					{
						return confirm('åá ÃäÊ ãÊÃßÏ ãä Ğáß ¿')					
					}		
					function trydeleteit(link)
					{
						if (deleteit())
							location.href = link;
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
			 <a href="index.php">ÇáÕİÍÉ ÇáÑÆíÓíÉ</a> >> <a href="_univ.php">ÇáÌÇãÚÉ</a> >> ÇáÔÚÈ
		</div> <p align="center"><br>
       ÔÚÈ ÇáÌÇãÚÉ:
	   <input class="Button" type="button" OnClick="javascript: redirect();" value="   ÅÖÇİÉ   "> </p>
      <p>
		<table border="1" align="center" width="80%" cellspacing="0">
			<tr>
				<th class="th" > ÊÑãíÒ </th>
				<th class="th" > ÚäæÇä </th>								
				<th class="th" > ÇáØáÈÉ </th>
				<th class="th" > ÍĞİ </th>
			</tr>
			<?
				include ("./connect.php");
				$sql = "select num, code, title from tb_branches order by title asc";
				$result = mysql_query($sql);	
		
				while ($col=mysql_fetch_row($result))					
				{
					$num = $col[0];
					$code = $col[1];
					$title = $col[2];			
			?>										
			<tr>
				<td class="td" ><?=$code?></td>
				<td class="td" ><?=$title?></td>
				<td class="td" ><a href="branches.php?act=list&num=<?=$num?>">ÇáØáÈÉ</a></td>
				<td class="td" ><a href OnClick="javascript: return trydeleteit('del.php?type=branch&num=<?=$num?>');" >ÍĞİ</a></td>
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