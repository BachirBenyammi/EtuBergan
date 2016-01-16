<? include ("./test.php"); ?>
<?
	if (isset($act))
	{
		if ($act="new")
		{
	?>
			<html dir="rtl">
			<head>
			<title> «·»«ﬂ«·Ê—Ì« - etubergan</title>
			<? include ("head.php"); ?>	
					<script language="javascript">
					function validate()
					{
						if (!document.form1.specialty.value)
						{
							alert("ÌÃ»  ÕœÌœ ‘⁄»… «·»«ﬂ«·Ê—Ì«");
							return false;
						}					
						if (!document.form1._school.value) 
						{
							alert("ÌÃ»  ÕœÌœ «·„ƒ””… «· ⁄·Ì„Ì…");
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
			 <a href="index.php">«·’›Õ… «·—∆Ì”Ì…</a> >> <a href="student.php">«·ÿ·»…</a> >> <a href="student.php?act=view&num=<?=$num?>"><? print $firstName." ".$lastName." ".$nmFather;?></a>	 >> «·»«ﬂ«·Ê—Ì«
		</div><br> 
					<p align="center">«·»«ﬂ«·Ê—Ì«</p> 
					<p>				
				  <form name="form1" method="post" action="add.php?type=bac&num=<?=$num?>">
				  <table width="75%" align="center" border="0" cellspacing="0">
				  <tr>
				  <td colspan="2">
					<p align="center"><strong>«·ÿ«·»:</strong>	
						<a href="student.php?act=view&num=<?=$num?>"><? print $firstName." ".$lastName." ".$nmFather;?></a>							
					</p>
					  <br>
					  </td>
					  </tr>
						<td class="td"  valign="top">
							<table align="center">
								<tr>
									<td class="td" ><strong>«·‘⁄»…:</strong></td>
									<td class="td" >
									<select name="specialty">
										<option value=""></option>
										<?
										include("./connect.php");
										$sql = "select * from tb_bac_branches";
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
									<td class="td" ><strong>œÊ—…:</strong></td>
									<td class="td" >
									<select name="session">
										<option value="6">ÃÊ«‰</option>
										<option value="9">”» „»—</option>
									</select>
									</td>
								</tr>				
								<tr> 
									<td class="td" ><strong>«·⁄«„ «·œ—«”Ì:</strong></td>
									<td class="td" >
										<select name="_year">
											<option value="0"></option>
											<?
											for ($i=2000; $i<=2020; $i++)
											{
										?>
											<option value="<? print $i;?>"><? print $i;?></option>
										<?}?>
										</select>
									</td>
								</tr>								
								<tr>
									<td class="td" ><strong>«·„⁄œ·:</strong></td>
									<td class="td" ><input name="average" value="0.00" type="text" id="average"></td>
								</tr>
								<tr>
									<td class="td" ><strong>«·„·«ÕŸ…:</strong></td>
									<td class="td" ><select name="nb">
										<option value="5"></option>
										<option value="1">„ﬁ»Ê·</option>
										<option value="2">ÃÌœ</option>
										<option value="3">ÃÌœ Ãœ«</option>
										<option value="3">„„ «“</option>
									</select></td>
								</tr>								
								<tr>
									<td class="td" ><strong>„ƒ””…:</strong></td>
									<td class="td" >	
									<select name="_school">
										<option value=""></option>
										<?
										include("./connect.php");
										$sql = "select num, name from tb_schools";
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
						</td>
						</tr>					
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
	}
else
	{			
			include("./connect.php");
			$sql = "SELECT firstName, lastName, nmFather FROM tb_students WHERE num = ".$num;
			$result = mysql_query($sql);
			
								$firstName = "";
								$lastName = "";
								$nmFather ="";			
			while ($col=mysql_fetch_row($result))					
			{
				$firstName = $col[0];
				$lastName = $col[1];
				$nmFather = $col[2];
			}
			
			$sql = "SELECT * FROM tb_bac_branches, tb_bac, tb_schools WHERE student = ".$num." and tb_schools.num = _school and tb_bac_branches.num=specialty";
			$info_bac = mysql_query($sql);
			$num_info_bac = mysql_num_rows($info_bac);
			$numbac = 0;
			
			while ($col=mysql_fetch_row($info_bac))					
			{
				$specialty = $col[1];	
				$numbac = $col[2];
				$session = $col[4];
				if ($session == 6) $session = "ÃÊ«‰"; 
				else if ($session == 9 ) $session = "”» „»—";
				$_year = $col[5];
				$average = $col[6];
				$nb = $col[7];
				if ($nb == 5) $nb = "·« ‘Ì¡";
				else if ($nb==1) $nb = "„ﬁ»Ê·";
				else if ($nb==2) $nb = "ÃÌœ";
				else if ($nb==3) $nb = "ÃÌœ Ãœ«";
				else if ($nb==4) $nb = "„„ «“";
				
				$num_school = $col[10];
				$_school = $col[11];
			}
	
		?>

			<html dir="rtl">
			<head>
				<title> „⁄«Ì‰… „⁄·Ê„«  «·»«ﬂ«·Ê—Ì« - etubergan</title>
				<? include ("head.php"); ?>				
					<script language="javascript">
					function deleteit()
					{
						return confirm('Â· √‰  „ √ﬂœ „‰ –·ﬂ ø')					
					}		
					function redirect()
					{
						if (deleteit())
							location.href = "del.php?type=bac&num=<?=$num?>&num_bac=<?=$numbac?>";
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
			 <a href="index.php">«·’›Õ… «·—∆Ì”Ì…</a> >> <a href="student.php">«·ÿ·»…</a> >> <a href="student.php?act=view&num=<?=$num?>"><? print $firstName." ".$lastName." ".$nmFather;?></a> >> „⁄«Ì‰… „⁄·Ê„«  «·»«ﬂ«·Ê—Ì«
		</div><br> 
				  <p align="center">„⁄«Ì‰… „⁄·Ê„«  «·»«ﬂ«·Ê—Ì«
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
					<th class="th" colspan=2">«·»«ﬂ«·Ê—Ì«</th>			
					  <tr> 
						<td class="td" ><strong>‘⁄»…:</strong></td>
						<td class="td" ><?=$specialty?></td>
					  </tr>
						<tr> 
						<td class="td" ><strong>œÊ—…:</strong></td>
						<td class="td" ><?=$session?></td>
					  </tr>		
					  	<tr> 
						<td class="td" ><strong>⁄«„:</strong></td>
						<td class="td" ><?=$_year?></td>
					  </tr>	
						<tr> 
						<td class="td" ><strong>„⁄œ·:</strong></td>
						<td class="td" ><?=$average?></td>
					  </tr>						  
						<tr> 
						<td class="td" ><strong>„·«ÕŸ« :</strong></td>
						<td class="td" ><?=$nb?></td>
					  </tr>	
						<tr> 
						<td class="td" ><strong>„ƒ””…:</strong></td>
						<td class="td" ><a href="school.php?act=view&school=<?=$num_school?>"><?=$_school?></a></td>
					  </tr>			
					</table>
					</td>														
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
<?}   ?>