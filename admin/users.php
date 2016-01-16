<? include ("./test.php"); ?>
<?
	if (isset($act))
	{
		if ($act=="new")
		{
?>
			<html dir="rtl">
			<head>
			<title> ≈÷«›… „” Œœ„ - etubergan</title>
<? include ("head.php"); ?>	
					<script language="javascript">
					function validate()
					{
						if (!document.form1.user.value) 
						{
							alert("ÌÃ» ﬂ «»… Õ”«» «·„” Œœ„");
							return false;
						}
						if (!document.form1.password.value) 
						{
							alert("ÌÃ» ﬂ «»… ﬂ·„… „—Ê— «·„” Œœ„");
							return false;
						}	
						if (document.form1.password.value != document.form1.confirm.value) 
						{
							alert("«·—Ã«¡ «· √ﬂœ „‰ ﬂ·„… «·„—Ê—");
							return false;
						}	
						if (!document.form1.level.value) 
						{
							alert("ÌÃ»  ÕœÌœ ’·«ÕÌ… «·„” Œœ„");
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
			 <a href="index.php">«·’›Õ… «·—∆Ì”Ì…</a> >> <a href="users.php">ﬁ«∆„… «·„” Œœ„Ì‰</a> >> ≈÷«›… „” Œœ„
		</div><br> 
					<p align="center">≈÷«›… „” Œœ„</p>
				  <p> 
				  <form name="form1" method="post" action="add.php?type=user">
					<table width="75%" align="center" border="0" cellspacing="0">
					  <tr> 
            			<td class="td" ><strong>«·Õ”«»:</strong></td>
						<td class="td" ><input name="user" type="text" id="user"></td>
					  </tr>
					  <tr> 
            			<td class="td" ><strong>ﬂ·„… «·„—Ê—:</strong></td>
						<td class="td" ><input name="password" type="password" id="password"></td>
					  </tr>		
					  <tr> 
            			<td class="td" ><strong> √ﬂÌœ ﬂ·„… «·„—Ê—:</strong></td>
						<td class="td" ><input name="confirm" type="password" id="confirm"></td>
					  </tr>						  
					  <tr> 
            			<td class="td" ><strong>«·≈”„:</strong></td>
						<td class="td" ><input name="first_name" type="text" id="first_name"></td>
					  </tr>
					  <tr> 
            			<td class="td" ><strong>«··ﬁ»:</strong></td>
						<td class="td" ><input name="last_name" type="text" id="last_name"></td>
					  </tr>
					  <tr> 
            			<td class="td" ><strong>Â« ›:</strong></td>
						<td class="td" ><input name="mobile" type="text" id="mobile" dir="ltr"> (00-00-00-000)</td>
					  </tr>
					  <tr> 
            			<td class="td" ><strong>«·»—Ìœ «·≈·ﬂ —Ê‰Ì:</strong></td>
						<td class="td" ><input name="email" type="text" id="email"></td>
					  </tr>		
					  <tr> 
            			<td class="td" ><strong>’·«ÕÌ« :</strong></td>
						<td class="td"><select name="level" id="level">
							<option value=""></option>
							<option value="0">„ÕœÊœ…</option>
							<option value="1">·« „ÕœÊœ…</option>
						</select></td>
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
		else if ($act=="edit")
		{
			include("./connect.php");
			$sql = "SELECT * FROM tb_users WHERE account='".$user."'";
			$result = mysql_query($sql);
			
			while ($col=mysql_fetch_row($result))					
			{
				$user = $col[0];	
				$password = $col[1];
				$first_name = $col[2];	
				$last_name = $col[3];	
				$email = $col[4];		
				$mobile = $col[5];			
				$level = $col[6];
			}
			?>
			<html dir="rtl">
			<head>
			<title>  ⁄œÌ· - etubergan</title>
<? include ("head.php"); ?>	
					<script language="javascript">
					function validate()
					{
						if (!document.form1.password.value) 
						{
							alert("ÌÃ» ﬂ «»… ﬂ·„… „—Ê— «·„” Œœ„");
							return false;
						}	
						if (document.form1.password.value != document.form1.confirm.value) 
						{
							alert("«·—Ã«¡ «· √ﬂœ „‰ ﬂ·„… «·„—Ê—");
							return false;
						}	
						if (!document.form1.level.value) 
						{
							alert("ÌÃ»  ÕœÌœ ’·«ÕÌ… «·„” Œœ„");
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
			 <a href="index.php">«·’›Õ… «·—∆Ì”Ì…</a> >> <a href="users.php">ﬁ«∆„… «·„” Œœ„Ì‰</a> >>  ⁄œÌ·
		</div><br> 
					<p align="center"> ⁄œÌ·</p>
				  <p> 
				  <form name="form1" method="post" action="update.php?type=user&user=<?=$user?>">
					<table width="75%" align="center" border="0" cellspacing="0">
					  <tr> 
            			<td class="td" ><strong>«·Õ”«»:</strong></td>
						<td class="td" ><?=$user?>
					  </tr>
					  <tr> 
            			<td class="td" ><strong>ﬂ·„… «·„—Ê—:</strong></td>
						<td class="td" ><input name="password" type="password" id="password" value="<?=$password?>"></td>
					  </tr>		
					  <tr> 
            			<td class="td" ><strong> √ﬂÌœ ﬂ·„… «·„—Ê—:</strong></td>
						<td class="td" ><input name="confirm" type="password" id="confirm" value="<?=$password?>"></td>
					  </tr>						  
					  <tr> 
            			<td class="td" ><strong>«·≈”„:</strong></td>
						<td class="td" ><input name="first_name" type="text" id="first_name" value="<?=$first_name?>"></td>
					  </tr>
					  <tr> 
            			<td class="td" ><strong>«··ﬁ»:</strong></td>
						<td class="td" ><input name="last_name" type="text" id="last_name" value="<?=$last_name?>"></td>
					  </tr>
					  <tr> 
            			<td class="td" ><strong>Â« ›:</strong></td>
						<td class="td" ><input name="mobile" type="text" id="mobile" value="<?=$mobile?>" dir="ltr"> (00-00-00-000)</td>
					  </tr>
					  <tr> 
            			<td class="td" ><strong>«·»—Ìœ «·≈·ﬂ —Ê‰Ì:</strong></td>
						<td class="td" ><input name="email" type="text" id="email" value="<?=$email?>"></td>
					  </tr>
						<? if (session_is_registered("super")) {?>
					  <tr> 
            			<td class="td" ><strong>’·«ÕÌ« :</strong></td>
						<td class="td"><select name="level" id="level">
							<option value=""></option>
							<option value="0" <? if ($level==0) print " selected";?>>„ÕœÊœ…</option>
							<option value="1" <? if ($level==1) print " selected";?>>·« „ÕœÊœ…</option>
						</select></td>
					  </tr>		
					  <?}?>
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
			$sql = "SELECT * FROM tb_users WHERE account='".$user."'";
			$result = mysql_query($sql);
			
			while ($col=mysql_fetch_row($result))					
			{
				$user = $col[0];				
				$first_name = $col[2];	
				$last_name = $col[3];	
				$email = $col[4];		
				$mobile = $col[5];			
				$level = $col[6];
			}
		?>

			<html dir="rtl">
			<head>
			<title><?=$user?> - etubergan</title>
<? include ("head.php"); ?>			
					<script language="javascript">
					function deleteit()
					{
						return confirm('Â· √‰  „ √ﬂœ „‰ –·ﬂ ø')					
					}		
					function redirect()
					{
						if (deleteit())
							location.href = "del.php?type=user&user=<?=$user?>";
					}
					function editit()
					{
							location.href = "users.php?act=edit&user=<?=$user?>";
					}		
					function recordit()
					{
							location.href = "records.php?user=<?=$user?>";
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
			 <a href="index.php">«·’›Õ… «·—∆Ì”Ì…</a> >>  <a href="users.php">ﬁ«∆„… «·„” Œœ„Ì‰</a> >> „⁄«Ì‰… „” Œœ„
		</div><br> 
				  <p align="center">„⁄«Ì‰… „” Œœ„</p>
				  <p> 
					<table width="75%" align="center" border="0" cellspacing="0">
					  <tr> 
						<td class="td" ><strong>≈”„ «·Õ”«»:</strong></td>
						<td class="td" ><?=$user?></td>
					  </tr>					
					  <tr> 
						<td class="td" ><strong>«·≈”„:</strong></td>
						<td class="td" ><?=$first_name?></td>
					  </tr>
					  <tr> 
						<td class="td" ><strong>«··ﬁ»:</strong></td>
						<td class="td" ><?=$last_name?></td>
					  </tr>
					  <tr> 
						<td class="td" ><strong>Â« ›:</strong></td>
						<td class="td" dir="ltr" align="right"><?=$mobile?></td>
					  </tr>
					  <tr> 
						<td class="td" ><strong>«·»—Ìœ «·≈·ﬂ —Ê‰Ì:</strong></td>
						<td class="td" ><a href="mailto:<?=$email?>"><?=$email?></a></td>
					  </tr>
					  <? if (session_is_registered("super")){?>
					  <tr> 
						<td class="td" ><strong>«·’·«ÕÌ…:</strong></td>
						<td class="td"><? if ($level==1) print "·« „ÕœÊœ…"; else print "„ÕœÊœ…";?></td>
					  </tr>	
						<?}?>					  
					</table>
					</p>
					<p align=center>
					  <? if (session_is_registered("super")){?>
							<input class="Button" type="button" OnClick="javascript: redirect();" value="   Õ–›   ">  
							<input class="Button" type="button" OnClick="javascript: editit();" value="    ⁄œÌ·   "> 
							<input class="Button" type="button" OnClick="javascript: recordit();" value="    ”ÃÌ·   "> 
						<?}?>
					<input class="Button" type="button" OnClick="javascript: history.go(-1);" value="   —ÃÊ⁄   ">
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
<title>ﬁ«∆„… «·„” Œœ„Ì‰ - etubergan</title>
<? include ("head.php"); ?>	
					<script language="javascript">
					function redirect()
					{
							location.href = "./users.php?act=new";
					}
					function recordit()
					{
							location.href = "records.php?user=nul";
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
			 <a href="index.php">«·’›Õ… «·—∆Ì”Ì…</a> >> ﬁ«∆„… «·„” Œœ„Ì‰
		</div> <p align="center"><br>
       ﬁ«∆„… «·„” Œœ„Ì‰: 
	     <? if (session_is_registered("super")){?>
	   <input class="Button" type="button" OnClick="javascript: redirect();" value="   ≈÷«›…   "> </p>
	   <?}?>
      <p>
		<table border="1" align="center" width="80%" cellspacing="0">
			<tr>
				<th class="th" > Õ”«» </th>
				<th class="th" > «·≈”„ Ê «··ﬁ» </th>						
				<th class="th" > «·»—Ìœ «·≈·ﬂ —Ê‰Ì </th>
				<th class="th" > Â« › </th>	
				<? if (session_is_registered("super")){?>
					<th class="th" > «·’·«ÕÌ… </th>	
					<th class="th" >  ⁄œÌ· </th>
					<th class="th" >  ”ÃÌ· </th>
				<?}?>				
				<th class="th" > „⁄«Ì‰… </th>
			</tr>
			<?
				include ("./connect.php");
				$sql = "select * from tb_users";
				$result = mysql_query($sql);	
		
				while ($col=mysql_fetch_row($result))					
				{
					$user = $col[0];
					$firstname = $col[2];			
					$lastname = $col[3];
					$email = $col[4];	
					$mobile = $col[5];	
					$level = $col[6];
			?>										
			<tr>
				<td class="td" ><a href="users.php?act=view&user=<?=$user?>"><?=$user?></a></td>
				<td class="td" ><?=$firstname." ".$lastname?></td>
				<td class="td" ><a href="mailto:<?=$email?>"><?=$email?></a></td>
				<td class="td" dir="ltr"><?=$mobile?></td>
				<? if (session_is_registered("super")){?>
					<td class="td"><? if ($level==1) print "·« „ÕœÊœ…"; else print "„ÕœÊœ…";?></td>
					<td class="td"><a href="users.php?act=edit&user=<?=$user?>"> ⁄œÌ·</a></td>					
					<td class="td"><a href="records.php?user=<?=$user?>"> ”ÃÌ·</a></td>	
				<?}?>							
				<td class="td" ><a href="users.php?act=view&user=<?=$user?>">„⁄«Ì‰…</a></td>
			</tr>	
			<?
				}
			?>	
		</table>
	  </p>
	  <p align="center">
	  <p align="center">
			<input class="Button" type="button" OnClick="javascript: recordit();" value="    ”ÃÌ·«    "> 
			<input class="Button" type="button" OnClick="javascript: history.go(-1);" value="   —ÃÊ⁄   ">
	  </p>	  
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