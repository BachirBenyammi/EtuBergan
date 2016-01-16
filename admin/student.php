<? include ("./test.php"); ?>
<?
	if (isset($act))
	{
		if ($act=="new")
		{
?>
			<html dir="rtl">
			<head>
			<title> ≈÷«›… ÿ«·» - etubergan</title>
<? include ("head.php"); ?>			
					<script language="javascript">
					function validate()
					{
						if ((!document.form1.firstName.value) || (!document.form1.lastName.value))
						{
							alert("ÌÃ» ﬂ «»… «·≈”„ Ê «··ﬁ»");
							return false;
						}
						if (!document.form1.blade.value) 
						{
							alert("ÌÃ»  ÕœÌœ ›’Ì·… «·œ„");
							return false;
						}						
						if (!document.form1.wilaya.value) 
						{
							alert("ÌÃ»  ÕœÌœ Ê·«Ì… „‰ «·ﬁ«∆„…");
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
			 <a href="index.php">«·’›Õ… «·—∆Ì”Ì…</a> >> <a href="student.php">«·ÿ·»…</a> >> ≈÷«›… ÿ«·»
		</div> 
					<p align="center">
					<br>
					≈÷«›… ÿ«·» 
					
				  <p> 
				  <form name="form1" method="post" action="add.php?type=student">
					<table width="75%" align="center" border="0" cellspacing="0">
					  <tr> 
            			<td class="td" ><strong>«·≈”„:</strong></td>
						<td class="td" ><input name="firstName" type="text" id="firstName"></td>
					  </tr>
					  <tr> 
            			<td class="td" ><strong>«··ﬁ»:</strong></td>
						<td class="td" ><input name="lastName" type="text" id="lastName"></td>
					  </tr>		
					  <tr> 
            			<td class="td" ><strong>≈”„ «·√» Ê «·Ãœ:</strong></td>
						<td class="td" ><input name="nmFather" type="text" id="nmFather"> (›·«‰ »‰ ›·«‰)</td>
					  </tr>						  
					  <tr> 
					  <tr> 
            			<td class="td" ><strong>«·Ã‰”:</strong></td>
						<td class="td" >
							<input name="sexe" type="radio" id="sexe" value="M" checked> –ﬂ—  
							<input name="sexe" type="radio" id="sexe" value="F"> √‰ÀÏ
						</td>
					  </tr>						  
            			<td class="td" ><strong> «—ÌŒ «·≈“œÌ«œ:</strong></td>
						<td class="td" >	
							<select name="_day">
								<option value=""></option>
							<?
								for ($i=1; $i<=31; $i++)
								{
							?>
								<option value="<? print $i;?>"><? print $i;?></option>
								<?}?>
							</select> -
							<select name="_month">
								<option value=""></option>
							<?
								for ($i=1; $i<=12; $i++)
								{
							?>
								<option value="<? print $i;?>"><? print $i;?></option>
								<?}?>
							</select> - 
							<select name="_year">
								<option value=""></option>
							<?
								for ($i=2000; $i>=1975; $i--)
								{
							?>
								<option value="<? print $i;?>"><? print $i;?></option>
								<?}?>
							</select> (0000-00-00)							
						<td class="td" >
					  </tr>
					  <tr> 
            			<td class="td" ><strong>„ﬂ«‰ «·≈“œÌ«œ:</strong></td>
						<td class="td" ><input name="plBearth" type="text" value="»—Ì«‰" id="plBearth"></td>
					  </tr>	
					  <tr> 	
            			<td class="td" ><strong>⁄‰Ê«‰:</strong></td>
						<td class="td" ><textarea name="adresse" cols="25" rows="3" id="adresse"></textarea></td>
					  </tr>
					  <tr> 
            			<td class="td" ><strong>»·œÌ…:</strong></td>
						<td class="td" ><input name="ville" type="text" value="»—Ì«‰" id="ville"></td>
					  </tr>		
					  <tr> 
            			<td class="td" ><strong>«·—„“ «·»—ÌœÌ:</strong></td>
						<td class="td" ><input name="postalCode" type="text" value="47100" id="postalCode"></td>
					  </tr>						  
					  <tr> 
            			<td class="td" ><strong>Ê·«Ì…:</strong></td>
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
								<option value="<? print $col[0];?>" <? if ($col[0] == 47) print " selected";?>><? print $col[1];?></option>
								<?}?>
							</select>
						<td class="td" >
					  </tr>
					  <tr> 
            			<td class="td" ><strong>Â« › «·„‰“·:</strong></td>
						<td class="td" ><input name="phone" type="text" value="029-84-" id="phone" dir="ltr"> (##-##-##-###)</td>
					  </tr>						  
					  <tr> 
            			<td class="td" ><strong>„Ê»«Ì·:</strong></td>
						<td class="td" ><input name="mobile" type="text" id="mobile" dir="ltr"> (##-##-##-###)</td>
					  </tr>						  
					  <tr> 
            			<td class="td" ><strong>»—Ìœ ≈·ﬂ —Ê‰Ì:</strong></td>
						<td class="td" ><input name="email" type="text" id="email"></td>
					  </tr>						  
					  <tr> 
            			<td class="td" ><strong>Õ”«» »—ÌœÌ:</strong></td>
						<td class="td" ><input name="posteAccount" type="text" id="posteAccount"></td>
					  </tr>		
					  <tr> 
            			<td class="td" ><strong>›’Ì·… «·œ„</strong></td>
						<td class="td" >	
							<select name="blade">

								<option value=""></option>
								<option value="AB+"><sub>+</sub> AB</option>
								<option value="AB-"><sub>-</sub> AB </option>
								<option value="A+"><sub>+</sub> A</option>
								<option value="A-"><sub>-</sub> A</option>
								<option value="B+"><sub>+</sub> B</option>
								<option value="B-"><sub>-</sub> B</option>
								<option value="O+"><sub>+</sub> O</option>
								<option value="O-"><sub>-</sub> O</option>
								<option value="X">€Ì— „⁄—Ê›…</option>
							</select>
						<td class="td" >
					  </tr>	
					  <tr> 	
            			<td class="td" ><strong>‘Â«œ«  „ Õ’· ⁄·ÌÂ«:</strong></td>
						<td class="td" ><textarea name="certificates" cols="25" rows="3" id="certificates"></textarea></td>
					  </tr>						  
					  <tr> 	
            			<td class="td" ><strong>„·«ÕŸ« :</strong></td>
						<td class="td" ><textarea name="observations" cols="25" rows="3" id="observations"></textarea></td>
					  </tr>		
					  <tr> 	
            			<td class="td" ><strong>ÂÊ«Ì…:</strong></td>
						<td class="td" ><textarea name="hobbies" cols="25" rows="3" id="hobbies"></textarea></td>
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
		else if ($act=="view")
		{
			include("./connect.php");
			$sql = "SELECT * FROM tb_students, tb_wilayas WHERE code = wilaya and num = ".$num;
			$result = mysql_query($sql);
			
			while ($col=mysql_fetch_row($result))					
			{
				$firstName = $col[1];
				$lastName = $col[2];
				$sexe = $col[3];
				if ($sexe == "M") $sexe = "–ﬂ—"; else $sexe = "√‰ÀÏ";
				
				$dtBearth = $col[4];
				$plBearth = $col[5];
				$nmFather = $col[6];
				$adresse = $col[7];
				$phone = $col[8];
				$mobile = $col[9];
				$email = $col[10];
				$blade = $col[11];	
				if ($blade=="X") $blade ="€Ì— „⁄—Ê›…";
				$posteAccount = $col[12];		
				$observations = $col[13];
				$ville = $col[14];
				$postalCode = $col[15];
				$wilaya = $col[20];
				$certificates = $col[17];
				$hobbies = $col[18];
			}
			
			$sql = "SELECT info_univ, year, oldyear, inscrit_num, speciality, tb_branches.title, tb_univ_levels.title, obs, numuniv, tb_universities.name FROM tb_univ_year, tb_university, tb_universities, tb_univ_levels, tb_branches WHERE student = ".$num." and num_univ = info_univ and numuniv = tb_universities.num and level = tb_univ_levels.num and bronche = tb_branches.num order by year desc";
			$infouniv = mysql_query($sql);
			$num_info_univ = mysql_num_rows($infouniv);
			$_info_univ = 0;
			
			if ($col=mysql_fetch_row($infouniv))					
			{
				$_info_univ = $col[0];
				$year_ = $col[1];
				$oldyear_ = $col[2];
				$inscrit_num = $col[3];
				$speciality  = $col[4];
				$bronche = $col[5];
				$level = $col[6];
				$obs  = $col[7];
				$numuniv  = $col[8];
				$info_univ  = $col[9];
			}
			
			$sql = "SELECT info_city, year, oldyear, room, suite, complex, nbr, intern, numcity, tb_cities.name  FROM tb_univ_year, tb_city, tb_cities WHERE student = ".$num." and num_city = info_city and numcity = num  order by year desc";
			$infocity = mysql_query($sql);
			$num_info_city = mysql_num_rows($infocity);
			$_info_city = 0;
			
			if ($col=mysql_fetch_row($infocity))					
			{
				$_info_city = $col[0];
				$year = $col[1];
				$oldyear = $col[2];				
				$room = $col[3];
				$suite  = $col[4];
				$complex = $col[5];
				$nbr = $col[6];
				$intern = $col[7];
				$numcity  = $col[8];
				$info_city  = $col[9];
			}
			
			$sql = "SELECT * FROM tb_bac_branches, tb_bac, tb_schools WHERE student = ".$num." and tb_schools.num = _school and tb_bac_branches.num=specialty";
			$info_bac = mysql_query($sql);
			$num_info_bac = mysql_num_rows($info_bac);
			$numbac = 0;
			
			if ($col=mysql_fetch_row($info_bac))					
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
				<title><?=$firstName. " " . $lastName?> - etubergan</title>
				<? include ("head.php"); ?>				
					<script language="javascript">
					function deleteit()
					{
						return confirm('Â· √‰  „ √ﬂœ „‰ –·ﬂ ø')					
					}		
					function trydeleteit()
					{
						if (deleteit())
							location.href = "del.php?type=student&num=<?=$num?>";
					}							
					function tryupdateit()
					{
							location.href = "student.php?act=update&num=<?=$num?>";
					}						
					function redirect_univ_years()
					{
							location.href = "./univ_year.php?num=<?=$num?>";
					}
					function redirect_bac()
					{
						num_info_bac = <?=$num_info_bac?>;
						if (!num_info_bac) location.href = "./bac.php?act=new&num=<?=$num?>";
						else location.href = "./bac.php?num=<?=$num?>";
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
			 <a href="index.php">«·’›Õ… «·—∆Ì”Ì…</a> >> <a href="student.php">«·ÿ·»…</a> >> „⁄«Ì‰… ÿ«·»
		</div><br> 
				  <p align="center">„⁄«»‰… ÿ«·»</p>	
				  <p> 
				  <table width="90%" align="center" border="0" cellspacing="0">
				  <tr>
				  <td with="55%" valign="top">
					<table width="100%" align="center" border="0" cellspacing="0">
						<th class="th"  colspan=2">„⁄·Ê„«  ⁄«„… 							
						</th>
					  <tr> 
						<td class="td" ><strong>«·≈”„:</strong></td>
						<td class="td" ><?=$firstName?></td>
					  </tr>
						<tr> 
						<td class="td" ><strong>«··ﬁ»:</strong></td>
						<td class="td" ><?=$lastName?></td>
					  </tr>		
					  	<tr> 
						<td class="td" ><strong>≈”„ «·√» Ê «·Ãœ:</strong></td>
						<td class="td" ><?=$nmFather?></td>
					  </tr>	
						<tr> 
						<td class="td" ><strong>«·Ã‰”:</strong></td>
						<td class="td" ><?=$sexe?></td>
					  </tr>						  
						<tr> 
						<td class="td" ><strong> «—ÌŒ «·≈“œÌ«œ:</strong></td>
						<td class="td" ><?=$dtBearth?></td>
					  </tr>	
					  	<tr> 
						<td class="td" ><strong>„ﬂ«‰ «·≈“œÌ«œ:</strong></td>
						<td class="td" ><?=$plBearth?></td>
					  </tr>	
					  <tr> 
						<td class="td" ><strong>⁄‰Ê«‰:</strong></td>
						<td class="td" ><?=$adresse?></td>
					  </tr>
						<tr> 
						<td class="td" ><strong>»·œÌ…:</strong></td>
						<td class="td" ><?=$ville?></td>
					  </tr>	
						<tr> 
						<td class="td" ><strong>«·—„“ «·»—ÌœÌ:</strong></td>
						<td class="td" ><?=$postalCode?></td>
					  </tr>						  
					  <tr> 
						<td class="td" ><strong>Ê·«Ì…:</strong></td>
						<td class="td" ><?=$wilaya?></td>
					  </tr>
						<tr> 
						<td class="td" ><strong>Â« › «·„‰“·:</strong></td>
						<td class="td" dir="ltr" align="right"><?=$phone?></td>
					  </tr>
					  	<tr> 
						<td class="td" ><strong>„Ê»«Ì·:</strong></td>
						<td class="td" dir="ltr" align="right"><?=$mobile?></td>
					  </tr>
						<tr> 
						<td class="td" ><strong>»—Ìœ ≈·ﬂ —Ê‰Ì:</strong></td>
						<td class="td" ><a href="mailto:<?=$email?>"><?=$email?></a></td>
					  </tr>
					  	<tr> 
						<td class="td" ><strong>Õ”«» »—ÌœÌ:</strong></td>
						<td class="td" ><?=$posteAccount?></td>
					  </tr>
			  		<tr> 
						<td class="td" ><strong>›’Ì·… «·œ„</strong></td>
						<td class="td" ><?=$blade?></td>
					  </tr>
			  			<tr> 
						<td class="td" ><strong>„·«ÕŸ« :</strong></td>
						<td class="td" ><?=$observations?></td>
					  </tr>	
						<tr>
						<td class="td" ><strong>ÂÊ«Ì…:</strong></td>
						<td class="td" ><?=$hobbies?></td>						
					  </tr>	
					<tr>
						<td class="td"><b>‘Â«œ«  „ Õ’· ⁄·ÌÂ«:</b></td>
						<td class="td">
							<? 
								if ($certificates) 
									print $certificates;
								else
									print "<b>·« „⁄·Ê„«   –ﬂ— </b>";
							?>	
						</td>
					</tr>
						<tr>
							<td width="45%" valign="top" colspan="2">
							<? 
								$sql = "SELECT student FROM tb_univ_year WHERE student = ".$num;
								$query = mysql_query($sql);
								$num_years = mysql_num_rows($query);							
							?>
							<br>	
							<table border="0" cellspacing="0" width= "100%">
							<th class="th" >«·”‰Ê«  «·œ—«”Ì… <? if ($num_years > 0 ) print "(".$num_years." ”‰Ê« )";?></th>				
							<tr> 
								<td class="td">
								<?
								if ($num_years == 0) 
									print "<b>·« „⁄·Ê„«   –ﬂ— </b>";
								else
								{
									$sql = "SELECT year, oldyear FROM tb_univ_year WHERE student = ".$num." order by year asc";
									$query = mysql_query($sql);	
									
									while ($col=mysql_fetch_row($query))					
									{
										print "<a href='univ_year.php?act=view&num=".$num."&year=".$col[0]."'>".$col[1]."-".$col[0]."</a><br>";
									}
								}
								?>
								</td>
							</tr>					  				  
							</table>
						</tr>
						</table>
					</td>
				<td valign="top">
				
					<table border="0" cellspacing="0" width="100%">
					<th class="th"  colspan=2">«·Ã«„⁄… <? if ($num_info_univ) print $oldyear_."-".$year_?>
					</th>
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
						<tr> 
						<td class="td" ><strong>„·«ÕŸ« :</strong></td>
						<td class="td" ><?=$obs?></td>
						</tr>
					<?
					}
					else print "<tr><td class='td' ><b>·« „⁄·Ê„«   –ﬂ— </b></td></tr>";
					?>					  
					</table>
					<br>
					<table border="0" cellspacing="0" width="100%">
					<th class="th"  colspan="2">«·≈ﬁ«„… <? if ($num_info_city) print $oldyear."-".$year?> 
					</th>
					<? if ($num_info_city) 
					{?>	
					  <tr> 
						<td class="td" ><strong>‰Ê⁄Ì… «·≈ﬁ«„…:</strong></td>
						<td class="td" >
							<? if ($intern == 2) 
									print "œ«Œ·Ì";
								else
									print "Œ«—ÃÌ"; 
							?>
						</td>
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
					<br>
					<table border="0" cellspacing="0" width="100%">
					<th class="th"  colspan="2">«·»«ﬂ«·Ê—Ì« 
						<? if ($num_info_bac) print ($_year-1)."-".$_year; ?>
					</th>
					<? if ($num_info_bac) 
					{?>					
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
					<?
					}
					else print "<tr><td class='td' ><b>·« „⁄·Ê„«   –ﬂ— </b></td></tr>";
					?>					  
					</table>				
					</td>
					<tr>				
				  </td>
			  </tr>
			  <tr>
				<td colspan="3" align="center"><br>
					<input class="Button" type="button" OnClick="javascript: trydeleteit();" value="   Õ–›   "> 				
					<input class="Button" type="button" OnClick="javascript: tryupdateit();" value="   ⁄œÌ·  "> 					
					<input class="Button" type="button" OnClick="javascript: redirect_bac();" value="   «·»«ﬂ«·Ê—Ì«  ">				
					<input class="Button" type="button" OnClick="javascript: redirect_univ_years();" value="   «·”‰Ê«  «·œ—«”Ì…   "> 
					<input class="Button" type="button" OnClick="javascript: history.go(-1);" value="   —ÃÊ⁄  "><br><br>
				</td>			  
			  </tr>
				</table>
				</td>
			  </tr>
			  <? include ("footer.php"); ?>		  
			</table>			
			</body>
			</html>
		<?
		}
		else if ($act=="update")
		{
			include("./connect.php");
			$sql = "SELECT * FROM tb_students, tb_wilayas WHERE code = wilaya and num = ".$num;
			$result = mysql_query($sql);
			
			while ($col=mysql_fetch_row($result))					
			{
				$firstName = $col[1];
				$lastName = $col[2];
				$sexe = $col[3];
				$dtBearth = $col[4];
				$plBearth = $col[5];
				$nmFather = $col[6];
				$adresse = $col[7];
				$phone = $col[8];
				$mobile = $col[9];
				$email = $col[10];
				$blade = $col[11];	
				$posteAccount = $col[12];		
				$observations = $col[13];
				$ville = $col[14];
				$postalCode = $col[15];
				$wilaya = $col[19];
				$certificates = $col[17];
				$hobbies = $col[18];
			}		
?>
			<html dir="rtl">
			<head>
			<title>  ⁄œÌ· „⁄·Ê„«  ÿ«·» - etubergan</title>
<? include ("head.php"); ?>		
					<script language="javascript">
					function validate()
					{
						if ((!document.form2.firstName.value) || (!document.form2.lastName.value))
						{
							alert("ÌÃ» ﬂ «»… «·≈”„ Ê «··ﬁ»");
							return false;
						}
						if (!document.form2.blade.value) 
						{
							alert("ÌÃ»  ÕœÌœ ›’Ì·… «·œ„");
							return false;
						}						
						if (!document.form2.wilaya.value) 
						{
							alert("ÌÃ»  ÕœÌœ Ê·«Ì… „‰ «·ﬁ«∆„…");
							return false;
						}						
						document.form2.submit();
					}							
					</script>			
			</head>

			<body onLoad="debuteDate();debuteTemps()" onUnload="clearTimeout(ddate);clearTimeout(ttime)" bgcolor="#EEEEEE">
			<table width="95%" align="center" height="610" cellspacing="0" background="./style/background.png">
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
			 <a href="index.php">«·’›Õ… «·—∆Ì”Ì…</a> >> <a href="student.php">«·ÿ·»…</a> >>  Õœ»À „⁄·Ê„«  ÿ«·»
		</div><br> 
					<p align="center"> ⁄œÌ· „⁄·Ê„«  ÿ«·»</p>					
				  <p> 
				  <form name="form2" method="post" action="update.php?type=student&num=<?=$num?>">
					<table width="75%" align="center" border="0" cellspacing="0">
					  <tr> 
            			<td class="td" ><strong>«·≈”„:</strong></td>
						<td class="td" ><input name="firstName" value="<?=$firstName?>" type="text" id="firstName"></td>
					  </tr>
					  <tr> 
            			<td class="td" ><strong>«··ﬁ»:</strong></td>
						<td class="td" ><input name="lastName" value="<?=$lastName?>" type="text" id="lastName"></td>
					  </tr>		
					  <tr> 
            			<td class="td" ><strong>≈”„ «·√» Ê «·Ãœ:</strong></td>
						<td class="td" ><input name="nmFather" value="<?=$nmFather?>" type="text" id="nmFather"> (›·«‰ »‰ ›·«‰)</td>
					  </tr>						  
					  <tr> 
					  <tr> 
            			<td class="td" ><strong>«·Ã‰”:</strong></td>
						<td class="td" >
							<input name="sexe" type="radio" id="sexe" value="M" <? if ($sexe=="M") print " checked"; ?>> –ﬂ—  
							<input name="sexe" type="radio" id="sexe" value="F" <? if ($sexe=="F") print " checked"; ?>> √‰ÀÏ
						</td>
					  </tr>						  
            			<td class="td" ><strong> «—ÌŒ «·≈“œÌ«œ:</strong></td>
						<td class="td" ><input name="dtBearth" value="<?=$dtBearth?>" type="text" id="dtBearth"></td>
					  </tr>
					  <tr> 
            			<td class="td" ><strong>„ﬂ«‰ «·≈“œÌ«œ:</strong></td>
						<td class="td" ><input name="plBearth" value="<?=$plBearth?>" type="text" id="plBearth"></td>
					  </tr>	
					  <tr> 	
            			<td class="td" ><strong>⁄‰Ê«‰:</strong></td>
						<td class="td" ><textarea name="adresse" cols="25" rows="3" id="adresse"><?=$adresse?></textarea></td>
					  </tr>
					  <tr> 
            			<td class="td" ><strong>»·œÌ…:</strong></td>
						<td class="td" ><input name="ville" value="<?=$ville?>" type="text" id="ville"></td>
					  </tr>		
					  <tr> 
            			<td class="td" ><strong>«·—„“ «·»—ÌœÌ:</strong></td>
						<td class="td" ><input name="postalCode" value="<?=$postalCode?>" type="text" id="postalCode"></td>
					  </tr>						  
					  <tr> 
            			<td class="td" ><strong>Ê·«Ì…:</strong></td>
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
								<option value="<? print $col[0];?>" <? if ($col[0] == $wilaya) print " selected";?>><? print $col[1];?></option>
								<?}?>
							</select>
						<td class="td" >
					  </tr>
					  <tr> 
            			<td class="td" ><strong>Â« › «·„‰“·:</strong></td>
						<td class="td" ><input name="phone" value="<?=$phone?>" type="text" id="phone" dir="ltr"></td>
					  </tr>						  
					  <tr> 
            			<td class="td" ><strong>„Ê»«Ì·:</strong></td>
						<td class="td" ><input name="mobile" type="text" id="mobile" dir="ltr"></td>
					  </tr>						  
					  <tr> 
            			<td class="td" ><strong>»—Ìœ ≈·ﬂ —Ê‰Ì:</strong></td>
						<td class="td" ><input name="email" value="<?=$email?>" type="text" id="email"></td>
					  </tr>						  
					  <tr> 
            			<td class="td" ><strong>Õ”«» »—ÌœÌ:</strong></td>
						<td class="td" ><input name="posteAccount" value="<?=$posteAccount?>" type="text" id="posteAccount"></td>
					  </tr>		
					  <tr> 
            			<td class="td" ><strong>›’Ì·… «·œ„</strong></td>
						<td class="td" >	
							<select name="blade">

								<option value="" <? if ($blade=="") print "selected"; ?>></option>
								<option value="AB+" <? if ($blade=="AB+") print "selected"; ?>><sub>+</sub> AB</option>
								<option value="AB-" <? if ($blade=="AB-") print "selected"; ?>><sub>-</sub> AB </option>
								<option value="A+" <? if ($blade=="A+") print "selected"; ?>><sub>+</sub> A</option>
								<option value="A-" <? if ($blade=="A-") print "selected"; ?>><sub>-</sub> A</option>
								<option value="B+" <? if ($blade=="B+") print "selected"; ?>><sub>+</sub> B</option>
								<option value="B-" <? if ($blade=="B-") print "selected"; ?>><sub>-</sub> B</option>
								<option value="O+" <? if ($blade=="O+") print "selected"; ?>><sub>+</sub> O</option>
								<option value="O-" <? if ($blade=="O-") print "selected"; ?>><sub>-</sub> O</option>
								<option value="X" <? if ($blade=="X") print "selected"; ?>>€Ì— „⁄—Ê›…</option>
							</select>
						<td class="td" >
					  </tr>	
					  <tr> 	
            			<td class="td" ><strong>‘Â«œ«  „ Õ’· ⁄·ÌÂ«:</strong></td>
						<td class="td" ><textarea name="certificates" cols="25" rows="3" id="certificates"><?=$certificates?></textarea></td>
					  </tr>						  
					  <tr> 	
            			<td class="td" ><strong>„·«ÕŸ« :</strong></td>
						<td class="td" ><textarea name="observations" cols="25" rows="3" id="observations"><?=$observations?></textarea></td>
					  </tr>		
					  <tr> 	
            			<td class="td" ><strong>ÂÊ«Ì…:</strong></td>
						<td class="td" ><textarea name="hobbies" cols="25" rows="3" id="hobbies"><?=$hobbies?></textarea></td>
					  </tr>						  
					</table>
					<p align="center"> 
					  <input class="Button" type="button" value="    ⁄œÌ·   " onClick="javascript: return validate();">  
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
	?>
<html dir="rtl">
<head>
<title>«·ÿ·»… - etubergan</title>
<? include ("head.php"); ?>	
					<script language="javascript">
					function redirect()
					{
							location.href = "./student.php?act=new";
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
			 <a href="index.php">«·’›Õ… «·—∆Ì”Ì…</a> >> «·ÿ·»…
		</div> <p align="center"><br>
       ﬁ«∆„… «·ÿ·»…: 
	   <input class="Button" type="button" OnClick="javascript: redirect();" value="   ≈÷«›…   "> </p>
      <p>
		<table border="1" align="center" width="80%" cellspacing="0">
			<tr>
				<th class="th" > ≈”„ </th>
				<th class="th" >  «—ÌŒ «·≈“œÌ«œ </th>	
				<th class="th" > »·œÌ… </th>					
				<th class="th" > „⁄«Ì‰… </th>
				<th class="th" >  ⁄œÌ· </th>				
			</tr>
			<?
				include ("./connect.php");
				$sql = "select num, firstName , lastName, dtBearth, ville from tb_students order by firstName asc";
				$result = mysql_query($sql);	
		
				while ($col=mysql_fetch_row($result))					
				{
					$num = $col[0];			
					$name = $col[1] . " " . $col[2];	
					$dtbearth = $col[3];	
					$ville = $col[4];	
			?>										
			<tr>
				<td class="td" ><a href="student.php?act=view&num=<?=$num?>"><?=$name?></a></td>
				<td class="td" ><?=$dtbearth?></td>
				<td class="td" ><?=$ville?></td>
				<td class="td" ><a href="student.php?act=view&num=<?=$num?>">„⁄«Ì‰…</a></td>
				<td class="td" ><a href="student.php?act=update&num=<?=$num?>"> ⁄œÌ·</a></td>
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