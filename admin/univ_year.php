<? include ("./test.php"); ?>
<?
	if (isset($act))
	{
		if ($act=="new")
		{
?>
			<html dir="rtl">
			<head>
				<title> ≈÷«›… ”‰… œ—«”Ì… - etubergan</title>
				<? include ("head.php"); ?>				
					<script language="javascript">
					function validate()
					{
						if (!document.form1.bronche.value)
						{
							alert("ÌÃ»  ÕœÌœ «·‘⁄»…");
							return false;
						}						
						if (!document.form1.level.value)
						{
							alert("ÌÃ»  ÕœÌœ «·„” ÊÏ «·Ã«„⁄Ì");
							return false;
						}						
						if (!document.form1.numuniv.value)
						{
							alert("ÌÃ»  ÕœÌœ «·Ã«„⁄…");
							return false;
						}					
						if (!document.form1.numcity.value) 
						{
							alert("ÌÃ»  ÕœÌœ «·≈ﬁ«„… «·Ã«„⁄Ì…");
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
							<?
								include("./connect.php");
								$sql = "select firstName, lastName, nmFather from tb_students where num=".$num;
								$result = mysql_query($sql);
								
								$firstName = "";
								$lastName = "";
								$nmFather ="";
									
								while ($col=mysql_fetch_row($result))					
								{
									$firstName = $col[0];
									$lastName = $col[1];
									$nmFather = $col[2];
							}?>							
		<div id="footer" align="left">
		
			 <a href="index.php">«·’›Õ… «·—∆Ì”Ì…</a> >> <a href="student.php">«·ÿ·»…</a> >> <a href="student.php?act=view&num=<?=$num?>"><? print $firstName." ".$lastName." ".$nmFather;?></a> >> <a href="univ_year.php?num=<?=$num?>">«·”‰Ê«  «·œ—«”Ì…</a>>> ≈÷«›… ”‰… œ—«”Ì…
		</div><br> 
					<p align="center">≈÷«›… ”‰… œ—«”Ì…</p> 
					<p>				
				  <form name="form1" method="post" action="add.php?type=univ_year&num=<?=$num?>">
				  <table width="75%" align="center" border="0" cellspacing="0">
				  <tr>
				  <td colspan="2">
					<table align="center">		
					  <tr> 
            			<td class="td"><strong>«·ÿ«·»:</strong></td>
						<td class="td">	
							<a href="student.php?act=view&num=<?=$num?>"><? print $firstName." ".$lastName." ".$nmFather;?></a>
						</td>
					  </tr>
					  <tr> 
            			<td class="td" ><strong>«·”‰… «·œ—«”Ì…:</strong></td>
						<td class="td" >	
							<select name="univ_year">
							<?
								for ($i=1995; $i<=2020; $i++)
								{?>
								<option value="<? print $i;?>" <? if ($i == date("Y")) print " selected";?>><? print $i." - ".($i-1)?></option>
								<?}?>
							</select>
						</td>
					  </tr>
					  </table>
					  <br>
					  </td>
					  <tr>
						<td class="td" valign="top">
							<table align="center">
								<tr><th class="th" colspan="2">«·Ã«„⁄…</th></tr>
								<tr>
									<td><strong>—ﬁ„ «· ”ÃÌ·:</strong></td>
									<td><input name="inscrit_num" type="text" id="inscrit_num"></td>
								</tr>
								<tr>
									<td><strong>«·‘⁄»…:</strong></td>
									<td>
									<select name="bronche">
										<option value=""></option>
										<?
										include("./connect.php");
										$sql = "select * from tb_branches";
										$result = mysql_query($sql);
								
										while ($col=mysql_fetch_row($result))					
										{	
										?>
										<option value="<? print $col[0];?>"><? print $col[2];?></option>
										<?}?>
									</select>
									</td>									
								</tr>								
								<tr>
									<td><strong>«·≈Œ ’«’:</strong></td>
									<td><input name="speciality" type="text" id="speciality"></td>
								</tr>								
								<tr>
									<td><strong>«·„” ÊÏ:</strong></td>
									<td>
									<select name="level">
										<option value=""></option>
										<?
										include("./connect.php");
										$sql = "select num, title from tb_univ_levels";
										$result = mysql_query($sql);
								
										while ($col=mysql_fetch_row($result))					
										{	
										?>
										<option value="<? print $col[0];?>"><? print $col[1];?></option>
										<?}?>
									</select>
									</td>
								</tr>
								<tr>
									<td><strong>Ã«„⁄…:</strong></td>
									<td>	
									<select name="numuniv">
										<option value=""></option>
										<?
										include("./connect.php");
										$sql = "select num, name from tb_universities";
										$result = mysql_query($sql);
								
										while ($col=mysql_fetch_row($result))					
										{	
										?>
										<option value="<? print $col[0];?>"><? print $col[1];?></option>
										<?}?>
									</select>
									</td>
								</tr>								
								<tr>
									<td><strong>„·«ÕŸ« :</strong></td>
									<td><textarea name="obs" cols="20" rows ="3" id="obs"></textarea></td>
								</tr>								
							</table>
						</td>
						<td class="td" valign="top">
							<table align="center">
								<tr><th class="th" colspan="2">«·≈ﬁ«„…<th class="th" ></tr>
								<tr> 
									<td class="td" ><strong>‰Ê⁄Ì… «·≈ﬁ«„…:</strong></td>
									<td class="td" >
										<select name="intern">
											<option value="2">œ«Œ·Ì</option>
											<option value="1">Œ«—ÃÌ</option>																						
										</select>
									</td>
								</tr>								
								<tr>
									<td><strong>€—›…:</strong></td>
									<td><input name="room" type="text" id="room"></td>
								</tr>
								<tr>
									<td><strong>”⁄… «·€—›…:</strong></td>
									<td><input name="nbr" type="text" value="0" id="nbr"></td>
								</tr>								
								<tr>
									<td><strong>Ã‰«Õ:</strong></td>
									<td><input name="suite" type="text" id="suite"></td>
								</tr>								
								<tr>
									<td><strong>„Ã„⁄:</strong></td>
									<td><input name="complex" type="text" id="complex"></td>
								</tr>								
								<tr>
									<td><strong>≈ﬁ«„…:</strong></td>
									<td>	
									<select name="numcity">
										<option value=""></option>
										<?
										include("./connect.php");
										$sql = "select num, name from tb_cities";
										$result = mysql_query($sql);
								
										while ($col=mysql_fetch_row($result))					
										{	
										?>
										<option value="<? print $col[0];?>"><? print $col[1];?></option>
										<?}?>
									</select>
									</td>
								</tr>								
							</table>						
						</td>
					  </table>
					<p align="center"> 
					  <input class="Button" type="button" value="   ≈œŒ«·   " onClick="javascript: return validate();"> 
					  <input class="Button" type="reset" value="   „”Õ   "> 
					  <input class="Button" type="button" OnClick="javascript: history.go(-1);" value="   —ÃÊ⁄   ">
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
		else if ($act="view")
		{
			include("./connect.php");
			$sql = "SELECT firstName, lastName, nmFather FROM tb_students WHERE num = ".$num;
			$result = mysql_query($sql);
			
			while ($col=mysql_fetch_row($result))					
			{
				$firstName = $col[0];
				$lastName = $col[1];
				$nmFather = $col[2];
			}
			
			$sql = "SELECT inscrit_num, speciality, tb_branches.title, tb_univ_levels.title, obs, numuniv, tb_universities.name FROM tb_univ_year, tb_university, tb_universities, tb_univ_levels, tb_branches WHERE student = ".$num." and info_univ = num_univ and year =".$year." and level = tb_univ_levels.num and tb_branches.num = tb_university.bronche and tb_universities.num = numuniv";
			$infouniv = mysql_query($sql);
			$num_info_univ = mysql_num_rows($infouniv);

			while ($col=mysql_fetch_row($infouniv))					
			{
				$inscrit_num = $col[0];
				$speciality  = $col[1];
				$bronche = $col[2];
				$level = $col[3];
				$obs  = $col[4];
				$numuniv  = $col[5];
				$info_univ  = $col[6];
			}
			
			$sql = "SELECT room, suite, complex, nbr, intern, numcity, tb_cities.name FROM tb_univ_year, tb_city, tb_cities WHERE student = ".$num." and info_city = num_city and year =".$year." and num = numcity";
			$infocity = mysql_query($sql);
			$num_info_city = mysql_num_rows($infocity);

			while ($col=mysql_fetch_row($infocity))					
			{
				$room = $col[0];
				$suite  = $col[1];
				$complex = $col[2];
				$nbr = $col[3];
				$intern = $col[4];
				$numcity  = $col[5];
				$info_city  = $col[6];
			}			
		?>

			<html dir="rtl">
			<head>
				<title> „⁄«Ì‰… «·”‰… «·œ—«”Ì… <?=($year-1). "-" . $year?> - etubergan</title>
				<? include ("head.php"); ?>				
					<script language="javascript">
					function deleteit()
					{
						return confirm('Â· √‰  „ √ﬂœ „‰ –·ﬂ ø')					
					}		
					function redirect()
					{
						if (deleteit())
							location.href = "del.php?type=univ_year&num=<?=$num?>&year=<?=$year?>";
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
			 <a href="index.php">«·’›Õ… «·—∆Ì”Ì…</a> >> <a href="student.php">«·ÿ·»…</a> >> <a href="student.php?act=view&num=<?=$num?>"><? print $firstName." ".$lastName." ".$nmFather;?></a> >> <a href="univ_year.php?num=<?=$num?>">«·”‰Ê«  «·œ—«”Ì…</a>>> „⁄«Ì‰… ”‰… œ—«”Ì…
		</div><br> 
				  <p align="center"> „⁄«Ì‰… «·”‰… «·œ—«”Ì… <?=($year-1)."-".$year?>
					<br>					
					<b>«·ÿ«·»:</b> <a href="student.php?act=view&num=<?=$num;?>">
										<? 
											print $lastName." ".$firstName;
											if ($nmFather) print " »‰ ".$nmFather;
										?>
									</a><br>
				  <p> 
				  <table width="90%" align="center" border="0" cellspacing="0">
				  <tr>
					<td width="50%" valign="top">
					<table border="0" cellspacing="0" align="center" width="100%">
					<th class="th" colspan=2">«·Ã«„⁄…</th>
					<? if ($num_info_univ) 
					{?>					
					  <tr> 
						<td class="td" ><strong>—ﬁ„ «· ”ÃÌ·:</strong></td>
						<td class="td" ><?=$inscrit_num?></td>
					  </tr>
					  	<tr> 
						<td class="td" ><strong>‘⁄»…:</strong></td>
						<td class="td" ><?=$bronche?></td>
					  </tr>						  
						<tr> 
						<td class="td" ><strong>≈Œ ’«’:</strong></td>
						<td class="td" ><?=$speciality?></td>
					  </tr>		
						<tr> 
						<td class="td" ><strong>„” ÊÏ:</strong></td>
						<td class="td" ><?=$level?></td>
					  </tr>	
					  	<tr> 
						<td class="td" ><strong>Ã«„⁄…:</strong></td>
						<td class="td" ><a href="univ.php?act=view&univ=<?=$numuniv?>"><?=$info_univ?></a></td>
					  </tr>	
						<tr> 
						<td class="td" ><strong>„·«ÕŸ« :</strong></td>
						<td class="td" ><?=$obs?></td>
					  </tr>	
					<?
					}
					else print "<tr><td class='td' ><b>·« „⁄·Ê„«   –ﬂ— </b></td></tr>";
					?>			
					</table>
					</td>					
					<td class="td"  valign="top">
					<table border="0" cellspacing="0" align="center" width="100%">
					<th class="th"  colspan=2">«·≈ﬁ«„…</th>
					<? if ($num_info_city) 
					{?>				
					  <tr> 
						<td class="td" ><strong>‰Ê⁄Ì… «·≈ﬁ«„…:</strong></td>
						<td class="td" >
							<? ($intern == 2)? print "œ«Œ·Ì": print "Œ«—ÃÌ"; ?></td>
					  </tr>						
					  <tr> 
						<td class="td" ><strong>€—›…:</strong></td>
						<td class="td" ><?=$room?></td>
					  </tr>
					  <tr> 
						<td class="td" ><strong>”⁄… «·€—›…:</strong></td>
						<td class="td" ><?=$nbr?></td>
					  </tr>					  
						<tr> 
						<td class="td" ><strong>Ã‰«Õ:</strong></td>
						<td class="td" ><?=$suite?></td>
					  </tr>		
					  	<tr> 
						<td class="td" ><strong>„Ã„⁄:</strong></td>
						<td class="td" ><?=$complex?></td>
					  </tr>						  
						<tr> 
						<td class="td" ><strong>≈ﬁ«„…:</strong></td>
						<td class="td" ><a href="city.php?act=view&city=<?=$numcity?>"><?=$info_city?></a></td>
					  </tr>						  
					<?
					}
					else print "<tr><td class='td' ><b>·« „⁄·Ê„«   –ﬂ— </b></td></tr>";
					?>					  
					</table>					
					</td>
					<tr>									
				  </td>
			  </tr>
			</table>			
			</p>
			<p align="center">
				<input class="Button" type="button" OnClick="javascript: redirect();" value="   Õ–›   "> 
				<input class="Button" type="button" OnClick="javascript: history.go(-1);" value="   —ÃÊ⁄   ">
			</p>
			</form>
			</td></tr>
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
<title>«·”‰Ê«  «·œ—«”Ì… - etubergan</title>
<? include ("head.php"); ?>	
					<script language="javascript">
					function redirect()
					{
							location.href = "./univ_year.php?act=new&num=<?=$num?>";
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
							<?
								include("./connect.php");
								$sql = "select firstName, lastName, nmFather from tb_students where num=".$num;
								$result = mysql_query($sql);
								
								$firstName = "";
								$lastName = "";
								$nmFather = "";									
								while ($col=mysql_fetch_row($result))					
								{
									$firstName = $col[0];
									$lastName = $col[1];
									$nmFather = $col[2];
							}									
						?>			
		<div id="footer" align="left">
			 <a href="index.php">«·’›Õ… «·—∆Ì”Ì…</a> >> <a href="student.php">«·ÿ·»…</a> >> <a href="student.php?act=view&num=<?=$num?>"><? print $firstName." ".$lastName." ".$nmFather;?></a> >> «·”‰Ê«  «·œ—«”Ì…
		</div> <p align="center"><br>
       «·”‰Ê«  «·œ—«”Ì…: 
	   <input class="Button" type="button" OnClick="javascript: redirect();" value="   ≈÷«›…   "> 
	   <input class="Button" type="button" OnClick="javascript: history.go(-1);" value="   —ÃÊ⁄   "></p>
 
					<p align="center"><b>«·ÿ«·»: </b> <a href="student.php?act=view&num=<?=$num?>"><? print $firstName." ".$lastName." ".$nmFather;?></p>
				<?}?>
				<p>
		<table border="1" align="center" width="80%" cellspacing="0">
			<tr>
				<th class="th" > «·”‰… «·œ—«”Ì… </th>
				<th class="th" > „⁄«Ì‰… </th>								
			</tr>
			<?
				include ("./connect.php");
				$sql = "select year from tb_univ_year where student = ".$num." order by year asc";
				$result = mysql_query($sql);	
		
				while ($col=mysql_fetch_row($result))					
				{
			?>										
			<tr>
				<td class="td" ><a href="univ_year.php?act=view&num=<?=$num?>&year=<?=$col[0]?>"><?=($col[0]-1)."-".$col[0]?></a></td>
				<td class="td" ><a href="univ_year.php?act=view&num=<?=$num?>&year=<?=$col[0]?>">„⁄«Ì‰…</a></td>
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
					<?
						if (isset($error))
							if ($error=="true")
							print "<script language='javascript'> alert('... Œÿ√: ⁄«„ œ—«”Ì „ÊÃÊœ √’·«'); history.go(-1);</script>";
							
					?>	
</body>
</html>
