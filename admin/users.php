<? include ("./test.php"); ?>
<?
	if (isset($act))
	{
		if ($act=="new")
		{
?>
			<html dir="rtl">
			<head>
			<title> ����� ������ - etubergan</title>
<? include ("head.php"); ?>	
					<script language="javascript">
					function validate()
					{
						if (!document.form1.user.value) 
						{
							alert("��� ����� ���� ��������");
							return false;
						}
						if (!document.form1.password.value) 
						{
							alert("��� ����� ���� ���� ��������");
							return false;
						}	
						if (document.form1.password.value != document.form1.confirm.value) 
						{
							alert("������ ������ �� ���� ������");
							return false;
						}	
						if (!document.form1.level.value) 
						{
							alert("��� ����� ������ ��������");
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
			 <a href="index.php">������ ��������</a> >> <a href="users.php">����� ����������</a> >> ����� ������
		</div><br> 
					<p align="center">����� ������</p>
				  <p> 
				  <form name="form1" method="post" action="add.php?type=user">
					<table width="75%" align="center" border="0" cellspacing="0">
					  <tr> 
            			<td class="td" ><strong>������:</strong></td>
						<td class="td" ><input name="user" type="text" id="user"></td>
					  </tr>
					  <tr> 
            			<td class="td" ><strong>���� ������:</strong></td>
						<td class="td" ><input name="password" type="password" id="password"></td>
					  </tr>		
					  <tr> 
            			<td class="td" ><strong>����� ���� ������:</strong></td>
						<td class="td" ><input name="confirm" type="password" id="confirm"></td>
					  </tr>						  
					  <tr> 
            			<td class="td" ><strong>�����:</strong></td>
						<td class="td" ><input name="first_name" type="text" id="first_name"></td>
					  </tr>
					  <tr> 
            			<td class="td" ><strong>�����:</strong></td>
						<td class="td" ><input name="last_name" type="text" id="last_name"></td>
					  </tr>
					  <tr> 
            			<td class="td" ><strong>����:</strong></td>
						<td class="td" ><input name="mobile" type="text" id="mobile" dir="ltr"> (00-00-00-000)</td>
					  </tr>
					  <tr> 
            			<td class="td" ><strong>������ ����������:</strong></td>
						<td class="td" ><input name="email" type="text" id="email"></td>
					  </tr>		
					  <tr> 
            			<td class="td" ><strong>�������:</strong></td>
						<td class="td"><select name="level" id="level">
							<option value=""></option>
							<option value="0">������</option>
							<option value="1">�� ������</option>
						</select></td>
					  </tr>							  
					</table>
					<p align="center"> 
					  <input class="Button" type="button" value="   �����   " onClick="javascript: return validate();"> 
					  <input class="Button" type="reset" value="   ���   "> 
					  <input class="Button" type="button" OnClick="javascript: history.go(-1);" value="   ����   ">
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
			<title> ����� - etubergan</title>
<? include ("head.php"); ?>	
					<script language="javascript">
					function validate()
					{
						if (!document.form1.password.value) 
						{
							alert("��� ����� ���� ���� ��������");
							return false;
						}	
						if (document.form1.password.value != document.form1.confirm.value) 
						{
							alert("������ ������ �� ���� ������");
							return false;
						}	
						if (!document.form1.level.value) 
						{
							alert("��� ����� ������ ��������");
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
			 <a href="index.php">������ ��������</a> >> <a href="users.php">����� ����������</a> >> �����
		</div><br> 
					<p align="center">�����</p>
				  <p> 
				  <form name="form1" method="post" action="update.php?type=user&user=<?=$user?>">
					<table width="75%" align="center" border="0" cellspacing="0">
					  <tr> 
            			<td class="td" ><strong>������:</strong></td>
						<td class="td" ><?=$user?>
					  </tr>
					  <tr> 
            			<td class="td" ><strong>���� ������:</strong></td>
						<td class="td" ><input name="password" type="password" id="password" value="<?=$password?>"></td>
					  </tr>		
					  <tr> 
            			<td class="td" ><strong>����� ���� ������:</strong></td>
						<td class="td" ><input name="confirm" type="password" id="confirm" value="<?=$password?>"></td>
					  </tr>						  
					  <tr> 
            			<td class="td" ><strong>�����:</strong></td>
						<td class="td" ><input name="first_name" type="text" id="first_name" value="<?=$first_name?>"></td>
					  </tr>
					  <tr> 
            			<td class="td" ><strong>�����:</strong></td>
						<td class="td" ><input name="last_name" type="text" id="last_name" value="<?=$last_name?>"></td>
					  </tr>
					  <tr> 
            			<td class="td" ><strong>����:</strong></td>
						<td class="td" ><input name="mobile" type="text" id="mobile" value="<?=$mobile?>" dir="ltr"> (00-00-00-000)</td>
					  </tr>
					  <tr> 
            			<td class="td" ><strong>������ ����������:</strong></td>
						<td class="td" ><input name="email" type="text" id="email" value="<?=$email?>"></td>
					  </tr>
						<? if (session_is_registered("super")) {?>
					  <tr> 
            			<td class="td" ><strong>�������:</strong></td>
						<td class="td"><select name="level" id="level">
							<option value=""></option>
							<option value="0" <? if ($level==0) print " selected";?>>������</option>
							<option value="1" <? if ($level==1) print " selected";?>>�� ������</option>
						</select></td>
					  </tr>		
					  <?}?>
					</table>
					<p align="center"> 
					  <input class="Button" type="button" value="   �����   " onClick="javascript: return validate();"> 
					  <input class="Button" type="reset" value="   ���   "> 
					  <input class="Button" type="button" OnClick="javascript: history.go(-1);" value="   ����   ">
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
						return confirm('�� ��� ����� �� ��� �')					
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
			 <a href="index.php">������ ��������</a> >>  <a href="users.php">����� ����������</a> >> ������ ������
		</div><br> 
				  <p align="center">������ ������</p>
				  <p> 
					<table width="75%" align="center" border="0" cellspacing="0">
					  <tr> 
						<td class="td" ><strong>��� ������:</strong></td>
						<td class="td" ><?=$user?></td>
					  </tr>					
					  <tr> 
						<td class="td" ><strong>�����:</strong></td>
						<td class="td" ><?=$first_name?></td>
					  </tr>
					  <tr> 
						<td class="td" ><strong>�����:</strong></td>
						<td class="td" ><?=$last_name?></td>
					  </tr>
					  <tr> 
						<td class="td" ><strong>����:</strong></td>
						<td class="td" dir="ltr" align="right"><?=$mobile?></td>
					  </tr>
					  <tr> 
						<td class="td" ><strong>������ ����������:</strong></td>
						<td class="td" ><a href="mailto:<?=$email?>"><?=$email?></a></td>
					  </tr>
					  <? if (session_is_registered("super")){?>
					  <tr> 
						<td class="td" ><strong>��������:</strong></td>
						<td class="td"><? if ($level==1) print "�� ������"; else print "������";?></td>
					  </tr>	
						<?}?>					  
					</table>
					</p>
					<p align=center>
					  <? if (session_is_registered("super")){?>
							<input class="Button" type="button" OnClick="javascript: redirect();" value="   ���   ">  
							<input class="Button" type="button" OnClick="javascript: editit();" value="   �����   "> 
							<input class="Button" type="button" OnClick="javascript: recordit();" value="   �����   "> 
						<?}?>
					<input class="Button" type="button" OnClick="javascript: history.go(-1);" value="   ����   ">
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
<title>����� ���������� - etubergan</title>
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
			 <a href="index.php">������ ��������</a> >> ����� ����������
		</div> <p align="center"><br>
       ����� ����������: 
	     <? if (session_is_registered("super")){?>
	   <input class="Button" type="button" OnClick="javascript: redirect();" value="   �����   "> </p>
	   <?}?>
      <p>
		<table border="1" align="center" width="80%" cellspacing="0">
			<tr>
				<th class="th" > ���� </th>
				<th class="th" > ����� � ����� </th>						
				<th class="th" > ������ ���������� </th>
				<th class="th" > ���� </th>	
				<? if (session_is_registered("super")){?>
					<th class="th" > �������� </th>	
					<th class="th" > ����� </th>
					<th class="th" > ����� </th>
				<?}?>				
				<th class="th" > ������ </th>
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
					<td class="td"><? if ($level==1) print "�� ������"; else print "������";?></td>
					<td class="td"><a href="users.php?act=edit&user=<?=$user?>">�����</a></td>					
					<td class="td"><a href="records.php?user=<?=$user?>">�����</a></td>	
				<?}?>							
				<td class="td" ><a href="users.php?act=view&user=<?=$user?>">������</a></td>
			</tr>	
			<?
				}
			?>	
		</table>
	  </p>
	  <p align="center">
	  <p align="center">
			<input class="Button" type="button" OnClick="javascript: recordit();" value="   �������   "> 
			<input class="Button" type="button" OnClick="javascript: history.go(-1);" value="   ����   ">
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